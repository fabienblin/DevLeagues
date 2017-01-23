<?php

/* @SonataDoctrineORMAdmin/CRUD/list_orm_many_to_many.html.twig */
class __TwigTemplate_fae0bc9ed1328c8b3c5947ad281d0c18a10e9df0677b5fce4ec8d5722753b61d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'relation_link' => array($this, 'block_relation_link'),
            'relation_value' => array($this, 'block_relation_value'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataDoctrineORMAdmin/CRUD/list_orm_many_to_many.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_345acfc281209e75e9ed8f501232613249d9d123c4c68218b32faade7c3bbf75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_345acfc281209e75e9ed8f501232613249d9d123c4c68218b32faade7c3bbf75->enter($__internal_345acfc281209e75e9ed8f501232613249d9d123c4c68218b32faade7c3bbf75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/list_orm_many_to_many.html.twig"));

        $__internal_43b7b65b448c6abc394fc8ea2bb91b7f26381531fea71ef78c0859b30ddbfb8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43b7b65b448c6abc394fc8ea2bb91b7f26381531fea71ef78c0859b30ddbfb8c->enter($__internal_43b7b65b448c6abc394fc8ea2bb91b7f26381531fea71ef78c0859b30ddbfb8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/list_orm_many_to_many.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_345acfc281209e75e9ed8f501232613249d9d123c4c68218b32faade7c3bbf75->leave($__internal_345acfc281209e75e9ed8f501232613249d9d123c4c68218b32faade7c3bbf75_prof);

        
        $__internal_43b7b65b448c6abc394fc8ea2bb91b7f26381531fea71ef78c0859b30ddbfb8c->leave($__internal_43b7b65b448c6abc394fc8ea2bb91b7f26381531fea71ef78c0859b30ddbfb8c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c632fc6e5e039683bc8aa8636366465782604e1797712e73909c88a05f71b69d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c632fc6e5e039683bc8aa8636366465782604e1797712e73909c88a05f71b69d->enter($__internal_c632fc6e5e039683bc8aa8636366465782604e1797712e73909c88a05f71b69d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_2ead8e9f17207384f4cbb43f76f30f8c888c69dd0e8a536fe0f12af184229485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ead8e9f17207384f4cbb43f76f30f8c888c69dd0e8a536fe0f12af184229485->enter($__internal_2ead8e9f17207384f4cbb43f76f30f8c888c69dd0e8a536fe0f12af184229485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
        // line 16
        echo "    ";
        if (($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "hasassociationadmin", array()) && $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name"))), "method"))) {
            // line 17
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? $this->getContext($context, "value")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 18
                if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "hasAccess", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name")), 1 => ($context["value"] ?? $this->getContext($context, "value"))), "method")) {
                    // line 19
                    $this->displayBlock("relation_link", $context, $blocks);
                } else {
                    // line 21
                    $this->displayBlock("relation_value", $context, $blocks);
                }
                // line 23
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 24
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    ";
        } else {
            // line 26
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? $this->getContext($context, "value")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 27
                echo "            ";
                $this->displayBlock("relation_value", $context, $blocks);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 28
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "    ";
        }
        
        $__internal_2ead8e9f17207384f4cbb43f76f30f8c888c69dd0e8a536fe0f12af184229485->leave($__internal_2ead8e9f17207384f4cbb43f76f30f8c888c69dd0e8a536fe0f12af184229485_prof);

        
        $__internal_c632fc6e5e039683bc8aa8636366465782604e1797712e73909c88a05f71b69d->leave($__internal_c632fc6e5e039683bc8aa8636366465782604e1797712e73909c88a05f71b69d_prof);

    }

    // line 32
    public function block_relation_link($context, array $blocks = array())
    {
        $__internal_800107089672751190f98b581bf43dd83f8d5bbf496c28d8d70d5841c8ca19cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_800107089672751190f98b581bf43dd83f8d5bbf496c28d8d70d5841c8ca19cc->enter($__internal_800107089672751190f98b581bf43dd83f8d5bbf496c28d8d70d5841c8ca19cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        $__internal_b955c7fb4abc0d6dba78424c9b23b15e821339416baca3555a50162653c94aaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b955c7fb4abc0d6dba78424c9b23b15e821339416baca3555a50162653c94aaf->enter($__internal_b955c7fb4abc0d6dba78424c9b23b15e821339416baca3555a50162653c94aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        // line 33
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name")), 1 => ($context["element"] ?? $this->getContext($context, "element")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
        echo "\">
        ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["element"] ?? $this->getContext($context, "element")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
        echo "
    </a>";
        
        $__internal_b955c7fb4abc0d6dba78424c9b23b15e821339416baca3555a50162653c94aaf->leave($__internal_b955c7fb4abc0d6dba78424c9b23b15e821339416baca3555a50162653c94aaf_prof);

        
        $__internal_800107089672751190f98b581bf43dd83f8d5bbf496c28d8d70d5841c8ca19cc->leave($__internal_800107089672751190f98b581bf43dd83f8d5bbf496c28d8d70d5841c8ca19cc_prof);

    }

    // line 38
    public function block_relation_value($context, array $blocks = array())
    {
        $__internal_d5fe36304afc0c74f8a0cabb823c82c5c7ff3ab50aac48390a6f45164ad4a93d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5fe36304afc0c74f8a0cabb823c82c5c7ff3ab50aac48390a6f45164ad4a93d->enter($__internal_d5fe36304afc0c74f8a0cabb823c82c5c7ff3ab50aac48390a6f45164ad4a93d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        $__internal_afd71951bf7669944106760b2d761b3b29f9d8624e02ad35fba08304ded8af21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afd71951bf7669944106760b2d761b3b29f9d8624e02ad35fba08304ded8af21->enter($__internal_afd71951bf7669944106760b2d761b3b29f9d8624e02ad35fba08304ded8af21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["element"] ?? $this->getContext($context, "element")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
        
        $__internal_afd71951bf7669944106760b2d761b3b29f9d8624e02ad35fba08304ded8af21->leave($__internal_afd71951bf7669944106760b2d761b3b29f9d8624e02ad35fba08304ded8af21_prof);

        
        $__internal_d5fe36304afc0c74f8a0cabb823c82c5c7ff3ab50aac48390a6f45164ad4a93d->leave($__internal_d5fe36304afc0c74f8a0cabb823c82c5c7ff3ab50aac48390a6f45164ad4a93d_prof);

    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/CRUD/list_orm_many_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 39,  178 => 38,  166 => 34,  161 => 33,  152 => 32,  141 => 29,  127 => 28,  121 => 27,  103 => 26,  100 => 25,  86 => 24,  82 => 23,  79 => 21,  76 => 19,  74 => 18,  56 => 17,  53 => 16,  50 => 15,  41 => 14,  20 => 12,);
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
    {% if field_description.hasassociationadmin and field_description.associationadmin.hasRoute(route_name) %}
        {% for element in value %}
            {%- if field_description.associationadmin.hasAccess(route_name, value) -%}
                {{ block('relation_link') }}
            {%- else -%}
                {{ block('relation_value') }}
            {%- endif -%}
            {% if not loop.last %}, {% endif %}
        {% endfor %}
    {% else %}
        {% for element in value%}
            {{ block('relation_value') }}{% if not loop.last %}, {% endif %}
        {% endfor %}
    {% endif %}
{% endblock %}

{%- block relation_link -%}
    <a href=\"{{ field_description.associationadmin.generateObjectUrl(route_name, element, field_description.options.route.parameters) }}\">
        {{ element|render_relation_element(field_description) }}
    </a>
{%- endblock -%}

{%- block relation_value -%}
    {{ element|render_relation_element(field_description) }}
{%- endblock -%}
", "@SonataDoctrineORMAdmin/CRUD/list_orm_many_to_many.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views/CRUD/list_orm_many_to_many.html.twig");
    }
}
