<?php

/* @SonataAdmin/CRUD/show_html.html.twig */
class __TwigTemplate_5ec377211d7878ba0909ae5a65e75b12397e052508d954d63022331b47d774c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_html.html.twig", 1);
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
        $__internal_6d7b059c635d60149af46b3fb58e7835f8bab15e8e1bced5076ac90cb7f2a6d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d7b059c635d60149af46b3fb58e7835f8bab15e8e1bced5076ac90cb7f2a6d0->enter($__internal_6d7b059c635d60149af46b3fb58e7835f8bab15e8e1bced5076ac90cb7f2a6d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_html.html.twig"));

        $__internal_3553cd827b160cba0340be1fa16b2ed20f2840ab9c67e2064793265884e9a5fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3553cd827b160cba0340be1fa16b2ed20f2840ab9c67e2064793265884e9a5fc->enter($__internal_3553cd827b160cba0340be1fa16b2ed20f2840ab9c67e2064793265884e9a5fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_html.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d7b059c635d60149af46b3fb58e7835f8bab15e8e1bced5076ac90cb7f2a6d0->leave($__internal_6d7b059c635d60149af46b3fb58e7835f8bab15e8e1bced5076ac90cb7f2a6d0_prof);

        
        $__internal_3553cd827b160cba0340be1fa16b2ed20f2840ab9c67e2064793265884e9a5fc->leave($__internal_3553cd827b160cba0340be1fa16b2ed20f2840ab9c67e2064793265884e9a5fc_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_4821543de9096b8f17720ff70c613daee68c2b4517de000b237a1b920315e485 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4821543de9096b8f17720ff70c613daee68c2b4517de000b237a1b920315e485->enter($__internal_4821543de9096b8f17720ff70c613daee68c2b4517de000b237a1b920315e485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_ceaa35c2c6d47a23f3a79e887a3a2f2dc190fec8415fd3d79ab774470ce82f36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceaa35c2c6d47a23f3a79e887a3a2f2dc190fec8415fd3d79ab774470ce82f36->enter($__internal_ceaa35c2c6d47a23f3a79e887a3a2f2dc190fec8415fd3d79ab774470ce82f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_ceaa35c2c6d47a23f3a79e887a3a2f2dc190fec8415fd3d79ab774470ce82f36->leave($__internal_ceaa35c2c6d47a23f3a79e887a3a2f2dc190fec8415fd3d79ab774470ce82f36_prof);

        
        $__internal_4821543de9096b8f17720ff70c613daee68c2b4517de000b237a1b920315e485->leave($__internal_4821543de9096b8f17720ff70c613daee68c2b4517de000b237a1b920315e485_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 19,  77 => 17,  74 => 15,  72 => 14,  68 => 12,  65 => 11,  62 => 10,  59 => 9,  57 => 8,  55 => 7,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field%}
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
", "@SonataAdmin/CRUD/show_html.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_html.html.twig");
    }
}
