@extends('layouts.admin')
@section('content')
<section class="panel">
    <header class="panel-heading">
        <div class="panel-actions">
            <a href="#" class="fa fa-caret-down"></a>
            <a href="#" class="fa fa-times"></a>
        </div>

            <div style="text-align:center">
            @if (session()->has('Sửa thành công'))
                <div class="alert alert-info">
                    {{session()->get('Sửa thành công')}}
                </div>
            @endif

                <div style="text-align:center">
                @if (session()->has('Tạo thành công'))
                   <div class="alert alert-info">
                   {{session()->get('Tạo thành công')}}</div>
               @endif
           </div>
           <div style="text-align:center">
                @if (session()->has('Xóa thành công'))
                   <div class="alert alert-info">
                   {{session()->get('Xóa thành công')}}</div>
               @endif
           </div>

        <h2 class="panel-center" style="color: #777777 ;text-align:center">Danh sách nhân viên</h2>
    </header>
    <form action="{{route('updatepw')}}" method="post">

    <div class="panel-body">
        <table class="table table-bordered table-striped mb-none" id="datatable-editable">
            <thead>
                <tr>
                    <th class="center">Mã nhân viên</th>
                    <th class="center">Tên</th>
                    <th class="center">Email</th>
                    <th class="center">Tuổi</th>
                    <th class="center">Chức vụ</th>
                    <th class="center">Phòng ban</th>
                    <th class="center">Thao tác</th>
                    <th class="center">Reset Password</th>
                </tr>
            </thead>
            <tbody>

 @foreach ($users as $user)
    <tr>
        <td class="center">{{ $user->id }}</td>
        <td class="center">{{ $user->name }}</td>
        <td class="center">{{ $user->email }}</td>
        <td class="center">{{ $user->age }}</td>
        @if(count($user->phongbans) > 0)
        <td class="center">{{ $user->phongbans[0] ? $user->phongbans[0]->pivot->chuc_vu : '' }}</td>
        <td class="center">{{ $user->phongbans[0] ? $user->phongbans[0]->name_phongban : '' }}</td>
        @else
        <td class="center"> null </td>
        <td class="center"> null </td>

        @endif
        <td class="actions" style="text-align:center">
            <a href="editUser/{{$user->id }}" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
            <a href="deleteUser/{{ $user->id }}" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>

        </td>
        <td class="center">
        <input type="checkbox" name="resetpw[{{$user->id}}]"  value="{{$user->id}}" >
        </td>
    </tr>
 @endforeach
            </tbody>
        </table>
        <div class="col-sm-9 col-sm-offset-7" style="padding:6px; right: 0px" >
        <button class="btn btn-primary" type="submit"> Reset </button>
        </div>
    </div>
    @csrf
</form>
</section>
{{ $users->links() }}
@endsection
