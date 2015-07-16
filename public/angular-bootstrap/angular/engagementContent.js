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
                targetMarket =  angular.element('#targetMarket').data('targetmarket');
                axpt = angular.element('#axpt').data('axpt');
                iPOV = angular.element('#iPOV').data('ipov');
                iMeth = angular.element('#iMeth').data('imeth');
                iCont = angular.element('#iCont').data('icont');

            }
        };

        $scope.testCall();

    }]);