<?php

namespace Drupal\ninja\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;
use Symfony\Component\HttpFoundation\JsonResponse;

class ExampleController extends ControllerBase {
  public function html() {
    return [
      '#markup' => 'Controller che eroga html semplice!',
    ];
  }

  public function json() {
    $query = \Drupal::entityQuery('node')
      ->accessCheck(FALSE)
      ->condition('type', 'article')
      ->condition('status', Node::PUBLISHED);

    $ids = $query->execute();

    $items = [];

    if (!empty($ids)) {
      $nodes = Node::loadMultiple($ids);

      foreach ($nodes as $node) {
        $items[] = [
          'id' => $node->id(),
          'title' => $node->label(),
        ];
      }
    }

    return new JsonResponse($items);
  }
}
