<?php

/* @SonataAdmin/CRUD/base_inline_edit_field.html.twig */
class __TwigTemplate_05747a5f86424f9bd4c2a60d29d3f37a5dc67a36e72f816627fb0517b1aaac06 extends Twig_Template
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
        $__internal_79fa6c221a742eaf56a467d796b45b0f7196bbe129cb0ff04a4515898c76e44f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79fa6c221a742eaf56a467d796b45b0f7196bbe129cb0ff04a4515898c76e44f->enter($__internal_79fa6c221a742eaf56a467d796b45b0f7196bbe129cb0ff04a4515898c76e44f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_inline_edit_field.html.twig"));

        $__internal_acfa4957596a086f36ae7ea5e0114dc33d4740794723144e5c298fde33d2cf66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acfa4957596a086f36ae7ea5e0114dc33d4740794723144e5c298fde33d2cf66->enter($__internal_acfa4957596a086f36ae7ea5e0114dc33d4740794723144e5c298fde33d2cf66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_inline_edit_field.html.twig"));

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
        
        $__internal_79fa6c221a742eaf56a467d796b45b0f7196bbe129cb0ff04a4515898c76e44f->leave($__internal_79fa6c221a742eaf56a467d796b45b0f7196bbe129cb0ff04a4515898c76e44f_prof);

        
        $__internal_acfa4957596a086f36ae7ea5e0114dc33d4740794723144e5c298fde33d2cf66->leave($__internal_acfa4957596a086f36ae7ea5e0114dc33d4740794723144e5c298fde33d2cf66_prof);

    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        $__internal_87a8097fbd6e3ad5f8bca55925a78dd3567538d18298c9e499c4bb46177dd4e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87a8097fbd6e3ad5f8bca55925a78dd3567538d18298c9e499c4bb46177dd4e4->enter($__internal_87a8097fbd6e3ad5f8bca55925a78dd3567538d18298c9e499c4bb46177dd4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_b148015de8c13a9d8d7f40c1800967e0db1284298d42fb88810fa692e196fa65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b148015de8c13a9d8d7f40c1800967e0db1284298d42fb88810fa692e196fa65->enter($__internal_b148015de8c13a9d8d7f40c1800967e0db1284298d42fb88810fa692e196fa65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_b148015de8c13a9d8d7f40c1800967e0db1284298d42fb88810fa692e196fa65->leave($__internal_b148015de8c13a9d8d7f40c1800967e0db1284298d42fb88810fa692e196fa65_prof);

        
        $__internal_87a8097fbd6e3ad5f8bca55925a78dd3567538d18298c9e499c4bb46177dd4e4->leave($__internal_87a8097fbd6e3ad5f8bca55925a78dd3567538d18298c9e499c4bb46177dd4e4_prof);

    }

    // line 25
    public function block_field($context, array $blocks = array())
    {
        $__internal_14b804a9e333a94c6a8dfab14f5253c17b185c1d91f582820aa1693d7237cc81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14b804a9e333a94c6a8dfab14f5253c17b185c1d91f582820aa1693d7237cc81->enter($__internal_14b804a9e333a94c6a8dfab14f5253c17b185c1d91f582820aa1693d7237cc81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_47d2970765ccf241022b02b6c36fb5e3c318d19bc10569fdd1c085c1dec2f7c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47d2970765ccf241022b02b6c36fb5e3c318d19bc10569fdd1c085c1dec2f7c9->enter($__internal_47d2970765ccf241022b02b6c36fb5e3c318d19bc10569fdd1c085c1dec2f7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget');
        
        $__internal_47d2970765ccf241022b02b6c36fb5e3c318d19bc10569fdd1c085c1dec2f7c9->leave($__internal_47d2970765ccf241022b02b6c36fb5e3c318d19bc10569fdd1c085c1dec2f7c9_prof);

        
        $__internal_14b804a9e333a94c6a8dfab14f5253c17b185c1d91f582820aa1693d7237cc81->leave($__internal_14b804a9e333a94c6a8dfab14f5253c17b185c1d91f582820aa1693d7237cc81_prof);

    }

    // line 28
    public function block_errors($context, array $blocks = array())
    {
        $__internal_1787337d9ab7e54a9ca760de4a529b62bad3386a44463089cb230eba31aac93e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1787337d9ab7e54a9ca760de4a529b62bad3386a44463089cb230eba31aac93e->enter($__internal_1787337d9ab7e54a9ca760de4a529b62bad3386a44463089cb230eba31aac93e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        $__internal_92c5861be1feccc859235f8fe34b1424ff851c9a2159db62bb921402926e7fcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92c5861be1feccc859235f8fe34b1424ff851c9a2159db62bb921402926e7fcb->enter($__internal_92c5861be1feccc859235f8fe34b1424ff851c9a2159db62bb921402926e7fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "errors"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'errors');
        
        $__internal_92c5861be1feccc859235f8fe34b1424ff851c9a2159db62bb921402926e7fcb->leave($__internal_92c5861be1feccc859235f8fe34b1424ff851c9a2159db62bb921402926e7fcb_prof);

        
        $__internal_1787337d9ab7e54a9ca760de4a529b62bad3386a44463089cb230eba31aac93e->leave($__internal_1787337d9ab7e54a9ca760de4a529b62bad3386a44463089cb230eba31aac93e_prof);

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
