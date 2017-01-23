<?php

/* @SonataAdmin/CRUD/list_boolean.html.twig */
class __TwigTemplate_cbe8d92d0395f372a5befe2b9371fb5786958c4f2f46c3d0fe38631054e143b7 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_boolean.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b67f9fb932162ec1f26452097be4cc58a76ba50935ff44161fe6289add41063e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b67f9fb932162ec1f26452097be4cc58a76ba50935ff44161fe6289add41063e->enter($__internal_b67f9fb932162ec1f26452097be4cc58a76ba50935ff44161fe6289add41063e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_boolean.html.twig"));

        $__internal_6729be4503aa84dab6a145906380db6395ac3956f3cdf3d531cb807f1bd03636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6729be4503aa84dab6a145906380db6395ac3956f3cdf3d531cb807f1bd03636->enter($__internal_6729be4503aa84dab6a145906380db6395ac3956f3cdf3d531cb807f1bd03636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_boolean.html.twig"));

        // line 14
        $context["isEditable"] = (($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "editable", array())) && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"));
        // line 15
        $context["xEditableType"] = $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getXEditableType($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "type", array()));
        // line 17
        if ((($context["isEditable"] ?? $this->getContext($context, "isEditable")) && ($context["xEditableType"] ?? $this->getContext($context, "xEditableType")))) {
        }
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b67f9fb932162ec1f26452097be4cc58a76ba50935ff44161fe6289add41063e->leave($__internal_b67f9fb932162ec1f26452097be4cc58a76ba50935ff44161fe6289add41063e_prof);

        
        $__internal_6729be4503aa84dab6a145906380db6395ac3956f3cdf3d531cb807f1bd03636->leave($__internal_6729be4503aa84dab6a145906380db6395ac3956f3cdf3d531cb807f1bd03636_prof);

    }

    // line 18
    public function block_field_span_attributes($context, array $blocks = array())
    {
        $__internal_31dd86f194343195a6533be0cbce12e24b52e45be67aefc6fd7cfb1bfdc0f4ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31dd86f194343195a6533be0cbce12e24b52e45be67aefc6fd7cfb1bfdc0f4ba->enter($__internal_31dd86f194343195a6533be0cbce12e24b52e45be67aefc6fd7cfb1bfdc0f4ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

        $__internal_11bfc79ae6003c09be0261f1ac06db1a94e41ef036491542e7533a855ab5c510 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11bfc79ae6003c09be0261f1ac06db1a94e41ef036491542e7533a855ab5c510->enter($__internal_11bfc79ae6003c09be0261f1ac06db1a94e41ef036491542e7533a855ab5c510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

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
        
        $__internal_11bfc79ae6003c09be0261f1ac06db1a94e41ef036491542e7533a855ab5c510->leave($__internal_11bfc79ae6003c09be0261f1ac06db1a94e41ef036491542e7533a855ab5c510_prof);

        
        $__internal_31dd86f194343195a6533be0cbce12e24b52e45be67aefc6fd7cfb1bfdc0f4ba->leave($__internal_31dd86f194343195a6533be0cbce12e24b52e45be67aefc6fd7cfb1bfdc0f4ba_prof);

    }

    // line 26
    public function block_field($context, array $blocks = array())
    {
        $__internal_1baf6d694ed15564af5c707f0480b30aa58749ba2c5ba59df06de594b0a1304d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1baf6d694ed15564af5c707f0480b30aa58749ba2c5ba59df06de594b0a1304d->enter($__internal_1baf6d694ed15564af5c707f0480b30aa58749ba2c5ba59df06de594b0a1304d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_d02860123faa10caae96680b260dffe42267587b2e7464983434c9e4733a3b16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d02860123faa10caae96680b260dffe42267587b2e7464983434c9e4733a3b16->enter($__internal_d02860123faa10caae96680b260dffe42267587b2e7464983434c9e4733a3b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        ";
        if (($context["value"] ?? $this->getContext($context, "value"))) {
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
        
        $__internal_d02860123faa10caae96680b260dffe42267587b2e7464983434c9e4733a3b16->leave($__internal_d02860123faa10caae96680b260dffe42267587b2e7464983434c9e4733a3b16_prof);

        
        $__internal_1baf6d694ed15564af5c707f0480b30aa58749ba2c5ba59df06de594b0a1304d->leave($__internal_1baf6d694ed15564af5c707f0480b30aa58749ba2c5ba59df06de594b0a1304d_prof);

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
", "@SonataAdmin/CRUD/list_boolean.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_boolean.html.twig");
    }
}
