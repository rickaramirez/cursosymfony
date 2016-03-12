<?php

/* header.html.twig */
class __TwigTemplate_88bc1d0e207580ca287f450baece6e67dc80cb542f4d90549b62624620a22d92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ed2da2627177000371c8a8f75393f8a2b50710fe221f1555c175c49c71d1a83 = $this->env->getExtension("native_profiler");
        $__internal_1ed2da2627177000371c8a8f75393f8a2b50710fe221f1555c175c49c71d1a83->enter($__internal_1ed2da2627177000371c8a8f75393f8a2b50710fe221f1555c175c49c71d1a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\">MiEmpresa S.A. de C.V </a>
            </div>
            <div id=\"navbar\" class=\"navbar-collapse collapse\">
                <ul class=\"nav navbar-nav\"                  <li class=\"active\">
                        <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("products_product_homepage");
        echo "\">Productos</a>
                    </li>
                </ul>
                <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">Login</a>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
</div>";
        
        $__internal_1ed2da2627177000371c8a8f75393f8a2b50710fe221f1555c175c49c71d1a83->leave($__internal_1ed2da2627177000371c8a8f75393f8a2b50710fe221f1555c175c49c71d1a83_prof);

    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 20,  38 => 15,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <nav class="navbar navbar-inverse navbar-fixed-top">*/
/*         <div class="container">*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="#">MiEmpresa S.A. de C.V </a>*/
/*             </div>*/
/*             <div id="navbar" class="navbar-collapse collapse">*/
/*                 <ul class="nav navbar-nav"                  <li class="active">*/
/*                         <a href="{{ path('products_product_homepage') }}">Productos</a>*/
/*                     </li>*/
/*                 </ul>*/
/*                 <ul class="nav navbar-nav navbar-right">*/
/*                     <li>*/
/*                         <a href="{{ path('login') }}">Login</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div><!--/.nav-collapse -->*/
/*         </div>*/
/*     </nav>*/
/* </div>*/
