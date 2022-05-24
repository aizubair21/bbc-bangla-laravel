<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/bootstrap-5.1.0-dist/css/bootstrap.min.css">
    <script src="/bootstrap-5.1.0-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/css/default.css">
    <link rel="stylesheet" href="/css/theme.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/responsibe.css">
    @yield('link')
    <title>bbc-bangla</title>
</head>
<body>
    <div id="nav">
        <div class="row">
            <div class="col-lg-12  col-xm-10">
                <div class="nav-body">
                    <a href="#" class="top ">
                        <h3>
                            <span>B</span>
                            <span>B</span>
                            <span>C</span>
                        
                        </h3>
                        <span>NEWS | </span>
                        <span> বাংলা</span>

                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xm-10">
                <div class="nav-body">
                    <ul class="bottom">
                        <li class="active"><a href="#" >মুলপাতা</a></li>
                        <li><a href="#">করোনাভাইরাস</a></li>
                        <li><a href="#">ভিডিও</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        @yield('content')
    </div>


    @yield('script')
</body>
</html>