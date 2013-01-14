<?php

class admin extends Ohirugohan {

    private $_data;
    private $_category;

    /*
     * @request array('category'=>'oil','image'=>'kuru')
     */
    function __construct() {
var_dump($request);
    }
    function setData($image_list) {
        $this->_data = $image_list;
    }
    function getData() {
        return $this->_data;
    }
    function setCategory($category) {
        $this->_category = $category;
    }
    function getCategory() {
        return $this->_category;
    }
}
