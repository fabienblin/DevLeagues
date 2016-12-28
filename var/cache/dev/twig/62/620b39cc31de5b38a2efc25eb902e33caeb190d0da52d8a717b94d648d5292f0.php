<?php

/* DevLeaguesBundle:Community:index.html.twig */
class __TwigTemplate_8b4c16697760ecfe4f529c8d30cf6d7a1dbef85b480ae6e93fa73a1a97fc403b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "DevLeaguesBundle:Community:index.html.twig", 1);
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
        $__internal_4a457e8d899800847ad490777c2caf274d44995eb2c0aa97f9de97d52399b605 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a457e8d899800847ad490777c2caf274d44995eb2c0aa97f9de97d52399b605->enter($__internal_4a457e8d899800847ad490777c2caf274d44995eb2c0aa97f9de97d52399b605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Community:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a457e8d899800847ad490777c2caf274d44995eb2c0aa97f9de97d52399b605->leave($__internal_4a457e8d899800847ad490777c2caf274d44995eb2c0aa97f9de97d52399b605_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc31fdd6956d30e68a0a805c03289f59b7802f8d132793340f8022d422393c77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc31fdd6956d30e68a0a805c03289f59b7802f8d132793340f8022d422393c77->enter($__internal_dc31fdd6956d30e68a0a805c03289f59b7802f8d132793340f8022d422393c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DevLeaguesBundle:Community:index";
        
        $__internal_dc31fdd6956d30e68a0a805c03289f59b7802f8d132793340f8022d422393c77->leave($__internal_dc31fdd6956d30e68a0a805c03289f59b7802f8d132793340f8022d422393c77_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2791f18336056f01a18e10c3ab45fe2763302bfc2d620388e1d4703bc05aab3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2791f18336056f01a18e10c3ab45fe2763302bfc2d620388e1d4703bc05aab3b->enter($__internal_2791f18336056f01a18e10c3ab45fe2763302bfc2d620388e1d4703bc05aab3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Community:index page</h1>
";
        
        $__internal_2791f18336056f01a18e10c3ab45fe2763302bfc2d620388e1d4703bc05aab3b->leave($__internal_2791f18336056f01a18e10c3ab45fe2763302bfc2d620388e1d4703bc05aab3b_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:Community:index.html.twig";
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

{% block title %}DevLeaguesBundle:Community:index{% endblock %}

{% block body %}
<h1>Welcome to the Community:index page</h1>
{% endblock %}
", "DevLeaguesBundle:Community:index.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/Community/index.html.twig");
    }
}
