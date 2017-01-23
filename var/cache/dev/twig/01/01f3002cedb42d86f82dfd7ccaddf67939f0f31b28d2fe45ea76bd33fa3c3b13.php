<?php

/* @SonataBlock/Block/block_side_menu_template.html.twig */
class __TwigTemplate_9540a578cc17fb58ee5e97ebb39581b6f29af8ad1ebdc6812c653a8ab26e61c2 extends Twig_Template
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
        $__internal_ed03333490551f11c0ddf14f60375885a2fbf6e8dc11ee7e9a86beb868ef0476 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed03333490551f11c0ddf14f60375885a2fbf6e8dc11ee7e9a86beb868ef0476->enter($__internal_ed03333490551f11c0ddf14f60375885a2fbf6e8dc11ee7e9a86beb868ef0476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_side_menu_template.html.twig"));

        $__internal_4d39138a9378e8d3df52a05f96fbb7c41b7236607de42d6e259becc396acc69b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d39138a9378e8d3df52a05f96fbb7c41b7236607de42d6e259becc396acc69b->enter($__internal_4d39138a9378e8d3df52a05f96fbb7c41b7236607de42d6e259becc396acc69b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_side_menu_template.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed03333490551f11c0ddf14f60375885a2fbf6e8dc11ee7e9a86beb868ef0476->leave($__internal_ed03333490551f11c0ddf14f60375885a2fbf6e8dc11ee7e9a86beb868ef0476_prof);

        
        $__internal_4d39138a9378e8d3df52a05f96fbb7c41b7236607de42d6e259becc396acc69b->leave($__internal_4d39138a9378e8d3df52a05f96fbb7c41b7236607de42d6e259becc396acc69b_prof);

    }

    // line 14
    public function block_list($context, array $blocks = array())
    {
        $__internal_a1803d3dc7aec1dd6878ca6bf0fb28bac1232bdf8f0d895c506fa2fad08dbd18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1803d3dc7aec1dd6878ca6bf0fb28bac1232bdf8f0d895c506fa2fad08dbd18->enter($__internal_a1803d3dc7aec1dd6878ca6bf0fb28bac1232bdf8f0d895c506fa2fad08dbd18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_1acdf592bef4f285004087196e437dd5afe7f7dd6c310cdf0ad6690788b86e26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1acdf592bef4f285004087196e437dd5afe7f7dd6c310cdf0ad6690788b86e26->enter($__internal_1acdf592bef4f285004087196e437dd5afe7f7dd6c310cdf0ad6690788b86e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

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
        
        $__internal_1acdf592bef4f285004087196e437dd5afe7f7dd6c310cdf0ad6690788b86e26->leave($__internal_1acdf592bef4f285004087196e437dd5afe7f7dd6c310cdf0ad6690788b86e26_prof);

        
        $__internal_a1803d3dc7aec1dd6878ca6bf0fb28bac1232bdf8f0d895c506fa2fad08dbd18->leave($__internal_a1803d3dc7aec1dd6878ca6bf0fb28bac1232bdf8f0d895c506fa2fad08dbd18_prof);

    }

    // line 23
    public function block_item($context, array $blocks = array())
    {
        $__internal_2690032f59fbbf958ac0895471ddee81d0cecd4cb4f153f036cc4bc63a3d8c8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2690032f59fbbf958ac0895471ddee81d0cecd4cb4f153f036cc4bc63a3d8c8f->enter($__internal_2690032f59fbbf958ac0895471ddee81d0cecd4cb4f153f036cc4bc63a3d8c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_3bec4c1655fbf508a7ece3ea47a5240e4013b07283f84067193b10c9b5255199 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bec4c1655fbf508a7ece3ea47a5240e4013b07283f84067193b10c9b5255199->enter($__internal_3bec4c1655fbf508a7ece3ea47a5240e4013b07283f84067193b10c9b5255199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

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
        
        $__internal_3bec4c1655fbf508a7ece3ea47a5240e4013b07283f84067193b10c9b5255199->leave($__internal_3bec4c1655fbf508a7ece3ea47a5240e4013b07283f84067193b10c9b5255199_prof);

        
        $__internal_2690032f59fbbf958ac0895471ddee81d0cecd4cb4f153f036cc4bc63a3d8c8f->leave($__internal_2690032f59fbbf958ac0895471ddee81d0cecd4cb4f153f036cc4bc63a3d8c8f_prof);

    }

    // line 57
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_c6c1b8bab795bcb3c23e28d06453fc4e81eecd0b614039d627c723fff6808235 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6c1b8bab795bcb3c23e28d06453fc4e81eecd0b614039d627c723fff6808235->enter($__internal_c6c1b8bab795bcb3c23e28d06453fc4e81eecd0b614039d627c723fff6808235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_26d667de23e0440b9bf2f8e93703f0b4ff0318416c841dbf51bff5363d4634c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26d667de23e0440b9bf2f8e93703f0b4ff0318416c841dbf51bff5363d4634c0->enter($__internal_26d667de23e0440b9bf2f8e93703f0b4ff0318416c841dbf51bff5363d4634c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $this->getAttribute(($context["macros"] ?? $this->getContext($context, "macros")), "attributes", array(0 => twig_array_merge(twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attributes", array()), $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "linkAttributes", array())), ($context["attributes"] ?? $this->getContext($context, "attributes")))), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
        
        $__internal_26d667de23e0440b9bf2f8e93703f0b4ff0318416c841dbf51bff5363d4634c0->leave($__internal_26d667de23e0440b9bf2f8e93703f0b4ff0318416c841dbf51bff5363d4634c0_prof);

        
        $__internal_c6c1b8bab795bcb3c23e28d06453fc4e81eecd0b614039d627c723fff6808235->leave($__internal_c6c1b8bab795bcb3c23e28d06453fc4e81eecd0b614039d627c723fff6808235_prof);

    }

    // line 59
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_58c9c91b5fc0edbf8d7776807af77af52f30180d1d3a2e0cb04a6e0f758c20e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58c9c91b5fc0edbf8d7776807af77af52f30180d1d3a2e0cb04a6e0f758c20e5->enter($__internal_58c9c91b5fc0edbf8d7776807af77af52f30180d1d3a2e0cb04a6e0f758c20e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_5f8d802060745e88d2bc36824a824297c0b2b3769a7c427d6c860467abf081cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f8d802060745e88d2bc36824a824297c0b2b3769a7c427d6c860467abf081cf->enter($__internal_5f8d802060745e88d2bc36824a824297c0b2b3769a7c427d6c860467abf081cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        echo "<div";
        echo $this->getAttribute(($context["macros"] ?? $this->getContext($context, "macros")), "attributes", array(0 => twig_array_merge(twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attributes", array()), $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "labelAttributes", array())), ($context["attributes"] ?? $this->getContext($context, "attributes")))), "method");
        echo "><h4 class=\"list-group-item-heading\">";
        $this->displayBlock("label", $context, $blocks);
        echo "</h4></div>";
        
        $__internal_5f8d802060745e88d2bc36824a824297c0b2b3769a7c427d6c860467abf081cf->leave($__internal_5f8d802060745e88d2bc36824a824297c0b2b3769a7c427d6c860467abf081cf_prof);

        
        $__internal_58c9c91b5fc0edbf8d7776807af77af52f30180d1d3a2e0cb04a6e0f758c20e5->leave($__internal_58c9c91b5fc0edbf8d7776807af77af52f30180d1d3a2e0cb04a6e0f758c20e5_prof);

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
