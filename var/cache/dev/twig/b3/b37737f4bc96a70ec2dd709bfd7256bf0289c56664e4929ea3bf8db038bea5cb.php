<?php

/* @SonataDoctrineORMAdmin/CRUD/list_orm_one_to_one.html.twig */
class __TwigTemplate_edee1ebb2f0cd1d642025702e3ae207d5ac0632b983ea247370c07a31f9786fb extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataDoctrineORMAdmin/CRUD/list_orm_one_to_one.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_08c8b8426eaf0771db22b594579855d5c282d4be76e7aff90fcc398575586513 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08c8b8426eaf0771db22b594579855d5c282d4be76e7aff90fcc398575586513->enter($__internal_08c8b8426eaf0771db22b594579855d5c282d4be76e7aff90fcc398575586513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/list_orm_one_to_one.html.twig"));

        $__internal_cb47302ae26f75a0bac5295b75592f028835b827e45694bc54072a0fe8546305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb47302ae26f75a0bac5295b75592f028835b827e45694bc54072a0fe8546305->enter($__internal_cb47302ae26f75a0bac5295b75592f028835b827e45694bc54072a0fe8546305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/list_orm_one_to_one.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08c8b8426eaf0771db22b594579855d5c282d4be76e7aff90fcc398575586513->leave($__internal_08c8b8426eaf0771db22b594579855d5c282d4be76e7aff90fcc398575586513_prof);

        
        $__internal_cb47302ae26f75a0bac5295b75592f028835b827e45694bc54072a0fe8546305->leave($__internal_cb47302ae26f75a0bac5295b75592f028835b827e45694bc54072a0fe8546305_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_de2d955304ffdc254dca873c94e1a4ecbff620e755275ebf420fd3d7189251e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de2d955304ffdc254dca873c94e1a4ecbff620e755275ebf420fd3d7189251e8->enter($__internal_de2d955304ffdc254dca873c94e1a4ecbff620e755275ebf420fd3d7189251e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_5c8aa0922437b49fe807d0c76f76bea04bb2684e44435f46fb0fe1e521cdab33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c8aa0922437b49fe807d0c76f76bea04bb2684e44435f46fb0fe1e521cdab33->enter($__internal_5c8aa0922437b49fe807d0c76f76bea04bb2684e44435f46fb0fe1e521cdab33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
        // line 16
        echo "    ";
        if (((($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "hasAssociationAdmin", array()) && $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "id", array(0 => ($context["value"] ?? $this->getContext($context, "value"))), "method")) && $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name"))), "method")) && $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "hasAccess", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name")), 1 => ($context["value"] ?? $this->getContext($context, "value"))), "method"))) {
            // line 17
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name")), 1 => ($context["value"] ?? $this->getContext($context, "value")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["value"] ?? $this->getContext($context, "value")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 19
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["value"] ?? $this->getContext($context, "value")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
            echo "
    ";
        }
        
        $__internal_5c8aa0922437b49fe807d0c76f76bea04bb2684e44435f46fb0fe1e521cdab33->leave($__internal_5c8aa0922437b49fe807d0c76f76bea04bb2684e44435f46fb0fe1e521cdab33_prof);

        
        $__internal_de2d955304ffdc254dca873c94e1a4ecbff620e755275ebf420fd3d7189251e8->leave($__internal_de2d955304ffdc254dca873c94e1a4ecbff620e755275ebf420fd3d7189251e8_prof);

    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/CRUD/list_orm_one_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 19,  54 => 17,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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
    {% set route_name = field_description.options.route.name %}
    {% if field_description.hasAssociationAdmin and field_description.associationadmin.id(value) and field_description.associationadmin.hasRoute(route_name) and field_description.associationadmin.hasAccess(route_name, value) %}
        <a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, value, field_description.options.route.parameters) }}\">{{ value|render_relation_element(field_description) }}</a>
    {% else %}
        {{ value|render_relation_element(field_description) }}
    {% endif %}
{% endblock %}
", "@SonataDoctrineORMAdmin/CRUD/list_orm_one_to_one.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views/CRUD/list_orm_one_to_one.html.twig");
    }
}
