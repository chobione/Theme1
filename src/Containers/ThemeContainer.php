<?php
namespace Theme1\Containers;
use Plenty\Plugin\Templates\Twig;

class ThemeContainer
{
  public function call(Twig $twig):string
  {
    return $twig->render('Theme1::content.Theme');
  }
}
 ?>
