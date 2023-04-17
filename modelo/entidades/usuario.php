<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/lib/config.php';

Class Usuario extends ActiveRecord\Model{

  //public static $PRIMARY = 'cc';
  public static $has_many = array(array("canciones"));


}
?>