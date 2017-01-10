<?php

/* @SonataAdmin/Menu/sonata_menu.html.twig */
class __TwigTemplate_b1735fcdc45a7153c3a16bc289cfe10d6d7094c56e59025dd166f18c2973ac43 extends Twig_Template
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
        $__internal_91c048d9ca770fcd9845bde8367d1e24b42ddd84cd592849680cfd80d960e7e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91c048d9ca770fcd9845bde8367d1e24b42ddd84cd592849680cfd80d960e7e8->enter($__internal_91c048d9ca770fcd9845bde8367d1e24b42ddd84cd592849680cfd80d960e7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Menu/sonata_menu.html.twig"));

        $__internal_f496ae2cc9bdc755f139d8853932502d10443220817c0f4a2765110e8411c764 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f496ae2cc9bdc755f139d8853932502d10443220817c0f4a2765110e8411c764->enter($__internal_f496ae2cc9bdc755f139d8853932502d10443220817c0f4a2765110e8411c764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Menu/sonata_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91c048d9ca770fcd9845bde8367d1e24b42ddd84cd592849680cfd80d960e7e8->leave($__internal_91c048d9ca770fcd9845bde8367d1e24b42ddd84cd592849680cfd80d960e7e8_prof);

        
        $__internal_f496ae2cc9bdc755f139d8853932502d10443220817c0f4a2765110e8411c764->leave($__internal_f496ae2cc9bdc755f139d8853932502d10443220817c0f4a2765110e8411c764_prof);

    }

    // line 3
    public function block_root($context, array $blocks = array())
    {
        $__internal_14793d3b3197affb6cf854685fba8d1011db122930dcd9259d7957f3ad7e6a98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14793d3b3197affb6cf854685fba8d1011db122930dcd9259d7957f3ad7e6a98->enter($__internal_14793d3b3197affb6cf854685fba8d1011db122930dcd9259d7957f3ad7e6a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        $__internal_3063303a7b6f42f1fcdf45597b4c09fdaa5f58db8e188aec7c6643c2c9d1b1e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3063303a7b6f42f1fcdf45597b4c09fdaa5f58db8e188aec7c6643c2c9d1b1e3->enter($__internal_3063303a7b6f42f1fcdf45597b4c09fdaa5f58db8e188aec7c6643c2c9d1b1e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 4
        $context["listAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => "sidebar-menu"));
        // line 5
        $context["request"] = (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "request"), "method")) ? ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "request"), "method")) : ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array())));
        // line 6
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_3063303a7b6f42f1fcdf45597b4c09fdaa5f58db8e188aec7c6643c2c9d1b1e3->leave($__internal_3063303a7b6f42f1fcdf45597b4c09fdaa5f58db8e188aec7c6643c2c9d1b1e3_prof);

        
        $__internal_14793d3b3197affb6cf854685fba8d1011db122930dcd9259d7957f3ad7e6a98->leave($__internal_14793d3b3197affb6cf854685fba8d1011db122930dcd9259d7957f3ad7e6a98_prof);

    }

    // line 9
    public function block_item($context, array $blocks = array())
    {
        $__internal_ad42bcf2106665431b461abea7ff0d907bab33939c483cf61da6795fb1af8551 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad42bcf2106665431b461abea7ff0d907bab33939c483cf61da6795fb1af8551->enter($__internal_ad42bcf2106665431b461abea7ff0d907bab33939c483cf61da6795fb1af8551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_977798d9900d6dad4a37d6abac31f3ab77e22620c6922d77e28c70fdc73c0b98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_977798d9900d6dad4a37d6abac31f3ab77e22620c6922d77e28c70fdc73c0b98->enter($__internal_977798d9900d6dad4a37d6abac31f3ab77e22620c6922d77e28c70fdc73c0b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

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
        
        $__internal_977798d9900d6dad4a37d6abac31f3ab77e22620c6922d77e28c70fdc73c0b98->leave($__internal_977798d9900d6dad4a37d6abac31f3ab77e22620c6922d77e28c70fdc73c0b98_prof);

        
        $__internal_ad42bcf2106665431b461abea7ff0d907bab33939c483cf61da6795fb1af8551->leave($__internal_ad42bcf2106665431b461abea7ff0d907bab33939c483cf61da6795fb1af8551_prof);

    }

    // line 26
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_a831e351ab342710f0c9be01626a77408c3163c6f426319f867e6623e3c26429 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a831e351ab342710f0c9be01626a77408c3163c6f426319f867e6623e3c26429->enter($__internal_a831e351ab342710f0c9be01626a77408c3163c6f426319f867e6623e3c26429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_8c8ff6bec206d6d0e7f9fe04535b3d58b1585d13a1f5123b7efe76a048e37277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c8ff6bec206d6d0e7f9fe04535b3d58b1585d13a1f5123b7efe76a048e37277->enter($__internal_8c8ff6bec206d6d0e7f9fe04535b3d58b1585d13a1f5123b7efe76a048e37277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

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
        
        $__internal_8c8ff6bec206d6d0e7f9fe04535b3d58b1585d13a1f5123b7efe76a048e37277->leave($__internal_8c8ff6bec206d6d0e7f9fe04535b3d58b1585d13a1f5123b7efe76a048e37277_prof);

        
        $__internal_a831e351ab342710f0c9be01626a77408c3163c6f426319f867e6623e3c26429->leave($__internal_a831e351ab342710f0c9be01626a77408c3163c6f426319f867e6623e3c26429_prof);

    }

    // line 39
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_543592c9efddfcb18cb065a33b669e6d0defa051398762b5aaaaaf3639fd358f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_543592c9efddfcb18cb065a33b669e6d0defa051398762b5aaaaaf3639fd358f->enter($__internal_543592c9efddfcb18cb065a33b669e6d0defa051398762b5aaaaaf3639fd358f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_6ce3f4ed300fda7e5a92226ca939b8714ea565616fd5ba5270241540b98e3020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ce3f4ed300fda7e5a92226ca939b8714ea565616fd5ba5270241540b98e3020->enter($__internal_6ce3f4ed300fda7e5a92226ca939b8714ea565616fd5ba5270241540b98e3020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

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
        
        $__internal_6ce3f4ed300fda7e5a92226ca939b8714ea565616fd5ba5270241540b98e3020->leave($__internal_6ce3f4ed300fda7e5a92226ca939b8714ea565616fd5ba5270241540b98e3020_prof);

        
        $__internal_543592c9efddfcb18cb065a33b669e6d0defa051398762b5aaaaaf3639fd358f->leave($__internal_543592c9efddfcb18cb065a33b669e6d0defa051398762b5aaaaaf3639fd358f_prof);

    }

    // line 51
    public function block_label($context, array $blocks = array())
    {
        $__internal_ce329fb27bdfb16c8273a97efe9d31f16179fd9a632068905f112abeeec8c042 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce329fb27bdfb16c8273a97efe9d31f16179fd9a632068905f112abeeec8c042->enter($__internal_ce329fb27bdfb16c8273a97efe9d31f16179fd9a632068905f112abeeec8c042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_bdd2a4f455e9a536cbe3c8f46ee02cdf0f77298f7f470465f1491b17ded878b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdd2a4f455e9a536cbe3c8f46ee02cdf0f77298f7f470465f1491b17ded878b7->enter($__internal_bdd2a4f455e9a536cbe3c8f46ee02cdf0f77298f7f470465f1491b17ded878b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if ((array_key_exists("is_link", $context) && ($context["is_link"] ?? $this->getContext($context, "is_link")))) {
            echo ((array_key_exists("icon", $context)) ? (_twig_default_filter(($context["icon"] ?? $this->getContext($context, "icon")))) : (""));
        }
        if (($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array());
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array()), array(), ((array_key_exists("translation_domain", $context)) ? (_twig_default_filter(($context["translation_domain"] ?? $this->getContext($context, "translation_domain")), "messages")) : ("messages"))), "html", null, true);
        }
        
        $__internal_bdd2a4f455e9a536cbe3c8f46ee02cdf0f77298f7f470465f1491b17ded878b7->leave($__internal_bdd2a4f455e9a536cbe3c8f46ee02cdf0f77298f7f470465f1491b17ded878b7_prof);

        
        $__internal_ce329fb27bdfb16c8273a97efe9d31f16179fd9a632068905f112abeeec8c042->leave($__internal_ce329fb27bdfb16c8273a97efe9d31f16179fd9a632068905f112abeeec8c042_prof);

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
