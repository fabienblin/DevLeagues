<?php

/* @SonataAdmin/CRUD/edit_boolean.html.twig */
class __TwigTemplate_16099e4f6a3b56812e77711bc780a31a44c5ed8f427f8ce20a1550adf3c51483 extends Twig_Template
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
        $__internal_3792f773f99c913ff170a1040f6405365110930add0500d9f88dfed9942255e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3792f773f99c913ff170a1040f6405365110930add0500d9f88dfed9942255e9->enter($__internal_3792f773f99c913ff170a1040f6405365110930add0500d9f88dfed9942255e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_boolean.html.twig"));

        $__internal_9591a9b06e1cf0bfa8ba7393c3269e4f3512be9ff708373abbef0b47dbfc9c31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9591a9b06e1cf0bfa8ba7393c3269e4f3512be9ff708373abbef0b47dbfc9c31->enter($__internal_9591a9b06e1cf0bfa8ba7393c3269e4f3512be9ff708373abbef0b47dbfc9c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_boolean.html.twig"));

        // line 11
        echo "
<div>
    <div class=\"sonata-ba-field ";
        // line 13
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), "vars", array()), "errors", array())) > 0)) {
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
        
        $__internal_3792f773f99c913ff170a1040f6405365110930add0500d9f88dfed9942255e9->leave($__internal_3792f773f99c913ff170a1040f6405365110930add0500d9f88dfed9942255e9_prof);

        
        $__internal_9591a9b06e1cf0bfa8ba7393c3269e4f3512be9ff708373abbef0b47dbfc9c31->leave($__internal_9591a9b06e1cf0bfa8ba7393c3269e4f3512be9ff708373abbef0b47dbfc9c31_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d1115efa553ce4de9e6c406c3027f3d8d7c00a13b796c4f919b2f96f8febd4c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1115efa553ce4de9e6c406c3027f3d8d7c00a13b796c4f919b2f96f8febd4c8->enter($__internal_d1115efa553ce4de9e6c406c3027f3d8d7c00a13b796c4f919b2f96f8febd4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_e8ee39c1aab9b5dde6d861bae11a66e42ef6991c19ff55e2add60ae2e5e8beba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8ee39c1aab9b5dde6d861bae11a66e42ef6991c19ff55e2add60ae2e5e8beba->enter($__internal_e8ee39c1aab9b5dde6d861bae11a66e42ef6991c19ff55e2add60ae2e5e8beba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget');
        
        $__internal_e8ee39c1aab9b5dde6d861bae11a66e42ef6991c19ff55e2add60ae2e5e8beba->leave($__internal_e8ee39c1aab9b5dde6d861bae11a66e42ef6991c19ff55e2add60ae2e5e8beba_prof);

        
        $__internal_d1115efa553ce4de9e6c406c3027f3d8d7c00a13b796c4f919b2f96f8febd4c8->leave($__internal_d1115efa553ce4de9e6c406c3027f3d8d7c00a13b796c4f919b2f96f8febd4c8_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_0fce73ba2928846b477baf4558a546eb14a7a00486f62913963ddcbf8ad624e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fce73ba2928846b477baf4558a546eb14a7a00486f62913963ddcbf8ad624e6->enter($__internal_0fce73ba2928846b477baf4558a546eb14a7a00486f62913963ddcbf8ad624e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_63bd575781174ed2e390f856d377a7dc1da7ca4cb342cbed571990765de79b9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63bd575781174ed2e390f856d377a7dc1da7ca4cb342cbed571990765de79b9c->enter($__internal_63bd575781174ed2e390f856d377a7dc1da7ca4cb342cbed571990765de79b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_63bd575781174ed2e390f856d377a7dc1da7ca4cb342cbed571990765de79b9c->leave($__internal_63bd575781174ed2e390f856d377a7dc1da7ca4cb342cbed571990765de79b9c_prof);

        
        $__internal_0fce73ba2928846b477baf4558a546eb14a7a00486f62913963ddcbf8ad624e6->leave($__internal_0fce73ba2928846b477baf4558a546eb14a7a00486f62913963ddcbf8ad624e6_prof);

    }

    // line 25
    public function block_errors($context, array $blocks = array())
    {
        $__internal_bcc95d2b2d55985eec1a4670f9d0695d02040e29fae21abdc8a0b8383f275c6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcc95d2b2d55985eec1a4670f9d0695d02040e29fae21abdc8a0b8383f275c6b->enter($__internal_bcc95d2b2d55985eec1a4670f9d0695d02040e29fae21abdc8a0b8383f275c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        $__internal_a38e6f244c5da68e88d31d773f49647738f6a87e8bfe91bad0136393672caf75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a38e6f244c5da68e88d31d773f49647738f6a87e8bfe91bad0136393672caf75->enter($__internal_a38e6f244c5da68e88d31d773f49647738f6a87e8bfe91bad0136393672caf75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'errors');
        
        $__internal_a38e6f244c5da68e88d31d773f49647738f6a87e8bfe91bad0136393672caf75->leave($__internal_a38e6f244c5da68e88d31d773f49647738f6a87e8bfe91bad0136393672caf75_prof);

        
        $__internal_bcc95d2b2d55985eec1a4670f9d0695d02040e29fae21abdc8a0b8383f275c6b->leave($__internal_bcc95d2b2d55985eec1a4670f9d0695d02040e29fae21abdc8a0b8383f275c6b_prof);

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
", "@SonataAdmin/CRUD/edit_boolean.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_boolean.html.twig");
    }
}
