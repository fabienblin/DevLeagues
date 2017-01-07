<?php

/* @DevLeagues/League/new.html.twig */
class __TwigTemplate_6382e9e3c5bac8376bf9e0ff6bdaac431277864cc46ba6363dc849faf3e797b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle:League:base.html.twig", "@DevLeagues/League/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevLeaguesBundle:League:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9100e3dcb7e06bc96e72a6466605423f5ff10e806a89fa3a9500c20ab723fec6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9100e3dcb7e06bc96e72a6466605423f5ff10e806a89fa3a9500c20ab723fec6->enter($__internal_9100e3dcb7e06bc96e72a6466605423f5ff10e806a89fa3a9500c20ab723fec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/League/new.html.twig"));

        $__internal_d19d16f0892bebe49222b908fcdd5d2c64788360f7b56eefe1dbd7809c1d10c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d19d16f0892bebe49222b908fcdd5d2c64788360f7b56eefe1dbd7809c1d10c3->enter($__internal_d19d16f0892bebe49222b908fcdd5d2c64788360f7b56eefe1dbd7809c1d10c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/League/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9100e3dcb7e06bc96e72a6466605423f5ff10e806a89fa3a9500c20ab723fec6->leave($__internal_9100e3dcb7e06bc96e72a6466605423f5ff10e806a89fa3a9500c20ab723fec6_prof);

        
        $__internal_d19d16f0892bebe49222b908fcdd5d2c64788360f7b56eefe1dbd7809c1d10c3->leave($__internal_d19d16f0892bebe49222b908fcdd5d2c64788360f7b56eefe1dbd7809c1d10c3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_acd3e0a9d6132b889e0b7c98a7570ed36acc7fcab5bad86a2ad85e87659e300a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acd3e0a9d6132b889e0b7c98a7570ed36acc7fcab5bad86a2ad85e87659e300a->enter($__internal_acd3e0a9d6132b889e0b7c98a7570ed36acc7fcab5bad86a2ad85e87659e300a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7890497f79eeb13fba40c38ebfac41c030426b226e8fdb02717b5d169094ce27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7890497f79eeb13fba40c38ebfac41c030426b226e8fdb02717b5d169094ce27->enter($__internal_7890497f79eeb13fba40c38ebfac41c030426b226e8fdb02717b5d169094ce27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Welcome to the League:new page</h1>
";
        
        $__internal_7890497f79eeb13fba40c38ebfac41c030426b226e8fdb02717b5d169094ce27->leave($__internal_7890497f79eeb13fba40c38ebfac41c030426b226e8fdb02717b5d169094ce27_prof);

        
        $__internal_acd3e0a9d6132b889e0b7c98a7570ed36acc7fcab5bad86a2ad85e87659e300a->leave($__internal_acd3e0a9d6132b889e0b7c98a7570ed36acc7fcab5bad86a2ad85e87659e300a_prof);

    }

    public function getTemplateName()
    {
        return "@DevLeagues/League/new.html.twig";
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
        return new Twig_Source("{% extends \"DevLeaguesBundle:League:base.html.twig\" %}

{% block body %}
<h1>Welcome to the League:new page</h1>
{% endblock %}
", "@DevLeagues/League/new.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/League/new.html.twig");
    }
}
