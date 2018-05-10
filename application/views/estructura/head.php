<!DOCTYPE html>
<html lang="en">
    <head>
 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
        <title>MORO SPA | pagina web </title>
 
        
        <link rel="shortcut icon" href="http://localhost/moro/assets/img/favicon.ico"  type="image/x-icon">
       <!-- Bootstrap core CSS -->
        <link href="<?=base_url()?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Latest compiled and minified CSS  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->    
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.11/css/all.css" integrity="sha384-p2jx59pefphTFIpeqCcISO9MdVfIm4pNnsL08A6v5vaQc4owkQqxMV8kg4Yvhaw/" crossorigin="anonymous">

        <!-- Font Google-->
        <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"">
        <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nanum+Myeongjo" rel="stylesheet">

        <script type="text/javascript">
                CI_ROOT = "<?=base_url()?>";
        </script>
 
        <link href="<?=base_url()?>/assets/css/style_css.css" rel="stylesheet">
        

    </head>
    <body>
        <header>
          <div class="container">

            <nav class="navbar navbar-expand-lg navbar-light bg-light   ">
              <a class="navbar-brand" href="#"><img style="width: 70px"  src="<?=base_url()?>/assets/img/moro_logo.jpg"></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto">
            </ul>
          
            <ul class="navbar-nav">
 
                <li class="nav-item">
                    <a class="link_menu <? echo ($this->uri->segment(1) == 'home')? 'active' : ' ' ;  ?>" id="home" href="<?=site_url('home/index')?>" >HOME</a>
                </li>
                 <li class="nav-item">
                    <a class="link_menu <? echo ($this->uri->segment(1) == 'historia')? 'active' : ' ' ;  ?>" id="historia" href="<?=site_url('historia/index')?>">LOS MORO</a>
                </li>
                 <li class="nav-item">
                    <a class="link_menu <? echo ($this->uri->segment(1) == 'producto')? 'active' : ' ' ;  ?>" id="producto" href="<?=site_url('producto/index')?>">PRODUCTOS</a>
                </li>
                <li class="nav-item">
                    <a class="link_menu <? echo ($this->uri->segment(1) == 'servicio')? 'active' : ' ' ;  ?>" id="servicio" href="<?=site_url('servicio/index')?>">MEDICAL SPA</a>
                </li>
                <li class="nav-item">
                    <a class="link_menu <? echo ($this->uri->segment(1) == 'curso')? 'active' : ' ' ;  ?>" id="curso" href="<?=site_url('curso/index')?>">CURSOS</a>
                </li>
                <li class="nav-item">
                    <a class="link_menu <? echo ($this->uri->segment(1) == 'contacto')? 'active' : ' ' ;  ?>" id="contacto" href="<?=site_url('contacto/index')?>">CONTACTO</a>
                </li>
                <li class="nav-item">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item">
                          <a  href="https://www.facebook.com/cristinamorook/" class="btn-floating btn-sm rgba-white-slight mx-1"  target="_blank">
                            <i class="fab fa-facebook-f"></i>
                          </a>
                        </li> 
                        <li class="list-inline-item">
                          <a target="_blank" class="btn-floating btn-sm rgba-white-slight mx-1">
                            <i class="fab fa-google-plus-g"></i>
                          </a>
                        </li>
                        <li class="list-inline-item">
                          <a target="_blank" class="btn-floating btn-sm rgba-white-slight mx-1">
                            <i class="fab fa-linkedin-in"></i>
                          </a>
                        </li>
                    </ul>
                </li>
            </ul>
 
              </div>
            </nav>
          </div>

            <?php /*
            <nav class="navbar navbar-default mu-main-navbar" role="navigation">  
              <div class="container">
                <div class="navbar-header">
                  <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>

                  <!-- LOGO -->       
                  <a class="navbar-brand " href="index.html">
                        MORO SPA
                  </a>  
                 

                </div>
                <div id="navbar" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav navbar-right mu-main-nav">
                    <li><a href="<?=site_url('home/index')?>">HOME</a></li>
                    <li><a href="<?=site_url('servicio/index')?>">SERVICIOS SPA</a></li>
                    <li><a href="<?=site_url('producto/index')?>">PRODUCTOS</a></li>   
                    <li><a href="<?=site_url('curso/index')?>">CURSOS</a></li>                    
                    <li><a href="<?=site_url('historia/index')?>">HISTORIA</a></li>                   
                    <li><a href="<?=site_url('contacto/index')?>">CONTACTO</a></li> 
                  </ul>                            
                </div>       
              </div>          
            </nav>    */ ?>
        </header>
