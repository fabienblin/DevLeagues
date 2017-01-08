<?php

/* DevLeaguesBundle::base.html.twig */
class __TwigTemplate_e98236bfce99ba951654ca5d75331d45acb6e63850b9b9e7c5b8bc5e866e7642 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "DevLeaguesBundle::base.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_content' => array($this, 'block_page_content'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_747f6f125635bcc41269ce690075632ad76196e1dacfc6a657e01a6abd465d4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_747f6f125635bcc41269ce690075632ad76196e1dacfc6a657e01a6abd465d4b->enter($__internal_747f6f125635bcc41269ce690075632ad76196e1dacfc6a657e01a6abd465d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle::base.html.twig"));

        $__internal_b2f80757157b6b1034d5ae4e72391927e3e148439c52ce2a6c86414610959de2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2f80757157b6b1034d5ae4e72391927e3e148439c52ce2a6c86414610959de2->enter($__internal_b2f80757157b6b1034d5ae4e72391927e3e148439c52ce2a6c86414610959de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_747f6f125635bcc41269ce690075632ad76196e1dacfc6a657e01a6abd465d4b->leave($__internal_747f6f125635bcc41269ce690075632ad76196e1dacfc6a657e01a6abd465d4b_prof);

        
        $__internal_b2f80757157b6b1034d5ae4e72391927e3e148439c52ce2a6c86414610959de2->leave($__internal_b2f80757157b6b1034d5ae4e72391927e3e148439c52ce2a6c86414610959de2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a47735f3603f16301daacfc8d104d4125243fd975f6a225cd3eace59383b5ea8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a47735f3603f16301daacfc8d104d4125243fd975f6a225cd3eace59383b5ea8->enter($__internal_a47735f3603f16301daacfc8d104d4125243fd975f6a225cd3eace59383b5ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a05329b38c5af5e31c9ecdd076382d9ac0e2591b29adad8d9ab6a1e6159f86e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a05329b38c5af5e31c9ecdd076382d9ac0e2591b29adad8d9ab6a1e6159f86e8->enter($__internal_a05329b38c5af5e31c9ecdd076382d9ac0e2591b29adad8d9ab6a1e6159f86e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    DevLeagues.com
";
        
        $__internal_a05329b38c5af5e31c9ecdd076382d9ac0e2591b29adad8d9ab6a1e6159f86e8->leave($__internal_a05329b38c5af5e31c9ecdd076382d9ac0e2591b29adad8d9ab6a1e6159f86e8_prof);

        
        $__internal_a47735f3603f16301daacfc8d104d4125243fd975f6a225cd3eace59383b5ea8->leave($__internal_a47735f3603f16301daacfc8d104d4125243fd975f6a225cd3eace59383b5ea8_prof);

    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_1d56a445bd768d5fc2b1f7bb5768e3a70c52501828b143ec53b61caeff9320f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d56a445bd768d5fc2b1f7bb5768e3a70c52501828b143ec53b61caeff9320f5->enter($__internal_1d56a445bd768d5fc2b1f7bb5768e3a70c52501828b143ec53b61caeff9320f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_47ff6a914abe25df479da319f4e8ba3cba2bf780c36e36b9279e161ed57cdcde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47ff6a914abe25df479da319f4e8ba3cba2bf780c36e36b9279e161ed57cdcde->enter($__internal_47ff6a914abe25df479da319f4e8ba3cba2bf780c36e36b9279e161ed57cdcde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "EMPTY Page";
        
        $__internal_47ff6a914abe25df479da319f4e8ba3cba2bf780c36e36b9279e161ed57cdcde->leave($__internal_47ff6a914abe25df479da319f4e8ba3cba2bf780c36e36b9279e161ed57cdcde_prof);

        
        $__internal_1d56a445bd768d5fc2b1f7bb5768e3a70c52501828b143ec53b61caeff9320f5->leave($__internal_1d56a445bd768d5fc2b1f7bb5768e3a70c52501828b143ec53b61caeff9320f5_prof);

    }

    // line 8
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_597cfe5de3de5d2369fe8a6d19894b0b9fd99385340971609e92f3ca2ca0b47e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_597cfe5de3de5d2369fe8a6d19894b0b9fd99385340971609e92f3ca2ca0b47e->enter($__internal_597cfe5de3de5d2369fe8a6d19894b0b9fd99385340971609e92f3ca2ca0b47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        $__internal_5d322968192eb52bd20db9f9427074dad4687d19575fc5b9687786f08b097738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d322968192eb52bd20db9f9427074dad4687d19575fc5b9687786f08b097738->enter($__internal_5d322968192eb52bd20db9f9427074dad4687d19575fc5b9687786f08b097738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "This is a temporary EMPTY page of DevLeagues.com";
        
        $__internal_5d322968192eb52bd20db9f9427074dad4687d19575fc5b9687786f08b097738->leave($__internal_5d322968192eb52bd20db9f9427074dad4687d19575fc5b9687786f08b097738_prof);

        
        $__internal_597cfe5de3de5d2369fe8a6d19894b0b9fd99385340971609e92f3ca2ca0b47e->leave($__internal_597cfe5de3de5d2369fe8a6d19894b0b9fd99385340971609e92f3ca2ca0b47e_prof);

    }

    // line 10
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_d2b6c029cd83879ac2c66cc28ef6b6fddd35f29950931a4679e6441b9cdb78ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2b6c029cd83879ac2c66cc28ef6b6fddd35f29950931a4679e6441b9cdb78ff->enter($__internal_d2b6c029cd83879ac2c66cc28ef6b6fddd35f29950931a4679e6441b9cdb78ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_51dd1d16612a128edc19d5743787dbd1249b49cc3ab5a15f81cf090cde0e2806 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51dd1d16612a128edc19d5743787dbd1249b49cc3ab5a15f81cf090cde0e2806->enter($__internal_51dd1d16612a128edc19d5743787dbd1249b49cc3ab5a15f81cf090cde0e2806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 11
        echo "            THIS PAGE IS EMPTY, FOR NOW
    ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_51dd1d16612a128edc19d5743787dbd1249b49cc3ab5a15f81cf090cde0e2806->leave($__internal_51dd1d16612a128edc19d5743787dbd1249b49cc3ab5a15f81cf090cde0e2806_prof);

        
        $__internal_d2b6c029cd83879ac2c66cc28ef6b6fddd35f29950931a4679e6441b9cdb78ff->leave($__internal_d2b6c029cd83879ac2c66cc28ef6b6fddd35f29950931a4679e6441b9cdb78ff_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_a7d6d9a1596afcc591340edad274f6b6e39b358ab8a01ee8ef7e6360d153997e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7d6d9a1596afcc591340edad274f6b6e39b358ab8a01ee8ef7e6360d153997e->enter($__internal_a7d6d9a1596afcc591340edad274f6b6e39b358ab8a01ee8ef7e6360d153997e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5456a393b1332087b109f22aea8628b7661a3f914d0cb7351a9831dc7ab39186 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5456a393b1332087b109f22aea8628b7661a3f914d0cb7351a9831dc7ab39186->enter($__internal_5456a393b1332087b109f22aea8628b7661a3f914d0cb7351a9831dc7ab39186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " THIS PAGE IS EMPTY";
        
        $__internal_5456a393b1332087b109f22aea8628b7661a3f914d0cb7351a9831dc7ab39186->leave($__internal_5456a393b1332087b109f22aea8628b7661a3f914d0cb7351a9831dc7ab39186_prof);

        
        $__internal_a7d6d9a1596afcc591340edad274f6b6e39b358ab8a01ee8ef7e6360d153997e->leave($__internal_a7d6d9a1596afcc591340edad274f6b6e39b358ab8a01ee8ef7e6360d153997e_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 12,  109 => 11,  100 => 10,  82 => 8,  64 => 7,  53 => 4,  44 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AvanzuAdminThemeBundle:layout:base-layout.html.twig' %}

{% block title %}
    DevLeagues.com
{% endblock %}

{% block page_title %}EMPTY Page{% endblock %}
{% block page_subtitle %}This is a temporary EMPTY page of DevLeagues.com{% endblock %}

{% block page_content %}
            THIS PAGE IS EMPTY, FOR NOW
    {% block body %} THIS PAGE IS EMPTY{% endblock %}
{% endblock %}
", "DevLeaguesBundle::base.html.twig", "/home/webmaster/www/public_html/DevLeagues/src/DevLeaguesBundle/Resources/views/base.html.twig");
    }
}
