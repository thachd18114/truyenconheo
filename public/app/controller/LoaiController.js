app.controller('LoaiController', function ($scope, $http) {
        $http.get('http://localhost/truyenconheo/public/admin').then (function (response) {
            $scope.List = response.data.message.ds_loai;
           // console.log($scope.List);
        });

        $scope.modal1 = function () {

                   $('#frmCreate').modal('show');
        }
});
