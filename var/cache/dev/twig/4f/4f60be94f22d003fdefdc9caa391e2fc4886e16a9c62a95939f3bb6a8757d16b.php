<?php

/* @SonataDoctrineORMAdmin/CRUD/list_orm_one_to_many.html.twig */
class __TwigTemplate_1afaf9b2a830274a1fe7e884efa30c66738f34cf012ae4e4e94e68e58240e8e2 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataDoctrineORMAdmin/CRUD/list_orm_one_to_many.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_67e5c7be192d13b9f0b9b7ecad5b126511a2a6652022e39bb139a79d385c2709 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67e5c7be192d13b9f0b9b7ecad5b126511a2a6652022e39bb139a79d385c2709->enter($__internal_67e5c7be192d13b9f0b9b7ecad5b126511a2a6652022e39bb139a79d385c2709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/list_orm_one_to_many.html.twig"));

        $__internal_aa95429316faf233cea5a2a9c5bc909306730a3afff83e2fb634f6fc34fed8b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa95429316faf233cea5a2a9c5bc909306730a3afff83e2fb634f6fc34fed8b0->enter($__internal_aa95429316faf233cea5a2a9c5bc909306730a3afff83e2fb634f6fc34fed8b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/list_orm_one_to_many.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67e5c7be192d13b9f0b9b7ecad5b126511a2a6652022e39bb139a79d385c2709->leave($__internal_67e5c7be192d13b9f0b9b7ecad5b126511a2a6652022e39bb139a79d385c2709_prof);

        
        $__internal_aa95429316faf233cea5a2a9c5bc909306730a3afff83e2fb634f6fc34fed8b0->leave($__internal_aa95429316faf233cea5a2a9c5bc909306730a3afff83e2fb634f6fc34fed8b0_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_454238bc7dbafde8b99784b5f70a71d1992be2000d65a4de01e3d2d132e10659 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_454238bc7dbafde8b99784b5f70a71d1992be2000d65a4de01e3d2d132e10659->enter($__internal_454238bc7dbafde8b99784b5f70a71d1992be2000d65a4de01e3d2d132e10659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_0d2541afc0ea0e394ca7fc3840553d94e1c056821c85725782031d849da1a56f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d2541afc0ea0e394ca7fc3840553d94e1c056821c85725782031d849da1a56f->enter($__internal_0d2541afc0ea0e394ca7fc3840553d94e1c056821c85725782031d849da1a56f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_0d2541afc0ea0e394ca7fc3840553d94e1c056821c85725782031d849da1a56f->leave($__internal_0d2541afc0ea0e394ca7fc3840553d94e1c056821c85725782031d849da1a56f_prof);

        
        $__internal_454238bc7dbafde8b99784b5f70a71d1992be2000d65a4de01e3d2d132e10659->leave($__internal_454238bc7dbafde8b99784b5f70a71d1992be2000d65a4de01e3d2d132e10659_prof);

    }

    // line 32
    public function block_relation_link($context, array $blocks = array())
    {
        $__internal_f300489a080cc8c28a10b9f9fa3fd44f9be3449ada60f17324c775fec5940ded = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f300489a080cc8c28a10b9f9fa3fd44f9be3449ada60f17324c775fec5940ded->enter($__internal_f300489a080cc8c28a10b9f9fa3fd44f9be3449ada60f17324c775fec5940ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        $__internal_469b49dfdab330949cb0374c41336cdd4e236e1c85627b5b15c9ca02aa3b5593 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_469b49dfdab330949cb0374c41336cdd4e236e1c85627b5b15c9ca02aa3b5593->enter($__internal_469b49dfdab330949cb0374c41336cdd4e236e1c85627b5b15c9ca02aa3b5593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        // line 33
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name")), 1 => ($context["element"] ?? $this->getContext($context, "element")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
        echo "\">
        ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["element"] ?? $this->getContext($context, "element")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
        echo "
    </a>";
        
        $__internal_469b49dfdab330949cb0374c41336cdd4e236e1c85627b5b15c9ca02aa3b5593->leave($__internal_469b49dfdab330949cb0374c41336cdd4e236e1c85627b5b15c9ca02aa3b5593_prof);

        
        $__internal_f300489a080cc8c28a10b9f9fa3fd44f9be3449ada60f17324c775fec5940ded->leave($__internal_f300489a080cc8c28a10b9f9fa3fd44f9be3449ada60f17324c775fec5940ded_prof);

    }

    // line 38
    public function block_relation_value($context, array $blocks = array())
    {
        $__internal_1c11fa5c7328f663e665e32e11defdf741279945010f7cf133984d8495e2dc5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c11fa5c7328f663e665e32e11defdf741279945010f7cf133984d8495e2dc5c->enter($__internal_1c11fa5c7328f663e665e32e11defdf741279945010f7cf133984d8495e2dc5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        $__internal_fb86a8b74e43f6574b9a5d774c59495fa13694b4cb54a9cadff4bd70200343f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb86a8b74e43f6574b9a5d774c59495fa13694b4cb54a9cadff4bd70200343f8->enter($__internal_fb86a8b74e43f6574b9a5d774c59495fa13694b4cb54a9cadff4bd70200343f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["element"] ?? $this->getContext($context, "element")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
        
        $__internal_fb86a8b74e43f6574b9a5d774c59495fa13694b4cb54a9cadff4bd70200343f8->leave($__internal_fb86a8b74e43f6574b9a5d774c59495fa13694b4cb54a9cadff4bd70200343f8_prof);

        
        $__internal_1c11fa5c7328f663e665e32e11defdf741279945010f7cf133984d8495e2dc5c->leave($__internal_1c11fa5c7328f663e665e32e11defdf741279945010f7cf133984d8495e2dc5c_prof);

    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/CRUD/list_orm_one_to_many.html.twig";
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
", "@SonataDoctrineORMAdmin/CRUD/list_orm_one_to_many.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views/CRUD/list_orm_one_to_many.html.twig");
    }
}
