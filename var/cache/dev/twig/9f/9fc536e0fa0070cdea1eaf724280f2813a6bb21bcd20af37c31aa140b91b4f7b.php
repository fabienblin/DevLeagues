<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_52e1c7db5a3e069a68da91731880e2ea5e387d0c69837257678ee7a3abbfcad7 extends Twig_Template
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
        $__internal_9a2f6fac8defc3d7ec19e42d0bd1e9d88433b97f4c2c96f07dab46c918922182 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a2f6fac8defc3d7ec19e42d0bd1e9d88433b97f4c2c96f07dab46c918922182->enter($__internal_9a2f6fac8defc3d7ec19e42d0bd1e9d88433b97f4c2c96f07dab46c918922182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_2848898b6445578ad1db5c0f11f530c1053a6beeb623d66e352cef716d865538 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2848898b6445578ad1db5c0f11f530c1053a6beeb623d66e352cef716d865538->enter($__internal_2848898b6445578ad1db5c0f11f530c1053a6beeb623d66e352cef716d865538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_9a2f6fac8defc3d7ec19e42d0bd1e9d88433b97f4c2c96f07dab46c918922182->leave($__internal_9a2f6fac8defc3d7ec19e42d0bd1e9d88433b97f4c2c96f07dab46c918922182_prof);

        
        $__internal_2848898b6445578ad1db5c0f11f530c1053a6beeb623d66e352cef716d865538->leave($__internal_2848898b6445578ad1db5c0f11f530c1053a6beeb623d66e352cef716d865538_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
