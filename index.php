<?php
require_once(dirname(__FILE__)."/src/vendor/macaw.php");
require_once(dirname(__FILE__)."/src/user/user.route.php");

Macaw::get('(:all)', function() {
  //header("Content-type:text/html");
  //echo file_get_contents("static/index.html");
  //readfile("static/index.html");
  header('Location: client.html');
});

Macaw::dispatch();
?>
