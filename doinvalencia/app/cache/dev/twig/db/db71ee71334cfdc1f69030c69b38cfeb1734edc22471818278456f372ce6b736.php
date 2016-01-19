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
        $__internal_5f25d071ddb420bd2cf2ad9623f51ccc6aa942d0d5d7f09131d094ae09688966 = $this->env->getExtension("native_profiler");
        $__internal_5f25d071ddb420bd2cf2ad9623f51ccc6aa942d0d5d7f09131d094ae09688966->enter($__internal_5f25d071ddb420bd2cf2ad9623f51ccc6aa942d0d5d7f09131d094ae09688966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
    
        ";
        // line 66
        $this->displayBlock('body', $context, $blocks);
        // line 67
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
        ";
        // line 88
        $this->displayBlock('javascripts', $context, $blocks);
        // line 89
        echo "    </body>
</html>
";
        
        $__internal_5f25d071ddb420bd2cf2ad9623f51ccc6aa942d0d5d7f09131d094ae09688966->leave($__internal_5f25d071ddb420bd2cf2ad9623f51ccc6aa942d0d5d7f09131d094ae09688966_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5819d73e2f27b86dd39ec0818f973c1d49a2992dd7960710b1290fd21eec6af = $this->env->getExtension("native_profiler");
        $__internal_f5819d73e2f27b86dd39ec0818f973c1d49a2992dd7960710b1290fd21eec6af->enter($__internal_f5819d73e2f27b86dd39ec0818f973c1d49a2992dd7960710b1290fd21eec6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f5819d73e2f27b86dd39ec0818f973c1d49a2992dd7960710b1290fd21eec6af->leave($__internal_f5819d73e2f27b86dd39ec0818f973c1d49a2992dd7960710b1290fd21eec6af_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a43503c029f9be5dfc1213502f68216d63239c2e3f0ecf9152df3a67c87c89df = $this->env->getExtension("native_profiler");
        $__internal_a43503c029f9be5dfc1213502f68216d63239c2e3f0ecf9152df3a67c87c89df->enter($__internal_a43503c029f9be5dfc1213502f68216d63239c2e3f0ecf9152df3a67c87c89df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a43503c029f9be5dfc1213502f68216d63239c2e3f0ecf9152df3a67c87c89df->leave($__internal_a43503c029f9be5dfc1213502f68216d63239c2e3f0ecf9152df3a67c87c89df_prof);

    }

    // line 66
    public function block_body($context, array $blocks = array())
    {
        $__internal_2647637d3ff40735c26fc75c491b1177af0fbfe9b02af8eb2c47e313579989a0 = $this->env->getExtension("native_profiler");
        $__internal_2647637d3ff40735c26fc75c491b1177af0fbfe9b02af8eb2c47e313579989a0->enter($__internal_2647637d3ff40735c26fc75c491b1177af0fbfe9b02af8eb2c47e313579989a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2647637d3ff40735c26fc75c491b1177af0fbfe9b02af8eb2c47e313579989a0->leave($__internal_2647637d3ff40735c26fc75c491b1177af0fbfe9b02af8eb2c47e313579989a0_prof);

    }

    // line 88
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_df9c372ab618653e911ffc5d151eb6882848d7339fe690f85607ab1d0ff5ca82 = $this->env->getExtension("native_profiler");
        $__internal_df9c372ab618653e911ffc5d151eb6882848d7339fe690f85607ab1d0ff5ca82->enter($__internal_df9c372ab618653e911ffc5d151eb6882848d7339fe690f85607ab1d0ff5ca82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_df9c372ab618653e911ffc5d151eb6882848d7339fe690f85607ab1d0ff5ca82->leave($__internal_df9c372ab618653e911ffc5d151eb6882848d7339fe690f85607ab1d0ff5ca82_prof);

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
        return array (  171 => 88,  160 => 66,  149 => 10,  138 => 5,  129 => 89,  127 => 88,  104 => 67,  102 => 66,  45 => 12,  42 => 11,  40 => 10,  32 => 5,  26 => 1,);
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
/*                 <p>Eventos que podemos encontrar en la provincia de valencia i alrededores</p>*/
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
/*         {% block body %}{% endblock %}*/
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
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
