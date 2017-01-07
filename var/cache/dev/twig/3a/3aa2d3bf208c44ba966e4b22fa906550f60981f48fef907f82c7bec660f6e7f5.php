<?php

/* @SonataAdmin/CRUD/show_time.html.twig */
class __TwigTemplate_9d068406e0d7d2422b5e7efd16978d70eccdb476794c644866b8f8e0aa7de0c7 extends Twig_Template
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
        $__internal_4e87e844ffac6540e6bffe3065d6603bec6e5e545d31da5d5361fa808d7cbcc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e87e844ffac6540e6bffe3065d6603bec6e5e545d31da5d5361fa808d7cbcc6->enter($__internal_4e87e844ffac6540e6bffe3065d6603bec6e5e545d31da5d5361fa808d7cbcc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_time.html.twig"));

        $__internal_2f4edf09715fd14331d4c1574b33ef3d80dadbc44c79395560da442dd6e96318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f4edf09715fd14331d4c1574b33ef3d80dadbc44c79395560da442dd6e96318->enter($__internal_2f4edf09715fd14331d4c1574b33ef3d80dadbc44c79395560da442dd6e96318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_time.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e87e844ffac6540e6bffe3065d6603bec6e5e545d31da5d5361fa808d7cbcc6->leave($__internal_4e87e844ffac6540e6bffe3065d6603bec6e5e545d31da5d5361fa808d7cbcc6_prof);

        
        $__internal_2f4edf09715fd14331d4c1574b33ef3d80dadbc44c79395560da442dd6e96318->leave($__internal_2f4edf09715fd14331d4c1574b33ef3d80dadbc44c79395560da442dd6e96318_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_3862737f3dafa3ba4a2f0942cc5cb06bd382a8de84c4f5a71bf8a40656d8b21a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3862737f3dafa3ba4a2f0942cc5cb06bd382a8de84c4f5a71bf8a40656d8b21a->enter($__internal_3862737f3dafa3ba4a2f0942cc5cb06bd382a8de84c4f5a71bf8a40656d8b21a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_bde7828c8455630b348f88b3b432c4c95ff37f31ba9dd9a92d35e4eb1157b969 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bde7828c8455630b348f88b3b432c4c95ff37f31ba9dd9a92d35e4eb1157b969->enter($__internal_bde7828c8455630b348f88b3b432c4c95ff37f31ba9dd9a92d35e4eb1157b969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_bde7828c8455630b348f88b3b432c4c95ff37f31ba9dd9a92d35e4eb1157b969->leave($__internal_bde7828c8455630b348f88b3b432c4c95ff37f31ba9dd9a92d35e4eb1157b969_prof);

        
        $__internal_3862737f3dafa3ba4a2f0942cc5cb06bd382a8de84c4f5a71bf8a40656d8b21a->leave($__internal_3862737f3dafa3ba4a2f0942cc5cb06bd382a8de84c4f5a71bf8a40656d8b21a_prof);

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
", "@SonataAdmin/CRUD/show_time.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_time.html.twig");
    }
}
