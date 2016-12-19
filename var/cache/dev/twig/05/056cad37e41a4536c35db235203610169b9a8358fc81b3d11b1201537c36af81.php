<?php

/* DevLeaguesBundle:Home:index.html.twig */
class __TwigTemplate_86cd34c4c0aa7afca667b14f5c5821d2294618979abcdd4828081f880c1c8e25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "DevLeaguesBundle:Home:index.html.twig", 1);
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
        $__internal_796b7532a683f660a36ef349cb0a8fba7311ebd3d3f50b3e057637d70b3b5fc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_796b7532a683f660a36ef349cb0a8fba7311ebd3d3f50b3e057637d70b3b5fc3->enter($__internal_796b7532a683f660a36ef349cb0a8fba7311ebd3d3f50b3e057637d70b3b5fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_796b7532a683f660a36ef349cb0a8fba7311ebd3d3f50b3e057637d70b3b5fc3->leave($__internal_796b7532a683f660a36ef349cb0a8fba7311ebd3d3f50b3e057637d70b3b5fc3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e382a3a24419b71ebabe02bd2bbe0357c4232b370e1c5dfedaa8ae64cbe3a1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e382a3a24419b71ebabe02bd2bbe0357c4232b370e1c5dfedaa8ae64cbe3a1f->enter($__internal_2e382a3a24419b71ebabe02bd2bbe0357c4232b370e1c5dfedaa8ae64cbe3a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DevLeaguesBundle:Home:index";
        
        $__internal_2e382a3a24419b71ebabe02bd2bbe0357c4232b370e1c5dfedaa8ae64cbe3a1f->leave($__internal_2e382a3a24419b71ebabe02bd2bbe0357c4232b370e1c5dfedaa8ae64cbe3a1f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_19d9c5447c1388bb442ae28d7d1affb74d17ad637397e7fcdef941c7cbc816d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19d9c5447c1388bb442ae28d7d1affb74d17ad637397e7fcdef941c7cbc816d3->enter($__internal_19d9c5447c1388bb442ae28d7d1affb74d17ad637397e7fcdef941c7cbc816d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Home:index page</h1>
";
        
        $__internal_19d9c5447c1388bb442ae28d7d1affb74d17ad637397e7fcdef941c7cbc816d3->leave($__internal_19d9c5447c1388bb442ae28d7d1affb74d17ad637397e7fcdef941c7cbc816d3_prof);

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

{% block title %}DevLeaguesBundle:Home:index{% endblock %}

{% block body %}
<h1>Welcome to the Home:index page</h1>
{% endblock %}
", "DevLeaguesBundle:Home:index.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/Home/index.html.twig");
    }
}
