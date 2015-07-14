angular.module('app')
    .controller('betaRequestController', ['$scope', '$http', function($scope, $http)
    {
        $scope.tester = 'this is a test real quick from beta';

        $scope.sendBetaRequest = function(productService, targetAudience, companyName, name, email)
        {

            var data = {
                name : name,
                email : email,
                company : companyName,
                productService : productService,
                targetAudience : targetAudience
            };



            $http.post('/send-beta-request', data).
                success(function (data, status, headers, config) {
                    window.location.pathname = 'beta-request-confirmed';
                }).
                error(function (data, status, headers, config) {
                    $scope.error = data;
                    console.log($scope.error);
                });
        }
    }]);