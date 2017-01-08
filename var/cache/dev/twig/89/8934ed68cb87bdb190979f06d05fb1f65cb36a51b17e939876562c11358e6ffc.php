<?php

/* DevLeaguesBundle:Home:index.html.twig */
class __TwigTemplate_cc9ff3a00f387bcb231b8aa16293cc8fbc7d2e534dc77d59c6106f58766c3097 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "DevLeaguesBundle:Home:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevLeaguesBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e2fff6e9d4bb46fc59bfd6e2309a686956e4b305bbc573ba929e03f302fe3c08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2fff6e9d4bb46fc59bfd6e2309a686956e4b305bbc573ba929e03f302fe3c08->enter($__internal_e2fff6e9d4bb46fc59bfd6e2309a686956e4b305bbc573ba929e03f302fe3c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Home:index.html.twig"));

        $__internal_66fe452b033097fdec5638049bdaec6f3942a358a7cc9e62f570014dbb03232b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66fe452b033097fdec5638049bdaec6f3942a358a7cc9e62f570014dbb03232b->enter($__internal_66fe452b033097fdec5638049bdaec6f3942a358a7cc9e62f570014dbb03232b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2fff6e9d4bb46fc59bfd6e2309a686956e4b305bbc573ba929e03f302fe3c08->leave($__internal_e2fff6e9d4bb46fc59bfd6e2309a686956e4b305bbc573ba929e03f302fe3c08_prof);

        
        $__internal_66fe452b033097fdec5638049bdaec6f3942a358a7cc9e62f570014dbb03232b->leave($__internal_66fe452b033097fdec5638049bdaec6f3942a358a7cc9e62f570014dbb03232b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_88d2ba2255bd7edba7ae19e14127de68d6a353b31a57be685d1e9db452ef30cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88d2ba2255bd7edba7ae19e14127de68d6a353b31a57be685d1e9db452ef30cd->enter($__internal_88d2ba2255bd7edba7ae19e14127de68d6a353b31a57be685d1e9db452ef30cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_47eb3f297dca316b945118445aabc0a01f96906c87cf7d3b7358aa0d33f49e67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47eb3f297dca316b945118445aabc0a01f96906c87cf7d3b7358aa0d33f49e67->enter($__internal_47eb3f297dca316b945118445aabc0a01f96906c87cf7d3b7358aa0d33f49e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Welcome to the Home:index page</h1>
";
        
        $__internal_47eb3f297dca316b945118445aabc0a01f96906c87cf7d3b7358aa0d33f49e67->leave($__internal_47eb3f297dca316b945118445aabc0a01f96906c87cf7d3b7358aa0d33f49e67_prof);

        
        $__internal_88d2ba2255bd7edba7ae19e14127de68d6a353b31a57be685d1e9db452ef30cd->leave($__internal_88d2ba2255bd7edba7ae19e14127de68d6a353b31a57be685d1e9db452ef30cd_prof);

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
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block body %}
<h1>Welcome to the Home:index page</h1>
{% endblock %}
", "DevLeaguesBundle:Home:index.html.twig", "/home/webmaster/www/public_html/DevLeagues/src/DevLeaguesBundle/Resources/views/Home/index.html.twig");
    }
}
