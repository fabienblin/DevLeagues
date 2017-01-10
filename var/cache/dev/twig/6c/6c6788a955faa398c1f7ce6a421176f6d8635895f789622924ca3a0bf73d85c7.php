<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_a0238d6623f0622c55fa80a73d2dbb3fa3a8ac61ccb9d519101da63ef7c56d54 extends Twig_Template
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
        $__internal_7d9bf219efaeb9dd91dcf4bfe26f7b603ffdac22b7d3a28bb1f74aca0d530b52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d9bf219efaeb9dd91dcf4bfe26f7b603ffdac22b7d3a28bb1f74aca0d530b52->enter($__internal_7d9bf219efaeb9dd91dcf4bfe26f7b603ffdac22b7d3a28bb1f74aca0d530b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_df1a4a2b6a7c94b08911f1863e835e3b78a62e4defc77ab0feb7462e9205ed54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df1a4a2b6a7c94b08911f1863e835e3b78a62e4defc77ab0feb7462e9205ed54->enter($__internal_df1a4a2b6a7c94b08911f1863e835e3b78a62e4defc77ab0feb7462e9205ed54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7d9bf219efaeb9dd91dcf4bfe26f7b603ffdac22b7d3a28bb1f74aca0d530b52->leave($__internal_7d9bf219efaeb9dd91dcf4bfe26f7b603ffdac22b7d3a28bb1f74aca0d530b52_prof);

        
        $__internal_df1a4a2b6a7c94b08911f1863e835e3b78a62e4defc77ab0feb7462e9205ed54->leave($__internal_df1a4a2b6a7c94b08911f1863e835e3b78a62e4defc77ab0feb7462e9205ed54_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
