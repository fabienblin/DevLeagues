<?php

/* @SonataAdmin/CRUD/list_datetime.html.twig */
class __TwigTemplate_a673c5bdffd5a71582a21ea3141a4da1ff5615f7fb8130d6b76b08f234326ce6 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_datetime.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad74535890b43941a146be3420ad8ec2f5d3c4d0ad5a884fb851fb3cb36adfb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad74535890b43941a146be3420ad8ec2f5d3c4d0ad5a884fb851fb3cb36adfb1->enter($__internal_ad74535890b43941a146be3420ad8ec2f5d3c4d0ad5a884fb851fb3cb36adfb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_datetime.html.twig"));

        $__internal_3b1836c5ac0cbd79970428808c5a36cdaeb856ec7ccdeb090703d7655aa0467d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b1836c5ac0cbd79970428808c5a36cdaeb856ec7ccdeb090703d7655aa0467d->enter($__internal_3b1836c5ac0cbd79970428808c5a36cdaeb856ec7ccdeb090703d7655aa0467d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_datetime.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad74535890b43941a146be3420ad8ec2f5d3c4d0ad5a884fb851fb3cb36adfb1->leave($__internal_ad74535890b43941a146be3420ad8ec2f5d3c4d0ad5a884fb851fb3cb36adfb1_prof);

        
        $__internal_3b1836c5ac0cbd79970428808c5a36cdaeb856ec7ccdeb090703d7655aa0467d->leave($__internal_3b1836c5ac0cbd79970428808c5a36cdaeb856ec7ccdeb090703d7655aa0467d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_cc323949424699959629254c6e8211cbe56af0bbd2c10bd35ffcfc357099f82f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc323949424699959629254c6e8211cbe56af0bbd2c10bd35ffcfc357099f82f->enter($__internal_cc323949424699959629254c6e8211cbe56af0bbd2c10bd35ffcfc357099f82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_55fccd5b6f68a6d3b034f7b0b5cf647d5da1c66aa9acfe41325d96e7ef6a0a17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55fccd5b6f68a6d3b034f7b0b5cf647d5da1c66aa9acfe41325d96e7ef6a0a17->enter($__internal_55fccd5b6f68a6d3b034f7b0b5cf647d5da1c66aa9acfe41325d96e7ef6a0a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute(        // line 17
($context["field_description"] ?? null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            $context["timezone"] = (($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "timezone", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "timezone", array())) : (null));
            // line 19
            echo "        ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "format", array()), ($context["timezone"] ?? $this->getContext($context, "timezone"))), "html", null, true);
        } elseif ($this->getAttribute($this->getAttribute(        // line 20
($context["field_description"] ?? null), "options", array(), "any", false, true), "timezone", array(), "any", true, true)) {
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), null, $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "timezone", array())), "html", null, true);
        } else {
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value"))), "html", null, true);
        }
        
        $__internal_55fccd5b6f68a6d3b034f7b0b5cf647d5da1c66aa9acfe41325d96e7ef6a0a17->leave($__internal_55fccd5b6f68a6d3b034f7b0b5cf647d5da1c66aa9acfe41325d96e7ef6a0a17_prof);

        
        $__internal_cc323949424699959629254c6e8211cbe56af0bbd2c10bd35ffcfc357099f82f->leave($__internal_cc323949424699959629254c6e8211cbe56af0bbd2c10bd35ffcfc357099f82f_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 23,  61 => 21,  59 => 20,  56 => 19,  54 => 18,  52 => 17,  50 => 16,  48 => 15,  39 => 14,  18 => 12,);
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
    {%- elseif field_description.options.format is defined -%}
        {% set timezone = field_description.options.timezone is defined ? field_description.options.timezone : null %}
        {{ value|date(field_description.options.format, timezone) }}
    {%- elseif field_description.options.timezone is defined -%}
        {{ value|date(null, field_description.options.timezone) }}
    {%- else -%}
        {{ value|date }}
    {%- endif -%}
{% endblock %}
", "@SonataAdmin/CRUD/list_datetime.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_datetime.html.twig");
    }
}
