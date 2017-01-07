<?php

/* @SonataAdmin/CRUD/base_list_field.html.twig */
class __TwigTemplate_2b384ea7ec877484b7c6d762735adb00b2a270b22f12bd233f9ca90ff8258975 extends Twig_Template
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
        $__internal_1ea5aecb9c4c608db3ba1b65e31773762f8a8cd6fba1fc39772a70def3a33349 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ea5aecb9c4c608db3ba1b65e31773762f8a8cd6fba1fc39772a70def3a33349->enter($__internal_1ea5aecb9c4c608db3ba1b65e31773762f8a8cd6fba1fc39772a70def3a33349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_list_field.html.twig"));

        $__internal_833385a21580b3541fa33eac0aaa86b82798a258ed2e8bcdea359fb96d2fa4cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_833385a21580b3541fa33eac0aaa86b82798a258ed2e8bcdea359fb96d2fa4cb->enter($__internal_833385a21580b3541fa33eac0aaa86b82798a258ed2e8bcdea359fb96d2fa4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_list_field.html.twig"));

        // line 11
        echo "
<td class=\"sonata-ba-list-field sonata-ba-list-field-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type", array()), "html", null, true);
        echo "\" objectId=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\"";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "row_align", array(), "any", true, true)) {
            echo " style=\"text-align:";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "row_align", array()), "html", null, true);
            echo "\"";
        }
        echo ">
    ";
        // line 13
        $context["route"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", false, true), "name", array()), null)) : (null));
        // line 14
        echo "    ";
        $context["action"] = ((((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "show")) ? ("VIEW") : (twig_upper_filter($this->env, (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")))));
        // line 15
        echo "
    ";
        // line 16
        if ((((($this->getAttribute($this->getAttribute(        // line 17
(isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "identifier", array(), "any", true, true) &&         // line 18
(isset($context["route"]) ? $context["route"] : $this->getContext($context, "route"))) &&         // line 19
(isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))) && $this->getAttribute(        // line 20
(isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route"))), "method")) && $this->getAttribute(        // line 21
(isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), 1 => ((twig_in_filter((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), array(0 => "VIEW", 1 => "EDIT"))) ? ((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))) : (null))), "method"))) {
            // line 23
            echo "        <a class=\"sonata-link-identifier\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "route", array()), "parameters", array())), "method"), "html", null, true);
            echo "\">";
            // line 24
            $this->displayBlock('field', $context, $blocks);
            // line 37
            echo "</a>
    ";
        } else {
            // line 39
            echo "        ";
            $context["isEditable"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "editable", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "editable", array())) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"));
            // line 40
            echo "        ";
            $context["xEditableType"] = $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->getXEditableType($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type", array()));
            // line 41
            echo "
        ";
            // line 42
            if (((isset($context["isEditable"]) ? $context["isEditable"] : $this->getContext($context, "isEditable")) && (isset($context["xEditableType"]) ? $context["xEditableType"] : $this->getContext($context, "xEditableType")))) {
                // line 43
                echo "            ";
                $context["url"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_set_object_field_value", twig_array_merge(array("context" => "list", "field" => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "name", array()), "objectId" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "code" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "code", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")), (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getPersistentParameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "getPersistentParameters", array()), array())) : (array()))));
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
        
        $__internal_1ea5aecb9c4c608db3ba1b65e31773762f8a8cd6fba1fc39772a70def3a33349->leave($__internal_1ea5aecb9c4c608db3ba1b65e31773762f8a8cd6fba1fc39772a70def3a33349_prof);

        
        $__internal_833385a21580b3541fa33eac0aaa86b82798a258ed2e8bcdea359fb96d2fa4cb->leave($__internal_833385a21580b3541fa33eac0aaa86b82798a258ed2e8bcdea359fb96d2fa4cb_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_a3829928cfbd3a51cd7cb1a2d1cc847527f6788bdeb1ba7d08e7107e576a332f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3829928cfbd3a51cd7cb1a2d1cc847527f6788bdeb1ba7d08e7107e576a332f->enter($__internal_a3829928cfbd3a51cd7cb1a2d1cc847527f6788bdeb1ba7d08e7107e576a332f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_8ca916a92ea10e12c9b459fd302eaf5b472087eaed2ae8baf3adc467a2c78935 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ca916a92ea10e12c9b459fd302eaf5b472087eaed2ae8baf3adc467a2c78935->enter($__internal_8ca916a92ea10e12c9b459fd302eaf5b472087eaed2ae8baf3adc467a2c78935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 25
        echo "                ";
        ob_start();
        // line 26
        echo "                ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "collapse", array(), "any", true, true)) {
            // line 27
            echo "                    ";
            $context["collapse"] = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "collapse", array());
            // line 28
            echo "                    <div class=\"sonata-readmore\"
                          data-readmore-height=\"";
            // line 29
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "height", array()), 40)) : (40)), "html", null, true);
            echo "\"
                          data-readmore-more=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "more", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "more", array()), "read_more")) : ("read_more")), array(), "SonataAdminBundle"), "html", null, true);
            echo "\"
                          data-readmore-less=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "less", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "less", array()), "read_less")) : ("read_less")), array(), "SonataAdminBundle"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "</div>
                ";
        } else {
            // line 33
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
                ";
        }
        // line 35
        echo "                ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 36
        echo "            ";
        
        $__internal_8ca916a92ea10e12c9b459fd302eaf5b472087eaed2ae8baf3adc467a2c78935->leave($__internal_8ca916a92ea10e12c9b459fd302eaf5b472087eaed2ae8baf3adc467a2c78935_prof);

        
        $__internal_a3829928cfbd3a51cd7cb1a2d1cc847527f6788bdeb1ba7d08e7107e576a332f->leave($__internal_a3829928cfbd3a51cd7cb1a2d1cc847527f6788bdeb1ba7d08e7107e576a332f_prof);

    }

    // line 44
    public function block_field_span_attributes($context, array $blocks = array())
    {
        $__internal_e316aa1f0e2d2acb3eec79d5fd970825897742b31b3851b4359358d5d161cbf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e316aa1f0e2d2acb3eec79d5fd970825897742b31b3851b4359358d5d161cbf9->enter($__internal_e316aa1f0e2d2acb3eec79d5fd970825897742b31b3851b4359358d5d161cbf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

        $__internal_3b6e78206fa3f02c28253b149a71433b976c6ed539912b2ec59b7fc3c24f17c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b6e78206fa3f02c28253b149a71433b976c6ed539912b2ec59b7fc3c24f17c9->enter($__internal_3b6e78206fa3f02c28253b149a71433b976c6ed539912b2ec59b7fc3c24f17c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_span_attributes"));

        echo "class=\"x-editable\" data-type=\"";
        echo twig_escape_filter($this->env, (isset($context["xEditableType"]) ? $context["xEditableType"] : $this->getContext($context, "xEditableType")), "html", null, true);
        echo "\" data-value=\"";
        echo twig_escape_filter($this->env, (((($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "type", array()) == "date") &&  !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) ? ($this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "format", array(0 => "Y-m-d"), "method")) : ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))), "html", null, true);
        echo "\" data-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), array(), $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())), "html", null, true);
        echo "\" data-pk=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\" ";
        
        $__internal_3b6e78206fa3f02c28253b149a71433b976c6ed539912b2ec59b7fc3c24f17c9->leave($__internal_3b6e78206fa3f02c28253b149a71433b976c6ed539912b2ec59b7fc3c24f17c9_prof);

        
        $__internal_e316aa1f0e2d2acb3eec79d5fd970825897742b31b3851b4359358d5d161cbf9->leave($__internal_e316aa1f0e2d2acb3eec79d5fd970825897742b31b3851b4359358d5d161cbf9_prof);

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
", "@SonataAdmin/CRUD/base_list_field.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_list_field.html.twig");
    }
}
