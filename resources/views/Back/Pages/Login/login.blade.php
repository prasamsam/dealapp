<!Doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="{{URL::asset('img/apple-icon.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{URL::asset('img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <title>@yield('title',$title)</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>


    <!-- Bootstrap core CSS     -->
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet"/>

    <!-- Animation library for notifications   -->
    <link href="{{URL::asset('css/animate.min.css')}}" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="{{URL::asset('css/paper-dashboard.css')}}" rel="stylesheet"/>



    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="{{URL::asset('css/themify-icons.css')}}" rel="stylesheet">

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-xs-12 col-lg-12 ">
            <div class="jumbotron login_box">
                <div class="login_logo">
                    <img src="{{URL::asset('img/faces/face-0.jpg')}}" alt="LOGO" class="img-circle">
                </div>
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4 col-sm-4 col-sm-offset-4">
                        <h1>Log In</h1>
                        <form method="post" action="{{route('admin_login')}}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="email_admin">Email address</label>
                                <input type="email" class="form-control" id="email_admin" name="email_admin"
                                       aria-describedby="emailHelp" placeholder="Enter email">

                            </div>
                            <div class="form-group">
                                <label for="password_admin">Password</label>
                                <input type="password" class="form-control" id="password_admin" name="password_admin"
                                       placeholder="Password">
                            </div>
                            <div class="checkbox">
                                <input type="checkbox" class="form-check-input" id="admin_check">
                                <label class="form-check-label" for="admin_check">Remember Me</label>
                            </div>
                            <br>
                            <div>
                                <a href=""><i><b>Forgot Password?</b></i></a>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary pull-right">Log In</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="container-fluid">
        <div class="copyright pull-right">
            &copy;
            <script>document.write(new Date().getFullYear())</script>
            , <a href="#">Deal App</a>
        </div>
    </div>
</footer>

</body>

<!--   Core JS Files   -->
<script src="{{URL::asset('js/jquery-1.10.2.js')}}" type="text/javascript"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="{{URL::asset('js/bootstrap-checkbox-radio.js')}}"></script>

<!--  Charts Plugin -->
<script src="{{URL::asset('js/chartist.min.js')}}"></script>

<!--  Notifications Plugin    -->
<script src="{{URL::asset('js/bootstrap-notify.js')}}"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="{{URL::asset('js/paper-dashboard.js')}}"></script>


<script type="text/javascript">
    $(document).ready(function () {

        demo.initChartist();

        $.notify({
            icon: 'ti-gift',
            message: "Welcome to <b>Paper Dashboard</b> - a beautiful Bootstrap freebie for your next project."

        }, {
            type: 'success',
            timer: 4000
        });

    });
</script>

</html>
