<?php

/* @SonataAdmin/Pager/simple_pager_results.html.twig */
class __TwigTemplate_e6dcc545c6418e5d6a01a7734d195a04de5f3d037901c9a1227b4172693b001b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "@SonataAdmin/Pager/simple_pager_results.html.twig", 12);
        $this->blocks = array(
            'num_results' => array($this, 'block_num_results'),
            'num_pages' => array($this, 'block_num_pages'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5c909554d789ea41b0873303ea03ecd3d22998dd732c2ba4e2392ae31e5873f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5c909554d789ea41b0873303ea03ecd3d22998dd732c2ba4e2392ae31e5873f->enter($__internal_a5c909554d789ea41b0873303ea03ecd3d22998dd732c2ba4e2392ae31e5873f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Pager/simple_pager_results.html.twig"));

        $__internal_9f33dc513585a94153d8219500624dbc65757a30c215b73f246c03c61af796de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f33dc513585a94153d8219500624dbc65757a30c215b73f246c03c61af796de->enter($__internal_9f33dc513585a94153d8219500624dbc65757a30c215b73f246c03c61af796de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Pager/simple_pager_results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5c909554d789ea41b0873303ea03ecd3d22998dd732c2ba4e2392ae31e5873f->leave($__internal_a5c909554d789ea41b0873303ea03ecd3d22998dd732c2ba4e2392ae31e5873f_prof);

        
        $__internal_9f33dc513585a94153d8219500624dbc65757a30c215b73f246c03c61af796de->leave($__internal_9f33dc513585a94153d8219500624dbc65757a30c215b73f246c03c61af796de_prof);

    }

    // line 14
    public function block_num_results($context, array $blocks = array())
    {
        $__internal_7b843e153d6f5fdf6d642a69bb55d2c7ee09559f7d069256ea1a21820ab0ed2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b843e153d6f5fdf6d642a69bb55d2c7ee09559f7d069256ea1a21820ab0ed2f->enter($__internal_7b843e153d6f5fdf6d642a69bb55d2c7ee09559f7d069256ea1a21820ab0ed2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        $__internal_386fd1958c455ebe1c996b1073ed3f680eba497d5f4bbc566736dbd329240fff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_386fd1958c455ebe1c996b1073ed3f680eba497d5f4bbc566736dbd329240fff->enter($__internal_386fd1958c455ebe1c996b1073ed3f680eba497d5f4bbc566736dbd329240fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_results"));

        // line 15
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastPage", array()) != $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list_results_count_prefix", array(), "SonataAdminBundle"), "html", null, true);
            echo "
    ";
        }
        // line 18
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array())), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_386fd1958c455ebe1c996b1073ed3f680eba497d5f4bbc566736dbd329240fff->leave($__internal_386fd1958c455ebe1c996b1073ed3f680eba497d5f4bbc566736dbd329240fff_prof);

        
        $__internal_7b843e153d6f5fdf6d642a69bb55d2c7ee09559f7d069256ea1a21820ab0ed2f->leave($__internal_7b843e153d6f5fdf6d642a69bb55d2c7ee09559f7d069256ea1a21820ab0ed2f_prof);

    }

    // line 22
    public function block_num_pages($context, array $blocks = array())
    {
        $__internal_698fd913a4001fb4421a4f6f024c9580697c292ed10cc70581746404d7a3f2d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_698fd913a4001fb4421a4f6f024c9580697c292ed10cc70581746404d7a3f2d8->enter($__internal_698fd913a4001fb4421a4f6f024c9580697c292ed10cc70581746404d7a3f2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        $__internal_2f2db5ac2d870db8a11a810f59bc86b5c41a037ce04cfb0fe89a2703671c0535 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f2db5ac2d870db8a11a810f59bc86b5c41a037ce04cfb0fe89a2703671c0535->enter($__internal_2f2db5ac2d870db8a11a810f59bc86b5c41a037ce04cfb0fe89a2703671c0535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "num_pages"));

        // line 23
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()), "html", null, true);
        echo "
    /
    ";
        // line 25
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastPage", array()) != $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "page", array()))) {
            // line 26
            echo "        ?
    ";
        } else {
            // line 28
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastpage", array()), "html", null, true);
            echo "
    ";
        }
        // line 30
        echo "    &nbsp;-&nbsp;
";
        
        $__internal_2f2db5ac2d870db8a11a810f59bc86b5c41a037ce04cfb0fe89a2703671c0535->leave($__internal_2f2db5ac2d870db8a11a810f59bc86b5c41a037ce04cfb0fe89a2703671c0535_prof);

        
        $__internal_698fd913a4001fb4421a4f6f024c9580697c292ed10cc70581746404d7a3f2d8->leave($__internal_698fd913a4001fb4421a4f6f024c9580697c292ed10cc70581746404d7a3f2d8_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Pager/simple_pager_results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 30,  94 => 28,  90 => 26,  88 => 25,  82 => 23,  73 => 22,  62 => 19,  59 => 18,  53 => 16,  50 => 15,  41 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}

{% block num_results %}
    {% if admin.datagrid.pager.lastPage != admin.datagrid.pager.page %}
        {{ 'list_results_count_prefix'|trans({}, 'SonataAdminBundle') }}
    {% endif %}
    {% transchoice admin.datagrid.pager.nbresults with {'%count%': admin.datagrid.pager.nbresults} from 'SonataAdminBundle' %}list_results_count{% endtranschoice %}
    &nbsp;-&nbsp;
{% endblock %}

{% block num_pages %}
    {{ admin.datagrid.pager.page }}
    /
    {% if admin.datagrid.pager.lastPage != admin.datagrid.pager.page %}
        ?
    {% else %}
        {{ admin.datagrid.pager.lastpage }}
    {% endif %}
    &nbsp;-&nbsp;
{% endblock %}
", "@SonataAdmin/Pager/simple_pager_results.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/Pager/simple_pager_results.html.twig");
    }
}
