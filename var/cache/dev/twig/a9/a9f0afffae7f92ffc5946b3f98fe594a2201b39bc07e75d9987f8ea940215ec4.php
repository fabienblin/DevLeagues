<?php

/* @SonataAdmin/CRUD/list_boolean.html.twig */
class __TwigTemplate_e2bd2af6499a5fa7f3e287a028ca7d49edbb29b369f250de8982ea383b038a46 extends Twig_Template
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
        $__internal_5c6bc64048e6db6308c3516783144c60feaf9e57ac71aef2ca8b2ddffa5eb49d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c6bc64048e6db6308c3516783144c60feaf9e57ac71aef2ca8b2ddffa5eb49d->enter($__internal_5c6bc64048e6db6308c3516783144c60feaf9e57ac71aef2ca8b2ddffa5eb49d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_boolean.html.twig"));

        $__internal_e453f24f10ae96181309c0f1ff6a371e954ae8f80bc5a704dc8f5ea1547dbbf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e453f24f10ae96181309c0f1ff6a371e954ae8f80bc5a704dc8f5ea1547dbbf4->enter($__internal_e453f24f10ae96181309c0f1ff6a371e954ae8f80bc5a704dc8f5ea1547dbbf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_boolean.html.twig"));

        // line 14
        $context["isEditable"] = (($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "editable", array())) && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"));
        // line 15
        $context["xEditableType"] = $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getXEditableType($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "type", array()));
        // line 17
        if ((($context["isEditable"] ?? $this->getContext($context, "isEditable")) && ($context["xEditableType"] ?? $this->getContext($context, "xEditableType")))) {
        }
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c6bc64048e6db6308c3516783144c60feaf9e57ac71aef2ca8b2ddffa5eb49d->leave($__internal_5c6bc64048e6db6308c3516783144c60feaf9e57ac71aef2ca8b2ddffa5eb49d_prof);

        
        $__internal_e453f24f10ae96181309c0f1ff6a371e954ae8f80bc5a704dc8f5ea1547dbbf4->leave($__internal_e453f24f10ae96181309c0f1ff6a371e954ae8f80bc5a704dc8f5ea1547dbbf4_prof);

    }

    // line 18
    public function block_field_span_attributes($context, array $blocks = array())
    {
        $__internal_270ea463a52cb3445d248df00f11885510b316b09ce54c61300495e9539b6bbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_270ea463a52cb3445d248df00f11885510b316b09ce54c61300495e9539b6bbc->enter($__internal_270ea463a52cb3445d248df00f11885510b316b09ce54c61300495e9539b6bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

        $__internal_d472ad367d81818f2dc8c0966f5cd164290bf97fc0b9fcba13ae17af5cd5c50d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d472ad367d81818f2dc8c0966f5cd164290bf97fc0b9fcba13ae17af5cd5c50d->enter($__internal_d472ad367d81818f2dc8c0966f5cd164290bf97fc0b9fcba13ae17af5cd5c50d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

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
        
        $__internal_d472ad367d81818f2dc8c0966f5cd164290bf97fc0b9fcba13ae17af5cd5c50d->leave($__internal_d472ad367d81818f2dc8c0966f5cd164290bf97fc0b9fcba13ae17af5cd5c50d_prof);

        
        $__internal_270ea463a52cb3445d248df00f11885510b316b09ce54c61300495e9539b6bbc->leave($__internal_270ea463a52cb3445d248df00f11885510b316b09ce54c61300495e9539b6bbc_prof);

    }

    // line 26
    public function block_field($context, array $blocks = array())
    {
        $__internal_69006b5c7639862d56887b073dce99f36e873b573e2ebecf1fde58a2ad696dac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69006b5c7639862d56887b073dce99f36e873b573e2ebecf1fde58a2ad696dac->enter($__internal_69006b5c7639862d56887b073dce99f36e873b573e2ebecf1fde58a2ad696dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_7ce6e26b8f5da2a2d420c6a1adbff0eb60f74ed02a7d5501cb926ecac702145f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ce6e26b8f5da2a2d420c6a1adbff0eb60f74ed02a7d5501cb926ecac702145f->enter($__internal_7ce6e26b8f5da2a2d420c6a1adbff0eb60f74ed02a7d5501cb926ecac702145f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_7ce6e26b8f5da2a2d420c6a1adbff0eb60f74ed02a7d5501cb926ecac702145f->leave($__internal_7ce6e26b8f5da2a2d420c6a1adbff0eb60f74ed02a7d5501cb926ecac702145f_prof);

        
        $__internal_69006b5c7639862d56887b073dce99f36e873b573e2ebecf1fde58a2ad696dac->leave($__internal_69006b5c7639862d56887b073dce99f36e873b573e2ebecf1fde58a2ad696dac_prof);

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
