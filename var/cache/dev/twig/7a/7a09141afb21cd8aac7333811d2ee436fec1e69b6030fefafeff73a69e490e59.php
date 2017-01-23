<?php

/* @SonataAdmin/Core/create_button.html.twig */
class __TwigTemplate_18ff60ee684269f49556f317ecf1fdb3c5693015dde0929251a653892cd01d92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "@SonataAdmin/Core/create_button.html.twig", 15);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d01d63e0db70b9b37157749a8ea9ea9cd3d598b9c52e411ffb5b8759f803e500 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d01d63e0db70b9b37157749a8ea9ea9cd3d598b9c52e411ffb5b8759f803e500->enter($__internal_d01d63e0db70b9b37157749a8ea9ea9cd3d598b9c52e411ffb5b8759f803e500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/create_button.html.twig"));

        $__internal_b6ee4c58edf799b0c5bb38a5853fa9dd1362e13b74883fac5e1b9d2b59b7e2fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6ee4c58edf799b0c5bb38a5853fa9dd1362e13b74883fac5e1b9d2b59b7e2fb->enter($__internal_b6ee4c58edf799b0c5bb38a5853fa9dd1362e13b74883fac5e1b9d2b59b7e2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/create_button.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d01d63e0db70b9b37157749a8ea9ea9cd3d598b9c52e411ffb5b8759f803e500->leave($__internal_d01d63e0db70b9b37157749a8ea9ea9cd3d598b9c52e411ffb5b8759f803e500_prof);

        
        $__internal_b6ee4c58edf799b0c5bb38a5853fa9dd1362e13b74883fac5e1b9d2b59b7e2fb->leave($__internal_b6ee4c58edf799b0c5bb38a5853fa9dd1362e13b74883fac5e1b9d2b59b7e2fb_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Core/create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 15,);
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

{# DEPRECATED #}
{# This file is kept here for backward compatibility - Rather use SonataAdminBundle:Button:create_button.html.twig #}

{% extends 'SonataAdminBundle:Button:create_button.html.twig' %}
", "@SonataAdmin/Core/create_button.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/Core/create_button.html.twig");
    }
}
