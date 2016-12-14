<?php

/* DevLeaguesBundle:Event:index.html.twig */
class __TwigTemplate_a1d996ae2611bb65fa57865528ac930914ab91e0cc09791877bc8b6b0071386a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "DevLeaguesBundle:Event:index.html.twig", 1);
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
        $__internal_9f0bcd55706e6f14dc97472af031b6216b9ad0b54c94e34acabbcdb3f54db463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f0bcd55706e6f14dc97472af031b6216b9ad0b54c94e34acabbcdb3f54db463->enter($__internal_9f0bcd55706e6f14dc97472af031b6216b9ad0b54c94e34acabbcdb3f54db463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Event:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f0bcd55706e6f14dc97472af031b6216b9ad0b54c94e34acabbcdb3f54db463->leave($__internal_9f0bcd55706e6f14dc97472af031b6216b9ad0b54c94e34acabbcdb3f54db463_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c9f54cbdf2d587565f0f1b4118d14c043c8ee3abba544838201328f6e380ac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c9f54cbdf2d587565f0f1b4118d14c043c8ee3abba544838201328f6e380ac3->enter($__internal_2c9f54cbdf2d587565f0f1b4118d14c043c8ee3abba544838201328f6e380ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DevLeaguesBundle:Event:index";
        
        $__internal_2c9f54cbdf2d587565f0f1b4118d14c043c8ee3abba544838201328f6e380ac3->leave($__internal_2c9f54cbdf2d587565f0f1b4118d14c043c8ee3abba544838201328f6e380ac3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_57c477538476f9192d2685431e98a6317a63f83f3bcf7774fac4503502c2b5a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57c477538476f9192d2685431e98a6317a63f83f3bcf7774fac4503502c2b5a4->enter($__internal_57c477538476f9192d2685431e98a6317a63f83f3bcf7774fac4503502c2b5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Event:index page</h1>
";
        
        $__internal_57c477538476f9192d2685431e98a6317a63f83f3bcf7774fac4503502c2b5a4->leave($__internal_57c477538476f9192d2685431e98a6317a63f83f3bcf7774fac4503502c2b5a4_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:Event:index.html.twig";
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

{% block title %}DevLeaguesBundle:Event:index{% endblock %}

{% block body %}
<h1>Welcome to the Event:index page</h1>
{% endblock %}
", "DevLeaguesBundle:Event:index.html.twig", "/var/www/html/devleagues/src/DevLeaguesBundle/Resources/views/Event/index.html.twig");
    }
}
