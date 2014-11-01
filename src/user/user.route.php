<?php
require_once(dirname(__FILE__).'/../vendor/macaw.php');
require_once(dirname(__FILE__).'/user.model.php');
require_once(dirname(__FILE__).'/../util/return.php');

Macaw::post('/user/login', function() {
  $web_input = file_get_contents('php://input');
  $user_info = json_decode($web_input);
  $user = new User();
  $user_exists = $user->login($user_info->username, $user_info->password);
  if (!$user_exists) {
    r_msg::error('login failed');
  }
  r_msg::ok($user_exists);
});

?>
