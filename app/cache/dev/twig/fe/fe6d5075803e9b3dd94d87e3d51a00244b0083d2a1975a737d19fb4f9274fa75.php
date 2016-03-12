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
            'stylesheet' => array($this, 'block_stylesheet'),
            'javascript' => array($this, 'block_javascript'),
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
        $__internal_469ddbcb4154e2e4de3c0615716fbd2ebf1509132635600e468561577afc4364 = $this->env->getExtension("native_profiler");
        $__internal_469ddbcb4154e2e4de3c0615716fbd2ebf1509132635600e468561577afc4364->enter($__internal_469ddbcb4154e2e4de3c0615716fbd2ebf1509132635600e468561577afc4364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductsProductBundle:Products:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_469ddbcb4154e2e4de3c0615716fbd2ebf1509132635600e468561577afc4364->leave($__internal_469ddbcb4154e2e4de3c0615716fbd2ebf1509132635600e468561577afc4364_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f7dffbf89f54dc7050f988283f56759bacc9221248e8ebdd8c91c554516fbb6 = $this->env->getExtension("native_profiler");
        $__internal_5f7dffbf89f54dc7050f988283f56759bacc9221248e8ebdd8c91c554516fbb6->enter($__internal_5f7dffbf89f54dc7050f988283f56759bacc9221248e8ebdd8c91c554516fbb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
    - productos
";
        
        $__internal_5f7dffbf89f54dc7050f988283f56759bacc9221248e8ebdd8c91c554516fbb6->leave($__internal_5f7dffbf89f54dc7050f988283f56759bacc9221248e8ebdd8c91c554516fbb6_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_c823f67bfbabc07f734ac82a9922115da2a197dbd592b80e2abcab95dcf9a189 = $this->env->getExtension("native_profiler");
        $__internal_c823f67bfbabc07f734ac82a9922115da2a197dbd592b80e2abcab95dcf9a189->enter($__internal_c823f67bfbabc07f734ac82a9922115da2a197dbd592b80e2abcab95dcf9a189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" media=\"screen\" href=\" ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/productsproduct/css/products.css"), "html", null, true);
        echo " \" >
";
        
        $__internal_c823f67bfbabc07f734ac82a9922115da2a197dbd592b80e2abcab95dcf9a189->leave($__internal_c823f67bfbabc07f734ac82a9922115da2a197dbd592b80e2abcab95dcf9a189_prof);

    }

    // line 10
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_4d82bd1e102a965accdb70c679916b839f9a14689cec1466bad0929a04f928e6 = $this->env->getExtension("native_profiler");
        $__internal_4d82bd1e102a965accdb70c679916b839f9a14689cec1466bad0929a04f928e6->enter($__internal_4d82bd1e102a965accdb70c679916b839f9a14689cec1466bad0929a04f928e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 11
        echo "    ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/productsproduct/js/products.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_4d82bd1e102a965accdb70c679916b839f9a14689cec1466bad0929a04f928e6->leave($__internal_4d82bd1e102a965accdb70c679916b839f9a14689cec1466bad0929a04f928e6_prof);

    }

    // line 14
    public function block_section_title($context, array $blocks = array())
    {
        $__internal_03bc760f6f13ae705d672271bc1d847aef0ec70bcbc2a8d18c5c2fe3494405c0 = $this->env->getExtension("native_profiler");
        $__internal_03bc760f6f13ae705d672271bc1d847aef0ec70bcbc2a8d18c5c2fe3494405c0->enter($__internal_03bc760f6f13ae705d672271bc1d847aef0ec70bcbc2a8d18c5c2fe3494405c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section_title"));

        // line 15
        echo "    <h1>Tienda de productos</h1>
";
        
        $__internal_03bc760f6f13ae705d672271bc1d847aef0ec70bcbc2a8d18c5c2fe3494405c0->leave($__internal_03bc760f6f13ae705d672271bc1d847aef0ec70bcbc2a8d18c5c2fe3494405c0_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_68765e4c99732cc2e32df071d98324fecf35675923f17027d900668dccd80fd5 = $this->env->getExtension("native_profiler");
        $__internal_68765e4c99732cc2e32df071d98324fecf35675923f17027d900668dccd80fd5->enter($__internal_68765e4c99732cc2e32df071d98324fecf35675923f17027d900668dccd80fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "    <a style=\"float:right\" onclick=\"modal_new();\" href=\"#\" class=\"btn btn-success\">Nuevo Producto</a>
    ";
        // line 19
        $this->loadTemplate("ProductsProductBundle:Products:new_product.html.twig", "ProductsProductBundle:Products:index.html.twig", 19)->display($context);
        // line 20
        echo "    <table class=\"table\">
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Descripción</th>
                <th>Año</th>
                <th>Imagen</th>
                <th colspan=\"2\"></th>
            </tr>
        </thead>
        <tfoot>
            <tr><td colspan=\"6\">Yo soy el footer de la tabla :D</td></tr>
        </tfoot>
        <tbody>
            ";
        // line 35
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 36
            echo "                <tr>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["product"], "title", array())), "html", null, true);
            echo "</td>
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "description", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "productionyear", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "image", array()), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_edit", array("id_product" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\">Editar</a>
                        <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_delete", array("id_product" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\"class=\"btn btn-danger\">Eliminar</a>    
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 47
            echo "                <tr>
                    <td>
                        No hay registros para mostrar 
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        </tbody>
    </table>
";
        
        $__internal_68765e4c99732cc2e32df071d98324fecf35675923f17027d900668dccd80fd5->leave($__internal_68765e4c99732cc2e32df071d98324fecf35675923f17027d900668dccd80fd5_prof);

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
        return array (  186 => 53,  175 => 47,  166 => 43,  162 => 42,  157 => 40,  153 => 39,  149 => 38,  145 => 37,  142 => 36,  136 => 35,  120 => 20,  118 => 19,  115 => 18,  109 => 17,  101 => 15,  95 => 14,  86 => 12,  81 => 11,  75 => 10,  66 => 8,  61 => 7,  55 => 6,  44 => 3,  38 => 2,  11 => 1,);
    }
}
/* {%extends "base.html.twig"%}*/
/* {% block title %}*/
/*     {{ parent() }}*/
/*     - productos*/
/* {% endblock %}*/
/* {% block stylesheet %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" media="screen" href=" {{ asset('bundles/productsproduct/css/products.css') }} " >*/
/* {% endblock %}*/
/* {% block javascript %}*/
/*     {{ parent() }}*/
/*     <script src="{{ asset('bundles/productsproduct/js/products.js') }}"></script>*/
/* {% endblock %}*/
/* {% block section_title %}*/
/*     <h1>Tienda de productos</h1>*/
/* {% endblock %}*/
/* {% block body %}*/
/*     <a style="float:right" onclick="modal_new();" href="#" class="btn btn-success">Nuevo Producto</a>*/
/*     {% include 'ProductsProductBundle:Products:new_product.html.twig' %}*/
/*     <table class="table">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Titulo</th>*/
/*                 <th>Descripción</th>*/
/*                 <th>Año</th>*/
/*                 <th>Imagen</th>*/
/*                 <th colspan="2"></th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tfoot>*/
/*             <tr><td colspan="6">Yo soy el footer de la tabla :D</td></tr>*/
/*         </tfoot>*/
/*         <tbody>*/
/*             {# {{ dump(products) }} #}*/
/*             {% for product in products %}*/
/*                 <tr>*/
/*                     <td>{{product.title | upper}}</td>*/
/*                     <td>{{product.description}}</td>*/
/*                     <td>{{product.productionyear}}</td>*/
/*                     <td>{{product.image}}</td>*/
/*                     <td>*/
/*                         <a href="{{path('product_edit', {'id_product': product.id})}}" class="btn btn-warning">Editar</a>*/
/*                         <a href="{{path('product_delete', {'id_product': product.id})}}"class="btn btn-danger">Eliminar</a>    */
/*                     </td>*/
/*                 </tr>*/
/*             {% else %}*/
/*                 <tr>*/
/*                     <td>*/
/*                         No hay registros para mostrar */
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* {% endblock %}*/
