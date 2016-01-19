<?php

/* DawplantillaBundle:Default:index.html.1.twig */
class __TwigTemplate_d7500d80bf3f901b664b5947f378dd3e09bfaa187de43a76affdab51ca01e3f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c37bcd4d00c517cd4f6d0966d712fade8837443875c0b06afc6b21f3802b4784 = $this->env->getExtension("native_profiler");
        $__internal_c37bcd4d00c517cd4f6d0966d712fade8837443875c0b06afc6b21f3802b4784->enter($__internal_c37bcd4d00c517cd4f6d0966d712fade8837443875c0b06afc6b21f3802b4784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DawplantillaBundle:Default:index.html.1.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Nuestra Web Del Proyecto</title>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width,user-scalable=no, initial-scale=1.0 maximum-scale=1.0, minimum-scale=1.0\">
        
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dawplantilla/css/estilo.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        
        
    </head>

<body>
    
    <!--Aqui tenemos el jumbotron de la pagina web-->
    <section class=\"jumbotron\">
        <div class=\"container\">
            <h1>DoInValencia</h1>
            <p>Eventos que podemos encontrar en la provincia de valencia i alrededores</p>
        </div>
    </section>
    
    <!--Aqui se encuntra la barra de navegacion-->
    <header>
        <nav class=\"navbar navbar-inverse navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navegacionBar\">
                        <span class=\"sr-only\">Desplegar menu</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a href=\"#\" class=\"navbar-brand\">DoInValencia</a>
                </div>
                <!--Iniciamos aqui el menu-->
                <div class=\"collapse navbar-collapse\" id=\"navegacionBar\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"active\"><a href=\"#\">Inicio</a></li>
                        <li><a href=\"#\">Pagina 1</a></li>
                        <li><a href=\"#\">Pagina 2</a></li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\">
                            Elementos <span class=\"caret\"></span>
                            </a>
                            <ul class=\"dropdown-menu\" role=\"menu\">
                                <li><a href=\"#\">Elemento 1</a></li>
                                <li class=\"divider\"></li>
                                <li><a href=\"#\">Elemento 2</a></li>
                                <li class=\"divider\"></li>
                                <li><a href=\"#\">Elemento 3</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!--parte derecha del menu-->
                    <div class=\"navbar-text navbar-right\">
                        <a href=\"#\" class=\"btn btn-xs btn-primary\"><span class=\"glyphicon glyphicon-user\"></span> Usuario</a>
                        <a href=\"#\" class=\"btn btn-xs btn-danger\"><span class=\"glyphicon glyphicon-log-out\"></span> Salir</a>
                    </div>
                </div>
            </div>
        </nav>    
    </header>
    
    <!-- Una seccion con un slide de las portadas de los proximos eventos???-->
    <!-- <section></section> -->
    
    <!--Aqui se encuntra el contenido de ejemplo para la parte principal-->
    <section class=\"main container\">
        <div class=\"row\">
            <!--Seccion principal-->
            <section class=\"posts col-md-9\">
                <div class=\"indice\">
                    <ol class=\"breadcrumb\">
                        <!--son referencias de ejemplo.. en este caso solo estaria inicio ya que estamos en la principal-->
                        <li><a href=\"#\">Inicio</a></li>
                        <li><a href=\"#\">Categorias</a></li>
                        <li class=\"active\">Diseño web</li>
                    </ol>
                </div>
                <!-- Articulo 1-->
                <article class=\"post clearfix\">
                    <a href=\"#\" class=\"thumb pull-left\">
                        <img class=\"img-thumbnail imagen\" src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dawplantilla/images/bootstrap.png"), "html", null, true);
        echo "\"></img>
                    </a>
                    <h2 class=\"post-tittle\">
                        <a href=\"#\">Titulo de ejemplo</a>
                    </h2>
                    <p class=\"post-contenido text-justify\">
                        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
                        Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500,
                        cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una
                        galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.
                    </p>
                    <p align=\"right\"><span class=\"fecha\">14 de Enero de 2016</span> por <span class=\"post-autor\"><a href=\"#\">Fran Perez</a></span></p><br>
                    <div class=\"contenedor-botones\">
                        <a href=\"#\" class=\"btn btn-success\">Comentar <span class=\"badge\">10</span></a>
                    </div>
                </article>
                 <!-- Articulo 2-->
                <article class=\"post clearfix\">
                    <a href=\"#\" class=\"thumb pull-left\">
                        <img class=\"img-thumbnail imagen\" src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dawplantilla/images/html.png"), "html", null, true);
        echo "\"></img>
                    </a>
                    <h2 class=\"post-tittle\">
                        <a href=\"#\">Titulo de ejemplo 2</a>
                    </h2>
                    <p class=\"post-contenido text-justify\">
                        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
                        Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500,
                        cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una
                        galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.
                    </p>
                    <p align=\"right\"><span class=\"fecha\">13 de Enero de 2016</span> por <span class=\"post-autor\"><a href=\"#\">Fran Perez</a></span></p>
                    <div class=\"contenedor-botones\">
                        <a href=\"#\" class=\"btn btn-success\">Comentar <span class=\"badge\">20</span></a>
                    </div>
                </article>
                <!--Barra de paginacion-->
                <nav>
                    <div clas=\"center-block\">
                        <ul class=\"pagination\">
                            <li class=\"disabled\"><a href=\"#\">&laquo;<span class=\"sr-only\">Anterior</span></a></li>
                            <li class=\"active\"><a href=\"#\">1</a></li>
                            <li><a href=\"#\">2</a></li>
                            <li><a href=\"#\">3</a></li>
                            <li><a href=\"#\">4</a></li>
                            <li><a href=\"#\">5</a></li>
                            <li><a href=\"#\">&raquo;<span class=\"sr-only\">Siguiente</span></a></li>
                        </ul>
                    </div>  
                </nav>
            </section>
            <!--Seccion secundaria Barra lateral-->
            <aside class=\"col-md-3 hidden-xd hidden-sm\">
                <h4>Clase</h4>
                <div class==\"list-group\">
                    <a href=\"#\" class=\"list-group-item active\">Fran</a>
                    <a href=\"#\" class=\"list-group-item\">Emilio</a>
                    <a href=\"#\" class=\"list-group-item\">Victor</a>
                    <a href=\"#\" class=\"list-group-item\">Raul cabron</a>
                    <a href=\"#\" class=\"list-group-item\">Josep maricon</a>
                </div>
                
                <h4>Articulos recientes</h4>
                <a href=\"#\" class=\"list-group-item\">
                    <h4 class=\"list-group-item-heading\">Titulo de ejemplo</h4>
                    <p class=\"list-group-item-text\">como hacer un artiuclo de ejemplo</p>
                </a>
                <a href=\"#\" class=\"list-group-item\">
                    <h4 class=\"list-group-item-heading\">Titulo de ejemplo 2</h4>
                    <p class=\"list-group-item-text\">como hacer un artiuclo de ejemplo 2</p>
                </a>
            </aside>
        </div>
    </section>
   
   <!-- Footer de la pagina web-->
    <footer class=\"site-footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-6\">
                    <p>Esto es el footer de la web</p> 
                </div>
                <div class=\"col-xs-6\">
                    <ul class=\"list-inline text-right lista-footer\">
                        <li><a href=\"#\">prueba 1</a></li>
                        <li><a href=\"#\">prueba 2</a></li>
                        <li><a href=\"#\">prueba 3</a></li>
                    </ul> 
                </div>
            </div>
        </div>
    </footer>
   
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
</body>

</html>";
        
        $__internal_c37bcd4d00c517cd4f6d0966d712fade8837443875c0b06afc6b21f3802b4784->leave($__internal_c37bcd4d00c517cd4f6d0966d712fade8837443875c0b06afc6b21f3802b4784_prof);

    }

    public function getTemplateName()
    {
        return "DawplantillaBundle:Default:index.html.1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 104,  111 => 85,  32 => 9,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <title>Nuestra Web Del Proyecto</title>*/
/*         <meta charset="UTF-8">*/
/*         <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0 maximum-scale=1.0, minimum-scale=1.0">*/
/*         */
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/*         <link rel="stylesheet" href="{{asset('bundles/dawplantilla/css/estilo.css')}}" type="text/css" />*/
/*         */
/*         */
/*     </head>*/
/* */
/* <body>*/
/*     */
/*     <!--Aqui tenemos el jumbotron de la pagina web-->*/
/*     <section class="jumbotron">*/
/*         <div class="container">*/
/*             <h1>DoInValencia</h1>*/
/*             <p>Eventos que podemos encontrar en la provincia de valencia i alrededores</p>*/
/*         </div>*/
/*     </section>*/
/*     */
/*     <!--Aqui se encuntra la barra de navegacion-->*/
/*     <header>*/
/*         <nav class="navbar navbar-inverse navbar-static-top" role="navigation">*/
/*             <div class="container">*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacionBar">*/
/*                         <span class="sr-only">Desplegar menu</span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a href="#" class="navbar-brand">DoInValencia</a>*/
/*                 </div>*/
/*                 <!--Iniciamos aqui el menu-->*/
/*                 <div class="collapse navbar-collapse" id="navegacionBar">*/
/*                     <ul class="nav navbar-nav">*/
/*                         <li class="active"><a href="#">Inicio</a></li>*/
/*                         <li><a href="#">Pagina 1</a></li>*/
/*                         <li><a href="#">Pagina 2</a></li>*/
/*                         <li class="dropdown">*/
/*                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">*/
/*                             Elementos <span class="caret"></span>*/
/*                             </a>*/
/*                             <ul class="dropdown-menu" role="menu">*/
/*                                 <li><a href="#">Elemento 1</a></li>*/
/*                                 <li class="divider"></li>*/
/*                                 <li><a href="#">Elemento 2</a></li>*/
/*                                 <li class="divider"></li>*/
/*                                 <li><a href="#">Elemento 3</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                     </ul>*/
/*                     <!--parte derecha del menu-->*/
/*                     <div class="navbar-text navbar-right">*/
/*                         <a href="#" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-user"></span> Usuario</a>*/
/*                         <a href="#" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-log-out"></span> Salir</a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </nav>    */
/*     </header>*/
/*     */
/*     <!-- Una seccion con un slide de las portadas de los proximos eventos???-->*/
/*     <!-- <section></section> -->*/
/*     */
/*     <!--Aqui se encuntra el contenido de ejemplo para la parte principal-->*/
/*     <section class="main container">*/
/*         <div class="row">*/
/*             <!--Seccion principal-->*/
/*             <section class="posts col-md-9">*/
/*                 <div class="indice">*/
/*                     <ol class="breadcrumb">*/
/*                         <!--son referencias de ejemplo.. en este caso solo estaria inicio ya que estamos en la principal-->*/
/*                         <li><a href="#">Inicio</a></li>*/
/*                         <li><a href="#">Categorias</a></li>*/
/*                         <li class="active">Diseño web</li>*/
/*                     </ol>*/
/*                 </div>*/
/*                 <!-- Articulo 1-->*/
/*                 <article class="post clearfix">*/
/*                     <a href="#" class="thumb pull-left">*/
/*                         <img class="img-thumbnail imagen" src="{{asset('bundles/dawplantilla/images/bootstrap.png')}}"></img>*/
/*                     </a>*/
/*                     <h2 class="post-tittle">*/
/*                         <a href="#">Titulo de ejemplo</a>*/
/*                     </h2>*/
/*                     <p class="post-contenido text-justify">*/
/*                         Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.*/
/*                         Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500,*/
/*                         cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una*/
/*                         galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.*/
/*                     </p>*/
/*                     <p align="right"><span class="fecha">14 de Enero de 2016</span> por <span class="post-autor"><a href="#">Fran Perez</a></span></p><br>*/
/*                     <div class="contenedor-botones">*/
/*                         <a href="#" class="btn btn-success">Comentar <span class="badge">10</span></a>*/
/*                     </div>*/
/*                 </article>*/
/*                  <!-- Articulo 2-->*/
/*                 <article class="post clearfix">*/
/*                     <a href="#" class="thumb pull-left">*/
/*                         <img class="img-thumbnail imagen" src="{{asset('bundles/dawplantilla/images/html.png')}}"></img>*/
/*                     </a>*/
/*                     <h2 class="post-tittle">*/
/*                         <a href="#">Titulo de ejemplo 2</a>*/
/*                     </h2>*/
/*                     <p class="post-contenido text-justify">*/
/*                         Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.*/
/*                         Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500,*/
/*                         cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una*/
/*                         galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.*/
/*                     </p>*/
/*                     <p align="right"><span class="fecha">13 de Enero de 2016</span> por <span class="post-autor"><a href="#">Fran Perez</a></span></p>*/
/*                     <div class="contenedor-botones">*/
/*                         <a href="#" class="btn btn-success">Comentar <span class="badge">20</span></a>*/
/*                     </div>*/
/*                 </article>*/
/*                 <!--Barra de paginacion-->*/
/*                 <nav>*/
/*                     <div clas="center-block">*/
/*                         <ul class="pagination">*/
/*                             <li class="disabled"><a href="#">&laquo;<span class="sr-only">Anterior</span></a></li>*/
/*                             <li class="active"><a href="#">1</a></li>*/
/*                             <li><a href="#">2</a></li>*/
/*                             <li><a href="#">3</a></li>*/
/*                             <li><a href="#">4</a></li>*/
/*                             <li><a href="#">5</a></li>*/
/*                             <li><a href="#">&raquo;<span class="sr-only">Siguiente</span></a></li>*/
/*                         </ul>*/
/*                     </div>  */
/*                 </nav>*/
/*             </section>*/
/*             <!--Seccion secundaria Barra lateral-->*/
/*             <aside class="col-md-3 hidden-xd hidden-sm">*/
/*                 <h4>Clase</h4>*/
/*                 <div class=="list-group">*/
/*                     <a href="#" class="list-group-item active">Fran</a>*/
/*                     <a href="#" class="list-group-item">Emilio</a>*/
/*                     <a href="#" class="list-group-item">Victor</a>*/
/*                     <a href="#" class="list-group-item">Raul cabron</a>*/
/*                     <a href="#" class="list-group-item">Josep maricon</a>*/
/*                 </div>*/
/*                 */
/*                 <h4>Articulos recientes</h4>*/
/*                 <a href="#" class="list-group-item">*/
/*                     <h4 class="list-group-item-heading">Titulo de ejemplo</h4>*/
/*                     <p class="list-group-item-text">como hacer un artiuclo de ejemplo</p>*/
/*                 </a>*/
/*                 <a href="#" class="list-group-item">*/
/*                     <h4 class="list-group-item-heading">Titulo de ejemplo 2</h4>*/
/*                     <p class="list-group-item-text">como hacer un artiuclo de ejemplo 2</p>*/
/*                 </a>*/
/*             </aside>*/
/*         </div>*/
/*     </section>*/
/*    */
/*    <!-- Footer de la pagina web-->*/
/*     <footer class="site-footer">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-xs-6">*/
/*                     <p>Esto es el footer de la web</p> */
/*                 </div>*/
/*                 <div class="col-xs-6">*/
/*                     <ul class="list-inline text-right lista-footer">*/
/*                         <li><a href="#">prueba 1</a></li>*/
/*                         <li><a href="#">prueba 2</a></li>*/
/*                         <li><a href="#">prueba 3</a></li>*/
/*                     </ul> */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </footer>*/
/*    */
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/*     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/* </body>*/
/* */
/* </html>*/
