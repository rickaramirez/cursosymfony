<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_37b64138532441fcadaa46cff298c7006c08db6461724a68eb807d8b34bc1f9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e7706fa2e354eaedd81bc03d2f9258651f7ff80eae306eb76aa1deb5a367cd5 = $this->env->getExtension("native_profiler");
        $__internal_5e7706fa2e354eaedd81bc03d2f9258651f7ff80eae306eb76aa1deb5a367cd5->enter($__internal_5e7706fa2e354eaedd81bc03d2f9258651f7ff80eae306eb76aa1deb5a367cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e7706fa2e354eaedd81bc03d2f9258651f7ff80eae306eb76aa1deb5a367cd5->leave($__internal_5e7706fa2e354eaedd81bc03d2f9258651f7ff80eae306eb76aa1deb5a367cd5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dd47fdde98f4d8f36c41cbbf15a93cb565521afdfd8f794b24d383a88c045b30 = $this->env->getExtension("native_profiler");
        $__internal_dd47fdde98f4d8f36c41cbbf15a93cb565521afdfd8f794b24d383a88c045b30->enter($__internal_dd47fdde98f4d8f36c41cbbf15a93cb565521afdfd8f794b24d383a88c045b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dd47fdde98f4d8f36c41cbbf15a93cb565521afdfd8f794b24d383a88c045b30->leave($__internal_dd47fdde98f4d8f36c41cbbf15a93cb565521afdfd8f794b24d383a88c045b30_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6a65c4756ce26f16e8294275312b17d67921933a5d77336fad25affecf274b52 = $this->env->getExtension("native_profiler");
        $__internal_6a65c4756ce26f16e8294275312b17d67921933a5d77336fad25affecf274b52->enter($__internal_6a65c4756ce26f16e8294275312b17d67921933a5d77336fad25affecf274b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6a65c4756ce26f16e8294275312b17d67921933a5d77336fad25affecf274b52->leave($__internal_6a65c4756ce26f16e8294275312b17d67921933a5d77336fad25affecf274b52_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_97608e909be665bf3afc2edeeed3bcb0edf6b602c948d7c6098c702d1fc5e809 = $this->env->getExtension("native_profiler");
        $__internal_97608e909be665bf3afc2edeeed3bcb0edf6b602c948d7c6098c702d1fc5e809->enter($__internal_97608e909be665bf3afc2edeeed3bcb0edf6b602c948d7c6098c702d1fc5e809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_97608e909be665bf3afc2edeeed3bcb0edf6b602c948d7c6098c702d1fc5e809->leave($__internal_97608e909be665bf3afc2edeeed3bcb0edf6b602c948d7c6098c702d1fc5e809_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
