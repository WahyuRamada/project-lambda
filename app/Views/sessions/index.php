<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bg-kanan{
            background-image: url('/assets/images/foto.jpg');
            background-size: cover;
        }
    </style>
</head>
<body>
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="container mt-5">
                <form action="/sessions" method="post">
                    <div class="mb-3">
                        <label for="exampleFormControlInput" class="form-label">Email address</label>
                        <input type="Email" class="form-control" name="email" id="exampleFormControlInput" placeholder="name@example.com">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="password">
    </div>
    <div class="mb-3">
        <input type="submit" value="masuk" class="btn btn-secondary">
    </div>
    </form>
    </div>
    </div>
    <div class="col-md-6 d-done d-md block bg-kanan" style="height: 100vh">
    </div>
    </div>

    <script src="/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>