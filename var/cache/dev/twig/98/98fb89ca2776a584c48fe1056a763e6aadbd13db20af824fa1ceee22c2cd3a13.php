<?php

/* @SonataBlock/Block/block_side_menu_template.html.twig */
class __TwigTemplate_deb9c185158045cb1be0007ab0b9ae5170a9f465b805e10b75f06ebcb41febe5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "@SonataBlock/Block/block_side_menu_template.html.twig", 12);
        $this->blocks = array(
            'list' => array($this, 'block_list'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9cdc697e08d70ee8f5f1d6f778928c45f4401018c3d891771a8d15d3b53c3fe3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cdc697e08d70ee8f5f1d6f778928c45f4401018c3d891771a8d15d3b53c3fe3->enter($__internal_9cdc697e08d70ee8f5f1d6f778928c45f4401018c3d891771a8d15d3b53c3fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_side_menu_template.html.twig"));

        $__internal_d05e8e3f62b88a6b026f414a4092107c7c2b186592aa15daf5b9c51625ac0e4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d05e8e3f62b88a6b026f414a4092107c7c2b186592aa15daf5b9c51625ac0e4b->enter($__internal_d05e8e3f62b88a6b026f414a4092107c7c2b186592aa15daf5b9c51625ac0e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_side_menu_template.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cdc697e08d70ee8f5f1d6f778928c45f4401018c3d891771a8d15d3b53c3fe3->leave($__internal_9cdc697e08d70ee8f5f1d6f778928c45f4401018c3d891771a8d15d3b53c3fe3_prof);

        
        $__internal_d05e8e3f62b88a6b026f414a4092107c7c2b186592aa15daf5b9c51625ac0e4b->leave($__internal_d05e8e3f62b88a6b026f414a4092107c7c2b186592aa15daf5b9c51625ac0e4b_prof);

    }

    // line 14
    public function block_list($context, array $blocks = array())
    {
        $__internal_caf0da26e632c7c5c585f9a6d8f19ae165a4746321c45b78bea49dd07c25af49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caf0da26e632c7c5c585f9a6d8f19ae165a4746321c45b78bea49dd07c25af49->enter($__internal_caf0da26e632c7c5c585f9a6d8f19ae165a4746321c45b78bea49dd07c25af49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_d7a93f7b3fa987c10f07a600894e92f83f702b8f5a9c1c435c9ca05e380b5b9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7a93f7b3fa987c10f07a600894e92f83f702b8f5a9c1c435c9ca05e380b5b9a->enter($__internal_d7a93f7b3fa987c10f07a600894e92f83f702b8f5a9c1c435c9ca05e380b5b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 15
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "@SonataBlock/Block/block_side_menu_template.html.twig", 15);
        // line 16
        echo "    ";
        if ((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 17
            echo "        <div";
            echo $context["macros"]->getattributes(($context["listAttributes"] ?? $this->getContext($context, "listAttributes")));
            echo ">
            ";
            // line 18
            $this->displayBlock("children", $context, $blocks);
            echo "
        </div>
    ";
        }
        
        $__internal_d7a93f7b3fa987c10f07a600894e92f83f702b8f5a9c1c435c9ca05e380b5b9a->leave($__internal_d7a93f7b3fa987c10f07a600894e92f83f702b8f5a9c1c435c9ca05e380b5b9a_prof);

        
        $__internal_caf0da26e632c7c5c585f9a6d8f19ae165a4746321c45b78bea49dd07c25af49->leave($__internal_caf0da26e632c7c5c585f9a6d8f19ae165a4746321c45b78bea49dd07c25af49_prof);

    }

    // line 23
    public function block_item($context, array $blocks = array())
    {
        $__internal_2968841fa9dc2edb2a45323395317c83835724c437c5a7f99884c0424663f6d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2968841fa9dc2edb2a45323395317c83835724c437c5a7f99884c0424663f6d6->enter($__internal_2968841fa9dc2edb2a45323395317c83835724c437c5a7f99884c0424663f6d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_5477a56a2396212f52ea6d8d859a0efd9a6e9106028005943441570f55055c0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5477a56a2396212f52ea6d8d859a0efd9a6e9106028005943441570f55055c0c->enter($__internal_5477a56a2396212f52ea6d8d859a0efd9a6e9106028005943441570f55055c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 24
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "@SonataBlock/Block/block_side_menu_template.html.twig", 24);
        // line 25
        echo "    ";
        if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayed", array())) {
            // line 26
            echo "        ";
            // line 27
            $context["classes"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 28
            if ($this->getAttribute(($context["matcher"] ?? $this->getContext($context, "matcher")), "isCurrent", array(0 => ($context["item"] ?? $this->getContext($context, "item"))), "method")) {
                // line 29
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentClass", array())));
            } elseif ($this->getAttribute(            // line 30
($context["matcher"] ?? $this->getContext($context, "matcher")), "isAncestor", array(0 => ($context["item"] ?? $this->getContext($context, "item")), 1 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array())), "method")) {
                // line 31
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "ancestorClass", array())));
            }
            // line 33
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 34
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 36
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 37
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 39
            $context["attributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attributes", array());
            // line 40
            if ( !twig_test_empty(($context["classes"] ?? $this->getContext($context, "classes")))) {
                // line 41
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? $this->getContext($context, "attributes")), array("class" => twig_join_filter(($context["classes"] ?? $this->getContext($context, "classes")), " ")));
            }
            // line 43
            echo "        ";
            // line 44
            if (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "current", array()) || $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 45
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 47
                echo "            ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 49
            echo "        ";
            // line 50
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 51
            $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()))));
            // line 52
            $context["listAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), " ")));
            // line 53
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_5477a56a2396212f52ea6d8d859a0efd9a6e9106028005943441570f55055c0c->leave($__internal_5477a56a2396212f52ea6d8d859a0efd9a6e9106028005943441570f55055c0c_prof);

        
        $__internal_2968841fa9dc2edb2a45323395317c83835724c437c5a7f99884c0424663f6d6->leave($__internal_2968841fa9dc2edb2a45323395317c83835724c437c5a7f99884c0424663f6d6_prof);

    }

    // line 57
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_067aeac9d1f75cf82d101dac33a38391a3a8bebfb8cf7d651d7b628ab84cd057 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_067aeac9d1f75cf82d101dac33a38391a3a8bebfb8cf7d651d7b628ab84cd057->enter($__internal_067aeac9d1f75cf82d101dac33a38391a3a8bebfb8cf7d651d7b628ab84cd057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_a93e4e7314b3e22924e3f7e894fa4702246d81d8e110a379bc790f5d7b418312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a93e4e7314b3e22924e3f7e894fa4702246d81d8e110a379bc790f5d7b418312->enter($__internal_a93e4e7314b3e22924e3f7e894fa4702246d81d8e110a379bc790f5d7b418312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $this->getAttribute(($context["macros"] ?? $this->getContext($context, "macros")), "attributes", array(0 => twig_array_merge(twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attributes", array()), $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "linkAttributes", array())), ($context["attributes"] ?? $this->getContext($context, "attributes")))), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
        
        $__internal_a93e4e7314b3e22924e3f7e894fa4702246d81d8e110a379bc790f5d7b418312->leave($__internal_a93e4e7314b3e22924e3f7e894fa4702246d81d8e110a379bc790f5d7b418312_prof);

        
        $__internal_067aeac9d1f75cf82d101dac33a38391a3a8bebfb8cf7d651d7b628ab84cd057->leave($__internal_067aeac9d1f75cf82d101dac33a38391a3a8bebfb8cf7d651d7b628ab84cd057_prof);

    }

    // line 59
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_64d7250f3f4bd7fa43cac2363d7397ec29129ce11a2bd553b3eb72ef1ff6e04d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64d7250f3f4bd7fa43cac2363d7397ec29129ce11a2bd553b3eb72ef1ff6e04d->enter($__internal_64d7250f3f4bd7fa43cac2363d7397ec29129ce11a2bd553b3eb72ef1ff6e04d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_2c8e8e2197b3f15e302002d1a433ae5c3f5f7632c0b95fd35a62828a1392414f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c8e8e2197b3f15e302002d1a433ae5c3f5f7632c0b95fd35a62828a1392414f->enter($__internal_2c8e8e2197b3f15e302002d1a433ae5c3f5f7632c0b95fd35a62828a1392414f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        echo "<div";
        echo $this->getAttribute(($context["macros"] ?? $this->getContext($context, "macros")), "attributes", array(0 => twig_array_merge(twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attributes", array()), $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "labelAttributes", array())), ($context["attributes"] ?? $this->getContext($context, "attributes")))), "method");
        echo "><h4 class=\"list-group-item-heading\">";
        $this->displayBlock("label", $context, $blocks);
        echo "</h4></div>";
        
        $__internal_2c8e8e2197b3f15e302002d1a433ae5c3f5f7632c0b95fd35a62828a1392414f->leave($__internal_2c8e8e2197b3f15e302002d1a433ae5c3f5f7632c0b95fd35a62828a1392414f_prof);

        
        $__internal_64d7250f3f4bd7fa43cac2363d7397ec29129ce11a2bd553b3eb72ef1ff6e04d->leave($__internal_64d7250f3f4bd7fa43cac2363d7397ec29129ce11a2bd553b3eb72ef1ff6e04d_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_side_menu_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 59,  154 => 57,  140 => 53,  138 => 52,  136 => 51,  134 => 50,  132 => 49,  128 => 47,  124 => 45,  122 => 44,  120 => 43,  117 => 41,  115 => 40,  113 => 39,  110 => 37,  108 => 36,  105 => 34,  103 => 33,  100 => 31,  98 => 30,  96 => 29,  94 => 28,  92 => 27,  90 => 26,  87 => 25,  85 => 24,  76 => 23,  62 => 18,  57 => 17,  54 => 16,  52 => 15,  43 => 14,  11 => 12,);
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

{% extends 'knp_menu.html.twig' %}

{% block list %}
{% import 'knp_menu.html.twig' as macros %}
    {% if item.hasChildren and options.depth is not same as(0) and item.displayChildren %}
        <div{{ macros.attributes(listAttributes) }}>
            {{ block('children') }}
        </div>
    {% endif %}
{% endblock %}

{% block item %}
{% import 'knp_menu.html.twig' as macros %}
    {% if item.displayed %}
        {# building the class of the item #}
        {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}
        {%- if matcher.isCurrent(item) %}
            {%- set classes = classes|merge([options.currentClass]) %}
        {%- elseif matcher.isAncestor(item, options.depth) %}
            {%- set classes = classes|merge([options.ancestorClass]) %}
        {%- endif %}
        {%- if item.actsLikeFirst %}
            {%- set classes = classes|merge([options.firstClass]) %}
        {%- endif %}
        {%- if item.actsLikeLast %}
            {%- set classes = classes|merge([options.lastClass]) %}
        {%- endif %}
        {%- set attributes = item.attributes %}
        {%- if classes is not empty %}
            {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
        {%- endif %}
        {# displaying the item #}
        {%- if item.uri is not empty and (not item.current or options.currentAsLink) %}
            {{ block('linkElement') }}
        {%- else %}
            {{ block('spanElement') }}
        {%- endif %}
        {# render the list of children#}
        {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
        {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}
        {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}
        {{ block('list') }}
    {% endif %}
{% endblock %}

{% block linkElement %}<a href=\"{{ item.uri }}\"{{ macros.attributes(item.attributes|merge(item.linkAttributes)|merge(attributes)) }}>{{ block('label') }}</a>{% endblock %}

{% block spanElement %}<div{{ macros.attributes(item.attributes|merge(item.labelAttributes)|merge(attributes)) }}><h4 class=\"list-group-item-heading\">{{ block('label') }}</h4></div>{% endblock %}
", "@SonataBlock/Block/block_side_menu_template.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/block-bundle/Resources/views/Block/block_side_menu_template.html.twig");
    }
}
