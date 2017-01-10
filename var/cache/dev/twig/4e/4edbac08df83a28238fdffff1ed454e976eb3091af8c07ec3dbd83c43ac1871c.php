<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_5b9c9d69f663bb377cac086a7b98b49d4b72177e9ed3f74b81c297feed673cf6 extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_edit.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4cc9e068819475185504e511211726048b76fd9e3a2d78aced770a2f3a256055 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cc9e068819475185504e511211726048b76fd9e3a2d78aced770a2f3a256055->enter($__internal_4cc9e068819475185504e511211726048b76fd9e3a2d78aced770a2f3a256055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $__internal_89630d4ab4f2e4433256fafc4568357a99c1573c1828d1dc17c00d1e48493ffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89630d4ab4f2e4433256fafc4568357a99c1573c1828d1dc17c00d1e48493ffe->enter($__internal_89630d4ab4f2e4433256fafc4568357a99c1573c1828d1dc17c00d1e48493ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        // line 33
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 33);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cc9e068819475185504e511211726048b76fd9e3a2d78aced770a2f3a256055->leave($__internal_4cc9e068819475185504e511211726048b76fd9e3a2d78aced770a2f3a256055_prof);

        
        $__internal_89630d4ab4f2e4433256fafc4568357a99c1573c1828d1dc17c00d1e48493ffe->leave($__internal_89630d4ab4f2e4433256fafc4568357a99c1573c1828d1dc17c00d1e48493ffe_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6528033b2f4c10dc08f3a9fe66c8d1d592af8c41efcbaa834c9cb23adffc1b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6528033b2f4c10dc08f3a9fe66c8d1d592af8c41efcbaa834c9cb23adffc1b4->enter($__internal_f6528033b2f4c10dc08f3a9fe66c8d1d592af8c41efcbaa834c9cb23adffc1b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7898bf84abc20c7fe34007a9951d59a66539ad93cbe4ec421ebf9e81dca8a789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7898bf84abc20c7fe34007a9951d59a66539ad93cbe4ec421ebf9e81dca8a789->enter($__internal_7898bf84abc20c7fe34007a9951d59a66539ad93cbe4ec421ebf9e81dca8a789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 15
        echo "    ";
        if ( !(null === $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_edit", array("%name%" => twig_truncate_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "toString", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), 15)), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        } else {
            // line 18
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_create", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        
        $__internal_7898bf84abc20c7fe34007a9951d59a66539ad93cbe4ec421ebf9e81dca8a789->leave($__internal_7898bf84abc20c7fe34007a9951d59a66539ad93cbe4ec421ebf9e81dca8a789_prof);

        
        $__internal_f6528033b2f4c10dc08f3a9fe66c8d1d592af8c41efcbaa834c9cb23adffc1b4->leave($__internal_f6528033b2f4c10dc08f3a9fe66c8d1d592af8c41efcbaa834c9cb23adffc1b4_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_872fae9affdea389817cb8b4f68307aa56ae406655e330bc2e574eee08b537e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_872fae9affdea389817cb8b4f68307aa56ae406655e330bc2e574eee08b537e4->enter($__internal_872fae9affdea389817cb8b4f68307aa56ae406655e330bc2e574eee08b537e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        $__internal_2ab5b9e0c3efa7d0b22ac2db16a04bf0e9eb0a41ee45c0bd2c907d5801bcb0b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ab5b9e0c3efa7d0b22ac2db16a04bf0e9eb0a41ee45c0bd2c907d5801bcb0b2->enter($__internal_2ab5b9e0c3efa7d0b22ac2db16a04bf0e9eb0a41ee45c0bd2c907d5801bcb0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2ab5b9e0c3efa7d0b22ac2db16a04bf0e9eb0a41ee45c0bd2c907d5801bcb0b2->leave($__internal_2ab5b9e0c3efa7d0b22ac2db16a04bf0e9eb0a41ee45c0bd2c907d5801bcb0b2_prof);

        
        $__internal_872fae9affdea389817cb8b4f68307aa56ae406655e330bc2e574eee08b537e4->leave($__internal_872fae9affdea389817cb8b4f68307aa56ae406655e330bc2e574eee08b537e4_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_fad9c9a2f1daf9f067250e389a0647569346d839ab7df9aec5592e6e1a175099 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fad9c9a2f1daf9f067250e389a0647569346d839ab7df9aec5592e6e1a175099->enter($__internal_fad9c9a2f1daf9f067250e389a0647569346d839ab7df9aec5592e6e1a175099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_8f315f63cda98d2061fdd77a980a7a48c007a27c39954134d0f235433c896da5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f315f63cda98d2061fdd77a980a7a48c007a27c39954134d0f235433c896da5->enter($__internal_8f315f63cda98d2061fdd77a980a7a48c007a27c39954134d0f235433c896da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_8f315f63cda98d2061fdd77a980a7a48c007a27c39954134d0f235433c896da5->leave($__internal_8f315f63cda98d2061fdd77a980a7a48c007a27c39954134d0f235433c896da5_prof);

        
        $__internal_fad9c9a2f1daf9f067250e389a0647569346d839ab7df9aec5592e6e1a175099->leave($__internal_fad9c9a2f1daf9f067250e389a0647569346d839ab7df9aec5592e6e1a175099_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_953c74a5cfcf5bee41f0ee7f164c97ed8067cd3d012e48016b40fddae4d85f17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_953c74a5cfcf5bee41f0ee7f164c97ed8067cd3d012e48016b40fddae4d85f17->enter($__internal_953c74a5cfcf5bee41f0ee7f164c97ed8067cd3d012e48016b40fddae4d85f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_ebf5cbaa1c1ecec6ce4223dc84ceebcba3b5040b951710a327d1f858eb5f0977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebf5cbaa1c1ecec6ce4223dc84ceebcba3b5040b951710a327d1f858eb5f0977->enter($__internal_ebf5cbaa1c1ecec6ce4223dc84ceebcba3b5040b951710a327d1f858eb5f0977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_ebf5cbaa1c1ecec6ce4223dc84ceebcba3b5040b951710a327d1f858eb5f0977->leave($__internal_ebf5cbaa1c1ecec6ce4223dc84ceebcba3b5040b951710a327d1f858eb5f0977_prof);

        
        $__internal_953c74a5cfcf5bee41f0ee7f164c97ed8067cd3d012e48016b40fddae4d85f17->leave($__internal_953c74a5cfcf5bee41f0ee7f164c97ed8067cd3d012e48016b40fddae4d85f17_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_9b0324deede89ac8998934bd779860bcb5b465ec4b3452c4a44eddddaaa60df9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b0324deede89ac8998934bd779860bcb5b465ec4b3452c4a44eddddaaa60df9->enter($__internal_9b0324deede89ac8998934bd779860bcb5b465ec4b3452c4a44eddddaaa60df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_e8ee8b6bd71f5f49634e462e0f96847214d21db8169a5260d6560a8fdcecb1be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8ee8b6bd71f5f49634e462e0f96847214d21db8169a5260d6560a8fdcecb1be->enter($__internal_e8ee8b6bd71f5f49634e462e0f96847214d21db8169a5260d6560a8fdcecb1be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_e8ee8b6bd71f5f49634e462e0f96847214d21db8169a5260d6560a8fdcecb1be->leave($__internal_e8ee8b6bd71f5f49634e462e0f96847214d21db8169a5260d6560a8fdcecb1be_prof);

        
        $__internal_9b0324deede89ac8998934bd779860bcb5b465ec4b3452c4a44eddddaaa60df9->leave($__internal_9b0324deede89ac8998934bd779860bcb5b465ec4b3452c4a44eddddaaa60df9_prof);

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
", "SonataAdminBundle:CRUD:base_edit.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_edit.html.twig");
    }
}
