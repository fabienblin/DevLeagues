<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_d3afe1239655082741c535a8f941088b6f5a8b46e8bc21426c29a5e5df344c73 extends Twig_Template
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
        $__internal_528b056f1c6a5d05548d55e48c3a4a02078382b05ba9fa085d576c071fa1f72a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_528b056f1c6a5d05548d55e48c3a4a02078382b05ba9fa085d576c071fa1f72a->enter($__internal_528b056f1c6a5d05548d55e48c3a4a02078382b05ba9fa085d576c071fa1f72a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_b0c80db22d0a13be54be5f606c0e3f005c266c018841959f7396bc68f0d547d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0c80db22d0a13be54be5f606c0e3f005c266c018841959f7396bc68f0d547d6->enter($__internal_b0c80db22d0a13be54be5f606c0e3f005c266c018841959f7396bc68f0d547d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_528b056f1c6a5d05548d55e48c3a4a02078382b05ba9fa085d576c071fa1f72a->leave($__internal_528b056f1c6a5d05548d55e48c3a4a02078382b05ba9fa085d576c071fa1f72a_prof);

        
        $__internal_b0c80db22d0a13be54be5f606c0e3f005c266c018841959f7396bc68f0d547d6->leave($__internal_b0c80db22d0a13be54be5f606c0e3f005c266c018841959f7396bc68f0d547d6_prof);

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
