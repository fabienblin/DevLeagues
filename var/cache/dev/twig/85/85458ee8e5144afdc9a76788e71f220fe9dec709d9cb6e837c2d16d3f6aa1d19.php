<?php

/* @SonataAdmin/CRUD/show_html.html.twig */
class __TwigTemplate_ab322583c1b64d2e33f4afceb9c9f2dd97279e8ae682d6de77a8f2320884855c extends Twig_Template
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
        $__internal_bd790ff1837e3dbc15b9d481d75c86f0f546265b7be57c2180693f69b33406ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd790ff1837e3dbc15b9d481d75c86f0f546265b7be57c2180693f69b33406ed->enter($__internal_bd790ff1837e3dbc15b9d481d75c86f0f546265b7be57c2180693f69b33406ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_html.html.twig"));

        $__internal_56ce08da597f810ee7c72e1501693d82e12fae1fc38f756958a7b06b7cce5cfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56ce08da597f810ee7c72e1501693d82e12fae1fc38f756958a7b06b7cce5cfa->enter($__internal_56ce08da597f810ee7c72e1501693d82e12fae1fc38f756958a7b06b7cce5cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_html.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd790ff1837e3dbc15b9d481d75c86f0f546265b7be57c2180693f69b33406ed->leave($__internal_bd790ff1837e3dbc15b9d481d75c86f0f546265b7be57c2180693f69b33406ed_prof);

        
        $__internal_56ce08da597f810ee7c72e1501693d82e12fae1fc38f756958a7b06b7cce5cfa->leave($__internal_56ce08da597f810ee7c72e1501693d82e12fae1fc38f756958a7b06b7cce5cfa_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_bea571b9e008f3888b40ea48c7b9bac9704e8eb6efd5760489e7852a2053388e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bea571b9e008f3888b40ea48c7b9bac9704e8eb6efd5760489e7852a2053388e->enter($__internal_bea571b9e008f3888b40ea48c7b9bac9704e8eb6efd5760489e7852a2053388e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_dabab2edce0d1744c49a564aced98b7c82adde6c4d4647ba21ccd1983eef0dbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dabab2edce0d1744c49a564aced98b7c82adde6c4d4647ba21ccd1983eef0dbf->enter($__internal_dabab2edce0d1744c49a564aced98b7c82adde6c4d4647ba21ccd1983eef0dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        if (twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            // line 5
            echo "&nbsp;
    ";
        } else {
            // line 7
            if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "truncate", array(), "any", true, true)) {
                // line 8
                $context["truncate"] = $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "truncate", array());
                // line 9
                echo "            ";
                $context["length"] = (($this->getAttribute(($context["truncate"] ?? null), "length", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["truncate"] ?? null), "length", array()), 30)) : (30));
                // line 10
                echo "            ";
                $context["preserve"] = (($this->getAttribute(($context["truncate"] ?? null), "preserve", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["truncate"] ?? null), "preserve", array()), false)) : (false));
                // line 11
                echo "            ";
                $context["separator"] = (($this->getAttribute(($context["truncate"] ?? null), "separator", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["truncate"] ?? null), "separator", array()), "...")) : ("..."));
                // line 12
                echo "            ";
                echo twig_truncate_filter($this->env, strip_tags(($context["value"] ?? $this->getContext($context, "value"))), ($context["length"] ?? $this->getContext($context, "length")), ($context["preserve"] ?? $this->getContext($context, "preserve")), ($context["separator"] ?? $this->getContext($context, "separator")));
            } else {
                // line 14
                if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "strip", array(), "any", true, true)) {
                    // line 15
                    $context["value"] = strip_tags(($context["value"] ?? $this->getContext($context, "value")));
                }
                // line 17
                echo ($context["value"] ?? $this->getContext($context, "value"));
                echo "
        ";
            }
            // line 19
            echo "    ";
        }
        
        $__internal_dabab2edce0d1744c49a564aced98b7c82adde6c4d4647ba21ccd1983eef0dbf->leave($__internal_dabab2edce0d1744c49a564aced98b7c82adde6c4d4647ba21ccd1983eef0dbf_prof);

        
        $__internal_bea571b9e008f3888b40ea48c7b9bac9704e8eb6efd5760489e7852a2053388e->leave($__internal_bea571b9e008f3888b40ea48c7b9bac9704e8eb6efd5760489e7852a2053388e_prof);

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
", "@SonataAdmin/CRUD/show_html.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_html.html.twig");
    }
}
