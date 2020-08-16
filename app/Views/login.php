<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>


    <!-- Bootstrap Core CSS -->
    <link href="/login/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/login/css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/login/css/startmin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/login/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>



    <?php

    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">Login</h4>
                    </div>
                    <form class="" action="/" method="post">
                        <div class="panel-body">
                            <form role="form">
                                <fieldset>
                                    <div class="form-group">

                                        <input type="text" class="form-control" placeholder="Email addres" name="email" id="email" value="">


                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" value="">

                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                        </label>
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <div class="col-4">
                                        <button type="submit" class="btn btn-lg btn-success btn-block">Login</button></a>
                                    </div>

                                    <hr>
                                    <div class="text-center ">
                                        <a class="small " href="forgot-password.html ">Forgot Password <a class="small" href="/registrasi"> <span>Buat Akun Baru</span> </a>
                                    </div>
                                    <hr>


                                </fieldset>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>


    <!-- jQuery -->
    <script src="/login/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/login/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/login/js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/login/js/startmin.js"></script>

</body>

</html>