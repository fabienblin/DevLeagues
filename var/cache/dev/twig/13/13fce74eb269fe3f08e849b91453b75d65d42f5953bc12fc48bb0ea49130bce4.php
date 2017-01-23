<?php

/* @SonataAdmin/CRUD/list.html.twig */
class __TwigTemplate_f6055c8a40ecd6e074e1a94bbb4ae32dd0af81f1c65211343331f17ebbb5acd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "@SonataAdmin/CRUD/list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_751538319b38211478e6dce4f8802f26bc25d2b43a1898eb0d60bd8bce1dd473 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_751538319b38211478e6dce4f8802f26bc25d2b43a1898eb0d60bd8bce1dd473->enter($__internal_751538319b38211478e6dce4f8802f26bc25d2b43a1898eb0d60bd8bce1dd473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list.html.twig"));

        $__internal_292b98bd5c2721503c94bb0fb83305304967f8c20e502fb3b8cb06ba274a8dfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_292b98bd5c2721503c94bb0fb83305304967f8c20e502fb3b8cb06ba274a8dfa->enter($__internal_292b98bd5c2721503c94bb0fb83305304967f8c20e502fb3b8cb06ba274a8dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_751538319b38211478e6dce4f8802f26bc25d2b43a1898eb0d60bd8bce1dd473->leave($__internal_751538319b38211478e6dce4f8802f26bc25d2b43a1898eb0d60bd8bce1dd473_prof);

        
        $__internal_292b98bd5c2721503c94bb0fb83305304967f8c20e502fb3b8cb06ba274a8dfa->leave($__internal_292b98bd5c2721503c94bb0fb83305304967f8c20e502fb3b8cb06ba274a8dfa_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}
", "@SonataAdmin/CRUD/list.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list.html.twig");
    }
}
