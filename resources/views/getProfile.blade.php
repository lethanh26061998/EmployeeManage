@extends('layouts.profile')

@section('content')

<section class="panel">
    <header class="panel-heading">
        <div class="panel-actions">
            <a href="#" class="fa fa-caret-down"></a>
            <a href="#" class="fa fa-times"></a>
        </div>
        <div style="text-align:center"
                                @if (session()->has('Thành công'))
                                               <div class="alert alert-info">
                                                   {{session()->get('Thành công')}}</div>
                                           @endif
                                </div>
        <h2 class="panel-center">Thông tin cá nhân</h2>
    </header>
    <div class="panel-body">
        <div class="form-group">
            <label class="col-sm-3 control-label">Name</label>
            <div class="col-sm-9">
                <input type="text" name="name" class="form-control" value="{{Auth::user()->name}}" >
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Email </label>
            <div class="col-sm-9">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-envelope"></i>
                    </span>
                    <input type="email" name="email" class="form-control" value="{{Auth::user()->email}}">
                </div>
            </div>
            <div class="col-sm-9">

            </div>
        </div>
        <div class="form-group">
                <label class="col-sm-3 control-label">Password</label>
                <div class="col-sm-9">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-lock"></i>
                        </span>
                        <input type="password" name="password" class="form-control" aria-hidden="true" value="{{Auth::user()->password}}" >
                    </div>
                </div>
                <div class="col-sm-9">
                </div>
            </div>
            <div class="form-group">
                    <label class="col-sm-3 control-label">Age</label>
                    <div class="col-sm-9">
                        <input type="number" name="age" class="form-control" value="{{Auth::user()->age}}">
                    </div>
                </div>
                <div class="form-group">
                        <label class="col-sm-3 control-label">Chức vụ</label>
                        <div class="col-sm-9">
                                <input name="chuc_vu" class="form-control" value="{{Auth::user()->phongbans[0] ? Auth::user()->phongbans[0]->pivot->chuc_vu : ''}}">

                        </div>
                    </div>
                <div class="form-group">
                        <label class="col-sm-3 control-label">Phòng ban</label>
                        <div class="col-sm-9">
                                <input name="phongban_id" class="form-control" value="{{Auth::user()->phongbans[0] ? Auth::user()->phongbans[0]->name_phongban : ''}}">
                        </div>
                    </div>
    </div>
</section>

@endsection
