<?php

/* DevLeaguesBundle:Security:index.html.twig */
class __TwigTemplate_c132ae5136d2a919aa9579a69df0c2dcf91e3a977bbeeaae2195a9e041cbbcc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "DevLeaguesBundle:Security:index.html.twig", 1);
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
        $__internal_05d36a9f7f52b43dec90d78cf5fac34a8c88c1cac56340c62223cd3ea80e6c55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05d36a9f7f52b43dec90d78cf5fac34a8c88c1cac56340c62223cd3ea80e6c55->enter($__internal_05d36a9f7f52b43dec90d78cf5fac34a8c88c1cac56340c62223cd3ea80e6c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Security:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05d36a9f7f52b43dec90d78cf5fac34a8c88c1cac56340c62223cd3ea80e6c55->leave($__internal_05d36a9f7f52b43dec90d78cf5fac34a8c88c1cac56340c62223cd3ea80e6c55_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_99d4012a9bfa04508255ab32433d570162157e79f59b20ed7d40ecd5b46e663c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99d4012a9bfa04508255ab32433d570162157e79f59b20ed7d40ecd5b46e663c->enter($__internal_99d4012a9bfa04508255ab32433d570162157e79f59b20ed7d40ecd5b46e663c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 5
        echo twig_include($this->env, $context, "DevLeaguesBundle:Security:login.html.twig");
        echo "
";
        // line 6
        echo twig_include($this->env, $context, "DevLeaguesBundle:Security:register.html.twig");
        echo "

";
        
        $__internal_99d4012a9bfa04508255ab32433d570162157e79f59b20ed7d40ecd5b46e663c->leave($__internal_99d4012a9bfa04508255ab32433d570162157e79f59b20ed7d40ecd5b46e663c_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:Security:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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

{{ include('DevLeaguesBundle:Security:login.html.twig') }}
{{ include('DevLeaguesBundle:Security:register.html.twig') }}

{% endblock %}
", "DevLeaguesBundle:Security:index.html.twig", "/var/www/html/devleagues/src/DevLeaguesBundle/Resources/views/Security/index.html.twig");
    }
}
