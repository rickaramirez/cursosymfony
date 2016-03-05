<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_11e9452d4df4ca10c6fcf93f7fc97ca368f6b95d8f594bcc97802153f286e0e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74019ea0b7532a6ffd7733cd165d61d9b12cab9c016ced41b5783d6cd405cc23 = $this->env->getExtension("native_profiler");
        $__internal_74019ea0b7532a6ffd7733cd165d61d9b12cab9c016ced41b5783d6cd405cc23->enter($__internal_74019ea0b7532a6ffd7733cd165d61d9b12cab9c016ced41b5783d6cd405cc23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74019ea0b7532a6ffd7733cd165d61d9b12cab9c016ced41b5783d6cd405cc23->leave($__internal_74019ea0b7532a6ffd7733cd165d61d9b12cab9c016ced41b5783d6cd405cc23_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_deb367f7feb7143b8168c2c1d4ac75e8f7625a7ce9daf4a5ab616bafa3acacea = $this->env->getExtension("native_profiler");
        $__internal_deb367f7feb7143b8168c2c1d4ac75e8f7625a7ce9daf4a5ab616bafa3acacea->enter($__internal_deb367f7feb7143b8168c2c1d4ac75e8f7625a7ce9daf4a5ab616bafa3acacea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_deb367f7feb7143b8168c2c1d4ac75e8f7625a7ce9daf4a5ab616bafa3acacea->leave($__internal_deb367f7feb7143b8168c2c1d4ac75e8f7625a7ce9daf4a5ab616bafa3acacea_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3fd1788afffe23aa283d383ff1a43d6ee3e799ea16cf166b954f7eadf5957479 = $this->env->getExtension("native_profiler");
        $__internal_3fd1788afffe23aa283d383ff1a43d6ee3e799ea16cf166b954f7eadf5957479->enter($__internal_3fd1788afffe23aa283d383ff1a43d6ee3e799ea16cf166b954f7eadf5957479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3fd1788afffe23aa283d383ff1a43d6ee3e799ea16cf166b954f7eadf5957479->leave($__internal_3fd1788afffe23aa283d383ff1a43d6ee3e799ea16cf166b954f7eadf5957479_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2bf805a9859af73ade9280b476f17c142fe053cc13747fca2219e93587f1f64 = $this->env->getExtension("native_profiler");
        $__internal_f2bf805a9859af73ade9280b476f17c142fe053cc13747fca2219e93587f1f64->enter($__internal_f2bf805a9859af73ade9280b476f17c142fe053cc13747fca2219e93587f1f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f2bf805a9859af73ade9280b476f17c142fe053cc13747fca2219e93587f1f64->leave($__internal_f2bf805a9859af73ade9280b476f17c142fe053cc13747fca2219e93587f1f64_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
