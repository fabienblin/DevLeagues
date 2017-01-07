<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_f8b2cc92475405443a48cc541d80f2af7a4118876bc957384cde340017ada8ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $_trait_0 = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 32);
        // line 32
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."SonataAdminBundle:CRUD:base_edit_form.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["form"])) {
            throw new Twig_Error_Runtime(sprintf('Block "form" is not defined in trait "SonataAdminBundle:CRUD:base_edit_form.html.twig".'));
        }

        $_trait_0_blocks["parentForm"] = $_trait_0_blocks["form"]; unset($_trait_0_blocks["form"]);

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'title' => array($this, 'block_title'),
                'navbar_title' => array($this, 'block_navbar_title'),
                'actions' => array($this, 'block_actions'),
                'tab_menu' => array($this, 'block_tab_menu'),
                'form' => array($this, 'block_form'),
            )
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b379f96065b358c1025f614074b66b2a921598e4c7c73c61232eecca9af58ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b379f96065b358c1025f614074b66b2a921598e4c7c73c61232eecca9af58ab->enter($__internal_8b379f96065b358c1025f614074b66b2a921598e4c7c73c61232eecca9af58ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $__internal_219dbcbebe44dfb9ec13b6178a48acf850dbf0ef886f336b78c79a8f42d034cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_219dbcbebe44dfb9ec13b6178a48acf850dbf0ef886f336b78c79a8f42d034cc->enter($__internal_219dbcbebe44dfb9ec13b6178a48acf850dbf0ef886f336b78c79a8f42d034cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        // line 33
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 33);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b379f96065b358c1025f614074b66b2a921598e4c7c73c61232eecca9af58ab->leave($__internal_8b379f96065b358c1025f614074b66b2a921598e4c7c73c61232eecca9af58ab_prof);

        
        $__internal_219dbcbebe44dfb9ec13b6178a48acf850dbf0ef886f336b78c79a8f42d034cc->leave($__internal_219dbcbebe44dfb9ec13b6178a48acf850dbf0ef886f336b78c79a8f42d034cc_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_97251c7b62031e984e917b147eb14c1a4081c79ce2d27b4655477de94d36748a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97251c7b62031e984e917b147eb14c1a4081c79ce2d27b4655477de94d36748a->enter($__internal_97251c7b62031e984e917b147eb14c1a4081c79ce2d27b4655477de94d36748a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f4e2aaf7de0e72dcd5cb8b1b3f40636b09247cdc32abf709be7bac854fd729ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4e2aaf7de0e72dcd5cb8b1b3f40636b09247cdc32abf709be7bac854fd729ab->enter($__internal_f4e2aaf7de0e72dcd5cb8b1b3f40636b09247cdc32abf709be7bac854fd729ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_f4e2aaf7de0e72dcd5cb8b1b3f40636b09247cdc32abf709be7bac854fd729ab->leave($__internal_f4e2aaf7de0e72dcd5cb8b1b3f40636b09247cdc32abf709be7bac854fd729ab_prof);

        
        $__internal_97251c7b62031e984e917b147eb14c1a4081c79ce2d27b4655477de94d36748a->leave($__internal_97251c7b62031e984e917b147eb14c1a4081c79ce2d27b4655477de94d36748a_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_753803c403b70a5becf14c61e5d3275b4e2ffe9deb365cc5f88032c4c307ee96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_753803c403b70a5becf14c61e5d3275b4e2ffe9deb365cc5f88032c4c307ee96->enter($__internal_753803c403b70a5becf14c61e5d3275b4e2ffe9deb365cc5f88032c4c307ee96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        $__internal_d245450aaf45ef7b31ede12d4a73e8c273c1f4d3be32d4fb986ebf980665864c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d245450aaf45ef7b31ede12d4a73e8c273c1f4d3be32d4fb986ebf980665864c->enter($__internal_d245450aaf45ef7b31ede12d4a73e8c273c1f4d3be32d4fb986ebf980665864c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d245450aaf45ef7b31ede12d4a73e8c273c1f4d3be32d4fb986ebf980665864c->leave($__internal_d245450aaf45ef7b31ede12d4a73e8c273c1f4d3be32d4fb986ebf980665864c_prof);

        
        $__internal_753803c403b70a5becf14c61e5d3275b4e2ffe9deb365cc5f88032c4c307ee96->leave($__internal_753803c403b70a5becf14c61e5d3275b4e2ffe9deb365cc5f88032c4c307ee96_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_8d7c8be52ca8ec4a96c942cc919f8d0a9d60005658906bdd990e29173bc057bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d7c8be52ca8ec4a96c942cc919f8d0a9d60005658906bdd990e29173bc057bd->enter($__internal_8d7c8be52ca8ec4a96c942cc919f8d0a9d60005658906bdd990e29173bc057bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_26a3a1be1b86b053de68bb83340a8f8b1d9537552a38d18c85dedfc0a86e9de5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26a3a1be1b86b053de68bb83340a8f8b1d9537552a38d18c85dedfc0a86e9de5->enter($__internal_26a3a1be1b86b053de68bb83340a8f8b1d9537552a38d18c85dedfc0a86e9de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_26a3a1be1b86b053de68bb83340a8f8b1d9537552a38d18c85dedfc0a86e9de5->leave($__internal_26a3a1be1b86b053de68bb83340a8f8b1d9537552a38d18c85dedfc0a86e9de5_prof);

        
        $__internal_8d7c8be52ca8ec4a96c942cc919f8d0a9d60005658906bdd990e29173bc057bd->leave($__internal_8d7c8be52ca8ec4a96c942cc919f8d0a9d60005658906bdd990e29173bc057bd_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_0897c66bf8466aede0eaa635068c5f0dc0166e875a13683cdf05b944292d731b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0897c66bf8466aede0eaa635068c5f0dc0166e875a13683cdf05b944292d731b->enter($__internal_0897c66bf8466aede0eaa635068c5f0dc0166e875a13683cdf05b944292d731b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_b8a1d40ed4b1f97b54b101d1a8329dfda5127f84bdc27050f37d9e03575ba01d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a1d40ed4b1f97b54b101d1a8329dfda5127f84bdc27050f37d9e03575ba01d->enter($__internal_b8a1d40ed4b1f97b54b101d1a8329dfda5127f84bdc27050f37d9e03575ba01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_b8a1d40ed4b1f97b54b101d1a8329dfda5127f84bdc27050f37d9e03575ba01d->leave($__internal_b8a1d40ed4b1f97b54b101d1a8329dfda5127f84bdc27050f37d9e03575ba01d_prof);

        
        $__internal_0897c66bf8466aede0eaa635068c5f0dc0166e875a13683cdf05b944292d731b->leave($__internal_0897c66bf8466aede0eaa635068c5f0dc0166e875a13683cdf05b944292d731b_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_e83090d868db8c070200647b2008b94175d33b984818bb019e24f83a07ac8ed4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e83090d868db8c070200647b2008b94175d33b984818bb019e24f83a07ac8ed4->enter($__internal_e83090d868db8c070200647b2008b94175d33b984818bb019e24f83a07ac8ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_27fefb7a049bd46c8250b3ebc91fa97cb64776635348d62489bf738b19540ffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27fefb7a049bd46c8250b3ebc91fa97cb64776635348d62489bf738b19540ffb->enter($__internal_27fefb7a049bd46c8250b3ebc91fa97cb64776635348d62489bf738b19540ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_27fefb7a049bd46c8250b3ebc91fa97cb64776635348d62489bf738b19540ffb->leave($__internal_27fefb7a049bd46c8250b3ebc91fa97cb64776635348d62489bf738b19540ffb_prof);

        
        $__internal_e83090d868db8c070200647b2008b94175d33b984818bb019e24f83a07ac8ed4->leave($__internal_e83090d868db8c070200647b2008b94175d33b984818bb019e24f83a07ac8ed4_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 36,  155 => 35,  137 => 30,  127 => 27,  118 => 26,  105 => 23,  96 => 22,  82 => 18,  76 => 16,  73 => 15,  64 => 14,  54 => 12,  52 => 33,  40 => 12,  12 => 32,);
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

{% extends base_template %}

{% block title %}
    {% if admin.id(object) is not null %}
        {{ \"title_edit\"|trans({'%name%': admin.toString(object)|truncate(15) }, 'SonataAdminBundle') }}
    {% else %}
        {{ \"title_create\"|trans({}, 'SonataAdminBundle') }}
    {% endif %}
{% endblock %}

{% block navbar_title %}
    {{ block('title') }}
{% endblock %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% use 'SonataAdminBundle:CRUD:base_edit_form.html.twig' with form as parentForm %}
{% import \"SonataAdminBundle:CRUD:base_edit_form_macro.html.twig\" as form_helper %}

{% block form %}
    {{ block('parentForm') }}
{% endblock %}
", "SonataAdminBundle:CRUD:base_edit.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_edit.html.twig");
    }
}
