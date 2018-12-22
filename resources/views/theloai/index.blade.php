@extends('backend.layouts.index')

@section('title')
    Danh sach the loai truyen
@endsection

@section('content')
    <h1>THỂ LOẠI TRUYỆN</h1>
    <hr>
    <p><a href="#"><i class="fas fa-plus-circle"></i> Thêm mới</a></p>

    <div class="flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))
                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
            @endif
        @endforeach
    </div>

    <div ng-controller="LoaiController">
            <table id="table1" class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>Mã</th>
                    <th>Tên</th>
                    <th>Tạo Mới</th>
                    <th>Cập Nhật</th>
                    <th>Trạng Thái</th>
                    <th>Mô Tả</th>
                    <th><button  class="btn btn-primary btn-xs">
                            <span class="glyphicon glyphicon-refresh"></span></button>
                        <button class="btn btn-success btn-xs" id="btnadd" ng-click="modal1()">
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
                    <td><% tl.tl_taoMoi %> </td>
                    <td><% tl.tl_capNhat %> </td>
                    <td><% tl.tl_trangThai %> </td>
                    <td><% tl.tl_moTa %> </td>
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

        <div  id="frmCreate" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="modal-title"><b>Thêm thể loại truyện</b></div>
                    </div>
                    <div class="modal-body">
                        <form name="frmTheLoai" class="form-horizontal">
                            <div class="form-group">
                                <label for="tl_ten" class="col-sm-3 control-label">Tên loại</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" id="tl_ten" name="tl_ten" placeholder="Vui lòng nhập tên">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tl_moTa" class="col-sm-3 control-label">Mô tả</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" id="tl_moTa" name="tl_moTa" placeholder="Vui lòng nhập mô tả">
                                </div>
                            </div>
                            <!--
                            <div class="form-group">
                                <label for="tl_taoMoi" class="col-sm-4 control-label">Ngày tạo mới</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" id="tl_taoMoi" name="tl_taoMoi" placeholder="Vui lòng nhập ngày tạo mới">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tl_capNhat" class="col-sm-4 control-label">Ngày cập nhật</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" id="tl_capNhat" name="tl_capNhat" placeholder="Vui lòng nhập ngày cập nhật">
                                </div>
                            </div><div class="form-group">
                                <label for="ten" class="col-sm-4 control-label">Trạng thái</label>
                                <div class="col-sm-8">
                                    <select></select>
                                </div>
                            </div>-->


                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="button">Thêm</button>
                    </div>
                </div>
            </div>

        </div>
            <div class="data-list-finished"></div>
    </div>
@endsection