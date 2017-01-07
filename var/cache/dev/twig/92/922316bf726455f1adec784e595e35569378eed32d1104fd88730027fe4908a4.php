<?php

/* @DevLeagues/Challenge/show.html.twig */
class __TwigTemplate_b6640fb6ff2638d5ed304ce5e63133d42093867d2e326d2367389590bc1f1d33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle:Challenge:index.html.twig", "@DevLeagues/Challenge/show.html.twig", 1);
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
        $__internal_c4664f891cd28536759d7c17a8ef1a1183600fa275417f8d9557f6a427a4805a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4664f891cd28536759d7c17a8ef1a1183600fa275417f8d9557f6a427a4805a->enter($__internal_c4664f891cd28536759d7c17a8ef1a1183600fa275417f8d9557f6a427a4805a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Challenge/show.html.twig"));

        $__internal_47e2393e4d3bd92d3681b81eab84ede172f0efd409574d25bc4d2cbaaddd8c5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47e2393e4d3bd92d3681b81eab84ede172f0efd409574d25bc4d2cbaaddd8c5a->enter($__internal_47e2393e4d3bd92d3681b81eab84ede172f0efd409574d25bc4d2cbaaddd8c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Challenge/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4664f891cd28536759d7c17a8ef1a1183600fa275417f8d9557f6a427a4805a->leave($__internal_c4664f891cd28536759d7c17a8ef1a1183600fa275417f8d9557f6a427a4805a_prof);

        
        $__internal_47e2393e4d3bd92d3681b81eab84ede172f0efd409574d25bc4d2cbaaddd8c5a->leave($__internal_47e2393e4d3bd92d3681b81eab84ede172f0efd409574d25bc4d2cbaaddd8c5a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_437585b55e5b3b87ca461c1ef6cebb4e33101eac6474e46b7c46237f2d13dd61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_437585b55e5b3b87ca461c1ef6cebb4e33101eac6474e46b7c46237f2d13dd61->enter($__internal_437585b55e5b3b87ca461c1ef6cebb4e33101eac6474e46b7c46237f2d13dd61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7cff268b404b16737e4c95a825ef7de8edfe90b0590f59eb2b0f0ad6067caf16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cff268b404b16737e4c95a825ef7de8edfe90b0590f59eb2b0f0ad6067caf16->enter($__internal_7cff268b404b16737e4c95a825ef7de8edfe90b0590f59eb2b0f0ad6067caf16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Welcome to the Challenge:show page</h1>
";
        
        $__internal_7cff268b404b16737e4c95a825ef7de8edfe90b0590f59eb2b0f0ad6067caf16->leave($__internal_7cff268b404b16737e4c95a825ef7de8edfe90b0590f59eb2b0f0ad6067caf16_prof);

        
        $__internal_437585b55e5b3b87ca461c1ef6cebb4e33101eac6474e46b7c46237f2d13dd61->leave($__internal_437585b55e5b3b87ca461c1ef6cebb4e33101eac6474e46b7c46237f2d13dd61_prof);

    }

    public function getTemplateName()
    {
        return "@DevLeagues/Challenge/show.html.twig";
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
<h1>Welcome to the Challenge:show page</h1>
{% endblock %}
", "@DevLeagues/Challenge/show.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/Challenge/show.html.twig");
    }
}
