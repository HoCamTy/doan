@extends('masterlayout')
@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        
        <h1>Quản lí nhân viên</h1>
        <a href="{{ route('staffs.create') }}" class="btn btn-outline-primary">
            <i class="bi bi-plus-square"></i> Thêm nhân viên
        </a>
    </div>
<div>
    @if (session('success'))
            {{ session('success') }}
        @endif
</div>
    <form class="d-flex mb-3" method="GET" action="{{ route('staffs.index') }}">
        <input class="form-control me-2" type="search" name="search" placeholder="Tìm kiếm" value="{{ request('search') }}">
        <button class="btn btn-primary" type="submit">Tìm</button>
    </form>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>STT</th>
                <th>Tên nhân viên</th>
                <th>Số điện thoại</th>
                <th>Email</th>
                <th>Chức Vụ</th>
                <th class="text-center">Tùy chỉnh</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($staffs as $index => $staff)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $staff->staff_name }}</td>
                    <td>{{ $staff->staff_phone }}</td>
                    <td>{{ $staff->email }}</td>
                    <td>{{ $staff->role_name }}</td>
                    <td class="text-center">
                        <a href="{{ route('staffs.edit', $staff->id) }}" class="btn btn-outline-primary btn-sm">
                            <i class="bi bi-pencil-square"></i> Chỉnh sửa
                        </a>
                        <form action="{{ route('staffs.destroy', $staff->id) }}" method="POST" class="d-inline-block"
                            onsubmit="return confirm('Bạn chắc chắn muốn xóa?');">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-outline-danger btn-sm">
                                <i class="bi bi-trash"></i> Xóa
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach()
            {{-- @empty
                <tr>
                    <td colspan="6" class="text-center">Không có nhân viên nào.</td>
                </tr>
            @endforelse --}}
        </tbody>
        {{ $staffs->links() }}
    </table>
@endsection
