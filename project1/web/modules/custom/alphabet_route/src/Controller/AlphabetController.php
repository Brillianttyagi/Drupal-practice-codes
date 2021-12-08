<?php
namespace Drupal\alphabet_route\Controller;

use Symfony\Component\HttpFoundation\Request;   
use Symfony\Component\HttpFoundation\Response;
class AlphabetController {
  public function route(string $alphabet,Request $request) {
    $node_storage = \Drupal::entityTypeManager()->getStorage('node');
    $query = \Drupal::entityQuery('node')
    ->condition('type','book')
    ->condition('title', $alphabet . "%", 'LIKE');
    $ans = $query->execute();
    $nodes = $node_storage->loadMultiple($ans);
    $number = count($nodes);
    if ($number ==0){
      return new Response('Not Found');
    }
    foreach ($nodes as $n){
      echo $n->title->value;
      echo '<br>';
    }
    $response = new Response();
    return $response;
  }
}

