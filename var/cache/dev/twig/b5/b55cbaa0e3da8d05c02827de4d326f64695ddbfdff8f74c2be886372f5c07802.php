<?php

/* @SonataAdmin/Core/search.html.twig */
class __TwigTemplate_570c093b0bac142dd4cf8da40906b71fc570d32af1eadf6efe633458784e2b76 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/Core/search.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_67f064b9b1e25ca176cf7e7401939c99d9ac3893f5b16d34c42745ea7e6b4f15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67f064b9b1e25ca176cf7e7401939c99d9ac3893f5b16d34c42745ea7e6b4f15->enter($__internal_67f064b9b1e25ca176cf7e7401939c99d9ac3893f5b16d34c42745ea7e6b4f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/search.html.twig"));

        $__internal_bac35acc234b190ad566bc8818913c869710dd76327f33fd2c10cc90213979c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bac35acc234b190ad566bc8818913c869710dd76327f33fd2c10cc90213979c7->enter($__internal_bac35acc234b190ad566bc8818913c869710dd76327f33fd2c10cc90213979c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/search.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67f064b9b1e25ca176cf7e7401939c99d9ac3893f5b16d34c42745ea7e6b4f15->leave($__internal_67f064b9b1e25ca176cf7e7401939c99d9ac3893f5b16d34c42745ea7e6b4f15_prof);

        
        $__internal_bac35acc234b190ad566bc8818913c869710dd76327f33fd2c10cc90213979c7->leave($__internal_bac35acc234b190ad566bc8818913c869710dd76327f33fd2c10cc90213979c7_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba13058d37720d200a0765501779768e13ee44cd908491fc852c036a07f98fcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba13058d37720d200a0765501779768e13ee44cd908491fc852c036a07f98fcc->enter($__internal_ba13058d37720d200a0765501779768e13ee44cd908491fc852c036a07f98fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1776f94d969e022f428c6c353550205fb4f9bbd979ff20916698c87de49f91ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1776f94d969e022f428c6c353550205fb4f9bbd979ff20916698c87de49f91ae->enter($__internal_1776f94d969e022f428c6c353550205fb4f9bbd979ff20916698c87de49f91ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_search_results", array("%query%" => (isset($context["query"]) ? $context["query"] : $this->getContext($context, "query"))), "SonataAdminBundle"), "html", null, true);
        
        $__internal_1776f94d969e022f428c6c353550205fb4f9bbd979ff20916698c87de49f91ae->leave($__internal_1776f94d969e022f428c6c353550205fb4f9bbd979ff20916698c87de49f91ae_prof);

        
        $__internal_ba13058d37720d200a0765501779768e13ee44cd908491fc852c036a07f98fcc->leave($__internal_ba13058d37720d200a0765501779768e13ee44cd908491fc852c036a07f98fcc_prof);

    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_42fb3dba036e6ee450a88a68c27a0c5e3d7dbe74a18c939307534c3c18dd19ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42fb3dba036e6ee450a88a68c27a0c5e3d7dbe74a18c939307534c3c18dd19ea->enter($__internal_42fb3dba036e6ee450a88a68c27a0c5e3d7dbe74a18c939307534c3c18dd19ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_a465f57474f656a77d70b9f5817e0f2538f564c64cc0c4b4e3a8f9684375ef74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a465f57474f656a77d70b9f5817e0f2538f564c64cc0c4b4e3a8f9684375ef74->enter($__internal_a465f57474f656a77d70b9f5817e0f2538f564c64cc0c4b4e3a8f9684375ef74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        
        $__internal_a465f57474f656a77d70b9f5817e0f2538f564c64cc0c4b4e3a8f9684375ef74->leave($__internal_a465f57474f656a77d70b9f5817e0f2538f564c64cc0c4b4e3a8f9684375ef74_prof);

        
        $__internal_42fb3dba036e6ee450a88a68c27a0c5e3d7dbe74a18c939307534c3c18dd19ea->leave($__internal_42fb3dba036e6ee450a88a68c27a0c5e3d7dbe74a18c939307534c3c18dd19ea_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_5e8b8bee6be391073639b43d57ccf616fe91a580fc3062df729f2a6999925251 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e8b8bee6be391073639b43d57ccf616fe91a580fc3062df729f2a6999925251->enter($__internal_5e8b8bee6be391073639b43d57ccf616fe91a580fc3062df729f2a6999925251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c4635e059fb01f8587488bfffdfd3aa57e0546edb96c21b60877a584bdc53835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4635e059fb01f8587488bfffdfd3aa57e0546edb96c21b60877a584bdc53835->enter($__internal_c4635e059fb01f8587488bfffdfd3aa57e0546edb96c21b60877a584bdc53835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "    <h2 class=\"page-header\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_search_results", array("%query%" => (isset($context["query"]) ? $context["query"] : $this->getContext($context, "query"))), "SonataAdminBundle"), "html", null, true);
        echo "</h2>

    ";
        // line 19
        if ((array_key_exists("query", $context) &&  !((isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")) === false))) {
            // line 20
            echo "        ";
            $context["count"] = 0;
            // line 21
            echo "        <div class=\"row\">

        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 24
                echo "            ";
                $context["display"] = (twig_test_empty($this->getAttribute($context["group"], "roles", array())) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"));
                // line 25
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "roles", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ( !(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
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
                if ((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                    // line 30
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 31
                        echo "                    ";
                        $context["count"] = ((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) + 1);
                        // line 32
                        echo "                    ";
                        if ((($this->getAttribute($context["admin"], "hasRoute", array(0 => "create"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "CREATE"), "method")) || ($this->getAttribute($context["admin"], "hasRoute", array(0 => "list"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "LIST"), "method")))) {
                            // line 33
                            echo "                        ";
                            echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.admin.block.search_result"), array("query" =>                             // line 36
(isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "admin_code" => $this->getAttribute(                            // line 37
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
        
        $__internal_c4635e059fb01f8587488bfffdfd3aa57e0546edb96c21b60877a584bdc53835->leave($__internal_c4635e059fb01f8587488bfffdfd3aa57e0546edb96c21b60877a584bdc53835_prof);

        
        $__internal_5e8b8bee6be391073639b43d57ccf616fe91a580fc3062df729f2a6999925251->leave($__internal_5e8b8bee6be391073639b43d57ccf616fe91a580fc3062df729f2a6999925251_prof);

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
", "@SonataAdmin/Core/search.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/Core/search.html.twig");
    }
}
