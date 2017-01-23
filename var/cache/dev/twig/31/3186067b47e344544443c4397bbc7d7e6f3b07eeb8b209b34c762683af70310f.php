<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_f87d5754bff3ce12d911a6512a5b794018d07a3f658f025dc97290a9b744011b extends Twig_Template
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
        $__internal_07e7f008638045b6d4755304870ccd8203a97aabd058dbc4e74fef9f1cc32dae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07e7f008638045b6d4755304870ccd8203a97aabd058dbc4e74fef9f1cc32dae->enter($__internal_07e7f008638045b6d4755304870ccd8203a97aabd058dbc4e74fef9f1cc32dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_a426b8a8332ffffefafa89bc5343314dcc6f8c71987513214c2cb57edb85f180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a426b8a8332ffffefafa89bc5343314dcc6f8c71987513214c2cb57edb85f180->enter($__internal_a426b8a8332ffffefafa89bc5343314dcc6f8c71987513214c2cb57edb85f180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_07e7f008638045b6d4755304870ccd8203a97aabd058dbc4e74fef9f1cc32dae->leave($__internal_07e7f008638045b6d4755304870ccd8203a97aabd058dbc4e74fef9f1cc32dae_prof);

        
        $__internal_a426b8a8332ffffefafa89bc5343314dcc6f8c71987513214c2cb57edb85f180->leave($__internal_a426b8a8332ffffefafa89bc5343314dcc6f8c71987513214c2cb57edb85f180_prof);

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
