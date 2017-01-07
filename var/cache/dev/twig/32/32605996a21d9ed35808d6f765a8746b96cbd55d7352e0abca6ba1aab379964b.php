<?php

/* @DevLeagues/League/index.html.twig */
class __TwigTemplate_a1da68a32b3b9256f8b12bbc10725846d0587d71dd813925545983c26a9697e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "@DevLeagues/League/index.html.twig", 1);
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
        $__internal_fa4b06fca1df586511753b0c704d05a69c12d98e227702c72ea9ae6a537d0634 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa4b06fca1df586511753b0c704d05a69c12d98e227702c72ea9ae6a537d0634->enter($__internal_fa4b06fca1df586511753b0c704d05a69c12d98e227702c72ea9ae6a537d0634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/League/index.html.twig"));

        $__internal_f469cca34858df0653ae392d9af8c67cc753bd607e99c83a70f19bbd7c760ee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f469cca34858df0653ae392d9af8c67cc753bd607e99c83a70f19bbd7c760ee5->enter($__internal_f469cca34858df0653ae392d9af8c67cc753bd607e99c83a70f19bbd7c760ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/League/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa4b06fca1df586511753b0c704d05a69c12d98e227702c72ea9ae6a537d0634->leave($__internal_fa4b06fca1df586511753b0c704d05a69c12d98e227702c72ea9ae6a537d0634_prof);

        
        $__internal_f469cca34858df0653ae392d9af8c67cc753bd607e99c83a70f19bbd7c760ee5->leave($__internal_f469cca34858df0653ae392d9af8c67cc753bd607e99c83a70f19bbd7c760ee5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd1dfcb91658d8b33314add42ffa083322c94febf1a9a2cb3e33113e995697e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd1dfcb91658d8b33314add42ffa083322c94febf1a9a2cb3e33113e995697e7->enter($__internal_dd1dfcb91658d8b33314add42ffa083322c94febf1a9a2cb3e33113e995697e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4a113fdc5b6f841991e2dd77f6b5e5057ed57845c80cf482eefd2db722d9c817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a113fdc5b6f841991e2dd77f6b5e5057ed57845c80cf482eefd2db722d9c817->enter($__internal_4a113fdc5b6f841991e2dd77f6b5e5057ed57845c80cf482eefd2db722d9c817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Welcome to the League:index page</h1>
";
        
        $__internal_4a113fdc5b6f841991e2dd77f6b5e5057ed57845c80cf482eefd2db722d9c817->leave($__internal_4a113fdc5b6f841991e2dd77f6b5e5057ed57845c80cf482eefd2db722d9c817_prof);

        
        $__internal_dd1dfcb91658d8b33314add42ffa083322c94febf1a9a2cb3e33113e995697e7->leave($__internal_dd1dfcb91658d8b33314add42ffa083322c94febf1a9a2cb3e33113e995697e7_prof);

    }

    public function getTemplateName()
    {
        return "@DevLeagues/League/index.html.twig";
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
<h1>Welcome to the League:index page</h1>
{% endblock %}
", "@DevLeagues/League/index.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/League/index.html.twig");
    }
}
