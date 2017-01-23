<?php

/* @SonataBlock/Block/block_core_text.html.twig */
class __TwigTemplate_6da2873f64c072d40168f9c376bd9e4a1ce9c7b9a47400bcb3e69756cd2836b5 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d5cad6ed38e4f0ce7a6eb726ed0452e31e78b8cad0a2b9e44f5e90a418a5cc5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5cad6ed38e4f0ce7a6eb726ed0452e31e78b8cad0a2b9e44f5e90a418a5cc5b->enter($__internal_d5cad6ed38e4f0ce7a6eb726ed0452e31e78b8cad0a2b9e44f5e90a418a5cc5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_text.html.twig"));

        $__internal_83e347e5645e5e1f70a7aaa4784dd0391c3adb235b280276e977cc13b36ac93a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83e347e5645e5e1f70a7aaa4784dd0391c3adb235b280276e977cc13b36ac93a->enter($__internal_83e347e5645e5e1f70a7aaa4784dd0391c3adb235b280276e977cc13b36ac93a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5cad6ed38e4f0ce7a6eb726ed0452e31e78b8cad0a2b9e44f5e90a418a5cc5b->leave($__internal_d5cad6ed38e4f0ce7a6eb726ed0452e31e78b8cad0a2b9e44f5e90a418a5cc5b_prof);

        
        $__internal_83e347e5645e5e1f70a7aaa4784dd0391c3adb235b280276e977cc13b36ac93a->leave($__internal_83e347e5645e5e1f70a7aaa4784dd0391c3adb235b280276e977cc13b36ac93a_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_c77e65138422f1ca0f4ecc0fb272d1c8d7d8b91016a424064d1ea0e84dc26f8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c77e65138422f1ca0f4ecc0fb272d1c8d7d8b91016a424064d1ea0e84dc26f8b->enter($__internal_c77e65138422f1ca0f4ecc0fb272d1c8d7d8b91016a424064d1ea0e84dc26f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_854ca437b22588a1aa7fe5ab6a95b34afcb1b454d8c23cf1028d6e4dcaf16cef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_854ca437b22588a1aa7fe5ab6a95b34afcb1b454d8c23cf1028d6e4dcaf16cef->enter($__internal_854ca437b22588a1aa7fe5ab6a95b34afcb1b454d8c23cf1028d6e4dcaf16cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_854ca437b22588a1aa7fe5ab6a95b34afcb1b454d8c23cf1028d6e4dcaf16cef->leave($__internal_854ca437b22588a1aa7fe5ab6a95b34afcb1b454d8c23cf1028d6e4dcaf16cef_prof);

        
        $__internal_c77e65138422f1ca0f4ecc0fb272d1c8d7d8b91016a424064d1ea0e84dc26f8b->leave($__internal_c77e65138422f1ca0f4ecc0fb272d1c8d7d8b91016a424064d1ea0e84dc26f8b_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_text.html.twig";
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
    {{ settings.content|raw }}
{% endblock %}
", "@SonataBlock/Block/block_core_text.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_text.html.twig");
    }
}
