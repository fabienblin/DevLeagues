<?php

/* DevLeaguesBundle:About:index.html.twig */
class __TwigTemplate_bbdef6d1ee709b1626bde452f8043b1464096ed51aae57e3d0484a0f48430f12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "DevLeaguesBundle:About:index.html.twig", 1);
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
        $__internal_d97d71cf595bdcb83d93a112a80bbfc9c2bc034cd5db756deeb2b2ed81b3960a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d97d71cf595bdcb83d93a112a80bbfc9c2bc034cd5db756deeb2b2ed81b3960a->enter($__internal_d97d71cf595bdcb83d93a112a80bbfc9c2bc034cd5db756deeb2b2ed81b3960a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:About:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d97d71cf595bdcb83d93a112a80bbfc9c2bc034cd5db756deeb2b2ed81b3960a->leave($__internal_d97d71cf595bdcb83d93a112a80bbfc9c2bc034cd5db756deeb2b2ed81b3960a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe757bea8a88577196ec15e5ecbb9c56b3cf870d616e680b8e4432371e1f719f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe757bea8a88577196ec15e5ecbb9c56b3cf870d616e680b8e4432371e1f719f->enter($__internal_fe757bea8a88577196ec15e5ecbb9c56b3cf870d616e680b8e4432371e1f719f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DevLeaguesBundle:About:index";
        
        $__internal_fe757bea8a88577196ec15e5ecbb9c56b3cf870d616e680b8e4432371e1f719f->leave($__internal_fe757bea8a88577196ec15e5ecbb9c56b3cf870d616e680b8e4432371e1f719f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a762884ab28f3b5dec252a8b8fe2eedb6e9a5a83b1126be81bc8d531423ab15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a762884ab28f3b5dec252a8b8fe2eedb6e9a5a83b1126be81bc8d531423ab15->enter($__internal_8a762884ab28f3b5dec252a8b8fe2eedb6e9a5a83b1126be81bc8d531423ab15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the About:index page</h1>
";
        
        $__internal_8a762884ab28f3b5dec252a8b8fe2eedb6e9a5a83b1126be81bc8d531423ab15->leave($__internal_8a762884ab28f3b5dec252a8b8fe2eedb6e9a5a83b1126be81bc8d531423ab15_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:About:index.html.twig";
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

{% block title %}DevLeaguesBundle:About:index{% endblock %}

{% block body %}
<h1>Welcome to the About:index page</h1>
{% endblock %}
", "DevLeaguesBundle:About:index.html.twig", "/var/www/html/devleagues/src/DevLeaguesBundle/Resources/views/About/index.html.twig");
    }
}
