<?php

/* @AvanzuAdminTheme/Default/login.html.twig */
class __TwigTemplate_25ef06eba1e6983851b1d24cf07ab5b4ac6cefe3f94abf3e12597af8f5df95bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:login-layout.html.twig", "@AvanzuAdminTheme/Default/login.html.twig", 1);
        $this->blocks = array(
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:login-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eaa13670e243488312e739869a15533aaf68939a490def3f9adf2766c9c30707 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaa13670e243488312e739869a15533aaf68939a490def3f9adf2766c9c30707->enter($__internal_eaa13670e243488312e739869a15533aaf68939a490def3f9adf2766c9c30707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Default/login.html.twig"));

        $__internal_1f82ba1b156a8eb84247fa6aefd20e5bf133bf23cbc82aa8e33cc28031c2a2de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f82ba1b156a8eb84247fa6aefd20e5bf133bf23cbc82aa8e33cc28031c2a2de->enter($__internal_1f82ba1b156a8eb84247fa6aefd20e5bf133bf23cbc82aa8e33cc28031c2a2de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Default/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eaa13670e243488312e739869a15533aaf68939a490def3f9adf2766c9c30707->leave($__internal_eaa13670e243488312e739869a15533aaf68939a490def3f9adf2766c9c30707_prof);

        
        $__internal_1f82ba1b156a8eb84247fa6aefd20e5bf133bf23cbc82aa8e33cc28031c2a2de->leave($__internal_1f82ba1b156a8eb84247fa6aefd20e5bf133bf23cbc82aa8e33cc28031c2a2de_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_4382e85cea421d2c3937a57abd9bb4ba3b8b3e49098fa9e200c97a0027009410 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4382e85cea421d2c3937a57abd9bb4ba3b8b3e49098fa9e200c97a0027009410->enter($__internal_4382e85cea421d2c3937a57abd9bb4ba3b8b3e49098fa9e200c97a0027009410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_ca029db2ad50d92c714feb049d4bd225d38b7b34163050fc515295cc96fba5a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca029db2ad50d92c714feb049d4bd225d38b7b34163050fc515295cc96fba5a9->enter($__internal_ca029db2ad50d92c714feb049d4bd225d38b7b34163050fc515295cc96fba5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"../../index2.html\"><b>Admin</b>LTE</a>
        </div><!-- /.login-logo -->
        <div class=\"login-box-body\">
            <p class=\"login-box-msg\">Sign in to start your session</p>
            <form action=\"../../index2.html\" method=\"post\">
                <div class=\"form-group has-feedback\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Email\"/>
                    <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
                </div>
                <div class=\"form-group has-feedback\">
                    <input type=\"password\" class=\"form-control\" placeholder=\"Password\"/>
                    <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-8\">
                        <div class=\"checkbox\">
                            <label>
                                <input type=\"checkbox\"> Remember Me
                            </label>
                        </div>
                    </div><!-- /.col -->
                    <div class=\"col-xs-4\">
                        <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Sign In</button>
                    </div><!-- /.col -->
                </div>
            </form>

            <div class=\"social-auth-links text-center\">
                <p>- OR -</p>
                <a href=\"#\" class=\"btn btn-block btn-social btn-facebook btn-flat\"><i class=\"fa fa-facebook\"></i> Sign in using Facebook</a>
                <a href=\"#\" class=\"btn btn-block btn-social btn-google-plus btn-flat\"><i class=\"fa fa-google-plus\"></i> Sign in using Google+</a>
            </div><!-- /.social-auth-links -->

            <a href=\"#\">I forgot my password</a><br>
            <a href=\"register.html\" class=\"text-center\">Register a new membership</a>

        </div><!-- /.login-box-body -->
    </div>
";
        
        $__internal_ca029db2ad50d92c714feb049d4bd225d38b7b34163050fc515295cc96fba5a9->leave($__internal_ca029db2ad50d92c714feb049d4bd225d38b7b34163050fc515295cc96fba5a9_prof);

        
        $__internal_4382e85cea421d2c3937a57abd9bb4ba3b8b3e49098fa9e200c97a0027009410->leave($__internal_4382e85cea421d2c3937a57abd9bb4ba3b8b3e49098fa9e200c97a0027009410_prof);

    }

    public function getTemplateName()
    {
        return "@AvanzuAdminTheme/Default/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AvanzuAdminThemeBundle:layout:login-layout.html.twig' %}

{% block page_content %}
    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"../../index2.html\"><b>Admin</b>LTE</a>
        </div><!-- /.login-logo -->
        <div class=\"login-box-body\">
            <p class=\"login-box-msg\">Sign in to start your session</p>
            <form action=\"../../index2.html\" method=\"post\">
                <div class=\"form-group has-feedback\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Email\"/>
                    <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
                </div>
                <div class=\"form-group has-feedback\">
                    <input type=\"password\" class=\"form-control\" placeholder=\"Password\"/>
                    <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                </div>
                <div class=\"row\">
                    <div class=\"col-xs-8\">
                        <div class=\"checkbox\">
                            <label>
                                <input type=\"checkbox\"> Remember Me
                            </label>
                        </div>
                    </div><!-- /.col -->
                    <div class=\"col-xs-4\">
                        <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">Sign In</button>
                    </div><!-- /.col -->
                </div>
            </form>

            <div class=\"social-auth-links text-center\">
                <p>- OR -</p>
                <a href=\"#\" class=\"btn btn-block btn-social btn-facebook btn-flat\"><i class=\"fa fa-facebook\"></i> Sign in using Facebook</a>
                <a href=\"#\" class=\"btn btn-block btn-social btn-google-plus btn-flat\"><i class=\"fa fa-google-plus\"></i> Sign in using Google+</a>
            </div><!-- /.social-auth-links -->

            <a href=\"#\">I forgot my password</a><br>
            <a href=\"register.html\" class=\"text-center\">Register a new membership</a>

        </div><!-- /.login-box-body -->
    </div>
{% endblock %}", "@AvanzuAdminTheme/Default/login.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/AvanzuAdminThemeBundle/views/Default/login.html.twig");
    }
}
