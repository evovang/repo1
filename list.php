<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fav and touch icons -->
    
    <link rel="shortcut icon" href="icos/road.ico">
    <!-- <link rel="shorcut icon" class="icon glyphicon glyphicon-road ln-shadow-logo shape-0"> -->
    <title>Comparte Tu Coche - Bienvenido a la plataforma de compartir coche</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- styles needed for carousel slider -->
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- include pace script for automatic web page progress bar  -->

    <script>
        paceOptions = {
            elements: true
        };
    </script>
    <script src="assets/js/pace.min.js"></script>
</head>


<body>
    
    <?php
                            
        $dato1 = array(
                'avatar' => "./avatares/avatar1.jpg",
                'name' => "Ismael Galán.",
              //'trayecto' => "Córdoba a Sevilla.",
                'origen' => "Córdoba",
                'destino' => "Sevilla",
                'direccion' => "Av. América, 40.",
                'hora' => "10:00",
                'precio' => "10",
                'descripcion' => "Es un trayecto corto pero tenemos que estar atentos a las indicaciones al entrar en la ciudad.",
                'plazas' => "1"
                );                 
                                    
        $dato2 = array(
                'avatar' => "./avatares/avatar2.jpg",
                'name' => "Moisés Higuera.",
              //'trayecto' => "Córdoba a Huelva.",
                'origen' => "Córdoba",
                'destino' => "Huelva",
                'direccion' => "Av. Via Parque, 25.",
                'hora' => "11:00",
                'precio' => "20",
                'descripcion' => "Me gusta la buena conversación y soy prudente conduciendo.",
                'plazas' => "4"
                );    
         $dato3 = array(
                'avatar' => "./avatares/avatar3.jpg",
                'name' => "Laura García.",
              //'trayecto' => "Sevilla a Córdoba.",
                'origen' => "Sevilla",
                'destino' => "Córdoba",
                'direccion' => "Av. Kansas City, 15.",
                'hora' => "08:00",
                'precio' => "10",
                'descripcion' => "Voy a diario a Córdoba.",
                'plazas' => "2"
                );                 
                                    
        $dato4 = array(
                'avatar' => "./avatares/avatar4.jpg",
                'name' => "Francisco Gutierrez.",
              //'trayecto' => "Huelva a Sevilla.",
                'origen' => "Huelva",
                'destino' => "Sevilla",
                'direccion' => "Calle la Bogambilla, 10.",
                'hora' => "07:00",
                'precio' => "13",
                'descripcion' => "Es necesario que seais puntuales. Tengo compromisos que atender.",
                'plazas' => "3"
                );
        $dato5 = array(
                'avatar' => "./avatares/avatar5.jpg",
                'name' => "Alfonso Garrido.",
              //'trayecto' => "Huelva a Córdoba.",
                'origen' => "Huelva",
                'destino' => "Córdoba",
                'direccion' => "Av. los conquistadores, 50.",
                'hora' => "14:30",
                'precio' => "20",
                'descripcion' => "Voy a hacer turismo.",
                'plazas' => "1"
                );
                
        $trayectos = array(
                        0 => $dato1,
                        1 => $dato2,
                        2 => $dato3,
                        3 => $dato4,
                        4 => $dato5
                        );
                        $numresultados = count($trayectos);
        
        
        $trayectosFiltrados = array();
        
        for($i=0; $i<count($trayectos); $i=$i+1)
        {
            $a = $trayectos[$i]["origen"];
            $b = $_GET["country"];
            
            if ($a == $b)
            {
                $trayectosFiltrados[] = $trayectos[$i];
            }
        }
                                
    ?>
    
<div id="wrapper">
    <div class="header">
        <nav class="navbar   navbar-site navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                        <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
                            class="icon-bar"></span> <span class="icon-bar"></span></button>
                    <a href="index.html" class="navbar-brand logo logo-title">
                        <!-- Original Logo will be placed here  -->
                        <span class="logo-icon"><i class="icon glyphicon glyphicon-road ln-shadow-logo shape-0"></i> </span>
                        COMPARTE<span> TU COCHE </span> </a></div>

                <!--/.nav-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </div>
    <!-- /.header -->

    <div class="search-row-wrapper"
         style="background-image: url(images/jobs/ibg.jpg); background-size: cover; background-position: center center;">
        <div class="container text-center">
            <div class="col-sm-3 col-sm-offset-3">
                <select class="form-control" name="category" id="search-category">
                    <option selected="selected" value="">Localidad</option>
                    <option value="111">Huelva</option>
                    <option value="111">Cordoba</option>
                    <option value="111">Sevilla</option>
                </select>    
            </div>
            <div class="col-sm-3">
                <button class="btn btn-block btn-primary"> Buscar trayectos <i class="fa fa-search"></i></button>
            </div>
        </div>
    </div>    

    <div class="main-container inner-page">
        <div class="container">
            <div class="row clearfix">
<!-- this (.mobile-filter-sidebar) part will be position fixed in mobile version -->
                <div class="col-sm-3 page-sidebar mobile-filter-sidebar">
                    <aside>
                        <div class="inner-box">
                            <div class=" list-filter">
                                <h5 class="list-title"><strong><a href="#"> Fecha de publicación </a></strong></h5>

                                <div class="filter-date filter-content">
                                    <ul>
                                        <li>
                                            <input type="radio" value="1" id="posted_1" name="posted">
                                            <label for="posted_1">24 horas</label>
                                        </li>
                                        <li>
                                            <input type="radio" value="3" id="posted_3" name="posted">
                                            <label for="posted_3">3 días</label>
                                        </li>
                                        <li>
                                            <input type="radio" value="7" id="posted_7" name="posted">
                                            <label for="posted_7">7 días</label>
                                        </li>
                                        <li>
                                            <input type="radio" checked="checked" value="30" id="posted_30"
                                                   name="posted">
                                            <label for="posted_30">30 días</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--/.categories-list-->
                        </div>
                    </aside>
                </div>
                
                
                <!--/.page-side-bar-->
                <div class="col-sm-9 page-content col-thin-left">
                    <div class="category-list">
                        <div class="tab-box clearfix ">

                            <!-- Nav tabs -->
                            <div class="col-lg-12  box-title no-border">
                                <div class="inner">
                                    <h2><span> Trayectos </span> publicados
                                        <small> 
                                        
                                        <!-- aqui quiero mostrar el numero de resultados -->
                                        <?php echo count($trayectosFiltrados);
                                        ?>
                                        Resultados encontrados</small>


                                    </h2>
                                </div>
                            </div>
                            
                        <div class="adds-wrapper jobs-list">
                        
                        
                            <?php    
                                
                                for ($i = 0; $i < count($trayectosFiltrados); $i = $i + 1) 
                                {
                                    $i2=$i +1;
                            ?>
                        
                                <div class="item-list job-item">
                                          
                                        <div class="col-sm-1  col-xs-2 no-padding photobox">
                                            <div class="add-image"><a href=""><img class="thumbnail no-margin"
                                                                                   src="<?php echo $trayectosFiltrados[$i]['avatar'];?>"
                                                                                   alt="Avatar de Usuario"></a></div>
                                        </div>
                                        
                                        <!-- src="https://addons.cdn.mozilla.net/user-media/userpics/0/0/45.png?modified=1447324257" -->
                                        
                                        <!--/.photobox-->
                                        <div class="col-sm-10  col-xs-10  add-desc-box">
                                            <div class="add-details jobs-item">
                                                <h5 class="company-title"><a href=""><?php echo $trayectosFiltrados[$i]['name'];?></a></h5>
                                                <h4 class="job-title"><a href="job-details.html"><?php echo $i2.". " .$trayectosFiltrados[$i]['origen']." a ".$trayectosFiltrados[$i]['destino'];?></a></h4>
                                                <span class="info-row">  <span class="item-location"><i
                                                        class="fa fa-map-marker"></i><?php echo " ".$trayectosFiltrados[$i]['direccion'];?></span> <span class="date"><i
                                                        class=" icon-clock"> </i><?php echo " ".$trayectosFiltrados[$i]['hora'];?></span><span class=" salary">	<i
                                                        class=" icon-money"> </i><?php echo " ".$trayectosFiltrados[$i]['precio'];?>€</span></span>
                                                
                                                
                                                <div class="jobs-desc">
                                                    
                                                    <?php echo $trayectosFiltrados[$i]['descripcion'];?>
                                                    
                                                    
                                                    
                                                    <!-- recortar un parrafo en php -->
                                                    <?php
                                                    //$frase = "Un viaje entretenido y seguro, no me gusta correr. Además, pararemos a mitad de camino para tomar una rica tostada de sobraasada, y luego, directos a Huelva.";
                                                    //echo $frase;
                                                    //echo "<br>";
                                                    //echo "<br>";
                                                    //echo substr($frase, 0, 80) . " ...";  
                                                    //echo "<br>";
                                                    ?>
                                                    
                                                    </div>
        
        
                                                    <div class="job-actions">
                                                        <ul class="list-unstyled list-inline">
                                                            <li>
                                                                <span class="save-job">
                                                                    <span class="fa fa-users"></span>
                                                                    <?php echo $trayectosFiltrados[$i]['plazas']." ";?>plazas
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                
                                                </div>
                                        </div>
                                        <!--/.add-desc-box-->
        
                                        <!--/.add-desc-box-->
                                    </div>
                                    <!--/.job-item-->
                            <?php
                             }
                            ?>
                            
                            
                            
                            
                            
                            
                        </div>
                    </div>    
                </div>    
                
                
            </div>
        </div>
    </div>    
        
    <div class="footer" id="footer">
        <div class="container">
            <ul class=" pull-right navbar-link footer-nav">
                <li>Pruducto con fines educativos -
                
                    <!-- &copy; -->
                
                   <?php
                    $hoy = date("Y");
                    echo $hoy;
                    ?>
                    
                    - Desarrollado por Alcalá Software</li>
            </ul>
        </div>
    </div>
    <!-- /.footer -->
</div>
<!-- /.wrapper -->

<!-- Le javascript
================================================== -->

<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js">
</script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

<!-- include carousel slider plugin  -->
<script src="assets/js/owl.carousel.min.js"></script>

<!-- include form-validation plugin || add this script where you need validation   -->
<script src="assets/js/form-validation.js"></script>


<!-- include equal height plugin  -->
<script src="assets/js/jquery.matchHeight-min.js"></script>

<!-- include jquery list shorting plugin plugin  -->
<script src="assets/js/hideMaxListItem.js"></script>

<!-- include jquery.fs plugin for custom scroller and selecter  -->
<script src="assets/plugins/jquery.fs.scroller/jquery.fs.scroller.js"></script>
<script src="assets/plugins/jquery.fs.selecter/jquery.fs.selecter.js"></script>
<!-- include custom script for site  -->
<script src="assets/js/script.js"></script>
</body>
</html>