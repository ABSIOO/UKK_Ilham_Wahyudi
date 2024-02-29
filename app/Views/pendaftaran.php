<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .authentication-wrapper {
            max-width: 400px;
            width: 100%;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .auth-title {
            text-align: center;
            margin-bottom: 30px;
        }
        .form-group {
            position: relative;
            margin-bottom: 20px;
        }
        .form-control-xl {
            border-radius: 30px;
            padding: 15px 25px;
        }
        .form-control-icon {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            right: 20px;
            color: #ced4da;
        }
        .btn-lg {
            border-radius: 30px;
            padding: 15px;
            font-size: 1.25rem;
            font-weight: bold;
        }
    </style>
</head>
<body>
   
       
            <h1 class="auth-title">Sign Up</h1>
            <form class="form-horizontal form-label-left" novalidate action="<?= base_url('Home/aksi_tambah_user')?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" class="form-control form-control-xl" placeholder="E-Mail" name="email">
                    <div class="form-control-icon">
                        <i class="bi bi-envelope"></i>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-xl" placeholder="Nama" name="nama">
                    <div class="form-control-icon">
                        <i class="bi bi-123"></i>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-xl" placeholder="Username" name="username">
                    <div class="form-control-icon">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-xl" placeholder="Password" name="pswd">
                    <div class="form-control-icon">
                        <i class="bi bi-shield-lock"></i>
                    </div>
                </div>
                <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Sign Up</button>
            </form>
            <div class="text-center mt-5 text-lg fs-4">
                <p class="text-gray-600">
                    Already have an account?
                    <a href="/login" class="font-bold">Log in</a>.
                </p>
            </div>
        </div>
    </div>
</body>
</html>
