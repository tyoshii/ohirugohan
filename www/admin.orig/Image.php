<?php
class Image
{
  private $_id;
  private $_title;

  public function __construct()
  {
    $this->_id = -1;
    $this->_title = '';
  }

  public function setId($id)
  {
    $this->_id = $id;
    return $this;
  }

  public function setTitle($title)
  {
    $this->_title = $title;
    return $this;
  }

  public function getId()
  {
    return $this->_id;
  }

  public function getTitle()
  {
    return $this->_title;
  }
}
