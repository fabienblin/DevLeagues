<?php

/* @SonataAdmin/CRUD/show_trans.html.twig */
class __TwigTemplate_3507e2c1c4bd952a1ded4c2977e8194875669d9b0698e0bfb373b1ea24ab522c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_trans.html.twig", 11);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_896151acb0fb0eefb9c7f55e33ab567c0bfe5f4a5c5d08dbab4926f4bcd220a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_896151acb0fb0eefb9c7f55e33ab567c0bfe5f4a5c5d08dbab4926f4bcd220a5->enter($__internal_896151acb0fb0eefb9c7f55e33ab567c0bfe5f4a5c5d08dbab4926f4bcd220a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_trans.html.twig"));

        $__internal_8d026c761dbf5f4bd739021d99bd9c3fa150bb290d2cab9f39bb0f1da6311416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d026c761dbf5f4bd739021d99bd9c3fa150bb290d2cab9f39bb0f1da6311416->enter($__internal_8d026c761dbf5f4bd739021d99bd9c3fa150bb290d2cab9f39bb0f1da6311416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_trans.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_896151acb0fb0eefb9c7f55e33ab567c0bfe5f4a5c5d08dbab4926f4bcd220a5->leave($__internal_896151acb0fb0eefb9c7f55e33ab567c0bfe5f4a5c5d08dbab4926f4bcd220a5_prof);

        
        $__internal_8d026c761dbf5f4bd739021d99bd9c3fa150bb290d2cab9f39bb0f1da6311416->leave($__internal_8d026c761dbf5f4bd739021d99bd9c3fa150bb290d2cab9f39bb0f1da6311416_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_daa8b64255b00c06a0069c4143f500758c67c872b2b6c647569f99c737352806 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daa8b64255b00c06a0069c4143f500758c67c872b2b6c647569f99c737352806->enter($__internal_daa8b64255b00c06a0069c4143f500758c67c872b2b6c647569f99c737352806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_55e5256584f7bdb8ae2ee0880403e08b039084981dd5776cd3f0ae55026dfe5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55e5256584f7bdb8ae2ee0880403e08b039084981dd5776cd3f0ae55026dfe5c->enter($__internal_55e5256584f7bdb8ae2ee0880403e08b039084981dd5776cd3f0ae55026dfe5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 14
        echo "    ";
        if ( !$this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) {
            // line 15
            echo "        ";
            $context["value"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["value"] ?? $this->getContext($context, "value")));
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "        ";
            $context["value"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["value"] ?? $this->getContext($context, "value")), array(), $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "catalogue", array()));
            // line 18
            echo "    ";
        }
        // line 19
        echo "
    ";
        // line 20
        if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            // line 21
            echo "        ";
            echo ($context["value"] ?? $this->getContext($context, "value"));
            echo "
    ";
        } else {
            // line 23
            echo "        ";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_55e5256584f7bdb8ae2ee0880403e08b039084981dd5776cd3f0ae55026dfe5c->leave($__internal_55e5256584f7bdb8ae2ee0880403e08b039084981dd5776cd3f0ae55026dfe5c_prof);

        
        $__internal_daa8b64255b00c06a0069c4143f500758c67c872b2b6c647569f99c737352806->leave($__internal_daa8b64255b00c06a0069c4143f500758c67c872b2b6c647569f99c737352806_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 23,  69 => 21,  67 => 20,  64 => 19,  61 => 18,  58 => 17,  55 => 16,  52 => 15,  49 => 14,  40 => 13,  11 => 11,);
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
{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field%}
    {% if field_description.options.catalogue is not defined %}
        {% set value = value|trans %}
    {% else %}
        {% set value = value|trans({}, field_description.options.catalogue) %}
    {% endif %}

    {% if field_description.options.safe %}
        {{ value|raw }}
    {% else %}
        {{ value }}
    {% endif %}
{% endblock %}
", "@SonataAdmin/CRUD/show_trans.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_trans.html.twig");
    }
}
