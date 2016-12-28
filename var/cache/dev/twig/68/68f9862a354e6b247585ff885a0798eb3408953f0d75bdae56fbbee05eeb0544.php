<?php

/* DevLeaguesBundle:Community:index.html.twig */
class __TwigTemplate_99d9915b61975d3c28fea2fdd303b14519559cc6fe5e3e04069fe33e1ce42662 extends Twig_Template
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
        $__internal_c6723390fb442499f549df6c496b1e76f13b7e32ecdf5c92b7738ea2d8f714aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6723390fb442499f549df6c496b1e76f13b7e32ecdf5c92b7738ea2d8f714aa->enter($__internal_c6723390fb442499f549df6c496b1e76f13b7e32ecdf5c92b7738ea2d8f714aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Community:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6723390fb442499f549df6c496b1e76f13b7e32ecdf5c92b7738ea2d8f714aa->leave($__internal_c6723390fb442499f549df6c496b1e76f13b7e32ecdf5c92b7738ea2d8f714aa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c7da736dfbc59b30d3e67ec74a6641a5292e1dcafc9eadfc58490214f4eeb186 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7da736dfbc59b30d3e67ec74a6641a5292e1dcafc9eadfc58490214f4eeb186->enter($__internal_c7da736dfbc59b30d3e67ec74a6641a5292e1dcafc9eadfc58490214f4eeb186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DevLeaguesBundle:Community:index";
        
        $__internal_c7da736dfbc59b30d3e67ec74a6641a5292e1dcafc9eadfc58490214f4eeb186->leave($__internal_c7da736dfbc59b30d3e67ec74a6641a5292e1dcafc9eadfc58490214f4eeb186_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4edadd41b5c9ed50734a16e215649f923134604cf854b5e221d258ae4fc0f241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4edadd41b5c9ed50734a16e215649f923134604cf854b5e221d258ae4fc0f241->enter($__internal_4edadd41b5c9ed50734a16e215649f923134604cf854b5e221d258ae4fc0f241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Community:index page</h1>
";
        
        $__internal_4edadd41b5c9ed50734a16e215649f923134604cf854b5e221d258ae4fc0f241->leave($__internal_4edadd41b5c9ed50734a16e215649f923134604cf854b5e221d258ae4fc0f241_prof);

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
