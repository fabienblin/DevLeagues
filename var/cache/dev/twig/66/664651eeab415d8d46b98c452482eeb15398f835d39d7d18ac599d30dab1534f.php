<?php

/* AvanzuAdminThemeBundle:Security:login.html.twig */
class __TwigTemplate_235f3802481c1859dd2ab287934b7a0670a680c7b54038890907f4c8741780fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a64a33c55a501f7decb4338d2f83559f8eaa79166666421825ff94d092f707c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a64a33c55a501f7decb4338d2f83559f8eaa79166666421825ff94d092f707c9->enter($__internal_a64a33c55a501f7decb4338d2f83559f8eaa79166666421825ff94d092f707c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Security:login.html.twig"));

        $__internal_09b09cf6f6c568954c6c42695194c3b28527ee6d34a85aa1a6172afab1d444e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09b09cf6f6c568954c6c42695194c3b28527ee6d34a85aa1a6172afab1d444e2->enter($__internal_09b09cf6f6c568954c6c42695194c3b28527ee6d34a85aa1a6172afab1d444e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:Security:login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html class=\"bg-black\">
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    ";
        // line 8
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3ca43a5_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3ca43a5_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/3ca43a5_part_1.css");
            // line 9
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" />
    ";
        } else {
            // asset "3ca43a5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_3ca43a5") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/3ca43a5.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" />
    ";
        }
        unset($context["asset_url"]);
        // line 11
        echo "
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <![endif]-->
</head>
<body class=\"bg-black\">

<div class=\"form-box\" id=\"login-box\">
    <div class=\"header\">Sign In</div>
    <form action=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        <div class=\"body bg-gray\">
            <div class=\"form-group\">
                <input type=\"text\" name=\"_username\" class=\"form-control\" placeholder=\"username\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\"/>
            </div>
            <div class=\"form-group\">
                <input type=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Password\"/>
            </div>
            <div class=\"form-group\">
                <input type=\"checkbox\" name=\"remember_me\"/> Remember me
            </div>
        </div>
        <div class=\"footer\">
            <button type=\"submit\" class=\"btn bg-olive btn-block\">Sign me in</button>

            <p><a href=\"#\">I forgot my password</a></p>

            <a href=\"register.html\" class=\"text-center\">Register a new membership</a>
        </div>
    </form>

    <div class=\"margin text-center\">
        <span>Sign in using social networks</span>
        <br/>
        <button class=\"btn bg-light-blue btn-circle\"><i class=\"fa fa-facebook\"></i></button>
        <button class=\"btn bg-aqua btn-circle\"><i class=\"fa fa-twitter\"></i></button>
        <button class=\"btn bg-red btn-circle\"><i class=\"fa fa-google-plus\"></i></button>

    </div>
</div>


<!-- jQuery 2.0.2 -->
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js\"></script>
<!-- Bootstrap -->
<script src=\"../../js/bootstrap.min.js\" type=\"text/javascript\"></script>

</body>
</html>
";
        
        $__internal_a64a33c55a501f7decb4338d2f83559f8eaa79166666421825ff94d092f707c9->leave($__internal_a64a33c55a501f7decb4338d2f83559f8eaa79166666421825ff94d092f707c9_prof);

        
        $__internal_09b09cf6f6c568954c6c42695194c3b28527ee6d34a85aa1a6172afab1d444e2->leave($__internal_09b09cf6f6c568954c6c42695194c3b28527ee6d34a85aa1a6172afab1d444e2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4bd4ca1dac386d32815b3b54ed88fd08f4a4ad3d6bb844e5067559c15b958f03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bd4ca1dac386d32815b3b54ed88fd08f4a4ad3d6bb844e5067559c15b958f03->enter($__internal_4bd4ca1dac386d32815b3b54ed88fd08f4a4ad3d6bb844e5067559c15b958f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7036eaadbd67899418ea2468860bef7f3da7637d45073f7f9226c5d12c3d5daa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7036eaadbd67899418ea2468860bef7f3da7637d45073f7f9226c5d12c3d5daa->enter($__internal_7036eaadbd67899418ea2468860bef7f3da7637d45073f7f9226c5d12c3d5daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Log in ";
        
        $__internal_7036eaadbd67899418ea2468860bef7f3da7637d45073f7f9226c5d12c3d5daa->leave($__internal_7036eaadbd67899418ea2468860bef7f3da7637d45073f7f9226c5d12c3d5daa_prof);

        
        $__internal_4bd4ca1dac386d32815b3b54ed88fd08f4a4ad3d6bb844e5067559c15b958f03->leave($__internal_4bd4ca1dac386d32815b3b54ed88fd08f4a4ad3d6bb844e5067559c15b958f03_prof);

    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 5,  75 => 25,  69 => 22,  56 => 11,  42 => 9,  38 => 8,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html class=\"bg-black\">
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %} Log in {% endblock %}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    {% stylesheets '@admin_lte_css' %}
    <link href=\"{{ asset_url }}\" rel=\"stylesheet\" type=\"text/css\" />
    {% endstylesheets %}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <![endif]-->
</head>
<body class=\"bg-black\">

<div class=\"form-box\" id=\"login-box\">
    <div class=\"header\">Sign In</div>
    <form action=\"{{ path('fos_user_security_check') }}\" method=\"post\">
        <div class=\"body bg-gray\">
            <div class=\"form-group\">
                <input type=\"text\" name=\"_username\" class=\"form-control\" placeholder=\"username\" value=\"{{ last_username }}\"/>
            </div>
            <div class=\"form-group\">
                <input type=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Password\"/>
            </div>
            <div class=\"form-group\">
                <input type=\"checkbox\" name=\"remember_me\"/> Remember me
            </div>
        </div>
        <div class=\"footer\">
            <button type=\"submit\" class=\"btn bg-olive btn-block\">Sign me in</button>

            <p><a href=\"#\">I forgot my password</a></p>

            <a href=\"register.html\" class=\"text-center\">Register a new membership</a>
        </div>
    </form>

    <div class=\"margin text-center\">
        <span>Sign in using social networks</span>
        <br/>
        <button class=\"btn bg-light-blue btn-circle\"><i class=\"fa fa-facebook\"></i></button>
        <button class=\"btn bg-aqua btn-circle\"><i class=\"fa fa-twitter\"></i></button>
        <button class=\"btn bg-red btn-circle\"><i class=\"fa fa-google-plus\"></i></button>

    </div>
</div>


<!-- jQuery 2.0.2 -->
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js\"></script>
<!-- Bootstrap -->
<script src=\"../../js/bootstrap.min.js\" type=\"text/javascript\"></script>

</body>
</html>
", "AvanzuAdminThemeBundle:Security:login.html.twig", "/home/webmaster/www/public_html/DevLeagues/var/cache/dev/../../../app/Resources/AvanzuAdminThemeBundle/views/Security/login.html.twig");
    }
}
