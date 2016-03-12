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
            'stylesheet' => array($this, 'block_stylesheet'),
            'javascript' => array($this, 'block_javascript'),
            'section_title' => array($this, 'block_section_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3429583fa12d2446b8c1d980d18bab60452e8fac9187aaaf124476aefa84026b = $this->env->getExtension("native_profiler");
        $__internal_3429583fa12d2446b8c1d980d18bab60452e8fac9187aaaf124476aefa84026b->enter($__internal_3429583fa12d2446b8c1d980d18bab60452e8fac9187aaaf124476aefa84026b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('javascript', $context, $blocks);
        // line 18
        echo "    </head>
    ";
        // line 19
        $this->loadTemplate("header.html.twig", "base.html.twig", 19)->display($context);
        // line 20
        echo "    <body>
        <div class=\"container\">
            <h1>
                ";
        // line 23
        $this->displayBlock('section_title', $context, $blocks);
        // line 25
        echo "            </h1>
            ";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 27
        echo "   
        </div>
    </body>
    ";
        // line 30
        $this->loadTemplate("footer.html.twig", "base.html.twig", 30)->display($context);
        // line 31
        echo "</html>
";
        
        $__internal_3429583fa12d2446b8c1d980d18bab60452e8fac9187aaaf124476aefa84026b->leave($__internal_3429583fa12d2446b8c1d980d18bab60452e8fac9187aaaf124476aefa84026b_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_11b1ca47a89a51de61e59100a6adb0f5b9255167ea9d28fa64e584e09176590f = $this->env->getExtension("native_profiler");
        $__internal_11b1ca47a89a51de61e59100a6adb0f5b9255167ea9d28fa64e584e09176590f->enter($__internal_11b1ca47a89a51de61e59100a6adb0f5b9255167ea9d28fa64e584e09176590f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "                Mi empresas SA
            ";
        
        $__internal_11b1ca47a89a51de61e59100a6adb0f5b9255167ea9d28fa64e584e09176590f->leave($__internal_11b1ca47a89a51de61e59100a6adb0f5b9255167ea9d28fa64e584e09176590f_prof);

    }

    // line 10
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_8a4e7fc2f029bba2d6a08a4890dfb7bfb6ed6aae96b981b78a3d473e3d1f9ca6 = $this->env->getExtension("native_profiler");
        $__internal_8a4e7fc2f029bba2d6a08a4890dfb7bfb6ed6aae96b981b78a3d473e3d1f9ca6->enter($__internal_8a4e7fc2f029bba2d6a08a4890dfb7bfb6ed6aae96b981b78a3d473e3d1f9ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 11
        echo "            <link rel=\"stylesheet\" media=\"screen\" href=\" ";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/utilities/bootstrap.min.css"), "html", null, true);
        echo " \" >
            <link rel=\"stylesheet\" media=\"screen\" href=\" ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/main.min.css"), "html", null, true);
        echo " \" >
        ";
        
        $__internal_8a4e7fc2f029bba2d6a08a4890dfb7bfb6ed6aae96b981b78a3d473e3d1f9ca6->leave($__internal_8a4e7fc2f029bba2d6a08a4890dfb7bfb6ed6aae96b981b78a3d473e3d1f9ca6_prof);

    }

    // line 14
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_74bd626c95c54d7f0cf1ed9a2c384f57800a5040770d5f52e6dbbcbf036f763c = $this->env->getExtension("native_profiler");
        $__internal_74bd626c95c54d7f0cf1ed9a2c384f57800a5040770d5f52e6dbbcbf036f763c->enter($__internal_74bd626c95c54d7f0cf1ed9a2c384f57800a5040770d5f52e6dbbcbf036f763c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 15
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/utilities/jquery-1.12.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/utilities/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_74bd626c95c54d7f0cf1ed9a2c384f57800a5040770d5f52e6dbbcbf036f763c->leave($__internal_74bd626c95c54d7f0cf1ed9a2c384f57800a5040770d5f52e6dbbcbf036f763c_prof);

    }

    // line 23
    public function block_section_title($context, array $blocks = array())
    {
        $__internal_f9de30ad0f23315ce612a0d6cd7c16ca8fc63466d34206aa9a9f429f2b7cc3d3 = $this->env->getExtension("native_profiler");
        $__internal_f9de30ad0f23315ce612a0d6cd7c16ca8fc63466d34206aa9a9f429f2b7cc3d3->enter($__internal_f9de30ad0f23315ce612a0d6cd7c16ca8fc63466d34206aa9a9f429f2b7cc3d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section_title"));

        // line 24
        echo "                ";
        
        $__internal_f9de30ad0f23315ce612a0d6cd7c16ca8fc63466d34206aa9a9f429f2b7cc3d3->leave($__internal_f9de30ad0f23315ce612a0d6cd7c16ca8fc63466d34206aa9a9f429f2b7cc3d3_prof);

    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        $__internal_a520174467557535bebb902362371745a12b96ed26fe55b683110a284397d1c7 = $this->env->getExtension("native_profiler");
        $__internal_a520174467557535bebb902362371745a12b96ed26fe55b683110a284397d1c7->enter($__internal_a520174467557535bebb902362371745a12b96ed26fe55b683110a284397d1c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 27
        echo "            ";
        
        $__internal_a520174467557535bebb902362371745a12b96ed26fe55b683110a284397d1c7->leave($__internal_a520174467557535bebb902362371745a12b96ed26fe55b683110a284397d1c7_prof);

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
        return array (  149 => 27,  143 => 26,  136 => 24,  130 => 23,  121 => 16,  116 => 15,  110 => 14,  101 => 12,  96 => 11,  90 => 10,  82 => 7,  76 => 6,  68 => 31,  66 => 30,  61 => 27,  59 => 26,  56 => 25,  54 => 23,  49 => 20,  47 => 19,  44 => 18,  41 => 14,  39 => 10,  36 => 9,  34 => 6,  27 => 1,);
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
/*         {% block stylesheet %}*/
/*             <link rel="stylesheet" media="screen" href=" {{ asset('public/css/utilities/bootstrap.min.css') }} " >*/
/*             <link rel="stylesheet" media="screen" href=" {{ asset('public/css/main.min.css') }} " >*/
/*         {% endblock %}*/
/*         {% block javascript %}*/
/*             <script src="{{ asset('public/js/utilities/jquery-1.12.1.min.js') }}"></script>*/
/*             <script src="{{ asset('public/js/utilities/bootstrap.min.js') }}"></script>*/
/*         {% endblock %}*/
/*     </head>*/
/*     {% include 'header.html.twig' %}*/
/*     <body>*/
/*         <div class="container">*/
/*             <h1>*/
/*                 {% block section_title %}*/
/*                 {% endblock %}*/
/*             </h1>*/
/*             {% block body %}*/
/*             {% endblock %}   */
/*         </div>*/
/*     </body>*/
/*     {% include 'footer.html.twig' %}*/
/* </html>*/
/* */
