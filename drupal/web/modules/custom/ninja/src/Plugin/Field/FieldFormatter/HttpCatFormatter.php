<?php

namespace Drupal\ninja\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;

/**
 * Implementazione del field formatter "Http Cat".
 *
 * @FieldFormatter(
 *   id = "ninja_httpcat_formatter",
 *   label = "Http Cat",
 *   field_types = {
 *    "integer"
 *   }
 * )
 */
class HttpCatFormatter extends FormatterBase {
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $elements = [];

    foreach ($items as $item) {
      $value = $item->value;

      if ($value) {
        $elements[] = [
          '#type' => 'html_tag',
          '#tag' => 'img',
          '#attributes' => [
            'src' => 'https://http.cat/' . $value,
          ],
        ];
      }
    }

    return $elements;
  }
}
