<?php

/* DevLeaguesBundle::base.html.twig */
class __TwigTemplate_3c556bae5b9d23d03f00fbdecf55aa33143a1db9626886ab9366a34cdb67178b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "DevLeaguesBundle::base.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_content' => array($this, 'block_page_content'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6640f55e41cef3180053ecfb4649a429d7a177099a5e07f413c216382d0bbaf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6640f55e41cef3180053ecfb4649a429d7a177099a5e07f413c216382d0bbaf7->enter($__internal_6640f55e41cef3180053ecfb4649a429d7a177099a5e07f413c216382d0bbaf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle::base.html.twig"));

        $__internal_5759d4e9f1afbd47d9dcc988a1b6767ec36d8f56377bb03b667b83bc17ba6475 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5759d4e9f1afbd47d9dcc988a1b6767ec36d8f56377bb03b667b83bc17ba6475->enter($__internal_5759d4e9f1afbd47d9dcc988a1b6767ec36d8f56377bb03b667b83bc17ba6475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6640f55e41cef3180053ecfb4649a429d7a177099a5e07f413c216382d0bbaf7->leave($__internal_6640f55e41cef3180053ecfb4649a429d7a177099a5e07f413c216382d0bbaf7_prof);

        
        $__internal_5759d4e9f1afbd47d9dcc988a1b6767ec36d8f56377bb03b667b83bc17ba6475->leave($__internal_5759d4e9f1afbd47d9dcc988a1b6767ec36d8f56377bb03b667b83bc17ba6475_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_52c4d03889b1776643bd13bf87b7beb3421d075b1b88d34901a7ee0b07ab89b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52c4d03889b1776643bd13bf87b7beb3421d075b1b88d34901a7ee0b07ab89b8->enter($__internal_52c4d03889b1776643bd13bf87b7beb3421d075b1b88d34901a7ee0b07ab89b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c3b50e3067d5cd84162a7b5269362369c3cf0d9b1d361c2d5fdfdad343df5d3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3b50e3067d5cd84162a7b5269362369c3cf0d9b1d361c2d5fdfdad343df5d3e->enter($__internal_c3b50e3067d5cd84162a7b5269362369c3cf0d9b1d361c2d5fdfdad343df5d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    DevLeagues.com
";
        
        $__internal_c3b50e3067d5cd84162a7b5269362369c3cf0d9b1d361c2d5fdfdad343df5d3e->leave($__internal_c3b50e3067d5cd84162a7b5269362369c3cf0d9b1d361c2d5fdfdad343df5d3e_prof);

        
        $__internal_52c4d03889b1776643bd13bf87b7beb3421d075b1b88d34901a7ee0b07ab89b8->leave($__internal_52c4d03889b1776643bd13bf87b7beb3421d075b1b88d34901a7ee0b07ab89b8_prof);

    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_4d1424c4ef4f764df88bee312af302341beb6c78d1112032ac79d032c9b5f7ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d1424c4ef4f764df88bee312af302341beb6c78d1112032ac79d032c9b5f7ee->enter($__internal_4d1424c4ef4f764df88bee312af302341beb6c78d1112032ac79d032c9b5f7ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_e4aae4a1ecc064c5954a74077ecd05f2f47ad7c048bf3ef93764426ca48b92a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4aae4a1ecc064c5954a74077ecd05f2f47ad7c048bf3ef93764426ca48b92a0->enter($__internal_e4aae4a1ecc064c5954a74077ecd05f2f47ad7c048bf3ef93764426ca48b92a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "EMPTY Page";
        
        $__internal_e4aae4a1ecc064c5954a74077ecd05f2f47ad7c048bf3ef93764426ca48b92a0->leave($__internal_e4aae4a1ecc064c5954a74077ecd05f2f47ad7c048bf3ef93764426ca48b92a0_prof);

        
        $__internal_4d1424c4ef4f764df88bee312af302341beb6c78d1112032ac79d032c9b5f7ee->leave($__internal_4d1424c4ef4f764df88bee312af302341beb6c78d1112032ac79d032c9b5f7ee_prof);

    }

    // line 8
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_1b0b4a1e7bc6b30bd9745a4d01a3f1d0c2defd95c039ca097c03cd42cc7f6824 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b0b4a1e7bc6b30bd9745a4d01a3f1d0c2defd95c039ca097c03cd42cc7f6824->enter($__internal_1b0b4a1e7bc6b30bd9745a4d01a3f1d0c2defd95c039ca097c03cd42cc7f6824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        $__internal_7a2ec33ff0370ba1a8ee7395cc1774602f5956a2e327d6cf3ea1706a3767462c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a2ec33ff0370ba1a8ee7395cc1774602f5956a2e327d6cf3ea1706a3767462c->enter($__internal_7a2ec33ff0370ba1a8ee7395cc1774602f5956a2e327d6cf3ea1706a3767462c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "This is a temporary EMPTY page of DevLeagues.com";
        
        $__internal_7a2ec33ff0370ba1a8ee7395cc1774602f5956a2e327d6cf3ea1706a3767462c->leave($__internal_7a2ec33ff0370ba1a8ee7395cc1774602f5956a2e327d6cf3ea1706a3767462c_prof);

        
        $__internal_1b0b4a1e7bc6b30bd9745a4d01a3f1d0c2defd95c039ca097c03cd42cc7f6824->leave($__internal_1b0b4a1e7bc6b30bd9745a4d01a3f1d0c2defd95c039ca097c03cd42cc7f6824_prof);

    }

    // line 10
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_e490ad837702e32f3bee224f4b17c8b2b4c5d2744036771e5e527de7fdf06152 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e490ad837702e32f3bee224f4b17c8b2b4c5d2744036771e5e527de7fdf06152->enter($__internal_e490ad837702e32f3bee224f4b17c8b2b4c5d2744036771e5e527de7fdf06152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_ffaf6750670540c4cdc1995fc105204230aa7c844f5497d2a531d97001df0711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffaf6750670540c4cdc1995fc105204230aa7c844f5497d2a531d97001df0711->enter($__internal_ffaf6750670540c4cdc1995fc105204230aa7c844f5497d2a531d97001df0711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 11
        echo "            THIS PAGE IS EMPTY, FOR NOW
    ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_ffaf6750670540c4cdc1995fc105204230aa7c844f5497d2a531d97001df0711->leave($__internal_ffaf6750670540c4cdc1995fc105204230aa7c844f5497d2a531d97001df0711_prof);

        
        $__internal_e490ad837702e32f3bee224f4b17c8b2b4c5d2744036771e5e527de7fdf06152->leave($__internal_e490ad837702e32f3bee224f4b17c8b2b4c5d2744036771e5e527de7fdf06152_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_0dc52b6e7705aa0d5ba5a18932e114c15ddd30a658282d2175f39dcfbf354f0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dc52b6e7705aa0d5ba5a18932e114c15ddd30a658282d2175f39dcfbf354f0d->enter($__internal_0dc52b6e7705aa0d5ba5a18932e114c15ddd30a658282d2175f39dcfbf354f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_443432b8f5a89b0a415d120a4de31b2b58ed41922a45989dd6879767b111d827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_443432b8f5a89b0a415d120a4de31b2b58ed41922a45989dd6879767b111d827->enter($__internal_443432b8f5a89b0a415d120a4de31b2b58ed41922a45989dd6879767b111d827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " THIS PAGE IS EMPTY";
        
        $__internal_443432b8f5a89b0a415d120a4de31b2b58ed41922a45989dd6879767b111d827->leave($__internal_443432b8f5a89b0a415d120a4de31b2b58ed41922a45989dd6879767b111d827_prof);

        
        $__internal_0dc52b6e7705aa0d5ba5a18932e114c15ddd30a658282d2175f39dcfbf354f0d->leave($__internal_0dc52b6e7705aa0d5ba5a18932e114c15ddd30a658282d2175f39dcfbf354f0d_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 12,  109 => 11,  100 => 10,  82 => 8,  64 => 7,  53 => 4,  44 => 3,  11 => 1,);
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

{% block title %}
    DevLeagues.com
{% endblock %}

{% block page_title %}EMPTY Page{% endblock %}
{% block page_subtitle %}This is a temporary EMPTY page of DevLeagues.com{% endblock %}

{% block page_content %}
            THIS PAGE IS EMPTY, FOR NOW
    {% block body %} THIS PAGE IS EMPTY{% endblock %}
{% endblock %}", "DevLeaguesBundle::base.html.twig", "/home/webmaster/www/public_html/DevLeagues/var/cache/dev/../../../src/DevLeaguesBundle/Resources/views/base.html.twig");
    }
}
