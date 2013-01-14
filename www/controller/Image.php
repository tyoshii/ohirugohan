<?php

class Image extends Ohirugohan {

    public function __construct() {
      
      // -- valid
      if ( $_FILES['resource']['tmp_name']

      $id   = time();
      $root = '/var/www/images';
      $dir  = $root.'/'.substr( $id, 0, 4 );
      $file = $dir. '/'.substr( $id, 5, 8 );

      @mkdir( $dir );
      rename $_FILES['resource']['tmp_name'], $file;

      echo $id;
    }
    function getData() {
    }
}
