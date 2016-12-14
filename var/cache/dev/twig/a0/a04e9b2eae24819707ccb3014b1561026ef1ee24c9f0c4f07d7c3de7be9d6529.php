<?php

/* DevLeaguesBundle:Login:index.html.twig */
class __TwigTemplate_dfc16dd2d231c1a68ce3a82fcc9f974eef69946e45b9c67bc9cc3e7d3318cbf6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "DevLeaguesBundle:Login:index.html.twig", 1);
        $this->blocks = array(
            'login' => array($this, 'block_login'),
            'register' => array($this, 'block_register'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevLeaguesBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0af9d46e1cbe51467c1940b3fcdbf60a2bcc051f286734b646d4f6037e07152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0af9d46e1cbe51467c1940b3fcdbf60a2bcc051f286734b646d4f6037e07152->enter($__internal_c0af9d46e1cbe51467c1940b3fcdbf60a2bcc051f286734b646d4f6037e07152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Login:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0af9d46e1cbe51467c1940b3fcdbf60a2bcc051f286734b646d4f6037e07152->leave($__internal_c0af9d46e1cbe51467c1940b3fcdbf60a2bcc051f286734b646d4f6037e07152_prof);

    }

    // line 3
    public function block_login($context, array $blocks = array())
    {
        $__internal_dfb2f556fe284145ecf491aed3a500780d2ac4daa866de068556644307716ecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfb2f556fe284145ecf491aed3a500780d2ac4daa866de068556644307716ecd->enter($__internal_dfb2f556fe284145ecf491aed3a500780d2ac4daa866de068556644307716ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 4
        echo "<h1>block login</h1>
";
        
        $__internal_dfb2f556fe284145ecf491aed3a500780d2ac4daa866de068556644307716ecd->leave($__internal_dfb2f556fe284145ecf491aed3a500780d2ac4daa866de068556644307716ecd_prof);

    }

    // line 7
    public function block_register($context, array $blocks = array())
    {
        $__internal_8bc9c73127c9365b77ff850a2d27f3560a43c59495662b9ec09bc9f7c8c89b04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bc9c73127c9365b77ff850a2d27f3560a43c59495662b9ec09bc9f7c8c89b04->enter($__internal_8bc9c73127c9365b77ff850a2d27f3560a43c59495662b9ec09bc9f7c8c89b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "register"));

        // line 8
        echo "<h1>block register</h1>
";
        
        $__internal_8bc9c73127c9365b77ff850a2d27f3560a43c59495662b9ec09bc9f7c8c89b04->leave($__internal_8bc9c73127c9365b77ff850a2d27f3560a43c59495662b9ec09bc9f7c8c89b04_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:Login:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
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

{% block login %}
<h1>block login</h1>
{% endblock %}

{% block register %}
<h1>block register</h1>
{% endblock %}
", "DevLeaguesBundle:Login:index.html.twig", "/var/www/html/devleagues/src/DevLeaguesBundle/Resources/views/Login/index.html.twig");
    }
}
