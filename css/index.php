<?php /*?><? ob_start(); ?>
<?php */?><!DOCTYPE html>
<html lang="ar">
  <head>
    <meta charset="UTF-8" />
    <title>The Village Restaurant</title>
    <link rel="shortcut icon" href="favicon.png">
    <link rel="icon" href="favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
   <link href="css/photoswipe.css" rel="stylesheet" />
      <link href="css/default-skin/default-skin.css" rel="stylesheet" />
      <link href="css/site.css" rel="stylesheet" />
       <link href="css/phototweak.css" rel="stylesheet" />
    <link type="text/css" rel="stylesheet" media="all" href="css/custom.css" @charset="utf-8";>
    <link type="text/css" rel="stylesheet" media="all" href="css/slideshow.css" @charset="utf-8";>
    <link type="text/css" rel="stylesheet" media="all" href="css/plainmodal.css" @charset="utf-8";>
    <link type="text/css" rel="stylesheet" media="all" href="css/menu-gallery.css" @charset="utf-8";>
    <link type="text/css" rel="stylesheet" media="all" href="css/style.css" @charset="utf-8";>
    <link type="text/css" rel="stylesheet" media="all" href="css/responsive.css" @charset="utf-8";>
    <script type="text/javascript" src="js/jquery.min.js" charset="utf-8"></script>
    <script type="text/javascript" src="js/script.js" charset="utf-8"></script>
    <script src="js/jquery.mobile-1.4.5.min.js" charset="utf-8"></script>
    <script src="js/jquery.plainmodal.js" charset="utf-8"></script>
   	<script src="js/photoswipe.js"></script>
    <script src="js/photoswipe-ui-default.js"></script>
    <script type="text/javascript" src="js/navigation.js" charset="utf-8"></script>
    <!--<script type="text/javascript">
    	 $(function() {
      	
      		$("li.cd-single-item-wrapper").click(function(e) {
      			$("li.cd-single-item-wrapper").removeClass("active");
				//$(".sub-menu").slideUp();
      			$("ul.sub-menu li").removeClass("activechild");
      			$("li.item-has-children").removeClass("active");
      		$("ul.sub-menu li").click(function(e) {
						//$(".sub-menu").slideDown();
      					$("ul.sub-menu li").removeClass("activechild");
      					$(this).addClass("activechild");
      					
      				});
        		$(this).addClass("active");
      		//$(".sub-menu").slideUp();
      		});
      		
      		$("li.item-has-children").click(function(e) {
				
        		$(this).addClass("active");
				//$(".sub-menu").slideDown();
      		});
      	});
      
        
      	 </script>-->
   <script type="text/javascript">
    $(function() {
		$("li.cd-single-item-wrapper").click(function(e) {
  		$("li.cd-single-item-wrapper").removeClass("active");
		$("li.item-has-children").removeClass("active");
		$("ul.sub-menu li").removeClass("activechild");
  		$(this).addClass("active");
		});
		
		$("li.item-has-children").click(function(e) {
  		$("li.item-has-children").removeClass("active");
		$("li.cd-single-item-wrapper").removeClass("active");
  		$(this).addClass("active");
		});
		
		
		$("ul.sub-menu li").click(function(e) {
  		$("ul.sub-menu li").removeClass("activechild");
  		$(this).addClass("activechild");
		});
		
	});
	</script>
    <style>
      @font-face {
      font-family: 'Raleway';
      font-style: normal;
      font-weight: 300;
      src: local('Raleway Light'), local('Raleway-Light'), url(fonts/RalewayLight.woff) format('woff');
      }
      @font-face {
      font-family: 'Raleway';
      font-style: normal;
      font-weight: 400;
      src: local('Raleway'), url(fonts/Raleway.woff) format('woff');
      }
      @font-face {
      font-family: 'Raleway';
      font-style: normal;
      font-weight: 500;
      src: local('Raleway Medium'), local('Raleway-Medium'), url(fonts/RalewayMedium.woff) format('woff');
      }
      @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 100;
      src: local('Roboto Thin'), local('Roboto-Thin'), url(fonts/2tsd397wLxj96qwHyNIkxHYhjbSpvc47ee6xR_80Hnw.woff2) format('woff2'), url(fonts/vzIUHo9z-oJ4WgkpPOtg13YhjbSpvc47ee6xR_80Hnw.woff) format('woff');
      }
      @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 300;
      src: local('Roboto Light'), local('Roboto-Light'), url(fonts/Hgo13k-tfSpn0qi1SFdUfZBw1xU1rKptJj_0jans920.woff2) format('woff2'), url(fonts/Hgo13k-tfSpn0qi1SFdUfbO3LdcAZYWl9Si6vvxL-qU.woff) format('woff');
      }
      @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 400;
      src: local('Roboto'), local('Roboto-Regular'), urlfonts/oMMgfZMQthOryQo9n22dcuvvDin1pK8aKteLpeZ5c0A.woff2) format('woff2'), url(fonts/CrYjSnGjrRCn0pd9VQsnFOvvDin1pK8aKteLpeZ5c0A.woff) format('woff');
      }
      @font-face {
      font-family: 'Roboto';
      font-style: normal;
      font-weight: 500;
      src: local('Roboto Medium'), local('Roboto-Medium'), url(fonts/RxZJdnzeo3R5zSexge8UUZBw1xU1rKptJj_0jans920.woff2) format('woff2'), url(fonts/RxZJdnzeo3R5zSexge8UUbO3LdcAZYWl9Si6vvxL-qU.woff) format('woff');
      }
	  
	
    </style>
  </head>

  <body >
    <div id="ios7-statusbar-fix"></div>
    <div id="w">
      <div id="pagebody">
        <header id="toolbarnav">
          <a href="#navmenu" id="menu-btn"></a>
          <!--<h1>HK Mobile</h1>-->
        </header>
        <section id="content" class="clearfix content-slide" ontouchmove="BlockMove(event);">
          <!-- <div class="home">
            <center>-->
          <!-- <img src="img/menu-bg.jpg" style="max-width:100%; min-width:100%;"/>-->
          <!-- <p class="version">Version 1.0</p>-->
          <!--   </center>-->
          <!-- <iframe src="restaurant.html" width="1024" height="768" frameborder="0" name="icon" seamless> </iframe>-->                <!--</div>-->
        </section>
      </div>	
	

        
        
		<div id="navmenu" class="sideajax">

				<div id="banner">
                <header>
				<h1><img id="applogo" src="img/logo.png" style="cursor:pointer;"/></h1>
				</header>
					</div>
                <nav id="cd-lateral-nav" class="lateral-menu-is-open">
                <?php /*?><header>
				<h1><img src="img/logo.png" /></h1>
				</header><?php */?>
                 <?php include 'menu_list_view.php'; ?>
                 
                </nav>
		</div><!-- /navmenu -->
        
            



</div>

    
  <!--   <script src="http://cdn.jsdelivr.net/bootstrap/3.3.0/js/bootstrap.min.js"></script>
      -->
    <script src="js/metismenu.min.js"></script>
    <!--<script>
      jQuery(function($) {
      
         $('#menu').metisMenu();
      
         
      });
      </script>-->
    <script src="js/prism.min.js"></script>
    <script src="js/ios-orientationchange-fix.js"></script> 
    <script>
      jQuery(function($) {
      	$("#navmenu").overflowY = "auto";
      
      });
      
      
      $('#content').load('wowslideshow.html', function(response, status, xhr) {
         if (status == "error") {
             var msg = "Sorry but there was an error: ";
             alert(msg + xhr.status + " " + xhr.statusText);
           }
      });
      
      
      	$("#applogo").click(function(e) {
			$("li.cd-single-item-wrapper").removeClass("active");
			$("ul.sub-menu li").removeClass("activechild");
			$("li.item-has-children").removeClass("active");
			$(".sub-menu").slideUp();
      	
			$("#content").load('wowslideshow.html', function(response, status, xhr) {
			 if (status == "error") {
				 var msg = "Sorry but there was an error: ";
				 alert(msg + xhr.status + " " + xhr.statusText);
			   }
			$("#content").addClass("content-slide");
      		});
      	
     	 });
      
    </script>
    
    
    
  </body>
</html>

 	
<?php /*?>	<? 
		
	//	$var1 = $product["product_id"];
	//	$var1= sprintf("%03d", $var1);
		$outputname = "index.html"; 


		$page = ob_get_contents();
		ob_end_flush();
        
		$fp = fopen("$outputname","w");
		fwrite($fp,$page);
		fclose($fp);
		?>
<?php */?>