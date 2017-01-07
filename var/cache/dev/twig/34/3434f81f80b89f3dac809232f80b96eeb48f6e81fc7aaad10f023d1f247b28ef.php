<?php

/* @SonataAdmin/CRUD/show_datetime.html.twig */
class __TwigTemplate_6e414a541661aee5db3d43276e01e68bc2e6456cd614c8849b75e2a2aa93d36a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_datetime.html.twig", 12);
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
        $__internal_a06b00730eaf954cdd5f8f7e4d83bb1f6bd1f921645e86b23c730f30919a9fa4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a06b00730eaf954cdd5f8f7e4d83bb1f6bd1f921645e86b23c730f30919a9fa4->enter($__internal_a06b00730eaf954cdd5f8f7e4d83bb1f6bd1f921645e86b23c730f30919a9fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_datetime.html.twig"));

        $__internal_4c2d402e570181bcb076b61e3322a190b5e66c34d26351f5fba7ae172bbb6c50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c2d402e570181bcb076b61e3322a190b5e66c34d26351f5fba7ae172bbb6c50->enter($__internal_4c2d402e570181bcb076b61e3322a190b5e66c34d26351f5fba7ae172bbb6c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_datetime.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a06b00730eaf954cdd5f8f7e4d83bb1f6bd1f921645e86b23c730f30919a9fa4->leave($__internal_a06b00730eaf954cdd5f8f7e4d83bb1f6bd1f921645e86b23c730f30919a9fa4_prof);

        
        $__internal_4c2d402e570181bcb076b61e3322a190b5e66c34d26351f5fba7ae172bbb6c50->leave($__internal_4c2d402e570181bcb076b61e3322a190b5e66c34d26351f5fba7ae172bbb6c50_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_6b1b1558bc58e7f1d5e4099fa7eabf7c868ab0582e76f1d8a37b72962cfd3fff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b1b1558bc58e7f1d5e4099fa7eabf7c868ab0582e76f1d8a37b72962cfd3fff->enter($__internal_6b1b1558bc58e7f1d5e4099fa7eabf7c868ab0582e76f1d8a37b72962cfd3fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_543a865cdff60010212c4e2853d8bd61d2fa8495372ebc4b5ae60dba134ea0cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_543a865cdff60010212c4e2853d8bd61d2fa8495372ebc4b5ae60dba134ea0cb->enter($__internal_543a865cdff60010212c4e2853d8bd61d2fa8495372ebc4b5ae60dba134ea0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute(        // line 17
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "format", array())), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        }
        
        $__internal_543a865cdff60010212c4e2853d8bd61d2fa8495372ebc4b5ae60dba134ea0cb->leave($__internal_543a865cdff60010212c4e2853d8bd61d2fa8495372ebc4b5ae60dba134ea0cb_prof);

        
        $__internal_6b1b1558bc58e7f1d5e4099fa7eabf7c868ab0582e76f1d8a37b72962cfd3fff->leave($__internal_6b1b1558bc58e7f1d5e4099fa7eabf7c868ab0582e76f1d8a37b72962cfd3fff_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 20,  55 => 18,  53 => 17,  51 => 16,  49 => 15,  40 => 14,  11 => 12,);
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

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {%- elseif field_description.options.format is defined -%}
        {{ value|date(field_description.options.format) }}
    {%- else -%}
        {{ value|date }}
    {%- endif -%}
{% endblock %}
", "@SonataAdmin/CRUD/show_datetime.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_datetime.html.twig");
    }
}
