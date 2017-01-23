<?php

/* @SonataBlock/Block/block_exception_debug.html.twig */
class __TwigTemplate_a9c7ae46faaa0bfb817ace4066ee25d81b3ceaa9068ef655e8ca7ac504704b65 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_exception_debug.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c3a95503fabd018ca1b8a3f6693750e7dbc3ef8584b4d14e087afa5ddd3db33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c3a95503fabd018ca1b8a3f6693750e7dbc3ef8584b4d14e087afa5ddd3db33->enter($__internal_7c3a95503fabd018ca1b8a3f6693750e7dbc3ef8584b4d14e087afa5ddd3db33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_exception_debug.html.twig"));

        $__internal_e6886bfc1f2ccb14798bd5cbad20312419f39a9765cef710cbea5aff399883fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6886bfc1f2ccb14798bd5cbad20312419f39a9765cef710cbea5aff399883fa->enter($__internal_e6886bfc1f2ccb14798bd5cbad20312419f39a9765cef710cbea5aff399883fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_exception_debug.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c3a95503fabd018ca1b8a3f6693750e7dbc3ef8584b4d14e087afa5ddd3db33->leave($__internal_7c3a95503fabd018ca1b8a3f6693750e7dbc3ef8584b4d14e087afa5ddd3db33_prof);

        
        $__internal_e6886bfc1f2ccb14798bd5cbad20312419f39a9765cef710cbea5aff399883fa->leave($__internal_e6886bfc1f2ccb14798bd5cbad20312419f39a9765cef710cbea5aff399883fa_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_160ab916219e4f8ebe3b83b361183f521ee5df6a7d833e783f64658e79f20169 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_160ab916219e4f8ebe3b83b361183f521ee5df6a7d833e783f64658e79f20169->enter($__internal_160ab916219e4f8ebe3b83b361183f521ee5df6a7d833e783f64658e79f20169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_1a31ad651ca315898949e9950d5c983a98097c8e1285b02e7e4a4e01d6785eb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a31ad651ca315898949e9950d5c983a98097c8e1285b02e7e4a4e01d6785eb5->enter($__internal_1a31ad651ca315898949e9950d5c983a98097c8e1285b02e7e4a4e01d6785eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\" ";
        if (($context["forceStyle"] ?? $this->getContext($context, "forceStyle"))) {
            echo "style=\"overflow-y: scroll; min-width: 300px; max-height: 300px;\"";
        }
        echo ">

        ";
        // line 18
        echo "        ";
        if (($context["forceStyle"] ?? $this->getContext($context, "forceStyle"))) {
            // line 19
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception_layout.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        ";
        }
        // line 22
        echo "        ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "@SonataBlock/Block/block_exception_debug.html.twig", 22)->display($context);
        // line 23
        echo "    </div>
";
        
        $__internal_1a31ad651ca315898949e9950d5c983a98097c8e1285b02e7e4a4e01d6785eb5->leave($__internal_1a31ad651ca315898949e9950d5c983a98097c8e1285b02e7e4a4e01d6785eb5_prof);

        
        $__internal_160ab916219e4f8ebe3b83b361183f521ee5df6a7d833e783f64658e79f20169->leave($__internal_160ab916219e4f8ebe3b83b361183f521ee5df6a7d833e783f64658e79f20169_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_exception_debug.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 23,  69 => 22,  64 => 20,  59 => 19,  56 => 18,  48 => 15,  39 => 14,  18 => 12,);
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
    <div class=\"cms-block-exception\" {% if forceStyle %}style=\"overflow-y: scroll; min-width: 300px; max-height: 300px;\"{% endif %}>

        {# this is dirty but the alternative would require a new block-optimized exception css #}
        {% if forceStyle %}
            <link href=\"{{ asset('bundles/framework/css/exception_layout.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
            <link href=\"{{ asset('bundles/framework/css/exception.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
        {% endif %}
        {% include 'TwigBundle:Exception:exception.html.twig' %}
    </div>
{% endblock %}
", "@SonataBlock/Block/block_exception_debug.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/block-bundle/Resources/views/Block/block_exception_debug.html.twig");
    }
}
