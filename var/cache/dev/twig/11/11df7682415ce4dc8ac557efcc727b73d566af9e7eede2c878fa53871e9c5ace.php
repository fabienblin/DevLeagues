<?php

/* @SonataAdmin/Menu/sonata_menu.html.twig */
class __TwigTemplate_cc68ad25b9de284ae364256b0a02f7571d3c954a4066181ff43bca63d23dd474 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "@SonataAdmin/Menu/sonata_menu.html.twig", 1);
        $this->blocks = array(
            'root' => array($this, 'block_root'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d5ce8b0063613fa5493cffaba51c34c3a9bdded0c72e1e476add5f751e13575 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d5ce8b0063613fa5493cffaba51c34c3a9bdded0c72e1e476add5f751e13575->enter($__internal_0d5ce8b0063613fa5493cffaba51c34c3a9bdded0c72e1e476add5f751e13575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Menu/sonata_menu.html.twig"));

        $__internal_5f8102fc573ef128c030e1f1544d4efae6be8b574fff5ef56ba0fda695eaae08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f8102fc573ef128c030e1f1544d4efae6be8b574fff5ef56ba0fda695eaae08->enter($__internal_5f8102fc573ef128c030e1f1544d4efae6be8b574fff5ef56ba0fda695eaae08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Menu/sonata_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d5ce8b0063613fa5493cffaba51c34c3a9bdded0c72e1e476add5f751e13575->leave($__internal_0d5ce8b0063613fa5493cffaba51c34c3a9bdded0c72e1e476add5f751e13575_prof);

        
        $__internal_5f8102fc573ef128c030e1f1544d4efae6be8b574fff5ef56ba0fda695eaae08->leave($__internal_5f8102fc573ef128c030e1f1544d4efae6be8b574fff5ef56ba0fda695eaae08_prof);

    }

    // line 3
    public function block_root($context, array $blocks = array())
    {
        $__internal_383abea768bde4a0d8debe027327af959b9f4a7938f163e84c0de8d6be8a1ef9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_383abea768bde4a0d8debe027327af959b9f4a7938f163e84c0de8d6be8a1ef9->enter($__internal_383abea768bde4a0d8debe027327af959b9f4a7938f163e84c0de8d6be8a1ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_171e40e5bb349f53847c264fc14be371c71ffd41976e68ca83e9143ecbbdf956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_171e40e5bb349f53847c264fc14be371c71ffd41976e68ca83e9143ecbbdf956->enter($__internal_171e40e5bb349f53847c264fc14be371c71ffd41976e68ca83e9143ecbbdf956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 4
        $context["listAttributes"] = twig_array_merge($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => "sidebar-menu"));
        // line 5
        $context["request"] = (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "request"), "method")) ? ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "request"), "method")) : ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array())));
        // line 6
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_171e40e5bb349f53847c264fc14be371c71ffd41976e68ca83e9143ecbbdf956->leave($__internal_171e40e5bb349f53847c264fc14be371c71ffd41976e68ca83e9143ecbbdf956_prof);

        
        $__internal_383abea768bde4a0d8debe027327af959b9f4a7938f163e84c0de8d6be8a1ef9->leave($__internal_383abea768bde4a0d8debe027327af959b9f4a7938f163e84c0de8d6be8a1ef9_prof);

    }

    // line 9
    public function block_item($context, array $blocks = array())
    {
        $__internal_d042fbe3e3f3067fd485edd385379fe02c2167dc58b7ab1a9b17746395ae0a2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d042fbe3e3f3067fd485edd385379fe02c2167dc58b7ab1a9b17746395ae0a2d->enter($__internal_d042fbe3e3f3067fd485edd385379fe02c2167dc58b7ab1a9b17746395ae0a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_98d5fc9a97d85752a479812859647ccba4af61ae40f2c6a5dd35aaaf264242ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98d5fc9a97d85752a479812859647ccba4af61ae40f2c6a5dd35aaaf264242ea->enter($__internal_98d5fc9a97d85752a479812859647ccba4af61ae40f2c6a5dd35aaaf264242ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 10
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed", array())) {
            // line 12
            $context["display"] = (twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "roles"), "method")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"));
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "roles"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ( !(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                    // line 14
                    $context["display"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($context["role"]);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 18
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed", array()) && ((array_key_exists("display", $context)) ? (_twig_default_filter((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")))) : ("")))) {
            // line 19
            echo "        ";
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("branch_class" => "treeview", "currentClass" => "active"));
            // line 20
            $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "setChildrenAttribute", array(0 => "class", 1 => trim(($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method") . " active"))), "method");
            // line 21
            $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "setChildrenAttribute", array(0 => "class", 1 => trim(($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method") . " treeview-menu"))), "method");
            // line 22
            echo "        ";
            $this->displayParentBlock("item", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_98d5fc9a97d85752a479812859647ccba4af61ae40f2c6a5dd35aaaf264242ea->leave($__internal_98d5fc9a97d85752a479812859647ccba4af61ae40f2c6a5dd35aaaf264242ea_prof);

        
        $__internal_d042fbe3e3f3067fd485edd385379fe02c2167dc58b7ab1a9b17746395ae0a2d->leave($__internal_d042fbe3e3f3067fd485edd385379fe02c2167dc58b7ab1a9b17746395ae0a2d_prof);

    }

    // line 26
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_ec1acbb303b3a7f7d3932bdb1259406b5f92aa123eb419a49ba61c5c0538db41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec1acbb303b3a7f7d3932bdb1259406b5f92aa123eb419a49ba61c5c0538db41->enter($__internal_ec1acbb303b3a7f7d3932bdb1259406b5f92aa123eb419a49ba61c5c0538db41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_438cac9752428f80f1291118bb66a00b95cc6607c7b1f3015a0f0d496fc0a583 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_438cac9752428f80f1291118bb66a00b95cc6607c7b1f3015a0f0d496fc0a583->enter($__internal_438cac9752428f80f1291118bb66a00b95cc6607c7b1f3015a0f0d496fc0a583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        ";
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", array(0 => "on_top"), "method", true, true) &&  !$this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "on_top"), "method"))) {
            // line 29
            echo "            ";
            $context["translation_domain"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "translation_domain", 1 => "messages"), "method");
            // line 30
            echo "            ";
            $context["icon"] = (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", array(0 => "icon"), "method", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "attribute", array(0 => "icon"), "method"), ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()) > 1)) ? ("<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>") : ("")))) : (((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()) > 1)) ? ("<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>") : (""))));
            // line 31
            echo "        ";
        } else {
            // line 32
            echo "            ";
            $context["icon"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "icon"), "method");
            // line 33
            echo "        ";
        }
        // line 34
        echo "        ";
        $context["is_link"] = true;
        // line 35
        echo "        ";
        $this->displayParentBlock("linkElement", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_438cac9752428f80f1291118bb66a00b95cc6607c7b1f3015a0f0d496fc0a583->leave($__internal_438cac9752428f80f1291118bb66a00b95cc6607c7b1f3015a0f0d496fc0a583_prof);

        
        $__internal_ec1acbb303b3a7f7d3932bdb1259406b5f92aa123eb419a49ba61c5c0538db41->leave($__internal_ec1acbb303b3a7f7d3932bdb1259406b5f92aa123eb419a49ba61c5c0538db41_prof);

    }

    // line 39
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_1bc307034df8fc3c04b5842cedadcf40c34cff420b4136423c87c486bb5dcbaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bc307034df8fc3c04b5842cedadcf40c34cff420b4136423c87c486bb5dcbaa->enter($__internal_1bc307034df8fc3c04b5842cedadcf40c34cff420b4136423c87c486bb5dcbaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_bd34784009e9d7ef4ebb69112bbb32e45e5cdb80d02758bfc7dd0f9aa8438960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd34784009e9d7ef4ebb69112bbb32e45e5cdb80d02758bfc7dd0f9aa8438960->enter($__internal_bd34784009e9d7ef4ebb69112bbb32e45e5cdb80d02758bfc7dd0f9aa8438960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        // line 40
        echo "    ";
        ob_start();
        // line 41
        echo "        <a href=\"#\">
            ";
        // line 42
        $context["translation_domain"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "label_catalogue"), "method");
        // line 43
        echo "            ";
        $context["icon"] = (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", array(0 => "icon"), "method", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extra", array(0 => "icon"), "method"), "")) : (""));
        // line 44
        echo "            ";
        echo (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon"));
        echo "
            ";
        // line 45
        $this->displayParentBlock("spanElement", $context, $blocks);
        echo "
            <span class=\"pull-right-container\"><i class=\"fa pull-right fa-angle-left\"></i></span>
        </a>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_bd34784009e9d7ef4ebb69112bbb32e45e5cdb80d02758bfc7dd0f9aa8438960->leave($__internal_bd34784009e9d7ef4ebb69112bbb32e45e5cdb80d02758bfc7dd0f9aa8438960_prof);

        
        $__internal_1bc307034df8fc3c04b5842cedadcf40c34cff420b4136423c87c486bb5dcbaa->leave($__internal_1bc307034df8fc3c04b5842cedadcf40c34cff420b4136423c87c486bb5dcbaa_prof);

    }

    // line 51
    public function block_label($context, array $blocks = array())
    {
        $__internal_aa52529a19b0d029f8d4363bd79c7851e468be38a98d81199d54378205a977a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa52529a19b0d029f8d4363bd79c7851e468be38a98d81199d54378205a977a0->enter($__internal_aa52529a19b0d029f8d4363bd79c7851e468be38a98d81199d54378205a977a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_4fc42dfdc1ed8aaa1347cf48abf6f87f2f33e753ab28eb21cad2c9861a5d3a33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fc42dfdc1ed8aaa1347cf48abf6f87f2f33e753ab28eb21cad2c9861a5d3a33->enter($__internal_4fc42dfdc1ed8aaa1347cf48abf6f87f2f33e753ab28eb21cad2c9861a5d3a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if ((array_key_exists("is_link", $context) && (isset($context["is_link"]) ? $context["is_link"] : $this->getContext($context, "is_link")))) {
            echo ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")))) : (""));
        }
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array()), array(), ((array_key_exists("translation_domain", $context)) ? (_twig_default_filter((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")), "messages")) : ("messages"))), "html", null, true);
        }
        
        $__internal_4fc42dfdc1ed8aaa1347cf48abf6f87f2f33e753ab28eb21cad2c9861a5d3a33->leave($__internal_4fc42dfdc1ed8aaa1347cf48abf6f87f2f33e753ab28eb21cad2c9861a5d3a33_prof);

        
        $__internal_aa52529a19b0d029f8d4363bd79c7851e468be38a98d81199d54378205a977a0->leave($__internal_aa52529a19b0d029f8d4363bd79c7851e468be38a98d81199d54378205a977a0_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Menu/sonata_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 51,  189 => 45,  184 => 44,  181 => 43,  179 => 42,  176 => 41,  173 => 40,  164 => 39,  150 => 35,  147 => 34,  144 => 33,  141 => 32,  138 => 31,  135 => 30,  132 => 29,  129 => 28,  126 => 27,  117 => 26,  103 => 22,  101 => 21,  99 => 20,  96 => 19,  94 => 18,  86 => 14,  81 => 13,  79 => 12,  77 => 10,  68 => 9,  57 => 6,  55 => 5,  53 => 4,  44 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% block root %}
    {%- set listAttributes = item.childrenAttributes|merge({'class': 'sidebar-menu'}) %}
    {%- set request        = item.extra('request') ?: app.request %}
    {{ block('list') -}}
{% endblock %}

{% block item %}
    {%- if item.displayed %}
        {#- check role of the group #}
        {%- set display = (item.extra('roles') is empty or is_granted('ROLE_SUPER_ADMIN') ) %}
        {%- for role in item.extra('roles') if not display %}
            {%- set display = is_granted(role) %}
        {%- endfor %}
    {%- endif %}

    {%- if item.displayed and display|default %}
        {% set options = options|merge({branch_class: 'treeview', currentClass: \"active\"}) %}
        {%- do item.setChildrenAttribute('class', (item.childrenAttribute('class')~' active')|trim) %}
        {%- do item.setChildrenAttribute('class', (item.childrenAttribute('class')~' treeview-menu')|trim) %}
        {{ parent() }}
    {% endif %}
{% endblock %}

{% block linkElement %}
    {% spaceless %}
        {% if item.extra('on_top') is defined and not item.extra('on_top') %}
            {% set translation_domain = item.extra('translation_domain', 'messages') %}
            {% set icon = item.attribute('icon')|default(item.level > 1 ? '<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>' : '') %}
        {% else %}
            {% set icon = item.extra('icon') %}
        {% endif %}
        {% set is_link = true %}
        {{ parent() }}
    {% endspaceless %}
{% endblock %}

{% block spanElement %}
    {% spaceless %}
        <a href=\"#\">
            {% set translation_domain = item.extra('label_catalogue') %}
            {% set icon = item.extra('icon')|default('') %}
            {{ icon|raw }}
            {{ parent() }}
            <span class=\"pull-right-container\"><i class=\"fa pull-right fa-angle-left\"></i></span>
        </a>
    {% endspaceless %}
{% endblock %}

{% block label %}{% if is_link is defined and is_link %}{{ icon|default|raw }}{% endif %}{% if options.allow_safe_labels and item.extra('safe_label', false) %}{{ item.label|raw }}{% else %}{{ item.label|trans({}, translation_domain|default('messages')) }}{% endif %}{% endblock %}
", "@SonataAdmin/Menu/sonata_menu.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/Menu/sonata_menu.html.twig");
    }
}
