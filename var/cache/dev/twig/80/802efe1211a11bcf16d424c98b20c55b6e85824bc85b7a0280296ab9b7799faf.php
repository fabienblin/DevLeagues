<?php

/* @DevLeagues/Challenge/remove.html.twig */
class __TwigTemplate_e87c453b701419f14b2958949646df1f151d16b6ae28c68858a02f6e879e12ed extends Twig_Template
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
        $__internal_e1da67a8ba19e1db20ac6df8541e7d99a6b3caf9fc5c35fcdde26da52a1916be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1da67a8ba19e1db20ac6df8541e7d99a6b3caf9fc5c35fcdde26da52a1916be->enter($__internal_e1da67a8ba19e1db20ac6df8541e7d99a6b3caf9fc5c35fcdde26da52a1916be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Challenge/remove.html.twig"));

        $__internal_19b71be937ef196923145d65c8b97205e38ad8fbaa3fca4a3aca5a3648013f57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19b71be937ef196923145d65c8b97205e38ad8fbaa3fca4a3aca5a3648013f57->enter($__internal_19b71be937ef196923145d65c8b97205e38ad8fbaa3fca4a3aca5a3648013f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Challenge/remove.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1da67a8ba19e1db20ac6df8541e7d99a6b3caf9fc5c35fcdde26da52a1916be->leave($__internal_e1da67a8ba19e1db20ac6df8541e7d99a6b3caf9fc5c35fcdde26da52a1916be_prof);

        
        $__internal_19b71be937ef196923145d65c8b97205e38ad8fbaa3fca4a3aca5a3648013f57->leave($__internal_19b71be937ef196923145d65c8b97205e38ad8fbaa3fca4a3aca5a3648013f57_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_50191809693566be2926d47ba92bae5cea4161845f5b7d2e27673e82ceb32e92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50191809693566be2926d47ba92bae5cea4161845f5b7d2e27673e82ceb32e92->enter($__internal_50191809693566be2926d47ba92bae5cea4161845f5b7d2e27673e82ceb32e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ad6d7c3ccd6de47dcdeb449c7c48d08b91836955ff28f92d3c53a3cfedcc14a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad6d7c3ccd6de47dcdeb449c7c48d08b91836955ff28f92d3c53a3cfedcc14a5->enter($__internal_ad6d7c3ccd6de47dcdeb449c7c48d08b91836955ff28f92d3c53a3cfedcc14a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h1>Welcome to the Challenge:remove page</h1>
";
        
        $__internal_ad6d7c3ccd6de47dcdeb449c7c48d08b91836955ff28f92d3c53a3cfedcc14a5->leave($__internal_ad6d7c3ccd6de47dcdeb449c7c48d08b91836955ff28f92d3c53a3cfedcc14a5_prof);

        
        $__internal_50191809693566be2926d47ba92bae5cea4161845f5b7d2e27673e82ceb32e92->leave($__internal_50191809693566be2926d47ba92bae5cea4161845f5b7d2e27673e82ceb32e92_prof);

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
", "@DevLeagues/Challenge/remove.html.twig", "/home/webmaster/www/public_html/DevLeagues/src/DevLeaguesBundle/Resources/views/Challenge/remove.html.twig");
    }
}
