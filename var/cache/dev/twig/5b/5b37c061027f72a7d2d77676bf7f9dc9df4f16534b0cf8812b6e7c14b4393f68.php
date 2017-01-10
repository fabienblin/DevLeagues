<?php

/* @SonataAdmin/CRUD/history.html.twig */
class __TwigTemplate_f25847c44cb8cb664f2aa327ecc7c599d1a3bb41bc82575ccae1338a8fcd709d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_history.html.twig", "@SonataAdmin/CRUD/history.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_98eb362e7f06aee2a729b73de853be151b7f4d40e8de88b5c9e504040efd87fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98eb362e7f06aee2a729b73de853be151b7f4d40e8de88b5c9e504040efd87fc->enter($__internal_98eb362e7f06aee2a729b73de853be151b7f4d40e8de88b5c9e504040efd87fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/history.html.twig"));

        $__internal_0ed3fd8c470cee824198ac61c7ce4cc725b9979a131e83928f5bcfb18d4ef119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ed3fd8c470cee824198ac61c7ce4cc725b9979a131e83928f5bcfb18d4ef119->enter($__internal_0ed3fd8c470cee824198ac61c7ce4cc725b9979a131e83928f5bcfb18d4ef119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98eb362e7f06aee2a729b73de853be151b7f4d40e8de88b5c9e504040efd87fc->leave($__internal_98eb362e7f06aee2a729b73de853be151b7f4d40e8de88b5c9e504040efd87fc_prof);

        
        $__internal_0ed3fd8c470cee824198ac61c7ce4cc725b9979a131e83928f5bcfb18d4ef119->leave($__internal_0ed3fd8c470cee824198ac61c7ce4cc725b9979a131e83928f5bcfb18d4ef119_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/history.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_history.html.twig' %}
", "@SonataAdmin/CRUD/history.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/history.html.twig");
    }
}
