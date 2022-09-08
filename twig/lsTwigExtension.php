<?php
namespace Grav\Plugin;

use Grav\Common\Grav;
use Grav\Common\Plugin;
use Grav\Common\Twig\Extension\GravExtension;

class lsTwigExtension extends GravExtension
{
    public function getName()
    {
        return 'lsTwigExtension';
    }

    public function getFunctions(): array
    {
        return [
            new \Twig_SimpleFunction('ls', [$this, 'lsFunction'], array('is_safe' => array('html')))
        ];
    }
    public function lsFunction()
    {
        $template = $this->config->get('plugins.ls.template');
        return $output = $this->grav['twig']->twig()->render($template, ['page' => $this->grav['page']]);
    }

}