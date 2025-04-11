<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang chính - Lanishop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .main-buttons .btn {
            width: 150px;
            height: 80px;
            margin: 10px;
            font-weight: bold;
            font-size: 18px;
            border-radius: 12px;
        }
        .main-container {
            min-height: 80vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        header, footer {
            border: 1px solid #000;
            padding: 10px;
        }
        footer {
            text-align: center;
        }
    </style>
</head>
<body>

<header class="d-flex justify-content-between align-items-center">
    <div class="d-flex align-items-center">
        <img src="https://img.icons8.com/ios/50/image--v1.png" alt="Logo" width="30" height="30" class="me-2">
        <strong>Lanishop</strong>
        <a href="{{ route('index') }}" class="btn btn-outline-dark btn-sm">Trang chủ</a>
    </div>
    <div>
        <h5 class="mb-0">Header</h5>
    </div>
    <div>
        <a href="{{ route('login') }}" class="btn btn-outline-dark btn-sm">Đăng Nhập</a>
    </div>
</header>

<div class="main-container">
    <div class="main-buttons d-flex flex-wrap justify-content-center">
        <button class="btn btn-primary">Dịch vụ</button>
        <button class="btn btn-primary">Đánh giá</button>
        <button class="btn btn-primary">Khách hàng</button>
        <button class="btn btn-primary">Thanh toán</button>
        <button class="btn btn-primary">Nhân viên</button>
        <button class="btn btn-primary">Lịch đặt</button>
    </div>
</div>

<footer>
    Footer
</footer>

</body>
</html>
