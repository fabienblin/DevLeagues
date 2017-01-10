<?php

/* @SonataDoctrineORMAdmin/CRUD/list_orm_many_to_one.html.twig */
class __TwigTemplate_0e44158238f11dc91da7d8f2db8999590cc5fbf907195f387c351316228816b1 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataDoctrineORMAdmin/CRUD/list_orm_many_to_one.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c913e09254ea82f6ed1aaba6b591fa60e6b66fe5a96fdbfad378911ef26f4ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c913e09254ea82f6ed1aaba6b591fa60e6b66fe5a96fdbfad378911ef26f4ba->enter($__internal_1c913e09254ea82f6ed1aaba6b591fa60e6b66fe5a96fdbfad378911ef26f4ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/list_orm_many_to_one.html.twig"));

        $__internal_d47ddb0feea37f1eecc1dfcf523dd16def2ab79a1ae957e8b61ae0a0f72dfb1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d47ddb0feea37f1eecc1dfcf523dd16def2ab79a1ae957e8b61ae0a0f72dfb1e->enter($__internal_d47ddb0feea37f1eecc1dfcf523dd16def2ab79a1ae957e8b61ae0a0f72dfb1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/list_orm_many_to_one.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c913e09254ea82f6ed1aaba6b591fa60e6b66fe5a96fdbfad378911ef26f4ba->leave($__internal_1c913e09254ea82f6ed1aaba6b591fa60e6b66fe5a96fdbfad378911ef26f4ba_prof);

        
        $__internal_d47ddb0feea37f1eecc1dfcf523dd16def2ab79a1ae957e8b61ae0a0f72dfb1e->leave($__internal_d47ddb0feea37f1eecc1dfcf523dd16def2ab79a1ae957e8b61ae0a0f72dfb1e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_a4dce2842ee1d68486abb6bfcd7307aa78570fa884e205eaec361d0b1d64d1cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4dce2842ee1d68486abb6bfcd7307aa78570fa884e205eaec361d0b1d64d1cb->enter($__internal_a4dce2842ee1d68486abb6bfcd7307aa78570fa884e205eaec361d0b1d64d1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_3cf2d1da7dcb9b18e46a1688b8cf41ae63556172e0acf9c0ccf69e112a7af707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cf2d1da7dcb9b18e46a1688b8cf41ae63556172e0acf9c0ccf69e112a7af707->enter($__internal_3cf2d1da7dcb9b18e46a1688b8cf41ae63556172e0acf9c0ccf69e112a7af707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_3cf2d1da7dcb9b18e46a1688b8cf41ae63556172e0acf9c0ccf69e112a7af707->leave($__internal_3cf2d1da7dcb9b18e46a1688b8cf41ae63556172e0acf9c0ccf69e112a7af707_prof);

        
        $__internal_a4dce2842ee1d68486abb6bfcd7307aa78570fa884e205eaec361d0b1d64d1cb->leave($__internal_a4dce2842ee1d68486abb6bfcd7307aa78570fa884e205eaec361d0b1d64d1cb_prof);

    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/CRUD/list_orm_many_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 24,  68 => 22,  62 => 19,  57 => 18,  54 => 17,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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
", "@SonataDoctrineORMAdmin/CRUD/list_orm_many_to_one.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views/CRUD/list_orm_many_to_one.html.twig");
    }
}
