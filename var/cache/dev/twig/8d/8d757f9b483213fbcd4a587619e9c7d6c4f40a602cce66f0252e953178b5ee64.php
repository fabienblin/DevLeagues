<?php

/* @SonataBlock/Block/block_core_action.html.twig */
class __TwigTemplate_ad7990af0c3ef7d582be3528f894a861083b86ddd0271996a62a11d294c0660a extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_357f6652ee47184fac9dc1af33e84c0d33a4af018c7ec0291f6462611ea3140b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_357f6652ee47184fac9dc1af33e84c0d33a4af018c7ec0291f6462611ea3140b->enter($__internal_357f6652ee47184fac9dc1af33e84c0d33a4af018c7ec0291f6462611ea3140b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_action.html.twig"));

        $__internal_08fbeab7e1470cf848a2f0314bf3833d92fd4fe6c341379323453426b71d2dca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08fbeab7e1470cf848a2f0314bf3833d92fd4fe6c341379323453426b71d2dca->enter($__internal_08fbeab7e1470cf848a2f0314bf3833d92fd4fe6c341379323453426b71d2dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_357f6652ee47184fac9dc1af33e84c0d33a4af018c7ec0291f6462611ea3140b->leave($__internal_357f6652ee47184fac9dc1af33e84c0d33a4af018c7ec0291f6462611ea3140b_prof);

        
        $__internal_08fbeab7e1470cf848a2f0314bf3833d92fd4fe6c341379323453426b71d2dca->leave($__internal_08fbeab7e1470cf848a2f0314bf3833d92fd4fe6c341379323453426b71d2dca_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_12deb1a2cbe6e077b2178563991c5f2555f676b385d6ce9050bcf100644c0f08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12deb1a2cbe6e077b2178563991c5f2555f676b385d6ce9050bcf100644c0f08->enter($__internal_12deb1a2cbe6e077b2178563991c5f2555f676b385d6ce9050bcf100644c0f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_16ba93c9f339ab2941e6bf831c657ed46f0ee5e22e3c5ab99d81b1dd13beab5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16ba93c9f339ab2941e6bf831c657ed46f0ee5e22e3c5ab99d81b1dd13beab5c->enter($__internal_16ba93c9f339ab2941e6bf831c657ed46f0ee5e22e3c5ab99d81b1dd13beab5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo ($context["content"] ?? $this->getContext($context, "content"));
        echo "
";
        
        $__internal_16ba93c9f339ab2941e6bf831c657ed46f0ee5e22e3c5ab99d81b1dd13beab5c->leave($__internal_16ba93c9f339ab2941e6bf831c657ed46f0ee5e22e3c5ab99d81b1dd13beab5c_prof);

        
        $__internal_12deb1a2cbe6e077b2178563991c5f2555f676b385d6ce9050bcf100644c0f08->leave($__internal_12deb1a2cbe6e077b2178563991c5f2555f676b385d6ce9050bcf100644c0f08_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_action.html.twig";
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
    {{ content|raw }}
{% endblock %}
", "@SonataBlock/Block/block_core_action.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_action.html.twig");
    }
}
