<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_0b65577eececb67f8adf88ecb35955e135241b6b190478b08081199e4aae0dee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_82fff702247aa3f35843256bf65cb63dff50c61dc94f4f66de49baa24b1b2d8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82fff702247aa3f35843256bf65cb63dff50c61dc94f4f66de49baa24b1b2d8e->enter($__internal_82fff702247aa3f35843256bf65cb63dff50c61dc94f4f66de49baa24b1b2d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_277d64dcf114f75e87d692d45f387d930e8389d90749111c0da5b163b31abef5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_277d64dcf114f75e87d692d45f387d930e8389d90749111c0da5b163b31abef5->enter($__internal_277d64dcf114f75e87d692d45f387d930e8389d90749111c0da5b163b31abef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82fff702247aa3f35843256bf65cb63dff50c61dc94f4f66de49baa24b1b2d8e->leave($__internal_82fff702247aa3f35843256bf65cb63dff50c61dc94f4f66de49baa24b1b2d8e_prof);

        
        $__internal_277d64dcf114f75e87d692d45f387d930e8389d90749111c0da5b163b31abef5->leave($__internal_277d64dcf114f75e87d692d45f387d930e8389d90749111c0da5b163b31abef5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6d1c5b55140fb3f40ad898bebb01cb97082a065b812419c02ea8b3691c5fce4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d1c5b55140fb3f40ad898bebb01cb97082a065b812419c02ea8b3691c5fce4c->enter($__internal_6d1c5b55140fb3f40ad898bebb01cb97082a065b812419c02ea8b3691c5fce4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a47d272d059a805b4f9d13f0be6d0cb5d71f52d3dd43b26048e85e6e157699ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a47d272d059a805b4f9d13f0be6d0cb5d71f52d3dd43b26048e85e6e157699ad->enter($__internal_a47d272d059a805b4f9d13f0be6d0cb5d71f52d3dd43b26048e85e6e157699ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_a47d272d059a805b4f9d13f0be6d0cb5d71f52d3dd43b26048e85e6e157699ad->leave($__internal_a47d272d059a805b4f9d13f0be6d0cb5d71f52d3dd43b26048e85e6e157699ad_prof);

        
        $__internal_6d1c5b55140fb3f40ad898bebb01cb97082a065b812419c02ea8b3691c5fce4c->leave($__internal_6d1c5b55140fb3f40ad898bebb01cb97082a065b812419c02ea8b3691c5fce4c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
