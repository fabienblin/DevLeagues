<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_7d1f6b522ddcb3e4cdb47d998aa3708ea3314f9bbc4e7420235b1d9f1b991f08 extends Twig_Template
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
        $__internal_c64704e5a71150298a199039d596ff73badf3ee1760e4cbf1959887a1f3130b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c64704e5a71150298a199039d596ff73badf3ee1760e4cbf1959887a1f3130b3->enter($__internal_c64704e5a71150298a199039d596ff73badf3ee1760e4cbf1959887a1f3130b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c64704e5a71150298a199039d596ff73badf3ee1760e4cbf1959887a1f3130b3->leave($__internal_c64704e5a71150298a199039d596ff73badf3ee1760e4cbf1959887a1f3130b3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7e050792ae2d345ff47f27ecdd9ff1af34e0a408c21b4319de1755fb903a6ffa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e050792ae2d345ff47f27ecdd9ff1af34e0a408c21b4319de1755fb903a6ffa->enter($__internal_7e050792ae2d345ff47f27ecdd9ff1af34e0a408c21b4319de1755fb903a6ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_7e050792ae2d345ff47f27ecdd9ff1af34e0a408c21b4319de1755fb903a6ffa->leave($__internal_7e050792ae2d345ff47f27ecdd9ff1af34e0a408c21b4319de1755fb903a6ffa_prof);

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
", "FOSUserBundle:Security:login.html.twig", "/var/www/html/devleagues/github/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
