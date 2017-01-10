<?php

/* @SonataAdmin/CRUD/edit_boolean.html.twig */
class __TwigTemplate_6decc3515bd353d848b82ee3324b69e28f03aece3252dc9ac18ed6fb06c8fdeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'label' => array($this, 'block_label'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a7f9d9d040b85d4e53d94d3f7b8f602f1c29941c563c9cbefc3ddab44fac182 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a7f9d9d040b85d4e53d94d3f7b8f602f1c29941c563c9cbefc3ddab44fac182->enter($__internal_9a7f9d9d040b85d4e53d94d3f7b8f602f1c29941c563c9cbefc3ddab44fac182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_boolean.html.twig"));

        $__internal_c3e642555dc2acd65218b032e9e696e3409ae35e239674732dbe805a5996aa92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3e642555dc2acd65218b032e9e696e3409ae35e239674732dbe805a5996aa92->enter($__internal_c3e642555dc2acd65218b032e9e696e3409ae35e239674732dbe805a5996aa92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_boolean.html.twig"));

        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_element"] ?? $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
            echo "sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('label', $context, $blocks);
        // line 23
        echo "
        <div class=\"sonata-ba-field-error-messages\">
            ";
        // line 25
        $this->displayBlock('errors', $context, $blocks);
        // line 26
        echo "        </div>

    </div>
</div>
";
        
        $__internal_9a7f9d9d040b85d4e53d94d3f7b8f602f1c29941c563c9cbefc3ddab44fac182->leave($__internal_9a7f9d9d040b85d4e53d94d3f7b8f602f1c29941c563c9cbefc3ddab44fac182_prof);

        
        $__internal_c3e642555dc2acd65218b032e9e696e3409ae35e239674732dbe805a5996aa92->leave($__internal_c3e642555dc2acd65218b032e9e696e3409ae35e239674732dbe805a5996aa92_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8589db1414f5f1980e111edff8a6e38d90e93351f1a3c502dbfab6f5625cad59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8589db1414f5f1980e111edff8a6e38d90e93351f1a3c502dbfab6f5625cad59->enter($__internal_8589db1414f5f1980e111edff8a6e38d90e93351f1a3c502dbfab6f5625cad59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_0fb8173b068ace78711c4d9554dedb4b97cb6d193e156060799795098e404dd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fb8173b068ace78711c4d9554dedb4b97cb6d193e156060799795098e404dd8->enter($__internal_0fb8173b068ace78711c4d9554dedb4b97cb6d193e156060799795098e404dd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget');
        
        $__internal_0fb8173b068ace78711c4d9554dedb4b97cb6d193e156060799795098e404dd8->leave($__internal_0fb8173b068ace78711c4d9554dedb4b97cb6d193e156060799795098e404dd8_prof);

        
        $__internal_8589db1414f5f1980e111edff8a6e38d90e93351f1a3c502dbfab6f5625cad59->leave($__internal_8589db1414f5f1980e111edff8a6e38d90e93351f1a3c502dbfab6f5625cad59_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_4180038ea44a4b0d0dd5cc7be14eceeda6dd9c912494038435c0fc6fb024a450 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4180038ea44a4b0d0dd5cc7be14eceeda6dd9c912494038435c0fc6fb024a450->enter($__internal_4180038ea44a4b0d0dd5cc7be14eceeda6dd9c912494038435c0fc6fb024a450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_c1274f9c8ec60871693b37ed9f48815118a2902a275098d8ee3fc846fca362d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1274f9c8ec60871693b37ed9f48815118a2902a275098d8ee3fc846fca362d2->enter($__internal_c1274f9c8ec60871693b37ed9f48815118a2902a275098d8ee3fc846fca362d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 16
        echo "            ";
        if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 17
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
            ";
        } else {
            // line 19
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'label');
            echo "
            ";
        }
        // line 21
        echo "            <br>
        ";
        
        $__internal_c1274f9c8ec60871693b37ed9f48815118a2902a275098d8ee3fc846fca362d2->leave($__internal_c1274f9c8ec60871693b37ed9f48815118a2902a275098d8ee3fc846fca362d2_prof);

        
        $__internal_4180038ea44a4b0d0dd5cc7be14eceeda6dd9c912494038435c0fc6fb024a450->leave($__internal_4180038ea44a4b0d0dd5cc7be14eceeda6dd9c912494038435c0fc6fb024a450_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_70ccbee89cec4eceeed2a5c9162e46d084581682f0436230264595e592a1b69a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70ccbee89cec4eceeed2a5c9162e46d084581682f0436230264595e592a1b69a->enter($__internal_70ccbee89cec4eceeed2a5c9162e46d084581682f0436230264595e592a1b69a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        $__internal_0952e66e8f7e1a69a922374392a7713a1d310c322e7bba40c3df500d3c8a302a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0952e66e8f7e1a69a922374392a7713a1d310c322e7bba40c3df500d3c8a302a->enter($__internal_0952e66e8f7e1a69a922374392a7713a1d310c322e7bba40c3df500d3c8a302a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'errors');
        
        $__internal_0952e66e8f7e1a69a922374392a7713a1d310c322e7bba40c3df500d3c8a302a->leave($__internal_0952e66e8f7e1a69a922374392a7713a1d310c322e7bba40c3df500d3c8a302a_prof);

        
        $__internal_70ccbee89cec4eceeed2a5c9162e46d084581682f0436230264595e592a1b69a->leave($__internal_70ccbee89cec4eceeed2a5c9162e46d084581682f0436230264595e592a1b69a_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 25,  105 => 21,  99 => 19,  93 => 17,  90 => 16,  81 => 15,  63 => 14,  49 => 26,  47 => 25,  43 => 23,  40 => 15,  38 => 14,  32 => 13,  28 => 11,);
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

<div>
    <div class=\"sonata-ba-field {% if field_element.vars.errors|length > 0 %}sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(field_element) }}{% endblock %}
        {% block label %}
            {% if field_description.options.name is defined %}
                {{ form_label(field_element, field_description.options.name) }}
            {% else %}
                {{ form_label(field_element) }}
            {% endif %}
            <br>
        {% endblock %}

        <div class=\"sonata-ba-field-error-messages\">
            {% block errors %}{{ form_errors(field_element) }}{% endblock %}
        </div>

    </div>
</div>
", "@SonataAdmin/CRUD/edit_boolean.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_boolean.html.twig");
    }
}
