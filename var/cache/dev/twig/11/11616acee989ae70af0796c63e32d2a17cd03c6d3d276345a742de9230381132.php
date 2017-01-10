<?php

/* @SonataAdmin/CRUD/action.html.twig */
class __TwigTemplate_00ff325d79aea0def57abc21a923caecdd502488a97049e598930def88cdf815 extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72b805ba55e5d3fb1e495bd13eed6ca0ec59734148e02e795f83e0c7db119da8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72b805ba55e5d3fb1e495bd13eed6ca0ec59734148e02e795f83e0c7db119da8->enter($__internal_72b805ba55e5d3fb1e495bd13eed6ca0ec59734148e02e795f83e0c7db119da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/action.html.twig"));

        $__internal_ad8493dda3db206c355e9dcc482ad11164717f13c936621b1a85fa65783d6183 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad8493dda3db206c355e9dcc482ad11164717f13c936621b1a85fa65783d6183->enter($__internal_ad8493dda3db206c355e9dcc482ad11164717f13c936621b1a85fa65783d6183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72b805ba55e5d3fb1e495bd13eed6ca0ec59734148e02e795f83e0c7db119da8->leave($__internal_72b805ba55e5d3fb1e495bd13eed6ca0ec59734148e02e795f83e0c7db119da8_prof);

        
        $__internal_ad8493dda3db206c355e9dcc482ad11164717f13c936621b1a85fa65783d6183->leave($__internal_ad8493dda3db206c355e9dcc482ad11164717f13c936621b1a85fa65783d6183_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_fbbdb26b0218674c13b6a8915cab1f492830e17a6e4c1bca4a6c43af6ea51b3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbbdb26b0218674c13b6a8915cab1f492830e17a6e4c1bca4a6c43af6ea51b3e->enter($__internal_fbbdb26b0218674c13b6a8915cab1f492830e17a6e4c1bca4a6c43af6ea51b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_011fa1c776ae1a64b0033aea007670773f75e6d62d07b6eca128c83c7111ba34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_011fa1c776ae1a64b0033aea007670773f75e6d62d07b6eca128c83c7111ba34->enter($__internal_011fa1c776ae1a64b0033aea007670773f75e6d62d07b6eca128c83c7111ba34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/action.html.twig", 15)->display($context);
        
        $__internal_011fa1c776ae1a64b0033aea007670773f75e6d62d07b6eca128c83c7111ba34->leave($__internal_011fa1c776ae1a64b0033aea007670773f75e6d62d07b6eca128c83c7111ba34_prof);

        
        $__internal_fbbdb26b0218674c13b6a8915cab1f492830e17a6e4c1bca4a6c43af6ea51b3e->leave($__internal_fbbdb26b0218674c13b6a8915cab1f492830e17a6e4c1bca4a6c43af6ea51b3e_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_664dcae31da05b4d3cd2b4dfa723cb2051aa6162473e5eb9c4a21af83ad131a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_664dcae31da05b4d3cd2b4dfa723cb2051aa6162473e5eb9c4a21af83ad131a4->enter($__internal_664dcae31da05b4d3cd2b4dfa723cb2051aa6162473e5eb9c4a21af83ad131a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_a9bdf796ae4f2b1e70c537f3dfa052561e3081d29dbdfab4ad1ab2e24dcc1843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9bdf796ae4f2b1e70c537f3dfa052561e3081d29dbdfab4ad1ab2e24dcc1843->enter($__internal_a9bdf796ae4f2b1e70c537f3dfa052561e3081d29dbdfab4ad1ab2e24dcc1843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_a9bdf796ae4f2b1e70c537f3dfa052561e3081d29dbdfab4ad1ab2e24dcc1843->leave($__internal_a9bdf796ae4f2b1e70c537f3dfa052561e3081d29dbdfab4ad1ab2e24dcc1843_prof);

        
        $__internal_664dcae31da05b4d3cd2b4dfa723cb2051aa6162473e5eb9c4a21af83ad131a4->leave($__internal_664dcae31da05b4d3cd2b4dfa723cb2051aa6162473e5eb9c4a21af83ad131a4_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_00ac537f5d81217611a6645a4ef0790b496314adfa9629348b8a0c8d26804c6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00ac537f5d81217611a6645a4ef0790b496314adfa9629348b8a0c8d26804c6d->enter($__internal_00ac537f5d81217611a6645a4ef0790b496314adfa9629348b8a0c8d26804c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5db64959a8b0320632900e09c59879d3acccb83d9b8cac28edaad6231287561c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5db64959a8b0320632900e09c59879d3acccb83d9b8cac28edaad6231287561c->enter($__internal_5db64959a8b0320632900e09c59879d3acccb83d9b8cac28edaad6231287561c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_5db64959a8b0320632900e09c59879d3acccb83d9b8cac28edaad6231287561c->leave($__internal_5db64959a8b0320632900e09c59879d3acccb83d9b8cac28edaad6231287561c_prof);

        
        $__internal_00ac537f5d81217611a6645a4ef0790b496314adfa9629348b8a0c8d26804c6d->leave($__internal_00ac537f5d81217611a6645a4ef0790b496314adfa9629348b8a0c8d26804c6d_prof);

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
", "@SonataAdmin/CRUD/action.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/action.html.twig");
    }
}
