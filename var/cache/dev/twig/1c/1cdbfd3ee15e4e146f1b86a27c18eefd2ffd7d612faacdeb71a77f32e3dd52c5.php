<?php

/* @SonataAdmin/CRUD/history.html.twig */
class __TwigTemplate_73e900770a1e86e4cfca9dc57a7288c0c1243147f125d3c194534c4e1a7eeccd extends Twig_Template
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
        $__internal_09a3c456e2b1903856987aa6bdeab3e08cd3b04a628318188e5974e52b20685e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09a3c456e2b1903856987aa6bdeab3e08cd3b04a628318188e5974e52b20685e->enter($__internal_09a3c456e2b1903856987aa6bdeab3e08cd3b04a628318188e5974e52b20685e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/history.html.twig"));

        $__internal_b44ef862068107a47e4ec3e79d0ab673adf444e36462e585ee165b79f80c70ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b44ef862068107a47e4ec3e79d0ab673adf444e36462e585ee165b79f80c70ad->enter($__internal_b44ef862068107a47e4ec3e79d0ab673adf444e36462e585ee165b79f80c70ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09a3c456e2b1903856987aa6bdeab3e08cd3b04a628318188e5974e52b20685e->leave($__internal_09a3c456e2b1903856987aa6bdeab3e08cd3b04a628318188e5974e52b20685e_prof);

        
        $__internal_b44ef862068107a47e4ec3e79d0ab673adf444e36462e585ee165b79f80c70ad->leave($__internal_b44ef862068107a47e4ec3e79d0ab673adf444e36462e585ee165b79f80c70ad_prof);

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
", "@SonataAdmin/CRUD/history.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/history.html.twig");
    }
}
