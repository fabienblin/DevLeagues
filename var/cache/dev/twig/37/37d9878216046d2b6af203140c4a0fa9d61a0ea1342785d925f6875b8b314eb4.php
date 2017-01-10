<?php

/* @SonataAdmin/CRUD/delete.html.twig */
class __TwigTemplate_3fce1a67c94b9742393979de72b7e5e9459591b7dae9b1a7f99dd4b1b053e2d8 extends Twig_Template
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
        $__internal_0a8b7e369b28530a5f6bf88f925c063f497f6da1a44e5d3d9dbf485156a61fc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a8b7e369b28530a5f6bf88f925c063f497f6da1a44e5d3d9dbf485156a61fc2->enter($__internal_0a8b7e369b28530a5f6bf88f925c063f497f6da1a44e5d3d9dbf485156a61fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/delete.html.twig"));

        $__internal_faaa7a2bef648edda4fd8ec5e1da6da8ceb67121b650ea041088b385d80ca3be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faaa7a2bef648edda4fd8ec5e1da6da8ceb67121b650ea041088b385d80ca3be->enter($__internal_faaa7a2bef648edda4fd8ec5e1da6da8ceb67121b650ea041088b385d80ca3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/delete.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a8b7e369b28530a5f6bf88f925c063f497f6da1a44e5d3d9dbf485156a61fc2->leave($__internal_0a8b7e369b28530a5f6bf88f925c063f497f6da1a44e5d3d9dbf485156a61fc2_prof);

        
        $__internal_faaa7a2bef648edda4fd8ec5e1da6da8ceb67121b650ea041088b385d80ca3be->leave($__internal_faaa7a2bef648edda4fd8ec5e1da6da8ceb67121b650ea041088b385d80ca3be_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_80f9bd5ff3125e1d1f9f62f80123bae9178ad99f5c896cef9c6b40d36c205e42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80f9bd5ff3125e1d1f9f62f80123bae9178ad99f5c896cef9c6b40d36c205e42->enter($__internal_80f9bd5ff3125e1d1f9f62f80123bae9178ad99f5c896cef9c6b40d36c205e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_25f8cb57903b081bc1a5d803a7f37f2cf02c56991c43641d0472d63fec5c17ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25f8cb57903b081bc1a5d803a7f37f2cf02c56991c43641d0472d63fec5c17ff->enter($__internal_25f8cb57903b081bc1a5d803a7f37f2cf02c56991c43641d0472d63fec5c17ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/delete.html.twig", 15)->display($context);
        
        $__internal_25f8cb57903b081bc1a5d803a7f37f2cf02c56991c43641d0472d63fec5c17ff->leave($__internal_25f8cb57903b081bc1a5d803a7f37f2cf02c56991c43641d0472d63fec5c17ff_prof);

        
        $__internal_80f9bd5ff3125e1d1f9f62f80123bae9178ad99f5c896cef9c6b40d36c205e42->leave($__internal_80f9bd5ff3125e1d1f9f62f80123bae9178ad99f5c896cef9c6b40d36c205e42_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_a9c21712969b36a4605d20208bb415515a1f9fb4772ff90c8d29eea4638cc150 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9c21712969b36a4605d20208bb415515a1f9fb4772ff90c8d29eea4638cc150->enter($__internal_a9c21712969b36a4605d20208bb415515a1f9fb4772ff90c8d29eea4638cc150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_c626a77af121f32a949df3117aa166a0e35576ea6e0927bd46ad50f97a4aa5af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c626a77af121f32a949df3117aa166a0e35576ea6e0927bd46ad50f97a4aa5af->enter($__internal_c626a77af121f32a949df3117aa166a0e35576ea6e0927bd46ad50f97a4aa5af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_c626a77af121f32a949df3117aa166a0e35576ea6e0927bd46ad50f97a4aa5af->leave($__internal_c626a77af121f32a949df3117aa166a0e35576ea6e0927bd46ad50f97a4aa5af_prof);

        
        $__internal_a9c21712969b36a4605d20208bb415515a1f9fb4772ff90c8d29eea4638cc150->leave($__internal_a9c21712969b36a4605d20208bb415515a1f9fb4772ff90c8d29eea4638cc150_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_b30838251e9afeffa781cf583e64124a4142bf2cfe5a3c07ac0c879d5830440c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b30838251e9afeffa781cf583e64124a4142bf2cfe5a3c07ac0c879d5830440c->enter($__internal_b30838251e9afeffa781cf583e64124a4142bf2cfe5a3c07ac0c879d5830440c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_873c88dcb7d59efcaa774c486f26952570f1585ed055582459eac350d1531c84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_873c88dcb7d59efcaa774c486f26952570f1585ed055582459eac350d1531c84->enter($__internal_873c88dcb7d59efcaa774c486f26952570f1585ed055582459eac350d1531c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_873c88dcb7d59efcaa774c486f26952570f1585ed055582459eac350d1531c84->leave($__internal_873c88dcb7d59efcaa774c486f26952570f1585ed055582459eac350d1531c84_prof);

        
        $__internal_b30838251e9afeffa781cf583e64124a4142bf2cfe5a3c07ac0c879d5830440c->leave($__internal_b30838251e9afeffa781cf583e64124a4142bf2cfe5a3c07ac0c879d5830440c_prof);

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
