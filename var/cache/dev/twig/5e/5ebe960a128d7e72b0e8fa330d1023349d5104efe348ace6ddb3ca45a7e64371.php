<?php

/* @DevLeagues/Challenge/remove.html.twig */
class __TwigTemplate_e042c4bf3f45eb212d3b2831abffaadad97154de3ef8223d2ff3e1d0ddd3635c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle:Challenge:index.html.twig", "@DevLeagues/Challenge/remove.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevLeaguesBundle:Challenge:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc6f5794daac116d9a81d79bb7df36874c83807770ebe94f5ee0e2553d20b44e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc6f5794daac116d9a81d79bb7df36874c83807770ebe94f5ee0e2553d20b44e->enter($__internal_cc6f5794daac116d9a81d79bb7df36874c83807770ebe94f5ee0e2553d20b44e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Challenge/remove.html.twig"));

        $__internal_5fb6a507b5982f74dc1a311461908343701f6e9b6c31cfb6fc1e85b326eb1841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fb6a507b5982f74dc1a311461908343701f6e9b6c31cfb6fc1e85b326eb1841->enter($__internal_5fb6a507b5982f74dc1a311461908343701f6e9b6c31cfb6fc1e85b326eb1841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Challenge/remove.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc6f5794daac116d9a81d79bb7df36874c83807770ebe94f5ee0e2553d20b44e->leave($__internal_cc6f5794daac116d9a81d79bb7df36874c83807770ebe94f5ee0e2553d20b44e_prof);

        
        $__internal_5fb6a507b5982f74dc1a311461908343701f6e9b6c31cfb6fc1e85b326eb1841->leave($__internal_5fb6a507b5982f74dc1a311461908343701f6e9b6c31cfb6fc1e85b326eb1841_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0bc8f6700bc375f8230d3eef8180bf57a689ae888075b20589c5ac6937fac4f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bc8f6700bc375f8230d3eef8180bf57a689ae888075b20589c5ac6937fac4f3->enter($__internal_0bc8f6700bc375f8230d3eef8180bf57a689ae888075b20589c5ac6937fac4f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6d8cff2cc372208bc3a85cd91b6e3a16fd62c84ac8a6531672c3be5aa7fa127b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d8cff2cc372208bc3a85cd91b6e3a16fd62c84ac8a6531672c3be5aa7fa127b->enter($__internal_6d8cff2cc372208bc3a85cd91b6e3a16fd62c84ac8a6531672c3be5aa7fa127b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h1>Welcome to the Challenge:remove page</h1>
";
        
        $__internal_6d8cff2cc372208bc3a85cd91b6e3a16fd62c84ac8a6531672c3be5aa7fa127b->leave($__internal_6d8cff2cc372208bc3a85cd91b6e3a16fd62c84ac8a6531672c3be5aa7fa127b_prof);

        
        $__internal_0bc8f6700bc375f8230d3eef8180bf57a689ae888075b20589c5ac6937fac4f3->leave($__internal_0bc8f6700bc375f8230d3eef8180bf57a689ae888075b20589c5ac6937fac4f3_prof);

    }

    public function getTemplateName()
    {
        return "@DevLeagues/Challenge/remove.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"DevLeaguesBundle:Challenge:index.html.twig\" %}
{% block body %}
<h1>Welcome to the Challenge:remove page</h1>
{% endblock %}
", "@DevLeagues/Challenge/remove.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/Challenge/remove.html.twig");
    }
}
