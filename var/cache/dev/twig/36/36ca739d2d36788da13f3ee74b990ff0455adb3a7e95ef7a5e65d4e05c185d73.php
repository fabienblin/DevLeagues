<?php

/* @SonataAdmin/CRUD/show_time.html.twig */
class __TwigTemplate_9426be5beb15c5702d357388495d8c390698bdc6efba3b2f7f0414b34ccba024 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_time.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c1f2c46d2d53291cbbf785a9a60c4878c0e1736a23bf6cf30e92d98128b6904 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c1f2c46d2d53291cbbf785a9a60c4878c0e1736a23bf6cf30e92d98128b6904->enter($__internal_8c1f2c46d2d53291cbbf785a9a60c4878c0e1736a23bf6cf30e92d98128b6904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_time.html.twig"));

        $__internal_ce7db8d2101a5007b85b4b69855f5a54e07a6ea61cf2ad712e2d0ddbbcb1011c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce7db8d2101a5007b85b4b69855f5a54e07a6ea61cf2ad712e2d0ddbbcb1011c->enter($__internal_ce7db8d2101a5007b85b4b69855f5a54e07a6ea61cf2ad712e2d0ddbbcb1011c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c1f2c46d2d53291cbbf785a9a60c4878c0e1736a23bf6cf30e92d98128b6904->leave($__internal_8c1f2c46d2d53291cbbf785a9a60c4878c0e1736a23bf6cf30e92d98128b6904_prof);

        
        $__internal_ce7db8d2101a5007b85b4b69855f5a54e07a6ea61cf2ad712e2d0ddbbcb1011c->leave($__internal_ce7db8d2101a5007b85b4b69855f5a54e07a6ea61cf2ad712e2d0ddbbcb1011c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_7aa453c369e1fff763fb7e56e5641ac64402aa6253775333d09c5d9a527f0c67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aa453c369e1fff763fb7e56e5641ac64402aa6253775333d09c5d9a527f0c67->enter($__internal_7aa453c369e1fff763fb7e56e5641ac64402aa6253775333d09c5d9a527f0c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_0ac4f74d3e324cc799c1d8a98d12d70323215bb3a60c0356c2dc2433803ac5cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ac4f74d3e324cc799c1d8a98d12d70323215bb3a60c0356c2dc2433803ac5cd->enter($__internal_0ac4f74d3e324cc799c1d8a98d12d70323215bb3a60c0356c2dc2433803ac5cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_0ac4f74d3e324cc799c1d8a98d12d70323215bb3a60c0356c2dc2433803ac5cd->leave($__internal_0ac4f74d3e324cc799c1d8a98d12d70323215bb3a60c0356c2dc2433803ac5cd_prof);

        
        $__internal_7aa453c369e1fff763fb7e56e5641ac64402aa6253775333d09c5d9a527f0c67->leave($__internal_7aa453c369e1fff763fb7e56e5641ac64402aa6253775333d09c5d9a527f0c67_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 18,  51 => 16,  49 => 15,  40 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
", "@SonataAdmin/CRUD/show_time.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_time.html.twig");
    }
}
