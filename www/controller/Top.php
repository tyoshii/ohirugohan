<?php

class Top extends Ohirugohan {

    private $_data;

    function __construct( $name ) {
        $this->setData($name);

        $this->model( 'Image' );
        $this->Image->getImageList( 'type' );
    }
    function setData($name) {
        $this->_data = $name;
    }
    function getData() {
        return $this->_data;
    }
}
