<?php

/* @SonataBlock/Block/block_core_menu.html.twig */
class __TwigTemplate_083ed2f16a1929ac752fb72b8aa08e9370a4c9351821b5ca9ad7903e48c000b0 extends Twig_Template
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
        $__internal_c73e1c3bb2d4dc51cf388f236dc823528ff012ef469b1f8d921a33f3863fdd41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c73e1c3bb2d4dc51cf388f236dc823528ff012ef469b1f8d921a33f3863fdd41->enter($__internal_c73e1c3bb2d4dc51cf388f236dc823528ff012ef469b1f8d921a33f3863fdd41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_menu.html.twig"));

        $__internal_00f8ecaea611caa0439ab6c7bcd763d428ec0287bf4044642494491f4e499eda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00f8ecaea611caa0439ab6c7bcd763d428ec0287bf4044642494491f4e499eda->enter($__internal_00f8ecaea611caa0439ab6c7bcd763d428ec0287bf4044642494491f4e499eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_menu.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c73e1c3bb2d4dc51cf388f236dc823528ff012ef469b1f8d921a33f3863fdd41->leave($__internal_c73e1c3bb2d4dc51cf388f236dc823528ff012ef469b1f8d921a33f3863fdd41_prof);

        
        $__internal_00f8ecaea611caa0439ab6c7bcd763d428ec0287bf4044642494491f4e499eda->leave($__internal_00f8ecaea611caa0439ab6c7bcd763d428ec0287bf4044642494491f4e499eda_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_49c84a03b2fc687270d8a2623515ca2d969d8c4c6d74110dcba84580a3d3d4d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49c84a03b2fc687270d8a2623515ca2d969d8c4c6d74110dcba84580a3d3d4d5->enter($__internal_49c84a03b2fc687270d8a2623515ca2d969d8c4c6d74110dcba84580a3d3d4d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_7400a0471813490a5ce49fc7ab2a07b0e67ed18a3dfaa31bc00939c26bda7ead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7400a0471813490a5ce49fc7ab2a07b0e67ed18a3dfaa31bc00939c26bda7ead->enter($__internal_7400a0471813490a5ce49fc7ab2a07b0e67ed18a3dfaa31bc00939c26bda7ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render(($context["menu"] ?? $this->getContext($context, "menu")), ($context["menu_options"] ?? $this->getContext($context, "menu_options")));
        echo "
";
        
        $__internal_7400a0471813490a5ce49fc7ab2a07b0e67ed18a3dfaa31bc00939c26bda7ead->leave($__internal_7400a0471813490a5ce49fc7ab2a07b0e67ed18a3dfaa31bc00939c26bda7ead_prof);

        
        $__internal_49c84a03b2fc687270d8a2623515ca2d969d8c4c6d74110dcba84580a3d3d4d5->leave($__internal_49c84a03b2fc687270d8a2623515ca2d969d8c4c6d74110dcba84580a3d3d4d5_prof);

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
