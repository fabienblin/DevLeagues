<?php

/* @SonataAdmin/CRUD/show_date.html.twig */
class __TwigTemplate_253230e3af2043825004bafd77d9e7d73cbbf60124aab447038bf8fb3d2f6ff1 extends Twig_Template
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
        $__internal_31d167a574b0599a00067f83e6d8008b44ea16012d2af04004ccbcb7c8e5ca92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31d167a574b0599a00067f83e6d8008b44ea16012d2af04004ccbcb7c8e5ca92->enter($__internal_31d167a574b0599a00067f83e6d8008b44ea16012d2af04004ccbcb7c8e5ca92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_date.html.twig"));

        $__internal_9351b291f7a9d5727d69ca75a5f0146a4c69d02d0e42a13e3311966d71fba585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9351b291f7a9d5727d69ca75a5f0146a4c69d02d0e42a13e3311966d71fba585->enter($__internal_9351b291f7a9d5727d69ca75a5f0146a4c69d02d0e42a13e3311966d71fba585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_date.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31d167a574b0599a00067f83e6d8008b44ea16012d2af04004ccbcb7c8e5ca92->leave($__internal_31d167a574b0599a00067f83e6d8008b44ea16012d2af04004ccbcb7c8e5ca92_prof);

        
        $__internal_9351b291f7a9d5727d69ca75a5f0146a4c69d02d0e42a13e3311966d71fba585->leave($__internal_9351b291f7a9d5727d69ca75a5f0146a4c69d02d0e42a13e3311966d71fba585_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_60d5943d41d42ebe2b851007388fb6dde23b817265b8514d8c966e166af6fb63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60d5943d41d42ebe2b851007388fb6dde23b817265b8514d8c966e166af6fb63->enter($__internal_60d5943d41d42ebe2b851007388fb6dde23b817265b8514d8c966e166af6fb63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_98e08122f6bea88b8eaa499293d17505f1ea9a12732ce537c7c52daef6cc97b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98e08122f6bea88b8eaa499293d17505f1ea9a12732ce537c7c52daef6cc97b4->enter($__internal_98e08122f6bea88b8eaa499293d17505f1ea9a12732ce537c7c52daef6cc97b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_98e08122f6bea88b8eaa499293d17505f1ea9a12732ce537c7c52daef6cc97b4->leave($__internal_98e08122f6bea88b8eaa499293d17505f1ea9a12732ce537c7c52daef6cc97b4_prof);

        
        $__internal_60d5943d41d42ebe2b851007388fb6dde23b817265b8514d8c966e166af6fb63->leave($__internal_60d5943d41d42ebe2b851007388fb6dde23b817265b8514d8c966e166af6fb63_prof);

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
