<?php

/* @SonataAdmin/CRUD/action.html.twig */
class __TwigTemplate_d1c1d8276081cb699c62be62fc70b760a11f1b271d46dc52faffbe18e3c04e9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1ac5ae9215af195614cfd918bdba475f309349090a11d24fd36a685ae8effac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1ac5ae9215af195614cfd918bdba475f309349090a11d24fd36a685ae8effac->enter($__internal_e1ac5ae9215af195614cfd918bdba475f309349090a11d24fd36a685ae8effac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/action.html.twig"));

        $__internal_45939f7b019e00fdd6f92faf76d3542121e1e65ac1c9a6b2f167df17cf0bc49d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45939f7b019e00fdd6f92faf76d3542121e1e65ac1c9a6b2f167df17cf0bc49d->enter($__internal_45939f7b019e00fdd6f92faf76d3542121e1e65ac1c9a6b2f167df17cf0bc49d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1ac5ae9215af195614cfd918bdba475f309349090a11d24fd36a685ae8effac->leave($__internal_e1ac5ae9215af195614cfd918bdba475f309349090a11d24fd36a685ae8effac_prof);

        
        $__internal_45939f7b019e00fdd6f92faf76d3542121e1e65ac1c9a6b2f167df17cf0bc49d->leave($__internal_45939f7b019e00fdd6f92faf76d3542121e1e65ac1c9a6b2f167df17cf0bc49d_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_41be8823817b02d761c41c764489d1233f6fbc7b4841f8a59c626e8e2ecad792 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41be8823817b02d761c41c764489d1233f6fbc7b4841f8a59c626e8e2ecad792->enter($__internal_41be8823817b02d761c41c764489d1233f6fbc7b4841f8a59c626e8e2ecad792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_ffe25f259f8a8236e57412bf93fc7df35f84840bb491a8b71656eaae2ca4cabb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffe25f259f8a8236e57412bf93fc7df35f84840bb491a8b71656eaae2ca4cabb->enter($__internal_ffe25f259f8a8236e57412bf93fc7df35f84840bb491a8b71656eaae2ca4cabb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/action.html.twig", 15)->display($context);
        
        $__internal_ffe25f259f8a8236e57412bf93fc7df35f84840bb491a8b71656eaae2ca4cabb->leave($__internal_ffe25f259f8a8236e57412bf93fc7df35f84840bb491a8b71656eaae2ca4cabb_prof);

        
        $__internal_41be8823817b02d761c41c764489d1233f6fbc7b4841f8a59c626e8e2ecad792->leave($__internal_41be8823817b02d761c41c764489d1233f6fbc7b4841f8a59c626e8e2ecad792_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_c4667ecb85ab45421a151f17eb46c8f4076f41b704a04dc7fdfc1a9c5556181b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4667ecb85ab45421a151f17eb46c8f4076f41b704a04dc7fdfc1a9c5556181b->enter($__internal_c4667ecb85ab45421a151f17eb46c8f4076f41b704a04dc7fdfc1a9c5556181b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_2cf6ffd95208751985f952c79059fc3eaf45fa16a90de10b4c51277a1b4fbf7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cf6ffd95208751985f952c79059fc3eaf45fa16a90de10b4c51277a1b4fbf7e->enter($__internal_2cf6ffd95208751985f952c79059fc3eaf45fa16a90de10b4c51277a1b4fbf7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_2cf6ffd95208751985f952c79059fc3eaf45fa16a90de10b4c51277a1b4fbf7e->leave($__internal_2cf6ffd95208751985f952c79059fc3eaf45fa16a90de10b4c51277a1b4fbf7e_prof);

        
        $__internal_c4667ecb85ab45421a151f17eb46c8f4076f41b704a04dc7fdfc1a9c5556181b->leave($__internal_c4667ecb85ab45421a151f17eb46c8f4076f41b704a04dc7fdfc1a9c5556181b_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_7ba5f964e4c847e9cfad79e5ea35f8698024ba24d6c2b045b947cc7632715294 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ba5f964e4c847e9cfad79e5ea35f8698024ba24d6c2b045b947cc7632715294->enter($__internal_7ba5f964e4c847e9cfad79e5ea35f8698024ba24d6c2b045b947cc7632715294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b516647199f0f33cb6c0b6ce93b1607872677bba30ca621bf382254c3927c7d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b516647199f0f33cb6c0b6ce93b1607872677bba30ca621bf382254c3927c7d3->enter($__internal_b516647199f0f33cb6c0b6ce93b1607872677bba30ca621bf382254c3927c7d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_b516647199f0f33cb6c0b6ce93b1607872677bba30ca621bf382254c3927c7d3->leave($__internal_b516647199f0f33cb6c0b6ce93b1607872677bba30ca621bf382254c3927c7d3_prof);

        
        $__internal_7ba5f964e4c847e9cfad79e5ea35f8698024ba24d6c2b045b947cc7632715294->leave($__internal_7ba5f964e4c847e9cfad79e5ea35f8698024ba24d6c2b045b947cc7632715294_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 25,  86 => 24,  72 => 20,  69 => 19,  60 => 18,  50 => 15,  41 => 14,  20 => 12,);
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

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}
    {% if action is defined %}
        {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}
    {% endif %}
{% endblock %}

{% block content %}

    Redefine the content block in your action template

{% endblock %}
", "@SonataAdmin/CRUD/action.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/action.html.twig");
    }
}
