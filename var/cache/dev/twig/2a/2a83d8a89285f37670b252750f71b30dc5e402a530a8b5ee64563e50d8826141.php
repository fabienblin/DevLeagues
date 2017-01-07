<?php

/* @SonataAdmin/CRUD/acl.html.twig */
class __TwigTemplate_0c96286bfcd88ad42492ee35d3a8dc955206b659c2c93f3c09731f2a4bb5db5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "@SonataAdmin/CRUD/acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6004880866cf186c311dd2391d5948b9b19a64b738ee70283e6d51d02a884e16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6004880866cf186c311dd2391d5948b9b19a64b738ee70283e6d51d02a884e16->enter($__internal_6004880866cf186c311dd2391d5948b9b19a64b738ee70283e6d51d02a884e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/acl.html.twig"));

        $__internal_f854fd77089179ec81122cb3ed88b4f9a0d0241582e079ff8d2eabcdfee2d12e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f854fd77089179ec81122cb3ed88b4f9a0d0241582e079ff8d2eabcdfee2d12e->enter($__internal_f854fd77089179ec81122cb3ed88b4f9a0d0241582e079ff8d2eabcdfee2d12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6004880866cf186c311dd2391d5948b9b19a64b738ee70283e6d51d02a884e16->leave($__internal_6004880866cf186c311dd2391d5948b9b19a64b738ee70283e6d51d02a884e16_prof);

        
        $__internal_f854fd77089179ec81122cb3ed88b4f9a0d0241582e079ff8d2eabcdfee2d12e->leave($__internal_f854fd77089179ec81122cb3ed88b4f9a0d0241582e079ff8d2eabcdfee2d12e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/acl.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_acl.html.twig' %}
", "@SonataAdmin/CRUD/acl.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/acl.html.twig");
    }
}
