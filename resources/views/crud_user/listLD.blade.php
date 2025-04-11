@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h3>Danh sách lịch hẹn</h3>

    <!-- Bộ lọc -->
    <form method="GET" action="{{ route('appointments.index') }}" class="row mb-4">
        <div class="col-md-3">
            <input type="date" name="date" value="{{ request('date') }}" class="form-control">
        </div>
        <div class="col-md-2">
            <select name="status" class="form-control">
                <option value="">All</option>
                <option value="Đã hoàn thành" {{ request('status') == 'Đã hoàn thành' ? 'selected' : '' }}>Đã hoàn thành</option>
                <option value="Đã huỷ" {{ request('status') == 'Đã huỷ' ? 'selected' : '' }}>Đã huỷ</option>
            </select>
        </div>
        <div class="col-md-3">
            <select name="service" class="form-control">
                <option value="">All</option>
                <option value="Cắt tóc">Cắt tóc</option>
                <option value="Gội đầu">Gội đầu</option>
                <option value="Massa vai">Massa vai</option>
            </select>
        </div>
        <div class="col-md-2">
            <select name="staff" class="form-control">
                <option value="">All</option>
                <option value="Minh Lan">Minh Lan</option>
                <option value="Minh Anh">Minh Anh</option>
                <option value="Quân Hoa">Quân Hoa</option>
            </select>
        </div>
        <div class="col-md-2">
            <button class="btn btn-dark w-100">Lọc</button>
        </div>
    </form>

    <!-- Bảng lịch hẹn -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Customer</th>
                <th>Date/time</th>
                <th>Service</th>
                <th>Status</th>
                <th>Staff</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($appointments as $appt)
                <tr>
                    <td>{{ $appt->customer_name }}</td>
                    <td>{{ \Carbon\Carbon::parse($appt->datetime)->format('d/m/Y h:i A') }}</td>
                    <td>{{ $appt->service }}</td>
                    <td>{{ $appt->status }}</td>
                    <td>{{ $appt->staff }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Không có lịch hẹn</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
