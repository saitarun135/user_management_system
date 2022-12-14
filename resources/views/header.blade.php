<!DOCTYPE html>
<html>

<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .btn-default {
            font-size: 20px !important;
            border: 1px solid #ddd !important;

        }
        .main {
            height: calc(100vh - 100px);
        }
    </style>
</head>

<body style="font-size:28px;" class="main">

    <nav class="navbar navbar-default" style="background: #ADD8E6;">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- <a class="navbar-brand" href="#">Brand</a> -->
                <i class="bi bi-house"></i>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                </ul>
                <form class="col-12 navbar-form navbar-left" action="<?php echo url('dashboard'); ?>" method="GET" role="search">
                    <div class="row justify-content-end">
                        <div class="col-5 d-flex form-group text-center mb-3">
                            <input type="search" style="font-size:25px;" name="search" class="form-control"
                                 value="<?php echo request()->search;?>">
                                <button type="submit" class="btn btn-primary px-4 py-0" style="height:40px;font-size:15px;">Submit</button>
                        </div>
                        <div class="col-2">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a class="btn " style="font-size:18px;" href="<?php echo url('logout'); ?>"><span
                                            class="glyphicon glyphicon-log-out"></span>
                                        Log out</a></li>
                            </ul>
                        </div>
                    </div>


                </form>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>


</body>

</html>
