<?php

/* @SonataAdmin/CRUD/show_percent.html.twig */
class __TwigTemplate_c2c57072229d88d9d672daca01c239da7252d5a12cd25220a0bfd4f542141f8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_percent.html.twig", 12);
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
        $__internal_f3d03f6f7268ad797acd006bbb9789d9374f0eabc5c67b8f29b343cdde0b82e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3d03f6f7268ad797acd006bbb9789d9374f0eabc5c67b8f29b343cdde0b82e3->enter($__internal_f3d03f6f7268ad797acd006bbb9789d9374f0eabc5c67b8f29b343cdde0b82e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_percent.html.twig"));

        $__internal_d05f6f00a6f7ced3ba538c57c7a39fb18ec1e1edea0b250de164e6ab8dd5edeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d05f6f00a6f7ced3ba538c57c7a39fb18ec1e1edea0b250de164e6ab8dd5edeb->enter($__internal_d05f6f00a6f7ced3ba538c57c7a39fb18ec1e1edea0b250de164e6ab8dd5edeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3d03f6f7268ad797acd006bbb9789d9374f0eabc5c67b8f29b343cdde0b82e3->leave($__internal_f3d03f6f7268ad797acd006bbb9789d9374f0eabc5c67b8f29b343cdde0b82e3_prof);

        
        $__internal_d05f6f00a6f7ced3ba538c57c7a39fb18ec1e1edea0b250de164e6ab8dd5edeb->leave($__internal_d05f6f00a6f7ced3ba538c57c7a39fb18ec1e1edea0b250de164e6ab8dd5edeb_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_09479a60170f7e9224edeb9f6e085491f3e33fd202adc64902e9f7fc2a0f8cd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09479a60170f7e9224edeb9f6e085491f3e33fd202adc64902e9f7fc2a0f8cd3->enter($__internal_09479a60170f7e9224edeb9f6e085491f3e33fd202adc64902e9f7fc2a0f8cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_d01cbd2bb04a2c5adde3514edda011dfd99285d45ddb03dd72c312d5ffc42319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d01cbd2bb04a2c5adde3514edda011dfd99285d45ddb03dd72c312d5ffc42319->enter($__internal_d01cbd2bb04a2c5adde3514edda011dfd99285d45ddb03dd72c312d5ffc42319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = (($context["value"] ?? $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_d01cbd2bb04a2c5adde3514edda011dfd99285d45ddb03dd72c312d5ffc42319->leave($__internal_d01cbd2bb04a2c5adde3514edda011dfd99285d45ddb03dd72c312d5ffc42319_prof);

        
        $__internal_09479a60170f7e9224edeb9f6e085491f3e33fd202adc64902e9f7fc2a0f8cd3->leave($__internal_09479a60170f7e9224edeb9f6e085491f3e33fd202adc64902e9f7fc2a0f8cd3_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
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

{% block field %}
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
", "@SonataAdmin/CRUD/show_percent.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_percent.html.twig");
    }
}
