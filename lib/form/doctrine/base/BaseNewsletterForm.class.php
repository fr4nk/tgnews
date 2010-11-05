<?php

/**
 * Newsletter form base class.
 *
 * @method Newsletter getObject() Returns the current form's model object
 *
 * @package    tgnews
 * @subpackage form
 * @author     Frank Mattes
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseNewsletterForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'user_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => false)),
      'text'         => new sfWidgetFormTextarea(),
      'headline'     => new sfWidgetFormInputText(),
      'ist_gesendet' => new sfWidgetFormInputCheckbox(),
      'beschreibung' => new sfWidgetFormInputText(),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'user_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('User'))),
      'text'         => new sfValidatorString(array('max_length' => 500)),
      'headline'     => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'ist_gesendet' => new sfValidatorBoolean(array('required' => false)),
      'beschreibung' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'   => new sfValidatorDateTime(),
      'updated_at'   => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('newsletter[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Newsletter';
  }

}
