<?php

/* @SonataAdmin/CRUD/base_inline_edit_field.html.twig */
class __TwigTemplate_7d5d23ae6cfcb187a2f96f7dc5b3b335f87201ec6c93e92662def3c0813dc058 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61e18d4ffc49ef7a336c1cc1727c24eb14dd1b9abd880191c37297e645715716 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61e18d4ffc49ef7a336c1cc1727c24eb14dd1b9abd880191c37297e645715716->enter($__internal_61e18d4ffc49ef7a336c1cc1727c24eb14dd1b9abd880191c37297e645715716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_inline_edit_field.html.twig"));

        $__internal_323b679d501cb426ff479eac43c56b932358457bfb6352ccb307c58a645c2ff9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_323b679d501cb426ff479eac43c56b932358457bfb6352ccb307c58a645c2ff9->enter($__internal_323b679d501cb426ff479eac43c56b932358457bfb6352ccb307c58a645c2ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_inline_edit_field.html.twig"));

        // line 11
        echo "
<div id=\"sonata-ba-field-container-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, (isset($context["edit"]) ? $context["edit"] : $this->getContext($context, "edit")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")), "html", null, true);
        echo " ";
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array()))) {
            echo "sonata-ba-field-error";
        }
        echo "\">

    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('field', $context, $blocks);
        // line 26
        echo "
    <div class=\"sonata-ba-field-error-messages\">
        ";
        // line 28
        $this->displayBlock('errors', $context, $blocks);
        // line 29
        echo "    </div>
</div>
";
        
        $__internal_61e18d4ffc49ef7a336c1cc1727c24eb14dd1b9abd880191c37297e645715716->leave($__internal_61e18d4ffc49ef7a336c1cc1727c24eb14dd1b9abd880191c37297e645715716_prof);

        
        $__internal_323b679d501cb426ff479eac43c56b932358457bfb6352ccb307c58a645c2ff9->leave($__internal_323b679d501cb426ff479eac43c56b932358457bfb6352ccb307c58a645c2ff9_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_6d9200fe97206a9ca1e61ce516defaf69ffa92ffeb89ca639c46a5b25a208ece = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d9200fe97206a9ca1e61ce516defaf69ffa92ffeb89ca639c46a5b25a208ece->enter($__internal_6d9200fe97206a9ca1e61ce516defaf69ffa92ffeb89ca639c46a5b25a208ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_9ee8473b499353fd98c79a07dddb372105f5e68e25a67ae2b1c3d24954567e5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ee8473b499353fd98c79a07dddb372105f5e68e25a67ae2b1c3d24954567e5b->enter($__internal_9ee8473b499353fd98c79a07dddb372105f5e68e25a67ae2b1c3d24954567e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if (((isset($context["inline"]) ? $context["inline"] : $this->getContext($context, "inline")) == "natural")) {
            // line 16
            echo "            ";
            if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
                // line 17
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
                echo "
            ";
            } else {
                // line 19
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'label');
                echo "
            ";
            }
            // line 21
            echo "            <br>
        ";
        }
        // line 23
        echo "    ";
        
        $__internal_9ee8473b499353fd98c79a07dddb372105f5e68e25a67ae2b1c3d24954567e5b->leave($__internal_9ee8473b499353fd98c79a07dddb372105f5e68e25a67ae2b1c3d24954567e5b_prof);

        
        $__internal_6d9200fe97206a9ca1e61ce516defaf69ffa92ffeb89ca639c46a5b25a208ece->leave($__internal_6d9200fe97206a9ca1e61ce516defaf69ffa92ffeb89ca639c46a5b25a208ece_prof);

    }

    // line 25
    public function block_field($context, array $blocks = array())
    {
        $__internal_9af99de0f2da458578bdb1552a79b94818f3220030305817b42d9356880495c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9af99de0f2da458578bdb1552a79b94818f3220030305817b42d9356880495c9->enter($__internal_9af99de0f2da458578bdb1552a79b94818f3220030305817b42d9356880495c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_e9756353839fc3ef18b86dd0d1d1bedcb1ca2deae5f6f2dfa42297d9e973e539 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9756353839fc3ef18b86dd0d1d1bedcb1ca2deae5f6f2dfa42297d9e973e539->enter($__internal_e9756353839fc3ef18b86dd0d1d1bedcb1ca2deae5f6f2dfa42297d9e973e539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_e9756353839fc3ef18b86dd0d1d1bedcb1ca2deae5f6f2dfa42297d9e973e539->leave($__internal_e9756353839fc3ef18b86dd0d1d1bedcb1ca2deae5f6f2dfa42297d9e973e539_prof);

        
        $__internal_9af99de0f2da458578bdb1552a79b94818f3220030305817b42d9356880495c9->leave($__internal_9af99de0f2da458578bdb1552a79b94818f3220030305817b42d9356880495c9_prof);

    }

    // line 28
    public function block_errors($context, array $blocks = array())
    {
        $__internal_aa16382429e960b636972b5e37576f62d490fc201383798782cbe6006d727a2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa16382429e960b636972b5e37576f62d490fc201383798782cbe6006d727a2b->enter($__internal_aa16382429e960b636972b5e37576f62d490fc201383798782cbe6006d727a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        $__internal_c3d22fc1a972cde9b8034b64f8d28e525f01a958599e72f082dd3d02af9e8335 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3d22fc1a972cde9b8034b64f8d28e525f01a958599e72f082dd3d02af9e8335->enter($__internal_c3d22fc1a972cde9b8034b64f8d28e525f01a958599e72f082dd3d02af9e8335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_c3d22fc1a972cde9b8034b64f8d28e525f01a958599e72f082dd3d02af9e8335->leave($__internal_c3d22fc1a972cde9b8034b64f8d28e525f01a958599e72f082dd3d02af9e8335_prof);

        
        $__internal_aa16382429e960b636972b5e37576f62d490fc201383798782cbe6006d727a2b->leave($__internal_aa16382429e960b636972b5e37576f62d490fc201383798782cbe6006d727a2b_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_inline_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 28,  110 => 25,  100 => 23,  96 => 21,  90 => 19,  84 => 17,  81 => 16,  78 => 15,  69 => 14,  57 => 29,  55 => 28,  51 => 26,  49 => 25,  46 => 24,  44 => 14,  31 => 12,  28 => 11,);
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

<div id=\"sonata-ba-field-container-{{ field_element.vars.id }}\" class=\"sonata-ba-field sonata-ba-field-{{ edit }}-{{ inline }} {% if field_element.vars.errors|length %}sonata-ba-field-error{% endif %}\">

    {% block label %}
        {% if inline == 'natural' %}
            {% if field_description.options.name is defined %}
                {{ form_label(field_element, field_description.options.name) }}
            {% else %}
                {{ form_label(field_element) }}
            {% endif %}
            <br>
        {% endif %}
    {% endblock %}

    {% block field %}{{ form_widget(field_element) }}{% endblock %}

    <div class=\"sonata-ba-field-error-messages\">
        {% block errors %}{{ form_errors(field_element) }}{% endblock %}
    </div>
</div>
", "@SonataAdmin/CRUD/base_inline_edit_field.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_inline_edit_field.html.twig");
    }
}
