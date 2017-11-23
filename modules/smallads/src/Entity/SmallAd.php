<?php

/**
 * @file
 * Contains \Drupal\smallads\Entity\SmallAd.
 *
 */

namespace Drupal\smallads\Entity;

use Drupal\user\EntityOwnerInterface;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\user\UserInterface;
use Drupal\Core\Datetime\DrupalDateTime;

/**
 * Defines the SmallAd entity.
 *
 * @ContentEntityType(
 *   id = "smallad",
 *   label = @Translation("Small Ad"),
 *   handlers = {
 *     "storage" = "Drupal\smallads\SmallAdStorage",
 *     "view_builder" = "Drupal\smallads\SmallAdViewBuilder",
 *     "access" = "Drupal\smallads\SmallAdAccessControlHandler",
 *     "form" = {
 *       "default" = "Drupal\smallads\Form\SmallAdEdit",
 *       "edit" = "Drupal\smallads\Form\SmallAdEdit",
 *       "delete" = "Drupal\smallads\Form\SmallAdDeleteConfirm",
 *     },
 *     "views_data" = "Drupal\smallads\SmallAdViewsData",
 *     "route_provider" = {
 *       "html" = "Drupal\smallads\Entity\SmallAdRouteProvider",
 *     },
 *   },
 *   admin_permission = "configure smallads",
 *   base_table = "smallad",
 *   data_table = "smallad_field_data",
 *   translatable = TRUE,
 *   entity_keys = {
 *     "id" = "smid",
 *     "uuid" = "uuid",
 *     "label" = "title",
 *     "langcode" = "langcode",
 *     "bundle" = "type"
 *   },
 *   bundle_entity_type = "smallad_type",
 *   field_ui_base_route = "entity.smallad_type.edit_form",
 *   translatable = TRUE,
 *   links = {
 *     "canonical" = "/ad/{smallad}",
 *     "edit-form" = "/ad/{smallad}/edit",
 *     "delete-form" = "/ad/{smallad}/delete",
 *     "collection" = "/admin/content/smallads",
 *   }
 * )
 */
class SmallAd extends ContentEntityBase implements SmallAdInterface, EntityOwnerInterface {

  //these are all the scope's we'll likely ever need
  const SCOPE_PRIVATE = 0; //like an unpublished node
  const SCOPE_OG = 1;//visible to members of the same groups as the Owner
  const SCOPE_SITE = 2;//visible to anyone on the same (Drupal) site
  const SCOPE_NETWORK = 3;//visble to members of other sites via an API
  const SCOPE_PUBLIC = 4;//visible to strangers

  /**
   * {@inheritdoc}
   */
  public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {
    $fields = parent::baseFieldDefinitions($entity_type);
    $fields['langcode'] = BaseFieldDefinition::create('language')
      ->setLabel(t('Language'))
      ->setDescription(t('The node language code.'))
      ->setTranslatable(TRUE)
      ->setRevisionable(TRUE)
      ->setDisplayOptions('view', [
        'type' => 'hidden',
      ])
      ->setDisplayOptions('form', [
        'type' => 'language_select',
        'weight' => 2,
      ]);

    $fields['type'] = BaseFieldDefinition::create('entity_reference')
      ->setLabel(t('Type of small ad'))
      ->setDescription(t('E.g. offer, want'))
      ->setSetting('target_type', 'smallad_type')
      ->setReadOnly(TRUE);

    $fields['title'] = BaseFieldDefinition::create('string')
      ->setLabel(t('Title'))
      ->setDescription(t('One line description'))
      ->setRequired(TRUE)
      ->setTranslatable(TRUE)
      ->setDisplayConfigurable('form', TRUE);

    $fields['body'] = BaseFieldDefinition::create('text_long')
      ->setLabel(t('Tell the story behind this ad.'))
      ->setRequired(FALSE)
      ->setTranslatable(TRUE)
      ->setSettings(['default_value' => ''])
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayConfigurable('view', TRUE);

    $fields['uid'] = BaseFieldDefinition::create('entity_reference')
      ->setLabel(t('Posted by'))
      ->setDescription(t('The owner of the small ad'))
      ->setRevisionable(FALSE)
      ->setSetting('target_type', 'user')
      ->setDefaultValueCallback('Drupal\node\Entity\Node::getCurrentUserId')
      ->setTranslatable(TRUE)
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayConfigurable('view', TRUE)
      ->setDisplayOptions('view',[
        'label' => 'hidden',
        'type' => 'author',
        'weight' => 0,
      ])
      ->setDisplayOptions('form', [
        'type' => 'entity_reference_autocomplete',
        'weight' => 5,
        'settings' => [
          'match_operator' => 'CONTAINS',
          'size' => '60',
          'placeholder' => '',
        ],
      ]);

    $fields['created'] = BaseFieldDefinition::create('created')
      ->setLabel(t('Authored on'))
      ->setDescription(t('The time that the ad was created.'))
      ->setDisplayOptions('view', array(
        'label' => 'inline',
        'type' => 'timestamp',
        'weight' => 10,
      ))
      ->setDisplayConfigurable('view', TRUE);

    $fields['changed'] = BaseFieldDefinition::create('changed')
      ->setLabel(t('Last changed'))
      ->setDescription(t('When the ad was last saved.'))
      ->setRevisionable(FALSE)
      ->setTranslatable(FALSE)
      ->setDisplayConfigurable('view', TRUE);

    $fields['scope'] = BaseFieldDefinition::create('integer')
      ->setLabel(t('Scope'))
      ->setDescription(t('How far afield this ad can be seen'))
      ->setSetting('min', SELF::SCOPE_PRIVATE)
      ->setSetting('max', SELF::SCOPE_PUBLIC)
      ->setDisplayConfigurable('form', TRUE)
      ->setDefaultValue(SELF::SCOPE_SITE)
      ->setRequired(TRUE);

    //this depends on the datetime module
    $fields['expires'] = BaseFieldDefinition::create('timestamp')
      ->setLabel(t('Expires on'))
      ->setDescription(t('The ad scope reverts to private on this date'))
      ->setRevisionable(FALSE)
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayOptions('form', [
        'type' => 'datetime_timestamp',
        'weight' => 10,
      ])
      ->setSetting('datetime_type', 'date')
      ->setDefaultValueCallback('Drupal\smallads\Entity\SmallAd::expiresDefault')
      ->setTranslatable(FALSE)
      ->setRequired(TRUE);

    return $fields;
  }

  /**
   * {@inheritdoc}
   */
  public function getOwner() {
    return $this->get('uid')->entity;
  }

  /**
   * {@inheritdoc}
   */
  public function getOwnerId() {
    return $this->get('uid')->target_id;
  }

  /**
   * {@inheritdoc}
   */
  public function setOwnerId($uid) {
    $this->set('uid', $uid);
    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function setOwner(UserInterface $account) {
    $this->set('uid', $account->id());
    return $this;
  }

  public static function expiresDefault(){//mtrace();
    $interval = \Drupal::config('smallads.settings')->get('default_expiry');
    //$values['expires'] = ['year'=> 1980, 'month'=> 8, 'day' => 8];//this isEmpty, unfortunately
    //$values['expires'] = '1999-9-9';//still not working...
    //return strtotime(\Drupal::config('smallads.settings')->get('default_expiry'));
    $dateTime = DrupalDateTime::createFromTimestamp(strtotime($interval));
    return strtotime($dateTime);
  }

  function expire() {
    //there might be an option on notification somewhere?
    $this->scope->value = SMALLAD_SCOPE_PRIVATE;
    $this->save();
    $account = $this->getOwner();
    //@todo test the expiry mail
    drupal_mail(
      'smallads',
      'expired',
      $account->getMail(),
      user_preferred_language($account),
      ['ad' => $ad, 'owner' => $account]
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getChangedTime() {
    return $this->get('changed')->value;
  }

  //@todo sort this out with permissions
  public static function getScopes($include_private = TRUE) {
    $scopes = [];
    if ($include_private) {
      $scopes[Smallad::SCOPE_PRIVATE] = t('Owner only');
    }
    if (\Drupal::moduleHandler()->moduleExists('og')) {
      $scopes[Smallad::SCOPE_OG] = t('Members of my groups');
    }
    $scopes[Smallad::SCOPE_SITE] = t('This site');
    //$scopes[Smallad::SCOPE_NETWORK] = $this->t('Network');
    $scopes[Smallad::SCOPE_PUBLIC] = t('Anyone');
    return $scopes;
  }

}
