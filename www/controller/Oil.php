<?php

class Oil extends Ohirugohan {

    private $_data;

    function __construct( $name ) {
        $this->setData($name);
    }
    function setData($name) {
        $this->_data = $name;
    }
    function getData() {
        return $this->_data;
    }
}