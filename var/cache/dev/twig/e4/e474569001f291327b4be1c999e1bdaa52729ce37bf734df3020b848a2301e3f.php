<?php

/* @SonataAdmin/CRUD/show_datetime.html.twig */
class __TwigTemplate_4396e1988b6a43fda665df9785c4aa1fe58f36b62f8957420490d99a2562678a extends Twig_Template
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
        $__internal_2ac64e3ac54c65a6aed2327eb9751a6ab7126a092d5d732d4cdc13f86e7fb066 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ac64e3ac54c65a6aed2327eb9751a6ab7126a092d5d732d4cdc13f86e7fb066->enter($__internal_2ac64e3ac54c65a6aed2327eb9751a6ab7126a092d5d732d4cdc13f86e7fb066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_datetime.html.twig"));

        $__internal_bbcacb20699428c8f8812e61a7aaf89f69045febff9064e7f02e74c64f726daf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbcacb20699428c8f8812e61a7aaf89f69045febff9064e7f02e74c64f726daf->enter($__internal_bbcacb20699428c8f8812e61a7aaf89f69045febff9064e7f02e74c64f726daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_datetime.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ac64e3ac54c65a6aed2327eb9751a6ab7126a092d5d732d4cdc13f86e7fb066->leave($__internal_2ac64e3ac54c65a6aed2327eb9751a6ab7126a092d5d732d4cdc13f86e7fb066_prof);

        
        $__internal_bbcacb20699428c8f8812e61a7aaf89f69045febff9064e7f02e74c64f726daf->leave($__internal_bbcacb20699428c8f8812e61a7aaf89f69045febff9064e7f02e74c64f726daf_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b0f520238b701609c03613b152607a45b113dae4be69fa3b8b493186f856e5c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0f520238b701609c03613b152607a45b113dae4be69fa3b8b493186f856e5c4->enter($__internal_b0f520238b701609c03613b152607a45b113dae4be69fa3b8b493186f856e5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_ab20026577e68393c2ad7ce0a6566f331c40caef7c0fe63630b423e96a9f3cc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab20026577e68393c2ad7ce0a6566f331c40caef7c0fe63630b423e96a9f3cc6->enter($__internal_ab20026577e68393c2ad7ce0a6566f331c40caef7c0fe63630b423e96a9f3cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_ab20026577e68393c2ad7ce0a6566f331c40caef7c0fe63630b423e96a9f3cc6->leave($__internal_ab20026577e68393c2ad7ce0a6566f331c40caef7c0fe63630b423e96a9f3cc6_prof);

        
        $__internal_b0f520238b701609c03613b152607a45b113dae4be69fa3b8b493186f856e5c4->leave($__internal_b0f520238b701609c03613b152607a45b113dae4be69fa3b8b493186f856e5c4_prof);

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
