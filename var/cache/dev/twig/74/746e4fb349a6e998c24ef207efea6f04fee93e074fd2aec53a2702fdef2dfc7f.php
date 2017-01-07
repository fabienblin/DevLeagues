<?php

/* @SonataAdmin/CRUD/edit.html.twig */
class __TwigTemplate_0916b602b5e6c6936caae603dc0405a83d3a16c5297d7c41022aef701521c713 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "@SonataAdmin/CRUD/edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5628ac0d6f3a3b5162bd6e19b9841c5c28559ef1489a63c24b564c2539382dae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5628ac0d6f3a3b5162bd6e19b9841c5c28559ef1489a63c24b564c2539382dae->enter($__internal_5628ac0d6f3a3b5162bd6e19b9841c5c28559ef1489a63c24b564c2539382dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit.html.twig"));

        $__internal_c2db8108c5096e294a068c14ce0a6b385e2040623c6b04589c31e239e97d13a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2db8108c5096e294a068c14ce0a6b385e2040623c6b04589c31e239e97d13a7->enter($__internal_c2db8108c5096e294a068c14ce0a6b385e2040623c6b04589c31e239e97d13a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5628ac0d6f3a3b5162bd6e19b9841c5c28559ef1489a63c24b564c2539382dae->leave($__internal_5628ac0d6f3a3b5162bd6e19b9841c5c28559ef1489a63c24b564c2539382dae_prof);

        
        $__internal_c2db8108c5096e294a068c14ce0a6b385e2040623c6b04589c31e239e97d13a7->leave($__internal_c2db8108c5096e294a068c14ce0a6b385e2040623c6b04589c31e239e97d13a7_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}
", "@SonataAdmin/CRUD/edit.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit.html.twig");
    }
}
