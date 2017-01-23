<?php

/* DevLeaguesBundle:Challenge:index.html.twig */
class __TwigTemplate_03f9ff68c74bed57e1c3fd8a0ef7b9646aaaa377f31541faa298c8a479fa995d extends Twig_Template
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
        $__internal_82ae5687ccede9e3c4dc3acf237df0bd042e52d0b04f520075908144ec7f56ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82ae5687ccede9e3c4dc3acf237df0bd042e52d0b04f520075908144ec7f56ea->enter($__internal_82ae5687ccede9e3c4dc3acf237df0bd042e52d0b04f520075908144ec7f56ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Challenge:index.html.twig"));

        $__internal_55a42d749e67ea0f125d310c413bcfacb2b1176f5b4bfe10dd4e17209edae0c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55a42d749e67ea0f125d310c413bcfacb2b1176f5b4bfe10dd4e17209edae0c2->enter($__internal_55a42d749e67ea0f125d310c413bcfacb2b1176f5b4bfe10dd4e17209edae0c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Challenge:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82ae5687ccede9e3c4dc3acf237df0bd042e52d0b04f520075908144ec7f56ea->leave($__internal_82ae5687ccede9e3c4dc3acf237df0bd042e52d0b04f520075908144ec7f56ea_prof);

        
        $__internal_55a42d749e67ea0f125d310c413bcfacb2b1176f5b4bfe10dd4e17209edae0c2->leave($__internal_55a42d749e67ea0f125d310c413bcfacb2b1176f5b4bfe10dd4e17209edae0c2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0064532025af748a7503a4d15c1ead19521724576c1a0a3f2d348e42bef6304 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0064532025af748a7503a4d15c1ead19521724576c1a0a3f2d348e42bef6304->enter($__internal_a0064532025af748a7503a4d15c1ead19521724576c1a0a3f2d348e42bef6304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_39d79f8b3f0806bbca5a6c294f8209ecc0b1b61facf4e14f5cd4a36540b71482 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39d79f8b3f0806bbca5a6c294f8209ecc0b1b61facf4e14f5cd4a36540b71482->enter($__internal_39d79f8b3f0806bbca5a6c294f8209ecc0b1b61facf4e14f5cd4a36540b71482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Welcome to the Challenge:index page</h1>
";
        
        $__internal_39d79f8b3f0806bbca5a6c294f8209ecc0b1b61facf4e14f5cd4a36540b71482->leave($__internal_39d79f8b3f0806bbca5a6c294f8209ecc0b1b61facf4e14f5cd4a36540b71482_prof);

        
        $__internal_a0064532025af748a7503a4d15c1ead19521724576c1a0a3f2d348e42bef6304->leave($__internal_a0064532025af748a7503a4d15c1ead19521724576c1a0a3f2d348e42bef6304_prof);

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
