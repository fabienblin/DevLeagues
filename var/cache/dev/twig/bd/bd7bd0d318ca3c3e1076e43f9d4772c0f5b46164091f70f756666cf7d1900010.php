<?php

/* @DevLeagues/Challenge/index.html.twig */
class __TwigTemplate_61cd34f578033ca0f059c08057c395d54602dc935e34914a5afce354d7511333 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "@DevLeagues/Challenge/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevLeaguesBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ebb1b8520f04ab2f34187c4bd02a38e9587d2197c279008862e38d90c38eae9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ebb1b8520f04ab2f34187c4bd02a38e9587d2197c279008862e38d90c38eae9->enter($__internal_8ebb1b8520f04ab2f34187c4bd02a38e9587d2197c279008862e38d90c38eae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Challenge/index.html.twig"));

        $__internal_4ec6a8a668901bd1d3c96d9f4c9a5f0c00d8d5d9f055aaf4ce9eb9e06613567c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ec6a8a668901bd1d3c96d9f4c9a5f0c00d8d5d9f055aaf4ce9eb9e06613567c->enter($__internal_4ec6a8a668901bd1d3c96d9f4c9a5f0c00d8d5d9f055aaf4ce9eb9e06613567c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Challenge/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ebb1b8520f04ab2f34187c4bd02a38e9587d2197c279008862e38d90c38eae9->leave($__internal_8ebb1b8520f04ab2f34187c4bd02a38e9587d2197c279008862e38d90c38eae9_prof);

        
        $__internal_4ec6a8a668901bd1d3c96d9f4c9a5f0c00d8d5d9f055aaf4ce9eb9e06613567c->leave($__internal_4ec6a8a668901bd1d3c96d9f4c9a5f0c00d8d5d9f055aaf4ce9eb9e06613567c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a499a2acdd59a820744d03198358d973ad73cbe9e446a5588b534d1f754209c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a499a2acdd59a820744d03198358d973ad73cbe9e446a5588b534d1f754209c5->enter($__internal_a499a2acdd59a820744d03198358d973ad73cbe9e446a5588b534d1f754209c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4b06d0f8583c200955517ea027d641f441e254fe8be8d086bae9190efe21193c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b06d0f8583c200955517ea027d641f441e254fe8be8d086bae9190efe21193c->enter($__internal_4b06d0f8583c200955517ea027d641f441e254fe8be8d086bae9190efe21193c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Welcome to the Challenge:index page</h1>
";
        
        $__internal_4b06d0f8583c200955517ea027d641f441e254fe8be8d086bae9190efe21193c->leave($__internal_4b06d0f8583c200955517ea027d641f441e254fe8be8d086bae9190efe21193c_prof);

        
        $__internal_a499a2acdd59a820744d03198358d973ad73cbe9e446a5588b534d1f754209c5->leave($__internal_a499a2acdd59a820744d03198358d973ad73cbe9e446a5588b534d1f754209c5_prof);

    }

    public function getTemplateName()
    {
        return "@DevLeagues/Challenge/index.html.twig";
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
        return new Twig_Source("{% extends \"DevLeaguesBundle::base.html.twig\" %}

{% block body %}
<h1>Welcome to the Challenge:index page</h1>
{% endblock %}
", "@DevLeagues/Challenge/index.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/Challenge/index.html.twig");
    }
}
