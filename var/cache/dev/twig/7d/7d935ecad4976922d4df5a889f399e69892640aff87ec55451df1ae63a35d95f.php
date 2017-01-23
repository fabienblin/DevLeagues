<?php

/* @AvanzuAdminTheme/Default/index.html.twig */
class __TwigTemplate_707408cca6c449e2b66633cefa36fb2038954df910c98f12e3f1afc58624411e extends Twig_Template
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
        $__internal_403b818fcd9be54f27b71081e4df2cfd631ea4ac3cc409a7c4413c050a70f053 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_403b818fcd9be54f27b71081e4df2cfd631ea4ac3cc409a7c4413c050a70f053->enter($__internal_403b818fcd9be54f27b71081e4df2cfd631ea4ac3cc409a7c4413c050a70f053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Default/index.html.twig"));

        $__internal_08a73c143b2afaf11b26152a0e5274d0bd9cdba2bcf5d2a35711df7590b23010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08a73c143b2afaf11b26152a0e5274d0bd9cdba2bcf5d2a35711df7590b23010->enter($__internal_08a73c143b2afaf11b26152a0e5274d0bd9cdba2bcf5d2a35711df7590b23010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_403b818fcd9be54f27b71081e4df2cfd631ea4ac3cc409a7c4413c050a70f053->leave($__internal_403b818fcd9be54f27b71081e4df2cfd631ea4ac3cc409a7c4413c050a70f053_prof);

        
        $__internal_08a73c143b2afaf11b26152a0e5274d0bd9cdba2bcf5d2a35711df7590b23010->leave($__internal_08a73c143b2afaf11b26152a0e5274d0bd9cdba2bcf5d2a35711df7590b23010_prof);

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



", "@AvanzuAdminTheme/Default/index.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/AvanzuAdminThemeBundle/views/Default/index.html.twig");
    }
}
