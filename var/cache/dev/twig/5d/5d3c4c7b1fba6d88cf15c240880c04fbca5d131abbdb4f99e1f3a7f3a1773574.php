<?php

/* @SonataAdmin/CRUD/list_currency.html.twig */
class __TwigTemplate_c9df95b29aba10688b19770146984a8b2bfbb972942bb9279f952478ec1d3a85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1e730f68ff39607d4459973e4153f9c0c4aef785d22f0558d1ab5e9518c733c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1e730f68ff39607d4459973e4153f9c0c4aef785d22f0558d1ab5e9518c733c->enter($__internal_a1e730f68ff39607d4459973e4153f9c0c4aef785d22f0558d1ab5e9518c733c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_currency.html.twig"));

        $__internal_b6f1ae34d2b780b3694e1a3adb63bac91a75699a4eb814ea5dd8b75f73c2c808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6f1ae34d2b780b3694e1a3adb63bac91a75699a4eb814ea5dd8b75f73c2c808->enter($__internal_b6f1ae34d2b780b3694e1a3adb63bac91a75699a4eb814ea5dd8b75f73c2c808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1e730f68ff39607d4459973e4153f9c0c4aef785d22f0558d1ab5e9518c733c->leave($__internal_a1e730f68ff39607d4459973e4153f9c0c4aef785d22f0558d1ab5e9518c733c_prof);

        
        $__internal_b6f1ae34d2b780b3694e1a3adb63bac91a75699a4eb814ea5dd8b75f73c2c808->leave($__internal_b6f1ae34d2b780b3694e1a3adb63bac91a75699a4eb814ea5dd8b75f73c2c808_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e5442d919cdd51322ad4a0e63fcba08c9291bb7e9d97c87897f31fcc94f91188 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5442d919cdd51322ad4a0e63fcba08c9291bb7e9d97c87897f31fcc94f91188->enter($__internal_e5442d919cdd51322ad4a0e63fcba08c9291bb7e9d97c87897f31fcc94f91188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_9936007b2407ee03b13bb63d1d4841c4448dabc9ee366bfd45c45348e2295901 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9936007b2407ee03b13bb63d1d4841c4448dabc9ee366bfd45c45348e2295901->enter($__internal_9936007b2407ee03b13bb63d1d4841c4448dabc9ee366bfd45c45348e2295901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === ($context["value"] ?? $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_9936007b2407ee03b13bb63d1d4841c4448dabc9ee366bfd45c45348e2295901->leave($__internal_9936007b2407ee03b13bb63d1d4841c4448dabc9ee366bfd45c45348e2295901_prof);

        
        $__internal_e5442d919cdd51322ad4a0e63fcba08c9291bb7e9d97c87897f31fcc94f91188->leave($__internal_e5442d919cdd51322ad4a0e63fcba08c9291bb7e9d97c87897f31fcc94f91188_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
", "@SonataAdmin/CRUD/list_currency.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_currency.html.twig");
    }
}
