<?php

/* @SonataAdmin/Core/search.html.twig */
class __TwigTemplate_dc833185bb95393df50d7ec351536560267deed2650c84682cee32d40df75693 extends Twig_Template
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
        $__internal_10742fb96fdf4c75dcac327bb8aef4987e36a1109059cdee0877628d4236e25e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10742fb96fdf4c75dcac327bb8aef4987e36a1109059cdee0877628d4236e25e->enter($__internal_10742fb96fdf4c75dcac327bb8aef4987e36a1109059cdee0877628d4236e25e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/search.html.twig"));

        $__internal_891c088dbff2665bd4718075100f0fb8e33f1f9e25379192ef5df781047d5dc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_891c088dbff2665bd4718075100f0fb8e33f1f9e25379192ef5df781047d5dc5->enter($__internal_891c088dbff2665bd4718075100f0fb8e33f1f9e25379192ef5df781047d5dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/search.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10742fb96fdf4c75dcac327bb8aef4987e36a1109059cdee0877628d4236e25e->leave($__internal_10742fb96fdf4c75dcac327bb8aef4987e36a1109059cdee0877628d4236e25e_prof);

        
        $__internal_891c088dbff2665bd4718075100f0fb8e33f1f9e25379192ef5df781047d5dc5->leave($__internal_891c088dbff2665bd4718075100f0fb8e33f1f9e25379192ef5df781047d5dc5_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_e874fbb718555416c595f1d9f59c4f110018ce25d0c3b7097d8c96acaa2e8f4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e874fbb718555416c595f1d9f59c4f110018ce25d0c3b7097d8c96acaa2e8f4f->enter($__internal_e874fbb718555416c595f1d9f59c4f110018ce25d0c3b7097d8c96acaa2e8f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_567795920b19db0eeab27ea69842cdfaaaf851a5dd4b451ca39cabfa022ce927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_567795920b19db0eeab27ea69842cdfaaaf851a5dd4b451ca39cabfa022ce927->enter($__internal_567795920b19db0eeab27ea69842cdfaaaf851a5dd4b451ca39cabfa022ce927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_search_results", array("%query%" => ($context["query"] ?? $this->getContext($context, "query"))), "SonataAdminBundle"), "html", null, true);
        
        $__internal_567795920b19db0eeab27ea69842cdfaaaf851a5dd4b451ca39cabfa022ce927->leave($__internal_567795920b19db0eeab27ea69842cdfaaaf851a5dd4b451ca39cabfa022ce927_prof);

        
        $__internal_e874fbb718555416c595f1d9f59c4f110018ce25d0c3b7097d8c96acaa2e8f4f->leave($__internal_e874fbb718555416c595f1d9f59c4f110018ce25d0c3b7097d8c96acaa2e8f4f_prof);

    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_a331f6ce915ff518a7a64fe9552e03b1d01abff110e533c0543f6c1ce31dce18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a331f6ce915ff518a7a64fe9552e03b1d01abff110e533c0543f6c1ce31dce18->enter($__internal_a331f6ce915ff518a7a64fe9552e03b1d01abff110e533c0543f6c1ce31dce18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_0aa04289e5b042c42158ba9670354bd61b758170e499ead7174b88f0852c5a3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aa04289e5b042c42158ba9670354bd61b758170e499ead7174b88f0852c5a3a->enter($__internal_0aa04289e5b042c42158ba9670354bd61b758170e499ead7174b88f0852c5a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_0aa04289e5b042c42158ba9670354bd61b758170e499ead7174b88f0852c5a3a->leave($__internal_0aa04289e5b042c42158ba9670354bd61b758170e499ead7174b88f0852c5a3a_prof);

        
        $__internal_a331f6ce915ff518a7a64fe9552e03b1d01abff110e533c0543f6c1ce31dce18->leave($__internal_a331f6ce915ff518a7a64fe9552e03b1d01abff110e533c0543f6c1ce31dce18_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_2e1027d08e2c5083eee56ce46461394d483059f0dd931db3b5a6714c3b4bd6d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e1027d08e2c5083eee56ce46461394d483059f0dd931db3b5a6714c3b4bd6d3->enter($__internal_2e1027d08e2c5083eee56ce46461394d483059f0dd931db3b5a6714c3b4bd6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_33aafdd762840c5b5f936062dbb2ecb2e73a8d27d965682d2fcbb16a813cc5e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33aafdd762840c5b5f936062dbb2ecb2e73a8d27d965682d2fcbb16a813cc5e8->enter($__internal_33aafdd762840c5b5f936062dbb2ecb2e73a8d27d965682d2fcbb16a813cc5e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_33aafdd762840c5b5f936062dbb2ecb2e73a8d27d965682d2fcbb16a813cc5e8->leave($__internal_33aafdd762840c5b5f936062dbb2ecb2e73a8d27d965682d2fcbb16a813cc5e8_prof);

        
        $__internal_2e1027d08e2c5083eee56ce46461394d483059f0dd931db3b5a6714c3b4bd6d3->leave($__internal_2e1027d08e2c5083eee56ce46461394d483059f0dd931db3b5a6714c3b4bd6d3_prof);

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
