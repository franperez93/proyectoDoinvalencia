<?php

/* ::base.html.twig */
class __TwigTemplate_7807cc552f6cec433cd6093d230ebcb2e4e7be48f18c08437a4903dca0c830d7 extends Twig_Template
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
        $__internal_7fdb9e64633f7a7b2283b38f8180e54f47c32a20e7a995e82ac298a97d285622 = $this->env->getExtension("native_profiler");
        $__internal_7fdb9e64633f7a7b2283b38f8180e54f47c32a20e7a995e82ac298a97d285622->enter($__internal_7fdb9e64633f7a7b2283b38f8180e54f47c32a20e7a995e82ac298a97d285622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "    </body>
</html>
";
        
        $__internal_7fdb9e64633f7a7b2283b38f8180e54f47c32a20e7a995e82ac298a97d285622->leave($__internal_7fdb9e64633f7a7b2283b38f8180e54f47c32a20e7a995e82ac298a97d285622_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b46ef1a484d2e360ad3cea4ff219f5f3c41fa3884a0d105ff5dfdc6db462ebcb = $this->env->getExtension("native_profiler");
        $__internal_b46ef1a484d2e360ad3cea4ff219f5f3c41fa3884a0d105ff5dfdc6db462ebcb->enter($__internal_b46ef1a484d2e360ad3cea4ff219f5f3c41fa3884a0d105ff5dfdc6db462ebcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b46ef1a484d2e360ad3cea4ff219f5f3c41fa3884a0d105ff5dfdc6db462ebcb->leave($__internal_b46ef1a484d2e360ad3cea4ff219f5f3c41fa3884a0d105ff5dfdc6db462ebcb_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c79f3cf5ca5538db3077aed13768e49a0506b02404f5e19a0a0111e5d47b130f = $this->env->getExtension("native_profiler");
        $__internal_c79f3cf5ca5538db3077aed13768e49a0506b02404f5e19a0a0111e5d47b130f->enter($__internal_c79f3cf5ca5538db3077aed13768e49a0506b02404f5e19a0a0111e5d47b130f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c79f3cf5ca5538db3077aed13768e49a0506b02404f5e19a0a0111e5d47b130f->leave($__internal_c79f3cf5ca5538db3077aed13768e49a0506b02404f5e19a0a0111e5d47b130f_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb0c2323e90c4fc08f7e1895d71060d95174ae04027905be237ffe09c0a5b9eb = $this->env->getExtension("native_profiler");
        $__internal_cb0c2323e90c4fc08f7e1895d71060d95174ae04027905be237ffe09c0a5b9eb->enter($__internal_cb0c2323e90c4fc08f7e1895d71060d95174ae04027905be237ffe09c0a5b9eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cb0c2323e90c4fc08f7e1895d71060d95174ae04027905be237ffe09c0a5b9eb->leave($__internal_cb0c2323e90c4fc08f7e1895d71060d95174ae04027905be237ffe09c0a5b9eb_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_00e44fb1d0224e8ace5c2b5f7ca673ac1b98e13c1bb5649cdbf56487476300b6 = $this->env->getExtension("native_profiler");
        $__internal_00e44fb1d0224e8ace5c2b5f7ca673ac1b98e13c1bb5649cdbf56487476300b6->enter($__internal_00e44fb1d0224e8ace5c2b5f7ca673ac1b98e13c1bb5649cdbf56487476300b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_00e44fb1d0224e8ace5c2b5f7ca673ac1b98e13c1bb5649cdbf56487476300b6->leave($__internal_00e44fb1d0224e8ace5c2b5f7ca673ac1b98e13c1bb5649cdbf56487476300b6_prof);

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
        return array (  97 => 15,  86 => 14,  75 => 10,  63 => 5,  54 => 16,  51 => 15,  49 => 14,  42 => 11,  40 => 10,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         */
/*         <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0 maximum-scale=1.0, minimum-scale=1.0">*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/*         */
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
