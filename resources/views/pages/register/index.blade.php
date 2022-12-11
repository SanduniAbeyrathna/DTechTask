@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CONSULT - Consultancy Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
    .error input {
        border-color: red;
        border-width: 2px;
    }

    .success input {
        border-color: green;
        border-width: 2px;
    }

    .error span {
        color: red;
    }

    .success span {
        color: green;
    }

    span.error {
        color: red;
    }

    i {
        font-weight: 900;
        font-family: 'Font Awesome 5 Free';
    }
</style>
</head>

<body class="bg-light">
    <div class="container p-3">
        <div class="col-lg-6 m-auto d-block p-3 bg-white">
            <h2 class="pb-3 text-primary">Registration Form</h2>
            <div id="message"></div>
            <form method="POST" id="myform">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="user1">
                            Username:
                        </label>
                        <input type="text" name="username" id="username" class="form-control">
                        <span class="error" id="username_err"> </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="user1">
                            Email:
                        </label>
                        <input type="email" name="email" id="email" class="form-control">
                        <span class="error" id="email_err"> </span>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="mob">
                            Mobile:
                        </label>
                        <input type="text" name="mobile" id="mobile" class="form-control">
                        <!-- <h5 id="conpasscheck" style="color: red;">
                            **Password didn't match
                        </h5> -->
                        <span class="error" id="mobile_err"></span>
                    </div>

                    <div class="form-group col-md-12">
                        <label for="password">
                            Password:
                        </label>
                        <div class="input-group">
                            <input type="password" name="password" id="password" class="form-control">
                            <div class="input-group-append">
                                <span class="input-group-text" onclick="password_show_hide();">
                                    <i class="fas fa-eye" id="show_eye"></i>
                                    <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                                </span>
                            </div>
                        </div>
                        <span class="error" id="password_err"> </span>
                    </div>

                    <div class="form-group col-md-12">
                        <label for="conpassword">
                            Confirm Password:
                        </label>
                        <input type="password" name="cpass" id="cpassword" class="form-control">
                        <!-- <h5 id="conpasscheck" style="color: red;">
                            **Password didn't match
                        </h5> -->
                        <span class="error" id="cpassword_err"> </span>
                    </div>
                    <div class="col-md-12">
                        <button type="button" id="submitbtn" class="alert alert-primary" role="alert">Submit</button>
                    </div>

                </div>
            </form>
        </div>
    </div>

    <!--call validation.js file-->
    <script src="{{ url("validation.js") }}"></script>

</body>

</html>
@endsection


