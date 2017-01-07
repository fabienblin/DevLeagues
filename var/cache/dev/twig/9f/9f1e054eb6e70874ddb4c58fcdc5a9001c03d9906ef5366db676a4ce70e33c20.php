<?php

/* @SonataAdmin/CRUD/history.html.twig */
class __TwigTemplate_742caf72f8deb3dba8a7e6528530e9473dd83639d088c433c324564bf8673cfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_history.html.twig", "@SonataAdmin/CRUD/history.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0b7b909b89c8689aa8f44253d955cfdbe0e51aa773c43ac7306d404d83545f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0b7b909b89c8689aa8f44253d955cfdbe0e51aa773c43ac7306d404d83545f0->enter($__internal_c0b7b909b89c8689aa8f44253d955cfdbe0e51aa773c43ac7306d404d83545f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/history.html.twig"));

        $__internal_df371dc2596920e291a1e61aa8df9d42b87e79807377dfab60136aa174dde1e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df371dc2596920e291a1e61aa8df9d42b87e79807377dfab60136aa174dde1e1->enter($__internal_df371dc2596920e291a1e61aa8df9d42b87e79807377dfab60136aa174dde1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0b7b909b89c8689aa8f44253d955cfdbe0e51aa773c43ac7306d404d83545f0->leave($__internal_c0b7b909b89c8689aa8f44253d955cfdbe0e51aa773c43ac7306d404d83545f0_prof);

        
        $__internal_df371dc2596920e291a1e61aa8df9d42b87e79807377dfab60136aa174dde1e1->leave($__internal_df371dc2596920e291a1e61aa8df9d42b87e79807377dfab60136aa174dde1e1_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_history.html.twig' %}
", "@SonataAdmin/CRUD/history.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/history.html.twig");
    }
}
