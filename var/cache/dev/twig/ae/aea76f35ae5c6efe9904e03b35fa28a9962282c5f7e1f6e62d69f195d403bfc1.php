<?php

/* @DevLeagues/League/edit.html.twig */
class __TwigTemplate_205308e3f3f32992a7f39a442ea6314b7cf82441a77b1b994f79452c014070a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle:League:base.html.twig", "@DevLeagues/League/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevLeaguesBundle:League:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa3d1317100d059e048f48db600e42274b9789f86e117b0bda86fcc7eb799cc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa3d1317100d059e048f48db600e42274b9789f86e117b0bda86fcc7eb799cc7->enter($__internal_fa3d1317100d059e048f48db600e42274b9789f86e117b0bda86fcc7eb799cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/League/edit.html.twig"));

        $__internal_f77a939759f7f513d8f48bc15a1b4b9031d2ff68d5f485534fed1e09295f9c4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f77a939759f7f513d8f48bc15a1b4b9031d2ff68d5f485534fed1e09295f9c4c->enter($__internal_f77a939759f7f513d8f48bc15a1b4b9031d2ff68d5f485534fed1e09295f9c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/League/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa3d1317100d059e048f48db600e42274b9789f86e117b0bda86fcc7eb799cc7->leave($__internal_fa3d1317100d059e048f48db600e42274b9789f86e117b0bda86fcc7eb799cc7_prof);

        
        $__internal_f77a939759f7f513d8f48bc15a1b4b9031d2ff68d5f485534fed1e09295f9c4c->leave($__internal_f77a939759f7f513d8f48bc15a1b4b9031d2ff68d5f485534fed1e09295f9c4c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c1b56ed7b1037bf4eeddaa4e36fe64f619c1a70f699790f319518efa3e0c3ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c1b56ed7b1037bf4eeddaa4e36fe64f619c1a70f699790f319518efa3e0c3ba->enter($__internal_8c1b56ed7b1037bf4eeddaa4e36fe64f619c1a70f699790f319518efa3e0c3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6a787ea8f6b73f146242d9b831d73b0473ee56a90506bc03e6a48d50d97e003f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a787ea8f6b73f146242d9b831d73b0473ee56a90506bc03e6a48d50d97e003f->enter($__internal_6a787ea8f6b73f146242d9b831d73b0473ee56a90506bc03e6a48d50d97e003f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Welcome to the League:edit page</h1>
";
        
        $__internal_6a787ea8f6b73f146242d9b831d73b0473ee56a90506bc03e6a48d50d97e003f->leave($__internal_6a787ea8f6b73f146242d9b831d73b0473ee56a90506bc03e6a48d50d97e003f_prof);

        
        $__internal_8c1b56ed7b1037bf4eeddaa4e36fe64f619c1a70f699790f319518efa3e0c3ba->leave($__internal_8c1b56ed7b1037bf4eeddaa4e36fe64f619c1a70f699790f319518efa3e0c3ba_prof);

    }

    public function getTemplateName()
    {
        return "@DevLeagues/League/edit.html.twig";
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
        return new Twig_Source("{% extends \"DevLeaguesBundle:League:base.html.twig\" %}

{% block body %}
<h1>Welcome to the League:edit page</h1>
{% endblock %}
", "@DevLeagues/League/edit.html.twig", "/home/webmaster/www/public_html/DevLeagues/src/DevLeaguesBundle/Resources/views/League/edit.html.twig");
    }
}
