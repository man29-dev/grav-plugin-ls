<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;

class LsPlugin extends Plugin
{
    /**
     * @return array
     *
     * The getSubscribedEvents() gives the core a list of events
     *     that the plugin wants to listen to. The key of each
     *     array section is the event that the plugin listens to
     *     and the value (in the form of an array) contains the
     *     callable (or function) as well as the priority. The
     *     higher the number the higher the priority.
     */
    public static function getSubscribedEvents(): array
    {
        return [
            'onTwigTemplatePaths' => ['onTwigTemplatePaths', 0],
            'onTwigExtensions' => ['onTwigExtensions', 0]
        ];
    }
    public function onTwigTemplatePaths()
    {
        $this->grav['twig']->twig_paths[] = __DIR__ . '/templates';
    }
    public function onTwigExtensions()
    {
        require_once(__DIR__ . '/twig/lsTwigExtension.php');
        $this->grav['twig']->twig->addExtension(new lsTwigExtension());
    }
}
