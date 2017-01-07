<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_e01d721fc71a7d712011b4f9d14251288f9b27ab9dbe563c6a4113712ec08627 extends Twig_Template
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
        $__internal_1504ba48015bb71405a9ef9e2934ff6db6d2d8c7e2f41d8f4be15f08e0247607 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1504ba48015bb71405a9ef9e2934ff6db6d2d8c7e2f41d8f4be15f08e0247607->enter($__internal_1504ba48015bb71405a9ef9e2934ff6db6d2d8c7e2f41d8f4be15f08e0247607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_aa28ecb49dd34348dbc1dbca0ae159dc836f4bf09d038f1acc39e504e184740e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa28ecb49dd34348dbc1dbca0ae159dc836f4bf09d038f1acc39e504e184740e->enter($__internal_aa28ecb49dd34348dbc1dbca0ae159dc836f4bf09d038f1acc39e504e184740e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_1504ba48015bb71405a9ef9e2934ff6db6d2d8c7e2f41d8f4be15f08e0247607->leave($__internal_1504ba48015bb71405a9ef9e2934ff6db6d2d8c7e2f41d8f4be15f08e0247607_prof);

        
        $__internal_aa28ecb49dd34348dbc1dbca0ae159dc836f4bf09d038f1acc39e504e184740e->leave($__internal_aa28ecb49dd34348dbc1dbca0ae159dc836f4bf09d038f1acc39e504e184740e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.css.twig", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
