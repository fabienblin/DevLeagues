<?php

/* @SonataAdmin/CRUD/list_string.html.twig */
class __TwigTemplate_6519d36f8118f01c32b9cf1383547d7994ddd58cc052f3256ddf45569916272f extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_970c99fc9848caae6bf545a98c4c11bfe841814c2036981bff53f232a4b87d45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_970c99fc9848caae6bf545a98c4c11bfe841814c2036981bff53f232a4b87d45->enter($__internal_970c99fc9848caae6bf545a98c4c11bfe841814c2036981bff53f232a4b87d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_string.html.twig"));

        $__internal_21cee75f5c661a78a3995a6bf1d5d6ab18ef7e3139b81a39db807b9ba26af881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21cee75f5c661a78a3995a6bf1d5d6ab18ef7e3139b81a39db807b9ba26af881->enter($__internal_21cee75f5c661a78a3995a6bf1d5d6ab18ef7e3139b81a39db807b9ba26af881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_970c99fc9848caae6bf545a98c4c11bfe841814c2036981bff53f232a4b87d45->leave($__internal_970c99fc9848caae6bf545a98c4c11bfe841814c2036981bff53f232a4b87d45_prof);

        
        $__internal_21cee75f5c661a78a3995a6bf1d5d6ab18ef7e3139b81a39db807b9ba26af881->leave($__internal_21cee75f5c661a78a3995a6bf1d5d6ab18ef7e3139b81a39db807b9ba26af881_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}
", "@SonataAdmin/CRUD/list_string.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_string.html.twig");
    }
}
