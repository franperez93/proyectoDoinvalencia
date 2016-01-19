<?php

/* DawplantillaBundle:Default:evento.html.twig */
class __TwigTemplate_e9d9b46293b3cc611e38b7aa5bf83b32b52e2df69b17ec9c59f5d75cedbe9622 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DawplantillaBundle:Default:evento.html.twig", 1);
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
        $__internal_1201a6bdb4717bf583df22aaf3072d1b7a5ef69104486c3553b4b2ab5cecf9f5 = $this->env->getExtension("native_profiler");
        $__internal_1201a6bdb4717bf583df22aaf3072d1b7a5ef69104486c3553b4b2ab5cecf9f5->enter($__internal_1201a6bdb4717bf583df22aaf3072d1b7a5ef69104486c3553b4b2ab5cecf9f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DawplantillaBundle:Default:evento.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1201a6bdb4717bf583df22aaf3072d1b7a5ef69104486c3553b4b2ab5cecf9f5->leave($__internal_1201a6bdb4717bf583df22aaf3072d1b7a5ef69104486c3553b4b2ab5cecf9f5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1bffe9d38da40a82db146f170fef10f992dec645b2b8637836054b2bf755fc2 = $this->env->getExtension("native_profiler");
        $__internal_a1bffe9d38da40a82db146f170fef10f992dec645b2b8637836054b2bf755fc2->enter($__internal_a1bffe9d38da40a82db146f170fef10f992dec645b2b8637836054b2bf755fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Pagina principal de DoInValencia";
        
        $__internal_a1bffe9d38da40a82db146f170fef10f992dec645b2b8637836054b2bf755fc2->leave($__internal_a1bffe9d38da40a82db146f170fef10f992dec645b2b8637836054b2bf755fc2_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_05d28709a57f794642314d9bfe03197fc1f5740609c5661bb4f09cbb260792cd = $this->env->getExtension("native_profiler");
        $__internal_05d28709a57f794642314d9bfe03197fc1f5740609c5661bb4f09cbb260792cd->enter($__internal_05d28709a57f794642314d9bfe03197fc1f5740609c5661bb4f09cbb260792cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dawplantilla/css/estilo.css"), "html", null, true);
        echo "\" type=\"text/css\" />";
        
        $__internal_05d28709a57f794642314d9bfe03197fc1f5740609c5661bb4f09cbb260792cd->leave($__internal_05d28709a57f794642314d9bfe03197fc1f5740609c5661bb4f09cbb260792cd_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a227577c1e18a096ef32a5f885ee217d3f760af9859c3502c86819406fc4261 = $this->env->getExtension("native_profiler");
        $__internal_4a227577c1e18a096ef32a5f885ee217d3f760af9859c3502c86819406fc4261->enter($__internal_4a227577c1e18a096ef32a5f885ee217d3f760af9859c3502c86819406fc4261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "   Hola Puta
";
        
        $__internal_4a227577c1e18a096ef32a5f885ee217d3f760af9859c3502c86819406fc4261->leave($__internal_4a227577c1e18a096ef32a5f885ee217d3f760af9859c3502c86819406fc4261_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_778e60bf6de8225be82b2c2161108394a49b510351ac934ab6fb58b02ba688df = $this->env->getExtension("native_profiler");
        $__internal_778e60bf6de8225be82b2c2161108394a49b510351ac934ab6fb58b02ba688df->enter($__internal_778e60bf6de8225be82b2c2161108394a49b510351ac934ab6fb58b02ba688df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_778e60bf6de8225be82b2c2161108394a49b510351ac934ab6fb58b02ba688df->leave($__internal_778e60bf6de8225be82b2c2161108394a49b510351ac934ab6fb58b02ba688df_prof);

    }

    public function getTemplateName()
    {
        return "DawplantillaBundle:Default:evento.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 11,  69 => 7,  63 => 6,  49 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* {% block title %}Pagina principal de DoInValencia{% endblock %}*/
/* {% block stylesheets %}<link rel="stylesheet" href="{{asset('bundles/dawplantilla/css/estilo.css')}}" type="text/css" />{% endblock %}*/
/* */
/* {% block body %}*/
/*    Hola Puta*/
/* {% endblock %}*/
/*         */
/*         */
/* {% block javascripts %}{% endblock %}*/
