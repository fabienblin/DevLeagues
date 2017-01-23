<?php

/* @SonataAdmin/CRUD/select_subclass.html.twig */
class __TwigTemplate_250bc4ae5146df265b9f5c703a86cec2eca50e770818beda06753a1b25bf871c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/select_subclass.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d69d3bdbae363cadd1c01452839daa5e0300812d1e12f82da1b3ef0637a30a97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d69d3bdbae363cadd1c01452839daa5e0300812d1e12f82da1b3ef0637a30a97->enter($__internal_d69d3bdbae363cadd1c01452839daa5e0300812d1e12f82da1b3ef0637a30a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/select_subclass.html.twig"));

        $__internal_37a5a0695b118730e9a193979f3018e8984d74b69104be91711421172857bed4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37a5a0695b118730e9a193979f3018e8984d74b69104be91711421172857bed4->enter($__internal_37a5a0695b118730e9a193979f3018e8984d74b69104be91711421172857bed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/select_subclass.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d69d3bdbae363cadd1c01452839daa5e0300812d1e12f82da1b3ef0637a30a97->leave($__internal_d69d3bdbae363cadd1c01452839daa5e0300812d1e12f82da1b3ef0637a30a97_prof);

        
        $__internal_37a5a0695b118730e9a193979f3018e8984d74b69104be91711421172857bed4->leave($__internal_37a5a0695b118730e9a193979f3018e8984d74b69104be91711421172857bed4_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1874f417e11e313544b9fe05fb66f139fd9413a16f046cf62f3e49074b5b6d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1874f417e11e313544b9fe05fb66f139fd9413a16f046cf62f3e49074b5b6d7->enter($__internal_e1874f417e11e313544b9fe05fb66f139fd9413a16f046cf62f3e49074b5b6d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3a86f712f0879aa7bf57d36cc1b794dfa4c6cfbedd8ce74f7a07c1bd966bc9c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a86f712f0879aa7bf57d36cc1b794dfa4c6cfbedd8ce74f7a07c1bd966bc9c4->enter($__internal_3a86f712f0879aa7bf57d36cc1b794dfa4c6cfbedd8ce74f7a07c1bd966bc9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_select_subclass", array(), "SonataAdminBundle"), "html", null, true);
        
        $__internal_3a86f712f0879aa7bf57d36cc1b794dfa4c6cfbedd8ce74f7a07c1bd966bc9c4->leave($__internal_3a86f712f0879aa7bf57d36cc1b794dfa4c6cfbedd8ce74f7a07c1bd966bc9c4_prof);

        
        $__internal_e1874f417e11e313544b9fe05fb66f139fd9413a16f046cf62f3e49074b5b6d7->leave($__internal_e1874f417e11e313544b9fe05fb66f139fd9413a16f046cf62f3e49074b5b6d7_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_930c7018c975d6f08402a50dbe862dbcbf6dd2b18f8d1178a2ccd299b5cea947 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_930c7018c975d6f08402a50dbe862dbcbf6dd2b18f8d1178a2ccd299b5cea947->enter($__internal_930c7018c975d6f08402a50dbe862dbcbf6dd2b18f8d1178a2ccd299b5cea947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_57a4fe782e0805d6f4a0c5f13f69d039569c8c839307a7bec656eb4daa90846f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57a4fe782e0805d6f4a0c5f13f69d039569c8c839307a7bec656eb4daa90846f->enter($__internal_57a4fe782e0805d6f4a0c5f13f69d039569c8c839307a7bec656eb4daa90846f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "    <div class=\"box box-success\">
        <div class=\"box-header\">
            <h3 class=\"box-title\">
                ";
        // line 19
        $this->displayBlock("title", $context, $blocks);
        echo "
            </h3>
        </div>
        <div class=\"box-body\">
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "subclasses", array())));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
            // line 24
            echo "                <div class=\"col-lg-2 col-md-3 col-sm-4 col-xs-6\">
                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => ($context["action"] ?? $this->getContext($context, "action")), 1 => array("subclass" => $context["subclass"])), "method"), "html", null, true);
            echo "\"
                       class=\"btn btn-app btn-block\"
                            >
                        <i class=\"fa fa-plus-square\" aria-hidden=\"true\"></i>
                        ";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["subclass"], array(), (($this->getAttribute(($context["admin"] ?? null), "translationdomain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["admin"] ?? null), "translationdomain", array()), "SonataAdminBundle")) : ("SonataAdminBundle"))), "html", null, true);
            echo "
                    </a>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "                <span class=\"alert alert-info\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_subclass_available", array(), "SonataAdminBundle"), "html", null, true);
            echo "</span>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            <div class=\"clearfix\"></div>
        </div>
    </div>
";
        
        $__internal_57a4fe782e0805d6f4a0c5f13f69d039569c8c839307a7bec656eb4daa90846f->leave($__internal_57a4fe782e0805d6f4a0c5f13f69d039569c8c839307a7bec656eb4daa90846f_prof);

        
        $__internal_930c7018c975d6f08402a50dbe862dbcbf6dd2b18f8d1178a2ccd299b5cea947->leave($__internal_930c7018c975d6f08402a50dbe862dbcbf6dd2b18f8d1178a2ccd299b5cea947_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/select_subclass.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 35,  103 => 33,  94 => 29,  87 => 25,  84 => 24,  79 => 23,  72 => 19,  67 => 16,  58 => 15,  40 => 13,  19 => 11,);
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

{% block title %}{{ 'title_select_subclass'|trans({}, 'SonataAdminBundle') }}{% endblock %}

{% block content %}
    <div class=\"box box-success\">
        <div class=\"box-header\">
            <h3 class=\"box-title\">
                {{ block('title') }}
            </h3>
        </div>
        <div class=\"box-body\">
            {% for subclass in admin.subclasses|keys %}
                <div class=\"col-lg-2 col-md-3 col-sm-4 col-xs-6\">
                    <a href=\"{{ admin.generateUrl(action, {'subclass': subclass }) }}\"
                       class=\"btn btn-app btn-block\"
                            >
                        <i class=\"fa fa-plus-square\" aria-hidden=\"true\"></i>
                        {{ subclass|trans({}, admin.translationdomain|default('SonataAdminBundle')) }}
                    </a>
                </div>
            {% else %}
                <span class=\"alert alert-info\">{{ 'no_subclass_available'|trans({}, 'SonataAdminBundle') }}</span>
            {% endfor %}
            <div class=\"clearfix\"></div>
        </div>
    </div>
{% endblock %}
", "@SonataAdmin/CRUD/select_subclass.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/select_subclass.html.twig");
    }
}
