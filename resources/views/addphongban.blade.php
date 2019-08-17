@extends('layouts.admin')
@section('content')
{{-- <form id="form" action="{{URL::action('UserController@store')}}" method="POST" class="form-horizontal"> --}}
    <form id="form" action="{{route('addPhongban')}}" method="POST" class="form-horizontal">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-center" style="text-align:center ;color: #777777">Thêm phòng ban</h2>
            </header>
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-3 control-label" style="color: #777777"><b>Tên phòng </b> <span class="required">*</span></label>
                    <div class="col-sm-7">
                        <input type="text" name="name_phongban" class="form-control" placeholder="...Tên phòng ban..." required/>
                    </div>
                </div>
            </div>
            <footer class="panel-footer">
                <div class="row">
                    <div class="col-sm-9 col-sm-offset-1">
                        <button type="submit" class="btn btn-primary">Thêm</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    </div>
                </div>
            </footer>
        </section>
    </form>
    @endsection
