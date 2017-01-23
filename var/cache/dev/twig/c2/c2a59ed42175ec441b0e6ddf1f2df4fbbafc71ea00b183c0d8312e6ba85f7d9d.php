<?php

/* @SonataAdmin/CRUD/list_url.html.twig */
class __TwigTemplate_a9ddf78dbb8e05bc742889840d0e06795ed73683e143ec1e27c0f1915b65da6c extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_url.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d6c247f7124e2a550ada12477514bbbfac89e5210b2c83eed1f19371affa480 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d6c247f7124e2a550ada12477514bbbfac89e5210b2c83eed1f19371affa480->enter($__internal_7d6c247f7124e2a550ada12477514bbbfac89e5210b2c83eed1f19371affa480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_url.html.twig"));

        $__internal_add235a8f410d10f4169fa0d4b06179dc3f54d5e88e8b6f07d7d6a9b5de77ab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_add235a8f410d10f4169fa0d4b06179dc3f54d5e88e8b6f07d7d6a9b5de77ab9->enter($__internal_add235a8f410d10f4169fa0d4b06179dc3f54d5e88e8b6f07d7d6a9b5de77ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_url.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d6c247f7124e2a550ada12477514bbbfac89e5210b2c83eed1f19371affa480->leave($__internal_7d6c247f7124e2a550ada12477514bbbfac89e5210b2c83eed1f19371affa480_prof);

        
        $__internal_add235a8f410d10f4169fa0d4b06179dc3f54d5e88e8b6f07d7d6a9b5de77ab9->leave($__internal_add235a8f410d10f4169fa0d4b06179dc3f54d5e88e8b6f07d7d6a9b5de77ab9_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_717f091692c2f98cbc53147e65c29f3302cf9e30dff1f3272815bfa296c1a6f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_717f091692c2f98cbc53147e65c29f3302cf9e30dff1f3272815bfa296c1a6f7->enter($__internal_717f091692c2f98cbc53147e65c29f3302cf9e30dff1f3272815bfa296c1a6f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_429582d86368d6333f60c9d1308e7bffc6b2fab2dbad0dbcdb393d0948cd9f20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_429582d86368d6333f60c9d1308e7bffc6b2fab2dbad0dbcdb393d0948cd9f20->enter($__internal_429582d86368d6333f60c9d1308e7bffc6b2fab2dbad0dbcdb393d0948cd9f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "</a>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_429582d86368d6333f60c9d1308e7bffc6b2fab2dbad0dbcdb393d0948cd9f20->leave($__internal_429582d86368d6333f60c9d1308e7bffc6b2fab2dbad0dbcdb393d0948cd9f20_prof);

        
        $__internal_717f091692c2f98cbc53147e65c29f3302cf9e30dff1f3272815bfa296c1a6f7->leave($__internal_717f091692c2f98cbc53147e65c29f3302cf9e30dff1f3272815bfa296c1a6f7_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_url.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 45,  124 => 44,  121 => 43,  118 => 42,  116 => 41,  113 => 40,  110 => 39,  107 => 38,  105 => 37,  102 => 36,  99 => 35,  96 => 34,  93 => 33,  90 => 32,  88 => 31,  85 => 30,  82 => 29,  79 => 28,  76 => 27,  73 => 25,  70 => 24,  68 => 23,  65 => 22,  62 => 21,  60 => 20,  57 => 19,  53 => 17,  50 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

        <a href=\"{{ url_address }}\">{{ value }}</a>
    {% endif %}
{% endspaceless %}
{% endblock %}
", "@SonataAdmin/CRUD/list_url.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_url.html.twig");
    }
}
