<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_9c6d110f104ce96fcf2b92b97ae51b4e8fbd92d9fff2c18b62eb3c7aa86f8262 extends Twig_Template
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
        $__internal_b1fe8e7bc1825ea0daa92e16fee8c0169639e7c107b81c317f59ac9976a0deae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1fe8e7bc1825ea0daa92e16fee8c0169639e7c107b81c317f59ac9976a0deae->enter($__internal_b1fe8e7bc1825ea0daa92e16fee8c0169639e7c107b81c317f59ac9976a0deae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_7a28df07bb5d7f36a4bb09923f2f1495daeb6018d8ea7e8237d3d090e7a28adb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a28df07bb5d7f36a4bb09923f2f1495daeb6018d8ea7e8237d3d090e7a28adb->enter($__internal_7a28df07bb5d7f36a4bb09923f2f1495daeb6018d8ea7e8237d3d090e7a28adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
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
        
        $__internal_b1fe8e7bc1825ea0daa92e16fee8c0169639e7c107b81c317f59ac9976a0deae->leave($__internal_b1fe8e7bc1825ea0daa92e16fee8c0169639e7c107b81c317f59ac9976a0deae_prof);

        
        $__internal_7a28df07bb5d7f36a4bb09923f2f1495daeb6018d8ea7e8237d3d090e7a28adb->leave($__internal_7a28df07bb5d7f36a4bb09923f2f1495daeb6018d8ea7e8237d3d090e7a28adb_prof);

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
", "@Twig/Exception/traces.xml.twig", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
