<?php

/* @SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig */
class __TwigTemplate_24fdeb5ca7914a9dd18894cf347bdde9273573c088247f05870570fa37769cd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Form:filter_admin_fields.html.twig", "@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Form:filter_admin_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cbf6a3c19beb9c767496f2b331b20b445aef5a47b25e57cc804c4d5c6d897aa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbf6a3c19beb9c767496f2b331b20b445aef5a47b25e57cc804c4d5c6d897aa0->enter($__internal_cbf6a3c19beb9c767496f2b331b20b445aef5a47b25e57cc804c4d5c6d897aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig"));

        $__internal_74d2b0acdfba85224a45c1d25977fbd465e731534ba25e9d9677553e7868aba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74d2b0acdfba85224a45c1d25977fbd465e731534ba25e9d9677553e7868aba1->enter($__internal_74d2b0acdfba85224a45c1d25977fbd465e731534ba25e9d9677553e7868aba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbf6a3c19beb9c767496f2b331b20b445aef5a47b25e57cc804c4d5c6d897aa0->leave($__internal_cbf6a3c19beb9c767496f2b331b20b445aef5a47b25e57cc804c4d5c6d897aa0_prof);

        
        $__internal_74d2b0acdfba85224a45c1d25977fbd465e731534ba25e9d9677553e7868aba1->leave($__internal_74d2b0acdfba85224a45c1d25977fbd465e731534ba25e9d9677553e7868aba1_prof);

    }

    public function getTemplateName()
    {
        return "@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig";
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

{% extends 'SonataAdminBundle:Form:filter_admin_fields.html.twig' %}
", "@SonataDoctrineORMAdmin/Form/filter_admin_fields.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/doctrine-orm-admin-bundle/Resources/views/Form/filter_admin_fields.html.twig");
    }
}
