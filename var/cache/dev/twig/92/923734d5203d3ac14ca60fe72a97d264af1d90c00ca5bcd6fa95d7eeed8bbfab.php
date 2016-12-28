<?php

/* DevLeaguesBundle:Contact:index.html.twig */
class __TwigTemplate_13d00802a64dc2a556db637ae93548651f79557b5c356572b4daf3f10187ce29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "DevLeaguesBundle:Contact:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevLeaguesBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_06250cf61a567b0b1beb94e8cb295d3fe75e34bd8138e8b8bce1b9e7f1771ce9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06250cf61a567b0b1beb94e8cb295d3fe75e34bd8138e8b8bce1b9e7f1771ce9->enter($__internal_06250cf61a567b0b1beb94e8cb295d3fe75e34bd8138e8b8bce1b9e7f1771ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Contact:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06250cf61a567b0b1beb94e8cb295d3fe75e34bd8138e8b8bce1b9e7f1771ce9->leave($__internal_06250cf61a567b0b1beb94e8cb295d3fe75e34bd8138e8b8bce1b9e7f1771ce9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d9b0c94b0aa4c9d3e59c85cdfa2a559dc738977fd7ddd502c7a23f63ebda677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d9b0c94b0aa4c9d3e59c85cdfa2a559dc738977fd7ddd502c7a23f63ebda677->enter($__internal_1d9b0c94b0aa4c9d3e59c85cdfa2a559dc738977fd7ddd502c7a23f63ebda677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DevLeaguesBundle:Contact:index";
        
        $__internal_1d9b0c94b0aa4c9d3e59c85cdfa2a559dc738977fd7ddd502c7a23f63ebda677->leave($__internal_1d9b0c94b0aa4c9d3e59c85cdfa2a559dc738977fd7ddd502c7a23f63ebda677_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f97a0a7f98e86aa4de8a3ea4d78ad5dbf9ec5b307a9fc5dad3e9913d67b2a21d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f97a0a7f98e86aa4de8a3ea4d78ad5dbf9ec5b307a9fc5dad3e9913d67b2a21d->enter($__internal_f97a0a7f98e86aa4de8a3ea4d78ad5dbf9ec5b307a9fc5dad3e9913d67b2a21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Contact:index page</h1>
";
        
        $__internal_f97a0a7f98e86aa4de8a3ea4d78ad5dbf9ec5b307a9fc5dad3e9913d67b2a21d->leave($__internal_f97a0a7f98e86aa4de8a3ea4d78ad5dbf9ec5b307a9fc5dad3e9913d67b2a21d_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:Contact:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}DevLeaguesBundle:Contact:index{% endblock %}

{% block body %}
<h1>Welcome to the Contact:index page</h1>
{% endblock %}
", "DevLeaguesBundle:Contact:index.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/Contact/index.html.twig");
    }
}
