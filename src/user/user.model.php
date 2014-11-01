<?php
require_once(dirname(__FILE__).'/../vendor/medoo.min.php');

class User {
  private $database;
  public function __construct() {
    $this->database = new medoo();
  }
  public function login($username, $password) {
    if (empty($username) || empty($password)) {
      throw new Exception('login but username or password is blank.');
    }
    $user_exist = $this->database->select('user', ['id', 'username'], array(
      'AND' => array(
        'username' => $username,
        'password' => $password
      )
    ));
    if ($user_exist) {
      return $user_exist;
    }
    return false;
  }
};

?>
