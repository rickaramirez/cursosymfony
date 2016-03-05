<?php

/* ProductsProductBundle:Products:product.html.twig */
class __TwigTemplate_a083d7fc0b1b7ef367a0cebf0d43b3b3cd18d89063df684563c5c38b31b61a2d extends Twig_Template
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
        $__internal_2d71c7fa8d7e61161ae610ca7da4f2e783c7f9e004aafcd19fed199c07ea0b45 = $this->env->getExtension("native_profiler");
        $__internal_2d71c7fa8d7e61161ae610ca7da4f2e783c7f9e004aafcd19fed199c07ea0b45->enter($__internal_2d71c7fa8d7e61161ae610ca7da4f2e783c7f9e004aafcd19fed199c07ea0b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductsProductBundle:Products:product.html.twig"));

        // line 1
        echo "<html>
    <body>
        <h1>Producto: ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["product_id"]) ? $context["product_id"] : $this->getContext($context, "product_id")), "html", null, true);
        echo "</h1>
    </body>
</html>

";
        
        $__internal_2d71c7fa8d7e61161ae610ca7da4f2e783c7f9e004aafcd19fed199c07ea0b45->leave($__internal_2d71c7fa8d7e61161ae610ca7da4f2e783c7f9e004aafcd19fed199c07ea0b45_prof);

    }

    public function getTemplateName()
    {
        return "ProductsProductBundle:Products:product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <html>*/
/*     <body>*/
/*         <h1>Producto: {{product_id}}</h1>*/
/*     </body>*/
/* </html>*/
/* */
/* */
