<?php

/* @DevLeagues/Challenge/show_reduced.html.twig */
class __TwigTemplate_cc93a3e080e4f75b07300b8580280031df6f467cfe5dae42b0f9702c3b91a7b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle:Challenge:index.html.twig", "@DevLeagues/Challenge/show_reduced.html.twig", 1);
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
        $__internal_71e8cd45f6c0ce8e85e0835e818690cfa97ffeeef1edbc3645b207c30b0e2009 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71e8cd45f6c0ce8e85e0835e818690cfa97ffeeef1edbc3645b207c30b0e2009->enter($__internal_71e8cd45f6c0ce8e85e0835e818690cfa97ffeeef1edbc3645b207c30b0e2009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Challenge/show_reduced.html.twig"));

        $__internal_ed2a1d03622065bac4cfb7029dab690bb5465c5f89a443641c41d891180ce63f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed2a1d03622065bac4cfb7029dab690bb5465c5f89a443641c41d891180ce63f->enter($__internal_ed2a1d03622065bac4cfb7029dab690bb5465c5f89a443641c41d891180ce63f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Challenge/show_reduced.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71e8cd45f6c0ce8e85e0835e818690cfa97ffeeef1edbc3645b207c30b0e2009->leave($__internal_71e8cd45f6c0ce8e85e0835e818690cfa97ffeeef1edbc3645b207c30b0e2009_prof);

        
        $__internal_ed2a1d03622065bac4cfb7029dab690bb5465c5f89a443641c41d891180ce63f->leave($__internal_ed2a1d03622065bac4cfb7029dab690bb5465c5f89a443641c41d891180ce63f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_10f270566c8de813f61a4d65cd03e51ee1e82f9e1937df2866511144b414baa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10f270566c8de813f61a4d65cd03e51ee1e82f9e1937df2866511144b414baa1->enter($__internal_10f270566c8de813f61a4d65cd03e51ee1e82f9e1937df2866511144b414baa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_90965a688e2d90bcefbb7051b9da640d20ed7bb94b9075f79b439ad7b0e58c9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90965a688e2d90bcefbb7051b9da640d20ed7bb94b9075f79b439ad7b0e58c9b->enter($__internal_90965a688e2d90bcefbb7051b9da640d20ed7bb94b9075f79b439ad7b0e58c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Welcome to the Challenge:showReduced page</h1>
";
        
        $__internal_90965a688e2d90bcefbb7051b9da640d20ed7bb94b9075f79b439ad7b0e58c9b->leave($__internal_90965a688e2d90bcefbb7051b9da640d20ed7bb94b9075f79b439ad7b0e58c9b_prof);

        
        $__internal_10f270566c8de813f61a4d65cd03e51ee1e82f9e1937df2866511144b414baa1->leave($__internal_10f270566c8de813f61a4d65cd03e51ee1e82f9e1937df2866511144b414baa1_prof);

    }

    public function getTemplateName()
    {
        return "@DevLeagues/Challenge/show_reduced.html.twig";
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
        return new Twig_Source("{% extends \"DevLeaguesBundle:Challenge:index.html.twig\" %}

{% block body %}
<h1>Welcome to the Challenge:showReduced page</h1>
{% endblock %}
", "@DevLeagues/Challenge/show_reduced.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/Challenge/show_reduced.html.twig");
    }
}
