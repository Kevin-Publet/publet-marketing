angular.module('app')
    .controller('engagementController', ['$scope', '$http', function($scope, $http)
    {
        $scope.test = false;

        $scope.sayHi = function($data)
        {
            console.log($data)
        };

        $scope.testCall = function ()
        {
            if($scope.test == false)
            {
                var data = {
                    targetMarket :  angular.element('#targetMarket').data('targetmarket'),
                    axpt : angular.element('#axpt').data('axpt'),
                    iPOV : angular.element('#iPOV').data('ipov'),
                    iMeth : angular.element('#iMeth').data('imeth'),
                    iCont : angular.element('#iCont').data('icont')
                };

                $http.post('/test-google-analytic-receiver', data).
                    success(function (data, status, headers, config) {
                        $scope.success = data;
                        console.log(data);
                    }).
                    error(function (data, status, headers, config) {
                        $scope.error = data;
                        console.log($scope.error);
                    });
            }
        };

        $scope.testCall();

    }]);