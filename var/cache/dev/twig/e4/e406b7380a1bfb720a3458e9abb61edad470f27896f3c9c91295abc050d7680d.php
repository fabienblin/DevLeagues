<?php

/* @SonataAdmin/CRUD/show_datetime.html.twig */
class __TwigTemplate_e9c4eb691f55c007625099be5ea54e73007df982bff7da62c84d827fa319608f extends Twig_Template
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
        $__internal_267ea79eee98939cff2321a04f2c77318cb639b57c0cfd443046f27143063c41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_267ea79eee98939cff2321a04f2c77318cb639b57c0cfd443046f27143063c41->enter($__internal_267ea79eee98939cff2321a04f2c77318cb639b57c0cfd443046f27143063c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_datetime.html.twig"));

        $__internal_827c663b42939c96689902d1b6a79bb491da5122dc1ff9e8e7f0478a6728b309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_827c663b42939c96689902d1b6a79bb491da5122dc1ff9e8e7f0478a6728b309->enter($__internal_827c663b42939c96689902d1b6a79bb491da5122dc1ff9e8e7f0478a6728b309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_datetime.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_267ea79eee98939cff2321a04f2c77318cb639b57c0cfd443046f27143063c41->leave($__internal_267ea79eee98939cff2321a04f2c77318cb639b57c0cfd443046f27143063c41_prof);

        
        $__internal_827c663b42939c96689902d1b6a79bb491da5122dc1ff9e8e7f0478a6728b309->leave($__internal_827c663b42939c96689902d1b6a79bb491da5122dc1ff9e8e7f0478a6728b309_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_34deb41b26343888e4c0f98b0a2e3cd374ef986a073744f3aa7f381f1f93b589 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34deb41b26343888e4c0f98b0a2e3cd374ef986a073744f3aa7f381f1f93b589->enter($__internal_34deb41b26343888e4c0f98b0a2e3cd374ef986a073744f3aa7f381f1f93b589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_475f8e9e20f207ed6f8d0cb19128df7aac89a95a40d69f9d71ffa1b2821b019a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_475f8e9e20f207ed6f8d0cb19128df7aac89a95a40d69f9d71ffa1b2821b019a->enter($__internal_475f8e9e20f207ed6f8d0cb19128df7aac89a95a40d69f9d71ffa1b2821b019a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
        }
        
        $__internal_475f8e9e20f207ed6f8d0cb19128df7aac89a95a40d69f9d71ffa1b2821b019a->leave($__internal_475f8e9e20f207ed6f8d0cb19128df7aac89a95a40d69f9d71ffa1b2821b019a_prof);

        
        $__internal_34deb41b26343888e4c0f98b0a2e3cd374ef986a073744f3aa7f381f1f93b589->leave($__internal_34deb41b26343888e4c0f98b0a2e3cd374ef986a073744f3aa7f381f1f93b589_prof);

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
", "@SonataAdmin/CRUD/show_datetime.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_datetime.html.twig");
    }
}
