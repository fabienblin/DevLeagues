<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_2baca61f98e948e04b3b80ada79bccc2a482b8c747a8f9c44680da2951f7bb66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_38e9514269116903d385150f61a059aec3633d5b4779dd638834ef3ab42b3408 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38e9514269116903d385150f61a059aec3633d5b4779dd638834ef3ab42b3408->enter($__internal_38e9514269116903d385150f61a059aec3633d5b4779dd638834ef3ab42b3408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_893d8af6161316f470e174fccbdf530fd5ad9ad05da02cca4c58937c405b16e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_893d8af6161316f470e174fccbdf530fd5ad9ad05da02cca4c58937c405b16e1->enter($__internal_893d8af6161316f470e174fccbdf530fd5ad9ad05da02cca4c58937c405b16e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38e9514269116903d385150f61a059aec3633d5b4779dd638834ef3ab42b3408->leave($__internal_38e9514269116903d385150f61a059aec3633d5b4779dd638834ef3ab42b3408_prof);

        
        $__internal_893d8af6161316f470e174fccbdf530fd5ad9ad05da02cca4c58937c405b16e1->leave($__internal_893d8af6161316f470e174fccbdf530fd5ad9ad05da02cca4c58937c405b16e1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e397ff38525040e553e0ccac0a25611ac06db252863ebd4cf2c386973ad4305 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e397ff38525040e553e0ccac0a25611ac06db252863ebd4cf2c386973ad4305->enter($__internal_7e397ff38525040e553e0ccac0a25611ac06db252863ebd4cf2c386973ad4305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_95cef3647ac37f5a397a615f0c33611ae0f34324c2fa869ffd89dc282197fe45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95cef3647ac37f5a397a615f0c33611ae0f34324c2fa869ffd89dc282197fe45->enter($__internal_95cef3647ac37f5a397a615f0c33611ae0f34324c2fa869ffd89dc282197fe45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_95cef3647ac37f5a397a615f0c33611ae0f34324c2fa869ffd89dc282197fe45->leave($__internal_95cef3647ac37f5a397a615f0c33611ae0f34324c2fa869ffd89dc282197fe45_prof);

        
        $__internal_7e397ff38525040e553e0ccac0a25611ac06db252863ebd4cf2c386973ad4305->leave($__internal_7e397ff38525040e553e0ccac0a25611ac06db252863ebd4cf2c386973ad4305_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0a7885249e55b1be85d38136ad71b0c04568e3f5701212c28f66317c902391a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0a7885249e55b1be85d38136ad71b0c04568e3f5701212c28f66317c902391a->enter($__internal_e0a7885249e55b1be85d38136ad71b0c04568e3f5701212c28f66317c902391a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_33f2b4b3357897c2e1be0a0820a8136ba671d21ddeedf94addc74855e6704f6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33f2b4b3357897c2e1be0a0820a8136ba671d21ddeedf94addc74855e6704f6c->enter($__internal_33f2b4b3357897c2e1be0a0820a8136ba671d21ddeedf94addc74855e6704f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_33f2b4b3357897c2e1be0a0820a8136ba671d21ddeedf94addc74855e6704f6c->leave($__internal_33f2b4b3357897c2e1be0a0820a8136ba671d21ddeedf94addc74855e6704f6c_prof);

        
        $__internal_e0a7885249e55b1be85d38136ad71b0c04568e3f5701212c28f66317c902391a->leave($__internal_e0a7885249e55b1be85d38136ad71b0c04568e3f5701212c28f66317c902391a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
