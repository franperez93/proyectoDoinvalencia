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
        $__internal_999942afc48a1ec3a7265db1eb62a3a38ad6833e6d22474cf212fb3c9fa4ce6b = $this->env->getExtension("native_profiler");
        $__internal_999942afc48a1ec3a7265db1eb62a3a38ad6833e6d22474cf212fb3c9fa4ce6b->enter($__internal_999942afc48a1ec3a7265db1eb62a3a38ad6833e6d22474cf212fb3c9fa4ce6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
       
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 12
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
        // line 66
        $this->displayBlock('body', $context, $blocks);
        // line 69
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
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dawplantilla/js/script.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 91
        $this->displayBlock('javascripts', $context, $blocks);
        // line 92
        echo "    </body>
</html>
";
        
        $__internal_999942afc48a1ec3a7265db1eb62a3a38ad6833e6d22474cf212fb3c9fa4ce6b->leave($__internal_999942afc48a1ec3a7265db1eb62a3a38ad6833e6d22474cf212fb3c9fa4ce6b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_71971180f3568e5f5ef340aa0310d654df442a571ae0a1bbed558fa8474033f5 = $this->env->getExtension("native_profiler");
        $__internal_71971180f3568e5f5ef340aa0310d654df442a571ae0a1bbed558fa8474033f5->enter($__internal_71971180f3568e5f5ef340aa0310d654df442a571ae0a1bbed558fa8474033f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_71971180f3568e5f5ef340aa0310d654df442a571ae0a1bbed558fa8474033f5->leave($__internal_71971180f3568e5f5ef340aa0310d654df442a571ae0a1bbed558fa8474033f5_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3c80334cb2d09bf1cd73b9eac6451fa49f70e30abc5ff9db6a900a45b4ccb6de = $this->env->getExtension("native_profiler");
        $__internal_3c80334cb2d09bf1cd73b9eac6451fa49f70e30abc5ff9db6a900a45b4ccb6de->enter($__internal_3c80334cb2d09bf1cd73b9eac6451fa49f70e30abc5ff9db6a900a45b4ccb6de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3c80334cb2d09bf1cd73b9eac6451fa49f70e30abc5ff9db6a900a45b4ccb6de->leave($__internal_3c80334cb2d09bf1cd73b9eac6451fa49f70e30abc5ff9db6a900a45b4ccb6de_prof);

    }

    // line 66
    public function block_body($context, array $blocks = array())
    {
        $__internal_519ff245003df01eb79dfaf27169e313dd8ab27117fff763202893f5c068b993 = $this->env->getExtension("native_profiler");
        $__internal_519ff245003df01eb79dfaf27169e313dd8ab27117fff763202893f5c068b993->enter($__internal_519ff245003df01eb79dfaf27169e313dd8ab27117fff763202893f5c068b993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 67
        echo "        
        ";
        
        $__internal_519ff245003df01eb79dfaf27169e313dd8ab27117fff763202893f5c068b993->leave($__internal_519ff245003df01eb79dfaf27169e313dd8ab27117fff763202893f5c068b993_prof);

    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_87751ba367f140fc1432cd999678fdbc6a21af35748ee72d27f5968fa923e1a0 = $this->env->getExtension("native_profiler");
        $__internal_87751ba367f140fc1432cd999678fdbc6a21af35748ee72d27f5968fa923e1a0->enter($__internal_87751ba367f140fc1432cd999678fdbc6a21af35748ee72d27f5968fa923e1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_87751ba367f140fc1432cd999678fdbc6a21af35748ee72d27f5968fa923e1a0->leave($__internal_87751ba367f140fc1432cd999678fdbc6a21af35748ee72d27f5968fa923e1a0_prof);

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
        return array (  178 => 91,  170 => 67,  164 => 66,  153 => 10,  142 => 5,  133 => 92,  131 => 91,  127 => 90,  104 => 69,  102 => 66,  45 => 12,  42 => 11,  40 => 10,  32 => 5,  26 => 1,);
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
/*        */
/*         {% block stylesheets %}{% endblock %}*/
/*         */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     */
/*     <body>*/
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
