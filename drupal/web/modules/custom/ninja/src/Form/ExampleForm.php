<?php

namespace Drupal\ninja\Form;

use \Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class ExampleForm extends FormBase {
  public function getFormId() {
    return 'ninja_example_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['nome'] = [
      '#type' => 'textfield',
      '#title' => 'Il tuo nome',
      '#required' => TRUE,
    ];

    $form['submit'] = [
      '#type' => 'submit',
      '#value' => 'Invia i dati!',
    ];

    return $form;
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    \Drupal::messenger()->addMessage('Hai scritto ' . $form_state->getValue('nome'));
  }
}
