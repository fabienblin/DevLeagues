<?php

/* @SonataAdmin/CRUD/show_array.html.twig */
class __TwigTemplate_a6b000506a6476e570c46470cce5f88af4dd4c09bc52f832fb6ce5d7d4364035 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_array.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2bf291f1143f66630100d6ce0af8cde0de15896d01544d1a17fce5006a6a98d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2bf291f1143f66630100d6ce0af8cde0de15896d01544d1a17fce5006a6a98d->enter($__internal_e2bf291f1143f66630100d6ce0af8cde0de15896d01544d1a17fce5006a6a98d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_array.html.twig"));

        $__internal_25c8e43980a6ffc4fb4266b967027e532da2b0d34d74e46000b78de4176b8181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25c8e43980a6ffc4fb4266b967027e532da2b0d34d74e46000b78de4176b8181->enter($__internal_25c8e43980a6ffc4fb4266b967027e532da2b0d34d74e46000b78de4176b8181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_array.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2bf291f1143f66630100d6ce0af8cde0de15896d01544d1a17fce5006a6a98d->leave($__internal_e2bf291f1143f66630100d6ce0af8cde0de15896d01544d1a17fce5006a6a98d_prof);

        
        $__internal_25c8e43980a6ffc4fb4266b967027e532da2b0d34d74e46000b78de4176b8181->leave($__internal_25c8e43980a6ffc4fb4266b967027e532da2b0d34d74e46000b78de4176b8181_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_0a66582b26c090e2bf7e5e3ba5c69c7370ae898f40009efd150822918600c56c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a66582b26c090e2bf7e5e3ba5c69c7370ae898f40009efd150822918600c56c->enter($__internal_0a66582b26c090e2bf7e5e3ba5c69c7370ae898f40009efd150822918600c56c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_4453a40069fec9b9cb66171dfc25b48f8a5781096b254beb86c68837dee8e3a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4453a40069fec9b9cb66171dfc25b48f8a5781096b254beb86c68837dee8e3a6->enter($__internal_4453a40069fec9b9cb66171dfc25b48f8a5781096b254beb86c68837dee8e3a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["value"] ?? $this->getContext($context, "value")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["val"]) {
            // line 16
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
                // line 17
                echo "            [";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo " => ";
                echo $context["val"];
                echo "]
        ";
            } else {
                // line 19
                echo "            [";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo " => ";
                echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                echo "]
        ";
            }
            // line 21
            echo "
        ";
            // line 22
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                // line 23
                echo "            ";
                if (( !$this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "inline", array(), "any", true, true) || (false == $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "inline", array())))) {
                    echo "<br>";
                }
                // line 24
                echo "        ";
            }
            // line 25
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_4453a40069fec9b9cb66171dfc25b48f8a5781096b254beb86c68837dee8e3a6->leave($__internal_4453a40069fec9b9cb66171dfc25b48f8a5781096b254beb86c68837dee8e3a6_prof);

        
        $__internal_0a66582b26c090e2bf7e5e3ba5c69c7370ae898f40009efd150822918600c56c->leave($__internal_0a66582b26c090e2bf7e5e3ba5c69c7370ae898f40009efd150822918600c56c_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 25,  96 => 24,  91 => 23,  89 => 22,  86 => 21,  78 => 19,  70 => 17,  67 => 16,  49 => 15,  40 => 14,  11 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field%}
    {% for key, val in value %}
        {% if field_description.options.safe %}
            [{{ key }} => {{ val|raw }}]
        {% else %}
            [{{ key }} => {{ val }}]
        {% endif %}

        {% if not loop.last %}
            {% if field_description.options.inline is not defined or false == field_description.options.inline %}<br>{% endif %}
        {% endif %}
    {% endfor %}
{% endblock %}
", "@SonataAdmin/CRUD/show_array.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_array.html.twig");
    }
}
