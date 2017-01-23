<?php

/* SonataAdminBundle:CRUD:base_edit.html.twig */
class __TwigTemplate_91eb3860ff5acf7d4d58461a6496640234ba62de9c68e4b0114f0f554f1f890e extends Twig_Template
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
        $__internal_6efa532a06973f8f46fd2726c75be601ddf9ad2487856e217f78b6635631def0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6efa532a06973f8f46fd2726c75be601ddf9ad2487856e217f78b6635631def0->enter($__internal_6efa532a06973f8f46fd2726c75be601ddf9ad2487856e217f78b6635631def0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        $__internal_964a348996a465086b33de37bbf9b8e7dbcd30b27a57e91741170648f5f61d4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_964a348996a465086b33de37bbf9b8e7dbcd30b27a57e91741170648f5f61d4e->enter($__internal_964a348996a465086b33de37bbf9b8e7dbcd30b27a57e91741170648f5f61d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_edit.html.twig"));

        // line 33
        $context["form_helper"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_edit_form_macro.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 33);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6efa532a06973f8f46fd2726c75be601ddf9ad2487856e217f78b6635631def0->leave($__internal_6efa532a06973f8f46fd2726c75be601ddf9ad2487856e217f78b6635631def0_prof);

        
        $__internal_964a348996a465086b33de37bbf9b8e7dbcd30b27a57e91741170648f5f61d4e->leave($__internal_964a348996a465086b33de37bbf9b8e7dbcd30b27a57e91741170648f5f61d4e_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_f169be70303ae23e6635e7c8ae29d40b40cf683f7a943180dcc3eb10293621dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f169be70303ae23e6635e7c8ae29d40b40cf683f7a943180dcc3eb10293621dc->enter($__internal_f169be70303ae23e6635e7c8ae29d40b40cf683f7a943180dcc3eb10293621dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0234d2d751d30490ba348116247b4a9db8d4cf9be00fa5d47eaed6166f6adec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0234d2d751d30490ba348116247b4a9db8d4cf9be00fa5d47eaed6166f6adec3->enter($__internal_0234d2d751d30490ba348116247b4a9db8d4cf9be00fa5d47eaed6166f6adec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

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
        
        $__internal_0234d2d751d30490ba348116247b4a9db8d4cf9be00fa5d47eaed6166f6adec3->leave($__internal_0234d2d751d30490ba348116247b4a9db8d4cf9be00fa5d47eaed6166f6adec3_prof);

        
        $__internal_f169be70303ae23e6635e7c8ae29d40b40cf683f7a943180dcc3eb10293621dc->leave($__internal_f169be70303ae23e6635e7c8ae29d40b40cf683f7a943180dcc3eb10293621dc_prof);

    }

    // line 22
    public function block_navbar_title($context, array $blocks = array())
    {
        $__internal_2d346c622c292b87220a4d073c3cb5d760f191f3359724fda2603dc5218a84be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d346c622c292b87220a4d073c3cb5d760f191f3359724fda2603dc5218a84be->enter($__internal_2d346c622c292b87220a4d073c3cb5d760f191f3359724fda2603dc5218a84be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        $__internal_5dd0020d7d6f7aca1a6c0ded1d37375ff3e43c02ded0be07ef8efa049a4ee271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dd0020d7d6f7aca1a6c0ded1d37375ff3e43c02ded0be07ef8efa049a4ee271->enter($__internal_5dd0020d7d6f7aca1a6c0ded1d37375ff3e43c02ded0be07ef8efa049a4ee271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_title"));

        // line 23
        echo "    ";
        $this->displayBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_5dd0020d7d6f7aca1a6c0ded1d37375ff3e43c02ded0be07ef8efa049a4ee271->leave($__internal_5dd0020d7d6f7aca1a6c0ded1d37375ff3e43c02ded0be07ef8efa049a4ee271_prof);

        
        $__internal_2d346c622c292b87220a4d073c3cb5d760f191f3359724fda2603dc5218a84be->leave($__internal_2d346c622c292b87220a4d073c3cb5d760f191f3359724fda2603dc5218a84be_prof);

    }

    // line 26
    public function block_actions($context, array $blocks = array())
    {
        $__internal_79a25eab2f5719a8c0b1fe073d2a679bf9340fdee2afd49647c7bca00d44d31e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79a25eab2f5719a8c0b1fe073d2a679bf9340fdee2afd49647c7bca00d44d31e->enter($__internal_79a25eab2f5719a8c0b1fe073d2a679bf9340fdee2afd49647c7bca00d44d31e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_0d9e194dda41912c729d1f67cfb0c7c633b7263be57c72b3f8385996c5d4a3b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d9e194dda41912c729d1f67cfb0c7c633b7263be57c72b3f8385996c5d4a3b0->enter($__internal_0d9e194dda41912c729d1f67cfb0c7c633b7263be57c72b3f8385996c5d4a3b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 27
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_edit.html.twig", 27)->display($context);
        
        $__internal_0d9e194dda41912c729d1f67cfb0c7c633b7263be57c72b3f8385996c5d4a3b0->leave($__internal_0d9e194dda41912c729d1f67cfb0c7c633b7263be57c72b3f8385996c5d4a3b0_prof);

        
        $__internal_79a25eab2f5719a8c0b1fe073d2a679bf9340fdee2afd49647c7bca00d44d31e->leave($__internal_79a25eab2f5719a8c0b1fe073d2a679bf9340fdee2afd49647c7bca00d44d31e_prof);

    }

    // line 30
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_b4876c1696b96af1d4d11e257fdbd20db1a8bcf6c9e7df93008c239514d6b284 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4876c1696b96af1d4d11e257fdbd20db1a8bcf6c9e7df93008c239514d6b284->enter($__internal_b4876c1696b96af1d4d11e257fdbd20db1a8bcf6c9e7df93008c239514d6b284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_df5908265c4d327f781545feb51af23b82a32a30ef26a5ec498c0aa7904b4c39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df5908265c4d327f781545feb51af23b82a32a30ef26a5ec498c0aa7904b4c39->enter($__internal_df5908265c4d327f781545feb51af23b82a32a30ef26a5ec498c0aa7904b4c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_df5908265c4d327f781545feb51af23b82a32a30ef26a5ec498c0aa7904b4c39->leave($__internal_df5908265c4d327f781545feb51af23b82a32a30ef26a5ec498c0aa7904b4c39_prof);

        
        $__internal_b4876c1696b96af1d4d11e257fdbd20db1a8bcf6c9e7df93008c239514d6b284->leave($__internal_b4876c1696b96af1d4d11e257fdbd20db1a8bcf6c9e7df93008c239514d6b284_prof);

    }

    // line 35
    public function block_form($context, array $blocks = array())
    {
        $__internal_a156ad3f130f326b4dc5bc85b7eb72d765c44d65393e932cc918d9fe0ead5a50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a156ad3f130f326b4dc5bc85b7eb72d765c44d65393e932cc918d9fe0ead5a50->enter($__internal_a156ad3f130f326b4dc5bc85b7eb72d765c44d65393e932cc918d9fe0ead5a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_f539a200aff2060cd93afafdecad7e8b086a5c599c54329d6f42a3a5dfdf7b37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f539a200aff2060cd93afafdecad7e8b086a5c599c54329d6f42a3a5dfdf7b37->enter($__internal_f539a200aff2060cd93afafdecad7e8b086a5c599c54329d6f42a3a5dfdf7b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 36
        echo "    ";
        $this->displayBlock("parentForm", $context, $blocks);
        echo "
";
        
        $__internal_f539a200aff2060cd93afafdecad7e8b086a5c599c54329d6f42a3a5dfdf7b37->leave($__internal_f539a200aff2060cd93afafdecad7e8b086a5c599c54329d6f42a3a5dfdf7b37_prof);

        
        $__internal_a156ad3f130f326b4dc5bc85b7eb72d765c44d65393e932cc918d9fe0ead5a50->leave($__internal_a156ad3f130f326b4dc5bc85b7eb72d765c44d65393e932cc918d9fe0ead5a50_prof);

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
