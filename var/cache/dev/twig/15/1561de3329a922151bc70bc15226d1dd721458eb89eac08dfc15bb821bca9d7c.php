<?php

/* @SonataAdmin/CRUD/list_boolean.html.twig */
class __TwigTemplate_c12b672b63977b31bd1749f1a2dd40d770f866e7ddc1b96d4ddeb1441a0e7319 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_boolean.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a36d9a62eb5e6b71fb02c0d2e69ee50059f3371829104157f2b05133f8becf20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a36d9a62eb5e6b71fb02c0d2e69ee50059f3371829104157f2b05133f8becf20->enter($__internal_a36d9a62eb5e6b71fb02c0d2e69ee50059f3371829104157f2b05133f8becf20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_boolean.html.twig"));

        $__internal_2448462df2e7bc09dbd802fbb1efea85886c68eed751bd3873a28ff1c5bc3565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2448462df2e7bc09dbd802fbb1efea85886c68eed751bd3873a28ff1c5bc3565->enter($__internal_2448462df2e7bc09dbd802fbb1efea85886c68eed751bd3873a28ff1c5bc3565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_boolean.html.twig"));

        // line 14
        $context["isEditable"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "editable", array())) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"));
        // line 15
        $context["xEditableType"] = $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getXEditableType($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type", array()));
        // line 17
        if (((isset($context["isEditable"]) ? $context["isEditable"] : $this->getContext($context, "isEditable")) && (isset($context["xEditableType"]) ? $context["xEditableType"] : $this->getContext($context, "xEditableType")))) {
        }
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a36d9a62eb5e6b71fb02c0d2e69ee50059f3371829104157f2b05133f8becf20->leave($__internal_a36d9a62eb5e6b71fb02c0d2e69ee50059f3371829104157f2b05133f8becf20_prof);

        
        $__internal_2448462df2e7bc09dbd802fbb1efea85886c68eed751bd3873a28ff1c5bc3565->leave($__internal_2448462df2e7bc09dbd802fbb1efea85886c68eed751bd3873a28ff1c5bc3565_prof);

    }

    // line 18
    public function block_field_span_attributes($context, array $blocks = array())
    {
        $__internal_ef7e74436882b9b011e8f83e08752133d007d467d98e031b978e9b5e96e5c5de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef7e74436882b9b011e8f83e08752133d007d467d98e031b978e9b5e96e5c5de->enter($__internal_ef7e74436882b9b011e8f83e08752133d007d467d98e031b978e9b5e96e5c5de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

        $__internal_fe4419d788dc42f126208c15a39204af0b4f0a52eb3cba2f4400afa7584f0030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe4419d788dc42f126208c15a39204af0b4f0a52eb3cba2f4400afa7584f0030->enter($__internal_fe4419d788dc42f126208c15a39204af0b4f0a52eb3cba2f4400afa7584f0030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

        // line 19
        echo "        ";
        ob_start();
        // line 20
        echo "            ";
        $this->displayParentBlock("field_span_attributes", $context, $blocks);
        echo "
            data-source=\"[{value: 0, text: '";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
        echo "'},{value: 1, text: '";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
        echo "'}]\"
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 23
        echo "    ";
        
        $__internal_fe4419d788dc42f126208c15a39204af0b4f0a52eb3cba2f4400afa7584f0030->leave($__internal_fe4419d788dc42f126208c15a39204af0b4f0a52eb3cba2f4400afa7584f0030_prof);

        
        $__internal_ef7e74436882b9b011e8f83e08752133d007d467d98e031b978e9b5e96e5c5de->leave($__internal_ef7e74436882b9b011e8f83e08752133d007d467d98e031b978e9b5e96e5c5de_prof);

    }

    // line 26
    public function block_field($context, array $blocks = array())
    {
        $__internal_e9fe3be520b7ee97685a00dd2298eb1aadc84e276e6f1127a4a79d46aff86014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9fe3be520b7ee97685a00dd2298eb1aadc84e276e6f1127a4a79d46aff86014->enter($__internal_e9fe3be520b7ee97685a00dd2298eb1aadc84e276e6f1127a4a79d46aff86014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_8f19fb7aa60eecb9efeab0556f9c50c74dad54ca79516bd51ca7adfcd0a720e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f19fb7aa60eecb9efeab0556f9c50c74dad54ca79516bd51ca7adfcd0a720e6->enter($__internal_8f19fb7aa60eecb9efeab0556f9c50c74dad54ca79516bd51ca7adfcd0a720e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        ";
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 29
            echo "            <span class=\"label label-success\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
            echo "</span>
        ";
        } else {
            // line 31
            echo "            <span class=\"label label-danger\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
            echo "</span>
        ";
        }
        // line 33
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_8f19fb7aa60eecb9efeab0556f9c50c74dad54ca79516bd51ca7adfcd0a720e6->leave($__internal_8f19fb7aa60eecb9efeab0556f9c50c74dad54ca79516bd51ca7adfcd0a720e6_prof);

        
        $__internal_e9fe3be520b7ee97685a00dd2298eb1aadc84e276e6f1127a4a79d46aff86014->leave($__internal_e9fe3be520b7ee97685a00dd2298eb1aadc84e276e6f1127a4a79d46aff86014_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 33,  103 => 31,  97 => 29,  94 => 28,  91 => 27,  82 => 26,  72 => 23,  65 => 21,  60 => 20,  57 => 19,  48 => 18,  38 => 12,  35 => 17,  33 => 15,  31 => 14,  19 => 12,);
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

{% set isEditable = field_description.options.editable is defined and field_description.options.editable and admin.isGranted('EDIT', object) %}
{% set xEditableType = field_description.type|sonata_xeditable_type %}

{% if isEditable and xEditableType %}
    {% block field_span_attributes %}
        {% spaceless %}
            {{ parent() }}
            data-source=\"[{value: 0, text: '{%- trans from 'SonataAdminBundle' %}label_type_no{% endtrans -%}'},{value: 1, text: '{%- trans from 'SonataAdminBundle' %}label_type_yes{% endtrans -%}'}]\"
        {% endspaceless %}
    {% endblock %}
{% endif %}

{% block field %}
    {% spaceless %}
        {% if value %}
            <span class=\"label label-success\">{%- trans from 'SonataAdminBundle' %}label_type_yes{% endtrans -%}</span>
        {% else %}
            <span class=\"label label-danger\">{%- trans from 'SonataAdminBundle' %}label_type_no{% endtrans -%}</span>
        {% endif %}
    {% endspaceless %}
{% endblock %}
", "@SonataAdmin/CRUD/list_boolean.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_boolean.html.twig");
    }
}
