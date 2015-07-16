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
                console.log(targetMarket);
                axpt = angular.element('#axpt').data('axpt');
                console.log(axpt);
            }
        };

        $scope.testCall();

    }]);