<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_06d8630fe2d04d47f1bf3b79312c452469a4e43ef1b72981d18330f1180ed122 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_8f868ce270e953ba7ba7dafad1f014cfa0631f8d38766d59ba6577ad1e4ece13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f868ce270e953ba7ba7dafad1f014cfa0631f8d38766d59ba6577ad1e4ece13->enter($__internal_8f868ce270e953ba7ba7dafad1f014cfa0631f8d38766d59ba6577ad1e4ece13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f868ce270e953ba7ba7dafad1f014cfa0631f8d38766d59ba6577ad1e4ece13->leave($__internal_8f868ce270e953ba7ba7dafad1f014cfa0631f8d38766d59ba6577ad1e4ece13_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7dd9294f3d0e9eb775372fee349e1cc286a77a442587e3e7745b9b3e614a9c28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dd9294f3d0e9eb775372fee349e1cc286a77a442587e3e7745b9b3e614a9c28->enter($__internal_7dd9294f3d0e9eb775372fee349e1cc286a77a442587e3e7745b9b3e614a9c28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_7dd9294f3d0e9eb775372fee349e1cc286a77a442587e3e7745b9b3e614a9c28->leave($__internal_7dd9294f3d0e9eb775372fee349e1cc286a77a442587e3e7745b9b3e614a9c28_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/var/www/html/devleagues/github/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
