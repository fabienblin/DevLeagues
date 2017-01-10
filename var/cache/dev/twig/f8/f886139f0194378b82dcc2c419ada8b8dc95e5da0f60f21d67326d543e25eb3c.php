<?php

/* @DevLeagues/League/show_reduced.html.twig */
class __TwigTemplate_6d25f474033ae292cbcc5f77371c9a8f7b8b9f5a34eb8c834d378fc0cae6f5d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle:League:base.html.twig", "@DevLeagues/League/show_reduced.html.twig", 1);
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
        $__internal_a1e23dbcd2a0b9fc9ade650a942340d97208a603316c3d802ef0deca2e3b1418 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1e23dbcd2a0b9fc9ade650a942340d97208a603316c3d802ef0deca2e3b1418->enter($__internal_a1e23dbcd2a0b9fc9ade650a942340d97208a603316c3d802ef0deca2e3b1418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/League/show_reduced.html.twig"));

        $__internal_506b6b116d76cca3d2534d4f9124ef9cd36ce54c235177e299c60c7cada22f60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_506b6b116d76cca3d2534d4f9124ef9cd36ce54c235177e299c60c7cada22f60->enter($__internal_506b6b116d76cca3d2534d4f9124ef9cd36ce54c235177e299c60c7cada22f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/League/show_reduced.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1e23dbcd2a0b9fc9ade650a942340d97208a603316c3d802ef0deca2e3b1418->leave($__internal_a1e23dbcd2a0b9fc9ade650a942340d97208a603316c3d802ef0deca2e3b1418_prof);

        
        $__internal_506b6b116d76cca3d2534d4f9124ef9cd36ce54c235177e299c60c7cada22f60->leave($__internal_506b6b116d76cca3d2534d4f9124ef9cd36ce54c235177e299c60c7cada22f60_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0806c2873b047ec222724ea768a5f6fe41d9b1ce54ecd3a06d328781e015d8a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0806c2873b047ec222724ea768a5f6fe41d9b1ce54ecd3a06d328781e015d8a1->enter($__internal_0806c2873b047ec222724ea768a5f6fe41d9b1ce54ecd3a06d328781e015d8a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c419fb06bedc14992aaabb139f35d9faac505d0c38b5c3752a8f0bea60c14db6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c419fb06bedc14992aaabb139f35d9faac505d0c38b5c3752a8f0bea60c14db6->enter($__internal_c419fb06bedc14992aaabb139f35d9faac505d0c38b5c3752a8f0bea60c14db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Welcome to the League:showReduced page</h1>
";
        
        $__internal_c419fb06bedc14992aaabb139f35d9faac505d0c38b5c3752a8f0bea60c14db6->leave($__internal_c419fb06bedc14992aaabb139f35d9faac505d0c38b5c3752a8f0bea60c14db6_prof);

        
        $__internal_0806c2873b047ec222724ea768a5f6fe41d9b1ce54ecd3a06d328781e015d8a1->leave($__internal_0806c2873b047ec222724ea768a5f6fe41d9b1ce54ecd3a06d328781e015d8a1_prof);

    }

    public function getTemplateName()
    {
        return "@DevLeagues/League/show_reduced.html.twig";
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
<h1>Welcome to the League:showReduced page</h1>
{% endblock %}
", "@DevLeagues/League/show_reduced.html.twig", "/home/webmaster/www/public_html/DevLeagues/src/DevLeaguesBundle/Resources/views/League/show_reduced.html.twig");
    }
}
