<?php

/* ::base.html.twig */
class __TwigTemplate_c885e46e9d41d43b9948ac562e4b08eab71c7d15d9b1155bd2ca2f4864fd4a30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_999942afc48a1ec3a7265db1eb62a3a38ad6833e6d22474cf212fb3c9fa4ce6b = $this->env->getExtension("native_profiler");
        $__internal_999942afc48a1ec3a7265db1eb62a3a38ad6833e6d22474cf212fb3c9fa4ce6b->enter($__internal_999942afc48a1ec3a7265db1eb62a3a38ad6833e6d22474cf212fb3c9fa4ce6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));
=======
        $__internal_960485d22e066031502b4c3f30868b2f0dd7b0caacae77ff680895e6dc48bcb9 = $this->env->getExtension("native_profiler");
        $__internal_960485d22e066031502b4c3f30868b2f0dd7b0caacae77ff680895e6dc48bcb9->enter($__internal_960485d22e066031502b4c3f30868b2f0dd7b0caacae77ff680895e6dc48bcb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));
>>>>>>> 61036a7fd39d278cd0cec9d15fe5e3764451249b

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        <meta name=\"viewport\" content=\"width=device-width,user-scalable=no, initial-scale=1.0 maximum-scale=1.0, minimum-scale=1.0\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dawplantilla/css/estilo.css"), "html", null, true);
        echo "\" type=\"text/css\" />
       
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    
    <body>
        
         <!--Aqui tenemos el jumbotron de la pagina web-->
        <section class=\"jumbotron\">
            <div class=\"container\">
                <h1>DoInValencia</h1>
                <p>Eventos que podemos encontrar en la provincia de valencia y alrededores</p>
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
                    <a href=\"home\" class=\"navbar-brand\">DoInValencia</a>
                </div>
                <!--Iniciamos aqui el menu-->
                <div class=\"collapse navbar-collapse\" id=\"navegacionBar\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"active\"><a href=\"#\">Inicio</a></li>
                        <li><a href=\"#\">Pagina 1</a></li>
                        <li><a href=\"#\">Pagina 2</a></li>
                        <li class=\"dropdown elementos\">
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
    
        ";
        // line 68
        $this->displayBlock('body', $context, $blocks);
        // line 71
        echo "        
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
        <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dawplantilla/js/script.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 93
        $this->displayBlock('javascripts', $context, $blocks);
        // line 94
        echo "    </body>
</html>
";
        
<<<<<<< HEAD
        $__internal_999942afc48a1ec3a7265db1eb62a3a38ad6833e6d22474cf212fb3c9fa4ce6b->leave($__internal_999942afc48a1ec3a7265db1eb62a3a38ad6833e6d22474cf212fb3c9fa4ce6b_prof);
=======
        $__internal_960485d22e066031502b4c3f30868b2f0dd7b0caacae77ff680895e6dc48bcb9->leave($__internal_960485d22e066031502b4c3f30868b2f0dd7b0caacae77ff680895e6dc48bcb9_prof);
>>>>>>> 61036a7fd39d278cd0cec9d15fe5e3764451249b

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_71971180f3568e5f5ef340aa0310d654df442a571ae0a1bbed558fa8474033f5 = $this->env->getExtension("native_profiler");
        $__internal_71971180f3568e5f5ef340aa0310d654df442a571ae0a1bbed558fa8474033f5->enter($__internal_71971180f3568e5f5ef340aa0310d654df442a571ae0a1bbed558fa8474033f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_71971180f3568e5f5ef340aa0310d654df442a571ae0a1bbed558fa8474033f5->leave($__internal_71971180f3568e5f5ef340aa0310d654df442a571ae0a1bbed558fa8474033f5_prof);
=======
        $__internal_351dfe86a4538a0bef137ce7f3166e46093bce865dcd5c0b79fa65f9c60bc24a = $this->env->getExtension("native_profiler");
        $__internal_351dfe86a4538a0bef137ce7f3166e46093bce865dcd5c0b79fa65f9c60bc24a->enter($__internal_351dfe86a4538a0bef137ce7f3166e46093bce865dcd5c0b79fa65f9c60bc24a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_351dfe86a4538a0bef137ce7f3166e46093bce865dcd5c0b79fa65f9c60bc24a->leave($__internal_351dfe86a4538a0bef137ce7f3166e46093bce865dcd5c0b79fa65f9c60bc24a_prof);
>>>>>>> 61036a7fd39d278cd0cec9d15fe5e3764451249b

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_3c80334cb2d09bf1cd73b9eac6451fa49f70e30abc5ff9db6a900a45b4ccb6de = $this->env->getExtension("native_profiler");
        $__internal_3c80334cb2d09bf1cd73b9eac6451fa49f70e30abc5ff9db6a900a45b4ccb6de->enter($__internal_3c80334cb2d09bf1cd73b9eac6451fa49f70e30abc5ff9db6a900a45b4ccb6de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3c80334cb2d09bf1cd73b9eac6451fa49f70e30abc5ff9db6a900a45b4ccb6de->leave($__internal_3c80334cb2d09bf1cd73b9eac6451fa49f70e30abc5ff9db6a900a45b4ccb6de_prof);
=======
        $__internal_cd33f530696300adb14b15ab545ab4ed955b7b9c1a336ec48fb694b87f04178e = $this->env->getExtension("native_profiler");
        $__internal_cd33f530696300adb14b15ab545ab4ed955b7b9c1a336ec48fb694b87f04178e->enter($__internal_cd33f530696300adb14b15ab545ab4ed955b7b9c1a336ec48fb694b87f04178e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cd33f530696300adb14b15ab545ab4ed955b7b9c1a336ec48fb694b87f04178e->leave($__internal_cd33f530696300adb14b15ab545ab4ed955b7b9c1a336ec48fb694b87f04178e_prof);
>>>>>>> 61036a7fd39d278cd0cec9d15fe5e3764451249b

    }

    // line 68
    public function block_body($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_519ff245003df01eb79dfaf27169e313dd8ab27117fff763202893f5c068b993 = $this->env->getExtension("native_profiler");
        $__internal_519ff245003df01eb79dfaf27169e313dd8ab27117fff763202893f5c068b993->enter($__internal_519ff245003df01eb79dfaf27169e313dd8ab27117fff763202893f5c068b993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));
=======
        $__internal_8bf6a843cc16c309558025e565ba5ca9f43ca66470e386fe9c515e2131295439 = $this->env->getExtension("native_profiler");
        $__internal_8bf6a843cc16c309558025e565ba5ca9f43ca66470e386fe9c515e2131295439->enter($__internal_8bf6a843cc16c309558025e565ba5ca9f43ca66470e386fe9c515e2131295439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));
>>>>>>> 61036a7fd39d278cd0cec9d15fe5e3764451249b

        // line 69
        echo "        
        ";
        
<<<<<<< HEAD
        $__internal_519ff245003df01eb79dfaf27169e313dd8ab27117fff763202893f5c068b993->leave($__internal_519ff245003df01eb79dfaf27169e313dd8ab27117fff763202893f5c068b993_prof);
=======
        $__internal_8bf6a843cc16c309558025e565ba5ca9f43ca66470e386fe9c515e2131295439->leave($__internal_8bf6a843cc16c309558025e565ba5ca9f43ca66470e386fe9c515e2131295439_prof);
>>>>>>> 61036a7fd39d278cd0cec9d15fe5e3764451249b

    }

    // line 93
    public function block_javascripts($context, array $blocks = array())
    {
<<<<<<< HEAD
        $__internal_87751ba367f140fc1432cd999678fdbc6a21af35748ee72d27f5968fa923e1a0 = $this->env->getExtension("native_profiler");
        $__internal_87751ba367f140fc1432cd999678fdbc6a21af35748ee72d27f5968fa923e1a0->enter($__internal_87751ba367f140fc1432cd999678fdbc6a21af35748ee72d27f5968fa923e1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_87751ba367f140fc1432cd999678fdbc6a21af35748ee72d27f5968fa923e1a0->leave($__internal_87751ba367f140fc1432cd999678fdbc6a21af35748ee72d27f5968fa923e1a0_prof);
=======
        $__internal_5f5aaf1924a39252016dd643dae4a6fe193f732cdfdfa085bb0f8c5a509a5f64 = $this->env->getExtension("native_profiler");
        $__internal_5f5aaf1924a39252016dd643dae4a6fe193f732cdfdfa085bb0f8c5a509a5f64->enter($__internal_5f5aaf1924a39252016dd643dae4a6fe193f732cdfdfa085bb0f8c5a509a5f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5f5aaf1924a39252016dd643dae4a6fe193f732cdfdfa085bb0f8c5a509a5f64->leave($__internal_5f5aaf1924a39252016dd643dae4a6fe193f732cdfdfa085bb0f8c5a509a5f64_prof);
>>>>>>> 61036a7fd39d278cd0cec9d15fe5e3764451249b

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 93,  175 => 69,  169 => 68,  158 => 11,  147 => 5,  138 => 94,  136 => 93,  132 => 92,  109 => 71,  107 => 68,  49 => 13,  46 => 12,  44 => 11,  39 => 9,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}{% endblock %}</title>*/
/*         */
/*         <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0 maximum-scale=1.0, minimum-scale=1.0">*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/*         <link rel="stylesheet" href="{{asset('bundles/dawplantilla/css/estilo.css')}}" type="text/css" />*/
/*        */
/*         {% block stylesheets %}{% endblock %}*/
/*         */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     */
/*     <body>*/
/*         */
/*          <!--Aqui tenemos el jumbotron de la pagina web-->*/
/*         <section class="jumbotron">*/
/*             <div class="container">*/
/*                 <h1>DoInValencia</h1>*/
/*                 <p>Eventos que podemos encontrar en la provincia de valencia y alrededores</p>*/
/*             </div>*/
/*         </section>*/
/*     */
/*         <!--Aqui se encuntra la barra de navegacion-->*/
/*         <header>*/
/*         <nav class="navbar navbar-inverse navbar-static-top" role="navigation">*/
/*             <div class="container">*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacionBar">*/
/*                         <span class="sr-only">Desplegar menu</span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a href="home" class="navbar-brand">DoInValencia</a>*/
/*                 </div>*/
/*                 <!--Iniciamos aqui el menu-->*/
/*                 <div class="collapse navbar-collapse" id="navegacionBar">*/
/*                     <ul class="nav navbar-nav">*/
/*                         <li class="active"><a href="#">Inicio</a></li>*/
/*                         <li><a href="#">Pagina 1</a></li>*/
/*                         <li><a href="#">Pagina 2</a></li>*/
/*                         <li class="dropdown elementos">*/
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
/*         {% block body %}*/
/*         */
/*         {% endblock %}*/
/*         */
/*          <!-- Footer de la pagina web-->*/
/*         <footer class="site-footer">*/
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
/*     */
/*         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/*         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/*         <script src="{{asset('bundles/dawplantilla/js/script.js')}}"></script>*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
