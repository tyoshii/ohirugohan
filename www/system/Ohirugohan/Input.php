<?php

session_start();

class Ohirugohan_Input {

  private $_get;
  private $_post;
  private $_session;

  public function __construct() {
    $this->_get     = $_GET;
    $this->_post    = $_POST;
    $this->_session = $_SESSION;
  }
  public function __destruct() {}

  public function session ( $key = FALSE ) {
    return self::_take( $this->_session, $key );
  }

  public function get ( $key = FALSE ) {
    return self::_take( $this->_get, $key );
  }

  public function post ( $key = FALSE ) {
    return self::_take( $this->_post, $key );
  }
  
  private function _take( $data, $key ) {
    if ( $key === FALSE || ! array_key_exists($key, $data) ) return NULL;
    return $data[$key];
  }
    
}
