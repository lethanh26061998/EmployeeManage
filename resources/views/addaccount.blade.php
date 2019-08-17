@extends('layouts.admin')
@section('content')
{{-- <form id="form" action="{{URL::action('UserController@store')}}" method="POST" class="form-horizontal"> --}}
    <form id="form" action="{{route('addAccount')}}" method="POST" class="form-horizontal">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <section class="panel" >
            <header class="panel-heading" style="padding:13px">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-center" style="text-align:center">Thông tin cá nhân</h2>
            </header>
            <div class="panel-body" style="text-align:center">
                <div class="form-group" style="text-align:center">
                    <label class="col-sm-2 control-label" style="color: #777777"><b>Tên </b> <span class="required">*</span></label>
                    <div class="col-sm-9">
                        <input type="text" name="name" class="form-control" placeholder="eg.: Le Thi Thanh" required/>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" style="color: #777777"><b>Email</b> <span class="required">*</span></label>
                    <div class="col-sm-9">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </span>
                            <input type="email" name="email" class="form-control" placeholder="eg.: email@email.com" required/>
                        </div>
                    </div>
                    <div class="col-sm-9">

                    </div>
                </div>
                <div class="form-group">
                        <label class="col-sm-2 control-label"style="color: #777777"><b>Mật khẩu </b> <span class="required">*</span></label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-lock"></i>
                                </span>
                                <input type="password" name="password" class="form-control" aria-hidden="true" required/>
                            </div>
                        </div>
                        <div class="col-sm-9">

                        </div>
                    </div>
                    <div class="form-group">
                            <label class="col-sm-2 control-label" style="color: #777777"><b>Tuổi </b> <span class="required">*</span></label>
                            <div class="col-sm-9">
                                <input type="number" name="age" class="form-control" required/>
                            </div>
                        </div>
                        <div class="form-group">
                                <label class="col-sm-2 control-label" style="color: #777777"><b> Chức vụ</b><span class="required">*</span></label>
                                <div class="col-sm-9">
                                        <select name="chuc_vu" class="form-control" required/>
                                        <option>---Chọn chức vụ---</option>
                                        <option value="Nhân viên">Nhân viên</option>
                                        <option value="Trưởng phòng">Trưởng phòng</option>
                                    </select>
                                </div>
                            </div>
                        <div class="form-group">
                                <label class="col-sm-2 control-label" style="color: #777777"><b>Phòng ban</b><span class="required">*</span></label>
                                <div class="col-sm-9">
                                        <select name="phongban_id" class="form-control" required/>
                                                <option>---Chọn Phòng ban---</option>
                                            @foreach($phongbans as $phongban)
                                                <option value="{{$phongban->id}}">{{$phongban->name_phongban}}</option>
                                            @endforeach
                                            </select>
                                </div>
                            </div>

            </div>
            <footer class="panel-footer">
                <div class="row">
                    <div class="col-sm-9 col-sm-offset-1">
                        <button type="submit" class="btn btn-primary"  >Thêm</button>
                        <button type="reset" class="btn btn-default" >Reset</button>
                    </div>
                </div>
            </footer>
        </section>
    </form>
    @endsection
