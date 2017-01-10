<?php

/* @SonataAdmin/CRUD/edit_integer.html.twig */
class __TwigTemplate_7be63c31cd37c283d3dc457d0cae4011bde705a7948f062664c22e845010113d extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc12edc9112b5a5d0bb56ffb088861c32c091424a4125f42911a2e5e1be8b70c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc12edc9112b5a5d0bb56ffb088861c32c091424a4125f42911a2e5e1be8b70c->enter($__internal_fc12edc9112b5a5d0bb56ffb088861c32c091424a4125f42911a2e5e1be8b70c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_integer.html.twig"));

        $__internal_2055cdc3b1fae50694beea16502f2eea8f1a0ec1a34d109fe1e0fa25553f08df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2055cdc3b1fae50694beea16502f2eea8f1a0ec1a34d109fe1e0fa25553f08df->enter($__internal_2055cdc3b1fae50694beea16502f2eea8f1a0ec1a34d109fe1e0fa25553f08df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc12edc9112b5a5d0bb56ffb088861c32c091424a4125f42911a2e5e1be8b70c->leave($__internal_fc12edc9112b5a5d0bb56ffb088861c32c091424a4125f42911a2e5e1be8b70c_prof);

        
        $__internal_2055cdc3b1fae50694beea16502f2eea8f1a0ec1a34d109fe1e0fa25553f08df->leave($__internal_2055cdc3b1fae50694beea16502f2eea8f1a0ec1a34d109fe1e0fa25553f08df_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c9236923515bbea299154ced76c5f06791cebd6b6e04323ecf211f5970f30d80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9236923515bbea299154ced76c5f06791cebd6b6e04323ecf211f5970f30d80->enter($__internal_c9236923515bbea299154ced76c5f06791cebd6b6e04323ecf211f5970f30d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_be47e919f4aecbc8f691f9cff20622861ae56d503bc3f031f8370ea371046d7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be47e919f4aecbc8f691f9cff20622861ae56d503bc3f031f8370ea371046d7d->enter($__internal_be47e919f4aecbc8f691f9cff20622861ae56d503bc3f031f8370ea371046d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_be47e919f4aecbc8f691f9cff20622861ae56d503bc3f031f8370ea371046d7d->leave($__internal_be47e919f4aecbc8f691f9cff20622861ae56d503bc3f031f8370ea371046d7d_prof);

        
        $__internal_c9236923515bbea299154ced76c5f06791cebd6b6e04323ecf211f5970f30d80->leave($__internal_c9236923515bbea299154ced76c5f06791cebd6b6e04323ecf211f5970f30d80_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_integer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 14,  18 => 12,);
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

{% extends base_template %}

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
", "@SonataAdmin/CRUD/edit_integer.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_integer.html.twig");
    }
}
