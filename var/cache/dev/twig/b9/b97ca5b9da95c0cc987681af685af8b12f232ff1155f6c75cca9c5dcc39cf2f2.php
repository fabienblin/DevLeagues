<?php

/* DevLeaguesBundle:Home:index.html.twig */
class __TwigTemplate_244ff00119ee4014b7dc3baf204ffe6aa5575c01446b13fac1ed6974d5e2c350 extends Twig_Template
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
        $__internal_6cc812588571c3f7311f5f13401049040a99abefcf81f0e0ced6d2533cd1327f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cc812588571c3f7311f5f13401049040a99abefcf81f0e0ced6d2533cd1327f->enter($__internal_6cc812588571c3f7311f5f13401049040a99abefcf81f0e0ced6d2533cd1327f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cc812588571c3f7311f5f13401049040a99abefcf81f0e0ced6d2533cd1327f->leave($__internal_6cc812588571c3f7311f5f13401049040a99abefcf81f0e0ced6d2533cd1327f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8d5bd044d41d81cdaaeef198cc7e6fe201ce17cccfb69514072ce5137d6a1732 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d5bd044d41d81cdaaeef198cc7e6fe201ce17cccfb69514072ce5137d6a1732->enter($__internal_8d5bd044d41d81cdaaeef198cc7e6fe201ce17cccfb69514072ce5137d6a1732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DevLeaguesBundle:Home:index";
        
        $__internal_8d5bd044d41d81cdaaeef198cc7e6fe201ce17cccfb69514072ce5137d6a1732->leave($__internal_8d5bd044d41d81cdaaeef198cc7e6fe201ce17cccfb69514072ce5137d6a1732_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9737407362d47e67ea1011f5ab9985a6cad9276e5dfae45f0a08ccb7e8860101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9737407362d47e67ea1011f5ab9985a6cad9276e5dfae45f0a08ccb7e8860101->enter($__internal_9737407362d47e67ea1011f5ab9985a6cad9276e5dfae45f0a08ccb7e8860101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Home:index page</h1>
";
        
        $__internal_9737407362d47e67ea1011f5ab9985a6cad9276e5dfae45f0a08ccb7e8860101->leave($__internal_9737407362d47e67ea1011f5ab9985a6cad9276e5dfae45f0a08ccb7e8860101_prof);

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
", "DevLeaguesBundle:Home:index.html.twig", "/var/www/html/devleagues/src/DevLeaguesBundle/Resources/views/Home/index.html.twig");
    }
}
