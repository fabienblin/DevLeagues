<?php

/* @SonataAdmin/CRUD/edit_file.html.twig */
class __TwigTemplate_ed71fbcad5027938d9fce1cb107ea4a862554f01265bf69c9a5270e084e2d154 extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15d1bf5ff0ac9a48a1509cfcc6b1b9fcca4e17df7e14c80c4447de9e1ac3ba5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15d1bf5ff0ac9a48a1509cfcc6b1b9fcca4e17df7e14c80c4447de9e1ac3ba5e->enter($__internal_15d1bf5ff0ac9a48a1509cfcc6b1b9fcca4e17df7e14c80c4447de9e1ac3ba5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_file.html.twig"));

        $__internal_06b6e5b4762ba3b7b8e2ddc309bb9d7d0dc3bb9048c19bf495a542da9e4f9ef2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06b6e5b4762ba3b7b8e2ddc309bb9d7d0dc3bb9048c19bf495a542da9e4f9ef2->enter($__internal_06b6e5b4762ba3b7b8e2ddc309bb9d7d0dc3bb9048c19bf495a542da9e4f9ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15d1bf5ff0ac9a48a1509cfcc6b1b9fcca4e17df7e14c80c4447de9e1ac3ba5e->leave($__internal_15d1bf5ff0ac9a48a1509cfcc6b1b9fcca4e17df7e14c80c4447de9e1ac3ba5e_prof);

        
        $__internal_06b6e5b4762ba3b7b8e2ddc309bb9d7d0dc3bb9048c19bf495a542da9e4f9ef2->leave($__internal_06b6e5b4762ba3b7b8e2ddc309bb9d7d0dc3bb9048c19bf495a542da9e4f9ef2_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_e2e3e093f28bb8f976fd0dd432b1d8d41a1f9c1e7313c5786a540ae041b3742e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2e3e093f28bb8f976fd0dd432b1d8d41a1f9c1e7313c5786a540ae041b3742e->enter($__internal_e2e3e093f28bb8f976fd0dd432b1d8d41a1f9c1e7313c5786a540ae041b3742e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_fbaa6facb030e8642bf587c217e0b5fe956aac6acbe40f42716a49e273ed4504 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbaa6facb030e8642bf587c217e0b5fe956aac6acbe40f42716a49e273ed4504->enter($__internal_fbaa6facb030e8642bf587c217e0b5fe956aac6acbe40f42716a49e273ed4504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_fbaa6facb030e8642bf587c217e0b5fe956aac6acbe40f42716a49e273ed4504->leave($__internal_fbaa6facb030e8642bf587c217e0b5fe956aac6acbe40f42716a49e273ed4504_prof);

        
        $__internal_e2e3e093f28bb8f976fd0dd432b1d8d41a1f9c1e7313c5786a540ae041b3742e->leave($__internal_e2e3e093f28bb8f976fd0dd432b1d8d41a1f9c1e7313c5786a540ae041b3742e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_file.html.twig";
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
", "@SonataAdmin/CRUD/edit_file.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_file.html.twig");
    }
}
