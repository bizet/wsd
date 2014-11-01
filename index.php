<?php
require_once(dirname(__FILE__)."/src/vendor/macaw.php");
require_once(dirname(__FILE__)."/src/user/user.route.php");

Macaw::get('(:all)', function() {
  echo require("static/index.html");
});

Macaw::dispatch();
?>
