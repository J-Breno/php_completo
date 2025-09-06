<?php

namespace Source\Core;

use Source\Support\Seo;

/**
 * FSPHP | Class Controller
 *
 * @author João Breno <brenojoao@2222gmail.com>
 * @package Source\Core
 */
class Controller
{
    protected $view;
    protected $seo;

    public function __construct(string $pathToViews = null)
    {
        $this->view = new View($pathToViews);
        $this->seo = new Seo();
    }
}