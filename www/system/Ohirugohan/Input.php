<?php

class Ohirugohan_Input {

  private $_get;
  private $_post;

  public function __construct() {
    $this->_get  = $_GET;
    $this->_post = $_POST;
  }
  public function __destruct() {}

  public function get ( $key = FALSE ) {
    return _take( $this->_get, $key );
  }

  private function _take( $data, $key ) {
    if ( $key === FALSE || ! array_key_exists($key, $data) ) return NULL;
    return $data[$key];
  }
    
  public function post ( $key = FALSE ) {
    return _take( $this->_post, $key );
  }
}
