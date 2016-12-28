<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_d0251f8a9b2eb1415815ed3da0529f139617d9339d1f1308c04511c44cba2c20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_66644f063004e7652b714fe6858d8714f03d790c84c395e709846c43bc763239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66644f063004e7652b714fe6858d8714f03d790c84c395e709846c43bc763239->enter($__internal_66644f063004e7652b714fe6858d8714f03d790c84c395e709846c43bc763239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66644f063004e7652b714fe6858d8714f03d790c84c395e709846c43bc763239->leave($__internal_66644f063004e7652b714fe6858d8714f03d790c84c395e709846c43bc763239_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_addb6fa91a49b08737d17d3726edec7fc330b1d410e3fa7987ed2a0b77439ff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_addb6fa91a49b08737d17d3726edec7fc330b1d410e3fa7987ed2a0b77439ff7->enter($__internal_addb6fa91a49b08737d17d3726edec7fc330b1d410e3fa7987ed2a0b77439ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_addb6fa91a49b08737d17d3726edec7fc330b1d410e3fa7987ed2a0b77439ff7->leave($__internal_addb6fa91a49b08737d17d3726edec7fc330b1d410e3fa7987ed2a0b77439ff7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"FOSUserBundle:Resetting:reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/var/www/html/devleagues/github/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
