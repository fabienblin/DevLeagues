<?php

/* @SonataDoctrineORMAdmin/CRUD/show_orm_many_to_many.html.twig */
class __TwigTemplate_daa8e1b7a1cac51bee576129bb78e206810da6560fa93174ec6cbc6bb5166b06 extends Twig_Template
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
        $__internal_aeffdf8716635db263c5e3083a5bf2259217c34d368684f36d38611869309705 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeffdf8716635db263c5e3083a5bf2259217c34d368684f36d38611869309705->enter($__internal_aeffdf8716635db263c5e3083a5bf2259217c34d368684f36d38611869309705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/show_orm_many_to_many.html.twig"));

        $__internal_2cd546fd8c624aa9a06c4746a0471ddfe2f22a3d4ec1170a67fec9d5ae29019e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cd546fd8c624aa9a06c4746a0471ddfe2f22a3d4ec1170a67fec9d5ae29019e->enter($__internal_2cd546fd8c624aa9a06c4746a0471ddfe2f22a3d4ec1170a67fec9d5ae29019e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/show_orm_many_to_many.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aeffdf8716635db263c5e3083a5bf2259217c34d368684f36d38611869309705->leave($__internal_aeffdf8716635db263c5e3083a5bf2259217c34d368684f36d38611869309705_prof);

        
        $__internal_2cd546fd8c624aa9a06c4746a0471ddfe2f22a3d4ec1170a67fec9d5ae29019e->leave($__internal_2cd546fd8c624aa9a06c4746a0471ddfe2f22a3d4ec1170a67fec9d5ae29019e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b3b70b4ccda416821985d6fc21f5315195a804a025cbc6306dc79baac50941fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3b70b4ccda416821985d6fc21f5315195a804a025cbc6306dc79baac50941fd->enter($__internal_b3b70b4ccda416821985d6fc21f5315195a804a025cbc6306dc79baac50941fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_d61b0b758d55a851b18c461dd30edd2561e04e4073a14a8925b98aba6c11283d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d61b0b758d55a851b18c461dd30edd2561e04e4073a14a8925b98aba6c11283d->enter($__internal_d61b0b758d55a851b18c461dd30edd2561e04e4073a14a8925b98aba6c11283d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <ul class=\"sonata-ba-show-many-to-many\">
    ";
        // line 16
        $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
        // line 17
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["value"] ?? $this->getContext($context, "value")));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 18
            echo "            <li>
                ";
            // line 19
            if ((($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "hasassociationadmin", array()) && $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name"))), "method")) && $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "hasAccess", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name")), 1 => ($context["value"] ?? $this->getContext($context, "value"))), "method"))) {
                // line 20
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name")), 1 => $context["element"], 2 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
                echo "\">
                        ";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement($context["element"], ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
                echo "
                    </a>
                ";
            } else {
                // line 24
                echo "                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement($context["element"], ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
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
        
        $__internal_d61b0b758d55a851b18c461dd30edd2561e04e4073a14a8925b98aba6c11283d->leave($__internal_d61b0b758d55a851b18c461dd30edd2561e04e4073a14a8925b98aba6c11283d_prof);

        
        $__internal_b3b70b4ccda416821985d6fc21f5315195a804a025cbc6306dc79baac50941fd->leave($__internal_b3b70b4ccda416821985d6fc21f5315195a804a025cbc6306dc79baac50941fd_prof);

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
", "@SonataDoctrineORMAdmin/CRUD/show_orm_many_to_many.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views/CRUD/show_orm_many_to_many.html.twig");
    }
}
