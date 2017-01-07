<?php

/* @SonataDoctrineORMAdmin/CRUD/list_orm_many_to_one.html.twig */
class __TwigTemplate_46e8f0ae471301b0cbfac92929e8e0566e3c2d319c42b5ea5df9f9d58612cbbe extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataDoctrineORMAdmin/CRUD/list_orm_many_to_one.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e41e2d5e598c09d1341e5b7d21ac2fd6ade0c9d8c6f2caafcbe34d153cd3c991 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e41e2d5e598c09d1341e5b7d21ac2fd6ade0c9d8c6f2caafcbe34d153cd3c991->enter($__internal_e41e2d5e598c09d1341e5b7d21ac2fd6ade0c9d8c6f2caafcbe34d153cd3c991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/list_orm_many_to_one.html.twig"));

        $__internal_d8c3d5d95115ec2fe59810e7d274c6376acafea7252ac19ce26a6ef234e2b8b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8c3d5d95115ec2fe59810e7d274c6376acafea7252ac19ce26a6ef234e2b8b5->enter($__internal_d8c3d5d95115ec2fe59810e7d274c6376acafea7252ac19ce26a6ef234e2b8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/list_orm_many_to_one.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e41e2d5e598c09d1341e5b7d21ac2fd6ade0c9d8c6f2caafcbe34d153cd3c991->leave($__internal_e41e2d5e598c09d1341e5b7d21ac2fd6ade0c9d8c6f2caafcbe34d153cd3c991_prof);

        
        $__internal_d8c3d5d95115ec2fe59810e7d274c6376acafea7252ac19ce26a6ef234e2b8b5->leave($__internal_d8c3d5d95115ec2fe59810e7d274c6376acafea7252ac19ce26a6ef234e2b8b5_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_bd62727e390ab2efc9fc03ebe7787451436a02ec6d336773ae0f4ad2c1f40a11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd62727e390ab2efc9fc03ebe7787451436a02ec6d336773ae0f4ad2c1f40a11->enter($__internal_bd62727e390ab2efc9fc03ebe7787451436a02ec6d336773ae0f4ad2c1f40a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_690e227766f0b700a0c61d1495b923fa7ceb4aae52b3e0d2a3f0ef9b7a0a88ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_690e227766f0b700a0c61d1495b923fa7ceb4aae52b3e0d2a3f0ef9b7a0a88ca->enter($__internal_690e227766f0b700a0c61d1495b923fa7ceb4aae52b3e0d2a3f0ef9b7a0a88ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_690e227766f0b700a0c61d1495b923fa7ceb4aae52b3e0d2a3f0ef9b7a0a88ca->leave($__internal_690e227766f0b700a0c61d1495b923fa7ceb4aae52b3e0d2a3f0ef9b7a0a88ca_prof);

        
        $__internal_bd62727e390ab2efc9fc03ebe7787451436a02ec6d336773ae0f4ad2c1f40a11->leave($__internal_bd62727e390ab2efc9fc03ebe7787451436a02ec6d336773ae0f4ad2c1f40a11_prof);

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
", "@SonataDoctrineORMAdmin/CRUD/list_orm_many_to_one.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views/CRUD/list_orm_many_to_one.html.twig");
    }
}
