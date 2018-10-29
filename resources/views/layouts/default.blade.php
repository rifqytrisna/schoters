<!--/**-->
<!-- * Created by IntelliJ IDEA.-->
<!-- * User: rfq-->
<!-- * Date: 29/10/18-->
<!-- * Time: 16.07-->
<!-- */-->

<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="wrapper">
    <!--    </sidebar>-->
        @include('includes.sidebar')
<!--block overlay-->
    <div class="overlay"></div>

        <div id="content">
            @include('includes.header')
                <div id="main" class="row">
                    @yield('content')
                </div>
        </div>

    <footer class="row">
        @include('includes.footer')
    </footer>

</div>
</body>
</html>
