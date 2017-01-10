<?php

/* @SonataAdmin/Core/search.html.twig */
class __TwigTemplate_f9e75d204b1b8a916538b25c0da3f4515387fb9af9a49104646521878b96579b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "@SonataAdmin/Core/search.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1bd3568d41c931be336ceca144f1f025c5b60208a23fe7c99b4a5171f00b2f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1bd3568d41c931be336ceca144f1f025c5b60208a23fe7c99b4a5171f00b2f7->enter($__internal_d1bd3568d41c931be336ceca144f1f025c5b60208a23fe7c99b4a5171f00b2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/search.html.twig"));

        $__internal_f61a23d9ce808ca4f786bdfe797302b5017e4249247dfbcfe393c7eceb7bb856 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f61a23d9ce808ca4f786bdfe797302b5017e4249247dfbcfe393c7eceb7bb856->enter($__internal_f61a23d9ce808ca4f786bdfe797302b5017e4249247dfbcfe393c7eceb7bb856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/search.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1bd3568d41c931be336ceca144f1f025c5b60208a23fe7c99b4a5171f00b2f7->leave($__internal_d1bd3568d41c931be336ceca144f1f025c5b60208a23fe7c99b4a5171f00b2f7_prof);

        
        $__internal_f61a23d9ce808ca4f786bdfe797302b5017e4249247dfbcfe393c7eceb7bb856->leave($__internal_f61a23d9ce808ca4f786bdfe797302b5017e4249247dfbcfe393c7eceb7bb856_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_848abef160a9f1ca79466d9faf18c5225bb322a2d2f76e8bb50335d275fbb11e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_848abef160a9f1ca79466d9faf18c5225bb322a2d2f76e8bb50335d275fbb11e->enter($__internal_848abef160a9f1ca79466d9faf18c5225bb322a2d2f76e8bb50335d275fbb11e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_91b757d4ae7766de8a76742da0c9fd9ad77577030700f2f671116d5a2df9cf0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91b757d4ae7766de8a76742da0c9fd9ad77577030700f2f671116d5a2df9cf0a->enter($__internal_91b757d4ae7766de8a76742da0c9fd9ad77577030700f2f671116d5a2df9cf0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_search_results", array("%query%" => ($context["query"] ?? $this->getContext($context, "query"))), "SonataAdminBundle"), "html", null, true);
        
        $__internal_91b757d4ae7766de8a76742da0c9fd9ad77577030700f2f671116d5a2df9cf0a->leave($__internal_91b757d4ae7766de8a76742da0c9fd9ad77577030700f2f671116d5a2df9cf0a_prof);

        
        $__internal_848abef160a9f1ca79466d9faf18c5225bb322a2d2f76e8bb50335d275fbb11e->leave($__internal_848abef160a9f1ca79466d9faf18c5225bb322a2d2f76e8bb50335d275fbb11e_prof);

    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_6047966b5d74a8891a67d1a30f8b1f7eeb8e44b893926bd5a2577254d169d579 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6047966b5d74a8891a67d1a30f8b1f7eeb8e44b893926bd5a2577254d169d579->enter($__internal_6047966b5d74a8891a67d1a30f8b1f7eeb8e44b893926bd5a2577254d169d579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_a22670c4a8ee07033c33c1d4fb9eddae12c9e95c6872a2aa932d718c231914e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a22670c4a8ee07033c33c1d4fb9eddae12c9e95c6872a2aa932d718c231914e6->enter($__internal_a22670c4a8ee07033c33c1d4fb9eddae12c9e95c6872a2aa932d718c231914e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_a22670c4a8ee07033c33c1d4fb9eddae12c9e95c6872a2aa932d718c231914e6->leave($__internal_a22670c4a8ee07033c33c1d4fb9eddae12c9e95c6872a2aa932d718c231914e6_prof);

        
        $__internal_6047966b5d74a8891a67d1a30f8b1f7eeb8e44b893926bd5a2577254d169d579->leave($__internal_6047966b5d74a8891a67d1a30f8b1f7eeb8e44b893926bd5a2577254d169d579_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_6118c24750b2a0ad036b966f7e7a501b1d0d363dd7ff09b2b27bafe2927fd09b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6118c24750b2a0ad036b966f7e7a501b1d0d363dd7ff09b2b27bafe2927fd09b->enter($__internal_6118c24750b2a0ad036b966f7e7a501b1d0d363dd7ff09b2b27bafe2927fd09b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e64416d1100ccafd23e0cd8fd189424020f3e0943da7fbaf73807c1466c33217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e64416d1100ccafd23e0cd8fd189424020f3e0943da7fbaf73807c1466c33217->enter($__internal_e64416d1100ccafd23e0cd8fd189424020f3e0943da7fbaf73807c1466c33217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "    <h2 class=\"page-header\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_search_results", array("%query%" => ($context["query"] ?? $this->getContext($context, "query"))), "SonataAdminBundle"), "html", null, true);
        echo "</h2>

    ";
        // line 19
        if ((array_key_exists("query", $context) &&  !(($context["query"] ?? $this->getContext($context, "query")) === false))) {
            // line 20
            echo "        ";
            $context["count"] = 0;
            // line 21
            echo "        <div class=\"row\">

        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? $this->getContext($context, "groups")));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 24
                echo "            ";
                $context["display"] = (twig_test_empty($this->getAttribute($context["group"], "roles", array())) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"));
                // line 25
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "roles", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ( !($context["display"] ?? $this->getContext($context, "display"))) {
                        // line 26
                        echo "                ";
                        $context["display"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($context["role"]);
                        // line 27
                        echo "            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "
            ";
                // line 29
                if (($context["display"] ?? $this->getContext($context, "display"))) {
                    // line 30
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 31
                        echo "                    ";
                        $context["count"] = (($context["count"] ?? $this->getContext($context, "count")) + 1);
                        // line 32
                        echo "                    ";
                        if ((($this->getAttribute($context["admin"], "hasRoute", array(0 => "create"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "CREATE"), "method")) || ($this->getAttribute($context["admin"], "hasRoute", array(0 => "list"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "LIST"), "method")))) {
                            // line 33
                            echo "                        ";
                            echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.admin.block.search_result"), array("query" =>                             // line 36
($context["query"] ?? $this->getContext($context, "query")), "admin_code" => $this->getAttribute(                            // line 37
$context["admin"], "code", array()), "page" => 0, "per_page" => 10, "icon" => $this->getAttribute(                            // line 40
$context["group"], "icon", array()))));
                            // line 41
                            echo "
                    ";
                        }
                        // line 43
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 44
                    echo "            ";
                }
                // line 45
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "        </div>
    ";
        }
        // line 48
        echo "
";
        
        $__internal_e64416d1100ccafd23e0cd8fd189424020f3e0943da7fbaf73807c1466c33217->leave($__internal_e64416d1100ccafd23e0cd8fd189424020f3e0943da7fbaf73807c1466c33217_prof);

        
        $__internal_6118c24750b2a0ad036b966f7e7a501b1d0d363dd7ff09b2b27bafe2927fd09b->leave($__internal_6118c24750b2a0ad036b966f7e7a501b1d0d363dd7ff09b2b27bafe2927fd09b_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Core/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 48,  164 => 46,  158 => 45,  155 => 44,  149 => 43,  145 => 41,  143 => 40,  142 => 37,  141 => 36,  139 => 33,  136 => 32,  133 => 31,  128 => 30,  126 => 29,  123 => 28,  116 => 27,  113 => 26,  107 => 25,  104 => 24,  100 => 23,  96 => 21,  93 => 20,  91 => 19,  85 => 17,  76 => 16,  59 => 15,  41 => 14,  20 => 12,);
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

{% block title %}{{ 'title_search_results'|trans({'%query%': query}, 'SonataAdminBundle') }}{% endblock %}
{% block breadcrumb %}{% endblock %}
{% block content %}
    <h2 class=\"page-header\">{{ 'title_search_results'|trans({'%query%': query}, 'SonataAdminBundle') }}</h2>

    {% if query is defined and query is not same as(false) %}
        {% set count = 0 %}
        <div class=\"row\">

        {% for group in groups %}
            {% set display = (group.roles is empty or is_granted('ROLE_SUPER_ADMIN') ) %}
            {% for role in group.roles if not display %}
                {% set display = is_granted(role) %}
            {% endfor %}

            {% if display %}
                {% for admin in group.items %}
                    {% set count = count + 1 %}
                    {% if admin.hasRoute('create') and admin.isGranted('CREATE') or admin.hasRoute('list') and admin.isGranted('LIST') %}
                        {{ sonata_block_render({
                            'type': 'sonata.admin.block.search_result'
                        }, {
                            'query': query,
                            'admin_code': admin.code,
                            'page': 0,
                            'per_page': 10,
                            'icon': group.icon
                        }) }}
                    {% endif %}
                {% endfor %}
            {% endif %}
        {% endfor %}
        </div>
    {% endif %}

{% endblock %}
", "@SonataAdmin/Core/search.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/Core/search.html.twig");
    }
}
