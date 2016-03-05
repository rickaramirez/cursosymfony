<?php

/* base.html.twig */
class __TwigTemplate_565208372f3e16c096b6ead7fce39e678031c4c852036e3968c855b95179b569 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'section_title' => array($this, 'block_section_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d56753a479e53ae247241b92aaaa02cf8eab1705e92c09ff124f69753ba5e7eb = $this->env->getExtension("native_profiler");
        $__internal_d56753a479e53ae247241b92aaaa02cf8eab1705e92c09ff124f69753ba5e7eb->enter($__internal_d56753a479e53ae247241b92aaaa02cf8eab1705e92c09ff124f69753ba5e7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>
            ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "        </title>
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    </head>
    <body>
        ";
        // line 16
        $this->loadTemplate("header.html.twig", "base.html.twig", 16)->display($context);
        // line 17
        echo "        <div class=\"container\">
        
        <h1 id=\"lb_section_title\">
            ";
        // line 20
        $this->displayBlock('section_title', $context, $blocks);
        // line 23
        echo "        </h1>
            ";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        // line 25
        echo "    
            
        </div>
        ";
        // line 28
        $this->loadTemplate("footer.html.twig", "base.html.twig", 28)->display($context);
        // line 29
        echo "            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
        echo "    </body>
</html>
";
        
        $__internal_d56753a479e53ae247241b92aaaa02cf8eab1705e92c09ff124f69753ba5e7eb->leave($__internal_d56753a479e53ae247241b92aaaa02cf8eab1705e92c09ff124f69753ba5e7eb_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b427172246e0735be8391e2ab46b7638e8669546b08b6ae1341d94f3bbe2f11 = $this->env->getExtension("native_profiler");
        $__internal_4b427172246e0735be8391e2ab46b7638e8669546b08b6ae1341d94f3bbe2f11->enter($__internal_4b427172246e0735be8391e2ab46b7638e8669546b08b6ae1341d94f3bbe2f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "                Mi empresas SA
            ";
        
        $__internal_4b427172246e0735be8391e2ab46b7638e8669546b08b6ae1341d94f3bbe2f11->leave($__internal_4b427172246e0735be8391e2ab46b7638e8669546b08b6ae1341d94f3bbe2f11_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1226a7e8a6b92c309a09379c99621e9fb3155a71ea92c14ca69870be18d59017 = $this->env->getExtension("native_profiler");
        $__internal_1226a7e8a6b92c309a09379c99621e9fb3155a71ea92c14ca69870be18d59017->enter($__internal_1226a7e8a6b92c309a09379c99621e9fb3155a71ea92c14ca69870be18d59017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link rel=\"stylesheet\" media=\"screen\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/utilities/bootstrap.min.css"), "html", null, true);
        echo "\"
            <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/main.min.css"), "html", null, true);
        echo "\"
        ";
        
        $__internal_1226a7e8a6b92c309a09379c99621e9fb3155a71ea92c14ca69870be18d59017->leave($__internal_1226a7e8a6b92c309a09379c99621e9fb3155a71ea92c14ca69870be18d59017_prof);

    }

    // line 20
    public function block_section_title($context, array $blocks = array())
    {
        $__internal_96bb7ed1d81c38df072c010589ce9968dcfcf7c37ca391ffb70111eecaa403fc = $this->env->getExtension("native_profiler");
        $__internal_96bb7ed1d81c38df072c010589ce9968dcfcf7c37ca391ffb70111eecaa403fc->enter($__internal_96bb7ed1d81c38df072c010589ce9968dcfcf7c37ca391ffb70111eecaa403fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section_title"));

        // line 21
        echo "                
            ";
        
        $__internal_96bb7ed1d81c38df072c010589ce9968dcfcf7c37ca391ffb70111eecaa403fc->leave($__internal_96bb7ed1d81c38df072c010589ce9968dcfcf7c37ca391ffb70111eecaa403fc_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_35301c237c3ad18e2962f4f1be9a0b2a3ab015eaba7689607ea2aa97e61483ab = $this->env->getExtension("native_profiler");
        $__internal_35301c237c3ad18e2962f4f1be9a0b2a3ab015eaba7689607ea2aa97e61483ab->enter($__internal_35301c237c3ad18e2962f4f1be9a0b2a3ab015eaba7689607ea2aa97e61483ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "            ";
        
        $__internal_35301c237c3ad18e2962f4f1be9a0b2a3ab015eaba7689607ea2aa97e61483ab->leave($__internal_35301c237c3ad18e2962f4f1be9a0b2a3ab015eaba7689607ea2aa97e61483ab_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cc9b49f9202263978dee4f1c402cfaca372c90709570372fd299608ad047885d = $this->env->getExtension("native_profiler");
        $__internal_cc9b49f9202263978dee4f1c402cfaca372c90709570372fd299608ad047885d->enter($__internal_cc9b49f9202263978dee4f1c402cfaca372c90709570372fd299608ad047885d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 30
        echo "                <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/utilities/jquery-1.12.1.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/utilities/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            ";
        
        $__internal_cc9b49f9202263978dee4f1c402cfaca372c90709570372fd299608ad047885d->leave($__internal_cc9b49f9202263978dee4f1c402cfaca372c90709570372fd299608ad047885d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 31,  145 => 30,  139 => 29,  132 => 25,  126 => 24,  118 => 21,  112 => 20,  103 => 12,  98 => 11,  92 => 10,  84 => 7,  78 => 6,  69 => 33,  66 => 29,  64 => 28,  59 => 25,  57 => 24,  54 => 23,  52 => 20,  47 => 17,  45 => 16,  41 => 14,  39 => 10,  36 => 9,  34 => 6,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>*/
/*             {% block title %}*/
/*                 Mi empresas SA*/
/*             {% endblock %}*/
/*         </title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" media="screen" href="{{ asset('public/css/utilities/bootstrap.min.css') }}"*/
/*             <link rel="stylesheet" media="screen" href="{{ asset('public/css/main.min.css') }}"*/
/*         {% endblock %}*/
/*     </head>*/
/*     <body>*/
/*         {% include 'header.html.twig' %}*/
/*         <div class="container">*/
/*         */
/*         <h1 id="lb_section_title">*/
/*             {% block section_title %}*/
/*                 */
/*             {% endblock %}*/
/*         </h1>*/
/*             {% block body %}*/
/*             {% endblock %}    */
/*             */
/*         </div>*/
/*         {% include 'footer.html.twig' %}*/
/*             {% block javascripts %}*/
/*                 <script src="{{ asset('public/js/utilities/jquery-1.12.1.min.js') }}"></script>*/
/*                 <script src="{{ asset('public/js/utilities/bootstrap.min.js') }}"></script>*/
/*             {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
