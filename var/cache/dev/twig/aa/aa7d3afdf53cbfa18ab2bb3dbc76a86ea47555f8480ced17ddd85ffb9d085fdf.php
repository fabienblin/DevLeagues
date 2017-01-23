<?php

/* @SonataAdmin/CRUD/list_html.html.twig */
class __TwigTemplate_11da8676bc49e1442f76463b847aaae50ee7592bd285879b0083efa47d427c03 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_html.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e1641156b8746c46fc290ad4c77103661101979e2ebac1b6ad5dfd0e51c2740 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e1641156b8746c46fc290ad4c77103661101979e2ebac1b6ad5dfd0e51c2740->enter($__internal_9e1641156b8746c46fc290ad4c77103661101979e2ebac1b6ad5dfd0e51c2740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_html.html.twig"));

        $__internal_be06585b4700bd55380c773bd7eafbb594f368f238ea23e6bc418ea32d5e2fbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be06585b4700bd55380c773bd7eafbb594f368f238ea23e6bc418ea32d5e2fbb->enter($__internal_be06585b4700bd55380c773bd7eafbb594f368f238ea23e6bc418ea32d5e2fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_html.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e1641156b8746c46fc290ad4c77103661101979e2ebac1b6ad5dfd0e51c2740->leave($__internal_9e1641156b8746c46fc290ad4c77103661101979e2ebac1b6ad5dfd0e51c2740_prof);

        
        $__internal_be06585b4700bd55380c773bd7eafbb594f368f238ea23e6bc418ea32d5e2fbb->leave($__internal_be06585b4700bd55380c773bd7eafbb594f368f238ea23e6bc418ea32d5e2fbb_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_192645ce33505c7714372936617d921c6fe3a60f38b49479a313b878e798842d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_192645ce33505c7714372936617d921c6fe3a60f38b49479a313b878e798842d->enter($__internal_192645ce33505c7714372936617d921c6fe3a60f38b49479a313b878e798842d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_5341db9d7fdd7997181fcf00d3b2cffe32731e5be7185d3ec220cb80b77b669b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5341db9d7fdd7997181fcf00d3b2cffe32731e5be7185d3ec220cb80b77b669b->enter($__internal_5341db9d7fdd7997181fcf00d3b2cffe32731e5be7185d3ec220cb80b77b669b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_5341db9d7fdd7997181fcf00d3b2cffe32731e5be7185d3ec220cb80b77b669b->leave($__internal_5341db9d7fdd7997181fcf00d3b2cffe32731e5be7185d3ec220cb80b77b669b_prof);

        
        $__internal_192645ce33505c7714372936617d921c6fe3a60f38b49479a313b878e798842d->leave($__internal_192645ce33505c7714372936617d921c6fe3a60f38b49479a313b878e798842d_prof);

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
", "@SonataAdmin/CRUD/list_html.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_html.html.twig");
    }
}
