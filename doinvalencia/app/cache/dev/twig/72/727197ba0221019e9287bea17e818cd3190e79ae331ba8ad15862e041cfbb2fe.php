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
        $__internal_972dbf43ff241daef07e9f06a3c6dcdf7be9692de6208a166ec1373bdb28d962 = $this->env->getExtension("native_profiler");
        $__internal_972dbf43ff241daef07e9f06a3c6dcdf7be9692de6208a166ec1373bdb28d962->enter($__internal_972dbf43ff241daef07e9f06a3c6dcdf7be9692de6208a166ec1373bdb28d962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_972dbf43ff241daef07e9f06a3c6dcdf7be9692de6208a166ec1373bdb28d962->leave($__internal_972dbf43ff241daef07e9f06a3c6dcdf7be9692de6208a166ec1373bdb28d962_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f2c2dfa64c8dc4d26159c36724a0fb93bd398cc577eabd729f62d38985a9b36b = $this->env->getExtension("native_profiler");
        $__internal_f2c2dfa64c8dc4d26159c36724a0fb93bd398cc577eabd729f62d38985a9b36b->enter($__internal_f2c2dfa64c8dc4d26159c36724a0fb93bd398cc577eabd729f62d38985a9b36b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f2c2dfa64c8dc4d26159c36724a0fb93bd398cc577eabd729f62d38985a9b36b->leave($__internal_f2c2dfa64c8dc4d26159c36724a0fb93bd398cc577eabd729f62d38985a9b36b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c56ba7bcc35fdeed18079a410cb24f89511564f391f20fda940996b5aae0a9c6 = $this->env->getExtension("native_profiler");
        $__internal_c56ba7bcc35fdeed18079a410cb24f89511564f391f20fda940996b5aae0a9c6->enter($__internal_c56ba7bcc35fdeed18079a410cb24f89511564f391f20fda940996b5aae0a9c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c56ba7bcc35fdeed18079a410cb24f89511564f391f20fda940996b5aae0a9c6->leave($__internal_c56ba7bcc35fdeed18079a410cb24f89511564f391f20fda940996b5aae0a9c6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ebaaeae3b69e16befe5e48766a181e5f971a9815eed7cd1b2c0384e92c0ff4f = $this->env->getExtension("native_profiler");
        $__internal_2ebaaeae3b69e16befe5e48766a181e5f971a9815eed7cd1b2c0384e92c0ff4f->enter($__internal_2ebaaeae3b69e16befe5e48766a181e5f971a9815eed7cd1b2c0384e92c0ff4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2ebaaeae3b69e16befe5e48766a181e5f971a9815eed7cd1b2c0384e92c0ff4f->leave($__internal_2ebaaeae3b69e16befe5e48766a181e5f971a9815eed7cd1b2c0384e92c0ff4f_prof);

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
