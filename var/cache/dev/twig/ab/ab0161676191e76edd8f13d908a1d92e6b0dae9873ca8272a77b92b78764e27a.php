<?php

/* DevLeaguesBundle:Home:index.html.twig */
class __TwigTemplate_b6064ab9abf46cb7e7532f08bd69ae233472676692e2e78589effd79b57703fa extends Twig_Template
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
        $__internal_d0743029af69d2b24aab44e3c51cae7224e6e37419c2f5eefa76735d4038688b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0743029af69d2b24aab44e3c51cae7224e6e37419c2f5eefa76735d4038688b->enter($__internal_d0743029af69d2b24aab44e3c51cae7224e6e37419c2f5eefa76735d4038688b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Home:index.html.twig"));

        $__internal_3c3616e4b29a18468c98b71db26c7c390d6c5d14d48fe84bb7ac2653927efadc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c3616e4b29a18468c98b71db26c7c390d6c5d14d48fe84bb7ac2653927efadc->enter($__internal_3c3616e4b29a18468c98b71db26c7c390d6c5d14d48fe84bb7ac2653927efadc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0743029af69d2b24aab44e3c51cae7224e6e37419c2f5eefa76735d4038688b->leave($__internal_d0743029af69d2b24aab44e3c51cae7224e6e37419c2f5eefa76735d4038688b_prof);

        
        $__internal_3c3616e4b29a18468c98b71db26c7c390d6c5d14d48fe84bb7ac2653927efadc->leave($__internal_3c3616e4b29a18468c98b71db26c7c390d6c5d14d48fe84bb7ac2653927efadc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6a525a8df531672f57691ac56d7ab7a786d81d454e7f0e3d753b7c230a1fe0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6a525a8df531672f57691ac56d7ab7a786d81d454e7f0e3d753b7c230a1fe0b->enter($__internal_d6a525a8df531672f57691ac56d7ab7a786d81d454e7f0e3d753b7c230a1fe0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c3cb1a11e61dd111fda8601ab8c48e8d65522adc36b14f6d015e20237da06041 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3cb1a11e61dd111fda8601ab8c48e8d65522adc36b14f6d015e20237da06041->enter($__internal_c3cb1a11e61dd111fda8601ab8c48e8d65522adc36b14f6d015e20237da06041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Welcome to the Home:index page</h1>
";
        
        $__internal_c3cb1a11e61dd111fda8601ab8c48e8d65522adc36b14f6d015e20237da06041->leave($__internal_c3cb1a11e61dd111fda8601ab8c48e8d65522adc36b14f6d015e20237da06041_prof);

        
        $__internal_d6a525a8df531672f57691ac56d7ab7a786d81d454e7f0e3d753b7c230a1fe0b->leave($__internal_d6a525a8df531672f57691ac56d7ab7a786d81d454e7f0e3d753b7c230a1fe0b_prof);

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
", "DevLeaguesBundle:Home:index.html.twig", "/home/webmaster/www/public_html/DevLeagues/var/cache/dev/../../../src/DevLeaguesBundle/Resources/views/Home/index.html.twig");
    }
}
