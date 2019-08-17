@extends('layouts.admin')
@section('content')
 {{-- <form id="form" action="{{URL::action('UserController@updateUser', $getUserById->id)}}" method="POST" class="form-horizontal"> --}}
    <form id="form" action="{{route('updateUser')}}" method="POST" class="form-horizontal">
        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <input type="hidden" name="id" value="{{$getUserById['id']}}">
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-center" style="text-align:center">Chỉnh sửa thông tin</h2>
            </header>
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label" style="color: #777777"><b>Tên </b></label>
                    <div class="col-sm-9">
                        <input type="text" name="name" class="form-control"  value="{{$getUserById['name']}}" >
                    </div>
                </div>

                    <div class="form-group">
                            <label class="col-sm-2 control-label" style="color: #777777"><b>Tuổi </b></label>
                            <div class="col-sm-9">
                                <input type="number" name="age" class="form-control"  value="{{$getUserById['age']}}">
                            </div>
                        </div>
                        <div class="form-group">
                                <label class="col-sm-2 control-label"style="color: #777777"><b>Chức vụ</b></label>
                                <div class="col-sm-9">
                                    <select name="chuc_vu" class="form-control" >
                                        <option value="{{$getUserById->phongbans[0]->pivot->chuc_vu}}">{{$getUserById->phongbans[0]->pivot->chuc_vu}}</option>
                                        <option value="Nhân viên" @if ($getUserById->phongbans[0]->pivot->chuc_vu = "Nhân viên") echo "selected = 'selected'" @endif>Nhân viên</option>
                                        <option value="Trưởng phòng" @if ($getUserById->phongbans[0]->pivot->chuc_vu = "Trưởng phòng") echo "selected = 'selected'" @endif>Trưởng phòng</option>
                                        </select>
                                </div>
                            </div>
                        <div class="form-group">
                                <label class="col-sm-2 control-label" style="color: #777777"><b>Phòng ban </b></label>
                                <div class="col-sm-9">
                                            <select name="phongban_id" class="form-control" >
                                            {{-- <option>---Chọn Phòng ban---</option> --}}
                                            <option value="{{$getUserById->phongbans[0]->id}}">{{$getUserById->phongbans[0]->name_phongban}}</option>
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
                        <button type="submit" class="btn btn-primary">Edit</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    </div>
                </div>
            </footer>
        </section>
    </form>
    @endsection
