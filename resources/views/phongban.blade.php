@extends('layouts.admin')
@section('content')
<section class="panel">
    <header class="panel-heading">
        <div class="panel-actions">
            <a href="#" class="fa fa-caret-down"></a>
            <a href="#" class="fa fa-times"></a>
        </div>

        <h2 class="panel-center" style="text-align:center">Danh sách phòng ban</h2>
    </header>
    <div class="panel-body">
        <table class="table table-bordered table-striped mb-none" id="datatable-editable">
            <thead>
                <tr>
                    <th class="center">Mã phòng ban</th>
                    <th class="center">Tên phòng ban</th>
                    <th class="center">Số nhân viên</th>
                    <th class="center">Trưởng phòng</th>
                    <th class="center">Thao tác</th>
                </tr>
            </thead>
            <tbody>

 @foreach ($phongbans as $phongban)
    <tr>
        <td class="center">{{ $phongban->id }}</td>
        <td class="center">{{ $phongban->name_phongban}}</td>
        <td class="center">{{ $phongban->users()->count()}}</td>
        <td class="center">
            <?php
            $count = 0;
                foreach($phongban->users as $user){
                     if ($user->pivot->chuc_vu == "Trưởng phòng"){
                        echo $user->name;
                        $count++;
                     }
                }
            if($count == 0) echo 'Chưa có Trưởng phòng!';
            ?>
        </td>
        <td class="actions" style="text-align:center">
            <a href="editPhongban/{{$phongban->id }}" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
            <a href="deletePhongban/{{$phongban->id }}" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>

        </td>
    </tr>
 @endforeach
            </tbody>

        </table>
    </div>
</section>
{{ $phongbans->links() }}
@endsection
