<?php

/* @SonataAdmin/CRUD/show_trans.html.twig */
class __TwigTemplate_cf79facfe7d3a3e2e90b27d70bcae2542b0b96dd17e3aac75948ab42d43b03a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_trans.html.twig", 11);
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
        $__internal_8087dbabf1566cf236a09c6fd2ce510d1b2d4c7b4cae66d45d7992a041373828 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8087dbabf1566cf236a09c6fd2ce510d1b2d4c7b4cae66d45d7992a041373828->enter($__internal_8087dbabf1566cf236a09c6fd2ce510d1b2d4c7b4cae66d45d7992a041373828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_trans.html.twig"));

        $__internal_abe8edaed902e2eef2b3292d292d2b382523a888c41f2747fb8c7cb66e21d451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abe8edaed902e2eef2b3292d292d2b382523a888c41f2747fb8c7cb66e21d451->enter($__internal_abe8edaed902e2eef2b3292d292d2b382523a888c41f2747fb8c7cb66e21d451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_trans.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8087dbabf1566cf236a09c6fd2ce510d1b2d4c7b4cae66d45d7992a041373828->leave($__internal_8087dbabf1566cf236a09c6fd2ce510d1b2d4c7b4cae66d45d7992a041373828_prof);

        
        $__internal_abe8edaed902e2eef2b3292d292d2b382523a888c41f2747fb8c7cb66e21d451->leave($__internal_abe8edaed902e2eef2b3292d292d2b382523a888c41f2747fb8c7cb66e21d451_prof);

    }

    // line 13
    public function block_field($context, array $blocks = array())
    {
        $__internal_050e5b40e3e53a0802690823cb6b96507c24b5ae4c181415f91b4f0b4efeaa45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_050e5b40e3e53a0802690823cb6b96507c24b5ae4c181415f91b4f0b4efeaa45->enter($__internal_050e5b40e3e53a0802690823cb6b96507c24b5ae4c181415f91b4f0b4efeaa45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_c5c95738899238b7856b6d119450532c2e171747062a7fc4ea4b7c7ce3819439 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5c95738899238b7856b6d119450532c2e171747062a7fc4ea4b7c7ce3819439->enter($__internal_c5c95738899238b7856b6d119450532c2e171747062a7fc4ea4b7c7ce3819439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 14
        echo "    ";
        if ( !$this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) {
            // line 15
            echo "        ";
            $context["value"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["value"] ?? $this->getContext($context, "value")));
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "        ";
            $context["value"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["value"] ?? $this->getContext($context, "value")), array(), $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "catalogue", array()));
            // line 18
            echo "    ";
        }
        // line 19
        echo "
    ";
        // line 20
        if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            // line 21
            echo "        ";
            echo ($context["value"] ?? $this->getContext($context, "value"));
            echo "
    ";
        } else {
            // line 23
            echo "        ";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_c5c95738899238b7856b6d119450532c2e171747062a7fc4ea4b7c7ce3819439->leave($__internal_c5c95738899238b7856b6d119450532c2e171747062a7fc4ea4b7c7ce3819439_prof);

        
        $__internal_050e5b40e3e53a0802690823cb6b96507c24b5ae4c181415f91b4f0b4efeaa45->leave($__internal_050e5b40e3e53a0802690823cb6b96507c24b5ae4c181415f91b4f0b4efeaa45_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 23,  69 => 21,  67 => 20,  64 => 19,  61 => 18,  58 => 17,  55 => 16,  52 => 15,  49 => 14,  40 => 13,  11 => 11,);
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

{% block field%}
    {% if field_description.options.catalogue is not defined %}
        {% set value = value|trans %}
    {% else %}
        {% set value = value|trans({}, field_description.options.catalogue) %}
    {% endif %}

    {% if field_description.options.safe %}
        {{ value|raw }}
    {% else %}
        {{ value }}
    {% endif %}
{% endblock %}
", "@SonataAdmin/CRUD/show_trans.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_trans.html.twig");
    }
}
