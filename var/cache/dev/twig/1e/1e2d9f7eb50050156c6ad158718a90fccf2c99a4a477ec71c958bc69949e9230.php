<?php

/* @SonataAdmin/CRUD/select_subclass.html.twig */
class __TwigTemplate_01418a972afcd147256c65e7bbe55d877000f0a519ee23cd228f4af68e220b08 extends Twig_Template
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
        $__internal_1de60ae181177a35e6c41ad7ac1a05d3f331c9a334aa194889156445a576551b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1de60ae181177a35e6c41ad7ac1a05d3f331c9a334aa194889156445a576551b->enter($__internal_1de60ae181177a35e6c41ad7ac1a05d3f331c9a334aa194889156445a576551b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/select_subclass.html.twig"));

        $__internal_39463e3f0d6920f4b69a2e91dffebe64275014986ddd3cf9fad657d7165a6c9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39463e3f0d6920f4b69a2e91dffebe64275014986ddd3cf9fad657d7165a6c9f->enter($__internal_39463e3f0d6920f4b69a2e91dffebe64275014986ddd3cf9fad657d7165a6c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/select_subclass.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1de60ae181177a35e6c41ad7ac1a05d3f331c9a334aa194889156445a576551b->leave($__internal_1de60ae181177a35e6c41ad7ac1a05d3f331c9a334aa194889156445a576551b_prof);

        
        $__internal_39463e3f0d6920f4b69a2e91dffebe64275014986ddd3cf9fad657d7165a6c9f->leave($__internal_39463e3f0d6920f4b69a2e91dffebe64275014986ddd3cf9fad657d7165a6c9f_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_553a4965c0c43c704b24a8e24e5ebc851f20f8b7d3387f65e84a814faebcac26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_553a4965c0c43c704b24a8e24e5ebc851f20f8b7d3387f65e84a814faebcac26->enter($__internal_553a4965c0c43c704b24a8e24e5ebc851f20f8b7d3387f65e84a814faebcac26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_04059023b1686ca26654d9006a5bc1035d34860833fcd9108a9276b0e3edb57a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04059023b1686ca26654d9006a5bc1035d34860833fcd9108a9276b0e3edb57a->enter($__internal_04059023b1686ca26654d9006a5bc1035d34860833fcd9108a9276b0e3edb57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_select_subclass", array(), "SonataAdminBundle"), "html", null, true);
        
        $__internal_04059023b1686ca26654d9006a5bc1035d34860833fcd9108a9276b0e3edb57a->leave($__internal_04059023b1686ca26654d9006a5bc1035d34860833fcd9108a9276b0e3edb57a_prof);

        
        $__internal_553a4965c0c43c704b24a8e24e5ebc851f20f8b7d3387f65e84a814faebcac26->leave($__internal_553a4965c0c43c704b24a8e24e5ebc851f20f8b7d3387f65e84a814faebcac26_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_b9a364cc837367083f4608bc36129882f1a84561aa7fde7e49b67d008a7d9193 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9a364cc837367083f4608bc36129882f1a84561aa7fde7e49b67d008a7d9193->enter($__internal_b9a364cc837367083f4608bc36129882f1a84561aa7fde7e49b67d008a7d9193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7970a48d6efbe17b15699f4b02260709911c425d0d329f31597349f78f400d94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7970a48d6efbe17b15699f4b02260709911c425d0d329f31597349f78f400d94->enter($__internal_7970a48d6efbe17b15699f4b02260709911c425d0d329f31597349f78f400d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_7970a48d6efbe17b15699f4b02260709911c425d0d329f31597349f78f400d94->leave($__internal_7970a48d6efbe17b15699f4b02260709911c425d0d329f31597349f78f400d94_prof);

        
        $__internal_b9a364cc837367083f4608bc36129882f1a84561aa7fde7e49b67d008a7d9193->leave($__internal_b9a364cc837367083f4608bc36129882f1a84561aa7fde7e49b67d008a7d9193_prof);

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
