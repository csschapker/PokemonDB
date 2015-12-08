app.controller("SearchController", function ($scope, $location, $rootScope) {

    $scope.search = function () {
        if ($scope.searchText == undefined) {
            return;
        }
        $location.path("/search/" + $scope.searchText);
    }

});