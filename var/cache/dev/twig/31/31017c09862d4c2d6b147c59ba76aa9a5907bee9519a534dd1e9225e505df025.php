<?php

/* @SonataDoctrineORMAdmin/CRUD/show_orm_one_to_many.html.twig */
class __TwigTemplate_370ad7625a54c9558eb06e845cef615949f3a5621631de253470ce225336aa10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataDoctrineORMAdmin/CRUD/show_orm_one_to_many.html.twig", 12);
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
        $__internal_34d324d0942a780eaae8002aae22e33293dd539801a1e6ff60088de5406270fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34d324d0942a780eaae8002aae22e33293dd539801a1e6ff60088de5406270fb->enter($__internal_34d324d0942a780eaae8002aae22e33293dd539801a1e6ff60088de5406270fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/show_orm_one_to_many.html.twig"));

        $__internal_eeb54282e31e8d855a0d6a42658c20446659806d00692797f6a35eb18aa44a55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeb54282e31e8d855a0d6a42658c20446659806d00692797f6a35eb18aa44a55->enter($__internal_eeb54282e31e8d855a0d6a42658c20446659806d00692797f6a35eb18aa44a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/show_orm_one_to_many.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34d324d0942a780eaae8002aae22e33293dd539801a1e6ff60088de5406270fb->leave($__internal_34d324d0942a780eaae8002aae22e33293dd539801a1e6ff60088de5406270fb_prof);

        
        $__internal_eeb54282e31e8d855a0d6a42658c20446659806d00692797f6a35eb18aa44a55->leave($__internal_eeb54282e31e8d855a0d6a42658c20446659806d00692797f6a35eb18aa44a55_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_cddc3a46cee8d5595bcaa14a1059ccc7db67645563f796687f6d8d532668a886 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cddc3a46cee8d5595bcaa14a1059ccc7db67645563f796687f6d8d532668a886->enter($__internal_cddc3a46cee8d5595bcaa14a1059ccc7db67645563f796687f6d8d532668a886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_f29e9de69c86d077e6748c43d953e317a55d156804e6b6d6f16b5c4769101ab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f29e9de69c86d077e6748c43d953e317a55d156804e6b6d6f16b5c4769101ab4->enter($__internal_f29e9de69c86d077e6748c43d953e317a55d156804e6b6d6f16b5c4769101ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <ul class=\"sonata-ba-show-one-to-many\">
    ";
        // line 16
        $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
        // line 17
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["value"] ?? $this->getContext($context, "value")));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 18
            echo "        ";
            if ((($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "hasassociationadmin", array()) && $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name"))), "method")) && $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "hasAccess", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name")), 1 => ($context["value"] ?? $this->getContext($context, "value"))), "method"))) {
                // line 19
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name")), 1 => $context["element"], 2 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement($context["element"], ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
                echo "</a></li>
        ";
            } else {
                // line 21
                echo "            <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement($context["element"], ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
                echo "</li>
        ";
            }
            // line 23
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </ul>
";
        
        $__internal_f29e9de69c86d077e6748c43d953e317a55d156804e6b6d6f16b5c4769101ab4->leave($__internal_f29e9de69c86d077e6748c43d953e317a55d156804e6b6d6f16b5c4769101ab4_prof);

        
        $__internal_cddc3a46cee8d5595bcaa14a1059ccc7db67645563f796687f6d8d532668a886->leave($__internal_cddc3a46cee8d5595bcaa14a1059ccc7db67645563f796687f6d8d532668a886_prof);

    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/CRUD/show_orm_one_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 24,  76 => 23,  70 => 21,  62 => 19,  59 => 18,  54 => 17,  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
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
    <ul class=\"sonata-ba-show-one-to-many\">
    {% set route_name = field_description.options.route.name %}
    {% for element in value%}
        {% if field_description.hasassociationadmin and field_description.associationadmin.hasRoute(route_name) and field_description.associationadmin.hasAccess(route_name, value) %}
            <li><a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, element, field_description.options.route.parameters) }}\">{{ element|render_relation_element(field_description) }}</a></li>
        {% else %}
            <li>{{ element|render_relation_element(field_description) }}</li>
        {% endif %}
    {% endfor %}
    </ul>
{% endblock %}
", "@SonataDoctrineORMAdmin/CRUD/show_orm_one_to_many.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views/CRUD/show_orm_one_to_many.html.twig");
    }
}
