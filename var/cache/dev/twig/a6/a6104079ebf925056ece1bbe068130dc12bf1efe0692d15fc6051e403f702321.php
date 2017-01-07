<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_f7e50d3fea2c8cd96df5af2fed44d4ab5acc9c53b8399fc03ca40320248c59b2 extends Twig_Template
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
        $__internal_24809163d84b5b293376085ea62043ef9431223d9b801d73808a79f933876e65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24809163d84b5b293376085ea62043ef9431223d9b801d73808a79f933876e65->enter($__internal_24809163d84b5b293376085ea62043ef9431223d9b801d73808a79f933876e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_5d528ac390f50495a7147d657784665d9f44af0d8bc501249870fa76732c1a66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d528ac390f50495a7147d657784665d9f44af0d8bc501249870fa76732c1a66->enter($__internal_5d528ac390f50495a7147d657784665d9f44af0d8bc501249870fa76732c1a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_24809163d84b5b293376085ea62043ef9431223d9b801d73808a79f933876e65->leave($__internal_24809163d84b5b293376085ea62043ef9431223d9b801d73808a79f933876e65_prof);

        
        $__internal_5d528ac390f50495a7147d657784665d9f44af0d8bc501249870fa76732c1a66->leave($__internal_5d528ac390f50495a7147d657784665d9f44af0d8bc501249870fa76732c1a66_prof);

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
", "@Twig/Exception/error.rdf.twig", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
