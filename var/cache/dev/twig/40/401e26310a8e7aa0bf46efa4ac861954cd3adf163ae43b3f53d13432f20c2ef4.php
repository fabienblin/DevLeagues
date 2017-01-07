<?php

/* @SonataAdmin/empty_layout.html.twig */
class __TwigTemplate_0b591ac15dbcc3958dd979d887297bd593312419e28072947324d326167beb7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "@SonataAdmin/empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc713a183072b51990e3a4575973352ef6d40e4b0094784d1a023ef496c4d638 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc713a183072b51990e3a4575973352ef6d40e4b0094784d1a023ef496c4d638->enter($__internal_fc713a183072b51990e3a4575973352ef6d40e4b0094784d1a023ef496c4d638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/empty_layout.html.twig"));

        $__internal_c86d21beeb7ab97c7795dba67f89905b6bc6de9c154c6e298d373b1cd6099dad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c86d21beeb7ab97c7795dba67f89905b6bc6de9c154c6e298d373b1cd6099dad->enter($__internal_c86d21beeb7ab97c7795dba67f89905b6bc6de9c154c6e298d373b1cd6099dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc713a183072b51990e3a4575973352ef6d40e4b0094784d1a023ef496c4d638->leave($__internal_fc713a183072b51990e3a4575973352ef6d40e4b0094784d1a023ef496c4d638_prof);

        
        $__internal_c86d21beeb7ab97c7795dba67f89905b6bc6de9c154c6e298d373b1cd6099dad->leave($__internal_c86d21beeb7ab97c7795dba67f89905b6bc6de9c154c6e298d373b1cd6099dad_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_6948150a93739fc10c6a5dbe8d4551d32365fcf5e5b211363cd2ad63f3719ed4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6948150a93739fc10c6a5dbe8d4551d32365fcf5e5b211363cd2ad63f3719ed4->enter($__internal_6948150a93739fc10c6a5dbe8d4551d32365fcf5e5b211363cd2ad63f3719ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        $__internal_20f4cf2bbeeecc8f637cbb7d70439a0858157dea581021d46fe80139c9adeca0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20f4cf2bbeeecc8f637cbb7d70439a0858157dea581021d46fe80139c9adeca0->enter($__internal_20f4cf2bbeeecc8f637cbb7d70439a0858157dea581021d46fe80139c9adeca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_20f4cf2bbeeecc8f637cbb7d70439a0858157dea581021d46fe80139c9adeca0->leave($__internal_20f4cf2bbeeecc8f637cbb7d70439a0858157dea581021d46fe80139c9adeca0_prof);

        
        $__internal_6948150a93739fc10c6a5dbe8d4551d32365fcf5e5b211363cd2ad63f3719ed4->leave($__internal_6948150a93739fc10c6a5dbe8d4551d32365fcf5e5b211363cd2ad63f3719ed4_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_08a48e11a001c793b42c021a8cb662fc1cbdd5b6fde4b519fbfca719584ab3f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08a48e11a001c793b42c021a8cb662fc1cbdd5b6fde4b519fbfca719584ab3f8->enter($__internal_08a48e11a001c793b42c021a8cb662fc1cbdd5b6fde4b519fbfca719584ab3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        $__internal_80ac1739689a3af7913ab017d6107c429a7f9c22daea07d42d87b0313d84ca53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80ac1739689a3af7913ab017d6107c429a7f9c22daea07d42d87b0313d84ca53->enter($__internal_80ac1739689a3af7913ab017d6107c429a7f9c22daea07d42d87b0313d84ca53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_80ac1739689a3af7913ab017d6107c429a7f9c22daea07d42d87b0313d84ca53->leave($__internal_80ac1739689a3af7913ab017d6107c429a7f9c22daea07d42d87b0313d84ca53_prof);

        
        $__internal_08a48e11a001c793b42c021a8cb662fc1cbdd5b6fde4b519fbfca719584ab3f8->leave($__internal_08a48e11a001c793b42c021a8cb662fc1cbdd5b6fde4b519fbfca719584ab3f8_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_6f3bc916766bddd143da5f43164c6a0baffeb9cd76de2c021ff1422c6ea22be4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f3bc916766bddd143da5f43164c6a0baffeb9cd76de2c021ff1422c6ea22be4->enter($__internal_6f3bc916766bddd143da5f43164c6a0baffeb9cd76de2c021ff1422c6ea22be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        $__internal_43508ebd45b42737725986ef66d44ee00328d49f4fcd49c42d3955db3cd001da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43508ebd45b42737725986ef66d44ee00328d49f4fcd49c42d3955db3cd001da->enter($__internal_43508ebd45b42737725986ef66d44ee00328d49f4fcd49c42d3955db3cd001da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_43508ebd45b42737725986ef66d44ee00328d49f4fcd49c42d3955db3cd001da->leave($__internal_43508ebd45b42737725986ef66d44ee00328d49f4fcd49c42d3955db3cd001da_prof);

        
        $__internal_6f3bc916766bddd143da5f43164c6a0baffeb9cd76de2c021ff1422c6ea22be4->leave($__internal_6f3bc916766bddd143da5f43164c6a0baffeb9cd76de2c021ff1422c6ea22be4_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_d6d031945e806055f04ebb036a459559545f7d406c52abee54fe8e1749ce54da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6d031945e806055f04ebb036a459559545f7d406c52abee54fe8e1749ce54da->enter($__internal_d6d031945e806055f04ebb036a459559545f7d406c52abee54fe8e1749ce54da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        $__internal_c466102a3dd488a4ae252113513890c7522652a3f16bfdbc548fdc089db35cf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c466102a3dd488a4ae252113513890c7522652a3f16bfdbc548fdc089db35cf1->enter($__internal_c466102a3dd488a4ae252113513890c7522652a3f16bfdbc548fdc089db35cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_c466102a3dd488a4ae252113513890c7522652a3f16bfdbc548fdc089db35cf1->leave($__internal_c466102a3dd488a4ae252113513890c7522652a3f16bfdbc548fdc089db35cf1_prof);

        
        $__internal_d6d031945e806055f04ebb036a459559545f7d406c52abee54fe8e1749ce54da->leave($__internal_d6d031945e806055f04ebb036a459559545f7d406c52abee54fe8e1749ce54da_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7d0972fbcbb7b5f97937a7da8d42e4d5bb938df73815ac940e52f26c30ca2052 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d0972fbcbb7b5f97937a7da8d42e4d5bb938df73815ac940e52f26c30ca2052->enter($__internal_7d0972fbcbb7b5f97937a7da8d42e4d5bb938df73815ac940e52f26c30ca2052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9a2a0a855de9eb77a86a9f027b53a9ae170a8edcd7f610872bd3062c3b82df99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a2a0a855de9eb77a86a9f027b53a9ae170a8edcd7f610872bd3062c3b82df99->enter($__internal_9a2a0a855de9eb77a86a9f027b53a9ae170a8edcd7f610872bd3062c3b82df99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

";
        
        $__internal_9a2a0a855de9eb77a86a9f027b53a9ae170a8edcd7f610872bd3062c3b82df99->leave($__internal_9a2a0a855de9eb77a86a9f027b53a9ae170a8edcd7f610872bd3062c3b82df99_prof);

        
        $__internal_7d0972fbcbb7b5f97937a7da8d42e4d5bb938df73815ac940e52f26c30ca2052->leave($__internal_7d0972fbcbb7b5f97937a7da8d42e4d5bb938df73815ac940e52f26c30ca2052_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_0d54f831d4f160483b229bb8d66de08696fcf64b1a39dce3ba8a229491a7d549 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d54f831d4f160483b229bb8d66de08696fcf64b1a39dce3ba8a229491a7d549->enter($__internal_0d54f831d4f160483b229bb8d66de08696fcf64b1a39dce3ba8a229491a7d549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        $__internal_c6ea91c7a1d766a641481cb51a84af0ae3cb57120f72c7a6614c04dc36c440f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6ea91c7a1d766a641481cb51a84af0ae3cb57120f72c7a6614c04dc36c440f3->enter($__internal_c6ea91c7a1d766a641481cb51a84af0ae3cb57120f72c7a6614c04dc36c440f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_c6ea91c7a1d766a641481cb51a84af0ae3cb57120f72c7a6614c04dc36c440f3->leave($__internal_c6ea91c7a1d766a641481cb51a84af0ae3cb57120f72c7a6614c04dc36c440f3_prof);

        
        $__internal_0d54f831d4f160483b229bb8d66de08696fcf64b1a39dce3ba8a229491a7d549->leave($__internal_0d54f831d4f160483b229bb8d66de08696fcf64b1a39dce3ba8a229491a7d549_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_4764f49752651d5a1def1c8980a3c131e30108797c84887fc08299122cfbb79a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4764f49752651d5a1def1c8980a3c131e30108797c84887fc08299122cfbb79a->enter($__internal_4764f49752651d5a1def1c8980a3c131e30108797c84887fc08299122cfbb79a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        $__internal_b735c7551bd9c3cd89e44b6a73b06f10f2906465b60cd204291052aadf70ab68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b735c7551bd9c3cd89e44b6a73b06f10f2906465b60cd204291052aadf70ab68->enter($__internal_b735c7551bd9c3cd89e44b6a73b06f10f2906465b60cd204291052aadf70ab68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_b735c7551bd9c3cd89e44b6a73b06f10f2906465b60cd204291052aadf70ab68->leave($__internal_b735c7551bd9c3cd89e44b6a73b06f10f2906465b60cd204291052aadf70ab68_prof);

        
        $__internal_4764f49752651d5a1def1c8980a3c131e30108797c84887fc08299122cfbb79a->leave($__internal_4764f49752651d5a1def1c8980a3c131e30108797c84887fc08299122cfbb79a_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 33,  152 => 32,  143 => 31,  122 => 20,  113 => 19,  96 => 17,  79 => 16,  62 => 15,  45 => 14,  24 => 12,);
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

{% extends admin_pool.getTemplate('layout') %}

{% block sonata_header %}{% endblock %}
{% block sonata_left_side %}{% endblock %}
{% block sonata_nav %}{% endblock %}
{% block sonata_breadcrumb %}{% endblock %}

{% block stylesheets %}
    {{ parent() }}

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

{% endblock %}

{% block sonata_wrapper %}
    {% block sonata_page_content %}
        {{ parent() }}
    {% endblock %}
{% endblock %}
", "@SonataAdmin/empty_layout.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/empty_layout.html.twig");
    }
}
