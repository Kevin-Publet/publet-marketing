angular.module('app')
    .controller('betaRequestController', ['$scope', '$http', function($scope, $http)
    {
        $scope.tester = 'this is a test real quick from beta';
    }]);