<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e56abfcefd4163499aacb53653c6fdc16afdde7e3325075321790b42c1eb6622 extends Twig_Template
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
        $__internal_4dd92c6d663f13af8d30a9a1722997c65f857ab9f22211b8d8501a403f90eaec = $this->env->getExtension("native_profiler");
        $__internal_4dd92c6d663f13af8d30a9a1722997c65f857ab9f22211b8d8501a403f90eaec->enter($__internal_4dd92c6d663f13af8d30a9a1722997c65f857ab9f22211b8d8501a403f90eaec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dd92c6d663f13af8d30a9a1722997c65f857ab9f22211b8d8501a403f90eaec->leave($__internal_4dd92c6d663f13af8d30a9a1722997c65f857ab9f22211b8d8501a403f90eaec_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_582f7963b66c8f18dec4c70805d9fdf3d22604bc836545e3fd41e0b81c1dec35 = $this->env->getExtension("native_profiler");
        $__internal_582f7963b66c8f18dec4c70805d9fdf3d22604bc836545e3fd41e0b81c1dec35->enter($__internal_582f7963b66c8f18dec4c70805d9fdf3d22604bc836545e3fd41e0b81c1dec35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_582f7963b66c8f18dec4c70805d9fdf3d22604bc836545e3fd41e0b81c1dec35->leave($__internal_582f7963b66c8f18dec4c70805d9fdf3d22604bc836545e3fd41e0b81c1dec35_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_81929bdf75ef2b800a9386d138a4b6b3f2c4ab6b432484ec4ab90a94f7edaf57 = $this->env->getExtension("native_profiler");
        $__internal_81929bdf75ef2b800a9386d138a4b6b3f2c4ab6b432484ec4ab90a94f7edaf57->enter($__internal_81929bdf75ef2b800a9386d138a4b6b3f2c4ab6b432484ec4ab90a94f7edaf57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_81929bdf75ef2b800a9386d138a4b6b3f2c4ab6b432484ec4ab90a94f7edaf57->leave($__internal_81929bdf75ef2b800a9386d138a4b6b3f2c4ab6b432484ec4ab90a94f7edaf57_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_20d7c49135b692a7a5b0426840631cd57741d73a42aa98a1d0f2623e6e0541d6 = $this->env->getExtension("native_profiler");
        $__internal_20d7c49135b692a7a5b0426840631cd57741d73a42aa98a1d0f2623e6e0541d6->enter($__internal_20d7c49135b692a7a5b0426840631cd57741d73a42aa98a1d0f2623e6e0541d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_20d7c49135b692a7a5b0426840631cd57741d73a42aa98a1d0f2623e6e0541d6->leave($__internal_20d7c49135b692a7a5b0426840631cd57741d73a42aa98a1d0f2623e6e0541d6_prof);

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
