<?php

/* @SonataAdmin/CRUD/list_time.html.twig */
class __TwigTemplate_3095380cfe0d329926211904dab6a66f54eb868dd1d054a563184836a6a4cedd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31e7014ddc2b867d8d16df4d0be1f492090d033cabdefcfa5b5eee896c76797b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31e7014ddc2b867d8d16df4d0be1f492090d033cabdefcfa5b5eee896c76797b->enter($__internal_31e7014ddc2b867d8d16df4d0be1f492090d033cabdefcfa5b5eee896c76797b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_time.html.twig"));

        $__internal_a2257ec9f183b76dddd6992fb94c139272fb239f5c598152b5cca0d17284f925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2257ec9f183b76dddd6992fb94c139272fb239f5c598152b5cca0d17284f925->enter($__internal_a2257ec9f183b76dddd6992fb94c139272fb239f5c598152b5cca0d17284f925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31e7014ddc2b867d8d16df4d0be1f492090d033cabdefcfa5b5eee896c76797b->leave($__internal_31e7014ddc2b867d8d16df4d0be1f492090d033cabdefcfa5b5eee896c76797b_prof);

        
        $__internal_a2257ec9f183b76dddd6992fb94c139272fb239f5c598152b5cca0d17284f925->leave($__internal_a2257ec9f183b76dddd6992fb94c139272fb239f5c598152b5cca0d17284f925_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_fd28512f6eae8b2db4de934682e4992ca51a59e4b50c6f9f63c5c3af72808cdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd28512f6eae8b2db4de934682e4992ca51a59e4b50c6f9f63c5c3af72808cdc->enter($__internal_fd28512f6eae8b2db4de934682e4992ca51a59e4b50c6f9f63c5c3af72808cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_92d98459715740274f11c2ef66653557b45c52cba8bdd896a4f8d89b44e45714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92d98459715740274f11c2ef66653557b45c52cba8bdd896a4f8d89b44e45714->enter($__internal_92d98459715740274f11c2ef66653557b45c52cba8bdd896a4f8d89b44e45714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_92d98459715740274f11c2ef66653557b45c52cba8bdd896a4f8d89b44e45714->leave($__internal_92d98459715740274f11c2ef66653557b45c52cba8bdd896a4f8d89b44e45714_prof);

        
        $__internal_fd28512f6eae8b2db4de934682e4992ca51a59e4b50c6f9f63c5c3af72808cdc->leave($__internal_fd28512f6eae8b2db4de934682e4992ca51a59e4b50c6f9f63c5c3af72808cdc_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 18,  50 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
", "@SonataAdmin/CRUD/list_time.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_time.html.twig");
    }
}
