@extends('layouts.admin')
@section('content')
  <form id="form" action="{{route('updatePhongban')}}" method="POST" class="form-horizontal">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" name="id" value="{{$phongban['id']}}">
        <section class="panel">
            <header class="panel-heading">
                <div class="panel-actions">
                    <a href="#" class="fa fa-caret-down"></a>
                    <a href="#" class="fa fa-times"></a>
                </div>

                <h2 class="panel-center">Chỉnh sửa phòng ban</h2>
            </header>
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="name_phongban" class="form-control"  value="{{$phongban['name_phongban']}}" >
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
