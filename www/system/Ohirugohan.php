<?php

class Ohirugohan {

  public function __construct() {}
  public function __destruct() {}

  protected function model ( $name ) {

    require_once __DIR__."../model/{$name}.php";
    $this->$name = new $name();
  }
}
