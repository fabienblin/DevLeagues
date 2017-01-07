<?php

/* @SonataDoctrineORMAdmin/CRUD/show_orm_many_to_one.html.twig */
class __TwigTemplate_d3bf9ed0c59df24e69f2955fab578b62658b9e2d11f3c92b83969f706e73b4a8 extends Twig_Template
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
        $__internal_ecc99c4e7b217c515a6d3e946ed56e66795e0b4ad5dcd3b9d964a71385bde308 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecc99c4e7b217c515a6d3e946ed56e66795e0b4ad5dcd3b9d964a71385bde308->enter($__internal_ecc99c4e7b217c515a6d3e946ed56e66795e0b4ad5dcd3b9d964a71385bde308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/show_orm_many_to_one.html.twig"));

        $__internal_e483a4fe42455abcd027bdad0e331329e954f525b38d4ae38c22987f87fcb25c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e483a4fe42455abcd027bdad0e331329e954f525b38d4ae38c22987f87fcb25c->enter($__internal_e483a4fe42455abcd027bdad0e331329e954f525b38d4ae38c22987f87fcb25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/show_orm_many_to_one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecc99c4e7b217c515a6d3e946ed56e66795e0b4ad5dcd3b9d964a71385bde308->leave($__internal_ecc99c4e7b217c515a6d3e946ed56e66795e0b4ad5dcd3b9d964a71385bde308_prof);

        
        $__internal_e483a4fe42455abcd027bdad0e331329e954f525b38d4ae38c22987f87fcb25c->leave($__internal_e483a4fe42455abcd027bdad0e331329e954f525b38d4ae38c22987f87fcb25c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_7cdd624808e00b8c4e8aafcf40c1f69e80f3ee19c45b0cd8b3aa7bcdae8df5da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cdd624808e00b8c4e8aafcf40c1f69e80f3ee19c45b0cd8b3aa7bcdae8df5da->enter($__internal_7cdd624808e00b8c4e8aafcf40c1f69e80f3ee19c45b0cd8b3aa7bcdae8df5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_f1bbb7472a4c6e0834ee069d221cef2b2ffaf32548e03c879eefb60e495f44f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1bbb7472a4c6e0834ee069d221cef2b2ffaf32548e03c879eefb60e495f44f2->enter($__internal_f1bbb7472a4c6e0834ee069d221cef2b2ffaf32548e03c879eefb60e495f44f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 16
            echo "        ";
            $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
            // line 17
            echo "        ";
            if ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasAssociationAdmin", array()) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasAccess", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method"))) {
                // line 18
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
                echo "\">
                ";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "
            </a>
        ";
            } else {
                // line 22
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "
        ";
            }
            // line 24
            echo "    ";
        }
        
        $__internal_f1bbb7472a4c6e0834ee069d221cef2b2ffaf32548e03c879eefb60e495f44f2->leave($__internal_f1bbb7472a4c6e0834ee069d221cef2b2ffaf32548e03c879eefb60e495f44f2_prof);

        
        $__internal_7cdd624808e00b8c4e8aafcf40c1f69e80f3ee19c45b0cd8b3aa7bcdae8df5da->leave($__internal_7cdd624808e00b8c4e8aafcf40c1f69e80f3ee19c45b0cd8b3aa7bcdae8df5da_prof);

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
", "@SonataDoctrineORMAdmin/CRUD/show_orm_many_to_one.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views/CRUD/show_orm_many_to_one.html.twig");
    }
}
