angular.module('wsd')
  .factory('sign_service', ['$http', function($http) {
    return {
      login: function(user) {
        $http.post('user/login', {
          username: user.username,
          password: user.password
        }).success(function (data) {
          console.log(data);
        });
      }
    };
  }])
;
