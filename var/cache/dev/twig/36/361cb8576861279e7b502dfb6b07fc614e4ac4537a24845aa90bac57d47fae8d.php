<?php

/* @SonataAdmin/CRUD/show_currency.html.twig */
class __TwigTemplate_6b0d58f4f29c94edb12559e738031be34e49e0a4e6c4bd2f98043f333db3d5fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_currency.html.twig", 12);
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
        $__internal_83cfc49640606eb4f2233500b6f4c1575e9ebe8ae3bdc5e078d3dcab237818e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83cfc49640606eb4f2233500b6f4c1575e9ebe8ae3bdc5e078d3dcab237818e7->enter($__internal_83cfc49640606eb4f2233500b6f4c1575e9ebe8ae3bdc5e078d3dcab237818e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_currency.html.twig"));

        $__internal_62451d226eb3b5b637b21dff0c6e0d6c5ddf2b620921eb5f1e16d783da2416b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62451d226eb3b5b637b21dff0c6e0d6c5ddf2b620921eb5f1e16d783da2416b2->enter($__internal_62451d226eb3b5b637b21dff0c6e0d6c5ddf2b620921eb5f1e16d783da2416b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83cfc49640606eb4f2233500b6f4c1575e9ebe8ae3bdc5e078d3dcab237818e7->leave($__internal_83cfc49640606eb4f2233500b6f4c1575e9ebe8ae3bdc5e078d3dcab237818e7_prof);

        
        $__internal_62451d226eb3b5b637b21dff0c6e0d6c5ddf2b620921eb5f1e16d783da2416b2->leave($__internal_62451d226eb3b5b637b21dff0c6e0d6c5ddf2b620921eb5f1e16d783da2416b2_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_128adb4ac8707eba575a18b8a5bcf2f834f390a3c179e4c768f5252be1e8cb47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_128adb4ac8707eba575a18b8a5bcf2f834f390a3c179e4c768f5252be1e8cb47->enter($__internal_128adb4ac8707eba575a18b8a5bcf2f834f390a3c179e4c768f5252be1e8cb47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_5744be4e670014e4a05faedcb730e3c1e489bc608db6d0d5fe1c2b6b0e4c41ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5744be4e670014e4a05faedcb730e3c1e489bc608db6d0d5fe1c2b6b0e4c41ff->enter($__internal_5744be4e670014e4a05faedcb730e3c1e489bc608db6d0d5fe1c2b6b0e4c41ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === ($context["value"] ?? $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_5744be4e670014e4a05faedcb730e3c1e489bc608db6d0d5fe1c2b6b0e4c41ff->leave($__internal_5744be4e670014e4a05faedcb730e3c1e489bc608db6d0d5fe1c2b6b0e4c41ff_prof);

        
        $__internal_128adb4ac8707eba575a18b8a5bcf2f834f390a3c179e4c768f5252be1e8cb47->leave($__internal_128adb4ac8707eba575a18b8a5bcf2f834f390a3c179e4c768f5252be1e8cb47_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
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
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
", "@SonataAdmin/CRUD/show_currency.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_currency.html.twig");
    }
}
