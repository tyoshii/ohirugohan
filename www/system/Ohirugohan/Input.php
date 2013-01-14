<?php

class Ohirugohan_Input {

  private $_get;
  private $_post;

  public function __construct() {
    $this->_get  = $_GET;
    $this->_post = $_POST;
  }
  public function __destruct() {}

  function get ( $key = FALSE ) {
    if ( $key === FALSE ) return NULL;
    
    $get = $this->_get;
    return $get[$key];
  }

  function post ( $key = FALSE ) {
    if ( $key === FALSE ) return NULL;
    
    $post = $this->_post;
    return $post[$key];
  }
}
