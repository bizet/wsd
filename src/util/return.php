
<?php

class r_msg {
  public static function send($result, $data) {
    $output = array (
      'result' => $result,
      'data' => $data
    );
    echo json_encode($output);
  }

  public static function ok ($data) {
    return self::send('ok', $data);
  }
  public static function error ($error_msg) {
    return self::send('error', $error_msg);
  }
};
?>

