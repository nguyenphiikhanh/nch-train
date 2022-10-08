<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register - SB Admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Create Account</h3>
                                </div>
                                <div class="card-body">
                                    @if (\Session::has('success'))
                                        <div class="alert alert-success">
                                            <ul>
                                                <li>{!! \Session::get('success') !!}</li>
                                            </ul>
                                        </div>
                                    @endif
                                    @if (\Session::has('error'))
                                        <div class="alert alert-error">
                                            <ul>
                                                <li>{!! \Session::get('error') !!}</li>
                                            </ul>
                                        </div>
                                    @endif
                                    <form method="POST" action="">
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <input class="form-control @error('username') is-invalid @enderror"
                                                type="text" name="username" placeholder="Enter your username name" />
                                            @error('username')
                                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                            @enderror
                                            <label for="inputFirstName">Username</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input class="form-control @error('name') is-invalid @enderror"
                                                name="name" type="text" placeholder="Enter your name" />
                                            @error('name')
                                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                            @enderror
                                            <label for="inputFirstName">Name</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="email" type="email"
                                                placeholder="name@example.com" />
                                            <label for="inputEmail">Email address</label>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control @error('password') is-invalid @enderror"
                                                        id="inputPassword" type="password"
                                                        placeholder="Create a password" name="password" />
                                                    @error('password')
                                                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                                                    @enderror
                                                    <label for="inputPassword">Password</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input
                                                        class="form-control @error('confirm_password') is-invalid @enderror"
                                                        id="inputPasswordConfirm" name="confirm_password"
                                                        type="password" placeholder="Confirm password" />
                                                    @error('confirm_password')
                                                        <div class="alert alert-danger mt-1">{{ $message }}</div>
                                                    @enderror
                                                    <label for="inputPasswordConfirm">Confirm Password</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4 mb-0">
                                            <button type="submit" class="btn btn-primary">Create Account</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="{{ route('login')}}">Have an account? Go to login</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <!-- <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div> -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
</body>

</html>