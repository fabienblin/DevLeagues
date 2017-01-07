<?php

/* @DevLeagues/Home/index.html.twig */
class __TwigTemplate_52ea22e18fbc823177340f30ad29b0adf7f12fce37078dd5d98012157656b230 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "@DevLeagues/Home/index.html.twig", 1);
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
        $__internal_ec47d136c786844e4171dde0485b3d1384a0fb455683ffb745b3457a294e2765 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec47d136c786844e4171dde0485b3d1384a0fb455683ffb745b3457a294e2765->enter($__internal_ec47d136c786844e4171dde0485b3d1384a0fb455683ffb745b3457a294e2765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Home/index.html.twig"));

        $__internal_5da13b698827082219c4e669ff91f5c07c8a971d20233d8176a12b4fdf562c04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5da13b698827082219c4e669ff91f5c07c8a971d20233d8176a12b4fdf562c04->enter($__internal_5da13b698827082219c4e669ff91f5c07c8a971d20233d8176a12b4fdf562c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Home/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec47d136c786844e4171dde0485b3d1384a0fb455683ffb745b3457a294e2765->leave($__internal_ec47d136c786844e4171dde0485b3d1384a0fb455683ffb745b3457a294e2765_prof);

        
        $__internal_5da13b698827082219c4e669ff91f5c07c8a971d20233d8176a12b4fdf562c04->leave($__internal_5da13b698827082219c4e669ff91f5c07c8a971d20233d8176a12b4fdf562c04_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_74bbd4e759a73636cc6cf43cc9abe5186ce6172930c9a4983819296abafbbff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74bbd4e759a73636cc6cf43cc9abe5186ce6172930c9a4983819296abafbbff2->enter($__internal_74bbd4e759a73636cc6cf43cc9abe5186ce6172930c9a4983819296abafbbff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_93895752779a85ed042b4ef0668a2f2d33552aa9aeb269cd143428b78132e7a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93895752779a85ed042b4ef0668a2f2d33552aa9aeb269cd143428b78132e7a2->enter($__internal_93895752779a85ed042b4ef0668a2f2d33552aa9aeb269cd143428b78132e7a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Welcome to the Home:index page</h1>
";
        
        $__internal_93895752779a85ed042b4ef0668a2f2d33552aa9aeb269cd143428b78132e7a2->leave($__internal_93895752779a85ed042b4ef0668a2f2d33552aa9aeb269cd143428b78132e7a2_prof);

        
        $__internal_74bbd4e759a73636cc6cf43cc9abe5186ce6172930c9a4983819296abafbbff2->leave($__internal_74bbd4e759a73636cc6cf43cc9abe5186ce6172930c9a4983819296abafbbff2_prof);

    }

    public function getTemplateName()
    {
        return "@DevLeagues/Home/index.html.twig";
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
", "@DevLeagues/Home/index.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/Home/index.html.twig");
    }
}
