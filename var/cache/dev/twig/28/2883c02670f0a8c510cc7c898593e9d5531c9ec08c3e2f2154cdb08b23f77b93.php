<?php

/* @SonataBlock/Block/block_core_menu.html.twig */
class __TwigTemplate_879db8e964a05418da0ac3414fbd9803781f8ec71dea4aeb508ec7ae2995679f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_menu.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9744483f1f6380d331e354fdb2bcc5a1ff44e6187f377ec99b84cd7a3decea4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9744483f1f6380d331e354fdb2bcc5a1ff44e6187f377ec99b84cd7a3decea4->enter($__internal_e9744483f1f6380d331e354fdb2bcc5a1ff44e6187f377ec99b84cd7a3decea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_menu.html.twig"));

        $__internal_bc8f0445d3769b36ae3279b64efd0e508a3f38d908424617ca5806ef69af4ed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc8f0445d3769b36ae3279b64efd0e508a3f38d908424617ca5806ef69af4ed7->enter($__internal_bc8f0445d3769b36ae3279b64efd0e508a3f38d908424617ca5806ef69af4ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9744483f1f6380d331e354fdb2bcc5a1ff44e6187f377ec99b84cd7a3decea4->leave($__internal_e9744483f1f6380d331e354fdb2bcc5a1ff44e6187f377ec99b84cd7a3decea4_prof);

        
        $__internal_bc8f0445d3769b36ae3279b64efd0e508a3f38d908424617ca5806ef69af4ed7->leave($__internal_bc8f0445d3769b36ae3279b64efd0e508a3f38d908424617ca5806ef69af4ed7_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_7de579deb2a76cc84885c4a8864bf9fb58af9d611d252ff104f9e9cad6291415 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7de579deb2a76cc84885c4a8864bf9fb58af9d611d252ff104f9e9cad6291415->enter($__internal_7de579deb2a76cc84885c4a8864bf9fb58af9d611d252ff104f9e9cad6291415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_3fc1a9d9869857d5e46383bc20b5d87d5868382c668aa40aabfbf07dc5c01d2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fc1a9d9869857d5e46383bc20b5d87d5868382c668aa40aabfbf07dc5c01d2f->enter($__internal_3fc1a9d9869857d5e46383bc20b5d87d5868382c668aa40aabfbf07dc5c01d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render(($context["menu"] ?? $this->getContext($context, "menu")), ($context["menu_options"] ?? $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_3fc1a9d9869857d5e46383bc20b5d87d5868382c668aa40aabfbf07dc5c01d2f->leave($__internal_3fc1a9d9869857d5e46383bc20b5d87d5868382c668aa40aabfbf07dc5c01d2f_prof);

        
        $__internal_7de579deb2a76cc84885c4a8864bf9fb58af9d611d252ff104f9e9cad6291415->leave($__internal_7de579deb2a76cc84885c4a8864bf9fb58af9d611d252ff104f9e9cad6291415_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  39 => 14,  18 => 12,);
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

{% extends sonata_block.templates.block_base %}

{% block block %}
    {{ knp_menu_render(menu, menu_options) }}
{% endblock %}
", "@SonataBlock/Block/block_core_menu.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_menu.html.twig");
    }
}
