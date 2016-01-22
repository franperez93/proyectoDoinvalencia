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
        $__internal_153f2fe2c1c9e230ac57672f47b4d69ace4a299e9f2a967d02d4d703e8cd9941 = $this->env->getExtension("native_profiler");
        $__internal_153f2fe2c1c9e230ac57672f47b4d69ace4a299e9f2a967d02d4d703e8cd9941->enter($__internal_153f2fe2c1c9e230ac57672f47b4d69ace4a299e9f2a967d02d4d703e8cd9941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_153f2fe2c1c9e230ac57672f47b4d69ace4a299e9f2a967d02d4d703e8cd9941->leave($__internal_153f2fe2c1c9e230ac57672f47b4d69ace4a299e9f2a967d02d4d703e8cd9941_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_38e37367dc07cb03efe88246d6e35a7d17b8c6496edca2ceca9b3fe0f10b6c17 = $this->env->getExtension("native_profiler");
        $__internal_38e37367dc07cb03efe88246d6e35a7d17b8c6496edca2ceca9b3fe0f10b6c17->enter($__internal_38e37367dc07cb03efe88246d6e35a7d17b8c6496edca2ceca9b3fe0f10b6c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_38e37367dc07cb03efe88246d6e35a7d17b8c6496edca2ceca9b3fe0f10b6c17->leave($__internal_38e37367dc07cb03efe88246d6e35a7d17b8c6496edca2ceca9b3fe0f10b6c17_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b280702cc45bf41bb6eb36ec77bbc5868f376dd4261b5542721e053a2b96fc9e = $this->env->getExtension("native_profiler");
        $__internal_b280702cc45bf41bb6eb36ec77bbc5868f376dd4261b5542721e053a2b96fc9e->enter($__internal_b280702cc45bf41bb6eb36ec77bbc5868f376dd4261b5542721e053a2b96fc9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b280702cc45bf41bb6eb36ec77bbc5868f376dd4261b5542721e053a2b96fc9e->leave($__internal_b280702cc45bf41bb6eb36ec77bbc5868f376dd4261b5542721e053a2b96fc9e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dfa94273ae03c19db72852fbc752817fcdb402a75ac8d674edb57122a78fbf32 = $this->env->getExtension("native_profiler");
        $__internal_dfa94273ae03c19db72852fbc752817fcdb402a75ac8d674edb57122a78fbf32->enter($__internal_dfa94273ae03c19db72852fbc752817fcdb402a75ac8d674edb57122a78fbf32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_dfa94273ae03c19db72852fbc752817fcdb402a75ac8d674edb57122a78fbf32->leave($__internal_dfa94273ae03c19db72852fbc752817fcdb402a75ac8d674edb57122a78fbf32_prof);

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
