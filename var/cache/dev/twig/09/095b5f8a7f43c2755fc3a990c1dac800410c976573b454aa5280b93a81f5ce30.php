<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_807ef7c546f81fdf5388ce9958000ca635e9c8618e6a08dee2f24e7ad2690a46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_7e3d639bbf939539147aca612ef3351ef15ffe9d0303cca602ce87c466c7d829 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e3d639bbf939539147aca612ef3351ef15ffe9d0303cca602ce87c466c7d829->enter($__internal_7e3d639bbf939539147aca612ef3351ef15ffe9d0303cca602ce87c466c7d829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_44cd672ab609b848c81aa969a115c71b2d0b1392d95fab06047ae75dfb3bca39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44cd672ab609b848c81aa969a115c71b2d0b1392d95fab06047ae75dfb3bca39->enter($__internal_44cd672ab609b848c81aa969a115c71b2d0b1392d95fab06047ae75dfb3bca39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e3d639bbf939539147aca612ef3351ef15ffe9d0303cca602ce87c466c7d829->leave($__internal_7e3d639bbf939539147aca612ef3351ef15ffe9d0303cca602ce87c466c7d829_prof);

        
        $__internal_44cd672ab609b848c81aa969a115c71b2d0b1392d95fab06047ae75dfb3bca39->leave($__internal_44cd672ab609b848c81aa969a115c71b2d0b1392d95fab06047ae75dfb3bca39_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_96f6ed4f5d465009cfc9cfcfe5a80e93202af7fe7637d450fb5fca630ffcb1e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96f6ed4f5d465009cfc9cfcfe5a80e93202af7fe7637d450fb5fca630ffcb1e6->enter($__internal_96f6ed4f5d465009cfc9cfcfe5a80e93202af7fe7637d450fb5fca630ffcb1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_665bd2d7881c320c1ca84f4cde23e5188d1920e97d785b3e8ad731e2225e99eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_665bd2d7881c320c1ca84f4cde23e5188d1920e97d785b3e8ad731e2225e99eb->enter($__internal_665bd2d7881c320c1ca84f4cde23e5188d1920e97d785b3e8ad731e2225e99eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_665bd2d7881c320c1ca84f4cde23e5188d1920e97d785b3e8ad731e2225e99eb->leave($__internal_665bd2d7881c320c1ca84f4cde23e5188d1920e97d785b3e8ad731e2225e99eb_prof);

        
        $__internal_96f6ed4f5d465009cfc9cfcfe5a80e93202af7fe7637d450fb5fca630ffcb1e6->leave($__internal_96f6ed4f5d465009cfc9cfcfe5a80e93202af7fe7637d450fb5fca630ffcb1e6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
