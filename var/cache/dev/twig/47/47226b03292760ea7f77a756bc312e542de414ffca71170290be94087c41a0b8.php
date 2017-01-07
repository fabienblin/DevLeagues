<?php

/* @SonataAdmin/Pager/simple_pager_results.html.twig */
class __TwigTemplate_213b8f799afa6ecaa1d5a13a97bf03d2f2c132c74f88913a74ac42e65e67a7cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "@SonataAdmin/Pager/simple_pager_results.html.twig", 12);
        $this->blocks = array(
            'num_results' => array($this, 'block_num_results'),
            'num_pages' => array($this, 'block_num_pages'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb94812cdaedec33e1b027d36e2cf0f2f09c70c649bb795f60bcea7ab3a1e058 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb94812cdaedec33e1b027d36e2cf0f2f09c70c649bb795f60bcea7ab3a1e058->enter($__internal_fb94812cdaedec33e1b027d36e2cf0f2f09c70c649bb795f60bcea7ab3a1e058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Pager/simple_pager_results.html.twig"));

        $__internal_5ae2860f41a2f2cc91c2d88b03e2829dbd2f6dcc448fa594b134b99b42b71c3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ae2860f41a2f2cc91c2d88b03e2829dbd2f6dcc448fa594b134b99b42b71c3c->enter($__internal_5ae2860f41a2f2cc91c2d88b03e2829dbd2f6dcc448fa594b134b99b42b71c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Pager/simple_pager_results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb94812cdaedec33e1b027d36e2cf0f2f09c70c649bb795f60bcea7ab3a1e058->leave($__internal_fb94812cdaedec33e1b027d36e2cf0f2f09c70c649bb795f60bcea7ab3a1e058_prof);

        
        $__internal_5ae2860f41a2f2cc91c2d88b03e2829dbd2f6dcc448fa594b134b99b42b71c3c->leave($__internal_5ae2860f41a2f2cc91c2d88b03e2829dbd2f6dcc448fa594b134b99b42b71c3c_prof);

    }

    // line 14
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_b5561c6860f5f7af824bb07aab1c7f655e531dd8074d5ad6eaffe27014a026a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5561c6860f5f7af824bb07aab1c7f655e531dd8074d5ad6eaffe27014a026a1->enter($__internal_b5561c6860f5f7af824bb07aab1c7f655e531dd8074d5ad6eaffe27014a026a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        $__internal_f10415f918b9477b2f61f3ffaa80ec59bbe22bca32d5b6de7196d41cad1cd610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f10415f918b9477b2f61f3ffaa80ec59bbe22bca32d5b6de7196d41cad1cd610->enter($__internal_f10415f918b9477b2f61f3ffaa80ec59bbe22bca32d5b6de7196d41cad1cd610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 15
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastPage", array()) != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list_results_count_prefix", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        // line 18
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_f10415f918b9477b2f61f3ffaa80ec59bbe22bca32d5b6de7196d41cad1cd610->leave($__internal_f10415f918b9477b2f61f3ffaa80ec59bbe22bca32d5b6de7196d41cad1cd610_prof);

        
        $__internal_b5561c6860f5f7af824bb07aab1c7f655e531dd8074d5ad6eaffe27014a026a1->leave($__internal_b5561c6860f5f7af824bb07aab1c7f655e531dd8074d5ad6eaffe27014a026a1_prof);

    }

    // line 22
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_4ec23b4155b8bedaf863d038d72c58b6d3d9a33e92b6214497ab3a18c0d59f73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ec23b4155b8bedaf863d038d72c58b6d3d9a33e92b6214497ab3a18c0d59f73->enter($__internal_4ec23b4155b8bedaf863d038d72c58b6d3d9a33e92b6214497ab3a18c0d59f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        $__internal_ed6486ea121163bdcca50f6a923303a701c73d0a6f77bc7fefe05b9fcccb8923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed6486ea121163bdcca50f6a923303a701c73d0a6f77bc7fefe05b9fcccb8923->enter($__internal_ed6486ea121163bdcca50f6a923303a701c73d0a6f77bc7fefe05b9fcccb8923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 23
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo "
    /
    ";
        // line 25
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastPage", array()) != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()))) {
            // line 26
            echo "        ?
    ";
        } else {
            // line 28
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
            echo "
    ";
        }
        // line 30
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_ed6486ea121163bdcca50f6a923303a701c73d0a6f77bc7fefe05b9fcccb8923->leave($__internal_ed6486ea121163bdcca50f6a923303a701c73d0a6f77bc7fefe05b9fcccb8923_prof);

        
        $__internal_4ec23b4155b8bedaf863d038d72c58b6d3d9a33e92b6214497ab3a18c0d59f73->leave($__internal_4ec23b4155b8bedaf863d038d72c58b6d3d9a33e92b6214497ab3a18c0d59f73_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Pager/simple_pager_results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 30,  94 => 28,  90 => 26,  88 => 25,  82 => 23,  73 => 22,  62 => 19,  59 => 18,  53 => 16,  50 => 15,  41 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}

{% block num_results %}
    {% if admin.datagrid.pager.lastPage != admin.datagrid.pager.page %}
        {{ 'list_results_count_prefix'|trans({}, 'SonataAdminBundle') }}
    {% endif %}
    {% transchoice admin.datagrid.pager.nbresults with {'%count%': admin.datagrid.pager.nbresults} from 'SonataAdminBundle' %}list_results_count{% endtranschoice %}
    &nbsp;-&nbsp;
{% endblock %}

{% block num_pages %}
    {{ admin.datagrid.pager.page }}
    /
    {% if admin.datagrid.pager.lastPage != admin.datagrid.pager.page %}
        ?
    {% else %}
        {{ admin.datagrid.pager.lastpage }}
    {% endif %}
    &nbsp;-&nbsp;
{% endblock %}
", "@SonataAdmin/Pager/simple_pager_results.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/Pager/simple_pager_results.html.twig");
    }
}
