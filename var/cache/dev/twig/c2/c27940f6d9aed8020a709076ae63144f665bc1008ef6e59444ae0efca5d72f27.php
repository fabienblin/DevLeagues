<?php

/* @SonataAdmin/CRUD/list_datetime.html.twig */
class __TwigTemplate_82ed81fb4c923bd687f2173df5817e2a72592831ffb84348d064c095cebcc3ca extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_datetime.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_84745973059f55007eff05ef92e5e1358dde9316cd0a4b34fa9c3c449f789435 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84745973059f55007eff05ef92e5e1358dde9316cd0a4b34fa9c3c449f789435->enter($__internal_84745973059f55007eff05ef92e5e1358dde9316cd0a4b34fa9c3c449f789435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_datetime.html.twig"));

        $__internal_9995423599b44f5741747adf6a7acfe6da75e6db26c384901bf8cd5907eff6dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9995423599b44f5741747adf6a7acfe6da75e6db26c384901bf8cd5907eff6dd->enter($__internal_9995423599b44f5741747adf6a7acfe6da75e6db26c384901bf8cd5907eff6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_datetime.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84745973059f55007eff05ef92e5e1358dde9316cd0a4b34fa9c3c449f789435->leave($__internal_84745973059f55007eff05ef92e5e1358dde9316cd0a4b34fa9c3c449f789435_prof);

        
        $__internal_9995423599b44f5741747adf6a7acfe6da75e6db26c384901bf8cd5907eff6dd->leave($__internal_9995423599b44f5741747adf6a7acfe6da75e6db26c384901bf8cd5907eff6dd_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_46d41b6360da02205cefa6f20124642b2c289a204ff1fc0094ff90f7e273049e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46d41b6360da02205cefa6f20124642b2c289a204ff1fc0094ff90f7e273049e->enter($__internal_46d41b6360da02205cefa6f20124642b2c289a204ff1fc0094ff90f7e273049e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_50e4b25ec37464c6b59a1a92e6768b1981350ce2f033f41838d5fafb9d030682 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50e4b25ec37464c6b59a1a92e6768b1981350ce2f033f41838d5fafb9d030682->enter($__internal_50e4b25ec37464c6b59a1a92e6768b1981350ce2f033f41838d5fafb9d030682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute(        // line 17
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            $context["timezone"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "timezone", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "timezone", array())) : (null));
            // line 19
            echo "        ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "format", array()), (isset($context["timezone"]) ? $context["timezone"] : $this->getContext($context, "timezone"))), "html", null, true);
        } elseif ($this->getAttribute($this->getAttribute(        // line 20
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "timezone", array(), "any", true, true)) {
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), null, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "timezone", array())), "html", null, true);
        } else {
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        }
        
        $__internal_50e4b25ec37464c6b59a1a92e6768b1981350ce2f033f41838d5fafb9d030682->leave($__internal_50e4b25ec37464c6b59a1a92e6768b1981350ce2f033f41838d5fafb9d030682_prof);

        
        $__internal_46d41b6360da02205cefa6f20124642b2c289a204ff1fc0094ff90f7e273049e->leave($__internal_46d41b6360da02205cefa6f20124642b2c289a204ff1fc0094ff90f7e273049e_prof);

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
", "@SonataAdmin/CRUD/list_datetime.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_datetime.html.twig");
    }
}
