<?php

/* @SonataAdmin/CRUD/show_url.html.twig */
class __TwigTemplate_5d470165adfb783ebfffd415b62ee63f732bf84711cf391df6cf89b370284e6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_url.html.twig", 12);
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
        $__internal_dfadb5303debbadf2958b25b562d74fbe61877f435fe52ae9f3c67e2c316a230 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfadb5303debbadf2958b25b562d74fbe61877f435fe52ae9f3c67e2c316a230->enter($__internal_dfadb5303debbadf2958b25b562d74fbe61877f435fe52ae9f3c67e2c316a230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_url.html.twig"));

        $__internal_c32112e587824d56b816ad14d07d76664a2db16cd4263ac529c5c9891f15fd4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c32112e587824d56b816ad14d07d76664a2db16cd4263ac529c5c9891f15fd4f->enter($__internal_c32112e587824d56b816ad14d07d76664a2db16cd4263ac529c5c9891f15fd4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_url.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfadb5303debbadf2958b25b562d74fbe61877f435fe52ae9f3c67e2c316a230->leave($__internal_dfadb5303debbadf2958b25b562d74fbe61877f435fe52ae9f3c67e2c316a230_prof);

        
        $__internal_c32112e587824d56b816ad14d07d76664a2db16cd4263ac529c5c9891f15fd4f->leave($__internal_c32112e587824d56b816ad14d07d76664a2db16cd4263ac529c5c9891f15fd4f_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f7d01ad6d66da270a5c9fdf335cb8b2ff17f505491d5701e21c306e878beef70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7d01ad6d66da270a5c9fdf335cb8b2ff17f505491d5701e21c306e878beef70->enter($__internal_f7d01ad6d66da270a5c9fdf335cb8b2ff17f505491d5701e21c306e878beef70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_5513d9bf6df7169f2d8ca733a3bb3fc94946ceb40f5f4e63ff0afbf97e563f6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5513d9bf6df7169f2d8ca733a3bb3fc94946ceb40f5f4e63ff0afbf97e563f6c->enter($__internal_5513d9bf6df7169f2d8ca733a3bb3fc94946ceb40f5f4e63ff0afbf97e563f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        ob_start();
        // line 16
        echo "    ";
        if (twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            // line 17
            echo "        &nbsp;
    ";
        } else {
            // line 19
            echo "        ";
            if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "url", array(), "any", true, true)) {
                // line 20
                echo "            ";
                // line 21
                echo "            ";
                $context["url_address"] = $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "url", array());
                // line 22
                echo "        ";
            } elseif (($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "route", array(), "any", true, true) && !twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array()), array(0 => "edit", 1 => "show")))) {
                // line 23
                echo "            ";
                // line 24
                echo "            ";
                $context["parameters"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "route", array(), "any", false, true), "parameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "route", array(), "any", false, true), "parameters", array()), array())) : (array()));
                // line 25
                echo "
            ";
                // line 27
                echo "            ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "route", array(), "any", false, true), "identifier_parameter_name", array(), "any", true, true)) {
                    // line 28
                    echo "                ";
                    $context["parameters"] = twig_array_merge(($context["parameters"] ?? $this->getContext($context, "parameters")), array($this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "identifier_parameter_name", array()) => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "normalizedidentifier", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method")));
                    // line 29
                    echo "            ";
                }
                // line 30
                echo "
            ";
                // line 31
                if ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "route", array(), "any", false, true), "absolute", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "route", array(), "any", false, true), "absolute", array()), false)) : (false))) {
                    // line 32
                    echo "                ";
                    $context["url_address"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array()), ($context["parameters"] ?? $this->getContext($context, "parameters")));
                    // line 33
                    echo "            ";
                } else {
                    // line 34
                    echo "                ";
                    $context["url_address"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array()), ($context["parameters"] ?? $this->getContext($context, "parameters")));
                    // line 35
                    echo "            ";
                }
                // line 36
                echo "        ";
            } else {
                // line 37
                echo "            ";
                // line 38
                echo "            ";
                $context["url_address"] = ($context["value"] ?? $this->getContext($context, "value"));
                // line 39
                echo "        ";
            }
            // line 40
            echo "
        ";
            // line 41
            if ((($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "hide_protocol", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "hide_protocol", array()), false)) : (false))) {
                // line 42
                echo "            ";
                $context["value"] = twig_replace_filter(($context["value"] ?? $this->getContext($context, "value")), array("http://" => "", "https://" => ""));
                // line 43
                echo "        ";
            }
            // line 44
            echo "
        <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, ($context["url_address"] ?? $this->getContext($context, "url_address")), "html", null, true);
            echo "\">";
            // line 46
            if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
                // line 47
                echo ($context["value"] ?? $this->getContext($context, "value"));
            } else {
                // line 49
                echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            }
            // line 51
            echo "</a>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5513d9bf6df7169f2d8ca733a3bb3fc94946ceb40f5f4e63ff0afbf97e563f6c->leave($__internal_5513d9bf6df7169f2d8ca733a3bb3fc94946ceb40f5f4e63ff0afbf97e563f6c_prof);

        
        $__internal_f7d01ad6d66da270a5c9fdf335cb8b2ff17f505491d5701e21c306e878beef70->leave($__internal_f7d01ad6d66da270a5c9fdf335cb8b2ff17f505491d5701e21c306e878beef70_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_url.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 51,  136 => 49,  133 => 47,  131 => 46,  128 => 45,  125 => 44,  122 => 43,  119 => 42,  117 => 41,  114 => 40,  111 => 39,  108 => 38,  106 => 37,  103 => 36,  100 => 35,  97 => 34,  94 => 33,  91 => 32,  89 => 31,  86 => 30,  83 => 29,  80 => 28,  77 => 27,  74 => 25,  71 => 24,  69 => 23,  66 => 22,  63 => 21,  61 => 20,  58 => 19,  54 => 17,  51 => 16,  49 => 15,  40 => 14,  11 => 12,);
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
{% spaceless %}
    {% if value is empty %}
        &nbsp;
    {% else %}
        {% if field_description.options.url is defined %}
            {# target url is string #}
            {% set url_address = field_description.options.url %}
        {% elseif field_description.options.route is defined and field_description.options.route.name not in ['edit', 'show'] %}
            {# target url is Symfony route #}
            {% set parameters = field_description.options.route.parameters|default([]) %}

            {# route with paramter related to object ID #}
            {% if field_description.options.route.identifier_parameter_name is defined %}
                {% set parameters = parameters|merge({(field_description.options.route.identifier_parameter_name):(admin.normalizedidentifier(object))}) %}
            {% endif %}

            {% if field_description.options.route.absolute|default(false) %}
                {% set url_address = url(field_description.options.route.name, parameters) %}
            {% else %}
                {% set url_address = path(field_description.options.route.name, parameters) %}
            {% endif %}
        {% else %}
            {# value is url #}
            {% set url_address = value %}
        {% endif %}

        {% if field_description.options.hide_protocol|default(false) %}
            {% set value = value|replace({'http://': '', 'https://': ''}) %}
        {% endif %}

        <a href=\"{{ url_address }}\">
            {%- if field_description.options.safe -%}
                {{- value|raw -}}
            {%- else -%}
                {{- value -}}
            {%- endif -%}
        </a>
    {% endif %}
{% endspaceless %}
{% endblock %}
", "@SonataAdmin/CRUD/show_url.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_url.html.twig");
    }
}
