<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_840d0a91c030270877e77bc44622faaa4c21bfc39365b00b118f4c83598c10eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_80de6939fc72bbe8ec6134ecad02dbc6725678a2d42dbc89ca6e421f9cbaf435 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80de6939fc72bbe8ec6134ecad02dbc6725678a2d42dbc89ca6e421f9cbaf435->enter($__internal_80de6939fc72bbe8ec6134ecad02dbc6725678a2d42dbc89ca6e421f9cbaf435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80de6939fc72bbe8ec6134ecad02dbc6725678a2d42dbc89ca6e421f9cbaf435->leave($__internal_80de6939fc72bbe8ec6134ecad02dbc6725678a2d42dbc89ca6e421f9cbaf435_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ebc42cef45aac418938ce7a31bfb5ab46f2be4849c1ec69dc94faac125753616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebc42cef45aac418938ce7a31bfb5ab46f2be4849c1ec69dc94faac125753616->enter($__internal_ebc42cef45aac418938ce7a31bfb5ab46f2be4849c1ec69dc94faac125753616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_ebc42cef45aac418938ce7a31bfb5ab46f2be4849c1ec69dc94faac125753616->leave($__internal_ebc42cef45aac418938ce7a31bfb5ab46f2be4849c1ec69dc94faac125753616_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"FOSUserBundle:ChangePassword:change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/var/www/html/devleagues/github/app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
