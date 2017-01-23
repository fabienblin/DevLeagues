<?php

/* @SonataAdmin/Menu/sonata_menu.html.twig */
class __TwigTemplate_af39300bb421d7018c7b02172364989d73d2f5da92fd64eacfc4e2c2b9ace1d5 extends Twig_Template
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
        $__internal_4691c4f35de1eea8cd8f58ca8ceeac8bce8cb30adaf94708c48cd6d512f4f20f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4691c4f35de1eea8cd8f58ca8ceeac8bce8cb30adaf94708c48cd6d512f4f20f->enter($__internal_4691c4f35de1eea8cd8f58ca8ceeac8bce8cb30adaf94708c48cd6d512f4f20f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Menu/sonata_menu.html.twig"));

        $__internal_2f68cf42133bc45e577ac362800f818018b0201b298af09915adcdd349fe5ab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f68cf42133bc45e577ac362800f818018b0201b298af09915adcdd349fe5ab4->enter($__internal_2f68cf42133bc45e577ac362800f818018b0201b298af09915adcdd349fe5ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Menu/sonata_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4691c4f35de1eea8cd8f58ca8ceeac8bce8cb30adaf94708c48cd6d512f4f20f->leave($__internal_4691c4f35de1eea8cd8f58ca8ceeac8bce8cb30adaf94708c48cd6d512f4f20f_prof);

        
        $__internal_2f68cf42133bc45e577ac362800f818018b0201b298af09915adcdd349fe5ab4->leave($__internal_2f68cf42133bc45e577ac362800f818018b0201b298af09915adcdd349fe5ab4_prof);

    }

    // line 3
    public function block_root($context, array $blocks = array())
    {
        $__internal_eb5cc066b5f0ddc0bb410c219ee68124c2612f870469bcea250d34f16bd49a4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb5cc066b5f0ddc0bb410c219ee68124c2612f870469bcea250d34f16bd49a4b->enter($__internal_eb5cc066b5f0ddc0bb410c219ee68124c2612f870469bcea250d34f16bd49a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_e8007120fd486bec042444e61622e5771af13faf238c09253dd7835a83bf29f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8007120fd486bec042444e61622e5771af13faf238c09253dd7835a83bf29f4->enter($__internal_e8007120fd486bec042444e61622e5771af13faf238c09253dd7835a83bf29f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 4
        $context["listAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => "sidebar-menu"));
        // line 5
        $context["request"] = (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "request"), "method")) ? ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "request"), "method")) : ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array())));
        // line 6
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_e8007120fd486bec042444e61622e5771af13faf238c09253dd7835a83bf29f4->leave($__internal_e8007120fd486bec042444e61622e5771af13faf238c09253dd7835a83bf29f4_prof);

        
        $__internal_eb5cc066b5f0ddc0bb410c219ee68124c2612f870469bcea250d34f16bd49a4b->leave($__internal_eb5cc066b5f0ddc0bb410c219ee68124c2612f870469bcea250d34f16bd49a4b_prof);

    }

    // line 9
    public function block_item($context, array $blocks = array())
    {
        $__internal_d05069082a6cbc878b1ea8f2b34989561a02f693d2ac18b6450f7b9c93de7fe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d05069082a6cbc878b1ea8f2b34989561a02f693d2ac18b6450f7b9c93de7fe7->enter($__internal_d05069082a6cbc878b1ea8f2b34989561a02f693d2ac18b6450f7b9c93de7fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_2155202207a467e7a296ab55a6fe53ad9261fc2e2d734c115debad6c0a5aa75a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2155202207a467e7a296ab55a6fe53ad9261fc2e2d734c115debad6c0a5aa75a->enter($__internal_2155202207a467e7a296ab55a6fe53ad9261fc2e2d734c115debad6c0a5aa75a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 10
        if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayed", array())) {
            // line 12
            $context["display"] = (twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "roles"), "method")) || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_SUPER_ADMIN"));
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "roles"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ( !($context["display"] ?? $this->getContext($context, "display"))) {
                    // line 14
                    $context["display"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted($context["role"]);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 18
        if (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayed", array()) && ((array_key_exists("display", $context)) ? (_twig_default_filter(($context["display"] ?? $this->getContext($context, "display")))) : ("")))) {
            // line 19
            echo "        ";
            $context["options"] = twig_array_merge(($context["options"] ?? $this->getContext($context, "options")), array("branch_class" => "treeview", "currentClass" => "active"));
            // line 20
            $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "setChildrenAttribute", array(0 => "class", 1 => trim(($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method") . " active"))), "method");
            // line 21
            $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "setChildrenAttribute", array(0 => "class", 1 => trim(($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method") . " treeview-menu"))), "method");
            // line 22
            echo "        ";
            $this->displayParentBlock("item", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_2155202207a467e7a296ab55a6fe53ad9261fc2e2d734c115debad6c0a5aa75a->leave($__internal_2155202207a467e7a296ab55a6fe53ad9261fc2e2d734c115debad6c0a5aa75a_prof);

        
        $__internal_d05069082a6cbc878b1ea8f2b34989561a02f693d2ac18b6450f7b9c93de7fe7->leave($__internal_d05069082a6cbc878b1ea8f2b34989561a02f693d2ac18b6450f7b9c93de7fe7_prof);

    }

    // line 26
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_74a296cf5e4aa31affc3b5a923125e72975423d04bb9891871f52938c76af300 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74a296cf5e4aa31affc3b5a923125e72975423d04bb9891871f52938c76af300->enter($__internal_74a296cf5e4aa31affc3b5a923125e72975423d04bb9891871f52938c76af300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_48b5cb2fc226b041c171f586811229a5ea9d3d95fe61a34128d2c6d9e2209789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48b5cb2fc226b041c171f586811229a5ea9d3d95fe61a34128d2c6d9e2209789->enter($__internal_48b5cb2fc226b041c171f586811229a5ea9d3d95fe61a34128d2c6d9e2209789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        ";
        if (($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "on_top"), "method", true, true) &&  !$this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "on_top"), "method"))) {
            // line 29
            echo "            ";
            $context["translation_domain"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "translation_domain", 1 => "messages"), "method");
            // line 30
            echo "            ";
            $context["icon"] = (($this->getAttribute(($context["item"] ?? null), "attribute", array(0 => "icon"), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "attribute", array(0 => "icon"), "method"), ((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()) > 1)) ? ("<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>") : ("")))) : (((($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()) > 1)) ? ("<i class=\"fa fa-angle-double-right\" aria-hidden=\"true\"></i>") : (""))));
            // line 31
            echo "        ";
        } else {
            // line 32
            echo "            ";
            $context["icon"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "icon"), "method");
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
        
        $__internal_48b5cb2fc226b041c171f586811229a5ea9d3d95fe61a34128d2c6d9e2209789->leave($__internal_48b5cb2fc226b041c171f586811229a5ea9d3d95fe61a34128d2c6d9e2209789_prof);

        
        $__internal_74a296cf5e4aa31affc3b5a923125e72975423d04bb9891871f52938c76af300->leave($__internal_74a296cf5e4aa31affc3b5a923125e72975423d04bb9891871f52938c76af300_prof);

    }

    // line 39
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_86b4c8ff15b74074e80fa6a14a68053bdcc9b90a7bc74140d623fb5bc9cdd26d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86b4c8ff15b74074e80fa6a14a68053bdcc9b90a7bc74140d623fb5bc9cdd26d->enter($__internal_86b4c8ff15b74074e80fa6a14a68053bdcc9b90a7bc74140d623fb5bc9cdd26d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_8785b2a9e5ce7451787143a9b8697f858521baf4008d18b8f3692ef34366128d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8785b2a9e5ce7451787143a9b8697f858521baf4008d18b8f3692ef34366128d->enter($__internal_8785b2a9e5ce7451787143a9b8697f858521baf4008d18b8f3692ef34366128d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        // line 40
        echo "    ";
        ob_start();
        // line 41
        echo "        <a href=\"#\">
            ";
        // line 42
        $context["translation_domain"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "label_catalogue"), "method");
        // line 43
        echo "            ";
        $context["icon"] = (($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "icon"), "method", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "extra", array(0 => "icon"), "method"), "")) : (""));
        // line 44
        echo "            ";
        echo ($context["icon"] ?? $this->getContext($context, "icon"));
        echo "
            ";
        // line 45
        $this->displayParentBlock("spanElement", $context, $blocks);
        echo "
            <span class=\"pull-right-container\"><i class=\"fa pull-right fa-angle-left\"></i></span>
        </a>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_8785b2a9e5ce7451787143a9b8697f858521baf4008d18b8f3692ef34366128d->leave($__internal_8785b2a9e5ce7451787143a9b8697f858521baf4008d18b8f3692ef34366128d_prof);

        
        $__internal_86b4c8ff15b74074e80fa6a14a68053bdcc9b90a7bc74140d623fb5bc9cdd26d->leave($__internal_86b4c8ff15b74074e80fa6a14a68053bdcc9b90a7bc74140d623fb5bc9cdd26d_prof);

    }

    // line 51
    public function block_label($context, array $blocks = array())
    {
        $__internal_25fbf44fd3b9eca1bcf82abf347e27b1fd120c7f10b5155457950a140c5ff429 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25fbf44fd3b9eca1bcf82abf347e27b1fd120c7f10b5155457950a140c5ff429->enter($__internal_25fbf44fd3b9eca1bcf82abf347e27b1fd120c7f10b5155457950a140c5ff429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_7821aba1f4f3f6484a22d10b30e0abce255514a09059af6292267f146be83a12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7821aba1f4f3f6484a22d10b30e0abce255514a09059af6292267f146be83a12->enter($__internal_7821aba1f4f3f6484a22d10b30e0abce255514a09059af6292267f146be83a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if ((array_key_exists("is_link", $context) && ($context["is_link"] ?? $this->getContext($context, "is_link")))) {
            echo ((array_key_exists("icon", $context)) ? (_twig_default_filter(($context["icon"] ?? $this->getContext($context, "icon")))) : (""));
        }
        if (($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), array(), ((array_key_exists("translation_domain", $context)) ? (_twig_default_filter(($context["translation_domain"] ?? $this->getContext($context, "translation_domain")), "messages")) : ("messages"))), "html", null, true);
        }
        
        $__internal_7821aba1f4f3f6484a22d10b30e0abce255514a09059af6292267f146be83a12->leave($__internal_7821aba1f4f3f6484a22d10b30e0abce255514a09059af6292267f146be83a12_prof);

        
        $__internal_25fbf44fd3b9eca1bcf82abf347e27b1fd120c7f10b5155457950a140c5ff429->leave($__internal_25fbf44fd3b9eca1bcf82abf347e27b1fd120c7f10b5155457950a140c5ff429_prof);

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
", "@SonataAdmin/Menu/sonata_menu.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/Menu/sonata_menu.html.twig");
    }
}
