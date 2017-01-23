<?php

/* @SonataAdmin/CRUD/list__batch.html.twig */
class __TwigTemplate_fc7cf752733e486d355379c833f10b47ad164ab87e7dfe7d1048697f110fd367 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_063efb64357ec9d80a5b1b3fe470bef7d836daf41fb1a7906b3cc4b0028da3fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_063efb64357ec9d80a5b1b3fe470bef7d836daf41fb1a7906b3cc4b0028da3fb->enter($__internal_063efb64357ec9d80a5b1b3fe470bef7d836daf41fb1a7906b3cc4b0028da3fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__batch.html.twig"));

        $__internal_5b634c415f8224e34cc6e930e58c09c87d6b073a3756c16201c810175338eb06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b634c415f8224e34cc6e930e58c09c87d6b073a3756c16201c810175338eb06->enter($__internal_5b634c415f8224e34cc6e930e58c09c87d6b073a3756c16201c810175338eb06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_063efb64357ec9d80a5b1b3fe470bef7d836daf41fb1a7906b3cc4b0028da3fb->leave($__internal_063efb64357ec9d80a5b1b3fe470bef7d836daf41fb1a7906b3cc4b0028da3fb_prof);

        
        $__internal_5b634c415f8224e34cc6e930e58c09c87d6b073a3756c16201c810175338eb06->leave($__internal_5b634c415f8224e34cc6e930e58c09c87d6b073a3756c16201c810175338eb06_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_79cc698f42e5de76a99f14fd7e6a716585a1a2501f9de90ef0892a772215ddfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79cc698f42e5de76a99f14fd7e6a716585a1a2501f9de90ef0892a772215ddfb->enter($__internal_79cc698f42e5de76a99f14fd7e6a716585a1a2501f9de90ef0892a772215ddfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_ff32abb1a52ea2a73ab4a1bb4a843a94863844a356579234cbc2b0f254d28852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff32abb1a52ea2a73ab4a1bb4a843a94863844a356579234cbc2b0f254d28852->enter($__internal_ff32abb1a52ea2a73ab4a1bb4a843a94863844a356579234cbc2b0f254d28852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_ff32abb1a52ea2a73ab4a1bb4a843a94863844a356579234cbc2b0f254d28852->leave($__internal_ff32abb1a52ea2a73ab4a1bb4a843a94863844a356579234cbc2b0f254d28852_prof);

        
        $__internal_79cc698f42e5de76a99f14fd7e6a716585a1a2501f9de90ef0892a772215ddfb->leave($__internal_79cc698f42e5de76a99f14fd7e6a716585a1a2501f9de90ef0892a772215ddfb_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list__batch.html.twig";
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
", "@SonataAdmin/CRUD/list__batch.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list__batch.html.twig");
    }
}
