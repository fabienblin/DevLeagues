<?php

/* @SonataAdmin/CRUD/list_inner_row.html.twig */
class __TwigTemplate_a54cba2201e291303256f0b32e1eb9a1a7e5c1db95df0e0016dfdd3b58035963 extends Twig_Template
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
        $__internal_0d816cb748ac8980f309fd6ae933ce08231b150fbc6372452f02cd0d8a418e77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d816cb748ac8980f309fd6ae933ce08231b150fbc6372452f02cd0d8a418e77->enter($__internal_0d816cb748ac8980f309fd6ae933ce08231b150fbc6372452f02cd0d8a418e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_inner_row.html.twig"));

        $__internal_003a16f7d510488a746b7b6a20820e2a2f24d8cad49b71b62e09e61623eb617f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_003a16f7d510488a746b7b6a20820e2a2f24d8cad49b71b62e09e61623eb617f->enter($__internal_003a16f7d510488a746b7b6a20820e2a2f24d8cad49b71b62e09e61623eb617f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d816cb748ac8980f309fd6ae933ce08231b150fbc6372452f02cd0d8a418e77->leave($__internal_0d816cb748ac8980f309fd6ae933ce08231b150fbc6372452f02cd0d8a418e77_prof);

        
        $__internal_003a16f7d510488a746b7b6a20820e2a2f24d8cad49b71b62e09e61623eb617f->leave($__internal_003a16f7d510488a746b7b6a20820e2a2f24d8cad49b71b62e09e61623eb617f_prof);

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
