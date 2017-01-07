<?php

/* @SonataDoctrineORMAdmin/CRUD/show_orm_one_to_one.html.twig */
class __TwigTemplate_0952158ff83a980f6acdbe95ee1bab80eb8b32dfed3ac00e28c846bb1cd0bc52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataDoctrineORMAdmin/CRUD/show_orm_one_to_one.html.twig", 12);
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
        $__internal_13d3f7268ec525ceb4f852bef19ae87752c408592ce4d0fa5485a5b7beb83e32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13d3f7268ec525ceb4f852bef19ae87752c408592ce4d0fa5485a5b7beb83e32->enter($__internal_13d3f7268ec525ceb4f852bef19ae87752c408592ce4d0fa5485a5b7beb83e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/show_orm_one_to_one.html.twig"));

        $__internal_9a503a022d60129575a88f15c30a75ec2e74128f18efd98bb4caf65ca9bdcabb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a503a022d60129575a88f15c30a75ec2e74128f18efd98bb4caf65ca9bdcabb->enter($__internal_9a503a022d60129575a88f15c30a75ec2e74128f18efd98bb4caf65ca9bdcabb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/show_orm_one_to_one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13d3f7268ec525ceb4f852bef19ae87752c408592ce4d0fa5485a5b7beb83e32->leave($__internal_13d3f7268ec525ceb4f852bef19ae87752c408592ce4d0fa5485a5b7beb83e32_prof);

        
        $__internal_9a503a022d60129575a88f15c30a75ec2e74128f18efd98bb4caf65ca9bdcabb->leave($__internal_9a503a022d60129575a88f15c30a75ec2e74128f18efd98bb4caf65ca9bdcabb_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_a1913fb17f2f0666cd7092666f5643618e32d005783f2b2723c49089272ebbd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1913fb17f2f0666cd7092666f5643618e32d005783f2b2723c49089272ebbd0->enter($__internal_a1913fb17f2f0666cd7092666f5643618e32d005783f2b2723c49089272ebbd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_9de52751c3ed8de8c785d428482279d3f8b0089b928a20cc7a80507cd8d533ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9de52751c3ed8de8c785d428482279d3f8b0089b928a20cc7a80507cd8d533ae->enter($__internal_9de52751c3ed8de8c785d428482279d3f8b0089b928a20cc7a80507cd8d533ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
        // line 16
        echo "    ";
        if (((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasAssociationAdmin", array()) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "id", array(0 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasAccess", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method"))) {
            // line 17
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
            echo "\">
            ";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
            echo "
        </a>
    ";
        } else {
            // line 21
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
            echo "
    ";
        }
        
        $__internal_9de52751c3ed8de8c785d428482279d3f8b0089b928a20cc7a80507cd8d533ae->leave($__internal_9de52751c3ed8de8c785d428482279d3f8b0089b928a20cc7a80507cd8d533ae_prof);

        
        $__internal_a1913fb17f2f0666cd7092666f5643618e32d005783f2b2723c49089272ebbd0->leave($__internal_a1913fb17f2f0666cd7092666f5643618e32d005783f2b2723c49089272ebbd0_prof);

    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/CRUD/show_orm_one_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 21,  60 => 18,  55 => 17,  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
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
    {% set route_name = field_description.options.route.name %}
    {% if field_description.hasAssociationAdmin and field_description.associationadmin.id(value) and field_description.associationadmin.hasRoute(route_name) and field_description.associationadmin.hasAccess(route_name, value) %}
        <a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, value, field_description.options.route.parameters) }}\">
            {{ value|render_relation_element(field_description) }}
        </a>
    {% else %}
        {{ value|render_relation_element(field_description) }}
    {% endif %}
{% endblock %}
", "@SonataDoctrineORMAdmin/CRUD/show_orm_one_to_one.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views/CRUD/show_orm_one_to_one.html.twig");
    }
}
