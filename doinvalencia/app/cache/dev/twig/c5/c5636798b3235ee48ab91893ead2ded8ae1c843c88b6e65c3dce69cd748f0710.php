<?php

/* DawplantillaBundle:Default:index.html.twig */
class __TwigTemplate_86cc6396635569795a638bed915f335151169964189c408d09fc3edd17cfaf7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DawplantillaBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1837b0ff53a8e5f4abea2e11f0144accdf4a504485e08307251a05915b95c71 = $this->env->getExtension("native_profiler");
        $__internal_f1837b0ff53a8e5f4abea2e11f0144accdf4a504485e08307251a05915b95c71->enter($__internal_f1837b0ff53a8e5f4abea2e11f0144accdf4a504485e08307251a05915b95c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DawplantillaBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1837b0ff53a8e5f4abea2e11f0144accdf4a504485e08307251a05915b95c71->leave($__internal_f1837b0ff53a8e5f4abea2e11f0144accdf4a504485e08307251a05915b95c71_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_35fbe57d96fb16bcb29b83d2a2adb365751465a498994265e310537f0eb97132 = $this->env->getExtension("native_profiler");
        $__internal_35fbe57d96fb16bcb29b83d2a2adb365751465a498994265e310537f0eb97132->enter($__internal_35fbe57d96fb16bcb29b83d2a2adb365751465a498994265e310537f0eb97132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pagina principal de DoInValencia";
        
        $__internal_35fbe57d96fb16bcb29b83d2a2adb365751465a498994265e310537f0eb97132->leave($__internal_35fbe57d96fb16bcb29b83d2a2adb365751465a498994265e310537f0eb97132_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_34431723a04c31fcdcfbdb3d4f0bae6b19cb51877b342bb09074fb679edc7176 = $this->env->getExtension("native_profiler");
        $__internal_34431723a04c31fcdcfbdb3d4f0bae6b19cb51877b342bb09074fb679edc7176->enter($__internal_34431723a04c31fcdcfbdb3d4f0bae6b19cb51877b342bb09074fb679edc7176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dawplantilla/css/estilo.css"), "html", null, true);
        echo "\" type=\"text/css\" />";
        
        $__internal_34431723a04c31fcdcfbdb3d4f0bae6b19cb51877b342bb09074fb679edc7176->leave($__internal_34431723a04c31fcdcfbdb3d4f0bae6b19cb51877b342bb09074fb679edc7176_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_56a1302d7e6655a70f6613b0b7a3734807992025f5e45443a594bc4793318425 = $this->env->getExtension("native_profiler");
        $__internal_56a1302d7e6655a70f6613b0b7a3734807992025f5e45443a594bc4793318425->enter($__internal_56a1302d7e6655a70f6613b0b7a3734807992025f5e45443a594bc4793318425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    
    <!--Aqui se encuntra el contenido de ejemplo para la parte principal-->
    <section class=\"main container\">
        <div class=\"row\">
            <!--Seccion principal -->
            <section class=\"posts col-md-9\">
                <!-- //son referencias de ejemplo.. de donde nos encontramos en cada momento, pero en la principal no hace falta
                <div class=\"indice\">
                    <ol class=\"breadcrumb\">
                        <li class=\"active\">Inicio</li>
                    </ol>
                </div>
                -->
                <div class=\"neighborhood-guides\">
                <div class=\"container\">
                    <h2>Ejemplo Eventos Thumbnail</h2>
                    <p>Tenemos eventos para todas las edades y gustos, ordenados por categorias o localización.</p>
                    <div class=\"row\">
                      <div class=\"col-md-4\">
                          <div class=\"thumbnail\">
                            <a href=\"evento\"><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dawplantilla/images/prueba/mexico-city.png"), "html", null, true);
        echo "\" ></a>
                          </div>
                          <div class=\"thumbnail\">
                            <a href=\"evento\"><img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dawplantilla/images/prueba/ny.png"), "html", null, true);
        echo "\" ></a>
                          </div>
                      </div>
                      <div class=\"col-md-4\">
                          <div class=\"thumbnail\">
                            <a href=\"evento\"><img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dawplantilla/images/prueba/tokyo.png"), "html", null, true);
        echo "\" ></a>
                          </div>
                          <div class=\"thumbnail\">
                            <a href=\"evento\"><img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dawplantilla/images/prueba/paris.png"), "html", null, true);
        echo "\" ></a>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
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
";
        
        $__internal_56a1302d7e6655a70f6613b0b7a3734807992025f5e45443a594bc4793318425->leave($__internal_56a1302d7e6655a70f6613b0b7a3734807992025f5e45443a594bc4793318425_prof);

    }

    // line 72
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_172bbbb5af94fce918540d43e59477afe7ab8628bad3beb072015305876590fd = $this->env->getExtension("native_profiler");
        $__internal_172bbbb5af94fce918540d43e59477afe7ab8628bad3beb072015305876590fd->enter($__internal_172bbbb5af94fce918540d43e59477afe7ab8628bad3beb072015305876590fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_172bbbb5af94fce918540d43e59477afe7ab8628bad3beb072015305876590fd->leave($__internal_172bbbb5af94fce918540d43e59477afe7ab8628bad3beb072015305876590fd_prof);

    }

    public function getTemplateName()
    {
        return "DawplantillaBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 72,  112 => 39,  106 => 36,  98 => 31,  92 => 28,  69 => 7,  63 => 6,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Pagina principal de DoInValencia{% endblock %}*/
/* {% block stylesheets %}<link rel="stylesheet" href="{{asset('bundles/dawplantilla/css/estilo.css')}}" type="text/css" />{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     */
/*     <!--Aqui se encuntra el contenido de ejemplo para la parte principal-->*/
/*     <section class="main container">*/
/*         <div class="row">*/
/*             <!--Seccion principal -->*/
/*             <section class="posts col-md-9">*/
/*                 <!-- //son referencias de ejemplo.. de donde nos encontramos en cada momento, pero en la principal no hace falta*/
/*                 <div class="indice">*/
/*                     <ol class="breadcrumb">*/
/*                         <li class="active">Inicio</li>*/
/*                     </ol>*/
/*                 </div>*/
/*                 -->*/
/*                 <div class="neighborhood-guides">*/
/*                 <div class="container">*/
/*                     <h2>Ejemplo Eventos Thumbnail</h2>*/
/*                     <p>Tenemos eventos para todas las edades y gustos, ordenados por categorias o localización.</p>*/
/*                     <div class="row">*/
/*                       <div class="col-md-4">*/
/*                           <div class="thumbnail">*/
/*                             <a href="evento"><img src="{{asset('bundles/dawplantilla/images/prueba/mexico-city.png')}}" ></a>*/
/*                           </div>*/
/*                           <div class="thumbnail">*/
/*                             <a href="evento"><img src="{{asset('bundles/dawplantilla/images/prueba/ny.png')}}" ></a>*/
/*                           </div>*/
/*                       </div>*/
/*                       <div class="col-md-4">*/
/*                           <div class="thumbnail">*/
/*                             <a href="evento"><img src="{{asset('bundles/dawplantilla/images/prueba/tokyo.png')}}" ></a>*/
/*                           </div>*/
/*                           <div class="thumbnail">*/
/*                             <a href="evento"><img src="{{asset('bundles/dawplantilla/images/prueba/paris.png')}}" ></a>*/
/*                           </div>*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
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
/* {% endblock %}*/
/*         */
/*         */
/* {% block javascripts %}{% endblock %}*/
