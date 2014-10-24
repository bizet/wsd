angular.module('wsd', [
    'ngRoute'])
  .config(function($routeProvider, $locationProvider) {
    var intro = {
          templateUrl: 'static/tpl/intro.html',
          controller: 'intro_controller'
        },
        download = {
          templateUrl: 'static/tpl/download.html',
          controller: 'download_controller'
        },
        sign = {
          templateUrl: 'static/tpl/sign.html',
          controller: 'sign_controller'
        };
    $routeProvider
      .when('/sign', sign)
      .when('/download', download)
      .when('/index.php', intro)
      .when('/', intro)
      .otherwise({redirectTo: '/'});
    $locationProvider.html5Mode(true);
  });
