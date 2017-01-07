<?php

/* @SonataDoctrineORMAdmin/CRUD/show_orm_many_to_many.html.twig */
class __TwigTemplate_d5771bb90822b5eb9ae1e621d69d14daee463661e0aaa1d5955d847632ceecdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataDoctrineORMAdmin/CRUD/show_orm_many_to_many.html.twig", 12);
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
        $__internal_3510e2e718953e9d8e071a6a9b65f6b65427111ebfa681639162ad84afc701ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3510e2e718953e9d8e071a6a9b65f6b65427111ebfa681639162ad84afc701ab->enter($__internal_3510e2e718953e9d8e071a6a9b65f6b65427111ebfa681639162ad84afc701ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/show_orm_many_to_many.html.twig"));

        $__internal_fe27fb6597e93b5dc2125444aac7b67da4e0090614b4579f42e7e774c558c1ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe27fb6597e93b5dc2125444aac7b67da4e0090614b4579f42e7e774c558c1ce->enter($__internal_fe27fb6597e93b5dc2125444aac7b67da4e0090614b4579f42e7e774c558c1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/show_orm_many_to_many.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3510e2e718953e9d8e071a6a9b65f6b65427111ebfa681639162ad84afc701ab->leave($__internal_3510e2e718953e9d8e071a6a9b65f6b65427111ebfa681639162ad84afc701ab_prof);

        
        $__internal_fe27fb6597e93b5dc2125444aac7b67da4e0090614b4579f42e7e774c558c1ce->leave($__internal_fe27fb6597e93b5dc2125444aac7b67da4e0090614b4579f42e7e774c558c1ce_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8dff2177b9db7d5b1ace59416ac4854d7801562e94c16feeddcb718993119119 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dff2177b9db7d5b1ace59416ac4854d7801562e94c16feeddcb718993119119->enter($__internal_8dff2177b9db7d5b1ace59416ac4854d7801562e94c16feeddcb718993119119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_48318a201eda1c0f2c87789f4b1330f26548d62507851ba1294f87a1e433bdbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48318a201eda1c0f2c87789f4b1330f26548d62507851ba1294f87a1e433bdbd->enter($__internal_48318a201eda1c0f2c87789f4b1330f26548d62507851ba1294f87a1e433bdbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <ul class=\"sonata-ba-show-many-to-many\">
    ";
        // line 16
        $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
        // line 17
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 18
            echo "            <li>
                ";
            // line 19
            if ((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasassociationadmin", array()) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))), "method")) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasAccess", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method"))) {
                // line 20
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => $context["element"], 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
                echo "\">
                        ";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement($context["element"], (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "
                    </a>
                ";
            } else {
                // line 24
                echo "                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement($context["element"], (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
                echo "
                ";
            }
            // line 26
            echo "            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    </ul>
";
        
        $__internal_48318a201eda1c0f2c87789f4b1330f26548d62507851ba1294f87a1e433bdbd->leave($__internal_48318a201eda1c0f2c87789f4b1330f26548d62507851ba1294f87a1e433bdbd_prof);

        
        $__internal_8dff2177b9db7d5b1ace59416ac4854d7801562e94c16feeddcb718993119119->leave($__internal_8dff2177b9db7d5b1ace59416ac4854d7801562e94c16feeddcb718993119119_prof);

    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/CRUD/show_orm_many_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 28,  81 => 26,  75 => 24,  69 => 21,  64 => 20,  62 => 19,  59 => 18,  54 => 17,  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
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
    <ul class=\"sonata-ba-show-many-to-many\">
    {% set route_name = field_description.options.route.name %}
        {% for element in value %}
            <li>
                {% if field_description.hasassociationadmin and field_description.associationadmin.hasRoute(route_name) and field_description.associationadmin.hasAccess(route_name, value)%}
                    <a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, element, field_description.options.route.parameters) }}\">
                        {{ element|render_relation_element(field_description) }}
                    </a>
                {% else %}
                    {{ element|render_relation_element(field_description) }}
                {% endif %}
            </li>
        {% endfor %}
    </ul>
{% endblock %}
", "@SonataDoctrineORMAdmin/CRUD/show_orm_many_to_many.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views/CRUD/show_orm_many_to_many.html.twig");
    }
}
