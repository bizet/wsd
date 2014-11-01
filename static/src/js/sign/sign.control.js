angular.module('wsd')
  .controller('sign_controller', function($scope, sign_service) {
    $scope.login = function() {
      if ($scope.loginForm.$valid) {
        sign_service.login(
          $scope.user
        );
      }
    };
  });



