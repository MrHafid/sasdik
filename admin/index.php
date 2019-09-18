<?php
include "../koneksi.php";
if(!isset($_SESSION))
  session_start();
if(!isset($_SESSION['udahlogin']) )
  header("location:login.php");
 $username=$_SESSION['username'];


?>
<!DOCTYPE html>

<html lang="en"><script id="tinyhippos-injected">if (window.top.ripple) { window.top.ripple("bootstrap").inject(window, document); }</script><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Pendaftaran Online SASDIK</title>
	<meta name="description" content="Srikandi Responsive Admin Templates">
	<meta name="keywords" content="resposinve, admin dashboard, admin page, admin template">
	<meta name="author" content="Candra Dwi Waskito">
	<link rel="shortcut icon" href="http://bootemplates.com/themes/srikandi/favicon.ico">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="./Srikandi - Responsive Admin Templates_files/bootstrap.min.css">
    <link rel="stylesheet" href="./Srikandi - Responsive Admin Templates_files/bootstrap-reset.css">
    <link href="./Srikandi - Responsive Admin Templates_files/css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="./Srikandi - Responsive Admin Templates_files/style.css">
    <script src="./Srikandi - Responsive Admin Templates_files/jquery-1.11.1.min.js"></script>
    <!-- css for this page -->
    <link href="./Srikandi - Responsive Admin Templates_files/jquery.easy-pie-chart.css" rel="stylesheet">
    <link rel="stylesheet" href="./Srikandi - Responsive Admin Templates_files/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="./Srikandi - Responsive Admin Templates_files/owl.theme.css">
    <link rel="stylesheet" type="text/css" href="./Srikandi - Responsive Admin Templates_files/owl.transitions.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <!-- start:wrapper -->
    <div id="wrapper">
        <div class="header-top">
            <!-- start:navbar -->
            <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="container">
                    <!-- start:navbar-header -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="./"><i class="fa fa-home" data-original-title="" title=""></i> <strong>SASDIK</strong>Scout<strong>.</strong></a>
                    </div>
                    <!-- end:navbar-header -->
                    <ul class="nav navbar-nav navbar-left top-menu">
                        <!-- start dropdown 1 -->
                  
                        <!-- end dropdown 3 -->
                    </ul>
                    <ul class="nav navbar-nav navbar-right top-menu">
                        <li>
                            <input type="text" class="form-control input-sm search" placeholder="Search">
                        </li>
                        <!-- user login dropdown start-->
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <img alt="" src="./Srikandi - Responsive Admin Templates_files/avatar-mini3.jpg">
                                <span class="username"><?php echo $username ?></span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <div class="log-arrow-up"></div>
                                
                                <li><a href="logout.php"><i class="fa fa-key" data-original-title="" title=""></i> Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- end:navbar -->
        </div>
        <!-- start:header -->
        <div id="header">
            <div class="overlay">
                <nav class="navbar" role="navigation">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="btn-block btn-drop navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                <strong>MENU</strong>
                            </button>
                        </div>
                        <?php $wew="home" ?>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                            <ul class="nav navbar-nav" id="side">
                                <li id="home" <?php if ($wew == 'home') { echo "class = 'active'"; }?>>
                                    <a href="./" onclick="pencet('home')">
                                        <div class="text-center">
                                            <i class="fa fa-home fa-3x" data-original-title="" title=""></i><br>
                                            Home
                                        </div>
                                    </a>
                                </li>
                                <li id="agama" <?php if ($wew == 'agama') echo "class = 'active'"; ?>>
                                    <a class="" data-toggle="" href="?p=agama" onclick="pencet('agama')">
                                        <div class="text-center">
                                            <i class="fa fa-laptop fa-3x" data-original-title="" title=""></i><br>
                                            Data Agama 
                                        </div>
                                    </a>
                                 
                                </li>
                            
                                <li class="dropdown">
                                    <a  href="?p=jurusan">
                                        <div class="text-center">
                                            <i class="fa fa-bar-chart-o fa-3x" data-original-title="" title=""></i><br>
                                            Jurusan
                                        </div>
                                    </a>
                                 
                                </li>
                                <li>
                                    <a href="?p=pendaftar">
                                        <div class="text-center">
                                            <i class="fa fa-location-arrow fa-3x" data-original-title="" title=""></i><br>
                                            Pendaftar
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown">
                                    <a  href="?p=seleksi">
                                        <div class="text-center">
                                            <i class="fa fa-home fa-3x" data-original-title="" title=""></i><br>
                                            Seleksi Pendaftar 
                                        </div>
                                    </a>
                                  
                                </li>
                             <!--    <li class="dropdown" hidden="true">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="">
                                        <div class="text-center">
                                            <i class="fa fa-shopping-cart fa-3x" data-original-title="" title=""></i><br>
                                            Data OrangTua <span class="caret"></span>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="?p=pekerjaan"><i class="fa fa-gift" data-original-title="" title=""></i>  Data Pekerjaan</a></li>
                                        <li><a href="?p=pendidikan"><i class="fa fa-gift" data-original-title="" title=""></i> Data Pendidikan</a></li>
                                   
                                    </ul>
                                </li> -->
                                   <li class="dropdown">
                                    <a  href="?p=laporan">
                                        <div class="text-center">
                                            <i class="fa fa-home fa-3x" data-original-title="" title=""></i><br>
                                            Laporan Pendaftaran 
                                        </div>
                                    </a>
                                  
                                </li>
                            </ul>
              
                        </div><!-- /.navbar-collapse -->
                    </div>
                </nav>
            </div>
        </div>
        <!-- end:header -->

        <!-- start:main -->
        <div class="container">
            <div id="main">
                <!-- start:breadcrumb -->

       
          <?php
           

            if(isset($_GET['p'])){
            if($_GET['p']=="agama")
              include "page/agama.php";

         elseif($_GET['p']=="jurusan")
              include "page/jurusan.php";
            elseif($_GET['p']=="pekerjaan")
              include "page/pekerjaan.php";
          elseif($_GET['p']=="pendidikan")
              include "page/pendidikan.php";
               elseif($_GET['p']=="pendaftar")
              include "page/pendaftar.php";
           elseif($_GET['p']=="seleksi")
              include "page/seleksi.php";
            elseif($_GET['p']=="laporan")
              include "page/laporan.php";
            else
             echo "<blockquote><p>Halaman tidak ditemukan</p></blockquote>";
          }
          else
          {
            echo " <ol class='breadcrumb'>
                    <li><a href='./'>Home</a></li>
                    <li class='active'>Home</li>
                </ol>
                <!-- end:breadcrumb -->   

                <div class='row' id='home-content'>
                    <div class='col-lg-8'>
                        <!-- start:state overview -->
                        <div class='row state-overview'>
                            <div class='col-lg-6 col-sm-6'>
                                <section class='panel'>
                                    <div class='symbol terques'>
                                        <i class='fa fa-users' data-original-title=' title='></i>
                                    </div>
                                    <div class='value'>
                                        <h1 class='count'></h1>
                                        <p>Pendaftar</p>
                                    </div>
                                </section>
                            </div>
                            <div class='col-lg-6 col-sm-6'>
                                <section class='panel'>
                                    <div class='symbol red'>
                                        <i class='fa fa-gift' data-original-title=' title='></i>
                                    </div>
                                    <div class='value'>
                                        <h1 class=' count2'>947</h1>
                                        <p>Diterima</p>
                                    </div>
                                </section>
                            </div>
                            <div class='col-lg-6 col-sm-6'>
                                <section class='panel'>
                                    <div class='symbol yellow'>
                                        <i class='fa fa-shopping-cart' data-original-title=' title='></i>
                                    </div>
                                    <div class='value'>
                                        <h1 class=' count3'>328</h1>
                                        <p>Ditolak</p>
                                    </div>
                                </section>
                            </div>
                            <div class='col-lg-6 col-sm-6'>
                                <section class='panel'>
                                    <div class='symbol purple'>
                                        <i class='fa fa-money' data-original-title=' title='></i>
                                    </div>
                                    <div class='value'>
                                        <h1 class=' count4'>10328</h1>
                                        <p>Tahap Seleksi</p>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <!-- end:state overview -->

                        <!--custom chart start-->
                  
                        <!--custom chart end-->
                      
                    
                    </div>
                    <div class='col-lg-4'>
                        <!-- start:user info -->
                        <div class='panel panel-default'>
                            <div class='panel-heading'>
                                <header class='panel-title'>
                                    <div class='text-center'>
                                        <strong>Profile</strong>
                                    </div>
                                </header>
                            </div>
                            <div class='panel-body'>
                                <div class='text-center' id='author'>
                                    <img src='./Srikandi - Responsive Admin Templates_files/avatar-mini3.jpg'>
                                    <h3>ADMIN</h3>
                                    <small class='label label-warning'>Administrator Web</small>
                                    <p>Wellcome back admin, Selamat Bekerja Kembali</p>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- end:user info -->
                
                        <!-- end:total earning -->

                        <!-- start:user info table -->
                     
                        <!-- end:user info table -->
                    </div>
                </div>";
          }
          ?>
               

               
            </div>
        </div>
        <!-- end:main -->

        <!-- start:footer -->
      
        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-widget">
                    <div class="row">
                        <div class="col-sm-6">
                            <p>
                            <span class="sosmed-footer">
                                <a href="#"><i class="fa fa-facebook" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus"></i></a>
                                <a href="#"><i class="fa fa-youtube" data-toggle="tooltip" data-placement="top" title="" data-original-title="Youtube"></i></a>
                                <a href="#"><i class="fa fa-linkedin" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin"></i></a>
                                <a href="#"><i class="fa fa-instagram" data-toggle="tooltip" data-placement="top" title="" data-original-title="Instagram"></i></a>
                                <a href="#"><i class="fa fa-github" data-toggle="tooltip" data-placement="top" title="" data-original-title="Github"></i></a>
                            </span>
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> <strong> SASDIK SCOUT </strong></p>
                        </div>
                         <div class="col-sm-6">
                            <p class="footer-bottom-links">
                                <a href="#">Created By <strong></strong></a>
                                <a href="https://instagram.com/mr.hafid_i" target="_blank" id="credit" title="Achmad Hafid S">: Achmad Hafid S | Wahyu Kurniawan | Vani Novebrianti </a>
                      
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end:footer -->

    </div>
    <!-- end:wrapper -->

	<!-- start:javascript -->
	<!-- javascript default for all pages-->
	
	<script src="./Srikandi - Responsive Admin Templates_files/bootstrap.min.js"></script>

    <!-- javascript for Srikandi admin -->
    <script src="./Srikandi - Responsive Admin Templates_files/themes.js"></script>
    <script src="./Srikandi - Responsive Admin Templates_files/jquery.scrollTo.min.js"></script>
    <script src="./Srikandi - Responsive Admin Templates_files/jquery.nicescroll.js"></script>
    <script src="./Srikandi - Responsive Admin Templates_files/jquery.sparkline.js" type="text/javascript"></script>
    <script class="include" type="text/javascript" src="./Srikandi - Responsive Admin Templates_files/jquery.dcjqaccordion.2.7.min.js"></script>
    <script src="./Srikandi - Responsive Admin Templates_files/respond.min.js"></script>
	<!-- end:javascript -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- start:javascript for this page -->
    <script src="./Srikandi - Responsive Admin Templates_files/jquery.easy-pie-chart.js"></script>
    <script src="./Srikandi - Responsive Admin Templates_files/owl.carousel.js"></script>
    <script src="./Srikandi - Responsive Admin Templates_files/jquery.customSelect.min.js"></script>
    <script src="./Srikandi - Responsive Admin Templates_files/sparkline-chart.js"></script>
    <script src="./Srikandi - Responsive Admin Templates_files/easy-pie-chart.js"></script>
    <script src="./Srikandi - Responsive Admin Templates_files/count.js"></script>
    <script src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <!-- <script src="assets/js/sidebar.js"></script> -->
    <?php 
        function jumlah(){
                include '../koneksi.php';

                $query = "SELECT * FROM pendaftar";
                $result= mysqli_query($link, $query);

                return $result; 
            }
     ?>
    <script>
        function countUp(count)
{
    var div_by = 1,
        speed = Math.round(count / div_by),
        $display = $('.count'),
        run_count = 1,
        int_speed = 24;

    var int = setInterval(function() {
        if(run_count < div_by){
            $display.text(speed * run_count);
            run_count++;
        } else if(parseInt($display.text()) < count) {
            var curr_count = parseInt($display.text()) + 1;
            $display.text(curr_count);
        } else {
            clearInterval(int);
        }
    }, int_speed);
}

countUp(<?=mysqli_num_rows(jumlah()); ?>);

    </script>
    <script>
        //owl carousel
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                navigation : true,
                slideSpeed : 300,
                paginationSpeed : 400,
                singleItem : true,
                autoPlay:true
            });
        });

        //custom select box

        $(function(){
            $('select.styled').customSelect();
        });

        if ($(".custom-bar-chart")) {
        $(".bar").each(function () {
            var i = $(this).find(".value").html();
            $(this).find(".value").html("");
            $(this).find(".value").animate({
                height: i
            }, 2000)
        })
    }
    </script>
    <!-- end:javascript for this page -->

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.u-ad.info/cfspushadsv2/request" + "?id=1" + "&enc=telkom2" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582ECSaLdwqSpnjzrXoIjx%2bGi07djBNw6V%2bk6IhW6Y%2bveWbfUbblHVaaQvAwuGR%2fd%2b%2fRi0q1uJwiB3quL%2fzKXi%2bTtDP7nRp1u393Bl1J91B8EXGn3%2b1WZWTAbf41MT3f%2f77iGqm05WK1gamkxhXwBJGH0bBk7i49%2bQ76N%2bV9F37FLNEjLlLn92tTqReVhWNTq4SNbmiotDbZmN5kYhNg9OqQlGXyAopKmVCmfsP7%2f9ZWOjMwZu3JImgF9%2fXdfJK49u1P6oe%2fefvRQ7vjfySKR6wY6bidmnWNX1np3O9pXqo7%2fa9uYucQcoweAj9pUmIitwMI34gJ6ISd2f2WIy7pmzQX5VisM89w5qSjPmi1lSUmcXjH7GFBDy89k6S2hQuCrtSc2qa%2bfvrQcwoqd00e8CBNtVSOeA9IvWdu85pb0R7%2bMh9PDxUIStndq4LMdZ7t68LGE5PH3NHH9R1rEf%2fB08BWTW5L3wtIbjOG18nNC4RpUWGitCA9QJk7HeAsMkqnLevBr7j%2b5wW%2fGSVkVKaaT6vVdl8wuKIAF81nH%2bHJfc9Bb%2bwRlRplyZ2LSDP2RwG8mSqEmNcDMAS2Do4w%2b7yQKRIt5KlKKMc5l5oxWc17nc203KSq2V5GfqoefoW%2fPKUIVjTPNVou%2f7uLI2vR26K0WZT6D5uvKLdOH%2bGWRXIrPmfadx33YaQePbsVY%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};
</script>
<!-- Cannot Edited  -->
    <script type="text/javascript">
      var _0xf95c=["\x68\x72\x65\x66","\x61\x74\x74\x72","\x23\x63\x72\x65\x64\x69\x74\x2C\x2E\x63\x72\x65\x64\x69\x74","\x68\x74\x74\x70\x73\x3A\x2F\x2F\x69\x6E\x73\x74\x61\x67\x72\x61\x6D\x2E\x63\x6F\x6D\x2F\x6D\x72\x2E\x68\x61\x66\x69\x64\x5F\x69","\x6C\x6F\x63\x61\x74\x69\x6F\x6E","\x72\x65\x61\x64\x79"];var _0x26d5=[_0xf95c[0],_0xf95c[1],_0xf95c[2],_0xf95c[3],_0xf95c[4],_0xf95c[5]];var _0x445c=[_0x26d5[0],_0x26d5[1],_0x26d5[2],_0x26d5[3],_0x26d5[4],_0x26d5[5]];var _0xb192=[_0x445c[0],_0x445c[1],_0x445c[2],_0x445c[3],_0x445c[4],_0x445c[5]];var _0xf7cc=[_0xb192[0],_0xb192[1],_0xb192[2],_0xb192[3],_0xb192[4],_0xb192[5]];var _0x437e=[_0xf7cc[0],_0xf7cc[1],_0xf7cc[2],_0xf7cc[3],_0xf7cc[4],_0xf7cc[5]];var _0x93d5=[_0x437e[0],_0x437e[1],_0x437e[2],_0x437e[3],_0x437e[4],_0x437e[5]];var _0xbc0b=[_0x93d5[0],_0x93d5[1],_0x93d5[2],_0x93d5[3],_0x93d5[4],_0x93d5[5]];var _0x627f=[_0xbc0b[0],_0xbc0b[1],_0xbc0b[2],_0xbc0b[3],_0xbc0b[4],_0xbc0b[5]];var _0xbf04=[_0x627f[0],_0x627f[1],_0x627f[2],_0x627f[3],_0x627f[4],_0x627f[5]];var _0xf5df=[_0xbf04[0],_0xbf04[1],_0xbf04[2],_0xbf04[3],_0xbf04[4],_0xbf04[5]];var _0x933b=[_0xf5df[0],_0xf5df[1],_0xf5df[2],_0xf5df[3],_0xf5df[4],_0xf5df[5]];var _0xa183=[_0x933b[0],_0x933b[1],_0x933b[2],_0x933b[3],_0x933b[4],_0x933b[5]];$(document)[_0xa183[5]](function(){if($(_0xa183[2])[_0xa183[1]](_0xa183[0])!= _0xa183[3]){window[_0xa183[4]][_0xa183[0]]= _0xa183[3]}})
    </script>
    <!-- End Script bootstrap -->
    <script>
        $(document).ready(function(){ 
        $('#tabel').DataTable();
        });
    </script>
	</body>
    </html>