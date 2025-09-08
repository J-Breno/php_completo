<?php

namespace Source\App;

use Source\Core\Controller;

/**
 * Web Controller
 * @package Source\App
 */
class Web extends Controller
{
    /**
     *
     */
    public function __construct()
    {
        parent::__construct(__DIR__. "/../../themes/".CONF_VIEW_THEME."/");
    }

    /**
     * @return void
     */
    public function home(): void
    {
        echo $this->view->render("home", [
            "title" => "CaféControl - Gerencie suas compras com o melhor café",
        ]);
    }

    /**
     * @param array $data
     * @return void
     */
    public function error(array $data): void
    {
        echo $this->view->render("error", [
            "title" => "{$data['errcode']} | Ooops!",]);
    }
}