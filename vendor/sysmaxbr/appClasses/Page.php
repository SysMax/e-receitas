<?php

namespace SysMax;
use Rain\Tpl;

/**
 * Classe Page, informações referentes ao Template de nosso projeto.
 *
 * @author Wesley Fernando Mendonça.
 * @copyright (c) 2019, SysMax - Sistemas Web.
 * 
 */
class Page {
    private $tpl;
    private $options;
    private $defaults = [
    "data" => []
    ];

    public function __construct($opts = array()) {
        $this->options = array_merge($this->defaults, $opts);

        $config = array(
            "tpl_dir" => $_SERVER["DOCUMENT_ROOT"]."/SysMax/e-Receitas/views/",
             "cache_dir" => $_SERVER["DOCUMENT_ROOT"]."/SysMax/e-Receitas/views-cache/",
             "debug" => FALSE
            );

        Tpl::configure($config);

        $this->tpl = new Tpl;

        $this->setData($this->options["data"]);

        $this->tpl->draw("header");

    }

    private function setData($data = array()){
        foreach ($data as $key => $value) {
            $this->tpl->assign($key, $value);
        }
    }

    public function setTpl($name, $data = array(), $returnHTML = false) {
        $this->setData($data);
        return $this->tpl->draw($name, $returnHTML);
    }

    public function __destruct() {
        $this->tpl->draw("footer");
    }
}
