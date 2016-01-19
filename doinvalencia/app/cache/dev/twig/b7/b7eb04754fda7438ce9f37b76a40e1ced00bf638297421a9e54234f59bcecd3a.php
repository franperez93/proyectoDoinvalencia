<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4337059617e3b48877a07362950a20c9f57d2e21e1214978fdf89be5568640e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f0aaa49d7fecdeb3a9ac7cbb6715618445b1efc97786a7d56a36ceadf563ce75 = $this->env->getExtension("native_profiler");
        $__internal_f0aaa49d7fecdeb3a9ac7cbb6715618445b1efc97786a7d56a36ceadf563ce75->enter($__internal_f0aaa49d7fecdeb3a9ac7cbb6715618445b1efc97786a7d56a36ceadf563ce75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0aaa49d7fecdeb3a9ac7cbb6715618445b1efc97786a7d56a36ceadf563ce75->leave($__internal_f0aaa49d7fecdeb3a9ac7cbb6715618445b1efc97786a7d56a36ceadf563ce75_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_641c2c375c457f5243bbbdf5be584099331171c6594ade518fcbb648c5e35e20 = $this->env->getExtension("native_profiler");
        $__internal_641c2c375c457f5243bbbdf5be584099331171c6594ade518fcbb648c5e35e20->enter($__internal_641c2c375c457f5243bbbdf5be584099331171c6594ade518fcbb648c5e35e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_641c2c375c457f5243bbbdf5be584099331171c6594ade518fcbb648c5e35e20->leave($__internal_641c2c375c457f5243bbbdf5be584099331171c6594ade518fcbb648c5e35e20_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c6d4d5554271657299aed52c0da0e382c9664d04bf8d1f26187f367f6ccbec33 = $this->env->getExtension("native_profiler");
        $__internal_c6d4d5554271657299aed52c0da0e382c9664d04bf8d1f26187f367f6ccbec33->enter($__internal_c6d4d5554271657299aed52c0da0e382c9664d04bf8d1f26187f367f6ccbec33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c6d4d5554271657299aed52c0da0e382c9664d04bf8d1f26187f367f6ccbec33->leave($__internal_c6d4d5554271657299aed52c0da0e382c9664d04bf8d1f26187f367f6ccbec33_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0e91df4d452948cf71b97ab37ff6edb9c313aec976456117fc2aa7a1c91ae20b = $this->env->getExtension("native_profiler");
        $__internal_0e91df4d452948cf71b97ab37ff6edb9c313aec976456117fc2aa7a1c91ae20b->enter($__internal_0e91df4d452948cf71b97ab37ff6edb9c313aec976456117fc2aa7a1c91ae20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0e91df4d452948cf71b97ab37ff6edb9c313aec976456117fc2aa7a1c91ae20b->leave($__internal_0e91df4d452948cf71b97ab37ff6edb9c313aec976456117fc2aa7a1c91ae20b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
