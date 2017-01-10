<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_ab6a0a29de32f67e075e619866eafad4c912b62d6b212734890f77d402b33d85 extends Twig_Template
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
        $__internal_f1c240a85efcca998016e15d3b85dfee8ff028564d11e823e2b511624edf96fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1c240a85efcca998016e15d3b85dfee8ff028564d11e823e2b511624edf96fc->enter($__internal_f1c240a85efcca998016e15d3b85dfee8ff028564d11e823e2b511624edf96fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_2869c14d19475b933df6a79c085f1682c29e5ba2e823c98a10bc1580742ce3f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2869c14d19475b933df6a79c085f1682c29e5ba2e823c98a10bc1580742ce3f9->enter($__internal_2869c14d19475b933df6a79c085f1682c29e5ba2e823c98a10bc1580742ce3f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_f1c240a85efcca998016e15d3b85dfee8ff028564d11e823e2b511624edf96fc->leave($__internal_f1c240a85efcca998016e15d3b85dfee8ff028564d11e823e2b511624edf96fc_prof);

        
        $__internal_2869c14d19475b933df6a79c085f1682c29e5ba2e823c98a10bc1580742ce3f9->leave($__internal_2869c14d19475b933df6a79c085f1682c29e5ba2e823c98a10bc1580742ce3f9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.atom.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
