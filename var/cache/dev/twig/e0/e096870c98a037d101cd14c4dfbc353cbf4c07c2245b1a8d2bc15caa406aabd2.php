<?php

/* @SonataAdmin/CRUD/_email_link.html.twig */
class __TwigTemplate_c796a8a8f9dcd3648360fe5fdcba3f786448843d6f64c0206cc1877cd63b7223 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95a17042c612cdf14a26ec7dafe25848a90705802fc8bc902e319ab5c52b8497 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95a17042c612cdf14a26ec7dafe25848a90705802fc8bc902e319ab5c52b8497->enter($__internal_95a17042c612cdf14a26ec7dafe25848a90705802fc8bc902e319ab5c52b8497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/_email_link.html.twig"));

        $__internal_d30f65efd33f674f12a90cd4b205e6c5a8c7dd230efaa8c7751a0e0c879dbe9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d30f65efd33f674f12a90cd4b205e6c5a8c7dd230efaa8c7751a0e0c879dbe9a->enter($__internal_d30f65efd33f674f12a90cd4b205e6c5a8c7dd230efaa8c7751a0e0c879dbe9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/_email_link.html.twig"));

        // line 2
        if (twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            // line 3
            echo "&nbsp;";
        } elseif (($this->getAttribute($this->getAttribute(        // line 4
($context["field_description"] ?? null), "options", array(), "any", false, true), "as_string", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "as_string", array()))) {
            // line 5
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        } else {
            // line 7
            $context["parameters"] = array();
            // line 8
            echo "    ";
            $context["subject"] = (($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "subject", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "subject", array()), "")) : (""));
            // line 9
            echo "    ";
            $context["body"] = (($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "body", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "body", array()), "")) : (""));
            // line 10
            echo "
    ";
            // line 11
            if ( !twig_test_empty(($context["subject"] ?? $this->getContext($context, "subject")))) {
                // line 12
                echo "        ";
                $context["parameters"] = twig_array_merge(($context["parameters"] ?? $this->getContext($context, "parameters")), array("subject" => ($context["subject"] ?? $this->getContext($context, "subject"))));
                // line 13
                echo "    ";
            }
            // line 14
            echo "    ";
            if ( !twig_test_empty(($context["body"] ?? $this->getContext($context, "body")))) {
                // line 15
                echo "        ";
                $context["parameters"] = twig_array_merge(($context["parameters"] ?? $this->getContext($context, "parameters")), array("body" => ($context["body"] ?? $this->getContext($context, "body"))));
                // line 16
                echo "    ";
            }
            // line 17
            echo "
    <a href=\"mailto:";
            // line 18
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            if ((twig_length_filter($this->env, ($context["parameters"] ?? $this->getContext($context, "parameters"))) > 0)) {
                echo "?";
                echo twig_escape_filter($this->env, twig_urlencode_filter(($context["parameters"] ?? $this->getContext($context, "parameters"))), "html", null, true);
            }
            echo "\">";
            // line 19
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            // line 20
            echo "</a>";
        }
        
        $__internal_95a17042c612cdf14a26ec7dafe25848a90705802fc8bc902e319ab5c52b8497->leave($__internal_95a17042c612cdf14a26ec7dafe25848a90705802fc8bc902e319ab5c52b8497_prof);

        
        $__internal_d30f65efd33f674f12a90cd4b205e6c5a8c7dd230efaa8c7751a0e0c879dbe9a->leave($__internal_d30f65efd33f674f12a90cd4b205e6c5a8c7dd230efaa8c7751a0e0c879dbe9a_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/_email_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 20,  72 => 19,  65 => 18,  62 => 17,  59 => 16,  56 => 15,  53 => 14,  50 => 13,  47 => 12,  45 => 11,  42 => 10,  39 => 9,  36 => 8,  34 => 7,  31 => 5,  29 => 4,  27 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{%- if value is empty -%}
    &nbsp;
{%- elseif field_description.options.as_string is defined and field_description.options.as_string -%}
    {{ value }}
{%- else -%}
    {% set parameters = {} %}
    {% set subject = field_description.options.subject|default('') %}
    {% set body = field_description.options.body|default('') %}

    {% if subject is not empty %}
        {% set parameters = parameters|merge({'subject': subject}) %}
    {% endif %}
    {% if body is not empty %}
        {% set parameters = parameters|merge({'body': body}) %}
    {% endif %}

    <a href=\"mailto:{{ value }}{% if parameters|length > 0 %}?{{- parameters|url_encode -}}{% endif %}\">
        {{- value -}}
    </a>
{%- endif -%}
", "@SonataAdmin/CRUD/_email_link.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/_email_link.html.twig");
    }
}
