<?php

/* @SonataAdmin/CRUD/list_choice.html.twig */
class __TwigTemplate_a1afb9007476fa2ef75b4aff03ea31c027f8028d2f6cde7d59dfd275c8810576 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field_span_attributes' => array($this, 'block_field_span_attributes'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_choice.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8a7432022c2468c0d5485aebb1d515a50c6d191206f9d666ccb160de360a201 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8a7432022c2468c0d5485aebb1d515a50c6d191206f9d666ccb160de360a201->enter($__internal_d8a7432022c2468c0d5485aebb1d515a50c6d191206f9d666ccb160de360a201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_choice.html.twig"));

        $__internal_be8684a97f8ab8996ae8fe4094233e0462e05134784c006d3327192419a96954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be8684a97f8ab8996ae8fe4094233e0462e05134784c006d3327192419a96954->enter($__internal_be8684a97f8ab8996ae8fe4094233e0462e05134784c006d3327192419a96954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_choice.html.twig"));

        // line 14
        $context["is_editable"] = (($this->getAttribute($this->getAttribute(        // line 15
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute(        // line 16
(isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "editable", array())) && $this->getAttribute(        // line 17
(isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"));
        // line 19
        $context["x_editable_type"] = $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getXEditableType($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type", array()));
        // line 21
        if (((isset($context["is_editable"]) ? $context["is_editable"] : $this->getContext($context, "is_editable")) && (isset($context["x_editable_type"]) ? $context["x_editable_type"] : $this->getContext($context, "x_editable_type")))) {
        }
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8a7432022c2468c0d5485aebb1d515a50c6d191206f9d666ccb160de360a201->leave($__internal_d8a7432022c2468c0d5485aebb1d515a50c6d191206f9d666ccb160de360a201_prof);

        
        $__internal_be8684a97f8ab8996ae8fe4094233e0462e05134784c006d3327192419a96954->leave($__internal_be8684a97f8ab8996ae8fe4094233e0462e05134784c006d3327192419a96954_prof);

    }

    // line 22
    public function block_field_span_attributes($context, array $blocks = array())
    {
        $__internal_37389b1c2404cab838e55a1ffd6f6335f981d13f6fc0b211e24568429d40c755 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37389b1c2404cab838e55a1ffd6f6335f981d13f6fc0b211e24568429d40c755->enter($__internal_37389b1c2404cab838e55a1ffd6f6335f981d13f6fc0b211e24568429d40c755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

        $__internal_18329b4775b785b37d329fe96397f2036c4a18913694df4b6c16e28fd8f24260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18329b4775b785b37d329fe96397f2036c4a18913694df4b6c16e28fd8f24260->enter($__internal_18329b4775b785b37d329fe96397f2036c4a18913694df4b6c16e28fd8f24260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

        // line 23
        echo "        ";
        ob_start();
        // line 24
        echo "            ";
        $this->displayParentBlock("field_span_attributes", $context, $blocks);
        echo "
            data-source=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getXEditableChoices((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")))), "html", null, true);
        echo "\"
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 27
        echo "    ";
        
        $__internal_18329b4775b785b37d329fe96397f2036c4a18913694df4b6c16e28fd8f24260->leave($__internal_18329b4775b785b37d329fe96397f2036c4a18913694df4b6c16e28fd8f24260_prof);

        
        $__internal_37389b1c2404cab838e55a1ffd6f6335f981d13f6fc0b211e24568429d40c755->leave($__internal_37389b1c2404cab838e55a1ffd6f6335f981d13f6fc0b211e24568429d40c755_prof);

    }

    // line 30
    public function block_field($context, array $blocks = array())
    {
        $__internal_baa54a82d30a28d625a26353b9a04fa055467d00a7c4c9284078c7fae8f1c610 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baa54a82d30a28d625a26353b9a04fa055467d00a7c4c9284078c7fae8f1c610->enter($__internal_baa54a82d30a28d625a26353b9a04fa055467d00a7c4c9284078c7fae8f1c610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_b515701b12f4f1e41eefdbd05adeee5f791c88b580babd16284d5cf119c9e8a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b515701b12f4f1e41eefdbd05adeee5f791c88b580babd16284d5cf119c9e8a9->enter($__internal_b515701b12f4f1e41eefdbd05adeee5f791c88b580babd16284d5cf119c9e8a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 31
        ob_start();
        // line 32
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "choices", array(), "any", true, true)) {
            // line 33
            echo "        ";
            if ((($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "multiple", array(), "any", true, true) && ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "multiple", array()) == true)) && twig_test_iterable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                // line 34
                echo "
            ";
                // line 35
                $context["result"] = "";
                // line 36
                echo "            ";
                $context["delimiter"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "delimiter", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "delimiter", array()), ", ")) : (", "));
                // line 37
                echo "
            ";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
                foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                    // line 39
                    echo "                ";
                    if ( !twig_test_empty((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")))) {
                        // line 40
                        echo "                    ";
                        $context["result"] = ((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")) . (isset($context["delimiter"]) ? $context["delimiter"] : $this->getContext($context, "delimiter")));
                        // line 41
                        echo "                ";
                    }
                    // line 42
                    echo "
                ";
                    // line 43
                    if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "choices", array(), "any", false, true), $context["val"], array(), "array", true, true)) {
                        // line 44
                        echo "                    ";
                        if ( !$this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) {
                            // line 45
                            echo "                        ";
                            $context["result"] = ((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")) . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "choices", array()), $context["val"], array(), "array"));
                            // line 46
                            echo "                    ";
                        } else {
                            // line 47
                            echo "                        ";
                            $context["result"] = ((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "choices", array()), $context["val"], array(), "array"), array(), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "catalogue", array())));
                            // line 48
                            echo "                    ";
                        }
                        // line 49
                        echo "                ";
                    } else {
                        // line 50
                        echo "                    ";
                        $context["result"] = ((isset($context["result"]) ? $context["result"] : $this->getContext($context, "result")) . $context["val"]);
                        // line 51
                        echo "                ";
                    }
                    // line 52
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "
            ";
                // line 54
                $context["value"] = (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result"));
                // line 55
                echo "
        ";
            } elseif (twig_in_filter(            // line 56
(isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), twig_get_array_keys_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "choices", array())))) {
                // line 57
                echo "            ";
                if ( !$this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) {
                    // line 58
                    echo "                ";
                    $context["value"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "choices", array()), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), array(), "array");
                    // line 59
                    echo "            ";
                } else {
                    // line 60
                    echo "                ";
                    $context["value"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "choices", array()), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), array(), "array"), array(), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "catalogue", array()));
                    // line 61
                    echo "            ";
                }
                // line 62
                echo "        ";
            }
            // line 63
            echo "    ";
        }
        // line 64
        echo "
    ";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b515701b12f4f1e41eefdbd05adeee5f791c88b580babd16284d5cf119c9e8a9->leave($__internal_b515701b12f4f1e41eefdbd05adeee5f791c88b580babd16284d5cf119c9e8a9_prof);

        
        $__internal_baa54a82d30a28d625a26353b9a04fa055467d00a7c4c9284078c7fae8f1c610->leave($__internal_baa54a82d30a28d625a26353b9a04fa055467d00a7c4c9284078c7fae8f1c610_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 65,  190 => 64,  187 => 63,  184 => 62,  181 => 61,  178 => 60,  175 => 59,  172 => 58,  169 => 57,  167 => 56,  164 => 55,  162 => 54,  159 => 53,  153 => 52,  150 => 51,  147 => 50,  144 => 49,  141 => 48,  138 => 47,  135 => 46,  132 => 45,  129 => 44,  127 => 43,  124 => 42,  121 => 41,  118 => 40,  115 => 39,  111 => 38,  108 => 37,  105 => 36,  103 => 35,  100 => 34,  97 => 33,  94 => 32,  92 => 31,  83 => 30,  73 => 27,  68 => 25,  63 => 24,  60 => 23,  51 => 22,  41 => 12,  38 => 21,  36 => 19,  34 => 17,  33 => 16,  32 => 15,  31 => 14,  19 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% set is_editable =
    field_description.options.editable is defined and
    field_description.options.editable and
    admin.isGranted('EDIT', object)
%}
{% set x_editable_type = field_description.type|sonata_xeditable_type %}

{% if is_editable and x_editable_type %}
    {% block field_span_attributes %}
        {% spaceless %}
            {{ parent() }}
            data-source=\"{{ field_description|sonata_xeditable_choices|json_encode }}\"
        {% endspaceless %}
    {% endblock %}
{% endif %}

{% block field %}
{% spaceless %}
    {% if field_description.options.choices is defined %}
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

    {{ value }}
{% endspaceless %}
{% endblock %}
", "@SonataAdmin/CRUD/list_choice.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_choice.html.twig");
    }
}
