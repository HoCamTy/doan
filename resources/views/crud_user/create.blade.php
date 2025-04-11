@extends('dashboard')

@section('content')

    <div class="container">

        <h2>Màn hình đăng ký</h2>
        <div class="card-body">
            <form action="{{ route('user.postUser') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <input type="text" placeholder="Họ Và Tên" id="name" class="form-control" name="name" required
                        autofocus>
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <input type="text" placeholder="Email" id="email_address" class="form-control" name="email" required
                        autofocus>
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <input type="password" placeholder="Nhập mật khẩu" id="password" class="form-control" name="password"
                        required>
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <input type="password" placeholder="Nhập lại mật khẩu" id="password" class="form-control"
                        name="password" required>
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="d-grid mx-auto">
                    <button type="submit" class="btn btn-dark btn-block">Đăng ký</button>
                </div>
                <div class="form-group mb-3">
    <label for="avatar">Ảnh đại diện</label>
    <input type="file" id="avatar" name="avatar" class="form-control">
    @if ($errors->has('avatar'))
        <span class="text-danger">{{ $errors->first('avatar') }}</span>
    @endif
</div>

            </form>
        </div>
        <div class="footer">
        Màn hình đăng kí
    </div>

    </div>

@endsection