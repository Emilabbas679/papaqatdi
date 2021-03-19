<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/site/css/reset.css?v=1.1">

    <link rel="stylesheet" href="/site/css/style.css?v=1.1">
    <link rel="stylesheet" href="/site/css/responsive.css?v=1.1">

    <!-- Jquery part -->
    <script src="/site/js/jquery-3.4.1.min.js?v=1.1"></script>
    <title>{{env('APP_NAME')}}</title>

</head>
<body>

    <div class="site clearfix">

        <header class="clearfix">
            <div class="header_center clearfix">


            </div>
        </header>
        @yield('content')
        <footer class="clearfix">

        </footer>
    </div>

</body>

<script src="/site/js/myjs.js?v=1.1"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js" integrity="sha512-0XDfGxFliYJPFrideYOoxdgNIvrwGTLnmK20xZbCAvPfLGQMzHUsaqZK8ZoH+luXGRxTrS46+Aq400nCnAT0/w==" crossorigin="anonymous"></script>
<script>
    $('.phone').mask('+000(00)-000-00-00', {placeholder: "+994(40)-123-45-67"});

</script>

</html>
