<?php

/* @SonataAdmin/CRUD/base_show_compare.html.twig */
class __TwigTemplate_18512053f056a6b8d135b666768f0bc92c7bad36b1ae4cd758cbadba34cf902f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "@SonataAdmin/CRUD/base_show_compare.html.twig", 12);
        $this->blocks = array(
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0cd2423dfcf370724ff3f266aa6ef85941a69a655334bed702de7021ffeb2a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0cd2423dfcf370724ff3f266aa6ef85941a69a655334bed702de7021ffeb2a1->enter($__internal_c0cd2423dfcf370724ff3f266aa6ef85941a69a655334bed702de7021ffeb2a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_show_compare.html.twig"));

        $__internal_4b004ce3c2ca682a682f7962b98c8ccfdf28f58d8136484f1caa8f9c7c22513d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b004ce3c2ca682a682f7962b98c8ccfdf28f58d8136484f1caa8f9c7c22513d->enter($__internal_4b004ce3c2ca682a682f7962b98c8ccfdf28f58d8136484f1caa8f9c7c22513d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0cd2423dfcf370724ff3f266aa6ef85941a69a655334bed702de7021ffeb2a1->leave($__internal_c0cd2423dfcf370724ff3f266aa6ef85941a69a655334bed702de7021ffeb2a1_prof);

        
        $__internal_4b004ce3c2ca682a682f7962b98c8ccfdf28f58d8136484f1caa8f9c7c22513d->leave($__internal_4b004ce3c2ca682a682f7962b98c8ccfdf28f58d8136484f1caa8f9c7c22513d_prof);

    }

    // line 14
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_35092169d26c6210361ade7c870ed984769f3a347eadcf15f872feb7d844146b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35092169d26c6210361ade7c870ed984769f3a347eadcf15f872feb7d844146b->enter($__internal_35092169d26c6210361ade7c870ed984769f3a347eadcf15f872feb7d844146b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_bbbeb350a4b1b0163d00217be09cf00e603772b462b0766ef6627329efbb285f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbbeb350a4b1b0163d00217be09cf00e603772b462b0766ef6627329efbb285f->enter($__internal_bbbeb350a4b1b0163d00217be09cf00e603772b462b0766ef6627329efbb285f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 15
        echo "    <tr class=\"sonata-ba-view-container history-audit-compare\">
        ";
        // line 16
        if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 17
            echo "            ";
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElementCompare($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), (isset($context["object_compare"]) ? $context["object_compare"] : $this->getContext($context, "object_compare")));
            echo "
        ";
        }
        // line 19
        echo "    </tr>
";
        
        $__internal_bbbeb350a4b1b0163d00217be09cf00e603772b462b0766ef6627329efbb285f->leave($__internal_bbbeb350a4b1b0163d00217be09cf00e603772b462b0766ef6627329efbb285f_prof);

        
        $__internal_35092169d26c6210361ade7c870ed984769f3a347eadcf15f872feb7d844146b->leave($__internal_35092169d26c6210361ade7c870ed984769f3a347eadcf15f872feb7d844146b_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 19,  54 => 17,  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}

{% block show_field %}
    <tr class=\"sonata-ba-view-container history-audit-compare\">
        {% if elements[field_name] is defined %}
            {{ elements[field_name]|render_view_element_compare(object, object_compare) }}
        {% endif %}
    </tr>
{% endblock %}
", "@SonataAdmin/CRUD/base_show_compare.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_show_compare.html.twig");
    }
}
