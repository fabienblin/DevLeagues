<?php

/* @SonataAdmin/CRUD/show.html.twig */
class __TwigTemplate_a3ee8a527bca0d95088b7fbd1ddc21a8f53daa7a894a748a2198e33c5e0231c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "@SonataAdmin/CRUD/show.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c5340fc296374ecefe59a2c57480205a52f04bc76e472d85c6cfb00796be922 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c5340fc296374ecefe59a2c57480205a52f04bc76e472d85c6cfb00796be922->enter($__internal_0c5340fc296374ecefe59a2c57480205a52f04bc76e472d85c6cfb00796be922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show.html.twig"));

        $__internal_c7a7a082a2462cb76efea966802c76c41fb0108291c9b2bcb664b54b57d042e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7a7a082a2462cb76efea966802c76c41fb0108291c9b2bcb664b54b57d042e4->enter($__internal_c7a7a082a2462cb76efea966802c76c41fb0108291c9b2bcb664b54b57d042e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c5340fc296374ecefe59a2c57480205a52f04bc76e472d85c6cfb00796be922->leave($__internal_0c5340fc296374ecefe59a2c57480205a52f04bc76e472d85c6cfb00796be922_prof);

        
        $__internal_c7a7a082a2462cb76efea966802c76c41fb0108291c9b2bcb664b54b57d042e4->leave($__internal_c7a7a082a2462cb76efea966802c76c41fb0108291c9b2bcb664b54b57d042e4_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}
", "@SonataAdmin/CRUD/show.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show.html.twig");
    }
}
