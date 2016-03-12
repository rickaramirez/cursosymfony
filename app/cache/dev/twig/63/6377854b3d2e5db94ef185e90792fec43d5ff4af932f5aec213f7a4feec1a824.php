<?php

/* ProductsProductBundle:Products:new_product.html.twig */
class __TwigTemplate_eb8f1a82b07d06bea3c1454175f4f728d617f0ce665bd342da876b63bca7b3a3 extends Twig_Template
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
        $__internal_37dc98fbd81785700a69b3c3ad12000c0e5112bdd2664add9721911e0069db8c = $this->env->getExtension("native_profiler");
        $__internal_37dc98fbd81785700a69b3c3ad12000c0e5112bdd2664add9721911e0069db8c->enter($__internal_37dc98fbd81785700a69b3c3ad12000c0e5112bdd2664add9721911e0069db8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProductsProductBundle:Products:new_product.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"product_new\" role=\"dialog\" aria-labelledby=\"largeModal\" aria-hidden=\"true\" style=\"overflow: auto\">
    <div class=\"modal-dialog\" style=\"\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">
                    &times; 
                </button>               
                Formulario para nuevo producto
            </div>
            <div class=\"modal-body\">  
                <form method=\"POST\" class=\"form-horizontal\" role=\"form\" id=\"frm_product\" action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("product_new");
        echo "\">
                    <div class=\"form-group\">
                        <label class=\"col-sm-12\" >Título del producto:</label>
                        <div class=\"col-sm-12\">
                            <input class=\"form-control\" name=\"title\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-12\" >Descripción:</label>
                        <div class=\"col-sm-12\">
                            <input class=\"form-control\" name=\"description\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-12\" >Imagen:</label>
                        <div class=\"col-sm-12\">
                            <input class=\"form-control\" name=\"image\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"col-sm-12\">Año de producción:</label>
                        <div class=\"col-sm-12\">
                            <input class=\"form-control\" name=\"production_year\">
                        </div>
                    </div>
                     <button type=\"submit\"  class=\"btn btn-success\">Guardar</button>
                </form>
            </div>
            <div class=\"modal-footer\"> 
            </div>
        </div>
    </div>
</div>";
        
        $__internal_37dc98fbd81785700a69b3c3ad12000c0e5112bdd2664add9721911e0069db8c->leave($__internal_37dc98fbd81785700a69b3c3ad12000c0e5112bdd2664add9721911e0069db8c_prof);

    }

    public function getTemplateName()
    {
        return "ProductsProductBundle:Products:new_product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 11,  22 => 1,);
    }
}
/* <div class="modal fade" id="product_new" role="dialog" aria-labelledby="largeModal" aria-hidden="true" style="overflow: auto">*/
/*     <div class="modal-dialog" style="">*/
/*         <div class="modal-content">*/
/*             <div class="modal-header">*/
/*                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">*/
/*                     &times; */
/*                 </button>               */
/*                 Formulario para nuevo producto*/
/*             </div>*/
/*             <div class="modal-body">  */
/*                 <form method="POST" class="form-horizontal" role="form" id="frm_product" action="{{ path('product_new') }}">*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-12" >Título del producto:</label>*/
/*                         <div class="col-sm-12">*/
/*                             <input class="form-control" name="title">*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-12" >Descripción:</label>*/
/*                         <div class="col-sm-12">*/
/*                             <input class="form-control" name="description">*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-12" >Imagen:</label>*/
/*                         <div class="col-sm-12">*/
/*                             <input class="form-control" name="image">*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <label class="col-sm-12">Año de producción:</label>*/
/*                         <div class="col-sm-12">*/
/*                             <input class="form-control" name="production_year">*/
/*                         </div>*/
/*                     </div>*/
/*                      <button type="submit"  class="btn btn-success">Guardar</button>*/
/*                 </form>*/
/*             </div>*/
/*             <div class="modal-footer"> */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
