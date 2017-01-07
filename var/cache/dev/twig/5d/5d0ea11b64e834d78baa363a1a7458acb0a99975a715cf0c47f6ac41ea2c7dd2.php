<?php

/* @SonataAdmin/CRUD/show_currency.html.twig */
class __TwigTemplate_dcda1a2fb7ce91e0cb57d535288ca5737bb05f063e8f9d2eb44b09fe3d467788 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_currency.html.twig", 12);
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
        $__internal_5f747cbce33177eebd30db2f6ec7a15880befd9fbe9ce867d181ec6ef861bad9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f747cbce33177eebd30db2f6ec7a15880befd9fbe9ce867d181ec6ef861bad9->enter($__internal_5f747cbce33177eebd30db2f6ec7a15880befd9fbe9ce867d181ec6ef861bad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_currency.html.twig"));

        $__internal_930cc929886cf3b35a434c134bdee9bb3d50fb88da954a4052a0a15fdc4084d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_930cc929886cf3b35a434c134bdee9bb3d50fb88da954a4052a0a15fdc4084d9->enter($__internal_930cc929886cf3b35a434c134bdee9bb3d50fb88da954a4052a0a15fdc4084d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f747cbce33177eebd30db2f6ec7a15880befd9fbe9ce867d181ec6ef861bad9->leave($__internal_5f747cbce33177eebd30db2f6ec7a15880befd9fbe9ce867d181ec6ef861bad9_prof);

        
        $__internal_930cc929886cf3b35a434c134bdee9bb3d50fb88da954a4052a0a15fdc4084d9->leave($__internal_930cc929886cf3b35a434c134bdee9bb3d50fb88da954a4052a0a15fdc4084d9_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4d2d713474675a2a42904805449ef45591dae9b4c2d326272d4eb852a88c0ff1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d2d713474675a2a42904805449ef45591dae9b4c2d326272d4eb852a88c0ff1->enter($__internal_4d2d713474675a2a42904805449ef45591dae9b4c2d326272d4eb852a88c0ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_c1ef828eaef44362d7d12ae7505bda7673a1b401918bb083a9cc959ba10bea1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1ef828eaef44362d7d12ae7505bda7673a1b401918bb083a9cc959ba10bea1c->enter($__internal_c1ef828eaef44362d7d12ae7505bda7673a1b401918bb083a9cc959ba10bea1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_c1ef828eaef44362d7d12ae7505bda7673a1b401918bb083a9cc959ba10bea1c->leave($__internal_c1ef828eaef44362d7d12ae7505bda7673a1b401918bb083a9cc959ba10bea1c_prof);

        
        $__internal_4d2d713474675a2a42904805449ef45591dae9b4c2d326272d4eb852a88c0ff1->leave($__internal_4d2d713474675a2a42904805449ef45591dae9b4c2d326272d4eb852a88c0ff1_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
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

{% block field %}
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
", "@SonataAdmin/CRUD/show_currency.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_currency.html.twig");
    }
}
