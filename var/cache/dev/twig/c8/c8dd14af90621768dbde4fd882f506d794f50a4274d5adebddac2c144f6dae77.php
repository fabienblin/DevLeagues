<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_04263c599287cc2c6d3466295ecf9d17d23cd3626eb690651813f883215bb2aa extends Twig_Template
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
        $__internal_110f030f584fdfd50ebfc4c80fc686d9c9600d4369e7c59f50eb4e93d3dfbc26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_110f030f584fdfd50ebfc4c80fc686d9c9600d4369e7c59f50eb4e93d3dfbc26->enter($__internal_110f030f584fdfd50ebfc4c80fc686d9c9600d4369e7c59f50eb4e93d3dfbc26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_c9e615e37accd26526de76e5582c6eb7953dc66791f53b2cedf091033df44e3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9e615e37accd26526de76e5582c6eb7953dc66791f53b2cedf091033df44e3e->enter($__internal_c9e615e37accd26526de76e5582c6eb7953dc66791f53b2cedf091033df44e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_110f030f584fdfd50ebfc4c80fc686d9c9600d4369e7c59f50eb4e93d3dfbc26->leave($__internal_110f030f584fdfd50ebfc4c80fc686d9c9600d4369e7c59f50eb4e93d3dfbc26_prof);

        
        $__internal_c9e615e37accd26526de76e5582c6eb7953dc66791f53b2cedf091033df44e3e->leave($__internal_c9e615e37accd26526de76e5582c6eb7953dc66791f53b2cedf091033df44e3e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2faf2617096452d968a1093a17235fb5aa83f326de96c7b267a4e543592d2331 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2faf2617096452d968a1093a17235fb5aa83f326de96c7b267a4e543592d2331->enter($__internal_2faf2617096452d968a1093a17235fb5aa83f326de96c7b267a4e543592d2331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_79666b11f0818c10148e1870f340e9db3bc3b7771211a239ba63c41b3657f78a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79666b11f0818c10148e1870f340e9db3bc3b7771211a239ba63c41b3657f78a->enter($__internal_79666b11f0818c10148e1870f340e9db3bc3b7771211a239ba63c41b3657f78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_79666b11f0818c10148e1870f340e9db3bc3b7771211a239ba63c41b3657f78a->leave($__internal_79666b11f0818c10148e1870f340e9db3bc3b7771211a239ba63c41b3657f78a_prof);

        
        $__internal_2faf2617096452d968a1093a17235fb5aa83f326de96c7b267a4e543592d2331->leave($__internal_2faf2617096452d968a1093a17235fb5aa83f326de96c7b267a4e543592d2331_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_29321d9d3610bcaa940bd9069245b97b703d51331e9bfa8f78a4c9a687179009 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29321d9d3610bcaa940bd9069245b97b703d51331e9bfa8f78a4c9a687179009->enter($__internal_29321d9d3610bcaa940bd9069245b97b703d51331e9bfa8f78a4c9a687179009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fe50c2aedc51c2de058819e9ec65db815ce36694a5a7ae68604a2a6cca611b40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe50c2aedc51c2de058819e9ec65db815ce36694a5a7ae68604a2a6cca611b40->enter($__internal_fe50c2aedc51c2de058819e9ec65db815ce36694a5a7ae68604a2a6cca611b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_fe50c2aedc51c2de058819e9ec65db815ce36694a5a7ae68604a2a6cca611b40->leave($__internal_fe50c2aedc51c2de058819e9ec65db815ce36694a5a7ae68604a2a6cca611b40_prof);

        
        $__internal_29321d9d3610bcaa940bd9069245b97b703d51331e9bfa8f78a4c9a687179009->leave($__internal_29321d9d3610bcaa940bd9069245b97b703d51331e9bfa8f78a4c9a687179009_prof);

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
", "@WebProfiler/Profiler/open.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
