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
        };
    $routeProvider
      .when('/download', download)
      .when('/index.php', intro)
      .when('/', intro);
    $locationProvider.html5Mode(true);
  });
