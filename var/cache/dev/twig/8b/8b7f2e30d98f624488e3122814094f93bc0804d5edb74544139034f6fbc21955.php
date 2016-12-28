<?php

/* DevLeaguesBundle:Home:index.html.twig */
class __TwigTemplate_dfcb471055259e550921762377bd50a66e6d3e348294873784608e653290344d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "DevLeaguesBundle:Home:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevLeaguesBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_983ca9d41ca999379c79857f030da207bf802d3d17d01c6b84546cd56c65e9d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_983ca9d41ca999379c79857f030da207bf802d3d17d01c6b84546cd56c65e9d6->enter($__internal_983ca9d41ca999379c79857f030da207bf802d3d17d01c6b84546cd56c65e9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_983ca9d41ca999379c79857f030da207bf802d3d17d01c6b84546cd56c65e9d6->leave($__internal_983ca9d41ca999379c79857f030da207bf802d3d17d01c6b84546cd56c65e9d6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bdb00774573261b8567739a2f5d9a89e113f740f434a0f84085d21fddcb9a11a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdb00774573261b8567739a2f5d9a89e113f740f434a0f84085d21fddcb9a11a->enter($__internal_bdb00774573261b8567739a2f5d9a89e113f740f434a0f84085d21fddcb9a11a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DevLeaguesBundle:Home:index";
        
        $__internal_bdb00774573261b8567739a2f5d9a89e113f740f434a0f84085d21fddcb9a11a->leave($__internal_bdb00774573261b8567739a2f5d9a89e113f740f434a0f84085d21fddcb9a11a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8aac67666adb6d06158082c617fce37d7436b6038e611298dfc6658fb58ad2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8aac67666adb6d06158082c617fce37d7436b6038e611298dfc6658fb58ad2a->enter($__internal_f8aac67666adb6d06158082c617fce37d7436b6038e611298dfc6658fb58ad2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Home:index page</h1>
";
        
        $__internal_f8aac67666adb6d06158082c617fce37d7436b6038e611298dfc6658fb58ad2a->leave($__internal_f8aac67666adb6d06158082c617fce37d7436b6038e611298dfc6658fb58ad2a_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"DevLeaguesBundle::base.html.twig\" %}

{% block title %}DevLeaguesBundle:Home:index{% endblock %}

{% block body %}
<h1>Welcome to the Home:index page</h1>
{% endblock %}
", "DevLeaguesBundle:Home:index.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/Home/index.html.twig");
    }
}
