<?php

/* @SonataAdmin/CRUD/delete.html.twig */
class __TwigTemplate_50c0572dee074b7699c6304069fce4db1f29c043b0c47fb4e33a8e50cd5c1116 extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/delete.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9cdd5eb3b552cb793a48d8ebe8bcc20fd441c8c5c81d01238c7a4a45c4720dc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cdd5eb3b552cb793a48d8ebe8bcc20fd441c8c5c81d01238c7a4a45c4720dc0->enter($__internal_9cdd5eb3b552cb793a48d8ebe8bcc20fd441c8c5c81d01238c7a4a45c4720dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/delete.html.twig"));

        $__internal_450bc61e9ea5542d57610abbc0cfef319ae4db6c7daddbf2dd309b611c5d5548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_450bc61e9ea5542d57610abbc0cfef319ae4db6c7daddbf2dd309b611c5d5548->enter($__internal_450bc61e9ea5542d57610abbc0cfef319ae4db6c7daddbf2dd309b611c5d5548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/delete.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cdd5eb3b552cb793a48d8ebe8bcc20fd441c8c5c81d01238c7a4a45c4720dc0->leave($__internal_9cdd5eb3b552cb793a48d8ebe8bcc20fd441c8c5c81d01238c7a4a45c4720dc0_prof);

        
        $__internal_450bc61e9ea5542d57610abbc0cfef319ae4db6c7daddbf2dd309b611c5d5548->leave($__internal_450bc61e9ea5542d57610abbc0cfef319ae4db6c7daddbf2dd309b611c5d5548_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_66b6e3a8c6f58fe6df392c7e0e52fda829b02c65e64b94325b98be010bd5c471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66b6e3a8c6f58fe6df392c7e0e52fda829b02c65e64b94325b98be010bd5c471->enter($__internal_66b6e3a8c6f58fe6df392c7e0e52fda829b02c65e64b94325b98be010bd5c471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_8423c24305f299e80f465c554fcd47091879ed02ec1f282f2cb3cee20be7f541 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8423c24305f299e80f465c554fcd47091879ed02ec1f282f2cb3cee20be7f541->enter($__internal_8423c24305f299e80f465c554fcd47091879ed02ec1f282f2cb3cee20be7f541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/delete.html.twig", 15)->display($context);
        
        $__internal_8423c24305f299e80f465c554fcd47091879ed02ec1f282f2cb3cee20be7f541->leave($__internal_8423c24305f299e80f465c554fcd47091879ed02ec1f282f2cb3cee20be7f541_prof);

        
        $__internal_66b6e3a8c6f58fe6df392c7e0e52fda829b02c65e64b94325b98be010bd5c471->leave($__internal_66b6e3a8c6f58fe6df392c7e0e52fda829b02c65e64b94325b98be010bd5c471_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_69667ea9262984efd2ef53eda437a87ce4d5af1fc883f334e6474c2407219101 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69667ea9262984efd2ef53eda437a87ce4d5af1fc883f334e6474c2407219101->enter($__internal_69667ea9262984efd2ef53eda437a87ce4d5af1fc883f334e6474c2407219101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_9e53fe2ad0a260dfe923f91c5f8607172bf82bffec6deb0953e9e192398b8cda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e53fe2ad0a260dfe923f91c5f8607172bf82bffec6deb0953e9e192398b8cda->enter($__internal_9e53fe2ad0a260dfe923f91c5f8607172bf82bffec6deb0953e9e192398b8cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_9e53fe2ad0a260dfe923f91c5f8607172bf82bffec6deb0953e9e192398b8cda->leave($__internal_9e53fe2ad0a260dfe923f91c5f8607172bf82bffec6deb0953e9e192398b8cda_prof);

        
        $__internal_69667ea9262984efd2ef53eda437a87ce4d5af1fc883f334e6474c2407219101->leave($__internal_69667ea9262984efd2ef53eda437a87ce4d5af1fc883f334e6474c2407219101_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_3cc03e4b52014c96084af649e46824d1a1fe2475f66a830a40f2bf87a3716f71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cc03e4b52014c96084af649e46824d1a1fe2475f66a830a40f2bf87a3716f71->enter($__internal_3cc03e4b52014c96084af649e46824d1a1fe2475f66a830a40f2bf87a3716f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a7e3f7be0932a2b0e4f7e27ba0216ebdfedab2b2fcbc883cd352d564045d2a88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7e3f7be0932a2b0e4f7e27ba0216ebdfedab2b2fcbc883cd352d564045d2a88->enter($__internal_a7e3f7be0932a2b0e4f7e27ba0216ebdfedab2b2fcbc883cd352d564045d2a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("message_delete_confirmation", array("%object%" => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "toString", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method")), "SonataAdminBundle"), "html", null, true);
        echo "
            </div>
            <div class=\"box-footer clearfix\">
                <form method=\"POST\" action=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "delete", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                    <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\">

                    <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i> ";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_delete", array(), "SonataAdminBundle"), "html", null, true);
        echo "</button>
                    ";
        // line 36
        if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"))) {
            // line 37
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
            echo "

                        <a class=\"btn btn-success\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
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
        
        $__internal_a7e3f7be0932a2b0e4f7e27ba0216ebdfedab2b2fcbc883cd352d564045d2a88->leave($__internal_a7e3f7be0932a2b0e4f7e27ba0216ebdfedab2b2fcbc883cd352d564045d2a88_prof);

        
        $__internal_3cc03e4b52014c96084af649e46824d1a1fe2475f66a830a40f2bf87a3716f71->leave($__internal_3cc03e4b52014c96084af649e46824d1a1fe2475f66a830a40f2bf87a3716f71_prof);

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
", "@SonataAdmin/CRUD/delete.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/delete.html.twig");
    }
}
