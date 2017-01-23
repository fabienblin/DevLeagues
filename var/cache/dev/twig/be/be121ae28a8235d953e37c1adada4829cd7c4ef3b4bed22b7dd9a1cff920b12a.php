<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_fefbeeaa15a47351467219fb8b04181f186faf80ed9f55efef42ce00d8d74a47 extends Twig_Template
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
        $__internal_4b44cbd64cfc9da39567f39cc554cb5752a26d9da9e4a0e1fa324c1bfcf80810 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b44cbd64cfc9da39567f39cc554cb5752a26d9da9e4a0e1fa324c1bfcf80810->enter($__internal_4b44cbd64cfc9da39567f39cc554cb5752a26d9da9e4a0e1fa324c1bfcf80810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_06df73cae317607a6f18404bd6effc2cd4d823b7d0dfd94d7a652ed25187f2bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06df73cae317607a6f18404bd6effc2cd4d823b7d0dfd94d7a652ed25187f2bf->enter($__internal_06df73cae317607a6f18404bd6effc2cd4d823b7d0dfd94d7a652ed25187f2bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4b44cbd64cfc9da39567f39cc554cb5752a26d9da9e4a0e1fa324c1bfcf80810->leave($__internal_4b44cbd64cfc9da39567f39cc554cb5752a26d9da9e4a0e1fa324c1bfcf80810_prof);

        
        $__internal_06df73cae317607a6f18404bd6effc2cd4d823b7d0dfd94d7a652ed25187f2bf->leave($__internal_06df73cae317607a6f18404bd6effc2cd4d823b7d0dfd94d7a652ed25187f2bf_prof);

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
", "@Twig/Exception/exception.css.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
