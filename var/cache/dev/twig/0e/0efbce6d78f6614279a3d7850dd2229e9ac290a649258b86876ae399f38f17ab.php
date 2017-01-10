<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_b659f33254444547cae413405a80b44d4399a98d4784ebac73dc1fd8b6f55283 extends Twig_Template
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
        $__internal_a281a45724cabc751d1dbdfefccb20fcc74106119254c7ead4ce7e7af8e0aadb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a281a45724cabc751d1dbdfefccb20fcc74106119254c7ead4ce7e7af8e0aadb->enter($__internal_a281a45724cabc751d1dbdfefccb20fcc74106119254c7ead4ce7e7af8e0aadb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_c482534ba5e88c7d3a2ed89c3c9b77aeedbff688d575bb631273aff6c808b78d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c482534ba5e88c7d3a2ed89c3c9b77aeedbff688d575bb631273aff6c808b78d->enter($__internal_c482534ba5e88c7d3a2ed89c3c9b77aeedbff688d575bb631273aff6c808b78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_a281a45724cabc751d1dbdfefccb20fcc74106119254c7ead4ce7e7af8e0aadb->leave($__internal_a281a45724cabc751d1dbdfefccb20fcc74106119254c7ead4ce7e7af8e0aadb_prof);

        
        $__internal_c482534ba5e88c7d3a2ed89c3c9b77aeedbff688d575bb631273aff6c808b78d->leave($__internal_c482534ba5e88c7d3a2ed89c3c9b77aeedbff688d575bb631273aff6c808b78d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_448134585d9bb722bf1421bec70d9a836ea966f17324159c4d13fb86fb0b928e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_448134585d9bb722bf1421bec70d9a836ea966f17324159c4d13fb86fb0b928e->enter($__internal_448134585d9bb722bf1421bec70d9a836ea966f17324159c4d13fb86fb0b928e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_d32f2dd60b3e3373f4be2d1c00c771093e151767d0e2feaf8ffc9090665ff7b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d32f2dd60b3e3373f4be2d1c00c771093e151767d0e2feaf8ffc9090665ff7b7->enter($__internal_d32f2dd60b3e3373f4be2d1c00c771093e151767d0e2feaf8ffc9090665ff7b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_d32f2dd60b3e3373f4be2d1c00c771093e151767d0e2feaf8ffc9090665ff7b7->leave($__internal_d32f2dd60b3e3373f4be2d1c00c771093e151767d0e2feaf8ffc9090665ff7b7_prof);

        
        $__internal_448134585d9bb722bf1421bec70d9a836ea966f17324159c4d13fb86fb0b928e->leave($__internal_448134585d9bb722bf1421bec70d9a836ea966f17324159c4d13fb86fb0b928e_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_75ac848ca1bf49c2353799b95d987a86eee73be2ee121c2c9bba8bab8a7e57c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75ac848ca1bf49c2353799b95d987a86eee73be2ee121c2c9bba8bab8a7e57c2->enter($__internal_75ac848ca1bf49c2353799b95d987a86eee73be2ee121c2c9bba8bab8a7e57c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_56bec2ff3f73045319334b42f77045f2d6fc18c64cc0856c57c7b5d90b06ae3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56bec2ff3f73045319334b42f77045f2d6fc18c64cc0856c57c7b5d90b06ae3a->enter($__internal_56bec2ff3f73045319334b42f77045f2d6fc18c64cc0856c57c7b5d90b06ae3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_56bec2ff3f73045319334b42f77045f2d6fc18c64cc0856c57c7b5d90b06ae3a->leave($__internal_56bec2ff3f73045319334b42f77045f2d6fc18c64cc0856c57c7b5d90b06ae3a_prof);

        
        $__internal_75ac848ca1bf49c2353799b95d987a86eee73be2ee121c2c9bba8bab8a7e57c2->leave($__internal_75ac848ca1bf49c2353799b95d987a86eee73be2ee121c2c9bba8bab8a7e57c2_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8b3b3786f330b15267508e76bb35f8be00ab9454c9c4308b2ef227d4875577a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b3b3786f330b15267508e76bb35f8be00ab9454c9c4308b2ef227d4875577a2->enter($__internal_8b3b3786f330b15267508e76bb35f8be00ab9454c9c4308b2ef227d4875577a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_47c1c57d48f948e1f801388f6015f523e3866cb25d4f9312e9ec5b978b2dfd93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47c1c57d48f948e1f801388f6015f523e3866cb25d4f9312e9ec5b978b2dfd93->enter($__internal_47c1c57d48f948e1f801388f6015f523e3866cb25d4f9312e9ec5b978b2dfd93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_47c1c57d48f948e1f801388f6015f523e3866cb25d4f9312e9ec5b978b2dfd93->leave($__internal_47c1c57d48f948e1f801388f6015f523e3866cb25d4f9312e9ec5b978b2dfd93_prof);

        
        $__internal_8b3b3786f330b15267508e76bb35f8be00ab9454c9c4308b2ef227d4875577a2->leave($__internal_8b3b3786f330b15267508e76bb35f8be00ab9454c9c4308b2ef227d4875577a2_prof);

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
