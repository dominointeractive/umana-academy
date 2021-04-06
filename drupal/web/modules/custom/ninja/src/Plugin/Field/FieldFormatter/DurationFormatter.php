<?php

namespace Drupal\ninja\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;

/**
 * Implementazione del field formatter "Durata".
 *
 * @FieldFormatter(
 *   id = "ninja_duration_formatter",
 *   label = "Durata",
 *   field_types = {
 *    "integer"
 *   }
 * )
 */
class DurationFormatter extends FormatterBase {
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $durate = [];

    foreach ($items as $item) {
      $value = $item->value;

      if ($value) {
        $durate[] = \Drupal::service('date.formatter')->formatInterval($value * 60);
      }
    }

    $elements = [
      '#markup' => join(', ', $durate),
    ];

    return $elements;
  }
}
