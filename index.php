<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <div class="form--container">
        <div class="container p-0">
            <div class="row d-flex justify-content-center align-items-center form--body--row">
                <div
                    class="col-md-4 col-sm-12 form--body--col d-flex justify-content-center align-items-center flex-column">
                    <div class="text-center">
                        <img id="logo" src="./logo.jpg" alt="Logo" class="mb-2">
                    </div>
                    <div class="text-left w-75 mb-2">
                        <h2 class="heading--form--h2">Log in</h2>
                    </div>
                    <form action="" method="post" class="w-75" id="loginForm">
                        <div class="form-group active" id="step1">
                            <label for="emailOrUsername">Email or Username</label>
                            <input type="text" class="form-control" id="emailOrUsername" name="emailOrUsername"
                                required>
                        </div>
                        <div class="form-group" id="step2">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <button type="submit" class="btn btn-block mb-2 form--btn-1" id="nextBtn">Next</button>
                        <div class="text-left mb-3">
                            <a href="#" class="form--a--1">Forgot your password?</a>
                        </div>
                        <div class="text-left mb-3">
                            <h5 class="heading--form--h5">Don't have an account?</h5>
                        </div>
                        <div class="text-left mb-3">
                            <a href="#" class="btn  w-100 form--btn-2">Create Account</a>
                        </div>
                        <div class="text-left mb-4">
                            <a href="#" class="form--a--2">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="./app.js"></script>
</body>

</html>