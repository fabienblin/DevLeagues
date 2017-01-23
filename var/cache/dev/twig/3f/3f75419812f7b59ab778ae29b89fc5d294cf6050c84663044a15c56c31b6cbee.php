<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_ba08fa1d2bb7cef43e7dde54329531d944975a75f97af770d77989b60b3b0bdc extends Twig_Template
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
        $__internal_527db92b73a8651467d5fe5762572aae5802aedd11542ff13b05cdb1cd9ffe91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_527db92b73a8651467d5fe5762572aae5802aedd11542ff13b05cdb1cd9ffe91->enter($__internal_527db92b73a8651467d5fe5762572aae5802aedd11542ff13b05cdb1cd9ffe91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_43741c2fc26704fc48ecb8210ba5f78e3c98072501893d6c40942729c3929d93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43741c2fc26704fc48ecb8210ba5f78e3c98072501893d6c40942729c3929d93->enter($__internal_43741c2fc26704fc48ecb8210ba5f78e3c98072501893d6c40942729c3929d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_527db92b73a8651467d5fe5762572aae5802aedd11542ff13b05cdb1cd9ffe91->leave($__internal_527db92b73a8651467d5fe5762572aae5802aedd11542ff13b05cdb1cd9ffe91_prof);

        
        $__internal_43741c2fc26704fc48ecb8210ba5f78e3c98072501893d6c40942729c3929d93->leave($__internal_43741c2fc26704fc48ecb8210ba5f78e3c98072501893d6c40942729c3929d93_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
