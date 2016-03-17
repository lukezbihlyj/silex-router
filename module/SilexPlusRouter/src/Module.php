<?php

namespace LukeZbihlyj\SilexRouter;

use Silex\Provider\UrlGeneratorServiceProvider;
use LukeZbihlyj\SilexPlus\Application;
use LukeZbihlyj\SilexPlus\ModuleInterface;
use MJanssen\Provider\RoutingServiceProvider;

/**
 * @package LukeZbihlyj\SilexRouter\Module
 */
class Module implements ModuleInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigFile()
    {
        return __DIR__ . '/../config/module.php';
    }

    /**
     * {@inheritDoc}
     */
    public function init(Application $app)
    {
        $this->register(new RoutingServiceProvider('router.routes'));
        $this->register(new UrlGeneratorServiceProvider());
    }
}
