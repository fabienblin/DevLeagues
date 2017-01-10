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
        $__internal_ddcb23b8a1c0c93d7fcbb826676a981a2ef28917e0f06857ec3f46f074933636 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddcb23b8a1c0c93d7fcbb826676a981a2ef28917e0f06857ec3f46f074933636->enter($__internal_ddcb23b8a1c0c93d7fcbb826676a981a2ef28917e0f06857ec3f46f074933636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle::base.html.twig"));

        $__internal_ffb3274515fdab311b10773846e4a5f7d46b6bd7cc36f9f5dae10792cd8d75b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffb3274515fdab311b10773846e4a5f7d46b6bd7cc36f9f5dae10792cd8d75b7->enter($__internal_ffb3274515fdab311b10773846e4a5f7d46b6bd7cc36f9f5dae10792cd8d75b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddcb23b8a1c0c93d7fcbb826676a981a2ef28917e0f06857ec3f46f074933636->leave($__internal_ddcb23b8a1c0c93d7fcbb826676a981a2ef28917e0f06857ec3f46f074933636_prof);

        
        $__internal_ffb3274515fdab311b10773846e4a5f7d46b6bd7cc36f9f5dae10792cd8d75b7->leave($__internal_ffb3274515fdab311b10773846e4a5f7d46b6bd7cc36f9f5dae10792cd8d75b7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_20813d098f895c566cfc302dab450e9607a04bec2e2fa9d4865d08fd09d8bf98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20813d098f895c566cfc302dab450e9607a04bec2e2fa9d4865d08fd09d8bf98->enter($__internal_20813d098f895c566cfc302dab450e9607a04bec2e2fa9d4865d08fd09d8bf98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2e33d4aa988ab118cea19925dff5f131e2224db1fe5ca1220a6dc3fff9487dc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e33d4aa988ab118cea19925dff5f131e2224db1fe5ca1220a6dc3fff9487dc1->enter($__internal_2e33d4aa988ab118cea19925dff5f131e2224db1fe5ca1220a6dc3fff9487dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    DevLeagues.com
";
        
        $__internal_2e33d4aa988ab118cea19925dff5f131e2224db1fe5ca1220a6dc3fff9487dc1->leave($__internal_2e33d4aa988ab118cea19925dff5f131e2224db1fe5ca1220a6dc3fff9487dc1_prof);

        
        $__internal_20813d098f895c566cfc302dab450e9607a04bec2e2fa9d4865d08fd09d8bf98->leave($__internal_20813d098f895c566cfc302dab450e9607a04bec2e2fa9d4865d08fd09d8bf98_prof);

    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_e0ff08a37e3a26517fd6c931cd335d888d7c6d4434138c0f30d71015bbde9382 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0ff08a37e3a26517fd6c931cd335d888d7c6d4434138c0f30d71015bbde9382->enter($__internal_e0ff08a37e3a26517fd6c931cd335d888d7c6d4434138c0f30d71015bbde9382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_45b39fa31d136999afd5acbc749980c505d9a1e4507e48780e420a3cacb5404a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45b39fa31d136999afd5acbc749980c505d9a1e4507e48780e420a3cacb5404a->enter($__internal_45b39fa31d136999afd5acbc749980c505d9a1e4507e48780e420a3cacb5404a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "EMPTY Page";
        
        $__internal_45b39fa31d136999afd5acbc749980c505d9a1e4507e48780e420a3cacb5404a->leave($__internal_45b39fa31d136999afd5acbc749980c505d9a1e4507e48780e420a3cacb5404a_prof);

        
        $__internal_e0ff08a37e3a26517fd6c931cd335d888d7c6d4434138c0f30d71015bbde9382->leave($__internal_e0ff08a37e3a26517fd6c931cd335d888d7c6d4434138c0f30d71015bbde9382_prof);

    }

    // line 8
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_6935d40f3f37ddf7688f0d3e2919be55ed0c08a79909ec26454c2a35d81e1856 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6935d40f3f37ddf7688f0d3e2919be55ed0c08a79909ec26454c2a35d81e1856->enter($__internal_6935d40f3f37ddf7688f0d3e2919be55ed0c08a79909ec26454c2a35d81e1856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        $__internal_34157f91d0f36a9b39a5d5e45ae1e801936d4bf7e4736559a18e952c2e4ca81e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34157f91d0f36a9b39a5d5e45ae1e801936d4bf7e4736559a18e952c2e4ca81e->enter($__internal_34157f91d0f36a9b39a5d5e45ae1e801936d4bf7e4736559a18e952c2e4ca81e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "This is a temporary EMPTY page of DevLeagues.com";
        
        $__internal_34157f91d0f36a9b39a5d5e45ae1e801936d4bf7e4736559a18e952c2e4ca81e->leave($__internal_34157f91d0f36a9b39a5d5e45ae1e801936d4bf7e4736559a18e952c2e4ca81e_prof);

        
        $__internal_6935d40f3f37ddf7688f0d3e2919be55ed0c08a79909ec26454c2a35d81e1856->leave($__internal_6935d40f3f37ddf7688f0d3e2919be55ed0c08a79909ec26454c2a35d81e1856_prof);

    }

    // line 10
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_a1152ed6aba9bb6789d9b58369eae89a283ae752bbbb2565d6904ef82941e4e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1152ed6aba9bb6789d9b58369eae89a283ae752bbbb2565d6904ef82941e4e9->enter($__internal_a1152ed6aba9bb6789d9b58369eae89a283ae752bbbb2565d6904ef82941e4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_18b702ba443225327b6bd22d64bd7c4b63eeefdb2008c0ccba5853a6324c94b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18b702ba443225327b6bd22d64bd7c4b63eeefdb2008c0ccba5853a6324c94b2->enter($__internal_18b702ba443225327b6bd22d64bd7c4b63eeefdb2008c0ccba5853a6324c94b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 11
        echo "            THIS PAGE IS EMPTY, FOR NOW
    ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_18b702ba443225327b6bd22d64bd7c4b63eeefdb2008c0ccba5853a6324c94b2->leave($__internal_18b702ba443225327b6bd22d64bd7c4b63eeefdb2008c0ccba5853a6324c94b2_prof);

        
        $__internal_a1152ed6aba9bb6789d9b58369eae89a283ae752bbbb2565d6904ef82941e4e9->leave($__internal_a1152ed6aba9bb6789d9b58369eae89a283ae752bbbb2565d6904ef82941e4e9_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_a25a72b7a61c957b0ecb1556c4d29c6dcb226cbde5c3574fd5fce1ee385ab82b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a25a72b7a61c957b0ecb1556c4d29c6dcb226cbde5c3574fd5fce1ee385ab82b->enter($__internal_a25a72b7a61c957b0ecb1556c4d29c6dcb226cbde5c3574fd5fce1ee385ab82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_420f3ec0f4db5819ca56e91499e522278d565112ce5d18e27f86155d4df01454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_420f3ec0f4db5819ca56e91499e522278d565112ce5d18e27f86155d4df01454->enter($__internal_420f3ec0f4db5819ca56e91499e522278d565112ce5d18e27f86155d4df01454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " THIS PAGE IS EMPTY";
        
        $__internal_420f3ec0f4db5819ca56e91499e522278d565112ce5d18e27f86155d4df01454->leave($__internal_420f3ec0f4db5819ca56e91499e522278d565112ce5d18e27f86155d4df01454_prof);

        
        $__internal_a25a72b7a61c957b0ecb1556c4d29c6dcb226cbde5c3574fd5fce1ee385ab82b->leave($__internal_a25a72b7a61c957b0ecb1556c4d29c6dcb226cbde5c3574fd5fce1ee385ab82b_prof);

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
{% endblock %}", "DevLeaguesBundle::base.html.twig", "/home/webmaster/www/public_html/DevLeagues/src/DevLeaguesBundle/Resources/views/base.html.twig");
    }
}
