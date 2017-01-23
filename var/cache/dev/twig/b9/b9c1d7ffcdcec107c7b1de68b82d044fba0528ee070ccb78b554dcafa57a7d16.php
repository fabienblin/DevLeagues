<?php

/* DevLeaguesBundle::default.html.twig */
class __TwigTemplate_e7fbd17bbdf49658a7f0a8d3fb603afa9d164fe65ddc615054448eb71640b0c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "DevLeaguesBundle::default.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_content' => array($this, 'block_page_content'),
            'box_header' => array($this, 'block_box_header'),
            'box_body' => array($this, 'block_box_body'),
            'box_footer' => array($this, 'block_box_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6b3692c27d152ca6d5cf28574087aa16028c2dee1093d5190459a22787214165 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b3692c27d152ca6d5cf28574087aa16028c2dee1093d5190459a22787214165->enter($__internal_6b3692c27d152ca6d5cf28574087aa16028c2dee1093d5190459a22787214165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle::default.html.twig"));

        $__internal_540bab16db90e336001e28ff88992eef0d144324e2989176c9164ab381d221e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_540bab16db90e336001e28ff88992eef0d144324e2989176c9164ab381d221e8->enter($__internal_540bab16db90e336001e28ff88992eef0d144324e2989176c9164ab381d221e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle::default.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b3692c27d152ca6d5cf28574087aa16028c2dee1093d5190459a22787214165->leave($__internal_6b3692c27d152ca6d5cf28574087aa16028c2dee1093d5190459a22787214165_prof);

        
        $__internal_540bab16db90e336001e28ff88992eef0d144324e2989176c9164ab381d221e8->leave($__internal_540bab16db90e336001e28ff88992eef0d144324e2989176c9164ab381d221e8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3cfdf3f579ffc745c5ff962b727f8a74ecefcdff0f580f34ea4d9abced2dd48e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cfdf3f579ffc745c5ff962b727f8a74ecefcdff0f580f34ea4d9abced2dd48e->enter($__internal_3cfdf3f579ffc745c5ff962b727f8a74ecefcdff0f580f34ea4d9abced2dd48e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c961ace8976631ff574d45870be04025432ee0ba866f88023a6dc07043995ad3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c961ace8976631ff574d45870be04025432ee0ba866f88023a6dc07043995ad3->enter($__internal_c961ace8976631ff574d45870be04025432ee0ba866f88023a6dc07043995ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    DevLeagues.com
";
        
        $__internal_c961ace8976631ff574d45870be04025432ee0ba866f88023a6dc07043995ad3->leave($__internal_c961ace8976631ff574d45870be04025432ee0ba866f88023a6dc07043995ad3_prof);

        
        $__internal_3cfdf3f579ffc745c5ff962b727f8a74ecefcdff0f580f34ea4d9abced2dd48e->leave($__internal_3cfdf3f579ffc745c5ff962b727f8a74ecefcdff0f580f34ea4d9abced2dd48e_prof);

    }

    // line 7
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_d81785e431ae990e57b794c454d868eb24cd0ca4d7e633f30172bebcfb001b57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d81785e431ae990e57b794c454d868eb24cd0ca4d7e633f30172bebcfb001b57->enter($__internal_d81785e431ae990e57b794c454d868eb24cd0ca4d7e633f30172bebcfb001b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_3a93d1ea7308b7a52636fe3049f10e0ffad51cbe97facb189205f459e1279d88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a93d1ea7308b7a52636fe3049f10e0ffad51cbe97facb189205f459e1279d88->enter($__internal_3a93d1ea7308b7a52636fe3049f10e0ffad51cbe97facb189205f459e1279d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 8
        echo "<div class=\"box\">
\t<div class=\"box-header with-border\">
\t\t";
        // line 10
        $this->displayBlock('box_header', $context, $blocks);
        // line 11
        echo "\t</div>
\t<div class=\"box-body\">
\t\t";
        // line 13
        $this->displayBlock('box_body', $context, $blocks);
        // line 14
        echo "\t</div>
\t<div class=\"box-footer\">
\t\t";
        // line 16
        $this->displayBlock('box_footer', $context, $blocks);
        // line 17
        echo "\t</div>
</div>
";
        
        $__internal_3a93d1ea7308b7a52636fe3049f10e0ffad51cbe97facb189205f459e1279d88->leave($__internal_3a93d1ea7308b7a52636fe3049f10e0ffad51cbe97facb189205f459e1279d88_prof);

        
        $__internal_d81785e431ae990e57b794c454d868eb24cd0ca4d7e633f30172bebcfb001b57->leave($__internal_d81785e431ae990e57b794c454d868eb24cd0ca4d7e633f30172bebcfb001b57_prof);

    }

    // line 10
    public function block_box_header($context, array $blocks = array())
    {
        $__internal_f50bb0901db8fd35e4df42967056757ba4b129f22978141852ef802a15193c64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f50bb0901db8fd35e4df42967056757ba4b129f22978141852ef802a15193c64->enter($__internal_f50bb0901db8fd35e4df42967056757ba4b129f22978141852ef802a15193c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_header"));

        $__internal_9de8a3fe514ca58732a4887ceb6439a9e3bf6e6ac18628edda2d6d955050b0cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9de8a3fe514ca58732a4887ceb6439a9e3bf6e6ac18628edda2d6d955050b0cf->enter($__internal_9de8a3fe514ca58732a4887ceb6439a9e3bf6e6ac18628edda2d6d955050b0cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_header"));

        echo "EMPTY";
        
        $__internal_9de8a3fe514ca58732a4887ceb6439a9e3bf6e6ac18628edda2d6d955050b0cf->leave($__internal_9de8a3fe514ca58732a4887ceb6439a9e3bf6e6ac18628edda2d6d955050b0cf_prof);

        
        $__internal_f50bb0901db8fd35e4df42967056757ba4b129f22978141852ef802a15193c64->leave($__internal_f50bb0901db8fd35e4df42967056757ba4b129f22978141852ef802a15193c64_prof);

    }

    // line 13
    public function block_box_body($context, array $blocks = array())
    {
        $__internal_7faa5f8ff7b8960c994855ec57eef4d999d5855b9abacfc1e504ecc202f2b17a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7faa5f8ff7b8960c994855ec57eef4d999d5855b9abacfc1e504ecc202f2b17a->enter($__internal_7faa5f8ff7b8960c994855ec57eef4d999d5855b9abacfc1e504ecc202f2b17a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_body"));

        $__internal_ad1d1f8cb55b7d8fb6486c72e9ec3f3a8862ffbbb01e12181ccae5bfc4c20233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad1d1f8cb55b7d8fb6486c72e9ec3f3a8862ffbbb01e12181ccae5bfc4c20233->enter($__internal_ad1d1f8cb55b7d8fb6486c72e9ec3f3a8862ffbbb01e12181ccae5bfc4c20233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_body"));

        echo "EMPTY";
        
        $__internal_ad1d1f8cb55b7d8fb6486c72e9ec3f3a8862ffbbb01e12181ccae5bfc4c20233->leave($__internal_ad1d1f8cb55b7d8fb6486c72e9ec3f3a8862ffbbb01e12181ccae5bfc4c20233_prof);

        
        $__internal_7faa5f8ff7b8960c994855ec57eef4d999d5855b9abacfc1e504ecc202f2b17a->leave($__internal_7faa5f8ff7b8960c994855ec57eef4d999d5855b9abacfc1e504ecc202f2b17a_prof);

    }

    // line 16
    public function block_box_footer($context, array $blocks = array())
    {
        $__internal_66430e92cc0ac386e1e7b332dc7bb182c59a2a2ebc8246d3e999a1bc770ba661 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66430e92cc0ac386e1e7b332dc7bb182c59a2a2ebc8246d3e999a1bc770ba661->enter($__internal_66430e92cc0ac386e1e7b332dc7bb182c59a2a2ebc8246d3e999a1bc770ba661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_footer"));

        $__internal_1673181baf63f0383e42eb1c9b8fc1afde498b676f4dc8c9e0ac5ac63d551317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1673181baf63f0383e42eb1c9b8fc1afde498b676f4dc8c9e0ac5ac63d551317->enter($__internal_1673181baf63f0383e42eb1c9b8fc1afde498b676f4dc8c9e0ac5ac63d551317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_footer"));

        echo "EMPTY";
        
        $__internal_1673181baf63f0383e42eb1c9b8fc1afde498b676f4dc8c9e0ac5ac63d551317->leave($__internal_1673181baf63f0383e42eb1c9b8fc1afde498b676f4dc8c9e0ac5ac63d551317_prof);

        
        $__internal_66430e92cc0ac386e1e7b332dc7bb182c59a2a2ebc8246d3e999a1bc770ba661->leave($__internal_66430e92cc0ac386e1e7b332dc7bb182c59a2a2ebc8246d3e999a1bc770ba661_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle::default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 16,  121 => 13,  103 => 10,  91 => 17,  89 => 16,  85 => 14,  83 => 13,  79 => 11,  77 => 10,  73 => 8,  64 => 7,  53 => 4,  44 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AvanzuAdminThemeBundle:layout:base-layout.html.twig' %}

{% block title %}
    DevLeagues.com
{% endblock %}

{% block page_content %}
<div class=\"box\">
\t<div class=\"box-header with-border\">
\t\t{% block box_header %}EMPTY{% endblock %}
\t</div>
\t<div class=\"box-body\">
\t\t{% block box_body %}EMPTY{% endblock %}
\t</div>
\t<div class=\"box-footer\">
\t\t{% block box_footer %}EMPTY{% endblock %}
\t</div>
</div>
{% endblock %}
", "DevLeaguesBundle::default.html.twig", "/home/webmaster/www/public_html/DevLeagues/var/cache/dev/../../../src/DevLeaguesBundle/Resources/views/default.html.twig");
    }
}
