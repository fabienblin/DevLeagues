<?php

/* @SonataAdmin/CRUD/show.html.twig */
class __TwigTemplate_b92f0c9bfdc1b8b6709e41a47f0d5bcb43eb650d7fa556bd9bff07c64130ccca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "@SonataAdmin/CRUD/show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b74681833940a4022514a5b9cff8903deac5fcc31b04da1fa21154ca2a284b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b74681833940a4022514a5b9cff8903deac5fcc31b04da1fa21154ca2a284b8->enter($__internal_0b74681833940a4022514a5b9cff8903deac5fcc31b04da1fa21154ca2a284b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show.html.twig"));

        $__internal_a1c989681fc3079509ee02478713a93d11da911cb06c685231b1b2410b194b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1c989681fc3079509ee02478713a93d11da911cb06c685231b1b2410b194b7d->enter($__internal_a1c989681fc3079509ee02478713a93d11da911cb06c685231b1b2410b194b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b74681833940a4022514a5b9cff8903deac5fcc31b04da1fa21154ca2a284b8->leave($__internal_0b74681833940a4022514a5b9cff8903deac5fcc31b04da1fa21154ca2a284b8_prof);

        
        $__internal_a1c989681fc3079509ee02478713a93d11da911cb06c685231b1b2410b194b7d->leave($__internal_a1c989681fc3079509ee02478713a93d11da911cb06c685231b1b2410b194b7d_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}
", "@SonataAdmin/CRUD/show.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show.html.twig");
    }
}
