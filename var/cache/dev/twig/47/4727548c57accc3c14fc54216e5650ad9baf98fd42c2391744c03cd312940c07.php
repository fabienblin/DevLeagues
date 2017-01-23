<?php

/* @SonataAdmin/CRUD/list_date.html.twig */
class __TwigTemplate_970772e4a10f55bc5a14450caff289ea7ccdbe327ad789a0e27e7b88b18003ef extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_date.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d66840a24b59ce62c1d408e6b987af0f64710799da4dde3da02883f0fd037a28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d66840a24b59ce62c1d408e6b987af0f64710799da4dde3da02883f0fd037a28->enter($__internal_d66840a24b59ce62c1d408e6b987af0f64710799da4dde3da02883f0fd037a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_date.html.twig"));

        $__internal_ad812dce7b7b57687e224786d5ffe64bdf16db5b411679c162c3d3b04d67322d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad812dce7b7b57687e224786d5ffe64bdf16db5b411679c162c3d3b04d67322d->enter($__internal_ad812dce7b7b57687e224786d5ffe64bdf16db5b411679c162c3d3b04d67322d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_date.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d66840a24b59ce62c1d408e6b987af0f64710799da4dde3da02883f0fd037a28->leave($__internal_d66840a24b59ce62c1d408e6b987af0f64710799da4dde3da02883f0fd037a28_prof);

        
        $__internal_ad812dce7b7b57687e224786d5ffe64bdf16db5b411679c162c3d3b04d67322d->leave($__internal_ad812dce7b7b57687e224786d5ffe64bdf16db5b411679c162c3d3b04d67322d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_6fdf47fbe8293790d9677a5d4de6606f9597e4a35e4fc6f99c7090ad975198ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fdf47fbe8293790d9677a5d4de6606f9597e4a35e4fc6f99c7090ad975198ab->enter($__internal_6fdf47fbe8293790d9677a5d4de6606f9597e4a35e4fc6f99c7090ad975198ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_745f90d478a375c85cec343c038bbdb22bf9309ece4ffb1a4c207b17804bb955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_745f90d478a375c85cec343c038bbdb22bf9309ece4ffb1a4c207b17804bb955->enter($__internal_745f90d478a375c85cec343c038bbdb22bf9309ece4ffb1a4c207b17804bb955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute(        // line 17
($context["field_description"] ?? null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "format", array())), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "F j, Y"), "html", null, true);
        }
        
        $__internal_745f90d478a375c85cec343c038bbdb22bf9309ece4ffb1a4c207b17804bb955->leave($__internal_745f90d478a375c85cec343c038bbdb22bf9309ece4ffb1a4c207b17804bb955_prof);

        
        $__internal_6fdf47fbe8293790d9677a5d4de6606f9597e4a35e4fc6f99c7090ad975198ab->leave($__internal_6fdf47fbe8293790d9677a5d4de6606f9597e4a35e4fc6f99c7090ad975198ab_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 20,  54 => 18,  52 => 17,  50 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% block field%}
    {%- if value is empty -%}
        &nbsp;
    {%- elseif field_description.options.format is defined -%}
        {{ value|date(field_description.options.format) }}
    {%- else -%}
        {{ value|date('F j, Y') }}
    {%- endif -%}
{% endblock %}
", "@SonataAdmin/CRUD/list_date.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_date.html.twig");
    }
}
