<?php

/* @SonataAdmin/CRUD/edit.html.twig */
class __TwigTemplate_e43b05711143fd2fb86c03f937721ea27ebc80021cd3d7385af48f4566d4787d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit.html.twig", "@SonataAdmin/CRUD/edit.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_780e972ae003de6081ddd37a835d6e2f4c0561bd2b3b9aea5e3690b9edc35252 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_780e972ae003de6081ddd37a835d6e2f4c0561bd2b3b9aea5e3690b9edc35252->enter($__internal_780e972ae003de6081ddd37a835d6e2f4c0561bd2b3b9aea5e3690b9edc35252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit.html.twig"));

        $__internal_df4c131fafb8f6d6cee25fbc83e5f0b30257a8ce2e54bb68aaa2886534fee1d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df4c131fafb8f6d6cee25fbc83e5f0b30257a8ce2e54bb68aaa2886534fee1d9->enter($__internal_df4c131fafb8f6d6cee25fbc83e5f0b30257a8ce2e54bb68aaa2886534fee1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_780e972ae003de6081ddd37a835d6e2f4c0561bd2b3b9aea5e3690b9edc35252->leave($__internal_780e972ae003de6081ddd37a835d6e2f4c0561bd2b3b9aea5e3690b9edc35252_prof);

        
        $__internal_df4c131fafb8f6d6cee25fbc83e5f0b30257a8ce2e54bb68aaa2886534fee1d9->leave($__internal_df4c131fafb8f6d6cee25fbc83e5f0b30257a8ce2e54bb68aaa2886534fee1d9_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends 'SonataAdminBundle:CRUD:base_edit.html.twig' %}
", "@SonataAdmin/CRUD/edit.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit.html.twig");
    }
}
