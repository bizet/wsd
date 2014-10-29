<?php
  include("macaw.php");

  Macaw::get('/user', function() {
    echo 'user';
  });
  Macaw::get('(:all)', function() {
    echo require("static/index.html");
  });

  Macaw::dispatch();
?>