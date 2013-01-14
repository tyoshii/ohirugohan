<?php

  class Image extends Ohirugohan {

    public function __construct() {
      $this->database( 'common' );
    }
    public function __destruct() {}

    public function getImageMeta ( $param ) {
      $result = $this->db->query( 'SELECT * FROM META' );
      var_dump( $result );

      return $result;
    }

    public function insertImage ( $path, $title, $category ) {

      // -- upload file to storage
      $param = array( 'resource' => "@{$path}" );
      $ch = curl_init();
      curl_setopt( $ch, CURLOPT_HEADER, 0 );
      curl_setopt( $ch, CURLOPT_RETURNTRANSFER, TRUE );
      curl_setopt( $ch, CURLOPT_URL, 'http://www15205ue.sakura.ne.jp/api' );
      curl_setopt( $ch, CURLOPT_POST, TRUE );
      curl_setopt( $ch, CURLOPT_POSTFIELDS, $post );

      $res = curl_exec($ch);
      var_dump( $res );

      // -- insert META 
      $sql = 'INSERT INTO META ( Id, Title, Suffix, Category ) VALUES ( ?, ?, ? )';
      $bind = array( $res, $title, pathinfo($path, PATHINFO_EXTENSION ), $category );
      $this->db->qeury( $sql, $bind );

      
    }
  }
