<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_900b95ba5f172f54e95a9c054dde716a8412584d10b1a26a745c6b9847c6f888 extends Twig_Template
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
        $__internal_751a58d4d87d051135a504a84ecb3ab91f29457263119d3a5122c7d567e34b04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_751a58d4d87d051135a504a84ecb3ab91f29457263119d3a5122c7d567e34b04->enter($__internal_751a58d4d87d051135a504a84ecb3ab91f29457263119d3a5122c7d567e34b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_74056da4f62d7d5515097726046fe0e75b225cc16e86d83a0916e71f38b42e51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74056da4f62d7d5515097726046fe0e75b225cc16e86d83a0916e71f38b42e51->enter($__internal_74056da4f62d7d5515097726046fe0e75b225cc16e86d83a0916e71f38b42e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_751a58d4d87d051135a504a84ecb3ab91f29457263119d3a5122c7d567e34b04->leave($__internal_751a58d4d87d051135a504a84ecb3ab91f29457263119d3a5122c7d567e34b04_prof);

        
        $__internal_74056da4f62d7d5515097726046fe0e75b225cc16e86d83a0916e71f38b42e51->leave($__internal_74056da4f62d7d5515097726046fe0e75b225cc16e86d83a0916e71f38b42e51_prof);

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
", "@Twig/Exception/exception.rdf.twig", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
