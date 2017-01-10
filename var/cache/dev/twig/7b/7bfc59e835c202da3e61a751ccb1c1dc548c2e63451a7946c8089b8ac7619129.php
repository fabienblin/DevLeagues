<?php

/* @SonataAdmin/CRUD/show_choice.html.twig */
class __TwigTemplate_0924a1a8543a531af22ac02e88086d4752f79c8b1d338ff37c661345d1650429 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_choice.html.twig", 11);
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
        $__internal_11636a98bf2eaa3b5ad30788cff6e16d958a663237ef92f36dbd943cf7a0f54c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11636a98bf2eaa3b5ad30788cff6e16d958a663237ef92f36dbd943cf7a0f54c->enter($__internal_11636a98bf2eaa3b5ad30788cff6e16d958a663237ef92f36dbd943cf7a0f54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_choice.html.twig"));

        $__internal_58b8589d3e04aa3be23dc4df4459cfad6e32322b25de2f012817e74c05727ba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58b8589d3e04aa3be23dc4df4459cfad6e32322b25de2f012817e74c05727ba4->enter($__internal_58b8589d3e04aa3be23dc4df4459cfad6e32322b25de2f012817e74c05727ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_choice.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11636a98bf2eaa3b5ad30788cff6e16d958a663237ef92f36dbd943cf7a0f54c->leave($__internal_11636a98bf2eaa3b5ad30788cff6e16d958a663237ef92f36dbd943cf7a0f54c_prof);

        
        $__internal_58b8589d3e04aa3be23dc4df4459cfad6e32322b25de2f012817e74c05727ba4->leave($__internal_58b8589d3e04aa3be23dc4df4459cfad6e32322b25de2f012817e74c05727ba4_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_4bb3de6c786468b03a4296b89612f43b2782c9d50720c559485ddea6ac08ba34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bb3de6c786468b03a4296b89612f43b2782c9d50720c559485ddea6ac08ba34->enter($__internal_4bb3de6c786468b03a4296b89612f43b2782c9d50720c559485ddea6ac08ba34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_6685f8c6e6ea473f1541a9f684967c5bfd334d2e8dbd509f1e62be06f2ad37c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6685f8c6e6ea473f1541a9f684967c5bfd334d2e8dbd509f1e62be06f2ad37c3->enter($__internal_6685f8c6e6ea473f1541a9f684967c5bfd334d2e8dbd509f1e62be06f2ad37c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 14
        ob_start();
        // line 15
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "choices", array(), "any", true, true)) {
            // line 16
            echo "        ";
            if ((($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "multiple", array(), "any", true, true) && ($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "multiple", array()) == true)) && twig_test_iterable(($context["value"] ?? $this->getContext($context, "value"))))) {
                // line 17
                echo "
            ";
                // line 18
                $context["result"] = "";
                // line 19
                echo "            ";
                $context["delimiter"] = (($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "delimiter", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "delimiter", array()), ", ")) : (", "));
                // line 20
                echo "
            ";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["value"] ?? $this->getContext($context, "value")));
                foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                    // line 22
                    echo "                ";
                    if ( !twig_test_empty(($context["result"] ?? $this->getContext($context, "result")))) {
                        // line 23
                        echo "                    ";
                        $context["result"] = (($context["result"] ?? $this->getContext($context, "result")) . ($context["delimiter"] ?? $this->getContext($context, "delimiter")));
                        // line 24
                        echo "                ";
                    }
                    // line 25
                    echo "
                ";
                    // line 26
                    if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "choices", array(), "any", false, true), $context["val"], array(), "array", true, true)) {
                        // line 27
                        echo "                    ";
                        if ( !$this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) {
                            // line 28
                            echo "                        ";
                            $context["result"] = (($context["result"] ?? $this->getContext($context, "result")) . $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "choices", array()), $context["val"], array(), "array"));
                            // line 29
                            echo "                    ";
                        } else {
                            // line 30
                            echo "                        ";
                            $context["result"] = (($context["result"] ?? $this->getContext($context, "result")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "choices", array()), $context["val"], array(), "array"), array(), $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "catalogue", array())));
                            // line 31
                            echo "                    ";
                        }
                        // line 32
                        echo "                ";
                    } else {
                        // line 33
                        echo "                    ";
                        $context["result"] = (($context["result"] ?? $this->getContext($context, "result")) . $context["val"]);
                        // line 34
                        echo "                ";
                    }
                    // line 35
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "
            ";
                // line 37
                $context["value"] = ($context["result"] ?? $this->getContext($context, "result"));
                // line 38
                echo "
        ";
            } elseif (twig_in_filter(            // line 39
($context["value"] ?? $this->getContext($context, "value")), twig_get_array_keys_filter($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "choices", array())))) {
                // line 40
                echo "            ";
                if ( !$this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) {
                    // line 41
                    echo "                ";
                    $context["value"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "choices", array()), ($context["value"] ?? $this->getContext($context, "value")), array(), "array");
                    // line 42
                    echo "            ";
                } else {
                    // line 43
                    echo "                ";
                    $context["value"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "choices", array()), ($context["value"] ?? $this->getContext($context, "value")), array(), "array"), array(), $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "catalogue", array()));
                    // line 44
                    echo "            ";
                }
                // line 45
                echo "        ";
            }
            // line 46
            echo "    ";
        }
        // line 47
        echo "
    ";
        // line 48
        if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            // line 49
            echo "        ";
            echo ($context["value"] ?? $this->getContext($context, "value"));
            echo "
    ";
        } else {
            // line 51
            echo "        ";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        // line 53
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6685f8c6e6ea473f1541a9f684967c5bfd334d2e8dbd509f1e62be06f2ad37c3->leave($__internal_6685f8c6e6ea473f1541a9f684967c5bfd334d2e8dbd509f1e62be06f2ad37c3_prof);

        
        $__internal_4bb3de6c786468b03a4296b89612f43b2782c9d50720c559485ddea6ac08ba34->leave($__internal_4bb3de6c786468b03a4296b89612f43b2782c9d50720c559485ddea6ac08ba34_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 53,  158 => 51,  152 => 49,  150 => 48,  147 => 47,  144 => 46,  141 => 45,  138 => 44,  135 => 43,  132 => 42,  129 => 41,  126 => 40,  124 => 39,  121 => 38,  119 => 37,  116 => 36,  110 => 35,  107 => 34,  104 => 33,  101 => 32,  98 => 31,  95 => 30,  92 => 29,  89 => 28,  86 => 27,  84 => 26,  81 => 25,  78 => 24,  75 => 23,  72 => 22,  68 => 21,  65 => 20,  62 => 19,  60 => 18,  57 => 17,  54 => 16,  51 => 15,  49 => 14,  40 => 13,  11 => 11,);
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
{% spaceless %}
    {% if field_description.options.choices  is defined %}
        {% if field_description.options.multiple is defined and field_description.options.multiple==true and value is iterable %}

            {% set result = '' %}
            {% set delimiter = field_description.options.delimiter|default(', ') %}

            {% for val in value %}
                {% if result is not empty %}
                    {% set result = result ~ delimiter %}
                {% endif %}

                {% if field_description.options.choices[val] is defined %}
                    {% if field_description.options.catalogue is not defined %}
                        {% set result = result ~ field_description.options.choices[val] %}
                    {% else %}
                        {% set result = result ~ field_description.options.choices[val]|trans({}, field_description.options.catalogue) %}
                    {% endif %}
                {% else %}
                    {% set result = result ~ val %}
                {% endif %}
            {% endfor %}

            {% set value = result %}

        {% elseif value in field_description.options.choices|keys %}
            {% if field_description.options.catalogue is not defined %}
                {% set value = field_description.options.choices[value] %}
            {% else %}
                {% set value = field_description.options.choices[value]|trans({}, field_description.options.catalogue) %}
            {% endif %}
        {% endif %}
    {% endif %}

    {% if field_description.options.safe %}
        {{ value|raw }}
    {% else %}
        {{ value }}
    {% endif %}

{% endspaceless %}
{% endblock %}
", "@SonataAdmin/CRUD/show_choice.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_choice.html.twig");
    }
}
