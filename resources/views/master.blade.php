<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="es"> <!--<![endif]-->
  <head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="googlebot" content="index,follow">

    <!-- Title -->
    <title>@yield('title','Karma App')</title>

    <!-- Templates core CSS -->
    <link href="{{asset('css/application.css')}}" rel="stylesheet">

    <!-- Favicons -->
  <link href="{{asset('images/favicon/favicon.png')}}s" rel="shortcut icon">
    <link href="{{ asset('images/favicon/apple-touch-icon-57-precomposed.png')}}" rel="apple-touch-icon">
    <link href="{{ asset('images/favicon/apple-touch-icon-72-precomposed.png')}}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{ asset('images/favicon/apple-touch-icon-144-precomposed.png')}}" rel="apple-touch-icon" sizes="114x114">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- Modernizr Scripts -->
    <script src="{{ asset('js/vendor/modernizr-2.7.1.min.js')}}"></script>
  </head>
  <body class="index" id="to-top">

    <!-- Side nav -->
    <nav class="side-nav" role="navigation">

      <ul class="nav-side-nav">
        <li><a class="tooltip-side-nav" href="#section-1" title="" data-original-title="Services" data-placement="left"></a></li>
        <li><a class="tooltip-side-nav" href="#section-2" title="" data-original-title="Features" data-placement="left"></a></li>
        <li><a class="tooltip-side-nav" href="#section-3" title="" data-original-title="Subscribe" data-placement="left"></a></li>
        <li><a class="tooltip-side-nav" href="#to-top" title="" data-original-title="Back" data-placement="left"></a></li>
      </ul>
      
    </nav> <!-- /.side-nav -->


    @include("header")
    @yield("content")


    <!-- Footer -->
    <footer class="footer-section" role="contentinfo">

      <div class="container">

        <div class="row">

          <div class="col-md-4 col-footer">
            
            <!-- Footer 1 -->
            <section>
              <p>Made with <i class="fa fa-heart"></i> by Aryandhani.</p>
            </section>

            <!-- AddThis Button -->
            <ul class="addthis_toolbox addthis_default_style">

              <li><a class="addthis_button_facebook_like"></a></li>
              <li><a class="addthis_button_tweet"></a></li>

            </ul> <!-- /.addthis_toolbox -->
            <script>var addthis_config = {"data_track_addressbar":true};</script>
            <script src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-533f6ac03b59c72a"></script>

          </div> <!-- /.col-md-4 -->

          <div class="col-md-4 col-footer col-padding">
            
            <!-- Footer 1 -->
            <section class="text-center">
              <p>Be sure to read <a href="#fakelinks">Terms</a> and <a href="#fakelinks">Privacy Policy</a>.</p>
            </section>

            <!-- Social media links -->
            <ul class="social-media-links">

              <li><a class="fa fa-twitter tw" href="#fakelinks"></a></li>
              <li><a class="fa fa-facebook fb" href="#fakelinks"></a></li>
              <li><a class="fa fa-pinterest pn" href="#fakelinks"></a></li>
              
            </ul> <!-- /.social-media-links -->

          </div> <!-- /.col-md-4 -->

          <div class="col-md-4 col-footer">
            
            <!-- Footer 1 -->
            <section>
              <p><strong>Guri Guri Nyoi, Inc</strong> <br>Antah berantah Street, Block 123 <br>Dimana saja, Kapan saja, 12356.</p>
            </section>

          </div> <!-- /.col-md-4 -->
          
        </div> <!-- /.row -->

      </div> <!-- /.container -->

    </footer> <!-- /.footer-section -->

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('js/vendor/jquery-2.1.0.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/assets/application.js')}}"></script>
  </body>
</html>
