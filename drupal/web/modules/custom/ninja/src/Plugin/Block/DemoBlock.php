<?php

namespace Drupal\ninja\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Realizza il blocco di dimostrazione.
 *
 * @Block(
 *   id = "ninja_demo_block",
 *   admin_label = "Blocco di dimostrazione Umana Academy",
 * )
 */
class DemoBlock extends BlockBase {
  function build() {
    $result = \Drupal::httpClient()->get('https://raw.githubusercontent.com/italia/covid19-opendata-vaccini/master/dati/anagrafica-vaccini-summary-latest.json');

    $content = $result->getBody()->getContents();

    $json = json_decode($content, TRUE);

    $build = [];

    $rows = [];

    foreach ($json['data'] as $item) {
      if (!empty($this->configuration['fascia_eta'])) {
        if ($this->configuration['fascia_eta'] == $item['fascia_anagrafica']) {
          $rows[] = [$item['fascia_anagrafica'], $item['totale']];
        }
      }
      else {
        $rows[] = [$item['fascia_anagrafica'], $item['totale']];
      }
    }

    $header = [
      'fascia_anagrafica' => 'Fascia anagrafica',
      'totale' => 'Totale',
    ];

    $build['sopra'] = [
      '#markup' => !empty($this->configuration['fascia_eta']) ? 'Fascia d\'età: ' . $this->configuration['fascia_eta'] : 'Tutte le fasce',
    ];

    $build['table'] = [
      '#type' => 'table',
      '#header' => $header,
      '#rows' => $rows,
      '#empty' => 'Nessun valore corrispondente!',
    ];

    $build['dopo'] = [
      '#markup' => 'Dopo la tabella!',
    ];

    return $build;
  }

  public function blockForm($form, FormStateInterface $form_state) {
    $form['fascia_eta'] = [
      '#type' => 'textfield',
      '#title' => 'Fascia d\'età',
      '#description' => 'Lasciare vuoto per mostrare tutte le fasce d\'età',
      '#default_value' => isset($this->configuration['fascia_eta']) ? $this->configuration['fascia_eta'] : '',
    ];

    return $form;
  }

  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['fascia_eta'] = $form_state->getValue('fascia_eta');
  }
}
