<?php

/* @SonataBlock/Block/block_exception_debug.html.twig */
class __TwigTemplate_65dc81d2999870ab67cccdceb2e4735471a45fc2ef58ed0ecd008699b08e88b4 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_exception_debug.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b74d462d41760fc7cd5a6a74f8b1e5f048d7e1f55ed13c6b415baa0d130b8c24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b74d462d41760fc7cd5a6a74f8b1e5f048d7e1f55ed13c6b415baa0d130b8c24->enter($__internal_b74d462d41760fc7cd5a6a74f8b1e5f048d7e1f55ed13c6b415baa0d130b8c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_exception_debug.html.twig"));

        $__internal_b2e5e19f4a4e8f9403e1f1b331b551156913316fc3e92a212a41d5f2795310be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2e5e19f4a4e8f9403e1f1b331b551156913316fc3e92a212a41d5f2795310be->enter($__internal_b2e5e19f4a4e8f9403e1f1b331b551156913316fc3e92a212a41d5f2795310be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_exception_debug.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b74d462d41760fc7cd5a6a74f8b1e5f048d7e1f55ed13c6b415baa0d130b8c24->leave($__internal_b74d462d41760fc7cd5a6a74f8b1e5f048d7e1f55ed13c6b415baa0d130b8c24_prof);

        
        $__internal_b2e5e19f4a4e8f9403e1f1b331b551156913316fc3e92a212a41d5f2795310be->leave($__internal_b2e5e19f4a4e8f9403e1f1b331b551156913316fc3e92a212a41d5f2795310be_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_4baa8840ccd796f2a08ec7ca7348d10eb29d175edc88a77a5b6305025045e6f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4baa8840ccd796f2a08ec7ca7348d10eb29d175edc88a77a5b6305025045e6f4->enter($__internal_4baa8840ccd796f2a08ec7ca7348d10eb29d175edc88a77a5b6305025045e6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_30ba32dc913c897ddb28899a73988634a366beb868f3291532732f3b1dc1f265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30ba32dc913c897ddb28899a73988634a366beb868f3291532732f3b1dc1f265->enter($__internal_30ba32dc913c897ddb28899a73988634a366beb868f3291532732f3b1dc1f265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\" ";
        if ((isset($context["forceStyle"]) ? $context["forceStyle"] : $this->getContext($context, "forceStyle"))) {
            echo "style=\"overflow-y: scroll; min-width: 300px; max-height: 300px;\"";
        }
        echo ">

        ";
        // line 18
        echo "        ";
        if ((isset($context["forceStyle"]) ? $context["forceStyle"] : $this->getContext($context, "forceStyle"))) {
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
        
        $__internal_30ba32dc913c897ddb28899a73988634a366beb868f3291532732f3b1dc1f265->leave($__internal_30ba32dc913c897ddb28899a73988634a366beb868f3291532732f3b1dc1f265_prof);

        
        $__internal_4baa8840ccd796f2a08ec7ca7348d10eb29d175edc88a77a5b6305025045e6f4->leave($__internal_4baa8840ccd796f2a08ec7ca7348d10eb29d175edc88a77a5b6305025045e6f4_prof);

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
", "@SonataBlock/Block/block_exception_debug.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/block-bundle/Resources/views/Block/block_exception_debug.html.twig");
    }
}
