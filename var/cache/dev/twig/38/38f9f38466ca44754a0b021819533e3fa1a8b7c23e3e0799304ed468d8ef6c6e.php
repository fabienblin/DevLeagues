<?php

/* @SonataAdmin/CRUD/show_trans.html.twig */
class __TwigTemplate_5c4caff5e9445d78c5a839aa4dc0e3fa48c039c1adfe255e9544d3a051166e1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_trans.html.twig", 11);
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
        $__internal_9f5539a48f364fa9f2e746d2f81fbeadf765137323383afa007362a0cdf6333e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f5539a48f364fa9f2e746d2f81fbeadf765137323383afa007362a0cdf6333e->enter($__internal_9f5539a48f364fa9f2e746d2f81fbeadf765137323383afa007362a0cdf6333e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_trans.html.twig"));

        $__internal_da0c761f31f7046408c3a2daf8998a69a39822d0e2d6970cfe2bb4cc4f42e289 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da0c761f31f7046408c3a2daf8998a69a39822d0e2d6970cfe2bb4cc4f42e289->enter($__internal_da0c761f31f7046408c3a2daf8998a69a39822d0e2d6970cfe2bb4cc4f42e289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_trans.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f5539a48f364fa9f2e746d2f81fbeadf765137323383afa007362a0cdf6333e->leave($__internal_9f5539a48f364fa9f2e746d2f81fbeadf765137323383afa007362a0cdf6333e_prof);

        
        $__internal_da0c761f31f7046408c3a2daf8998a69a39822d0e2d6970cfe2bb4cc4f42e289->leave($__internal_da0c761f31f7046408c3a2daf8998a69a39822d0e2d6970cfe2bb4cc4f42e289_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_25bcbd4fc52846d15c8d552fdc9d928e64538ac7fbb8a456095bc16c4bd7c7ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25bcbd4fc52846d15c8d552fdc9d928e64538ac7fbb8a456095bc16c4bd7c7ca->enter($__internal_25bcbd4fc52846d15c8d552fdc9d928e64538ac7fbb8a456095bc16c4bd7c7ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_02ed0a96c3e90e319157746694d64e54b04d46be3838cb4f6cc2587c1d3f1742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02ed0a96c3e90e319157746694d64e54b04d46be3838cb4f6cc2587c1d3f1742->enter($__internal_02ed0a96c3e90e319157746694d64e54b04d46be3838cb4f6cc2587c1d3f1742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 14
        echo "    ";
        if ( !$this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) {
            // line 15
            echo "        ";
            $context["value"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "        ";
            $context["value"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), array(), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "catalogue", array()));
            // line 18
            echo "    ";
        }
        // line 19
        echo "
    ";
        // line 20
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            // line 21
            echo "        ";
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
            echo "
    ";
        } else {
            // line 23
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_02ed0a96c3e90e319157746694d64e54b04d46be3838cb4f6cc2587c1d3f1742->leave($__internal_02ed0a96c3e90e319157746694d64e54b04d46be3838cb4f6cc2587c1d3f1742_prof);

        
        $__internal_25bcbd4fc52846d15c8d552fdc9d928e64538ac7fbb8a456095bc16c4bd7c7ca->leave($__internal_25bcbd4fc52846d15c8d552fdc9d928e64538ac7fbb8a456095bc16c4bd7c7ca_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 23,  69 => 21,  67 => 20,  64 => 19,  61 => 18,  58 => 17,  55 => 16,  52 => 15,  49 => 14,  40 => 13,  11 => 11,);
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
{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field%}
    {% if field_description.options.catalogue is not defined %}
        {% set value = value|trans %}
    {% else %}
        {% set value = value|trans({}, field_description.options.catalogue) %}
    {% endif %}

    {% if field_description.options.safe %}
        {{ value|raw }}
    {% else %}
        {{ value }}
    {% endif %}
{% endblock %}
", "@SonataAdmin/CRUD/show_trans.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_trans.html.twig");
    }
}
