<?php

/* ProductsProductBundle:Products:index.html.twig */
class __TwigTemplate_2d01c36d0dd30e0fb481fbef87778c65568c6025edc2d5c43698bf99ddde9269 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ProductsProductBundle:Products:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'section_title' => array($this, 'block_section_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f12d9878e763dd5e98661c4fc6c64cf5f66a3db2802ff0bfd7fe95f8ce2ed077 = $this->env->getExtension("native_profiler");
        $__internal_f12d9878e763dd5e98661c4fc6c64cf5f66a3db2802ff0bfd7fe95f8ce2ed077->enter($__internal_f12d9878e763dd5e98661c4fc6c64cf5f66a3db2802ff0bfd7fe95f8ce2ed077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductsProductBundle:Products:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f12d9878e763dd5e98661c4fc6c64cf5f66a3db2802ff0bfd7fe95f8ce2ed077->leave($__internal_f12d9878e763dd5e98661c4fc6c64cf5f66a3db2802ff0bfd7fe95f8ce2ed077_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d9b8d0006012a26e1b99fc14acf05792b78958526a405485f293587b69c4ee39 = $this->env->getExtension("native_profiler");
        $__internal_d9b8d0006012a26e1b99fc14acf05792b78958526a405485f293587b69c4ee39->enter($__internal_d9b8d0006012a26e1b99fc14acf05792b78958526a405485f293587b69c4ee39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
    - productos
";
        
        $__internal_d9b8d0006012a26e1b99fc14acf05792b78958526a405485f293587b69c4ee39->leave($__internal_d9b8d0006012a26e1b99fc14acf05792b78958526a405485f293587b69c4ee39_prof);

    }

    // line 6
    public function block_section_title($context, array $blocks = array())
    {
        $__internal_8fef429c97a3ce3d657db67cc8bf4fba6f403f14bd005551d00f0daed01fb0b8 = $this->env->getExtension("native_profiler");
        $__internal_8fef429c97a3ce3d657db67cc8bf4fba6f403f14bd005551d00f0daed01fb0b8->enter($__internal_8fef429c97a3ce3d657db67cc8bf4fba6f403f14bd005551d00f0daed01fb0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section_title"));

        // line 7
        echo "        <h1>Tienda de productos</h1>
";
        
        $__internal_8fef429c97a3ce3d657db67cc8bf4fba6f403f14bd005551d00f0daed01fb0b8->leave($__internal_8fef429c97a3ce3d657db67cc8bf4fba6f403f14bd005551d00f0daed01fb0b8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_efea0e0f571ab6e839ce592496702c46e6b3d1639b61ebaac346015b8aab8257 = $this->env->getExtension("native_profiler");
        $__internal_efea0e0f571ab6e839ce592496702c46e6b3d1639b61ebaac346015b8aab8257->enter($__internal_efea0e0f571ab6e839ce592496702c46e6b3d1639b61ebaac346015b8aab8257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <table class=\"table\">
    <tbody>
        ";
        // line 12
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        echo "
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 14
            echo "            <tr>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["product"], "title", array())), "html", null, true);
            echo "</td>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "production_year", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "image", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"#\">Editar</a>
                    <a href=\"#\">Eliminar</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 25
            echo "            <tr>
                <td>
                    No hay    
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    </tbody>
    ";
        
        $__internal_efea0e0f571ab6e839ce592496702c46e6b3d1639b61ebaac346015b8aab8257->leave($__internal_efea0e0f571ab6e839ce592496702c46e6b3d1639b61ebaac346015b8aab8257_prof);

    }

    public function getTemplateName()
    {
        return "ProductsProductBundle:Products:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 31,  113 => 25,  101 => 18,  97 => 17,  93 => 16,  89 => 15,  86 => 14,  81 => 13,  77 => 12,  73 => 10,  67 => 9,  59 => 7,  53 => 6,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {%extends "base.html.twig"%}*/
/* {% block title %}*/
/*     {{parent()}}*/
/*     - productos*/
/* {%endblock%}*/
/* {% block section_title %}*/
/*         <h1>Tienda de productos</h1>*/
/* {%endblock%}*/
/* {% block body %}*/
/*     <table class="table">*/
/*     <tbody>*/
/*         {{dump(products)}}*/
/*         {%for product in products%}*/
/*             <tr>*/
/*                 <td>{{product.title | upper}}</td>*/
/*                 <td>{{product.description}}</td>*/
/*                 <td>{{product.production_year}}</td>*/
/*                 <td>{{product.image}}</td>*/
/*                 <td>*/
/*                     <a href="#">Editar</a>*/
/*                     <a href="#">Eliminar</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {%else%}*/
/*             <tr>*/
/*                 <td>*/
/*                     No hay    */
/*                 </td>*/
/*             </tr>*/
/*         {%endfor%}*/
/*     </tbody>*/
/*     {%endblock%}*/
/* */
/* */
