<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <meta name="google-site-verification" content="9eUm5fCKDf2754U31UbwciawtXhWMvJsP6w_nAorSlw" />  
  <title>National Housing Authority (NHA), Bangladesh</title>
  <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
  <!-- CSS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="{{ asset('css/frontend.css') }}" rel="stylesheet" type="text/css">

  @yield('style')
  <!-- Fonts -->

  <!-- Scripts -->
  <script src="{{ asset('js/frontend.js') }}"></script>
  <script>
    // When the document loads do everything inside here ...
    $(document).ready(function()
    {       
      // When a link is clicked
      $("a.tab").click(function ()
       {
        // switch all tabs off
        $(".active").removeClass("active");
        // switch this tab on
        $(this).addClass("active");
        // slide all content up
        $(".content").slideUp();
        // slide this content up
        var content_show = $(this).attr("title");
        $("#"+content_show).slideDown();
      });
    });
  </script>
</head>

<body onload="StartClock()" onunload="KillClock()">
 <div class="container">
   <div class="row">
   <div id="fb-root"></div>
      <script>
        (function(d, s, id)
         {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=367077420096215";
          fjs.parentNode.insertBefore(js, fjs);
        }
        (document, 'script', 'facebook-jssdk'));
      </script>
     <div  id="main" class="col-md-12">
       <div id="header" class="col-md-12"></div>
       <div class="col-md-9">
         @yield('flash-slider')
       </div>
        <div class="col-md-3">
          @yield('flash-logo') 
        </div>

        <div class="col-md-12" style="background:url('images/top_but_bg.png'); height:27px;">
            @include('frontend.layouts.partials.navbar')  
        </div> 

        <aside> 
          @yield("side-nav")      
        </aside>

        <section> 
          @yield('content')     
        </section>      
        
        <aside>
         @yield('right-sider')          
        </aside> 

        <footer>
            @include('frontend.layouts.partials.footer')        
        </footer>       
     </div>
   </div>
 </div>
 <script type="text/javascript">
    $(document).ready(function() {
        $('.flash-msg').delay(7000).fadeOut(1000);
    });
  </script>
</body>
</html>
