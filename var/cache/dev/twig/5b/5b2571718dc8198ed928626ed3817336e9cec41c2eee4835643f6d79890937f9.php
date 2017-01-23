<?php

/* @SonataAdmin/Pager/links.html.twig */
class __TwigTemplate_972d853120ebe3967adea732a213f41de17cbc896f5d6c2f3639e8d53cb03d2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_links.html.twig", "@SonataAdmin/Pager/links.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b343095f73a106fec2b014379271f7f04e4d414ba60c572f51fee5befc689bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b343095f73a106fec2b014379271f7f04e4d414ba60c572f51fee5befc689bc->enter($__internal_1b343095f73a106fec2b014379271f7f04e4d414ba60c572f51fee5befc689bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Pager/links.html.twig"));

        $__internal_1af200e12f462346f57c413a585dd6b8fa8946d45dcdb659e63955e4f17d1e64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1af200e12f462346f57c413a585dd6b8fa8946d45dcdb659e63955e4f17d1e64->enter($__internal_1af200e12f462346f57c413a585dd6b8fa8946d45dcdb659e63955e4f17d1e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Pager/links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b343095f73a106fec2b014379271f7f04e4d414ba60c572f51fee5befc689bc->leave($__internal_1b343095f73a106fec2b014379271f7f04e4d414ba60c572f51fee5befc689bc_prof);

        
        $__internal_1af200e12f462346f57c413a585dd6b8fa8946d45dcdb659e63955e4f17d1e64->leave($__internal_1af200e12f462346f57c413a585dd6b8fa8946d45dcdb659e63955e4f17d1e64_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Pager/links.html.twig";
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

{% extends 'SonataAdminBundle:Pager:base_links.html.twig' %}
", "@SonataAdmin/Pager/links.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/Pager/links.html.twig");
    }
}
