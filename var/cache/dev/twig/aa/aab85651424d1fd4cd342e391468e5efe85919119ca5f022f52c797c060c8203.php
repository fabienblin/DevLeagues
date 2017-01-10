<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_e70b9229acc7ea5ca55bde1ede1e6fb278a3a0cc5da8f88e0068f592195394e5 extends Twig_Template
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
        $__internal_1a2b804473108649101eb95e51a2975c42c5006c2ebc5f01a9910b25b8bfbea2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a2b804473108649101eb95e51a2975c42c5006c2ebc5f01a9910b25b8bfbea2->enter($__internal_1a2b804473108649101eb95e51a2975c42c5006c2ebc5f01a9910b25b8bfbea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_9d74fac3ebb0a015315b446c32decc7f6312dfd45198234359cdb8e3750cfa8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d74fac3ebb0a015315b446c32decc7f6312dfd45198234359cdb8e3750cfa8a->enter($__internal_9d74fac3ebb0a015315b446c32decc7f6312dfd45198234359cdb8e3750cfa8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_1a2b804473108649101eb95e51a2975c42c5006c2ebc5f01a9910b25b8bfbea2->leave($__internal_1a2b804473108649101eb95e51a2975c42c5006c2ebc5f01a9910b25b8bfbea2_prof);

        
        $__internal_9d74fac3ebb0a015315b446c32decc7f6312dfd45198234359cdb8e3750cfa8a->leave($__internal_9d74fac3ebb0a015315b446c32decc7f6312dfd45198234359cdb8e3750cfa8a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
