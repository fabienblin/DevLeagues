<?php

/* @SonataAdmin/CRUD/list_inner_row.html.twig */
class __TwigTemplate_f64fbcc964ec9e96697660cff67505612a93a1fd98f4f8d39f8b025504979483 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_inner_row.html.twig", "@SonataAdmin/CRUD/list_inner_row.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2538dcda034202771585e9bcc4909a5cb5e38fa89315dadc5993d3af0d11b4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2538dcda034202771585e9bcc4909a5cb5e38fa89315dadc5993d3af0d11b4c->enter($__internal_e2538dcda034202771585e9bcc4909a5cb5e38fa89315dadc5993d3af0d11b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_inner_row.html.twig"));

        $__internal_4419b6dc0a6bf6bcfc8da6164d83afbba7741b233cab4a41e9318800079bec2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4419b6dc0a6bf6bcfc8da6164d83afbba7741b233cab4a41e9318800079bec2d->enter($__internal_4419b6dc0a6bf6bcfc8da6164d83afbba7741b233cab4a41e9318800079bec2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2538dcda034202771585e9bcc4909a5cb5e38fa89315dadc5993d3af0d11b4c->leave($__internal_e2538dcda034202771585e9bcc4909a5cb5e38fa89315dadc5993d3af0d11b4c_prof);

        
        $__internal_4419b6dc0a6bf6bcfc8da6164d83afbba7741b233cab4a41e9318800079bec2d->leave($__internal_4419b6dc0a6bf6bcfc8da6164d83afbba7741b233cab4a41e9318800079bec2d_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_inner_row.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_list_inner_row.html.twig' %}
", "@SonataAdmin/CRUD/list_inner_row.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_inner_row.html.twig");
    }
}
