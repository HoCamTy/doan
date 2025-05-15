

@extends('masterlayout')

@section('content')
<div class="container mt-4">
  <h3>Thêm mới nhân viên</h3>
@if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
  @endif
    <form action="{{ route('staffs.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="staff_name" class="form-label">Tên nhân viên</label>
            <input type="text" class="form-control" id="staff_name" name="staff_name" value="{{ old('staff_name') }}" >
        </div>

        <div class="mb-3">
            <label for="staff_phone" class="form-label">Số điện thoại</label>
            <input type="text" class="form-control" id="staff_phone" name="staff_phone" value="{{ old('staff_phone') }}" >
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" >
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Chức vụ</label>
            <input type="text" class="form-control"  name="role_name" value="{{ old('role_name') }}" >
        </div>

        <button type="submit" class="btn btn-success">Thêm mới</button>
        <a href="{{ route('staffs.index') }}" class="btn btn-secondary">Quay lại</a>
    </form>
</div>
@endsection
