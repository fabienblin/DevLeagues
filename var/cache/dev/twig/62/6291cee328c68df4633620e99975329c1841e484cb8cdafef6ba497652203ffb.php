<?php

/* @SonataDoctrineORMAdmin/CRUD/list_orm_many_to_many.html.twig */
class __TwigTemplate_2453c9f56a2b688b4776ad0ae4e72e0b4eb60ae7434d8b5227121d5a0945dc10 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataDoctrineORMAdmin/CRUD/list_orm_many_to_many.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f088ee07c25860e50570602c5a56e0cd53eae9d727aa95540508303ebfedc771 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f088ee07c25860e50570602c5a56e0cd53eae9d727aa95540508303ebfedc771->enter($__internal_f088ee07c25860e50570602c5a56e0cd53eae9d727aa95540508303ebfedc771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/list_orm_many_to_many.html.twig"));

        $__internal_0aa30b509cc6b3fc201051b470b875800571d677419dfc79c747926b3fa0e083 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aa30b509cc6b3fc201051b470b875800571d677419dfc79c747926b3fa0e083->enter($__internal_0aa30b509cc6b3fc201051b470b875800571d677419dfc79c747926b3fa0e083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/CRUD/list_orm_many_to_many.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f088ee07c25860e50570602c5a56e0cd53eae9d727aa95540508303ebfedc771->leave($__internal_f088ee07c25860e50570602c5a56e0cd53eae9d727aa95540508303ebfedc771_prof);

        
        $__internal_0aa30b509cc6b3fc201051b470b875800571d677419dfc79c747926b3fa0e083->leave($__internal_0aa30b509cc6b3fc201051b470b875800571d677419dfc79c747926b3fa0e083_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_05029e37162dd3330eaa9b3b282d13cec966baae8aa5647418822407089b1d15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05029e37162dd3330eaa9b3b282d13cec966baae8aa5647418822407089b1d15->enter($__internal_05029e37162dd3330eaa9b3b282d13cec966baae8aa5647418822407089b1d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_580e5c7f530fcf3634f0fbf7c97e689bd9655cfabeb9551a5bd4d1c4a3975b83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_580e5c7f530fcf3634f0fbf7c97e689bd9655cfabeb9551a5bd4d1c4a3975b83->enter($__internal_580e5c7f530fcf3634f0fbf7c97e689bd9655cfabeb9551a5bd4d1c4a3975b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["route_name"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "name", array());
        // line 16
        echo "    ";
        if (($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasassociationadmin", array()) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasRoute", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))), "method"))) {
            // line 17
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
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
                if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "hasAccess", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method")) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
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
        
        $__internal_580e5c7f530fcf3634f0fbf7c97e689bd9655cfabeb9551a5bd4d1c4a3975b83->leave($__internal_580e5c7f530fcf3634f0fbf7c97e689bd9655cfabeb9551a5bd4d1c4a3975b83_prof);

        
        $__internal_05029e37162dd3330eaa9b3b282d13cec966baae8aa5647418822407089b1d15->leave($__internal_05029e37162dd3330eaa9b3b282d13cec966baae8aa5647418822407089b1d15_prof);

    }

    // line 32
    public function block_relation_link($context, array $blocks = array())
    {
        $__internal_7eda9cc17a468427b632abbc93888db3cd5231d39b893a2ff2a99c082b02f1f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eda9cc17a468427b632abbc93888db3cd5231d39b893a2ff2a99c082b02f1f3->enter($__internal_7eda9cc17a468427b632abbc93888db3cd5231d39b893a2ff2a99c082b02f1f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        $__internal_ea0480e30dcf8dc16391643d757583b07470bc213eca78df262ac17b1fbe6ec2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea0480e30dcf8dc16391643d757583b07470bc213eca78df262ac17b1fbe6ec2->enter($__internal_ea0480e30dcf8dc16391643d757583b07470bc213eca78df262ac17b1fbe6ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_link"));

        // line 33
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin", array()), "generateObjectUrl", array(0 => (isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), 1 => (isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
        echo "\">
        ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
        echo "
    </a>";
        
        $__internal_ea0480e30dcf8dc16391643d757583b07470bc213eca78df262ac17b1fbe6ec2->leave($__internal_ea0480e30dcf8dc16391643d757583b07470bc213eca78df262ac17b1fbe6ec2_prof);

        
        $__internal_7eda9cc17a468427b632abbc93888db3cd5231d39b893a2ff2a99c082b02f1f3->leave($__internal_7eda9cc17a468427b632abbc93888db3cd5231d39b893a2ff2a99c082b02f1f3_prof);

    }

    // line 38
    public function block_relation_value($context, array $blocks = array())
    {
        $__internal_86caa569feef51d5397136c1b35aa110317bde9b62b0f15d6e09e2130847a90d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86caa569feef51d5397136c1b35aa110317bde9b62b0f15d6e09e2130847a90d->enter($__internal_86caa569feef51d5397136c1b35aa110317bde9b62b0f15d6e09e2130847a90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        $__internal_9f4d2fa3e44c2a493ba85099425d78cb59c5fff4716fcad0cdb242038efc4275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f4d2fa3e44c2a493ba85099425d78cb59c5fff4716fcad0cdb242038efc4275->enter($__internal_9f4d2fa3e44c2a493ba85099425d78cb59c5fff4716fcad0cdb242038efc4275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "relation_value"));

        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
        
        $__internal_9f4d2fa3e44c2a493ba85099425d78cb59c5fff4716fcad0cdb242038efc4275->leave($__internal_9f4d2fa3e44c2a493ba85099425d78cb59c5fff4716fcad0cdb242038efc4275_prof);

        
        $__internal_86caa569feef51d5397136c1b35aa110317bde9b62b0f15d6e09e2130847a90d->leave($__internal_86caa569feef51d5397136c1b35aa110317bde9b62b0f15d6e09e2130847a90d_prof);

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
", "@SonataDoctrineORMAdmin/CRUD/list_orm_many_to_many.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views/CRUD/list_orm_many_to_many.html.twig");
    }
}
