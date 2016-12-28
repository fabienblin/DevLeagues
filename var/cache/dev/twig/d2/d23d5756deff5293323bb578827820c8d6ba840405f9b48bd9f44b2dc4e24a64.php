<?php

/* DevLeaguesBundle:Error:index.html.twig */
class __TwigTemplate_6e1fe611fbfc00717634923dc10e95f7f40326066af8968bb23317fd9f93a140 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "DevLeaguesBundle:Error:index.html.twig", 1);
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
        $__internal_02db72ef8eeecd4dad88b2ac068d762f3d63db7d48e8a4f3629478904c1a5cc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02db72ef8eeecd4dad88b2ac068d762f3d63db7d48e8a4f3629478904c1a5cc1->enter($__internal_02db72ef8eeecd4dad88b2ac068d762f3d63db7d48e8a4f3629478904c1a5cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Error:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02db72ef8eeecd4dad88b2ac068d762f3d63db7d48e8a4f3629478904c1a5cc1->leave($__internal_02db72ef8eeecd4dad88b2ac068d762f3d63db7d48e8a4f3629478904c1a5cc1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_614da641c96398edd7586675a874ee965983d2de99b93a50df4ed2e13e45f109 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_614da641c96398edd7586675a874ee965983d2de99b93a50df4ed2e13e45f109->enter($__internal_614da641c96398edd7586675a874ee965983d2de99b93a50df4ed2e13e45f109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DevLeaguesBundle:Error:index";
        
        $__internal_614da641c96398edd7586675a874ee965983d2de99b93a50df4ed2e13e45f109->leave($__internal_614da641c96398edd7586675a874ee965983d2de99b93a50df4ed2e13e45f109_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b38822147986a22e76fdf936531749d3266e9f013b22bbeb19cc6c3b1e4990d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b38822147986a22e76fdf936531749d3266e9f013b22bbeb19cc6c3b1e4990d->enter($__internal_1b38822147986a22e76fdf936531749d3266e9f013b22bbeb19cc6c3b1e4990d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Error:index page</h1>
";
        
        $__internal_1b38822147986a22e76fdf936531749d3266e9f013b22bbeb19cc6c3b1e4990d->leave($__internal_1b38822147986a22e76fdf936531749d3266e9f013b22bbeb19cc6c3b1e4990d_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:Error:index.html.twig";
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

{% block title %}DevLeaguesBundle:Error:index{% endblock %}

{% block body %}
<h1>Welcome to the Error:index page</h1>
{% endblock %}
", "DevLeaguesBundle:Error:index.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/Error/index.html.twig");
    }
}
