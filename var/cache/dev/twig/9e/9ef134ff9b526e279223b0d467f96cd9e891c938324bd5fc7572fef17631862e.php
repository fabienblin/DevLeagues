<?php

/* @SonataAdmin/CRUD/show_time.html.twig */
class __TwigTemplate_3ddf2f2ccca2ca6a749b9b05257528f287a13db54680f56954efcccaf79ba9c2 extends Twig_Template
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
        $__internal_c0ac0c61eab97ee048a378715a1951b69440aa34cc8418766248ba800cc9c94f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0ac0c61eab97ee048a378715a1951b69440aa34cc8418766248ba800cc9c94f->enter($__internal_c0ac0c61eab97ee048a378715a1951b69440aa34cc8418766248ba800cc9c94f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_time.html.twig"));

        $__internal_63b75045f6e6372c21e076d8a97a994148a3d94206d2b048d04daeb2f65062d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63b75045f6e6372c21e076d8a97a994148a3d94206d2b048d04daeb2f65062d4->enter($__internal_63b75045f6e6372c21e076d8a97a994148a3d94206d2b048d04daeb2f65062d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0ac0c61eab97ee048a378715a1951b69440aa34cc8418766248ba800cc9c94f->leave($__internal_c0ac0c61eab97ee048a378715a1951b69440aa34cc8418766248ba800cc9c94f_prof);

        
        $__internal_63b75045f6e6372c21e076d8a97a994148a3d94206d2b048d04daeb2f65062d4->leave($__internal_63b75045f6e6372c21e076d8a97a994148a3d94206d2b048d04daeb2f65062d4_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_22bdc73818a6bde716342efd7f6ed89382d34c04e1d771353e5f7e02ddae9c71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22bdc73818a6bde716342efd7f6ed89382d34c04e1d771353e5f7e02ddae9c71->enter($__internal_22bdc73818a6bde716342efd7f6ed89382d34c04e1d771353e5f7e02ddae9c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_4a1bf6f16dacd7fc8022e93b479ce5d4b07cff6d56405c18a3ed37450cb2b6be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a1bf6f16dacd7fc8022e93b479ce5d4b07cff6d56405c18a3ed37450cb2b6be->enter($__internal_4a1bf6f16dacd7fc8022e93b479ce5d4b07cff6d56405c18a3ed37450cb2b6be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_4a1bf6f16dacd7fc8022e93b479ce5d4b07cff6d56405c18a3ed37450cb2b6be->leave($__internal_4a1bf6f16dacd7fc8022e93b479ce5d4b07cff6d56405c18a3ed37450cb2b6be_prof);

        
        $__internal_22bdc73818a6bde716342efd7f6ed89382d34c04e1d771353e5f7e02ddae9c71->leave($__internal_22bdc73818a6bde716342efd7f6ed89382d34c04e1d771353e5f7e02ddae9c71_prof);

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
