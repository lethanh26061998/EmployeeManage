<div class="panel">
    <div class="panel-heading">
        <div class="panel-actions">
            <a href="#" class="fa fa-caret-down"></a>
            <a href="#" class="fa fa-times"></a>
        </div>

        <h2 class="panel-center" style="text-align:center">Danh sách nhân viên {{Auth::user()->phongbans[0]->name_phongban}}</h2>
    </div>
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
                </tr>
            </thead>
            <tbody>

 @foreach ($users as $user)
    <tr>
        <td class="center">{{ $user->id }}</td>
        <td class="center">{{ $user->name }}</td>
        <td class="center">{{ $user->email }}</td>
        <td class="center">{{ $user->age }}</td>
        <td class="center">{{ $user->phongbans[0] ? $user->phongbans[0]->pivot->chuc_vu : '' }}</td>
        <td class="center">{{ $user->phongbans[0] ? $user->phongbans[0]->name_phongban : '' }}</td>

    </tr>
 @endforeach
            </tbody>
        </table>
        <div class="center" style="text-align:center; padding: 12px" >
            <a href="{{route('export')}}" class="btn btn-primary" >Xuất file</a>

        </div>
    </div>
</div>
