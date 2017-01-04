<?php

namespace App;

class View
{
    protected $data = [];

    public function assign($name, $value)
    {
        return $this->data[$name] = $value;
    }

    public function display($template)
    {
        foreach ($this->data as $key => $value) {
            ${$key} = $value;
        }
        include $template;
    }
}