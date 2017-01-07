<?php

/* @SonataAdmin/CRUD/list_inner_row.html.twig */
class __TwigTemplate_f1a6aaf14139db93e9c2f777d14b2e04d39948dccc63ff792e1262d4c9b26040 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list_inner_row.html.twig", "@SonataAdmin/CRUD/list_inner_row.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a89bbb4f66a66a742ef361283ec0a7dc39088e6c91425f0577c7357a89ae5a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a89bbb4f66a66a742ef361283ec0a7dc39088e6c91425f0577c7357a89ae5a0->enter($__internal_4a89bbb4f66a66a742ef361283ec0a7dc39088e6c91425f0577c7357a89ae5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_inner_row.html.twig"));

        $__internal_a0c3412bda46b8866daa534afc043c3865861e8543bdb649dcadcbd449e8e67b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0c3412bda46b8866daa534afc043c3865861e8543bdb649dcadcbd449e8e67b->enter($__internal_a0c3412bda46b8866daa534afc043c3865861e8543bdb649dcadcbd449e8e67b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_inner_row.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a89bbb4f66a66a742ef361283ec0a7dc39088e6c91425f0577c7357a89ae5a0->leave($__internal_4a89bbb4f66a66a742ef361283ec0a7dc39088e6c91425f0577c7357a89ae5a0_prof);

        
        $__internal_a0c3412bda46b8866daa534afc043c3865861e8543bdb649dcadcbd449e8e67b->leave($__internal_a0c3412bda46b8866daa534afc043c3865861e8543bdb649dcadcbd449e8e67b_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_inner_row.html.twig";
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

{% extends 'SonataAdminBundle:CRUD:base_list_inner_row.html.twig' %}
", "@SonataAdmin/CRUD/list_inner_row.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_inner_row.html.twig");
    }
}
