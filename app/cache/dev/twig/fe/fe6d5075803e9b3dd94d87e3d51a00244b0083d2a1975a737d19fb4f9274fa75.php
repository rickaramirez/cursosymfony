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
        $__internal_aedf750a1baa4769df6df3294af4b07ec1a0235d90e8e2e8a1e4879c07bdf982 = $this->env->getExtension("native_profiler");
        $__internal_aedf750a1baa4769df6df3294af4b07ec1a0235d90e8e2e8a1e4879c07bdf982->enter($__internal_aedf750a1baa4769df6df3294af4b07ec1a0235d90e8e2e8a1e4879c07bdf982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductsProductBundle:Products:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aedf750a1baa4769df6df3294af4b07ec1a0235d90e8e2e8a1e4879c07bdf982->leave($__internal_aedf750a1baa4769df6df3294af4b07ec1a0235d90e8e2e8a1e4879c07bdf982_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e466c365ebcfe4a24e7c6a75c9b9908f4a5bac6a7c2c23636f7ecbf375f7508 = $this->env->getExtension("native_profiler");
        $__internal_8e466c365ebcfe4a24e7c6a75c9b9908f4a5bac6a7c2c23636f7ecbf375f7508->enter($__internal_8e466c365ebcfe4a24e7c6a75c9b9908f4a5bac6a7c2c23636f7ecbf375f7508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
    - productos
";
        
        $__internal_8e466c365ebcfe4a24e7c6a75c9b9908f4a5bac6a7c2c23636f7ecbf375f7508->leave($__internal_8e466c365ebcfe4a24e7c6a75c9b9908f4a5bac6a7c2c23636f7ecbf375f7508_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_a9ce0f09dac3a5be2808b287f39b5a062df6fbad5cf5cb0e8f170ac2e56458a2 = $this->env->getExtension("native_profiler");
        $__internal_a9ce0f09dac3a5be2808b287f39b5a062df6fbad5cf5cb0e8f170ac2e56458a2->enter($__internal_a9ce0f09dac3a5be2808b287f39b5a062df6fbad5cf5cb0e8f170ac2e56458a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "    ";
        $this->displayParentBlock("stylesheet", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" media=\"screen\" href=\" ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/productsproduct/css/products.css"), "html", null, true);
        echo " \" >
";
        
        $__internal_a9ce0f09dac3a5be2808b287f39b5a062df6fbad5cf5cb0e8f170ac2e56458a2->leave($__internal_a9ce0f09dac3a5be2808b287f39b5a062df6fbad5cf5cb0e8f170ac2e56458a2_prof);

    }

    // line 10
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_65cd66961b0336fa4c7a3f67ec9cb3d4702f3cf5612265eb39085765e4c2e983 = $this->env->getExtension("native_profiler");
        $__internal_65cd66961b0336fa4c7a3f67ec9cb3d4702f3cf5612265eb39085765e4c2e983->enter($__internal_65cd66961b0336fa4c7a3f67ec9cb3d4702f3cf5612265eb39085765e4c2e983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 11
        echo "
";
        
        $__internal_65cd66961b0336fa4c7a3f67ec9cb3d4702f3cf5612265eb39085765e4c2e983->leave($__internal_65cd66961b0336fa4c7a3f67ec9cb3d4702f3cf5612265eb39085765e4c2e983_prof);

    }

    // line 13
    public function block_section_title($context, array $blocks = array())
    {
        $__internal_5e5864a622dc6cc6f8a7ceadd1147ff58dbae9804be11a223c315f0b8fca0a3e = $this->env->getExtension("native_profiler");
        $__internal_5e5864a622dc6cc6f8a7ceadd1147ff58dbae9804be11a223c315f0b8fca0a3e->enter($__internal_5e5864a622dc6cc6f8a7ceadd1147ff58dbae9804be11a223c315f0b8fca0a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section_title"));

        // line 14
        echo "    <h1>Tienda de productos</h1>
";
        
        $__internal_5e5864a622dc6cc6f8a7ceadd1147ff58dbae9804be11a223c315f0b8fca0a3e->leave($__internal_5e5864a622dc6cc6f8a7ceadd1147ff58dbae9804be11a223c315f0b8fca0a3e_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_661e43a3e8a8486aa58e2ea0f424b5a1076c844d5e3cb58cfe08ede04907c183 = $this->env->getExtension("native_profiler");
        $__internal_661e43a3e8a8486aa58e2ea0f424b5a1076c844d5e3cb58cfe08ede04907c183->enter($__internal_661e43a3e8a8486aa58e2ea0f424b5a1076c844d5e3cb58cfe08ede04907c183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "    <table class=\"table\">
    <tbody>
        ";
        // line 19
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        echo "
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 21
            echo "            <tr>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["product"], "title", array())), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "productionyear", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "image", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_edit", array("id_product" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\">Editar</a>
                    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_delete", array("id_product" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\"class=\"btn btn-danger\">Eliminar</a>    
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 32
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
        // line 38
        echo "    </tbody>
";
        
        $__internal_661e43a3e8a8486aa58e2ea0f424b5a1076c844d5e3cb58cfe08ede04907c183->leave($__internal_661e43a3e8a8486aa58e2ea0f424b5a1076c844d5e3cb58cfe08ede04907c183_prof);

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
        return array (  166 => 38,  155 => 32,  146 => 28,  142 => 27,  137 => 25,  133 => 24,  129 => 23,  125 => 22,  122 => 21,  117 => 20,  113 => 19,  109 => 17,  103 => 16,  95 => 14,  89 => 13,  81 => 11,  75 => 10,  66 => 8,  61 => 7,  55 => 6,  44 => 3,  38 => 2,  11 => 1,);
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
/* */
/* {% endblock %}*/
/* {% block section_title %}*/
/*     <h1>Tienda de productos</h1>*/
/* {% endblock %}*/
/* {% block body %}*/
/*     <table class="table">*/
/*     <tbody>*/
/*         {{ dump(products) }}*/
/*         {% for product in products %}*/
/*             <tr>*/
/*                 <td>{{product.title | upper}}</td>*/
/*                 <td>{{product.description}}</td>*/
/*                 <td>{{product.productionyear}}</td>*/
/*                 <td>{{product.image}}</td>*/
/*                 <td>*/
/*                     <a href="{{path('product_edit', {'id_product': product.id})}}" class="btn btn-warning">Editar</a>*/
/*                     <a href="{{path('product_delete', {'id_product': product.id})}}"class="btn btn-danger">Eliminar</a>    */
/*                 </td>*/
/*             </tr>*/
/*         {% else %}*/
/*             <tr>*/
/*                 <td>*/
/*                     No hay    */
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </tbody>*/
/* {% endblock %}*/
