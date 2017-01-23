<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_6b7a1045406add6a985f8a934a816b22b55bb1bfd88cd8827542e104746eb685 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8da6c442571c6ab58d6ca133354221af0cfef7ad6afcdc2fbbe8546afd1cb9e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8da6c442571c6ab58d6ca133354221af0cfef7ad6afcdc2fbbe8546afd1cb9e6->enter($__internal_8da6c442571c6ab58d6ca133354221af0cfef7ad6afcdc2fbbe8546afd1cb9e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_3cb22df6250e6f51371c46b6a3cb2a0bac3479f196b22a390e80b4dad614253f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cb22df6250e6f51371c46b6a3cb2a0bac3479f196b22a390e80b4dad614253f->enter($__internal_3cb22df6250e6f51371c46b6a3cb2a0bac3479f196b22a390e80b4dad614253f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_8da6c442571c6ab58d6ca133354221af0cfef7ad6afcdc2fbbe8546afd1cb9e6->leave($__internal_8da6c442571c6ab58d6ca133354221af0cfef7ad6afcdc2fbbe8546afd1cb9e6_prof);

        
        $__internal_3cb22df6250e6f51371c46b6a3cb2a0bac3479f196b22a390e80b4dad614253f->leave($__internal_3cb22df6250e6f51371c46b6a3cb2a0bac3479f196b22a390e80b4dad614253f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_57906ca2caa0b922010b42184accff478b608f57740049ba517190f5b9a84997 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57906ca2caa0b922010b42184accff478b608f57740049ba517190f5b9a84997->enter($__internal_57906ca2caa0b922010b42184accff478b608f57740049ba517190f5b9a84997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_c8b8ddadb6d8dc8fe7d1d117af694561e1f6e0a1d8d42273af833a9afa7d0713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8b8ddadb6d8dc8fe7d1d117af694561e1f6e0a1d8d42273af833a9afa7d0713->enter($__internal_c8b8ddadb6d8dc8fe7d1d117af694561e1f6e0a1d8d42273af833a9afa7d0713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_c8b8ddadb6d8dc8fe7d1d117af694561e1f6e0a1d8d42273af833a9afa7d0713->leave($__internal_c8b8ddadb6d8dc8fe7d1d117af694561e1f6e0a1d8d42273af833a9afa7d0713_prof);

        
        $__internal_57906ca2caa0b922010b42184accff478b608f57740049ba517190f5b9a84997->leave($__internal_57906ca2caa0b922010b42184accff478b608f57740049ba517190f5b9a84997_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_fdbcf06c7a800f5a51d21bdd905486a1770a71f061f9a6d6caa320c8aa0b2521 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdbcf06c7a800f5a51d21bdd905486a1770a71f061f9a6d6caa320c8aa0b2521->enter($__internal_fdbcf06c7a800f5a51d21bdd905486a1770a71f061f9a6d6caa320c8aa0b2521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_73b236647de8b927b057527017dd8fe4e86abe78cf29bc450ca801f2bdf4a01f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73b236647de8b927b057527017dd8fe4e86abe78cf29bc450ca801f2bdf4a01f->enter($__internal_73b236647de8b927b057527017dd8fe4e86abe78cf29bc450ca801f2bdf4a01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_73b236647de8b927b057527017dd8fe4e86abe78cf29bc450ca801f2bdf4a01f->leave($__internal_73b236647de8b927b057527017dd8fe4e86abe78cf29bc450ca801f2bdf4a01f_prof);

        
        $__internal_fdbcf06c7a800f5a51d21bdd905486a1770a71f061f9a6d6caa320c8aa0b2521->leave($__internal_fdbcf06c7a800f5a51d21bdd905486a1770a71f061f9a6d6caa320c8aa0b2521_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_41f0fee5931c693c29c34ddf3c9f984ebf16e961f54b5b78c51cacf27d9ae35c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41f0fee5931c693c29c34ddf3c9f984ebf16e961f54b5b78c51cacf27d9ae35c->enter($__internal_41f0fee5931c693c29c34ddf3c9f984ebf16e961f54b5b78c51cacf27d9ae35c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_6728399325c8eaa19a399810b0e1327858a5d2386f7b5ea10d9e608d68d74a3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6728399325c8eaa19a399810b0e1327858a5d2386f7b5ea10d9e608d68d74a3c->enter($__internal_6728399325c8eaa19a399810b0e1327858a5d2386f7b5ea10d9e608d68d74a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_6728399325c8eaa19a399810b0e1327858a5d2386f7b5ea10d9e608d68d74a3c->leave($__internal_6728399325c8eaa19a399810b0e1327858a5d2386f7b5ea10d9e608d68d74a3c_prof);

        
        $__internal_41f0fee5931c693c29c34ddf3c9f984ebf16e961f54b5b78c51cacf27d9ae35c->leave($__internal_41f0fee5931c693c29c34ddf3c9f984ebf16e961f54b5b78c51cacf27d9ae35c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
