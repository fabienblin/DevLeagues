<?php

/* DevLeaguesBundle:Profile:show.html.twig */
class __TwigTemplate_6072c3ea68c849fa37bb5f1bdce902aa2cde01047b2c96c0a0c70c237efd3ac8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DevLeaguesBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b88568129cd219a0286c518c0d4700af454caed7e2843bbaf91ca609e4cf8a08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b88568129cd219a0286c518c0d4700af454caed7e2843bbaf91ca609e4cf8a08->enter($__internal_b88568129cd219a0286c518c0d4700af454caed7e2843bbaf91ca609e4cf8a08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b88568129cd219a0286c518c0d4700af454caed7e2843bbaf91ca609e4cf8a08->leave($__internal_b88568129cd219a0286c518c0d4700af454caed7e2843bbaf91ca609e4cf8a08_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c4f167b7c18317e22e1ee00c5c1cf5d0b66b290730c22fed9f37ff64257a152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c4f167b7c18317e22e1ee00c5c1cf5d0b66b290730c22fed9f37ff64257a152->enter($__internal_0c4f167b7c18317e22e1ee00c5c1cf5d0b66b290730c22fed9f37ff64257a152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DevLeaguesBundle:Profile:show";
        
        $__internal_0c4f167b7c18317e22e1ee00c5c1cf5d0b66b290730c22fed9f37ff64257a152->leave($__internal_0c4f167b7c18317e22e1ee00c5c1cf5d0b66b290730c22fed9f37ff64257a152_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b1b54021de988389e5722a97cc7bb91260fe80f7d7c2e6a0a0bfa6598047a20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b1b54021de988389e5722a97cc7bb91260fe80f7d7c2e6a0a0bfa6598047a20->enter($__internal_8b1b54021de988389e5722a97cc7bb91260fe80f7d7c2e6a0a0bfa6598047a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Profile:show page</h1>
";
        
        $__internal_8b1b54021de988389e5722a97cc7bb91260fe80f7d7c2e6a0a0bfa6598047a20->leave($__internal_8b1b54021de988389e5722a97cc7bb91260fe80f7d7c2e6a0a0bfa6598047a20_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:Profile:show.html.twig";
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
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}DevLeaguesBundle:Profile:show{% endblock %}

{% block body %}
<h1>Welcome to the Profile:show page</h1>
{% endblock %}
", "DevLeaguesBundle:Profile:show.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/Profile/show.html.twig");
    }
}
