<?php

/* @SonataAdmin/CRUD/show_compare.html.twig */
class __TwigTemplate_2a1c896e3c5255e7667535d7f0028d7d81cd6cca792b8e072332c6369f6158bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_compare.html.twig", "@SonataAdmin/CRUD/show_compare.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2bb7054d978eeadc78d3e4eed8c767b4ef6e4f02c386f29f31979ae3721737e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bb7054d978eeadc78d3e4eed8c767b4ef6e4f02c386f29f31979ae3721737e8->enter($__internal_2bb7054d978eeadc78d3e4eed8c767b4ef6e4f02c386f29f31979ae3721737e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_compare.html.twig"));

        $__internal_bc7470d3c37ef43e01e13c0e09bb39065574aa6ff85093a8f724fa15d2da809f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc7470d3c37ef43e01e13c0e09bb39065574aa6ff85093a8f724fa15d2da809f->enter($__internal_bc7470d3c37ef43e01e13c0e09bb39065574aa6ff85093a8f724fa15d2da809f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bb7054d978eeadc78d3e4eed8c767b4ef6e4f02c386f29f31979ae3721737e8->leave($__internal_2bb7054d978eeadc78d3e4eed8c767b4ef6e4f02c386f29f31979ae3721737e8_prof);

        
        $__internal_bc7470d3c37ef43e01e13c0e09bb39065574aa6ff85093a8f724fa15d2da809f->leave($__internal_bc7470d3c37ef43e01e13c0e09bb39065574aa6ff85093a8f724fa15d2da809f_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_compare.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_show_compare.html.twig' %}
", "@SonataAdmin/CRUD/show_compare.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_compare.html.twig");
    }
}
