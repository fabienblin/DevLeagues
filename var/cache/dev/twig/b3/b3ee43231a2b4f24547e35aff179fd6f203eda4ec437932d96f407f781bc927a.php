<?php

/* @SonataDoctrineORMAdmin/CRUD/list_orm_many_to_many.html.twig */
class __TwigTemplate_1f3a5861764e7e51cf6ba6f22de3a8c982b7a78a0f5be96f38f65d95dd15fe4e extends Twig_Template
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
        $__internal_d5dbe8b083b5efc3df7ea3a9b05a5f1b5823e92560672b4918df104f7ab039f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5dbe8b083b5efc3df7ea3a9b05a5f1b5823e92560672b4918df104f7ab039f2->enter($__internal_d5dbe8b083b5efc3df7ea3a9b05a5f1b5823e92560672b4918df104f7ab039f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/list_orm_many_to_many.html.twig"));

        $__internal_b967f1f47191ca9e64385958eb048c3111ff897e25461f3eb3252f7691109422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b967f1f47191ca9e64385958eb048c3111ff897e25461f3eb3252f7691109422->enter($__internal_b967f1f47191ca9e64385958eb048c3111ff897e25461f3eb3252f7691109422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/list_orm_many_to_many.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5dbe8b083b5efc3df7ea3a9b05a5f1b5823e92560672b4918df104f7ab039f2->leave($__internal_d5dbe8b083b5efc3df7ea3a9b05a5f1b5823e92560672b4918df104f7ab039f2_prof);

        
        $__internal_b967f1f47191ca9e64385958eb048c3111ff897e25461f3eb3252f7691109422->leave($__internal_b967f1f47191ca9e64385958eb048c3111ff897e25461f3eb3252f7691109422_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_1c82eeab114a5ad2e983f75568b806541d8faf37e7b9d91d315be1437e3ffe84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c82eeab114a5ad2e983f75568b806541d8faf37e7b9d91d315be1437e3ffe84->enter($__internal_1c82eeab114a5ad2e983f75568b806541d8faf37e7b9d91d315be1437e3ffe84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_a9b0035fd3910b1f193eeb8cf47e57f68783119f31f73e321552ab9db9ff63a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9b0035fd3910b1f193eeb8cf47e57f68783119f31f73e321552ab9db9ff63a1->enter($__internal_a9b0035fd3910b1f193eeb8cf47e57f68783119f31f73e321552ab9db9ff63a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_a9b0035fd3910b1f193eeb8cf47e57f68783119f31f73e321552ab9db9ff63a1->leave($__internal_a9b0035fd3910b1f193eeb8cf47e57f68783119f31f73e321552ab9db9ff63a1_prof);

        
        $__internal_1c82eeab114a5ad2e983f75568b806541d8faf37e7b9d91d315be1437e3ffe84->leave($__internal_1c82eeab114a5ad2e983f75568b806541d8faf37e7b9d91d315be1437e3ffe84_prof);

    }

    // line 32
    public function block_relation_link($context, array $blocks = array())
    {
        $__internal_f749e17695215938162e201cd7c0248848fc7dfb5f19581549facbbad6bf5001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f749e17695215938162e201cd7c0248848fc7dfb5f19581549facbbad6bf5001->enter($__internal_f749e17695215938162e201cd7c0248848fc7dfb5f19581549facbbad6bf5001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        $__internal_3d1d57c7f383434bb395e4e4a119c1b6e44cf913b526834c99e6318b05cff879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d1d57c7f383434bb395e4e4a119c1b6e44cf913b526834c99e6318b05cff879->enter($__internal_3d1d57c7f383434bb395e4e4a119c1b6e44cf913b526834c99e6318b05cff879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        // line 33
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => ($context["route_name"] ?? $this->getContext($context, "route_name")), 1 => ($context["element"] ?? $this->getContext($context, "element")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
        echo "\">
        ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["element"] ?? $this->getContext($context, "element")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
        echo "
    </a>";
        
        $__internal_3d1d57c7f383434bb395e4e4a119c1b6e44cf913b526834c99e6318b05cff879->leave($__internal_3d1d57c7f383434bb395e4e4a119c1b6e44cf913b526834c99e6318b05cff879_prof);

        
        $__internal_f749e17695215938162e201cd7c0248848fc7dfb5f19581549facbbad6bf5001->leave($__internal_f749e17695215938162e201cd7c0248848fc7dfb5f19581549facbbad6bf5001_prof);

    }

    // line 38
    public function block_relation_value($context, array $blocks = array())
    {
        $__internal_7bfee6d90de9f5a495f3b47bf6cec9a443dd50deeafebfc1803764136daa28e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bfee6d90de9f5a495f3b47bf6cec9a443dd50deeafebfc1803764136daa28e0->enter($__internal_7bfee6d90de9f5a495f3b47bf6cec9a443dd50deeafebfc1803764136daa28e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        $__internal_d18def2b586ad2fd7195df1d88c6562aa73df4af7722cb148917af24bd83be39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d18def2b586ad2fd7195df1d88c6562aa73df4af7722cb148917af24bd83be39->enter($__internal_d18def2b586ad2fd7195df1d88c6562aa73df4af7722cb148917af24bd83be39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement(($context["element"] ?? $this->getContext($context, "element")), ($context["field_description"] ?? $this->getContext($context, "field_description"))), "html", null, true);
        
        $__internal_d18def2b586ad2fd7195df1d88c6562aa73df4af7722cb148917af24bd83be39->leave($__internal_d18def2b586ad2fd7195df1d88c6562aa73df4af7722cb148917af24bd83be39_prof);

        
        $__internal_7bfee6d90de9f5a495f3b47bf6cec9a443dd50deeafebfc1803764136daa28e0->leave($__internal_7bfee6d90de9f5a495f3b47bf6cec9a443dd50deeafebfc1803764136daa28e0_prof);

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
