var WSD = angular.module('wsd', [
    'ngRoute']);
WSD
  .config(function($routeProvider, $locationProvider) {
    var intro = {
          templateUrl: 'static/tpl/intro.html',
          controller: 'intro_controller'
        },
        app = {
          templateUrl: 'static/tpl/app.html',
          controller: 'app_controller'
        };
    $routeProvider
      .when('/app', app)
      .when('/intro', intro)
      .when('/', intro);
    $locationProvider.html5Mode(true);
  });
