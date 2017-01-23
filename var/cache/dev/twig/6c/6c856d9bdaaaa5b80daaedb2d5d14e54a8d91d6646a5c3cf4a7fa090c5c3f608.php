<?php

/* @SonataAdmin/CRUD/action.html.twig */
class __TwigTemplate_8cb460f85950e092a2acdda7accd4717a96b2ce3404eae24e93aaa5a152e7573 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dce66be08db02b7618b6530609fc989e6bc1551db92de6bc77e49098fbc7dbeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dce66be08db02b7618b6530609fc989e6bc1551db92de6bc77e49098fbc7dbeb->enter($__internal_dce66be08db02b7618b6530609fc989e6bc1551db92de6bc77e49098fbc7dbeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/action.html.twig"));

        $__internal_0bf8bbc50e428bf86e898f395d83da6f33271aacf019beecc43f37ef76c16b53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bf8bbc50e428bf86e898f395d83da6f33271aacf019beecc43f37ef76c16b53->enter($__internal_0bf8bbc50e428bf86e898f395d83da6f33271aacf019beecc43f37ef76c16b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dce66be08db02b7618b6530609fc989e6bc1551db92de6bc77e49098fbc7dbeb->leave($__internal_dce66be08db02b7618b6530609fc989e6bc1551db92de6bc77e49098fbc7dbeb_prof);

        
        $__internal_0bf8bbc50e428bf86e898f395d83da6f33271aacf019beecc43f37ef76c16b53->leave($__internal_0bf8bbc50e428bf86e898f395d83da6f33271aacf019beecc43f37ef76c16b53_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_6cc674e37a4c2a3629a3772575888dcb4293e96f9b18421fa1d108f5b11a2232 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cc674e37a4c2a3629a3772575888dcb4293e96f9b18421fa1d108f5b11a2232->enter($__internal_6cc674e37a4c2a3629a3772575888dcb4293e96f9b18421fa1d108f5b11a2232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_aef435df56c1e4e907dbefb7ad32de3f214cf0eadfc9961d3517c9b884f0747a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aef435df56c1e4e907dbefb7ad32de3f214cf0eadfc9961d3517c9b884f0747a->enter($__internal_aef435df56c1e4e907dbefb7ad32de3f214cf0eadfc9961d3517c9b884f0747a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/action.html.twig", 15)->display($context);
        
        $__internal_aef435df56c1e4e907dbefb7ad32de3f214cf0eadfc9961d3517c9b884f0747a->leave($__internal_aef435df56c1e4e907dbefb7ad32de3f214cf0eadfc9961d3517c9b884f0747a_prof);

        
        $__internal_6cc674e37a4c2a3629a3772575888dcb4293e96f9b18421fa1d108f5b11a2232->leave($__internal_6cc674e37a4c2a3629a3772575888dcb4293e96f9b18421fa1d108f5b11a2232_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_562595ba1f159c38f31d5ac2b8af7b560f683b0b03d596328a10b7d574ab1281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_562595ba1f159c38f31d5ac2b8af7b560f683b0b03d596328a10b7d574ab1281->enter($__internal_562595ba1f159c38f31d5ac2b8af7b560f683b0b03d596328a10b7d574ab1281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_ca7d900d9cbb6f8e9aee48ee7657d21ce1ca4a396eddf2da54d6e28e4f1fe720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca7d900d9cbb6f8e9aee48ee7657d21ce1ca4a396eddf2da54d6e28e4f1fe720->enter($__internal_ca7d900d9cbb6f8e9aee48ee7657d21ce1ca4a396eddf2da54d6e28e4f1fe720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        if (array_key_exists("action", $context)) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
            echo "
    ";
        }
        
        $__internal_ca7d900d9cbb6f8e9aee48ee7657d21ce1ca4a396eddf2da54d6e28e4f1fe720->leave($__internal_ca7d900d9cbb6f8e9aee48ee7657d21ce1ca4a396eddf2da54d6e28e4f1fe720_prof);

        
        $__internal_562595ba1f159c38f31d5ac2b8af7b560f683b0b03d596328a10b7d574ab1281->leave($__internal_562595ba1f159c38f31d5ac2b8af7b560f683b0b03d596328a10b7d574ab1281_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_1373ee4215781cf29ec4a494bb2854176704cc9974e7a7b94d917f4854c6321a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1373ee4215781cf29ec4a494bb2854176704cc9974e7a7b94d917f4854c6321a->enter($__internal_1373ee4215781cf29ec4a494bb2854176704cc9974e7a7b94d917f4854c6321a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_97722b733c3baaee44de34c4f10d363eb4e1d396bacd465f1a5280249364a2f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97722b733c3baaee44de34c4f10d363eb4e1d396bacd465f1a5280249364a2f8->enter($__internal_97722b733c3baaee44de34c4f10d363eb4e1d396bacd465f1a5280249364a2f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "
    Redefine the content block in your action template

";
        
        $__internal_97722b733c3baaee44de34c4f10d363eb4e1d396bacd465f1a5280249364a2f8->leave($__internal_97722b733c3baaee44de34c4f10d363eb4e1d396bacd465f1a5280249364a2f8_prof);

        
        $__internal_1373ee4215781cf29ec4a494bb2854176704cc9974e7a7b94d917f4854c6321a->leave($__internal_1373ee4215781cf29ec4a494bb2854176704cc9974e7a7b94d917f4854c6321a_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 25,  86 => 24,  72 => 20,  69 => 19,  60 => 18,  50 => 15,  41 => 14,  20 => 12,);
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

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}
    {% if action is defined %}
        {{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}
    {% endif %}
{% endblock %}

{% block content %}

    Redefine the content block in your action template

{% endblock %}
", "@SonataAdmin/CRUD/action.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/action.html.twig");
    }
}
