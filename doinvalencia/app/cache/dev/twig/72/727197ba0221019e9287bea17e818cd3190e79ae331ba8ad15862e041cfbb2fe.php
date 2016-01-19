<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_04ecc35498577735b5398fec2d4cd7e38da50b9e2232c3107bd00495391b12ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3cb74c53829fe9e27353f805521e5352f4026ff32b26460ed4c89e9dc2515ead = $this->env->getExtension("native_profiler");
        $__internal_3cb74c53829fe9e27353f805521e5352f4026ff32b26460ed4c89e9dc2515ead->enter($__internal_3cb74c53829fe9e27353f805521e5352f4026ff32b26460ed4c89e9dc2515ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cb74c53829fe9e27353f805521e5352f4026ff32b26460ed4c89e9dc2515ead->leave($__internal_3cb74c53829fe9e27353f805521e5352f4026ff32b26460ed4c89e9dc2515ead_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a664d7b96301737f9892555d52c6a65124f732588c37b9a153345d807f5c5d8a = $this->env->getExtension("native_profiler");
        $__internal_a664d7b96301737f9892555d52c6a65124f732588c37b9a153345d807f5c5d8a->enter($__internal_a664d7b96301737f9892555d52c6a65124f732588c37b9a153345d807f5c5d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a664d7b96301737f9892555d52c6a65124f732588c37b9a153345d807f5c5d8a->leave($__internal_a664d7b96301737f9892555d52c6a65124f732588c37b9a153345d807f5c5d8a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_648d9d4b6c31bc7e46756d3bff4772d772619633d8d6b1e9e964f45d04656660 = $this->env->getExtension("native_profiler");
        $__internal_648d9d4b6c31bc7e46756d3bff4772d772619633d8d6b1e9e964f45d04656660->enter($__internal_648d9d4b6c31bc7e46756d3bff4772d772619633d8d6b1e9e964f45d04656660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_648d9d4b6c31bc7e46756d3bff4772d772619633d8d6b1e9e964f45d04656660->leave($__internal_648d9d4b6c31bc7e46756d3bff4772d772619633d8d6b1e9e964f45d04656660_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4cd9bf609d4d71ae8cc6a490647f45799b13d738b12090f527a3de125dd8bbb = $this->env->getExtension("native_profiler");
        $__internal_f4cd9bf609d4d71ae8cc6a490647f45799b13d738b12090f527a3de125dd8bbb->enter($__internal_f4cd9bf609d4d71ae8cc6a490647f45799b13d738b12090f527a3de125dd8bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f4cd9bf609d4d71ae8cc6a490647f45799b13d738b12090f527a3de125dd8bbb->leave($__internal_f4cd9bf609d4d71ae8cc6a490647f45799b13d738b12090f527a3de125dd8bbb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
