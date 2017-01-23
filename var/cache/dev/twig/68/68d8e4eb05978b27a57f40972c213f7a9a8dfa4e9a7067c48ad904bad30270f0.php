<?php

/* @DevLeagues/League/index.html.twig */
class __TwigTemplate_b1f499c1bd0e563da142c5c44a43b19bc9c2ed79718615f4c9f1b9338e263d02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "@DevLeagues/League/index.html.twig", 1);
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
        $__internal_1d5da145fe8b90a7ff9b01ac83b8b52f822ff28e61a469a29cb824687e829411 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d5da145fe8b90a7ff9b01ac83b8b52f822ff28e61a469a29cb824687e829411->enter($__internal_1d5da145fe8b90a7ff9b01ac83b8b52f822ff28e61a469a29cb824687e829411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/League/index.html.twig"));

        $__internal_918227a35d91f2b71d5e6a20086795320ee47e5897caa9e9752d0d0acc81e09b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_918227a35d91f2b71d5e6a20086795320ee47e5897caa9e9752d0d0acc81e09b->enter($__internal_918227a35d91f2b71d5e6a20086795320ee47e5897caa9e9752d0d0acc81e09b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/League/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d5da145fe8b90a7ff9b01ac83b8b52f822ff28e61a469a29cb824687e829411->leave($__internal_1d5da145fe8b90a7ff9b01ac83b8b52f822ff28e61a469a29cb824687e829411_prof);

        
        $__internal_918227a35d91f2b71d5e6a20086795320ee47e5897caa9e9752d0d0acc81e09b->leave($__internal_918227a35d91f2b71d5e6a20086795320ee47e5897caa9e9752d0d0acc81e09b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf63608add3ac1e4d6746ddae9007c7ca0dd4b4273da6972ea5da10a2108fea2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf63608add3ac1e4d6746ddae9007c7ca0dd4b4273da6972ea5da10a2108fea2->enter($__internal_bf63608add3ac1e4d6746ddae9007c7ca0dd4b4273da6972ea5da10a2108fea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d6ef7f0f8cd2e37003471e56fc9077dbf15919bf969ca2f9a81c6c850a23c766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6ef7f0f8cd2e37003471e56fc9077dbf15919bf969ca2f9a81c6c850a23c766->enter($__internal_d6ef7f0f8cd2e37003471e56fc9077dbf15919bf969ca2f9a81c6c850a23c766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Welcome to the League:index page</h1>
";
        
        $__internal_d6ef7f0f8cd2e37003471e56fc9077dbf15919bf969ca2f9a81c6c850a23c766->leave($__internal_d6ef7f0f8cd2e37003471e56fc9077dbf15919bf969ca2f9a81c6c850a23c766_prof);

        
        $__internal_bf63608add3ac1e4d6746ddae9007c7ca0dd4b4273da6972ea5da10a2108fea2->leave($__internal_bf63608add3ac1e4d6746ddae9007c7ca0dd4b4273da6972ea5da10a2108fea2_prof);

    }

    public function getTemplateName()
    {
        return "@DevLeagues/League/index.html.twig";
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
<h1>Welcome to the League:index page</h1>
{% endblock %}
", "@DevLeagues/League/index.html.twig", "/home/webmaster/www/public_html/DevLeagues/src/DevLeaguesBundle/Resources/views/League/index.html.twig");
    }
}
