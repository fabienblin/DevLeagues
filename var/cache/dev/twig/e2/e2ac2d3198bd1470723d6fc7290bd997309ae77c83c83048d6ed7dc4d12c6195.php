<?php

/* DevLeaguesBundle:Challenge:index.html.twig */
class __TwigTemplate_c90c23c1b13ef15d55eb1235da95b0442e0ea5869c7250b72d1efe9330d40c1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "DevLeaguesBundle:Challenge:index.html.twig", 1);
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
        $__internal_4d5f01b6f79e66a8724b301f2e2732ad3179584e8057649d82116c0a9f9bbe96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d5f01b6f79e66a8724b301f2e2732ad3179584e8057649d82116c0a9f9bbe96->enter($__internal_4d5f01b6f79e66a8724b301f2e2732ad3179584e8057649d82116c0a9f9bbe96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Challenge:index.html.twig"));

        $__internal_78d35ccca0589e6db3c604e82d5ce7c1c4d1e6a51706c16d3860bbb15b95fee7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78d35ccca0589e6db3c604e82d5ce7c1c4d1e6a51706c16d3860bbb15b95fee7->enter($__internal_78d35ccca0589e6db3c604e82d5ce7c1c4d1e6a51706c16d3860bbb15b95fee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Challenge:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d5f01b6f79e66a8724b301f2e2732ad3179584e8057649d82116c0a9f9bbe96->leave($__internal_4d5f01b6f79e66a8724b301f2e2732ad3179584e8057649d82116c0a9f9bbe96_prof);

        
        $__internal_78d35ccca0589e6db3c604e82d5ce7c1c4d1e6a51706c16d3860bbb15b95fee7->leave($__internal_78d35ccca0589e6db3c604e82d5ce7c1c4d1e6a51706c16d3860bbb15b95fee7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_37e7918e372d2ee62ae5a6a184b37e0984247f4657a7aef1cabbc83eae361a6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37e7918e372d2ee62ae5a6a184b37e0984247f4657a7aef1cabbc83eae361a6b->enter($__internal_37e7918e372d2ee62ae5a6a184b37e0984247f4657a7aef1cabbc83eae361a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b56b0d2adb78976be18160ed57a007bb4f36bae3d816ef24146d8dc6ff5e51ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b56b0d2adb78976be18160ed57a007bb4f36bae3d816ef24146d8dc6ff5e51ff->enter($__internal_b56b0d2adb78976be18160ed57a007bb4f36bae3d816ef24146d8dc6ff5e51ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Welcome to the Challenge:index page</h1>
";
        
        $__internal_b56b0d2adb78976be18160ed57a007bb4f36bae3d816ef24146d8dc6ff5e51ff->leave($__internal_b56b0d2adb78976be18160ed57a007bb4f36bae3d816ef24146d8dc6ff5e51ff_prof);

        
        $__internal_37e7918e372d2ee62ae5a6a184b37e0984247f4657a7aef1cabbc83eae361a6b->leave($__internal_37e7918e372d2ee62ae5a6a184b37e0984247f4657a7aef1cabbc83eae361a6b_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:Challenge:index.html.twig";
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
<h1>Welcome to the Challenge:index page</h1>
{% endblock %}
", "DevLeaguesBundle:Challenge:index.html.twig", "/home/webmaster/www/public_html/DevLeagues/src/DevLeaguesBundle/Resources/views/Challenge/index.html.twig");
    }
}
