<?php

namespace Drupal\conference_api\PathProcessor;

use Drupal\Core\PathProcessor\InboundPathProcessorInterface;
use Symfony\Component\HttpFoundation\Request;

class PathProcessor implements InboundPathProcessorInterface {
  public function processInbound($path, Request $request) {
    if (0 === strpos($path, '/api')) {
      $request->query->set('api_path', $path);

      return '/api';
    }

    return $path;
  }

}
