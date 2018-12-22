<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Hello</title>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>


    <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.min.js"></script>
    <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-aria.min.js"></script>
    <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-messages.min.js"></script>
    <link rel = "stylesheet"
          href = "https://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.css">
    <script src = "https://ajax.googleapis.com/ajax/libs/angular_material/1.0.0/angular-material.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" language="JavaScript" src="{{asset('app/app.js')}}"></script>
   <script type="text/javascript" language="JavaScript" src="{{asset('app/controller/LoaiController.js')}}"></script>
</head>
<body >
<div class="container data-list" ng-controller="LoaiController">
    <div class="table-header">Danh sach
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Ten</th>
                    <th><button id="btn-refresh" class="btn btn-primary btn-xs">
                            <span class="glyphicon glyphicon-refresh"></span></button>
                        <button id="btn-add" class="btn btn-success btn-xs">
                            <span class="glyphicon glyphicon-plus"></span></button>
                    </th>
                </tr>
            </thead>
            <tbody>
               <!-- <tr ng-show="!isLoading">
                    <td colspan="4">
                        <table width="100%">
                            <tr>
                                <td width="45%" class="text-right">Du lieu da duoc tai ve </td>
                                <td width="150" class="text-center">
                                    <md-progress-circular md-diameter = "100" md-mode="indeterminate">
                                    </md-progress-circular>
                                </td>
                                <td width="45%" class="text-left">Xin cho trong giay lat...</td>
                            </tr>
                        </table>
                    </td>
                </tr>-->
                <tr ng-repeat="tl in List">
                    <td class="text-center"> <% tl.tl_ma %>  </td>
                    <td><% tl.tl_ten %> </td>

                    <td class="text-center">
                        <button class="btn btn-info btn-xs btn-default">
                            <span class="glyphicon glyphicon-eye-close"></span>
                        </button>
                        <button class="btn btn-warning btn-xs btn-edit">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </button>
                        <button class="btn btn-danger btn-xs btn-delete">
                            <span class="glyphicon glyphicon-trash"></span>
                        </button>
                    </td>
                </tr>
            </tbody>

        </table>
        <div class="data-list-finished"></div>
    </div>

</div>

</body>
</html>