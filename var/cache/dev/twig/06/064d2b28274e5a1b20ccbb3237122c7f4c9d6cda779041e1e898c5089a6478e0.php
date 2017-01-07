<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_6e87a5c0054f336c39781186269c0aa8f05b6d4999f62d8c7d6c9a2c4d1fd6fd extends Twig_Template
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
        $__internal_a33254256793981e7edc662fc3b247d4b53ad219c399be64c2db2f982d2c8ecf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a33254256793981e7edc662fc3b247d4b53ad219c399be64c2db2f982d2c8ecf->enter($__internal_a33254256793981e7edc662fc3b247d4b53ad219c399be64c2db2f982d2c8ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_6ad46d2486ecb8af18141ba4a73addf22cf7fa6e1d8538a1abedc9b2fe3d8c43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ad46d2486ecb8af18141ba4a73addf22cf7fa6e1d8538a1abedc9b2fe3d8c43->enter($__internal_6ad46d2486ecb8af18141ba4a73addf22cf7fa6e1d8538a1abedc9b2fe3d8c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a33254256793981e7edc662fc3b247d4b53ad219c399be64c2db2f982d2c8ecf->leave($__internal_a33254256793981e7edc662fc3b247d4b53ad219c399be64c2db2f982d2c8ecf_prof);

        
        $__internal_6ad46d2486ecb8af18141ba4a73addf22cf7fa6e1d8538a1abedc9b2fe3d8c43->leave($__internal_6ad46d2486ecb8af18141ba4a73addf22cf7fa6e1d8538a1abedc9b2fe3d8c43_prof);

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
", "@Twig/Exception/exception.atom.twig", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
