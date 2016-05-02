<?php
/**
 * Created by Canan Etaigbenu
 * User: canaan5
 * Date: 3/26/16
 * Time: 9:33 PM.
 */

namespace Innovating\Provider;

use Innovating\DIC\Container;

abstract class ServiceProvider
{
    /**
     * The application instance.
     *
     * @var \Innovating\Application
     */
    protected $app;

    /**
     * Create a new service provider instance.
     *
     * @param \Innovating\Application $app
     */
    public function __construct($app = null)
    {
        $this->app = $app ?: Container::getInstance();
    }

    /**
     * Register a service provider.
     */
    abstract public function register();
}
