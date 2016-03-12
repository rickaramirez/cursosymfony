<?php

/* UsersSecurityBundle:Security:login.html.twig */
class __TwigTemplate_3b093372901f6b72c6a94055480257aaf77ca8201695525746fc465d5adf37ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "UsersSecurityBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'section_title' => array($this, 'block_section_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7e56ee688cd37c4f932f5071157aec44eeb22a6d992a8866c66f730381c7372 = $this->env->getExtension("native_profiler");
        $__internal_d7e56ee688cd37c4f932f5071157aec44eeb22a6d992a8866c66f730381c7372->enter($__internal_d7e56ee688cd37c4f932f5071157aec44eeb22a6d992a8866c66f730381c7372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UsersSecurityBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7e56ee688cd37c4f932f5071157aec44eeb22a6d992a8866c66f730381c7372->leave($__internal_d7e56ee688cd37c4f932f5071157aec44eeb22a6d992a8866c66f730381c7372_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_21022e7925fc155e824ca93569725e73503196d0facdb9476ad3ba1ac0029299 = $this->env->getExtension("native_profiler");
        $__internal_21022e7925fc155e824ca93569725e73503196d0facdb9476ad3ba1ac0029299->enter($__internal_21022e7925fc155e824ca93569725e73503196d0facdb9476ad3ba1ac0029299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" media=\"screen\" href=\" ";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/userssecurity/css/products.css"), "html", null, true);
        echo " \" >
";
        
        $__internal_21022e7925fc155e824ca93569725e73503196d0facdb9476ad3ba1ac0029299->leave($__internal_21022e7925fc155e824ca93569725e73503196d0facdb9476ad3ba1ac0029299_prof);

    }

    // line 6
    public function block_section_title($context, array $blocks = array())
    {
        $__internal_89a2f4f045c53aaef003b3def01c0452a8a7420954d395335ea97d43b4bbf451 = $this->env->getExtension("native_profiler");
        $__internal_89a2f4f045c53aaef003b3def01c0452a8a7420954d395335ea97d43b4bbf451->enter($__internal_89a2f4f045c53aaef003b3def01c0452a8a7420954d395335ea97d43b4bbf451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section_title"));

        // line 7
        echo "    Login
";
        
        $__internal_89a2f4f045c53aaef003b3def01c0452a8a7420954d395335ea97d43b4bbf451->leave($__internal_89a2f4f045c53aaef003b3def01c0452a8a7420954d395335ea97d43b4bbf451_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_adc3ed095c2dfb841d1f21711b08bbc931f815be9e5c0a3d6a91f4d586e0ff99 = $this->env->getExtension("native_profiler");
        $__internal_adc3ed095c2dfb841d1f21711b08bbc931f815be9e5c0a3d6a91f4d586e0ff99->enter($__internal_adc3ed095c2dfb841d1f21711b08bbc931f815be9e5c0a3d6a91f4d586e0ff99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"container\">
    <div class=\"card card-container\">
        <img id=\"profile-img\" class=\"profile-img-card\" src=\"//ssl.gstatic.com/accounts/ui/avatar_2x.png\" />
        <p id=\"profile-name\" class=\"profile-name-card\"></p>
        <form class=\"form-signin\" action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
            <span id=\"reauth-email\" class=\"reauth-email\"></span>
            <input id=\"inputEmail\" name= \"_username\" class=\"form-control\" placeholder=\"username\" required autofocus>
            <input type=\"password\" id=\"inputPassword\" name= \"_password\" class=\"form-control\" placeholder=\"Password\" required>
            <div id=\"remember\" class=\"checkbox\">
                <label>
                    <input type=\"checkbox\" value=\"remember-me\"> Remember me
                </label>
            </div>
            <button class=\"btn btn-lg btn-primary btn-block btn-signin\" type=\"submit\">Login</button>
        </form><!-- /form -->
        <a href=\"#\" class=\"forgot-password\">
            Olvidaste tu contraseña?
        </a>
        ";
        // line 28
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 29
            echo "            <p class=\"lb_error\">";
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), array("Bad credentials" => "Usuario y/o Password incorrecto.")), "html", null, true);
            // line 31
            echo "</p>
            ";
        }
        // line 33
        echo "    </div><!-- /card-container -->
</div><!-- /container -->
";
        
        $__internal_adc3ed095c2dfb841d1f21711b08bbc931f815be9e5c0a3d6a91f4d586e0ff99->leave($__internal_adc3ed095c2dfb841d1f21711b08bbc931f815be9e5c0a3d6a91f4d586e0ff99_prof);

    }

    public function getTemplateName()
    {
        return "UsersSecurityBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 33,  104 => 31,  101 => 29,  99 => 28,  82 => 14,  76 => 10,  70 => 9,  62 => 7,  56 => 6,  47 => 4,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" media="screen" href=" {{ asset('bundles/userssecurity/css/products.css') }} " >*/
/* {% endblock stylesheets %}*/
/* {% block section_title %}*/
/*     Login*/
/* {% endblock section_title %}*/
/* {% block body %}*/
/* <div class="container">*/
/*     <div class="card card-container">*/
/*         <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />*/
/*         <p id="profile-name" class="profile-name-card"></p>*/
/*         <form class="form-signin" action="{{ path('login_check') }}" method="post">*/
/*             <span id="reauth-email" class="reauth-email"></span>*/
/*             <input id="inputEmail" name= "_username" class="form-control" placeholder="username" required autofocus>*/
/*             <input type="password" id="inputPassword" name= "_password" class="form-control" placeholder="Password" required>*/
/*             <div id="remember" class="checkbox">*/
/*                 <label>*/
/*                     <input type="checkbox" value="remember-me"> Remember me*/
/*                 </label>*/
/*             </div>*/
/*             <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Login</button>*/
/*         </form><!-- /form -->*/
/*         <a href="#" class="forgot-password">*/
/*             Olvidaste tu contraseña?*/
/*         </a>*/
/*         {% if error %}*/
/*             <p class="lb_error">{{ error.message | replace({*/
/*                     "Bad credentials": "Usuario y/o Password incorrecto."*/
/*                     })}}</p>*/
/*             {% endif %}*/
/*     </div><!-- /card-container -->*/
/* </div><!-- /container -->*/
/* {% endblock body %}*/
