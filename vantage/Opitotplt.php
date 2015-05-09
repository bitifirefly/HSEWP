<html>
<head>
    <link href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    </head>
<body>

    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">
            <div class="jumbotron">
                <h1>Opito</h1>
            </div>
           <div id="menu" class="collapse navbar-collapse ">
          <?php wp_nav_menu(array('menu' => 'Opito',
                                  'container'=>'nav',
                                  'menu_class' => 'nav navbar-nav',
                                 ));?>  
          </div>

        </div><!-- #content .site-content -->
    </div><!-- #primary .content-area -->


</body>
</html>