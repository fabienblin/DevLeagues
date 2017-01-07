<?php

/* @SonataAdmin/CRUD/show_percent.html.twig */
class __TwigTemplate_5a8e0e9e27b515d882140afe66d17329de89cbfb277c031c630e5b41ed046e63 extends Twig_Template
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
        $__internal_91e02a07c07db3728d7adc63b59df0a6845e1209e91a97c75ec3309ac0c20d84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91e02a07c07db3728d7adc63b59df0a6845e1209e91a97c75ec3309ac0c20d84->enter($__internal_91e02a07c07db3728d7adc63b59df0a6845e1209e91a97c75ec3309ac0c20d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_percent.html.twig"));

        $__internal_8b0954d98c80baab148704ac5c4d4d59c36d9a5e8ff2c1464cf574853ed2a374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b0954d98c80baab148704ac5c4d4d59c36d9a5e8ff2c1464cf574853ed2a374->enter($__internal_8b0954d98c80baab148704ac5c4d4d59c36d9a5e8ff2c1464cf574853ed2a374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91e02a07c07db3728d7adc63b59df0a6845e1209e91a97c75ec3309ac0c20d84->leave($__internal_91e02a07c07db3728d7adc63b59df0a6845e1209e91a97c75ec3309ac0c20d84_prof);

        
        $__internal_8b0954d98c80baab148704ac5c4d4d59c36d9a5e8ff2c1464cf574853ed2a374->leave($__internal_8b0954d98c80baab148704ac5c4d4d59c36d9a5e8ff2c1464cf574853ed2a374_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_aacbc1dbb2d4d15d1c65b2730f01b795d3820cf537273222ce24ee7ab11715ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aacbc1dbb2d4d15d1c65b2730f01b795d3820cf537273222ce24ee7ab11715ed->enter($__internal_aacbc1dbb2d4d15d1c65b2730f01b795d3820cf537273222ce24ee7ab11715ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_7604c4b4da6003aba4e86f3498637fa77dbff49bfa099e08eade6090d9dfa603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7604c4b4da6003aba4e86f3498637fa77dbff49bfa099e08eade6090d9dfa603->enter($__internal_7604c4b4da6003aba4e86f3498637fa77dbff49bfa099e08eade6090d9dfa603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_7604c4b4da6003aba4e86f3498637fa77dbff49bfa099e08eade6090d9dfa603->leave($__internal_7604c4b4da6003aba4e86f3498637fa77dbff49bfa099e08eade6090d9dfa603_prof);

        
        $__internal_aacbc1dbb2d4d15d1c65b2730f01b795d3820cf537273222ce24ee7ab11715ed->leave($__internal_aacbc1dbb2d4d15d1c65b2730f01b795d3820cf537273222ce24ee7ab11715ed_prof);

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
", "@SonataAdmin/CRUD/show_percent.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_percent.html.twig");
    }
}
