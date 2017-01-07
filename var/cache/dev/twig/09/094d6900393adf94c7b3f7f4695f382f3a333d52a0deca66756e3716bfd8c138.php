<?php

/* @AvanzuAdminTheme/Default/index.html.twig */
class __TwigTemplate_35c80f23c3fbac1e5cc2695b200ea0eb3a33274c3badc56c36497ee1dfa3b758 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "@AvanzuAdminTheme/Default/index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb17bf26ce98c0841e1cf627f1b1dc0e64586a7c049da8e37d48a42594cfa86f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb17bf26ce98c0841e1cf627f1b1dc0e64586a7c049da8e37d48a42594cfa86f->enter($__internal_eb17bf26ce98c0841e1cf627f1b1dc0e64586a7c049da8e37d48a42594cfa86f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Default/index.html.twig"));

        $__internal_f0966f8ef0e9f5e0cdc445457ef1f9c309f2581935e389fada0ac79281122fcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0966f8ef0e9f5e0cdc445457ef1f9c309f2581935e389fada0ac79281122fcc->enter($__internal_f0966f8ef0e9f5e0cdc445457ef1f9c309f2581935e389fada0ac79281122fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb17bf26ce98c0841e1cf627f1b1dc0e64586a7c049da8e37d48a42594cfa86f->leave($__internal_eb17bf26ce98c0841e1cf627f1b1dc0e64586a7c049da8e37d48a42594cfa86f_prof);

        
        $__internal_f0966f8ef0e9f5e0cdc445457ef1f9c309f2581935e389fada0ac79281122fcc->leave($__internal_f0966f8ef0e9f5e0cdc445457ef1f9c309f2581935e389fada0ac79281122fcc_prof);

    }

    public function getTemplateName()
    {
        return "@AvanzuAdminTheme/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AvanzuAdminThemeBundle:layout:base-layout.html.twig' %}



", "@AvanzuAdminTheme/Default/index.html.twig", "/var/www/html/devleagues/github/app/Resources/AvanzuAdminThemeBundle/views/Default/index.html.twig");
    }
}
