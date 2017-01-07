<?php

/* @SonataAdmin/CRUD/list.html.twig */
class __TwigTemplate_dfe0df51de05a7282eb73fa255bcf64a9ee1f2aa91af2d896d3b0ad747f13fce extends Twig_Template
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
        $__internal_210b4bfa2a6c3aed9256ab1b3605cae2699f049b5af397dbf75633bf7436ff37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_210b4bfa2a6c3aed9256ab1b3605cae2699f049b5af397dbf75633bf7436ff37->enter($__internal_210b4bfa2a6c3aed9256ab1b3605cae2699f049b5af397dbf75633bf7436ff37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list.html.twig"));

        $__internal_9bec55bba2ea972ab959e1b53c53e9304be18fa5b10ca0a131f2330348f48871 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bec55bba2ea972ab959e1b53c53e9304be18fa5b10ca0a131f2330348f48871->enter($__internal_9bec55bba2ea972ab959e1b53c53e9304be18fa5b10ca0a131f2330348f48871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_210b4bfa2a6c3aed9256ab1b3605cae2699f049b5af397dbf75633bf7436ff37->leave($__internal_210b4bfa2a6c3aed9256ab1b3605cae2699f049b5af397dbf75633bf7436ff37_prof);

        
        $__internal_9bec55bba2ea972ab959e1b53c53e9304be18fa5b10ca0a131f2330348f48871->leave($__internal_9bec55bba2ea972ab959e1b53c53e9304be18fa5b10ca0a131f2330348f48871_prof);

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
", "@SonataAdmin/CRUD/list.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list.html.twig");
    }
}
