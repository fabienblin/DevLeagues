<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_1b94c09b8684eb13367ff9f15d55a4aadb19e55224dff8d1b48d623a928bbd6e extends Twig_Template
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
        $__internal_90a6a789bc4bdbbe2380c0a03a6869a81ce08a00410837b96d7062967c4f90a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90a6a789bc4bdbbe2380c0a03a6869a81ce08a00410837b96d7062967c4f90a7->enter($__internal_90a6a789bc4bdbbe2380c0a03a6869a81ce08a00410837b96d7062967c4f90a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_c24096f3a7b3076210f09952a0f3c1622b1dabd510b6b5545c67ec101e695632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c24096f3a7b3076210f09952a0f3c1622b1dabd510b6b5545c67ec101e695632->enter($__internal_c24096f3a7b3076210f09952a0f3c1622b1dabd510b6b5545c67ec101e695632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_90a6a789bc4bdbbe2380c0a03a6869a81ce08a00410837b96d7062967c4f90a7->leave($__internal_90a6a789bc4bdbbe2380c0a03a6869a81ce08a00410837b96d7062967c4f90a7_prof);

        
        $__internal_c24096f3a7b3076210f09952a0f3c1622b1dabd510b6b5545c67ec101e695632->leave($__internal_c24096f3a7b3076210f09952a0f3c1622b1dabd510b6b5545c67ec101e695632_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
