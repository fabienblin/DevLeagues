<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_46de3d45a8dc3a16f5d3ba5c8e2361dc4d73522420fa2245195588de182da4d3 extends Twig_Template
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
        $__internal_c11932eb16e402a1963c15d0e2139903e29888f38713a1e40b2abde9aa056c44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c11932eb16e402a1963c15d0e2139903e29888f38713a1e40b2abde9aa056c44->enter($__internal_c11932eb16e402a1963c15d0e2139903e29888f38713a1e40b2abde9aa056c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_0bb3b05afc7975dd268f9b7b52d1f8edd48e30a045d18a062ffa626cc8014f35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bb3b05afc7975dd268f9b7b52d1f8edd48e30a045d18a062ffa626cc8014f35->enter($__internal_0bb3b05afc7975dd268f9b7b52d1f8edd48e30a045d18a062ffa626cc8014f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c11932eb16e402a1963c15d0e2139903e29888f38713a1e40b2abde9aa056c44->leave($__internal_c11932eb16e402a1963c15d0e2139903e29888f38713a1e40b2abde9aa056c44_prof);

        
        $__internal_0bb3b05afc7975dd268f9b7b52d1f8edd48e30a045d18a062ffa626cc8014f35->leave($__internal_0bb3b05afc7975dd268f9b7b52d1f8edd48e30a045d18a062ffa626cc8014f35_prof);

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
