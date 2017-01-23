<?php

/* @SonataDoctrineORMAdmin/CRUD/list_orm_one_to_many.html.twig */
class __TwigTemplate_9eb87ef817a5551031fde7b8abe875eea46176a6175942d7a7843f4fdfeda092 extends Twig_Template
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
        $__internal_7df645b6d467a1077526286088fbc6ba8b2e92c107391ab37a16834211f4a8db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7df645b6d467a1077526286088fbc6ba8b2e92c107391ab37a16834211f4a8db->enter($__internal_7df645b6d467a1077526286088fbc6ba8b2e92c107391ab37a16834211f4a8db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/list_orm_one_to_many.html.twig"));

        $__internal_2f36b0e2c07af19fe6923dd3ee82806538a6e44d6924198300d455df9deed02e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f36b0e2c07af19fe6923dd3ee82806538a6e44d6924198300d455df9deed02e->enter($__internal_2f36b0e2c07af19fe6923dd3ee82806538a6e44d6924198300d455df9deed02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/list_orm_one_to_many.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7df645b6d467a1077526286088fbc6ba8b2e92c107391ab37a16834211f4a8db->leave($__internal_7df645b6d467a1077526286088fbc6ba8b2e92c107391ab37a16834211f4a8db_prof);

        
        $__internal_2f36b0e2c07af19fe6923dd3ee82806538a6e44d6924198300d455df9deed02e->leave($__internal_2f36b0e2c07af19fe6923dd3ee82806538a6e44d6924198300d455df9deed02e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_dcfbd751ee124b16f68143e2eaa650d39f83e1dd51d026a51bd51653798c1dfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcfbd751ee124b16f68143e2eaa650d39f83e1dd51d026a51bd51653798c1dfc->enter($__internal_dcfbd751ee124b16f68143e2eaa650d39f83e1dd51d026a51bd51653798c1dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_b06a286441a4cba2367e4ea0c8693e386b1b66868693f3e2724527a0e7bed166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b06a286441a4cba2367e4ea0c8693e386b1b66868693f3e2724527a0e7bed166->enter($__internal_b06a286441a4cba2367e4ea0c8693e386b1b66868693f3e2724527a0e7bed166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_b06a286441a4cba2367e4ea0c8693e386b1b66868693f3e2724527a0e7bed166->leave($__internal_b06a286441a4cba2367e4ea0c8693e386b1b66868693f3e2724527a0e7bed166_prof);

        
        $__internal_dcfbd751ee124b16f68143e2eaa650d39f83e1dd51d026a51bd51653798c1dfc->leave($__internal_dcfbd751ee124b16f68143e2eaa650d39f83e1dd51d026a51bd51653798c1dfc_prof);

    }

    // line 32
    public function block_relation_link($context, array $blocks = array())
    {
        $__internal_cb1428ddbf6e113182373c74c9626b0c07dbc676b26116c581f99c72b3bfaef3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb1428ddbf6e113182373c74c9626b0c07dbc676b26116c581f99c72b3bfaef3->enter($__internal_cb1428ddbf6e113182373c74c9626b0c07dbc676b26116c581f99c72b3bfaef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        $__internal_69a1acbf34d7e50407287bcc5382a7f9b995ed6e3edd8c3c44adfc5316a2cb64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69a1acbf34d7e50407287bcc5382a7f9b995ed6e3edd8c3c44adfc5316a2cb64->enter($__internal_69a1acbf34d7e50407287bcc5382a7f9b995ed6e3edd8c3c44adfc5316a2cb64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        // line 33
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name")), 1 => ($context["element"] ?? $this->getContext($context, "element")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
        echo "\">
        ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["element"] ?? $this->getContext($context, "element")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
        echo "
    </a>";
        
        $__internal_69a1acbf34d7e50407287bcc5382a7f9b995ed6e3edd8c3c44adfc5316a2cb64->leave($__internal_69a1acbf34d7e50407287bcc5382a7f9b995ed6e3edd8c3c44adfc5316a2cb64_prof);

        
        $__internal_cb1428ddbf6e113182373c74c9626b0c07dbc676b26116c581f99c72b3bfaef3->leave($__internal_cb1428ddbf6e113182373c74c9626b0c07dbc676b26116c581f99c72b3bfaef3_prof);

    }

    // line 38
    public function block_relation_value($context, array $blocks = array())
    {
        $__internal_27ad1398256382467bb450c8c317ba3345e10fe4d1b9e5c44f09a3701aec5bc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27ad1398256382467bb450c8c317ba3345e10fe4d1b9e5c44f09a3701aec5bc2->enter($__internal_27ad1398256382467bb450c8c317ba3345e10fe4d1b9e5c44f09a3701aec5bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        $__internal_7dd9df3acb26860e266a3d349c8deacc81aedccfb80c21ef3e6a7659aa38e1e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dd9df3acb26860e266a3d349c8deacc81aedccfb80c21ef3e6a7659aa38e1e3->enter($__internal_7dd9df3acb26860e266a3d349c8deacc81aedccfb80c21ef3e6a7659aa38e1e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["element"] ?? $this->getContext($context, "element")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
        
        $__internal_7dd9df3acb26860e266a3d349c8deacc81aedccfb80c21ef3e6a7659aa38e1e3->leave($__internal_7dd9df3acb26860e266a3d349c8deacc81aedccfb80c21ef3e6a7659aa38e1e3_prof);

        
        $__internal_27ad1398256382467bb450c8c317ba3345e10fe4d1b9e5c44f09a3701aec5bc2->leave($__internal_27ad1398256382467bb450c8c317ba3345e10fe4d1b9e5c44f09a3701aec5bc2_prof);

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
