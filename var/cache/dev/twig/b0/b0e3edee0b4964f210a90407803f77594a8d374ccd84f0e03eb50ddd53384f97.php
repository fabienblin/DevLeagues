<?php

/* @AvanzuAdminTheme/Default/index.html.twig */
class __TwigTemplate_78f8dab11a8e04d40d1f1a81eb09515123e66a7081efad6d1b3997e90dc6c991 extends Twig_Template
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
        $__internal_9d061afcd03eef5be781304cb0a9fb850c53eaf40c97bb822fd40acfc253da1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d061afcd03eef5be781304cb0a9fb850c53eaf40c97bb822fd40acfc253da1e->enter($__internal_9d061afcd03eef5be781304cb0a9fb850c53eaf40c97bb822fd40acfc253da1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Default/index.html.twig"));

        $__internal_8a912d0a22d6d305d3d999a43affb4563a9a5534c5a856d2bbb889bcd9940a48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a912d0a22d6d305d3d999a43affb4563a9a5534c5a856d2bbb889bcd9940a48->enter($__internal_8a912d0a22d6d305d3d999a43affb4563a9a5534c5a856d2bbb889bcd9940a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d061afcd03eef5be781304cb0a9fb850c53eaf40c97bb822fd40acfc253da1e->leave($__internal_9d061afcd03eef5be781304cb0a9fb850c53eaf40c97bb822fd40acfc253da1e_prof);

        
        $__internal_8a912d0a22d6d305d3d999a43affb4563a9a5534c5a856d2bbb889bcd9940a48->leave($__internal_8a912d0a22d6d305d3d999a43affb4563a9a5534c5a856d2bbb889bcd9940a48_prof);

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
