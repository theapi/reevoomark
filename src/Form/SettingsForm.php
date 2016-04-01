<?php

/**
 * @file
 * Contains Drupal\reevoomark\Form\SettingsForm.
 */

namespace Drupal\reevoomark\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class SettingsForm.
 *
 * @package Drupal\reevoomark\Form
 */
class SettingsForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'reevoomark.settings',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'settings_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('reevoomark.settings');
    $form['retailer_id'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Retailer id'),
      '#description' => $this->t('The Retailer Id associated with your <a href="http://www.reevoo.com">Reevoo</a> account.'),
      '#maxlength' => 64,
      '#size' => 64,
      '#default_value' => $config->get('retailer_id'),
    ];
    $form['cache_age'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Cache age'),
      '#description' => $this->t('How long, in seconds, documents can be kept in cache'),
      '#maxlength' => 64,
      '#size' => 64,
      '#default_value' => $config->get('cache_age'),
    ];
    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    parent::submitForm($form, $form_state);

    $this->config('reevoomark.settings')
      ->set('retailer_id', $form_state->getValue('retailer_id'))
      ->set('cache_age', $form_state->getValue('cache_age'))
      ->save();
  }

}
