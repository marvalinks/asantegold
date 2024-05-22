<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- Favicon -->

        <title>Asante Gold Coporation</title>

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="/admin/lib/remixicon/fonts/remixicon.css" />

        <!-- Template CSS -->
        <link rel="stylesheet" href="/admin/assets/css/style.min.css" />
    </head>
    <body class="page-sign">
        <div class="card card-sign">
            <div class="card-header" style="text-align: center;">
                <a href="{{route('login')}}" class="header-logo mb-4">
                    <img src="/assets/images/logo/logo-asante.png" style="width: 150px;">
                </a>
                <h3 class="card-title">Sign In</h3>
                <p class="card-text">Welcome back! Please signin to continue.</p>
            </div>
            <!-- card-header -->
            <div class="card-body">
                <form action="{{route('login')}}" method="post" autocomplete="off">
                    @csrf
                    <div class="mb-4">
                        <label class="form-label">Username</label>
                        <input type="text" required class="form-control" name="username" placeholder="Enter your email address" />
                    </div>
                    <div class="mb-4">
                        <label class="form-label d-flex justify-content-between">Password <a href="">Forgot password?</a></label>
                        <input type="password" required name="password" class="form-control" placeholder="Enter your password" />
                    </div>
                    <button type="submit" class="btn btn-primary btn-sign">Sign In</button> <br>
                    <a href="{{route('home')}}" class="btn btn-danger btn-sign">Back to website</a>
                </form>


                
                <!-- row -->
            </div>
            <!-- card-body -->
            <!-- card-footer -->
        </div>
        <!-- card -->

        <script src="/admin/lib/jquery/jquery.min.js"></script>
        <script src="/admin/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script>
            "use script";

            var skinMode = localStorage.getItem("skin-mode");
            if (skinMode) {
                $("html").attr("data-skin", "dark");
            }
        </script>
    </body>
</html>
