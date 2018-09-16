@section('foot')

    <footer class="footer">
        <div class="container-fluid">
            <div class="copyright pull-right">
                &copy;
                <script>document.write(new Date().getFullYear())</script>
                , <a href="#">DEAL APP</a>
            </div>
        </div>
    </footer>

    </div>
    </div>


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
        var token = '{{csrf_token()}}';
    </script>

    </html>

@endsection