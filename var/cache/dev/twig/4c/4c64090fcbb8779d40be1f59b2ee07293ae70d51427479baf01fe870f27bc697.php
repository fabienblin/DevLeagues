<?php

/* @SonataDoctrineORMAdmin/CRUD/show_orm_many_to_one.html.twig */
class __TwigTemplate_abd62d9f44e81aa1af28c9dd2033c604d165b7d2d121cec448ecf49ec28c4d39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataDoctrineORMAdmin/CRUD/show_orm_many_to_one.html.twig", 12);
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
        $__internal_b1062b5287af956d88d40a1d0db5a5257e1a03adab2d434ede847c50b4f2362d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1062b5287af956d88d40a1d0db5a5257e1a03adab2d434ede847c50b4f2362d->enter($__internal_b1062b5287af956d88d40a1d0db5a5257e1a03adab2d434ede847c50b4f2362d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/show_orm_many_to_one.html.twig"));

        $__internal_29771b6de99c8ede82c3cf59241421bd8eeb4bd55a8fa6bd00c0607315a8602e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29771b6de99c8ede82c3cf59241421bd8eeb4bd55a8fa6bd00c0607315a8602e->enter($__internal_29771b6de99c8ede82c3cf59241421bd8eeb4bd55a8fa6bd00c0607315a8602e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/show_orm_many_to_one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1062b5287af956d88d40a1d0db5a5257e1a03adab2d434ede847c50b4f2362d->leave($__internal_b1062b5287af956d88d40a1d0db5a5257e1a03adab2d434ede847c50b4f2362d_prof);

        
        $__internal_29771b6de99c8ede82c3cf59241421bd8eeb4bd55a8fa6bd00c0607315a8602e->leave($__internal_29771b6de99c8ede82c3cf59241421bd8eeb4bd55a8fa6bd00c0607315a8602e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_312f59af699a2a01ffd76edc3ad00bc997fe3a3bde13bb51aa159bfaaa42951f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_312f59af699a2a01ffd76edc3ad00bc997fe3a3bde13bb51aa159bfaaa42951f->enter($__internal_312f59af699a2a01ffd76edc3ad00bc997fe3a3bde13bb51aa159bfaaa42951f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_08549f7e7da30d937fe634a44d2761048dfa9e0dc254c5a90c1c56eb6641fa14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08549f7e7da30d937fe634a44d2761048dfa9e0dc254c5a90c1c56eb6641fa14->enter($__internal_08549f7e7da30d937fe634a44d2761048dfa9e0dc254c5a90c1c56eb6641fa14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if (($context["value"] ?? $this->getContext($context, "value"))) {
            // line 16
            echo "        ";
            $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
            // line 17
            echo "        ";
            if ((($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "hasAssociationAdmin", array()) && $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name"))), "method")) && $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "hasAccess", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name")), 1 => ($context["value"] ?? $this->getContext($context, "value"))), "method"))) {
                // line 18
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name")), 1 => ($context["value"] ?? $this->getContext($context, "value")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
                echo "\">
                ";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["value"] ?? $this->getContext($context, "value")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
                echo "
            </a>
        ";
            } else {
                // line 22
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["value"] ?? $this->getContext($context, "value")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
                echo "
        ";
            }
            // line 24
            echo "    ";
        }
        
        $__internal_08549f7e7da30d937fe634a44d2761048dfa9e0dc254c5a90c1c56eb6641fa14->leave($__internal_08549f7e7da30d937fe634a44d2761048dfa9e0dc254c5a90c1c56eb6641fa14_prof);

        
        $__internal_312f59af699a2a01ffd76edc3ad00bc997fe3a3bde13bb51aa159bfaaa42951f->leave($__internal_312f59af699a2a01ffd76edc3ad00bc997fe3a3bde13bb51aa159bfaaa42951f_prof);

    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/CRUD/show_orm_many_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 24,  69 => 22,  63 => 19,  58 => 18,  55 => 17,  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
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
    {% if value %}
        {% set route_name = field_description.options.route.name %}
        {% if field_description.hasAssociationAdmin and field_description.associationadmin.hasRoute(route_name) and field_description.associationadmin.hasAccess(route_name, value) %}
            <a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, value, field_description.options.route.parameters) }}\">
                {{ value|render_relation_element(field_description) }}
            </a>
        {% else %}
            {{ value|render_relation_element(field_description) }}
        {% endif %}
    {% endif %}
{% endblock %}
", "@SonataDoctrineORMAdmin/CRUD/show_orm_many_to_one.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views/CRUD/show_orm_many_to_one.html.twig");
    }
}
