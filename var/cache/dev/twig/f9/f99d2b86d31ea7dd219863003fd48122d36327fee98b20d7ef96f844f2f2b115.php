<?php

/* @DevLeagues/Challenge/new.html.twig */
class __TwigTemplate_afbb24f79d8a33abc592ee68f6b1a1fe3d656c53e2e682828d7000aac62c63cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle:Challenge:index.html.twig", "@DevLeagues/Challenge/new.html.twig", 1);
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
        $__internal_9341e0543cc3451c50efb0a69d9c05b3a70475a7640cb4fe944cffbbfe7da73b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9341e0543cc3451c50efb0a69d9c05b3a70475a7640cb4fe944cffbbfe7da73b->enter($__internal_9341e0543cc3451c50efb0a69d9c05b3a70475a7640cb4fe944cffbbfe7da73b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Challenge/new.html.twig"));

        $__internal_9a9bc976807b5855b8661ed89dec5a55573ef606c2e5a20e043a5d8510f32bb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a9bc976807b5855b8661ed89dec5a55573ef606c2e5a20e043a5d8510f32bb7->enter($__internal_9a9bc976807b5855b8661ed89dec5a55573ef606c2e5a20e043a5d8510f32bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Challenge/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9341e0543cc3451c50efb0a69d9c05b3a70475a7640cb4fe944cffbbfe7da73b->leave($__internal_9341e0543cc3451c50efb0a69d9c05b3a70475a7640cb4fe944cffbbfe7da73b_prof);

        
        $__internal_9a9bc976807b5855b8661ed89dec5a55573ef606c2e5a20e043a5d8510f32bb7->leave($__internal_9a9bc976807b5855b8661ed89dec5a55573ef606c2e5a20e043a5d8510f32bb7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_30af6faec555eb8b3f4547ffaa3c30fd75189302715e8ed14db87fc20b63585d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30af6faec555eb8b3f4547ffaa3c30fd75189302715e8ed14db87fc20b63585d->enter($__internal_30af6faec555eb8b3f4547ffaa3c30fd75189302715e8ed14db87fc20b63585d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_00b5dedcf74f7ae251dab30bbd3039c67091f1cd606647da69d79f5f27ba3e97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00b5dedcf74f7ae251dab30bbd3039c67091f1cd606647da69d79f5f27ba3e97->enter($__internal_00b5dedcf74f7ae251dab30bbd3039c67091f1cd606647da69d79f5f27ba3e97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Welcome to the Challenge:new page</h1>
";
        
        $__internal_00b5dedcf74f7ae251dab30bbd3039c67091f1cd606647da69d79f5f27ba3e97->leave($__internal_00b5dedcf74f7ae251dab30bbd3039c67091f1cd606647da69d79f5f27ba3e97_prof);

        
        $__internal_30af6faec555eb8b3f4547ffaa3c30fd75189302715e8ed14db87fc20b63585d->leave($__internal_30af6faec555eb8b3f4547ffaa3c30fd75189302715e8ed14db87fc20b63585d_prof);

    }

    public function getTemplateName()
    {
        return "@DevLeagues/Challenge/new.html.twig";
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
<h1>Welcome to the Challenge:new page</h1>
{% endblock %}
", "@DevLeagues/Challenge/new.html.twig", "/home/webmaster/www/public_html/DevLeagues/src/DevLeaguesBundle/Resources/views/Challenge/new.html.twig");
    }
}
