<?php
namespace Drupal\alphabet_route\Controller;
use Symfony\Component\HttpFoundation\Response;

class PageController{
  public function display(){
    return array(
        '#markup' => '
        <h1>Click on links</h1>
        
        <a href="/project1/web/alphabet/a">A</a>
        <br>
        <a href="/project1/web/alphabet/b">B</a>
        <br>
        <a href="/project1/web/alphabet/c">C</a>
        <br>
        <a href="/project1/web/alphabet/d">D</a>
        <br>
        <a href="/project1/web/alphabet/e">E</a>
        <br>
        <a href="/project1/web/alphabet/f">F</a>
        <br>
        <a href="/project1/web/alphabet/g">G</a>
        <br>
        <a href="/project1/web/alphabet/h">H</a>
        <br>
        <a href="/project1/web/alphabet/i">I</a>
        <br>
        <a href="/project1/web/alphabet/j">J</a>
        <br>
        <a href="/project1/web/alphabet/k">K</a>
        <br>
        <a href="/project1/web/alphabet/l">L</a>
        <br>
        <a href="/project1/web/alphabet/m">M</a>
        <br>
        <a href="/project1/web/alphabet/n">N</a>
        <br>
        <a href="/project1/web/alphabet/o">O</a>
        <br>
        <a href="/project1/web/alphabet/p">P</a>
        <br>
        <a href="/project1/web/alphabet/q">Q</a>
        <br>
        <a href="/project1/web/alphabet/r">R</a>
        <br>
        <a href="/project1/web/alphabet/s">S</a>
        <br>
        <a href="/project1/web/alphabet/t">T</a>
        <br>
        <a href="/project1/web/alphabet/u">U</a>
        <br>
        <a href="/project1/web/alphabet/v">V</a>
        <br>
        <a href="/project1/web/alphabet/w">W</a>
        <br>
        <a href="/project1/web/alphabet/x">X</a>
        <br>
        <a href="/project1/web/alphabet/y">Y</a>
        <br>
        <a href="/project1/web/alphabet/z">Z</a>
        <br>
        
        '
    );
        
  }
}