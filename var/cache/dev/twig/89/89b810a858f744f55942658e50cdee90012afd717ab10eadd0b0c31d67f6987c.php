<?php

/* @SonataAdmin/CRUD/list_html.html.twig */
class __TwigTemplate_eab8209d47c22d8b3ef78cacc060ba8e7a3105a58c2e34d5eae5523d984b6c4b extends Twig_Template
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
        // line 1
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_html.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83a1c1ce1b682b0becea74194732abc6350793b1a1b5a7bcef9d465da495c93d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83a1c1ce1b682b0becea74194732abc6350793b1a1b5a7bcef9d465da495c93d->enter($__internal_83a1c1ce1b682b0becea74194732abc6350793b1a1b5a7bcef9d465da495c93d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_html.html.twig"));

        $__internal_733d897e2b06311f9457347436bbb791579c521a0ed3115e26bb59d4c8b38cb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_733d897e2b06311f9457347436bbb791579c521a0ed3115e26bb59d4c8b38cb8->enter($__internal_733d897e2b06311f9457347436bbb791579c521a0ed3115e26bb59d4c8b38cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_html.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83a1c1ce1b682b0becea74194732abc6350793b1a1b5a7bcef9d465da495c93d->leave($__internal_83a1c1ce1b682b0becea74194732abc6350793b1a1b5a7bcef9d465da495c93d_prof);

        
        $__internal_733d897e2b06311f9457347436bbb791579c521a0ed3115e26bb59d4c8b38cb8->leave($__internal_733d897e2b06311f9457347436bbb791579c521a0ed3115e26bb59d4c8b38cb8_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_40a51cfcd18047005c3c53261bc95df95c9a63c8312c711d7850347a4c8106da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40a51cfcd18047005c3c53261bc95df95c9a63c8312c711d7850347a4c8106da->enter($__internal_40a51cfcd18047005c3c53261bc95df95c9a63c8312c711d7850347a4c8106da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_f03563b0d32eb68454a84aa3e416b72aec65b7dd947c85805e2cd975d42c78e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f03563b0d32eb68454a84aa3e416b72aec65b7dd947c85805e2cd975d42c78e9->enter($__internal_f03563b0d32eb68454a84aa3e416b72aec65b7dd947c85805e2cd975d42c78e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 5
            echo "&nbsp;
    ";
        } else {
            // line 7
            if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "truncate", array(), "any", true, true)) {
                // line 8
                $context["truncate"] = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "truncate", array());
                // line 9
                echo "            ";
                $context["length"] = (($this->getAttribute((isset($context["truncate"]) ? $context["truncate"] : null), "length", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["truncate"]) ? $context["truncate"] : null), "length", array()), 30)) : (30));
                // line 10
                echo "            ";
                $context["preserve"] = (($this->getAttribute((isset($context["truncate"]) ? $context["truncate"] : null), "preserve", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["truncate"]) ? $context["truncate"] : null), "preserve", array()), false)) : (false));
                // line 11
                echo "            ";
                $context["separator"] = (($this->getAttribute((isset($context["truncate"]) ? $context["truncate"] : null), "separator", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["truncate"]) ? $context["truncate"] : null), "separator", array()), "...")) : ("..."));
                // line 12
                echo "            ";
                echo twig_truncate_filter($this->env, strip_tags((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), (isset($context["length"]) ? $context["length"] : $this->getContext($context, "length")), (isset($context["preserve"]) ? $context["preserve"] : $this->getContext($context, "preserve")), (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")));
            } else {
                // line 14
                if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "strip", array(), "any", true, true)) {
                    // line 15
                    $context["value"] = strip_tags((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
                }
                // line 17
                echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
                echo "
        ";
            }
            // line 19
            echo "    ";
        }
        
        $__internal_f03563b0d32eb68454a84aa3e416b72aec65b7dd947c85805e2cd975d42c78e9->leave($__internal_f03563b0d32eb68454a84aa3e416b72aec65b7dd947c85805e2cd975d42c78e9_prof);

        
        $__internal_40a51cfcd18047005c3c53261bc95df95c9a63c8312c711d7850347a4c8106da->leave($__internal_40a51cfcd18047005c3c53261bc95df95c9a63c8312c711d7850347a4c8106da_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 19,  76 => 17,  73 => 15,  71 => 14,  67 => 12,  64 => 11,  61 => 10,  58 => 9,  56 => 8,  54 => 7,  50 => 5,  48 => 4,  39 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {% else %}
        {%- if field_description.options.truncate is defined -%}
            {% set truncate = field_description.options.truncate %}
            {% set length = truncate.length|default(30) %}
            {% set preserve = truncate.preserve|default(false) %}
            {% set separator = truncate.separator|default('...') %}
            {{ value|striptags|truncate(length, preserve, separator)|raw }}
        {%- else -%}
            {%- if field_description.options.strip is defined -%}
                {% set value = value|striptags %}
            {%- endif -%}
            {{ value|raw }}
        {% endif %}
    {% endif %}
{% endblock %}
", "@SonataAdmin/CRUD/list_html.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_html.html.twig");
    }
}
