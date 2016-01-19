<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9db4a4790874367e40228650f0551cf2ee8d9f727f467855010e272bf73c4c3f extends Twig_Template
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
        $__internal_291cf15e219eca7aad30d34a43780ee6887d99eb820113a1d09ab288fb492dd0 = $this->env->getExtension("native_profiler");
        $__internal_291cf15e219eca7aad30d34a43780ee6887d99eb820113a1d09ab288fb492dd0->enter($__internal_291cf15e219eca7aad30d34a43780ee6887d99eb820113a1d09ab288fb492dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_291cf15e219eca7aad30d34a43780ee6887d99eb820113a1d09ab288fb492dd0->leave($__internal_291cf15e219eca7aad30d34a43780ee6887d99eb820113a1d09ab288fb492dd0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1bf975fd126c1f3d0f5a634e1cbe356f3a6daf0870552fa66cffc21ec24ecc65 = $this->env->getExtension("native_profiler");
        $__internal_1bf975fd126c1f3d0f5a634e1cbe356f3a6daf0870552fa66cffc21ec24ecc65->enter($__internal_1bf975fd126c1f3d0f5a634e1cbe356f3a6daf0870552fa66cffc21ec24ecc65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1bf975fd126c1f3d0f5a634e1cbe356f3a6daf0870552fa66cffc21ec24ecc65->leave($__internal_1bf975fd126c1f3d0f5a634e1cbe356f3a6daf0870552fa66cffc21ec24ecc65_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_90997b4211824c680b928b8e5edc747631b6a65e40cb0bb951df9e635af63406 = $this->env->getExtension("native_profiler");
        $__internal_90997b4211824c680b928b8e5edc747631b6a65e40cb0bb951df9e635af63406->enter($__internal_90997b4211824c680b928b8e5edc747631b6a65e40cb0bb951df9e635af63406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_90997b4211824c680b928b8e5edc747631b6a65e40cb0bb951df9e635af63406->leave($__internal_90997b4211824c680b928b8e5edc747631b6a65e40cb0bb951df9e635af63406_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1991d2771a67b4b05e61e558492661a856cd918286d9ddeccff57258e48c498 = $this->env->getExtension("native_profiler");
        $__internal_f1991d2771a67b4b05e61e558492661a856cd918286d9ddeccff57258e48c498->enter($__internal_f1991d2771a67b4b05e61e558492661a856cd918286d9ddeccff57258e48c498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f1991d2771a67b4b05e61e558492661a856cd918286d9ddeccff57258e48c498->leave($__internal_f1991d2771a67b4b05e61e558492661a856cd918286d9ddeccff57258e48c498_prof);

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
