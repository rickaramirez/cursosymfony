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
        $__internal_7e2636c2e4a85557c9cf6142653db6e38af3793117f505f9fde5e53bcf338b97 = $this->env->getExtension("native_profiler");
        $__internal_7e2636c2e4a85557c9cf6142653db6e38af3793117f505f9fde5e53bcf338b97->enter($__internal_7e2636c2e4a85557c9cf6142653db6e38af3793117f505f9fde5e53bcf338b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 11
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 15
        echo "
        ";
        // line 16
        $this->displayBlock('javascript', $context, $blocks);
        // line 20
        echo "
    </head>
    <body>
        <div class=\"container\">

            ";
        // line 25
        $this->loadTemplate("header.html.twig", "base.html.twig", 25)->display($context);
        // line 26
        echo "
            <h1 id=\"lb_section_title\">
                ";
        // line 28
        $this->displayBlock('section_title', $context, $blocks);
        // line 31
        echo "            </h1>

            ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "    

            ";
        // line 37
        $this->loadTemplate("footer.html.twig", "base.html.twig", 37)->display($context);
        // line 38
        echo "        </div>
    </body>
</html>
";
        
        $__internal_7e2636c2e4a85557c9cf6142653db6e38af3793117f505f9fde5e53bcf338b97->leave($__internal_7e2636c2e4a85557c9cf6142653db6e38af3793117f505f9fde5e53bcf338b97_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_ac47bc1b97c0f0896c9c26002fdc1dcabcc5941f8284d2a377220e65ccc9ae4a = $this->env->getExtension("native_profiler");
        $__internal_ac47bc1b97c0f0896c9c26002fdc1dcabcc5941f8284d2a377220e65ccc9ae4a->enter($__internal_ac47bc1b97c0f0896c9c26002fdc1dcabcc5941f8284d2a377220e65ccc9ae4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 7
        echo "                Mi empresas SA
            ";
        
        $__internal_ac47bc1b97c0f0896c9c26002fdc1dcabcc5941f8284d2a377220e65ccc9ae4a->leave($__internal_ac47bc1b97c0f0896c9c26002fdc1dcabcc5941f8284d2a377220e65ccc9ae4a_prof);

    }

    // line 11
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_94dbfe1e612a05b308c7b2e97011ac31e41bec07efa5ab09c99b07298fc740ff = $this->env->getExtension("native_profiler");
        $__internal_94dbfe1e612a05b308c7b2e97011ac31e41bec07efa5ab09c99b07298fc740ff->enter($__internal_94dbfe1e612a05b308c7b2e97011ac31e41bec07efa5ab09c99b07298fc740ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 12
        echo "            <link rel=\"stylesheet\" media=\"screen\" href=\" ";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/utilities/bootstrap.min.css"), "html", null, true);
        echo " \" >
            <link rel=\"stylesheet\" media=\"screen\" href=\" ";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/main.min.css"), "html", null, true);
        echo " \" >
        ";
        
        $__internal_94dbfe1e612a05b308c7b2e97011ac31e41bec07efa5ab09c99b07298fc740ff->leave($__internal_94dbfe1e612a05b308c7b2e97011ac31e41bec07efa5ab09c99b07298fc740ff_prof);

    }

    // line 16
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_14363f0af5cfec16dad1b71a7749359ef49ff09c3f40cb7fddda0c89b4355b44 = $this->env->getExtension("native_profiler");
        $__internal_14363f0af5cfec16dad1b71a7749359ef49ff09c3f40cb7fddda0c89b4355b44->enter($__internal_14363f0af5cfec16dad1b71a7749359ef49ff09c3f40cb7fddda0c89b4355b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 17
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/utilities/jquery-1.12.1.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/utilities/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_14363f0af5cfec16dad1b71a7749359ef49ff09c3f40cb7fddda0c89b4355b44->leave($__internal_14363f0af5cfec16dad1b71a7749359ef49ff09c3f40cb7fddda0c89b4355b44_prof);

    }

    // line 28
    public function block_section_title($context, array $blocks = array())
    {
        $__internal_e65c0dff0a632936879cd656f6ddebb5444a6f797771b017300b1e8b9e1ac702 = $this->env->getExtension("native_profiler");
        $__internal_e65c0dff0a632936879cd656f6ddebb5444a6f797771b017300b1e8b9e1ac702->enter($__internal_e65c0dff0a632936879cd656f6ddebb5444a6f797771b017300b1e8b9e1ac702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section_title"));

        // line 29
        echo "
                ";
        
        $__internal_e65c0dff0a632936879cd656f6ddebb5444a6f797771b017300b1e8b9e1ac702->leave($__internal_e65c0dff0a632936879cd656f6ddebb5444a6f797771b017300b1e8b9e1ac702_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac3d2deebdb7dde6b81482301e24bb6435f92497c473cfe30957026186ca2f78 = $this->env->getExtension("native_profiler");
        $__internal_ac3d2deebdb7dde6b81482301e24bb6435f92497c473cfe30957026186ca2f78->enter($__internal_ac3d2deebdb7dde6b81482301e24bb6435f92497c473cfe30957026186ca2f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 34
        echo "
            ";
        
        $__internal_ac3d2deebdb7dde6b81482301e24bb6435f92497c473cfe30957026186ca2f78->leave($__internal_ac3d2deebdb7dde6b81482301e24bb6435f92497c473cfe30957026186ca2f78_prof);

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
        return array (  158 => 34,  152 => 33,  144 => 29,  138 => 28,  129 => 18,  124 => 17,  118 => 16,  109 => 13,  104 => 12,  98 => 11,  90 => 7,  84 => 6,  74 => 38,  72 => 37,  68 => 35,  66 => 33,  62 => 31,  60 => 28,  56 => 26,  54 => 25,  47 => 20,  45 => 16,  42 => 15,  40 => 11,  36 => 9,  34 => 6,  27 => 1,);
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
/* */
/*         {% block stylesheet %}*/
/*             <link rel="stylesheet" media="screen" href=" {{ asset('public/css/utilities/bootstrap.min.css') }} " >*/
/*             <link rel="stylesheet" media="screen" href=" {{ asset('public/css/main.min.css') }} " >*/
/*         {% endblock %}*/
/* */
/*         {% block javascript %}*/
/*             <script src="{{ asset('public/js/utilities/jquery-1.12.1.min.js') }}"></script>*/
/*             <script src="{{ asset('public/js/utilities/bootstrap.min.js') }}"></script>*/
/*         {% endblock %}*/
/* */
/*     </head>*/
/*     <body>*/
/*         <div class="container">*/
/* */
/*             {% include 'header.html.twig' %}*/
/* */
/*             <h1 id="lb_section_title">*/
/*                 {% block section_title %}*/
/* */
/*                 {% endblock %}*/
/*             </h1>*/
/* */
/*             {% block body %}*/
/* */
/*             {% endblock %}    */
/* */
/*             {% include 'footer.html.twig' %}*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
