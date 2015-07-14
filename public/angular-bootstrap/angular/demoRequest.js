angular.module('app')
    .controller('demoRequestController', ['$scope', '$http', function($scope, $http)
    {
        $scope.tester = 'this is a test';

        $scope.sendDemoRequest = function(productService, targetAudience, companyName, name, email)
        {

            var data = {
                name : name,
                email : email,
                company : companyName,
                productService : productService,
                targetAudience : targetAudience
            };



            $http.post('/send-demo-request', data).
                success(function (data, status, headers, config) {
                    window.location.pathname = 'demo-request-confirmed';
                }).
                error(function (data, status, headers, config) {
                    $scope.error = data;
                });
        }

    }]);