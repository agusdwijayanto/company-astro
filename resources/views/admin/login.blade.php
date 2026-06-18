<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Astro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body {
            background: linear-gradient(135deg, #0d47a1 0%, #42A5F5 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            background: #fff;
            border-radius: 20px;
            padding: 50px 40px;
            max-width: 420px;
            width: 100%;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
        }
        .login-card .login-logo {
            text-align: center;
            margin-bottom: 30px;
        }
        .login-card .login-logo h2 {
            color: #0d47a1;
            font-weight: 800;
        }
        .login-card .login-logo h2 i {
            color: #ffc107;
        }
        .login-card .login-logo p {
            color: #6c757d;
            font-size: 0.9rem;
        }
        .login-card .form-control {
            border-radius: 12px;
            padding: 12px 16px;
            border: 2px solid #e9ecef;
        }
        .login-card .form-control:focus {
            border-color: #0d47a1;
            box-shadow: 0 0 0 4px rgba(13,71,161,0.1);
        }
        .login-card .btn-login {
            background: #0d47a1;
            color: #fff;
            border: none;
            padding: 14px;
            border-radius: 12px;
            font-weight: 700;
            width: 100%;
            transition: all 0.3s ease;
        }
        .login-card .btn-login:hover {
            background: #1565C0;
            transform: translateY(-2px);
        }
        .login-card .demo-info {
            text-align: center;
            margin-top: 20px;
            color: #6c757d;
            font-size: 0.85rem;
            background: #f8f9fa;
            padding: 12px;
            border-radius: 10px;
        }
        .alert-custom {
            border-radius: 12px;
            padding: 12px 16px;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <div class="login-logo">
            <h2><i class="fas fa-rocket"></i> Astro</h2>
            <p>Admin Panel</p>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger alert-custom alert-dismissible fade show" role="alert">
                {{ $errors->first() }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <form method="POST" action="{{ route('admin.login.submit') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label fw-bold">Email</label>
                <input type="email" name="email" class="form-control" placeholder="admin@example.com" value="{{ old('email') }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Password</label>
                <input type="password" name="password" class="form-control" placeholder="********" required>
            </div>
            <button type="submit" class="btn-login">
                <i class="fas fa-sign-in-alt"></i> Login
            </button>
        </form>

        <div class="demo-info">
            <i class="fas fa-info-circle"></i> Demo: admin@example.com / password
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>