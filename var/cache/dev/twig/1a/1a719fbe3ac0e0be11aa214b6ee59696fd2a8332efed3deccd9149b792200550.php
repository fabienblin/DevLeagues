<?php

/* @AvanzuAdminTheme/Default/login.html.twig */
class __TwigTemplate_c2e4a642ede0fc24c53eb5d450db1e30753fc6ff2bb39a0c040027d46f6a3464 extends Twig_Template
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
        $__internal_9209e084160c3249ecb503bdfd860ccfa8bde627ad87248af09deaaad0a60f7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9209e084160c3249ecb503bdfd860ccfa8bde627ad87248af09deaaad0a60f7a->enter($__internal_9209e084160c3249ecb503bdfd860ccfa8bde627ad87248af09deaaad0a60f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Default/login.html.twig"));

        $__internal_387333776747b2c677d2e00b38e6e1269e98a1f09e54ba7e9116db941f82ad29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_387333776747b2c677d2e00b38e6e1269e98a1f09e54ba7e9116db941f82ad29->enter($__internal_387333776747b2c677d2e00b38e6e1269e98a1f09e54ba7e9116db941f82ad29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Default/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9209e084160c3249ecb503bdfd860ccfa8bde627ad87248af09deaaad0a60f7a->leave($__internal_9209e084160c3249ecb503bdfd860ccfa8bde627ad87248af09deaaad0a60f7a_prof);

        
        $__internal_387333776747b2c677d2e00b38e6e1269e98a1f09e54ba7e9116db941f82ad29->leave($__internal_387333776747b2c677d2e00b38e6e1269e98a1f09e54ba7e9116db941f82ad29_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_ac3a7f4b3633aea10d790a66b35a4829d415ac58e864c9fbc57cbaeea149f016 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac3a7f4b3633aea10d790a66b35a4829d415ac58e864c9fbc57cbaeea149f016->enter($__internal_ac3a7f4b3633aea10d790a66b35a4829d415ac58e864c9fbc57cbaeea149f016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_d89eaace8d90554a1df1ea861ac06f650ad62c8dfbef36afa2543ea0a3dbb3e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d89eaace8d90554a1df1ea861ac06f650ad62c8dfbef36afa2543ea0a3dbb3e1->enter($__internal_d89eaace8d90554a1df1ea861ac06f650ad62c8dfbef36afa2543ea0a3dbb3e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_d89eaace8d90554a1df1ea861ac06f650ad62c8dfbef36afa2543ea0a3dbb3e1->leave($__internal_d89eaace8d90554a1df1ea861ac06f650ad62c8dfbef36afa2543ea0a3dbb3e1_prof);

        
        $__internal_ac3a7f4b3633aea10d790a66b35a4829d415ac58e864c9fbc57cbaeea149f016->leave($__internal_ac3a7f4b3633aea10d790a66b35a4829d415ac58e864c9fbc57cbaeea149f016_prof);

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
