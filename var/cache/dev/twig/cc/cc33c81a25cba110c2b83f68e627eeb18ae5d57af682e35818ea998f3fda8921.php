<?php

/* @SonataAdmin/CRUD/list__batch.html.twig */
class __TwigTemplate_43684b99ebb520b7f47fa554f4d1190f65ce5a7a0cac4f9c6d9f22d589b2570c extends Twig_Template
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
        $__internal_1301a6b10c4407d0661a4d9c5b537dd216c12408e45d02ae0258efb03d1daf4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1301a6b10c4407d0661a4d9c5b537dd216c12408e45d02ae0258efb03d1daf4f->enter($__internal_1301a6b10c4407d0661a4d9c5b537dd216c12408e45d02ae0258efb03d1daf4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__batch.html.twig"));

        $__internal_5ca35922f34714401a91ac7b9c3847562b86a32be27213a169363c165c40d8fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ca35922f34714401a91ac7b9c3847562b86a32be27213a169363c165c40d8fc->enter($__internal_5ca35922f34714401a91ac7b9c3847562b86a32be27213a169363c165c40d8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1301a6b10c4407d0661a4d9c5b537dd216c12408e45d02ae0258efb03d1daf4f->leave($__internal_1301a6b10c4407d0661a4d9c5b537dd216c12408e45d02ae0258efb03d1daf4f_prof);

        
        $__internal_5ca35922f34714401a91ac7b9c3847562b86a32be27213a169363c165c40d8fc->leave($__internal_5ca35922f34714401a91ac7b9c3847562b86a32be27213a169363c165c40d8fc_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_5f41d194bb4889f1cdc843f7d1b950517677d2cd17961c4f0b47e61f6c297c10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f41d194bb4889f1cdc843f7d1b950517677d2cd17961c4f0b47e61f6c297c10->enter($__internal_5f41d194bb4889f1cdc843f7d1b950517677d2cd17961c4f0b47e61f6c297c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_b76fc5ca6d1393c8db8a5f201aab6a8f9f3f718c7bd114bb05aadb9dcdbafbf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b76fc5ca6d1393c8db8a5f201aab6a8f9f3f718c7bd114bb05aadb9dcdbafbf2->enter($__internal_b76fc5ca6d1393c8db8a5f201aab6a8f9f3f718c7bd114bb05aadb9dcdbafbf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "id", array(0 => ($context["object"] ?? $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_b76fc5ca6d1393c8db8a5f201aab6a8f9f3f718c7bd114bb05aadb9dcdbafbf2->leave($__internal_b76fc5ca6d1393c8db8a5f201aab6a8f9f3f718c7bd114bb05aadb9dcdbafbf2_prof);

        
        $__internal_5f41d194bb4889f1cdc843f7d1b950517677d2cd17961c4f0b47e61f6c297c10->leave($__internal_5f41d194bb4889f1cdc843f7d1b950517677d2cd17961c4f0b47e61f6c297c10_prof);

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
