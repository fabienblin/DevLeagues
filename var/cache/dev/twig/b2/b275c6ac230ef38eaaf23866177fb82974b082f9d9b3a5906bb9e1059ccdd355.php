<?php

/* @SonataAdmin/CRUD/base_inline_edit_field.html.twig */
class __TwigTemplate_4e189e5122a976aa5d210467b9c1e92191818199ea380084e3a91b9448efa2ff extends Twig_Template
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
        $__internal_970d65e51535bfff1e27820a80ca1337ac15ebea6a1431b01c8307f27e4fa6c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_970d65e51535bfff1e27820a80ca1337ac15ebea6a1431b01c8307f27e4fa6c6->enter($__internal_970d65e51535bfff1e27820a80ca1337ac15ebea6a1431b01c8307f27e4fa6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_inline_edit_field.html.twig"));

        $__internal_d7329d151cc3fa31d8f61f09ca09049514e6e6b14c04d6bfdea5d15009f0113f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7329d151cc3fa31d8f61f09ca09049514e6e6b14c04d6bfdea5d15009f0113f->enter($__internal_d7329d151cc3fa31d8f61f09ca09049514e6e6b14c04d6bfdea5d15009f0113f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_inline_edit_field.html.twig"));

        // line 11
        echo "
<div id=\"sonata-ba-field-container-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_element"] ?? $this->getContext($context, "field_element")), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, ($context["edit"] ?? $this->getContext($context, "edit")), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["inline"] ?? $this->getContext($context, "inline")), "html", null, true);
        echo " ";
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_element"] ?? $this->getContext($context, "field_element")), "vars", array()), "errors", array()))) {
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
        
        $__internal_970d65e51535bfff1e27820a80ca1337ac15ebea6a1431b01c8307f27e4fa6c6->leave($__internal_970d65e51535bfff1e27820a80ca1337ac15ebea6a1431b01c8307f27e4fa6c6_prof);

        
        $__internal_d7329d151cc3fa31d8f61f09ca09049514e6e6b14c04d6bfdea5d15009f0113f->leave($__internal_d7329d151cc3fa31d8f61f09ca09049514e6e6b14c04d6bfdea5d15009f0113f_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_8fd40e6d3a18c49150af3d26d51c90f45ed00165407bb81952907db13346b829 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fd40e6d3a18c49150af3d26d51c90f45ed00165407bb81952907db13346b829->enter($__internal_8fd40e6d3a18c49150af3d26d51c90f45ed00165407bb81952907db13346b829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_07c2d5b695068ea6932bd0f2c2bbc9712cb087cd9d0797eba09ae12c1aa78a58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07c2d5b695068ea6932bd0f2c2bbc9712cb087cd9d0797eba09ae12c1aa78a58->enter($__internal_07c2d5b695068ea6932bd0f2c2bbc9712cb087cd9d0797eba09ae12c1aa78a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if ((($context["inline"] ?? $this->getContext($context, "inline")) == "natural")) {
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
        }
        // line 23
        echo "    ";
        
        $__internal_07c2d5b695068ea6932bd0f2c2bbc9712cb087cd9d0797eba09ae12c1aa78a58->leave($__internal_07c2d5b695068ea6932bd0f2c2bbc9712cb087cd9d0797eba09ae12c1aa78a58_prof);

        
        $__internal_8fd40e6d3a18c49150af3d26d51c90f45ed00165407bb81952907db13346b829->leave($__internal_8fd40e6d3a18c49150af3d26d51c90f45ed00165407bb81952907db13346b829_prof);

    }

    // line 25
    public function block_field($context, array $blocks = array())
    {
        $__internal_1a292e2328b662eb5465bf9dd5a73f107c185c7a2feee87e1f58e3e31255da87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a292e2328b662eb5465bf9dd5a73f107c185c7a2feee87e1f58e3e31255da87->enter($__internal_1a292e2328b662eb5465bf9dd5a73f107c185c7a2feee87e1f58e3e31255da87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_ceee92c8c173f478f61fce1560b52ee2c8b83f8c66ffe898050a9dcdbe268264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceee92c8c173f478f61fce1560b52ee2c8b83f8c66ffe898050a9dcdbe268264->enter($__internal_ceee92c8c173f478f61fce1560b52ee2c8b83f8c66ffe898050a9dcdbe268264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget');
        
        $__internal_ceee92c8c173f478f61fce1560b52ee2c8b83f8c66ffe898050a9dcdbe268264->leave($__internal_ceee92c8c173f478f61fce1560b52ee2c8b83f8c66ffe898050a9dcdbe268264_prof);

        
        $__internal_1a292e2328b662eb5465bf9dd5a73f107c185c7a2feee87e1f58e3e31255da87->leave($__internal_1a292e2328b662eb5465bf9dd5a73f107c185c7a2feee87e1f58e3e31255da87_prof);

    }

    // line 28
    public function block_errors($context, array $blocks = array())
    {
        $__internal_75ed8ba8e115b3b1d34b7915d9bd0ceeeccd432e380d5261621dc938ca3cb709 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75ed8ba8e115b3b1d34b7915d9bd0ceeeccd432e380d5261621dc938ca3cb709->enter($__internal_75ed8ba8e115b3b1d34b7915d9bd0ceeeccd432e380d5261621dc938ca3cb709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        $__internal_add17d9b8ce84b885174fa6abe9f4adc59343e3aa9c9461b0b07120ed274bfdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_add17d9b8ce84b885174fa6abe9f4adc59343e3aa9c9461b0b07120ed274bfdc->enter($__internal_add17d9b8ce84b885174fa6abe9f4adc59343e3aa9c9461b0b07120ed274bfdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'errors');
        
        $__internal_add17d9b8ce84b885174fa6abe9f4adc59343e3aa9c9461b0b07120ed274bfdc->leave($__internal_add17d9b8ce84b885174fa6abe9f4adc59343e3aa9c9461b0b07120ed274bfdc_prof);

        
        $__internal_75ed8ba8e115b3b1d34b7915d9bd0ceeeccd432e380d5261621dc938ca3cb709->leave($__internal_75ed8ba8e115b3b1d34b7915d9bd0ceeeccd432e380d5261621dc938ca3cb709_prof);

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
", "@SonataAdmin/CRUD/base_inline_edit_field.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_inline_edit_field.html.twig");
    }
}
