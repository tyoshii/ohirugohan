<?php

class Illust extends Ohirugohan {

    private $_data;
    private $_category;

    /*
     * @request array('category'=>'oil','image'=>'kuru')
     */
    function __construct( $request) {
        //$image = new Image();
        //$image_list = $image->getImageMeta();
        $image_list = array();
        $image_list['0'] = array('name'=>'kuru','title'=>'苦しくても忘れずにいること');
        $image_list['1'] = array('name'=>'ishi','title'=>'意思');
        $image_list['2'] = array('name'=>'busstop','title'=>'バス停');
        $this->setData($image_list);
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
