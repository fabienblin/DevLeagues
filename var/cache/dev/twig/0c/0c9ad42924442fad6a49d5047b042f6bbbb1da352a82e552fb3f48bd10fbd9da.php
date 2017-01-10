<?php

/* @SonataBlock/Block/block_exception_debug.html.twig */
class __TwigTemplate_3d8e8ee96747a593757e26b80cda7c69b70155d30014dd6ce663f59b31494139 extends Twig_Template
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
        $__internal_44d2a07c11b37c82a444eead87f342c0f718e898361d469524c72b7c3abfd7b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44d2a07c11b37c82a444eead87f342c0f718e898361d469524c72b7c3abfd7b2->enter($__internal_44d2a07c11b37c82a444eead87f342c0f718e898361d469524c72b7c3abfd7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_exception_debug.html.twig"));

        $__internal_b24badc0e67e2cc0912e205b648061862f5b778595c80fd099dff5866acda8c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b24badc0e67e2cc0912e205b648061862f5b778595c80fd099dff5866acda8c8->enter($__internal_b24badc0e67e2cc0912e205b648061862f5b778595c80fd099dff5866acda8c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_exception_debug.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44d2a07c11b37c82a444eead87f342c0f718e898361d469524c72b7c3abfd7b2->leave($__internal_44d2a07c11b37c82a444eead87f342c0f718e898361d469524c72b7c3abfd7b2_prof);

        
        $__internal_b24badc0e67e2cc0912e205b648061862f5b778595c80fd099dff5866acda8c8->leave($__internal_b24badc0e67e2cc0912e205b648061862f5b778595c80fd099dff5866acda8c8_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_a277c21d0c55885b629a57af8e61d2e8659848b6e7528b3391872578fe733ff9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a277c21d0c55885b629a57af8e61d2e8659848b6e7528b3391872578fe733ff9->enter($__internal_a277c21d0c55885b629a57af8e61d2e8659848b6e7528b3391872578fe733ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_b142e4d8e8461147597d360aa35c555953aac372b65ea17efac547cc5eaba4c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b142e4d8e8461147597d360aa35c555953aac372b65ea17efac547cc5eaba4c1->enter($__internal_b142e4d8e8461147597d360aa35c555953aac372b65ea17efac547cc5eaba4c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_b142e4d8e8461147597d360aa35c555953aac372b65ea17efac547cc5eaba4c1->leave($__internal_b142e4d8e8461147597d360aa35c555953aac372b65ea17efac547cc5eaba4c1_prof);

        
        $__internal_a277c21d0c55885b629a57af8e61d2e8659848b6e7528b3391872578fe733ff9->leave($__internal_a277c21d0c55885b629a57af8e61d2e8659848b6e7528b3391872578fe733ff9_prof);

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
