<?php

/**
 * @file
 * Contains \Drupal\smallads\Plugin\DevelGenerate\SmalladDevelGenerate.
 */

namespace Drupal\smallads\Plugin\DevelGenerate;

use Drupal\smallads\Entity\SmallAdType;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\devel_generate\DevelGenerateBase;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides a DevelGenerate plugin.
 *
 * @DevelGenerate(
 *   id = "smallad",
 *   label = @Translation("smallads"),
 *   description = @Translation("Generate a given number of smallads.."),
 *   url = "smallad",
 *   permission = "administer devel_generate",
 *   settings = {
 *     "num" = 100,
 *     "kill" = TRUE
 *   }
 * )
 */
class SmalladDevelGenerate extends DevelGenerateBase implements ContainerFactoryPluginInterface {
  /**
   * The smallad storage.
   *
   * @var \Drupal\Core\Entity\EntityStorageInterface
   */
  protected $smalladStorage;

  /**
   * The module handler.
   *
   * @var \Drupal\Core\Extension\ModuleHandlerInterface
   */
  protected $moduleHandler;

  protected $users;

  public function __construct(array $configuration, $plugin_id, array $plugin_definition, $entity_type_manager, $module_handler) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->moduleHandler = $module_handler;
    $this->smalladStorage = $entity_type_manager->getStorage('smallad');
    $this->users = $entity_type_manager->getStorage('user')->loadByProperties(['status' => TRUE]);
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration, $plugin_id, $plugin_definition,
      $container->get('entity_type.manager'),
      $container->get('module_handler')
    );
  }

  /**
   * {@inheritdoc}
   */
  public function settingsForm(array $form, FormStateInterface $form_state) {
    $form['kill'] = array(
      '#type' => 'checkbox',
      '#title' => $this->t('<strong>Delete all smallads</strong> before generating new content.'),
      '#default_value' => $this->getSetting('kill'),
    );
    $form['num'] = array(
      '#type' => 'number',
      '#title' => $this->t('How many smallads would you like to generate?'),
      '#default_value' => $this->getSetting('num'),
      '#required' => TRUE,
      '#min' => 0,
    );
    $types = array_keys(SmallAdType::loadMultiple());
    $form['type'] = array(
      '#title' => $this->t('Type'),
      '#type' => 'select',
      '#options' => ['' => '- '. 'Mixed' .'-'] + $types,
      '#default_value' => $this->getSetting('type'),
      '#min' => 0,
    );
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  protected function generateElements(array $values) {
    if ($values['num'] <= 50) {
      $this->generateContent($values);
    }
    else {
      $this->generateBatchContent($values);
    }
  }

  /**
   * Method responsible for creating a small number of smallads
   *
   * @param type $values
   *   kill, num, since
   * @throws \Exception
   */
  private function generateContent($values) {
    if (!empty($values['kill'])) {
      $this->contentKill($values);
    }
    $this->since = $values['since'] ?: strtotime('-1 year');

    for ($i = 1; $i <= $values['num']; $i++) {
      $this->develGenerateSmalladAdd($results, $this->getSetting('type'));
    }
    if (function_exists('drush_log') && $i % drush_get_option('feedback', 1000) == 0) {
      drush_log(dt('Completed @feedback smallads ', ['@feedback' => drush_get_option('feedback', 1000)], 'ok'));
    }

    $this->setMessage($this->formatPlural($values['num'], '1 smallad created.', 'Finished creating @count smallads'));
  }

  /**
   * Method responsible for creating content when
   * the number of elements is greater than 50.
   */
  private function generateBatchContent($values) {
    // Add the kill operation.
    if ($values['kill']) {
      $operations[] = ['devel_generate_operation', [$this, 'batchContentKill', $values]];
    }
    $total = $values['num'];
    $values['num'] = 100;
    // Add the operations to create the transactions.
    for ($num = 0; $num < floor($total/100); $num ++) {
      $operations[] = ['devel_generate_operation', [$this, 'batchContentAddSmallads', $values]];
    }
    $values['num'] = $total%100;
    $operations[] = ['devel_generate_operation', [$this, 'batchContentAddSmallads', $values]];

    // Start the batch.
    $batch = [
      'title' => $this->t('Generating Small ads'),
      'operations' => $operations,
      'finished' => 'devel_generate_batch_finished',
      'file' => drupal_get_path('module', 'devel_generate') . '/devel_generate.batch.inc',
    ];
    batch_set($batch);
  }

  /**
   * batch callback
   */
  public function batchContentAddSmallads($vars, &$context) {
    $this->since = $vars['since'];
    $i = 0;
    \Drupal::logger('Small ads')->debug(print_r($context, 1));

    while($i < $vars['num']) {
      $this->develGenerateSmalladAdd($context['results'], $vars['type']);
      $i++;
    }
  }

  public function batchContentKill($vars, &$context) {
    $this->contentKill($context['results']);
  }

  /**
   * {@inheritdoc}
   */
  public function validateDrushParams($args) {
    $values['kill'] = drush_get_option('kill');
    $values['type'] = drush_get_option('type');
    $values['num'] = array_shift($args);
    return $values;
  }

  /**
   * Deletes all smallads .
   *
   * @param array $values
   *   The input values from the settings form.
   */
  protected function contentKill($values) {
    $smallads = \Drupal\smallads\Entity\SmallAd::loadMultiple();

    if (!empty($smallads)) {
      $this->smalladStorage->delete($smallads);
      $this->setMessage($this->t('Deleted %count smallads.', array('%count' => count($smallads))));
    }
  }

  /**
   * Create one smallad. Used by both batch and non-batch code branches.
   */
  protected function develGenerateSmalladAdd(&$results, $type = NULL) {
    if (!$type) {
      $types = array_keys(SmallAdType::loadMultiple());
      $type = $types[rand(0, count($types)-1)];
    }

    $first = ['A very nice', 'A nearly expired', 'A French', 'A traditional', 'An organic', 'Jewish', 'Refurbished', 'Beautiful', 'Hand-crafted', 'Antique', 'High-powered', '', ''];
    $second = ['porcelaine', 'green', 'unwanted', 'licenced', 'brown', 'underwater', 'fried', 'stress-tested', 'double-loaded', 'ex-rental', 'gelatinous'];
    $third = ['dragon', 'antique', 'dolly', 'buffet', 'ballet lessons', 'donkey', 'ladder', 'mp3 player', 'widgets', 'armistice', '', ''];
    $fourth = ['from the orient.', 'in need of repair.', 'unwanted gift.', ' in perfect condition.', 'for hire.', 'latest model!', '', '', ''];

    $props = [
      'type' => $type,
      'title' => $first[array_rand($first)] .' '.$second[array_rand($second)] .' '.$third[array_rand($third)] .' '.$fourth[array_rand($fourth)],
      'body' => $this->getRandom()->paragraphs(2),
      'uid' => $this->randomUid()
    ];
    $smallad = \Drupal\smallads\Entity\SmallAd::create($props);
    $smallad->created->value = rand($this->since, REQUEST_TIME);
    // Populate all fields with sample values.
    $this->populateFields($smallad);
    $smallad->save();
    if ($smallad->getFieldDefinition('comments')) {
      $this->addComments($smallad);
    }
  }

  private function randomUid() {
    $uids = array_keys($this->users);
    return $uids[array_rand($uids)];
  }

  /**
   * Create comments and add them to a smallad.
   *
   * @param \Drupal\smallads\Entity\SmalladInterface $smallad
   *   Smallad to add comments to.
   */
  function addComments(\Drupal\smallads\Entity\SmallAdInterface $smallad) {
    $parents = array();
    $num_comments = mt_rand(1, 3);
    for ($i = 1; $i <= $num_comments; $i++) {
      switch ($i % 3) {
        case 0:
          // No parent.
        case 1:
          // Top level parent.
          $parents = \Drupal::entityQuery('comment')
            ->condition('pid', 0)
            ->condition('entity_id', $smallad->id())
            ->condition('entity_type', 'smallad')
            ->condition('field_name', 'comments')
            ->range(0, 1)
            ->execute();
          break;
        case 2:
          // Non top level parent.
          $parents = \Drupal::entityQuery('comment')
            ->condition('pid', 0, '>')
            ->condition('entity_id', $smallad->id())
            ->condition('entity_type', 'smallad')
            ->condition('field_name', 'comments')
            ->range(0, 1)
            ->execute();
          break;
      }
      $random = new \Drupal\Component\Utility\Random();
      $stub = array(
        'entity_type' => 'smallad',
        'entity_id' => $smallad->id(),
        'comment_type' => 'smallad',
        'field_name' => 'comments',
        'created' => mt_rand($smallad->get('created')->value, REQUEST_TIME),
        'title' => substr($random->sentences(mt_rand(2, 6), TRUE), 0, 63),
        'uid' => $this->users[array_rand($this->users)]->id(),
        'langcode' => $smallad->language()->getId(),
      );
      if ($parents) {
        $stub['pid'] = current($parents);
      }
      $comment = \Drupal\comment\Entity\Comment::create($stub);

      //Populate all core fields on behalf of field.module
      DevelGenerateBase::populateFields($comment);
      $comment->setFieldname('comments');
      $comment->entity_type->value = 'smallad';
      $comment->entity_id->value = $smallad->id();

      //TEMP diagnostics
      if (!$comment->getCommentedEntity()) {
        \Drupal::logger('smalladcomment')->debug(print_R($stub, 1));
        \Drupal::logger('smalladEntity')->debug(print_R($comment->toArray(), 1));
        return;
      }
      if ($comment->getCommentedEntity()->bundle() != 'smallad') {
        \Drupal::logger('smalladpage')->debug(print_R($comment->toArray(), 1));
        return;
      }

      $comment->save();
    }
  }

}
