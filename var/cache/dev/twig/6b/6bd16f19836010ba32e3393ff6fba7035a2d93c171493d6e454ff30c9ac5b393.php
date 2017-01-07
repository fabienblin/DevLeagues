<?php

/* @SonataAdmin/CRUD/delete.html.twig */
class __TwigTemplate_8c28dddec95e54f8d26e81d68e05b6f0359589fd5fc5e3625112c6b7cd70e363 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/delete.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9888b9f309ac0c4ee1077e129a56d46169c0c911789b3b4b7e7fded35f791827 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9888b9f309ac0c4ee1077e129a56d46169c0c911789b3b4b7e7fded35f791827->enter($__internal_9888b9f309ac0c4ee1077e129a56d46169c0c911789b3b4b7e7fded35f791827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/delete.html.twig"));

        $__internal_45612fb4441669baa0a9277528879ee25b0dd14f003ad6f384911a51d56a84bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45612fb4441669baa0a9277528879ee25b0dd14f003ad6f384911a51d56a84bf->enter($__internal_45612fb4441669baa0a9277528879ee25b0dd14f003ad6f384911a51d56a84bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/delete.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9888b9f309ac0c4ee1077e129a56d46169c0c911789b3b4b7e7fded35f791827->leave($__internal_9888b9f309ac0c4ee1077e129a56d46169c0c911789b3b4b7e7fded35f791827_prof);

        
        $__internal_45612fb4441669baa0a9277528879ee25b0dd14f003ad6f384911a51d56a84bf->leave($__internal_45612fb4441669baa0a9277528879ee25b0dd14f003ad6f384911a51d56a84bf_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_c7218e7a12b72a20d7a281f7a0718b9f776f46f4e2b03cd2a9b5e27dbe64868e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7218e7a12b72a20d7a281f7a0718b9f776f46f4e2b03cd2a9b5e27dbe64868e->enter($__internal_c7218e7a12b72a20d7a281f7a0718b9f776f46f4e2b03cd2a9b5e27dbe64868e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_bd1ac89b26c2d0b7cd56fecb8b0a0437c92ff60a63e07a8f368814830d4a2290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd1ac89b26c2d0b7cd56fecb8b0a0437c92ff60a63e07a8f368814830d4a2290->enter($__internal_bd1ac89b26c2d0b7cd56fecb8b0a0437c92ff60a63e07a8f368814830d4a2290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/delete.html.twig", 15)->display($context);
        
        $__internal_bd1ac89b26c2d0b7cd56fecb8b0a0437c92ff60a63e07a8f368814830d4a2290->leave($__internal_bd1ac89b26c2d0b7cd56fecb8b0a0437c92ff60a63e07a8f368814830d4a2290_prof);

        
        $__internal_c7218e7a12b72a20d7a281f7a0718b9f776f46f4e2b03cd2a9b5e27dbe64868e->leave($__internal_c7218e7a12b72a20d7a281f7a0718b9f776f46f4e2b03cd2a9b5e27dbe64868e_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_ab82fc0acb50f6893f39b177621ed92b565e89ff1fa8bd0d160ce2d19194c991 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab82fc0acb50f6893f39b177621ed92b565e89ff1fa8bd0d160ce2d19194c991->enter($__internal_ab82fc0acb50f6893f39b177621ed92b565e89ff1fa8bd0d160ce2d19194c991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_178638326ac8fc95ab9befd1991431e619cc1a35a29b1a2f62c5f21be6505290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_178638326ac8fc95ab9befd1991431e619cc1a35a29b1a2f62c5f21be6505290->enter($__internal_178638326ac8fc95ab9befd1991431e619cc1a35a29b1a2f62c5f21be6505290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_178638326ac8fc95ab9befd1991431e619cc1a35a29b1a2f62c5f21be6505290->leave($__internal_178638326ac8fc95ab9befd1991431e619cc1a35a29b1a2f62c5f21be6505290_prof);

        
        $__internal_ab82fc0acb50f6893f39b177621ed92b565e89ff1fa8bd0d160ce2d19194c991->leave($__internal_ab82fc0acb50f6893f39b177621ed92b565e89ff1fa8bd0d160ce2d19194c991_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_6dd11fc14d2bfd0b3ec6c6637290b0e3a0e83c175e6f7b6069c637ada7ee86e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dd11fc14d2bfd0b3ec6c6637290b0e3a0e83c175e6f7b6069c637ada7ee86e5->enter($__internal_6dd11fc14d2bfd0b3ec6c6637290b0e3a0e83c175e6f7b6069c637ada7ee86e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c1e0fa019e998ebde73f71004f76c9968c6f550672800e973f9aaf9c0cbeca1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1e0fa019e998ebde73f71004f76c9968c6f550672800e973f9aaf9c0cbeca1c->enter($__internal_c1e0fa019e998ebde73f71004f76c9968c6f550672800e973f9aaf9c0cbeca1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "    <div class=\"sonata-ba-delete\">

        <div class=\"box box-danger\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_delete", array(), "SonataAdminBundle"), "html", null, true);
        echo "</h3>
            </div>
            <div class=\"box-body\">
                ";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message_delete_confirmation", array("%object%" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")), "SonataAdminBundle"), "html", null, true);
        echo "
            </div>
            <div class=\"box-footer clearfix\">
                <form method=\"POST\" action=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "delete", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\">

                    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i> ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_delete", array(), "SonataAdminBundle"), "html", null, true);
        echo "</button>
                    ";
        // line 36
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 37
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
            echo "

                        <a class=\"btn btn-success\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                            ";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_edit", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
                    ";
        }
        // line 43
        echo "                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_c1e0fa019e998ebde73f71004f76c9968c6f550672800e973f9aaf9c0cbeca1c->leave($__internal_c1e0fa019e998ebde73f71004f76c9968c6f550672800e973f9aaf9c0cbeca1c_prof);

        
        $__internal_6dd11fc14d2bfd0b3ec6c6637290b0e3a0e83c175e6f7b6069c637ada7ee86e5->leave($__internal_6dd11fc14d2bfd0b3ec6c6637290b0e3a0e83c175e6f7b6069c637ada7ee86e5_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 43,  132 => 41,  127 => 39,  121 => 37,  119 => 36,  115 => 35,  110 => 33,  105 => 31,  99 => 28,  93 => 25,  87 => 21,  78 => 20,  60 => 18,  50 => 15,  41 => 14,  20 => 12,);
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

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% block content %}
    <div class=\"sonata-ba-delete\">

        <div class=\"box box-danger\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">{{ 'title_delete'|trans({}, 'SonataAdminBundle') }}</h3>
            </div>
            <div class=\"box-body\">
                {{ 'message_delete_confirmation'|trans({'%object%': admin.toString(object)}, 'SonataAdminBundle') }}
            </div>
            <div class=\"box-footer clearfix\">
                <form method=\"POST\" action=\"{{ admin.generateObjectUrl('delete', object) }}\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"{{ csrf_token }}\">

                    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i> {{ 'btn_delete'|trans({}, 'SonataAdminBundle') }}</button>
                    {% if admin.hasRoute('edit') and admin.isGranted('EDIT', object) %}
                        {{ 'delete_or'|trans({}, 'SonataAdminBundle') }}

                        <a class=\"btn btn-success\" href=\"{{ admin.generateObjectUrl('edit', object) }}\">
                            <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i>
                            {{ 'link_action_edit'|trans({}, 'SonataAdminBundle') }}</a>
                    {% endif %}
                </form>
            </div>
        </div>
    </div>
{% endblock %}
", "@SonataAdmin/CRUD/delete.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/delete.html.twig");
    }
}
