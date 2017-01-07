<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_3cd37cdab15c552aded0029f69e4e24601bb7354237c618552dff660f5076d6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3ed888b4ca1d31443712f1e977a3f7e07dbb669f22e51172773b3db1ccd00b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3ed888b4ca1d31443712f1e977a3f7e07dbb669f22e51172773b3db1ccd00b7->enter($__internal_f3ed888b4ca1d31443712f1e977a3f7e07dbb669f22e51172773b3db1ccd00b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_8379328ed0646083f1e4d7ed6724a91e274e9a6f1bbfb99ff45229df9c95a2b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8379328ed0646083f1e4d7ed6724a91e274e9a6f1bbfb99ff45229df9c95a2b1->enter($__internal_8379328ed0646083f1e4d7ed6724a91e274e9a6f1bbfb99ff45229df9c95a2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3ed888b4ca1d31443712f1e977a3f7e07dbb669f22e51172773b3db1ccd00b7->leave($__internal_f3ed888b4ca1d31443712f1e977a3f7e07dbb669f22e51172773b3db1ccd00b7_prof);

        
        $__internal_8379328ed0646083f1e4d7ed6724a91e274e9a6f1bbfb99ff45229df9c95a2b1->leave($__internal_8379328ed0646083f1e4d7ed6724a91e274e9a6f1bbfb99ff45229df9c95a2b1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_20057a6d6ceb7ba21ca0d3af326a467b66f4142a350634726376af777c6b02f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20057a6d6ceb7ba21ca0d3af326a467b66f4142a350634726376af777c6b02f9->enter($__internal_20057a6d6ceb7ba21ca0d3af326a467b66f4142a350634726376af777c6b02f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7dae3acbc588f57b89766b1802df8b9ed0343be29d7e45a847027f42a96aa9f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dae3acbc588f57b89766b1802df8b9ed0343be29d7e45a847027f42a96aa9f0->enter($__internal_7dae3acbc588f57b89766b1802df8b9ed0343be29d7e45a847027f42a96aa9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_7dae3acbc588f57b89766b1802df8b9ed0343be29d7e45a847027f42a96aa9f0->leave($__internal_7dae3acbc588f57b89766b1802df8b9ed0343be29d7e45a847027f42a96aa9f0_prof);

        
        $__internal_20057a6d6ceb7ba21ca0d3af326a467b66f4142a350634726376af777c6b02f9->leave($__internal_20057a6d6ceb7ba21ca0d3af326a467b66f4142a350634726376af777c6b02f9_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_004cedeeb0614f7afb35ab18114376f9180fa8f2962075cbc37f2cb1198f596b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_004cedeeb0614f7afb35ab18114376f9180fa8f2962075cbc37f2cb1198f596b->enter($__internal_004cedeeb0614f7afb35ab18114376f9180fa8f2962075cbc37f2cb1198f596b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_352f02935d6cfc2b10c2765ed74f03305e7b1d45e6750d1b0967e6e93e4b5aa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_352f02935d6cfc2b10c2765ed74f03305e7b1d45e6750d1b0967e6e93e4b5aa0->enter($__internal_352f02935d6cfc2b10c2765ed74f03305e7b1d45e6750d1b0967e6e93e4b5aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_352f02935d6cfc2b10c2765ed74f03305e7b1d45e6750d1b0967e6e93e4b5aa0->leave($__internal_352f02935d6cfc2b10c2765ed74f03305e7b1d45e6750d1b0967e6e93e4b5aa0_prof);

        
        $__internal_004cedeeb0614f7afb35ab18114376f9180fa8f2962075cbc37f2cb1198f596b->leave($__internal_004cedeeb0614f7afb35ab18114376f9180fa8f2962075cbc37f2cb1198f596b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
