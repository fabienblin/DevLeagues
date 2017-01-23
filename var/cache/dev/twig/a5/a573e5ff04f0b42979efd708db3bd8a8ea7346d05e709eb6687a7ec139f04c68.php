<?php

/* @AvanzuAdminTheme/Security/login.html.twig */
class __TwigTemplate_c959f64e6cb28329e9a1f8fb31e3fe8c3640149cb994bed6ec150320c196509f extends Twig_Template
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
        $__internal_a87c2657782005ad5a9fdc49abdc4883e6eaf8ae0cba378a33257235dc876559 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a87c2657782005ad5a9fdc49abdc4883e6eaf8ae0cba378a33257235dc876559->enter($__internal_a87c2657782005ad5a9fdc49abdc4883e6eaf8ae0cba378a33257235dc876559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Security/login.html.twig"));

        $__internal_c7f4b83458b9b063af8326f6d1fde577a138f38f2e30153bd91786a1b00678de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7f4b83458b9b063af8326f6d1fde577a138f38f2e30153bd91786a1b00678de->enter($__internal_c7f4b83458b9b063af8326f6d1fde577a138f38f2e30153bd91786a1b00678de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Security/login.html.twig"));

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

\t";
        // line 23
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 24
            echo "\t    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
\t";
        }
        // line 26
        echo "
    <form action=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
\t\t";
        // line 28
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 29
            echo "\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
\t\t";
        }
        // line 31
        echo "        <div class=\"body bg-gray\">
            <div class=\"form-group\">
                <input type=\"text\" name=\"_username\" class=\"form-control\" placeholder=\"username\" value=\"";
        // line 33
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
        
        $__internal_a87c2657782005ad5a9fdc49abdc4883e6eaf8ae0cba378a33257235dc876559->leave($__internal_a87c2657782005ad5a9fdc49abdc4883e6eaf8ae0cba378a33257235dc876559_prof);

        
        $__internal_c7f4b83458b9b063af8326f6d1fde577a138f38f2e30153bd91786a1b00678de->leave($__internal_c7f4b83458b9b063af8326f6d1fde577a138f38f2e30153bd91786a1b00678de_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_840f55f1bc67d9409cc9c74f3e60672f44b2e886fc89dd59abfe691dd297bcc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_840f55f1bc67d9409cc9c74f3e60672f44b2e886fc89dd59abfe691dd297bcc8->enter($__internal_840f55f1bc67d9409cc9c74f3e60672f44b2e886fc89dd59abfe691dd297bcc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7f72412208cf2828b35af75bac50cf8e3c1016025ec87f8a248af8450b899cf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f72412208cf2828b35af75bac50cf8e3c1016025ec87f8a248af8450b899cf5->enter($__internal_7f72412208cf2828b35af75bac50cf8e3c1016025ec87f8a248af8450b899cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Log in ";
        
        $__internal_7f72412208cf2828b35af75bac50cf8e3c1016025ec87f8a248af8450b899cf5->leave($__internal_7f72412208cf2828b35af75bac50cf8e3c1016025ec87f8a248af8450b899cf5_prof);

        
        $__internal_840f55f1bc67d9409cc9c74f3e60672f44b2e886fc89dd59abfe691dd297bcc8->leave($__internal_840f55f1bc67d9409cc9c74f3e60672f44b2e886fc89dd59abfe691dd297bcc8_prof);

    }

    public function getTemplateName()
    {
        return "@AvanzuAdminTheme/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 5,  97 => 33,  93 => 31,  87 => 29,  85 => 28,  81 => 27,  78 => 26,  72 => 24,  70 => 23,  56 => 11,  42 => 9,  38 => 8,  32 => 5,  26 => 1,);
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

\t{% if error %}
\t    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t{% endif %}

    <form action=\"{{ path('fos_user_security_check') }}\" method=\"post\">
\t\t{% if csrf_token %}
\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
\t\t{% endif %}
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
", "@AvanzuAdminTheme/Security/login.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/AvanzuAdminThemeBundle/views/Security/login.html.twig");
    }
}
