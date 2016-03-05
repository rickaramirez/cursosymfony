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
        $__internal_4e34f9106a8a8c62013a0590e41130301d95b8ac89b683feacacad80530beb36 = $this->env->getExtension("native_profiler");
        $__internal_4e34f9106a8a8c62013a0590e41130301d95b8ac89b683feacacad80530beb36->enter($__internal_4e34f9106a8a8c62013a0590e41130301d95b8ac89b683feacacad80530beb36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        <h1 id=\"lb_section_title\">
            ";
        // line 17
        $this->displayBlock('section_title', $context, $blocks);
        // line 20
        echo "        </h1>
            ";
        // line 21
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "            ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "    </body>
</html>
";
        
        $__internal_4e34f9106a8a8c62013a0590e41130301d95b8ac89b683feacacad80530beb36->leave($__internal_4e34f9106a8a8c62013a0590e41130301d95b8ac89b683feacacad80530beb36_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a737005e3ee50aad3278b2e97f36869419df5b841a35098b17ccf2530fd7747 = $this->env->getExtension("native_profiler");
        $__internal_9a737005e3ee50aad3278b2e97f36869419df5b841a35098b17ccf2530fd7747->enter($__internal_9a737005e3ee50aad3278b2e97f36869419df5b841a35098b17ccf2530fd7747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "                Mi empresas SA
            ";
        
        $__internal_9a737005e3ee50aad3278b2e97f36869419df5b841a35098b17ccf2530fd7747->leave($__internal_9a737005e3ee50aad3278b2e97f36869419df5b841a35098b17ccf2530fd7747_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c48f8019ad1690e196dad6ba6e512ef01d57b56a56d2913fedca54dbd4eb7c9b = $this->env->getExtension("native_profiler");
        $__internal_c48f8019ad1690e196dad6ba6e512ef01d57b56a56d2913fedca54dbd4eb7c9b->enter($__internal_c48f8019ad1690e196dad6ba6e512ef01d57b56a56d2913fedca54dbd4eb7c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link rel=\"stylesheet\" media=\"screen\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/utilities/bootstrap.min.css"), "html", null, true);
        echo "\"
            <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/main.min.css"), "html", null, true);
        echo "\"
        ";
        
        $__internal_c48f8019ad1690e196dad6ba6e512ef01d57b56a56d2913fedca54dbd4eb7c9b->leave($__internal_c48f8019ad1690e196dad6ba6e512ef01d57b56a56d2913fedca54dbd4eb7c9b_prof);

    }

    // line 17
    public function block_section_title($context, array $blocks = array())
    {
        $__internal_73b285c849f547ef1c6d587ff6b37a23b69ddd961afbe4071d71eda8ae38ca5e = $this->env->getExtension("native_profiler");
        $__internal_73b285c849f547ef1c6d587ff6b37a23b69ddd961afbe4071d71eda8ae38ca5e->enter($__internal_73b285c849f547ef1c6d587ff6b37a23b69ddd961afbe4071d71eda8ae38ca5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section_title"));

        // line 18
        echo "                
            ";
        
        $__internal_73b285c849f547ef1c6d587ff6b37a23b69ddd961afbe4071d71eda8ae38ca5e->leave($__internal_73b285c849f547ef1c6d587ff6b37a23b69ddd961afbe4071d71eda8ae38ca5e_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3a97432d085c7a30b0a5039f907d882745c9bdd560b539557151a609ba6a89b = $this->env->getExtension("native_profiler");
        $__internal_d3a97432d085c7a30b0a5039f907d882745c9bdd560b539557151a609ba6a89b->enter($__internal_d3a97432d085c7a30b0a5039f907d882745c9bdd560b539557151a609ba6a89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "            ";
        
        $__internal_d3a97432d085c7a30b0a5039f907d882745c9bdd560b539557151a609ba6a89b->leave($__internal_d3a97432d085c7a30b0a5039f907d882745c9bdd560b539557151a609ba6a89b_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9d57937f432948f41e4ad293e609dc84cade43b3677d50a99e4f4f72c270c80e = $this->env->getExtension("native_profiler");
        $__internal_9d57937f432948f41e4ad293e609dc84cade43b3677d50a99e4f4f72c270c80e->enter($__internal_9d57937f432948f41e4ad293e609dc84cade43b3677d50a99e4f4f72c270c80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 24
        echo "                <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/utilities/jquery-1.12.1.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/utilities/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            ";
        
        $__internal_9d57937f432948f41e4ad293e609dc84cade43b3677d50a99e4f4f72c270c80e->leave($__internal_9d57937f432948f41e4ad293e609dc84cade43b3677d50a99e4f4f72c270c80e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  137 => 25,  132 => 24,  126 => 23,  119 => 22,  113 => 21,  105 => 18,  99 => 17,  90 => 12,  85 => 11,  79 => 10,  71 => 7,  65 => 6,  56 => 27,  53 => 23,  51 => 21,  48 => 20,  46 => 17,  41 => 14,  39 => 10,  36 => 9,  34 => 6,  27 => 1,);
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
/*         <h1 id="lb_section_title">*/
/*             {% block section_title %}*/
/*                 */
/*             {% endblock %}*/
/*         </h1>*/
/*             {% block body %}*/
/*             {% endblock %}*/
/*             {% block javascripts %}*/
/*                 <script src="{{ asset('public/js/utilities/jquery-1.12.1.min.js') }}"></script>*/
/*                 <script src="{{ asset('public/js/utilities/bootstrap.min.js') }}"></script>*/
/*             {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
