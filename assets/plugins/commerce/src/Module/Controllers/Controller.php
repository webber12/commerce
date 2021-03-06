<?php

namespace Commerce\Module\Controllers;

use Commerce\Module\Renderer;

class Controller implements \Commerce\Module\Interfaces\Controller
{
    protected $modx;
    protected $module;
    protected $view;

    public function __construct($modx, $module)
    {
        $this->modx = $modx;
        $this->module = $module;
        $this->view = new Renderer($modx, $module);
    }

    public function registerRoutes()
    {
        return [
            'index' => 'index',
        ];
    }

    public function index()
    {
        return '';
    }
}
