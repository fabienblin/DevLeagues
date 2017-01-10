<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_232b93a296fa968764c445f7e83d482051781114d7c43a8df5752aae59cd94e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1fa76de2b7a7b8fb74b65a9eb2d81ea0339adda00d133eea8f48b2ba4f667ff0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fa76de2b7a7b8fb74b65a9eb2d81ea0339adda00d133eea8f48b2ba4f667ff0->enter($__internal_1fa76de2b7a7b8fb74b65a9eb2d81ea0339adda00d133eea8f48b2ba4f667ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_321c90c39b55217fb6ce3aa8e4b2c081ec4d2bb0396ada3642a58d75a8132d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_321c90c39b55217fb6ce3aa8e4b2c081ec4d2bb0396ada3642a58d75a8132d40->enter($__internal_321c90c39b55217fb6ce3aa8e4b2c081ec4d2bb0396ada3642a58d75a8132d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fa76de2b7a7b8fb74b65a9eb2d81ea0339adda00d133eea8f48b2ba4f667ff0->leave($__internal_1fa76de2b7a7b8fb74b65a9eb2d81ea0339adda00d133eea8f48b2ba4f667ff0_prof);

        
        $__internal_321c90c39b55217fb6ce3aa8e4b2c081ec4d2bb0396ada3642a58d75a8132d40->leave($__internal_321c90c39b55217fb6ce3aa8e4b2c081ec4d2bb0396ada3642a58d75a8132d40_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ce27e5cf664edb7b352e9837ed816c5907ffcb3ef7e8ccbab2c7e6a345c6ce1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce27e5cf664edb7b352e9837ed816c5907ffcb3ef7e8ccbab2c7e6a345c6ce1d->enter($__internal_ce27e5cf664edb7b352e9837ed816c5907ffcb3ef7e8ccbab2c7e6a345c6ce1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_71da4989ec578c2d38752914c934a2a01688672393b172b943408de21650e58f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71da4989ec578c2d38752914c934a2a01688672393b172b943408de21650e58f->enter($__internal_71da4989ec578c2d38752914c934a2a01688672393b172b943408de21650e58f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_71da4989ec578c2d38752914c934a2a01688672393b172b943408de21650e58f->leave($__internal_71da4989ec578c2d38752914c934a2a01688672393b172b943408de21650e58f_prof);

        
        $__internal_ce27e5cf664edb7b352e9837ed816c5907ffcb3ef7e8ccbab2c7e6a345c6ce1d->leave($__internal_ce27e5cf664edb7b352e9837ed816c5907ffcb3ef7e8ccbab2c7e6a345c6ce1d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
