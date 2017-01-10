<?php

/* @SonataAdmin/CRUD/show_date.html.twig */
class __TwigTemplate_4c5f1f4fbda14b6fa1f86431f776131f24fc2c9ef83c254bf92541fb667d95e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_date.html.twig", 12);
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
        $__internal_f1417661264c2e62c22c72ec61ad5064e2be497294272a1e3717d1bdd3662751 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1417661264c2e62c22c72ec61ad5064e2be497294272a1e3717d1bdd3662751->enter($__internal_f1417661264c2e62c22c72ec61ad5064e2be497294272a1e3717d1bdd3662751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_date.html.twig"));

        $__internal_02210dbb0d0ef51a0ea8b1f8e4b8a65dd5a96cb6e0bfe7ddc096a3611c93af99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02210dbb0d0ef51a0ea8b1f8e4b8a65dd5a96cb6e0bfe7ddc096a3611c93af99->enter($__internal_02210dbb0d0ef51a0ea8b1f8e4b8a65dd5a96cb6e0bfe7ddc096a3611c93af99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_date.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1417661264c2e62c22c72ec61ad5064e2be497294272a1e3717d1bdd3662751->leave($__internal_f1417661264c2e62c22c72ec61ad5064e2be497294272a1e3717d1bdd3662751_prof);

        
        $__internal_02210dbb0d0ef51a0ea8b1f8e4b8a65dd5a96cb6e0bfe7ddc096a3611c93af99->leave($__internal_02210dbb0d0ef51a0ea8b1f8e4b8a65dd5a96cb6e0bfe7ddc096a3611c93af99_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_6cbc261a49a4de4f1f359822d72ff44434563fa044691bc9967b54cc72e291df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cbc261a49a4de4f1f359822d72ff44434563fa044691bc9967b54cc72e291df->enter($__internal_6cbc261a49a4de4f1f359822d72ff44434563fa044691bc9967b54cc72e291df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_767c679b00e657cb444b40529475e2cc9f4190e1621c607afca4868984dce020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_767c679b00e657cb444b40529475e2cc9f4190e1621c607afca4868984dce020->enter($__internal_767c679b00e657cb444b40529475e2cc9f4190e1621c607afca4868984dce020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute(        // line 17
($context["field_description"] ?? null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "format", array())), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "F j, Y"), "html", null, true);
        }
        
        $__internal_767c679b00e657cb444b40529475e2cc9f4190e1621c607afca4868984dce020->leave($__internal_767c679b00e657cb444b40529475e2cc9f4190e1621c607afca4868984dce020_prof);

        
        $__internal_6cbc261a49a4de4f1f359822d72ff44434563fa044691bc9967b54cc72e291df->leave($__internal_6cbc261a49a4de4f1f359822d72ff44434563fa044691bc9967b54cc72e291df_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_date.html.twig";
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

{% block field%}
    {%- if value is empty -%}
        &nbsp;
    {%- elseif field_description.options.format is defined -%}
        {{ value|date(field_description.options.format) }}
    {%- else -%}
        {{ value|date('F j, Y') }}
    {%- endif -%}
{% endblock %}
", "@SonataAdmin/CRUD/show_date.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_date.html.twig");
    }
}
