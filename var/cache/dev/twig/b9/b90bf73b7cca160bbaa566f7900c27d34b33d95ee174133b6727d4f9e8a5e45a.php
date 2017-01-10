<?php

/* @SonataAdmin/CRUD/base_list_field.html.twig */
class __TwigTemplate_a26debe34fee63f7227902333c3820cd0da1c293692dfe303784bb2040a64714 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'field_span_attributes' => array($this, 'block_field_span_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_361700929a1e30710f6daf458727c019c53e4e857c6c460a86ed4128be2ff429 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_361700929a1e30710f6daf458727c019c53e4e857c6c460a86ed4128be2ff429->enter($__internal_361700929a1e30710f6daf458727c019c53e4e857c6c460a86ed4128be2ff429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_list_field.html.twig"));

        $__internal_87060e76ae0bdcb52e911e6b285aeba1897edddec3991bb40054df80a377bd1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87060e76ae0bdcb52e911e6b285aeba1897edddec3991bb40054df80a377bd1a->enter($__internal_87060e76ae0bdcb52e911e6b285aeba1897edddec3991bb40054df80a377bd1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_list_field.html.twig"));

        // line 11
        echo "
<td class=\"sonata-ba-list-field sonata-ba-list-field-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "type", array()), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\"";
        if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "row_align", array(), "any", true, true)) {
            echo " style=\"text-align:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "row_align", array()), "html", null, true);
            echo "\"";
        }
        echo ">
    ";
        // line 13
        $context["route"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "route", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "route", array(), "any", false, true), "name", array()), null)) : (null));
        // line 14
        echo "    ";
        $context["action"] = (((($context["route"] ?? $this->getContext($context, "route")) == "show")) ? ("VIEW") : (twig_upper_filter($this->env, ($context["route"] ?? $this->getContext($context, "route")))));
        // line 15
        echo "
    ";
        // line 16
        if ((((($this->getAttribute($this->getAttribute(        // line 17
($context["field_description"] ?? null), "options", array(), "any", false, true), "identifier", array(), "any", true, true) &&         // line 18
($context["route"] ?? $this->getContext($context, "route"))) &&         // line 19
($context["action"] ?? $this->getContext($context, "action"))) && $this->getAttribute(        // line 20
($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => ($context["route"] ?? $this->getContext($context, "route"))), "method")) && $this->getAttribute(        // line 21
($context["admin"] ?? $this->getContext($context, "admin")), "isGranted", array(0 => ($context["action"] ?? $this->getContext($context, "action")), 1 => ((twig_in_filter(($context["action"] ?? $this->getContext($context, "action")), array(0 => "VIEW", 1 => "EDIT"))) ? (($context["object"] ?? $this->getContext($context, "object"))) : (null))), "method"))) {
            // line 23
            echo "        <a class=\"sonata-link-identifier\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateObjectUrl", array(0 => ($context["route"] ?? $this->getContext($context, "route")), 1 => ($context["object"] ?? $this->getContext($context, "object")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
            echo "\">";
            // line 24
            $this->displayBlock('field', $context, $blocks);
            // line 37
            echo "</a>
    ";
        } else {
            // line 39
            echo "        ";
            $context["isEditable"] = (($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "editable", array())) && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"));
            // line 40
            echo "        ";
            $context["xEditableType"] = $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getXEditableType($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "type", array()));
            // line 41
            echo "
        ";
            // line 42
            if ((($context["isEditable"] ?? $this->getContext($context, "isEditable")) && ($context["xEditableType"] ?? $this->getContext($context, "xEditableType")))) {
                // line 43
                echo "            ";
                $context["url"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_set_object_field_value", twig_array_merge(array("context" => "list", "field" => $this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "name", array()), "objectId" => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "code" => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "code", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method")), (($this->getAttribute(($context["admin"] ?? null), "getPersistentParameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["admin"] ?? null), "getPersistentParameters", array()), array())) : (array()))));
                // line 44
                echo "            <span ";
                $this->displayBlock('field_span_attributes', $context, $blocks);
                echo ">
                ";
                // line 45
                $this->displayBlock("field", $context, $blocks);
                echo "
            </span>
        ";
            } else {
                // line 48
                echo "            ";
                $this->displayBlock("field", $context, $blocks);
                echo "
        ";
            }
            // line 50
            echo "    ";
        }
        // line 51
        echo "</td>
";
        
        $__internal_361700929a1e30710f6daf458727c019c53e4e857c6c460a86ed4128be2ff429->leave($__internal_361700929a1e30710f6daf458727c019c53e4e857c6c460a86ed4128be2ff429_prof);

        
        $__internal_87060e76ae0bdcb52e911e6b285aeba1897edddec3991bb40054df80a377bd1a->leave($__internal_87060e76ae0bdcb52e911e6b285aeba1897edddec3991bb40054df80a377bd1a_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_d3d277658f6fe2dab8b4849c694ecd706688540242dc1a09a1d0e48df5be8968 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3d277658f6fe2dab8b4849c694ecd706688540242dc1a09a1d0e48df5be8968->enter($__internal_d3d277658f6fe2dab8b4849c694ecd706688540242dc1a09a1d0e48df5be8968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_9d2e5e32962c678fd70bb17d5c66cb13dd4910eaaf68bd564353569769d33ec1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d2e5e32962c678fd70bb17d5c66cb13dd4910eaaf68bd564353569769d33ec1->enter($__internal_9d2e5e32962c678fd70bb17d5c66cb13dd4910eaaf68bd564353569769d33ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 25
        echo "                ";
        ob_start();
        // line 26
        echo "                ";
        if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "collapse", array(), "any", true, true)) {
            // line 27
            echo "                    ";
            $context["collapse"] = $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "collapse", array());
            // line 28
            echo "                    <div class=\"sonata-readmore\"
                          data-readmore-height=\"";
            // line 29
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collapse"] ?? null), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collapse"] ?? null), "height", array()), 40)) : (40)), "html", null, true);
            echo "\"
                          data-readmore-more=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["collapse"] ?? null), "more", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collapse"] ?? null), "more", array()), "read_more")) : ("read_more")), array(), "SonataAdminBundle"), "html", null, true);
            echo "\"
                          data-readmore-less=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["collapse"] ?? null), "less", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collapse"] ?? null), "less", array()), "read_less")) : ("read_less")), array(), "SonataAdminBundle"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "</div>
                ";
        } else {
            // line 33
            echo "                    ";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "
                ";
        }
        // line 35
        echo "                ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 36
        echo "            ";
        
        $__internal_9d2e5e32962c678fd70bb17d5c66cb13dd4910eaaf68bd564353569769d33ec1->leave($__internal_9d2e5e32962c678fd70bb17d5c66cb13dd4910eaaf68bd564353569769d33ec1_prof);

        
        $__internal_d3d277658f6fe2dab8b4849c694ecd706688540242dc1a09a1d0e48df5be8968->leave($__internal_d3d277658f6fe2dab8b4849c694ecd706688540242dc1a09a1d0e48df5be8968_prof);

    }

    // line 44
    public function block_field_span_attributes($context, array $blocks = array())
    {
        $__internal_78a61184d39b6f236750b5873564fb6cb070a7035b40f5d843886d0072b7fa71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78a61184d39b6f236750b5873564fb6cb070a7035b40f5d843886d0072b7fa71->enter($__internal_78a61184d39b6f236750b5873564fb6cb070a7035b40f5d843886d0072b7fa71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

        $__internal_f0ed3039fc658f992770f067ef9297104291dc92b434a418c8f057b561ae40c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0ed3039fc658f992770f067ef9297104291dc92b434a418c8f057b561ae40c3->enter($__internal_f0ed3039fc658f992770f067ef9297104291dc92b434a418c8f057b561ae40c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

        echo "class=\"x-editable\" data-type=\"";
        echo twig_escape_filter($this->env, ($context["xEditableType"] ?? $this->getContext($context, "xEditableType")), "html", null, true);
        echo "\" data-value=\"";
        echo twig_escape_filter($this->env, (((($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "type", array()) == "date") &&  !twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) ? ($this->getAttribute(($context["value"] ?? $this->getContext($context, "value")), "format", array(0 => "Y-m-d"), "method")) : (($context["value"] ?? $this->getContext($context, "value")))), "html", null, true);
        echo "\" data-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "label", array()), array(), $this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "translationDomain", array())), "html", null, true);
        echo "\" data-pk=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, ($context["url"] ?? $this->getContext($context, "url")), "html", null, true);
        echo "\" ";
        
        $__internal_f0ed3039fc658f992770f067ef9297104291dc92b434a418c8f057b561ae40c3->leave($__internal_f0ed3039fc658f992770f067ef9297104291dc92b434a418c8f057b561ae40c3_prof);

        
        $__internal_78a61184d39b6f236750b5873564fb6cb070a7035b40f5d843886d0072b7fa71->leave($__internal_78a61184d39b6f236750b5873564fb6cb070a7035b40f5d843886d0072b7fa71_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_list_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 44,  157 => 36,  154 => 35,  148 => 33,  141 => 31,  137 => 30,  133 => 29,  130 => 28,  127 => 27,  124 => 26,  121 => 25,  112 => 24,  101 => 51,  98 => 50,  92 => 48,  86 => 45,  81 => 44,  78 => 43,  76 => 42,  73 => 41,  70 => 40,  67 => 39,  63 => 37,  61 => 24,  57 => 23,  55 => 21,  54 => 20,  53 => 19,  52 => 18,  51 => 17,  50 => 16,  47 => 15,  44 => 14,  42 => 13,  30 => 12,  27 => 11,);
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

<td class=\"sonata-ba-list-field sonata-ba-list-field-{{ field_description.type }}\" objectId=\"{{ admin.id(object) }}\"{% if field_description.options.row_align is defined %} style=\"text-align:{{ field_description.options.row_align }}\"{% endif %}>
    {% set route = field_description.options.route.name|default(null) %}
    {% set action = route == 'show' ? 'VIEW' : route|upper %}

    {% if
        field_description.options.identifier is defined
        and route
        and action
        and admin.hasRoute(route)
        and admin.isGranted(action, action in ['VIEW', 'EDIT'] ? object : null)
    %}
        <a class=\"sonata-link-identifier\" href=\"{{ admin.generateObjectUrl(route, object, field_description.options.route.parameters) }}\">
            {%- block field %}
                {% spaceless %}
                {% if field_description.options.collapse is defined %}
                    {% set collapse = field_description.options.collapse %}
                    <div class=\"sonata-readmore\"
                          data-readmore-height=\"{{ collapse.height|default(40) }}\"
                          data-readmore-more=\"{{ collapse.more|default('read_more')|trans({}, 'SonataAdminBundle') }}\"
                          data-readmore-less=\"{{ collapse.less|default('read_less')|trans({}, 'SonataAdminBundle') }}\">{{ value }}</div>
                {% else %}
                    {{ value }}
                {% endif %}
                {% endspaceless %}
            {% endblock -%}
        </a>
    {% else %}
        {% set isEditable = field_description.options.editable is defined and field_description.options.editable and admin.isGranted('EDIT', object) %}
        {% set xEditableType = field_description.type|sonata_xeditable_type %}

        {% if isEditable and xEditableType %}
            {% set url = path('sonata_admin_set_object_field_value', { 'context': 'list', 'field': field_description.name, 'objectId': admin.id(object), 'code': admin.code(object) }|merge(admin.getPersistentParameters|default([])) )  %}
            <span {% block field_span_attributes %}class=\"x-editable\" data-type=\"{{ xEditableType }}\" data-value=\"{{ field_description.type == 'date' and value is not empty ? value.format('Y-m-d') : value }}\" data-title=\"{{ field_description.label|trans({}, field_description.translationDomain) }}\" data-pk=\"{{ admin.id(object) }}\" data-url=\"{{ url }}\" {% endblock %}>
                {{ block('field') }}
            </span>
        {% else %}
            {{ block('field') }}
        {% endif %}
    {% endif %}
</td>
", "@SonataAdmin/CRUD/base_list_field.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_list_field.html.twig");
    }
}
