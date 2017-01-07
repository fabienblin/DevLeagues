<?php

/* @SonataAdmin/CRUD/show_date.html.twig */
class __TwigTemplate_f7b65fc635409275b4ad016460ab3d16b4800b0d7fd8bde1255ab126fed1f264 extends Twig_Template
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
        $__internal_a74a407d51c06c5187099fac9ef7dbe7fe98d52fdcc1a6e16d2276be6e14b163 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a74a407d51c06c5187099fac9ef7dbe7fe98d52fdcc1a6e16d2276be6e14b163->enter($__internal_a74a407d51c06c5187099fac9ef7dbe7fe98d52fdcc1a6e16d2276be6e14b163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_date.html.twig"));

        $__internal_b550290d95e1c6b9530d0e4644a09b1869a4289ffd4685aea49e8b40ae4d493b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b550290d95e1c6b9530d0e4644a09b1869a4289ffd4685aea49e8b40ae4d493b->enter($__internal_b550290d95e1c6b9530d0e4644a09b1869a4289ffd4685aea49e8b40ae4d493b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_date.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a74a407d51c06c5187099fac9ef7dbe7fe98d52fdcc1a6e16d2276be6e14b163->leave($__internal_a74a407d51c06c5187099fac9ef7dbe7fe98d52fdcc1a6e16d2276be6e14b163_prof);

        
        $__internal_b550290d95e1c6b9530d0e4644a09b1869a4289ffd4685aea49e8b40ae4d493b->leave($__internal_b550290d95e1c6b9530d0e4644a09b1869a4289ffd4685aea49e8b40ae4d493b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b867e7405d0aff9a85a070b59be0dc5abab3727a1a30341dcdb69fda7d9ae126 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b867e7405d0aff9a85a070b59be0dc5abab3727a1a30341dcdb69fda7d9ae126->enter($__internal_b867e7405d0aff9a85a070b59be0dc5abab3727a1a30341dcdb69fda7d9ae126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_693afefc03914ef2133a968d9c989b027d131f899f8580cfe7fcde15a010be22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_693afefc03914ef2133a968d9c989b027d131f899f8580cfe7fcde15a010be22->enter($__internal_693afefc03914ef2133a968d9c989b027d131f899f8580cfe7fcde15a010be22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "F j, Y"), "html", null, true);
        }
        
        $__internal_693afefc03914ef2133a968d9c989b027d131f899f8580cfe7fcde15a010be22->leave($__internal_693afefc03914ef2133a968d9c989b027d131f899f8580cfe7fcde15a010be22_prof);

        
        $__internal_b867e7405d0aff9a85a070b59be0dc5abab3727a1a30341dcdb69fda7d9ae126->leave($__internal_b867e7405d0aff9a85a070b59be0dc5abab3727a1a30341dcdb69fda7d9ae126_prof);

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
", "@SonataAdmin/CRUD/show_date.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_date.html.twig");
    }
}
