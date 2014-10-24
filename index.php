<!doctype html>
<html lang="zh-CN" ng-app="wsd">
<head>
  <meta charset="UTF-8">
  <title>微事代</title>
  <link rel="stylesheet" href="http://libs.useso.com/js/bootstrap/3.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="static/dist/css/wsd.min.css">
</head>
<body>
  <div id="menu" ng-controller="menu_controller">
    <div class="menu-con">
      <img src="static/img/wsdlogo.jpg">
      <div class="login">
        <a href="sign">用户注册</a>
        <a href="sign">用户登录</a>
      </div>
      <div class="nav">
        <a href="index.php">企业中心</a>
        <a href="download">APP下载</a>
      </div>
    </div>
    <div style="clear:both;"></div>
  </div>
  <div class="tpl">
    <div ng-view></div>
  </div>
  <div id="footer">
    <div class="footer-con">
      <div class="link">
        <h3>友情链接：</h3>
        <p> 
          <a href="#" target="_blank">友情链接</a>
          <a href="#" target="_blank">友情链接</a>
          <a href="#" target="_blank">友情链接</a>
          <a href="#" target="_blank">友情链接</a>
          <a href="#" target="_blank">友情链接</a>
        </p>
      </div>
      
      <div class="rights">
        <h3>版权信息：</h3>
        <p>京ICP备xxxxxxx号-x <br>
          版权声明：上海万驭网络科技有限公司</p>
      </div>
      
      <div class="contact">
        <h3>联系我们：</h3>
        <p> Tel : 021-xxxxxxxx-xxxx <br>
                Mail : <a href="mailto:#">xxxx@ivtask.com</a></p>
      </div>
      <div style="clear:both;"></div>
      
    </div>
  </div>
  <script src="http://libs.useso.com/js/jquery/1.9.1/jquery.min.js"></script>
  <script src="http://libs.useso.com/js/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src="http://ajax.useso.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
  <script>
    angular.element(document.getElementsByTagName('head')).append(angular.element('<base href="' + window.location.pathname + '" />'));
  </script>
  <script src="http://ajax.useso.com/ajax/libs/angularjs/1.2.0/angular-route.min.js"></script>
  <script src="static/dist/js/wsd.min.js"></script>
</body>
</html>