<?php

/* @SonataAdmin/CRUD/show_compare.html.twig */
class __TwigTemplate_6cf7934aefc302679b0909eef3866486848816a3121f5c9f23c5dd6b9d25896c extends Twig_Template
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
        $__internal_09e74b4be502c27c4ea246548fc3ce8e0ddfed48e0b9d62a669a6bca7393344c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09e74b4be502c27c4ea246548fc3ce8e0ddfed48e0b9d62a669a6bca7393344c->enter($__internal_09e74b4be502c27c4ea246548fc3ce8e0ddfed48e0b9d62a669a6bca7393344c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_compare.html.twig"));

        $__internal_b7ddc81cdd32bb7e3447c40049cda2251a806d6acbe3dc48ab1cf3505f017467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7ddc81cdd32bb7e3447c40049cda2251a806d6acbe3dc48ab1cf3505f017467->enter($__internal_b7ddc81cdd32bb7e3447c40049cda2251a806d6acbe3dc48ab1cf3505f017467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09e74b4be502c27c4ea246548fc3ce8e0ddfed48e0b9d62a669a6bca7393344c->leave($__internal_09e74b4be502c27c4ea246548fc3ce8e0ddfed48e0b9d62a669a6bca7393344c_prof);

        
        $__internal_b7ddc81cdd32bb7e3447c40049cda2251a806d6acbe3dc48ab1cf3505f017467->leave($__internal_b7ddc81cdd32bb7e3447c40049cda2251a806d6acbe3dc48ab1cf3505f017467_prof);

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
", "@SonataAdmin/CRUD/show_compare.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_compare.html.twig");
    }
}
