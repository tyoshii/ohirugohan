<?php

  class Image extends Ohirugohan {

    public function __construct() {}
    public function __destruct() {}

    public function getImageList ( $type ) {

      $this->database( 'common' );
  
      $result = $this->db->query( 'DESC META' );
      var_dump( $result );

      echo $type;
    }
  }
