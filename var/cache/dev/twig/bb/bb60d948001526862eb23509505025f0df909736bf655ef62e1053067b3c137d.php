<?php

/* @SonataDoctrineORMAdmin/CRUD/show_orm_many_to_one.html.twig */
class __TwigTemplate_c3d4acf51b148c1e36a0d49c357bd67b0a09aa1c8b71293982f7521c26deab1f extends Twig_Template
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
        $__internal_73c7484b3195310a094f9cea15fe9b39ebd529dcff4be4897d5d954072ff1911 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73c7484b3195310a094f9cea15fe9b39ebd529dcff4be4897d5d954072ff1911->enter($__internal_73c7484b3195310a094f9cea15fe9b39ebd529dcff4be4897d5d954072ff1911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/show_orm_many_to_one.html.twig"));

        $__internal_9bdb64823e92113b9b0ff1057f5ed4ab8f7e4604093b3c8e2ee6e90ecf6c7442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bdb64823e92113b9b0ff1057f5ed4ab8f7e4604093b3c8e2ee6e90ecf6c7442->enter($__internal_9bdb64823e92113b9b0ff1057f5ed4ab8f7e4604093b3c8e2ee6e90ecf6c7442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/show_orm_many_to_one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73c7484b3195310a094f9cea15fe9b39ebd529dcff4be4897d5d954072ff1911->leave($__internal_73c7484b3195310a094f9cea15fe9b39ebd529dcff4be4897d5d954072ff1911_prof);

        
        $__internal_9bdb64823e92113b9b0ff1057f5ed4ab8f7e4604093b3c8e2ee6e90ecf6c7442->leave($__internal_9bdb64823e92113b9b0ff1057f5ed4ab8f7e4604093b3c8e2ee6e90ecf6c7442_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_36cb24a7ff448cf0d2c67818faaa56af114a6d5fa4e3de7777139b08c5a81322 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36cb24a7ff448cf0d2c67818faaa56af114a6d5fa4e3de7777139b08c5a81322->enter($__internal_36cb24a7ff448cf0d2c67818faaa56af114a6d5fa4e3de7777139b08c5a81322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_2c411be99453aa28e2c941540d166cdf0f44f73abe14bd2ded999dca9a2275db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c411be99453aa28e2c941540d166cdf0f44f73abe14bd2ded999dca9a2275db->enter($__internal_2c411be99453aa28e2c941540d166cdf0f44f73abe14bd2ded999dca9a2275db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_2c411be99453aa28e2c941540d166cdf0f44f73abe14bd2ded999dca9a2275db->leave($__internal_2c411be99453aa28e2c941540d166cdf0f44f73abe14bd2ded999dca9a2275db_prof);

        
        $__internal_36cb24a7ff448cf0d2c67818faaa56af114a6d5fa4e3de7777139b08c5a81322->leave($__internal_36cb24a7ff448cf0d2c67818faaa56af114a6d5fa4e3de7777139b08c5a81322_prof);

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
