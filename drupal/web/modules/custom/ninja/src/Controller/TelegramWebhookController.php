<?php

namespace Drupal\ninja\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;
use Symfony\Component\HttpFoundation\JsonResponse;

class TelegramWebhookController extends ControllerBase {
  public function receive() {
    $content = \Drupal::request()->getContent();

    if (empty($content)) {
      return new JsonResponse([]);
    }

    $data = json_decode($content);

    if (empty($data) || empty($data->channel_post->text)) {
      return new JsonResponse([]);
    }

    if (preg_match('/^risposta (.+)$/i', $data->channel_post->text, $matches)) {
      $title = $matches[1];

      $node = Node::create([
        'type' => 'risposta',
      ]);

      $node->title = $title;
      $node->save();
    }

    return new JsonResponse([]);
  }
}
