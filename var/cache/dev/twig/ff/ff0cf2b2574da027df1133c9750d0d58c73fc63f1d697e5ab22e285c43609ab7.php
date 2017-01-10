<?php

/* @SonataAdmin/CRUD/show_html.html.twig */
class __TwigTemplate_a85d57239e6430f5f061a99a750f3761e1fe27c8408d77f6fee87a04690f1e0e extends Twig_Template
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
        $__internal_9c2c2a38f98b02bfba313e424cb885f3bea0d348b13cd4569a6c4f26b09042bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c2c2a38f98b02bfba313e424cb885f3bea0d348b13cd4569a6c4f26b09042bb->enter($__internal_9c2c2a38f98b02bfba313e424cb885f3bea0d348b13cd4569a6c4f26b09042bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_html.html.twig"));

        $__internal_992f99a3d89e05c29b51ea708dc86c16340e0fb0fa93b89e848ece6d3b2fc1a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_992f99a3d89e05c29b51ea708dc86c16340e0fb0fa93b89e848ece6d3b2fc1a3->enter($__internal_992f99a3d89e05c29b51ea708dc86c16340e0fb0fa93b89e848ece6d3b2fc1a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_html.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c2c2a38f98b02bfba313e424cb885f3bea0d348b13cd4569a6c4f26b09042bb->leave($__internal_9c2c2a38f98b02bfba313e424cb885f3bea0d348b13cd4569a6c4f26b09042bb_prof);

        
        $__internal_992f99a3d89e05c29b51ea708dc86c16340e0fb0fa93b89e848ece6d3b2fc1a3->leave($__internal_992f99a3d89e05c29b51ea708dc86c16340e0fb0fa93b89e848ece6d3b2fc1a3_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_3f2e2fa709eec7190aec40569ade9e39e243445ff6786931af9a290dc2969d15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f2e2fa709eec7190aec40569ade9e39e243445ff6786931af9a290dc2969d15->enter($__internal_3f2e2fa709eec7190aec40569ade9e39e243445ff6786931af9a290dc2969d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_13925d0676e5a78db86afc6a34a2bd6ceaa277ccc9dabbea243d66c56f8b1eda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13925d0676e5a78db86afc6a34a2bd6ceaa277ccc9dabbea243d66c56f8b1eda->enter($__internal_13925d0676e5a78db86afc6a34a2bd6ceaa277ccc9dabbea243d66c56f8b1eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_13925d0676e5a78db86afc6a34a2bd6ceaa277ccc9dabbea243d66c56f8b1eda->leave($__internal_13925d0676e5a78db86afc6a34a2bd6ceaa277ccc9dabbea243d66c56f8b1eda_prof);

        
        $__internal_3f2e2fa709eec7190aec40569ade9e39e243445ff6786931af9a290dc2969d15->leave($__internal_3f2e2fa709eec7190aec40569ade9e39e243445ff6786931af9a290dc2969d15_prof);

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
