<?php

/* @SonataDoctrineORMAdmin/CRUD/show_orm_one_to_one.html.twig */
class __TwigTemplate_9b45286ab5579ee71894a03f6447178b8cd13d7cefb7185ad3b9f732288b5b87 extends Twig_Template
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
        $__internal_5e31ae48a342ad574cfe15fe12482cc8dd5b08daeff9288e7ce91b3f853ff259 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e31ae48a342ad574cfe15fe12482cc8dd5b08daeff9288e7ce91b3f853ff259->enter($__internal_5e31ae48a342ad574cfe15fe12482cc8dd5b08daeff9288e7ce91b3f853ff259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/show_orm_one_to_one.html.twig"));

        $__internal_c43d77069c086766b3a1deb788e32c4af3d297c93154e672459d76571423cf8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c43d77069c086766b3a1deb788e32c4af3d297c93154e672459d76571423cf8d->enter($__internal_c43d77069c086766b3a1deb788e32c4af3d297c93154e672459d76571423cf8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/show_orm_one_to_one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e31ae48a342ad574cfe15fe12482cc8dd5b08daeff9288e7ce91b3f853ff259->leave($__internal_5e31ae48a342ad574cfe15fe12482cc8dd5b08daeff9288e7ce91b3f853ff259_prof);

        
        $__internal_c43d77069c086766b3a1deb788e32c4af3d297c93154e672459d76571423cf8d->leave($__internal_c43d77069c086766b3a1deb788e32c4af3d297c93154e672459d76571423cf8d_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_1b3ede51f333d7587e26c911a0cb88c845461c2fd7af1d35c4967feed1262050 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b3ede51f333d7587e26c911a0cb88c845461c2fd7af1d35c4967feed1262050->enter($__internal_1b3ede51f333d7587e26c911a0cb88c845461c2fd7af1d35c4967feed1262050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_2c8c03cd7a08e7a729ea9f774aa8479f77d6788ce66a250abe2207dba8a97ce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c8c03cd7a08e7a729ea9f774aa8479f77d6788ce66a250abe2207dba8a97ce6->enter($__internal_2c8c03cd7a08e7a729ea9f774aa8479f77d6788ce66a250abe2207dba8a97ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
        // line 16
        echo "    ";
        if (((($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "hasAssociationAdmin", array()) && $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "id", array(0 => ($context["value"] ?? $this->getContext($context, "value"))), "method")) && $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name"))), "method")) && $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "hasAccess", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name")), 1 => ($context["value"] ?? $this->getContext($context, "value"))), "method"))) {
            // line 17
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name")), 1 => ($context["value"] ?? $this->getContext($context, "value")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
            echo "\">
            ";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["value"] ?? $this->getContext($context, "value")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
            echo "
        </a>
    ";
        } else {
            // line 21
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["value"] ?? $this->getContext($context, "value")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
            echo "
    ";
        }
        
        $__internal_2c8c03cd7a08e7a729ea9f774aa8479f77d6788ce66a250abe2207dba8a97ce6->leave($__internal_2c8c03cd7a08e7a729ea9f774aa8479f77d6788ce66a250abe2207dba8a97ce6_prof);

        
        $__internal_1b3ede51f333d7587e26c911a0cb88c845461c2fd7af1d35c4967feed1262050->leave($__internal_1b3ede51f333d7587e26c911a0cb88c845461c2fd7af1d35c4967feed1262050_prof);

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
", "@SonataDoctrineORMAdmin/CRUD/show_orm_one_to_one.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views/CRUD/show_orm_one_to_one.html.twig");
    }
}
