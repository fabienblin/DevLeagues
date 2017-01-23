<?php

/* @SonataAdmin/CRUD/base_filter_field.html.twig */
class __TwigTemplate_561914dee8e436ca3163dfc3629ccb2b8f9ad4a234a188068a4a9d56cba9842b extends Twig_Template
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
        $__internal_da009a5d1a1d779144fa7cbeb0ec6185590f8c906ccc9f8640c99335b31b12bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da009a5d1a1d779144fa7cbeb0ec6185590f8c906ccc9f8640c99335b31b12bb->enter($__internal_da009a5d1a1d779144fa7cbeb0ec6185590f8c906ccc9f8640c99335b31b12bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_filter_field.html.twig"));

        $__internal_85082fcb07098f492c71a9620828558526975b4c545fbef81fe1cde716c20b40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85082fcb07098f492c71a9620828558526975b4c545fbef81fe1cde716c20b40->enter($__internal_85082fcb07098f492c71a9620828558526975b4c545fbef81fe1cde716c20b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_filter_field.html.twig"));

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
        
        $__internal_da009a5d1a1d779144fa7cbeb0ec6185590f8c906ccc9f8640c99335b31b12bb->leave($__internal_da009a5d1a1d779144fa7cbeb0ec6185590f8c906ccc9f8640c99335b31b12bb_prof);

        
        $__internal_85082fcb07098f492c71a9620828558526975b4c545fbef81fe1cde716c20b40->leave($__internal_85082fcb07098f492c71a9620828558526975b4c545fbef81fe1cde716c20b40_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_dc81215b864516cb161c37ed9ef26cdd51584d85009ebc15653ed0d3ce103880 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc81215b864516cb161c37ed9ef26cdd51584d85009ebc15653ed0d3ce103880->enter($__internal_dc81215b864516cb161c37ed9ef26cdd51584d85009ebc15653ed0d3ce103880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_0326fb1958355e18dc4361a58dfe12c60f83f673eb337e7e80b96c965801ee50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0326fb1958355e18dc4361a58dfe12c60f83f673eb337e7e80b96c965801ee50->enter($__internal_0326fb1958355e18dc4361a58dfe12c60f83f673eb337e7e80b96c965801ee50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_0326fb1958355e18dc4361a58dfe12c60f83f673eb337e7e80b96c965801ee50->leave($__internal_0326fb1958355e18dc4361a58dfe12c60f83f673eb337e7e80b96c965801ee50_prof);

        
        $__internal_dc81215b864516cb161c37ed9ef26cdd51584d85009ebc15653ed0d3ce103880->leave($__internal_dc81215b864516cb161c37ed9ef26cdd51584d85009ebc15653ed0d3ce103880_prof);

    }

    // line 24
    public function block_field($context, array $blocks = array())
    {
        $__internal_3d363cc61789678188fe2441146bc6f09efe526104a4a4bee45280db1506880f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d363cc61789678188fe2441146bc6f09efe526104a4a4bee45280db1506880f->enter($__internal_3d363cc61789678188fe2441146bc6f09efe526104a4a4bee45280db1506880f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_5dab62bb13b1fae92cdf13a940b6f85a80384baf559296d7d8d3b782e5d1967b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dab62bb13b1fae92cdf13a940b6f85a80384baf559296d7d8d3b782e5d1967b->enter($__internal_5dab62bb13b1fae92cdf13a940b6f85a80384baf559296d7d8d3b782e5d1967b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["filter_form"] ?? $this->getContext($context, "filter_form")), 'widget');
        
        $__internal_5dab62bb13b1fae92cdf13a940b6f85a80384baf559296d7d8d3b782e5d1967b->leave($__internal_5dab62bb13b1fae92cdf13a940b6f85a80384baf559296d7d8d3b782e5d1967b_prof);

        
        $__internal_3d363cc61789678188fe2441146bc6f09efe526104a4a4bee45280db1506880f->leave($__internal_3d363cc61789678188fe2441146bc6f09efe526104a4a4bee45280db1506880f_prof);

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
