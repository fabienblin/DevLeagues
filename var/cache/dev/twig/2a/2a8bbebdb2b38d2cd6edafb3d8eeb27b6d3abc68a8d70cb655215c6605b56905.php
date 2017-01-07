<?php

/* @AvanzuAdminTheme/Default/login.html.twig */
class __TwigTemplate_3afdee602a6f8e15f0ae586664ca773a1f34ff7acb3aba37043bd9ef156efd8a extends Twig_Template
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
        $__internal_133380b84d4abd51c02b12f8638f1a2fb5ddf4bc406999c852be16a0ede0b629 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_133380b84d4abd51c02b12f8638f1a2fb5ddf4bc406999c852be16a0ede0b629->enter($__internal_133380b84d4abd51c02b12f8638f1a2fb5ddf4bc406999c852be16a0ede0b629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Default/login.html.twig"));

        $__internal_de079191c057970d73e9c47ed1ccdb345f1a4f0d6e5a1d1b1ad70dc2fb0d3205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de079191c057970d73e9c47ed1ccdb345f1a4f0d6e5a1d1b1ad70dc2fb0d3205->enter($__internal_de079191c057970d73e9c47ed1ccdb345f1a4f0d6e5a1d1b1ad70dc2fb0d3205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Default/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_133380b84d4abd51c02b12f8638f1a2fb5ddf4bc406999c852be16a0ede0b629->leave($__internal_133380b84d4abd51c02b12f8638f1a2fb5ddf4bc406999c852be16a0ede0b629_prof);

        
        $__internal_de079191c057970d73e9c47ed1ccdb345f1a4f0d6e5a1d1b1ad70dc2fb0d3205->leave($__internal_de079191c057970d73e9c47ed1ccdb345f1a4f0d6e5a1d1b1ad70dc2fb0d3205_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_5adf6969814786c79dfda3d3b7dcb51416e53f7d1fe6f78f3bf7f8ee0e7909dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5adf6969814786c79dfda3d3b7dcb51416e53f7d1fe6f78f3bf7f8ee0e7909dd->enter($__internal_5adf6969814786c79dfda3d3b7dcb51416e53f7d1fe6f78f3bf7f8ee0e7909dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_16c23680c71c3489b369fbf67405df8fa952ab90c22f5ad6fff22d1d5d74de32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16c23680c71c3489b369fbf67405df8fa952ab90c22f5ad6fff22d1d5d74de32->enter($__internal_16c23680c71c3489b369fbf67405df8fa952ab90c22f5ad6fff22d1d5d74de32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_16c23680c71c3489b369fbf67405df8fa952ab90c22f5ad6fff22d1d5d74de32->leave($__internal_16c23680c71c3489b369fbf67405df8fa952ab90c22f5ad6fff22d1d5d74de32_prof);

        
        $__internal_5adf6969814786c79dfda3d3b7dcb51416e53f7d1fe6f78f3bf7f8ee0e7909dd->leave($__internal_5adf6969814786c79dfda3d3b7dcb51416e53f7d1fe6f78f3bf7f8ee0e7909dd_prof);

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
{% endblock %}", "@AvanzuAdminTheme/Default/login.html.twig", "/var/www/html/devleagues/github/app/Resources/AvanzuAdminThemeBundle/views/Default/login.html.twig");
    }
}
