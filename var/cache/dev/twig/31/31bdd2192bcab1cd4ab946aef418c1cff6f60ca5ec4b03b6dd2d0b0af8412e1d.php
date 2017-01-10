<?php

/* @SonataAdmin/CRUD/list.html.twig */
class __TwigTemplate_e1d94ea477bf02e6ad933ee6669ef2804311d378f8aa75b01ccea59111918de4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "@SonataAdmin/CRUD/list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d541832a1acae8a68cf6eb4484411510e52e4c960ad9af6e14b890224b7f0de0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d541832a1acae8a68cf6eb4484411510e52e4c960ad9af6e14b890224b7f0de0->enter($__internal_d541832a1acae8a68cf6eb4484411510e52e4c960ad9af6e14b890224b7f0de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list.html.twig"));

        $__internal_16deeb99c897af437a46cbe5a6ab997892fc1b7a0aa979ae6051c9c41568323a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16deeb99c897af437a46cbe5a6ab997892fc1b7a0aa979ae6051c9c41568323a->enter($__internal_16deeb99c897af437a46cbe5a6ab997892fc1b7a0aa979ae6051c9c41568323a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d541832a1acae8a68cf6eb4484411510e52e4c960ad9af6e14b890224b7f0de0->leave($__internal_d541832a1acae8a68cf6eb4484411510e52e4c960ad9af6e14b890224b7f0de0_prof);

        
        $__internal_16deeb99c897af437a46cbe5a6ab997892fc1b7a0aa979ae6051c9c41568323a->leave($__internal_16deeb99c897af437a46cbe5a6ab997892fc1b7a0aa979ae6051c9c41568323a_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}
", "@SonataAdmin/CRUD/list.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list.html.twig");
    }
}
