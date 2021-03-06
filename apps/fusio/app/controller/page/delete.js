'use strict'

module.exports = function ($scope, $http, $uibModalInstance, page, fusio) {
  $scope.page = page

  $scope.delete = function (page) {
    $http.delete(fusio.baseUrl + 'backend/page/' + page.id)
      .then(function (response) {
        var data = response.data
        $scope.response = data
        if (data.success === true) {
          $uibModalInstance.close(data)
        }
      })
      .catch(function (response) {
        $scope.response = response.data
      })
  }

  $scope.close = function () {
    $uibModalInstance.dismiss('cancel')
  }

  $scope.closeResponse = function () {
    $scope.response = null
  }
}
