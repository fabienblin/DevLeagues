<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_5d651b68b11c893365f16f516297baeb9c493346425b0d50d22545abeea878a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd7c991efa4171b90c972fec60ed6c7df544532a009d637bcb547e6a5d74084d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd7c991efa4171b90c972fec60ed6c7df544532a009d637bcb547e6a5d74084d->enter($__internal_cd7c991efa4171b90c972fec60ed6c7df544532a009d637bcb547e6a5d74084d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd7c991efa4171b90c972fec60ed6c7df544532a009d637bcb547e6a5d74084d->leave($__internal_cd7c991efa4171b90c972fec60ed6c7df544532a009d637bcb547e6a5d74084d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ab957bf4071c227285f6d8de637ddd2376cab71ca16989580530659682c3070e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab957bf4071c227285f6d8de637ddd2376cab71ca16989580530659682c3070e->enter($__internal_ab957bf4071c227285f6d8de637ddd2376cab71ca16989580530659682c3070e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_ab957bf4071c227285f6d8de637ddd2376cab71ca16989580530659682c3070e->leave($__internal_ab957bf4071c227285f6d8de637ddd2376cab71ca16989580530659682c3070e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/var/www/html/devleagues/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
