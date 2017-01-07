<?php

/* @SonataAdmin/CRUD/list_date.html.twig */
class __TwigTemplate_75220fd2a3d2c16f13a84d1332f4d31a067c1145650bda0859367757dad55be5 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_date.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c1ea020d7c5be0fccadabbe76d98ae58e4219e86f76d1b19371645a9611d6b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c1ea020d7c5be0fccadabbe76d98ae58e4219e86f76d1b19371645a9611d6b5->enter($__internal_7c1ea020d7c5be0fccadabbe76d98ae58e4219e86f76d1b19371645a9611d6b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_date.html.twig"));

        $__internal_7aa90913a9072e57eb6c8097f16ff1f706469cb3f1522075c38fc9f61d36f79d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aa90913a9072e57eb6c8097f16ff1f706469cb3f1522075c38fc9f61d36f79d->enter($__internal_7aa90913a9072e57eb6c8097f16ff1f706469cb3f1522075c38fc9f61d36f79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_date.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c1ea020d7c5be0fccadabbe76d98ae58e4219e86f76d1b19371645a9611d6b5->leave($__internal_7c1ea020d7c5be0fccadabbe76d98ae58e4219e86f76d1b19371645a9611d6b5_prof);

        
        $__internal_7aa90913a9072e57eb6c8097f16ff1f706469cb3f1522075c38fc9f61d36f79d->leave($__internal_7aa90913a9072e57eb6c8097f16ff1f706469cb3f1522075c38fc9f61d36f79d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d00e147a05565c2c4583f71bcd8f90216b14153a0281372bb647c50b7d05eb3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d00e147a05565c2c4583f71bcd8f90216b14153a0281372bb647c50b7d05eb3a->enter($__internal_d00e147a05565c2c4583f71bcd8f90216b14153a0281372bb647c50b7d05eb3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_e9b7269466c5418233e3b66983fa6d8df70addf8b8326fa4ab6c99823fb11160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9b7269466c5418233e3b66983fa6d8df70addf8b8326fa4ab6c99823fb11160->enter($__internal_e9b7269466c5418233e3b66983fa6d8df70addf8b8326fa4ab6c99823fb11160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute(        // line 17
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "format", array())), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "F j, Y"), "html", null, true);
        }
        
        $__internal_e9b7269466c5418233e3b66983fa6d8df70addf8b8326fa4ab6c99823fb11160->leave($__internal_e9b7269466c5418233e3b66983fa6d8df70addf8b8326fa4ab6c99823fb11160_prof);

        
        $__internal_d00e147a05565c2c4583f71bcd8f90216b14153a0281372bb647c50b7d05eb3a->leave($__internal_d00e147a05565c2c4583f71bcd8f90216b14153a0281372bb647c50b7d05eb3a_prof);

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
", "@SonataAdmin/CRUD/list_date.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_date.html.twig");
    }
}
