<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_7099bdedfff338ad0d68bccfdd56c7400c63480a5964746e08059b9e12e6ebfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83bf94e0a26de9c5ffb13b7a32bdb62837590546efe972b32c17e3cf883685e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83bf94e0a26de9c5ffb13b7a32bdb62837590546efe972b32c17e3cf883685e6->enter($__internal_83bf94e0a26de9c5ffb13b7a32bdb62837590546efe972b32c17e3cf883685e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_405c91b0bebc6d3dedf41493380838017755e7cc6592b7e56841194b86447969 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_405c91b0bebc6d3dedf41493380838017755e7cc6592b7e56841194b86447969->enter($__internal_405c91b0bebc6d3dedf41493380838017755e7cc6592b7e56841194b86447969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_83bf94e0a26de9c5ffb13b7a32bdb62837590546efe972b32c17e3cf883685e6->leave($__internal_83bf94e0a26de9c5ffb13b7a32bdb62837590546efe972b32c17e3cf883685e6_prof);

        
        $__internal_405c91b0bebc6d3dedf41493380838017755e7cc6592b7e56841194b86447969->leave($__internal_405c91b0bebc6d3dedf41493380838017755e7cc6592b7e56841194b86447969_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
