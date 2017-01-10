<?php

/* @SonataAdmin/CRUD/base_filter_field.html.twig */
class __TwigTemplate_8b58ae5eeb2a3bd8e0a023483b3b6050911eae61135f5eeeb5f32d52ea76f610 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b9bce801745b44b267e084ea4f4ba2e5e0c52b1e1e1a4bf09c8a4116e568e6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b9bce801745b44b267e084ea4f4ba2e5e0c52b1e1e1a4bf09c8a4116e568e6d->enter($__internal_9b9bce801745b44b267e084ea4f4ba2e5e0c52b1e1e1a4bf09c8a4116e568e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_filter_field.html.twig"));

        $__internal_b8c8c38b2698f8ea51d2bdd347403b5dbec1408b6c944f4322fa398585829da3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8c8c38b2698f8ea51d2bdd347403b5dbec1408b6c944f4322fa398585829da3->enter($__internal_b8c8c38b2698f8ea51d2bdd347403b5dbec1408b6c944f4322fa398585829da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_filter_field.html.twig"));

        // line 11
        echo "

<div>
    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 22
        echo "
    <div class=\"sonata-ba-field";
        // line 23
        if ($this->getAttribute($this->getAttribute(($context["filter_form"] ?? $this->getContext($context, "filter_form")), "vars", array()), "errors", array())) {
            echo " sonata-ba-field-error";
        }
        echo "\">
        ";
        // line 24
        $this->displayBlock('field', $context, $blocks);
        // line 25
        echo "    </div>
</div>
";
        
        $__internal_9b9bce801745b44b267e084ea4f4ba2e5e0c52b1e1e1a4bf09c8a4116e568e6d->leave($__internal_9b9bce801745b44b267e084ea4f4ba2e5e0c52b1e1e1a4bf09c8a4116e568e6d_prof);

        
        $__internal_b8c8c38b2698f8ea51d2bdd347403b5dbec1408b6c944f4322fa398585829da3->leave($__internal_b8c8c38b2698f8ea51d2bdd347403b5dbec1408b6c944f4322fa398585829da3_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_41d16039ab2e730f3eb3f56e2a458abdbff20fdcc6b5cc6b21025afa782dfb17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41d16039ab2e730f3eb3f56e2a458abdbff20fdcc6b5cc6b21025afa782dfb17->enter($__internal_41d16039ab2e730f3eb3f56e2a458abdbff20fdcc6b5cc6b21025afa782dfb17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_f828dbb140ae320e0f8a19c8e6a420e2cecf093771ea80a8032a0c9a50b0b3f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f828dbb140ae320e0f8a19c8e6a420e2cecf093771ea80a8032a0c9a50b0b3f4->enter($__internal_f828dbb140ae320e0f8a19c8e6a420e2cecf093771ea80a8032a0c9a50b0b3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 15
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["filter"] ?? null), "fielddescription", array(), "any", false, true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 16
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["filter_form"] ?? $this->getContext($context, "filter_form")), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getAttribute(($context["filter"] ?? $this->getContext($context, "filter")), "fielddescription", array()), "options", array()), "name", array())) ? array() : array("label" => $_label_)));
            echo "
        ";
        } else {
            // line 18
            echo "            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["filter_form"] ?? $this->getContext($context, "filter_form")), 'label');
            echo "
        ";
        }
        // line 20
        echo "        <br>
    ";
        
        $__internal_f828dbb140ae320e0f8a19c8e6a420e2cecf093771ea80a8032a0c9a50b0b3f4->leave($__internal_f828dbb140ae320e0f8a19c8e6a420e2cecf093771ea80a8032a0c9a50b0b3f4_prof);

        
        $__internal_41d16039ab2e730f3eb3f56e2a458abdbff20fdcc6b5cc6b21025afa782dfb17->leave($__internal_41d16039ab2e730f3eb3f56e2a458abdbff20fdcc6b5cc6b21025afa782dfb17_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_9e3def92a0c53e81e0c7bfbeb52a3a1aae805f598d2be6a33cb4eba30dd9e315 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e3def92a0c53e81e0c7bfbeb52a3a1aae805f598d2be6a33cb4eba30dd9e315->enter($__internal_9e3def92a0c53e81e0c7bfbeb52a3a1aae805f598d2be6a33cb4eba30dd9e315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_fdf134b57c89a0bdc3a3e3a8cb2618c4ba53b67f27bafa10bf66e9c9b1ed695c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdf134b57c89a0bdc3a3e3a8cb2618c4ba53b67f27bafa10bf66e9c9b1ed695c->enter($__internal_fdf134b57c89a0bdc3a3e3a8cb2618c4ba53b67f27bafa10bf66e9c9b1ed695c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["filter_form"] ?? $this->getContext($context, "filter_form")), 'widget');
        
        $__internal_fdf134b57c89a0bdc3a3e3a8cb2618c4ba53b67f27bafa10bf66e9c9b1ed695c->leave($__internal_fdf134b57c89a0bdc3a3e3a8cb2618c4ba53b67f27bafa10bf66e9c9b1ed695c_prof);

        
        $__internal_9e3def92a0c53e81e0c7bfbeb52a3a1aae805f598d2be6a33cb4eba30dd9e315->leave($__internal_9e3def92a0c53e81e0c7bfbeb52a3a1aae805f598d2be6a33cb4eba30dd9e315_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_filter_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 24,  81 => 20,  75 => 18,  69 => 16,  66 => 15,  57 => 14,  45 => 25,  43 => 24,  37 => 23,  34 => 22,  32 => 14,  27 => 11,);
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
    {% block label %}
        {% if filter.fielddescription.options.name is defined %}
            {{ form_label(filter_form, filter.fielddescription.options.name) }}
        {% else %}
            {{ form_label(filter_form) }}
        {% endif %}
        <br>
    {% endblock %}

    <div class=\"sonata-ba-field{% if filter_form.vars.errors %} sonata-ba-field-error{% endif %}\">
        {% block field %}{{ form_widget(filter_form) }}{% endblock %}
    </div>
</div>
", "@SonataAdmin/CRUD/base_filter_field.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_filter_field.html.twig");
    }
}
