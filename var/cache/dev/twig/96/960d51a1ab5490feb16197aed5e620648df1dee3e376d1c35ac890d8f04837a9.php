<?php

/* @SonataAdmin/CRUD/list_trans.html.twig */
class __TwigTemplate_3a2d0515e8e67a43cb7c1aead5a5a94f627118021679b1de9bbd59aa4b3daa68 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_trans.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e2fae1972293305e5803f2d95f8bd79e0718c144250507a1f2b076673b57245 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e2fae1972293305e5803f2d95f8bd79e0718c144250507a1f2b076673b57245->enter($__internal_1e2fae1972293305e5803f2d95f8bd79e0718c144250507a1f2b076673b57245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_trans.html.twig"));

        $__internal_c32f019c06b9c88dad929629e8ffcbc32537f991c25b8455414ffad87402d018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c32f019c06b9c88dad929629e8ffcbc32537f991c25b8455414ffad87402d018->enter($__internal_c32f019c06b9c88dad929629e8ffcbc32537f991c25b8455414ffad87402d018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_trans.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e2fae1972293305e5803f2d95f8bd79e0718c144250507a1f2b076673b57245->leave($__internal_1e2fae1972293305e5803f2d95f8bd79e0718c144250507a1f2b076673b57245_prof);

        
        $__internal_c32f019c06b9c88dad929629e8ffcbc32537f991c25b8455414ffad87402d018->leave($__internal_c32f019c06b9c88dad929629e8ffcbc32537f991c25b8455414ffad87402d018_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_c0e1c282109bf6fe56b941bf0f9cb2dc4582cd0d4eb06a5605184be653c5d096 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0e1c282109bf6fe56b941bf0f9cb2dc4582cd0d4eb06a5605184be653c5d096->enter($__internal_c0e1c282109bf6fe56b941bf0f9cb2dc4582cd0d4eb06a5605184be653c5d096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_4b6c8f9e706545e27dc2e58adaa0d7823c630efeb24f3c4347bf5a4e24e05517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b6c8f9e706545e27dc2e58adaa0d7823c630efeb24f3c4347bf5a4e24e05517->enter($__internal_4b6c8f9e706545e27dc2e58adaa0d7823c630efeb24f3c4347bf5a4e24e05517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["translationDomain"] = (($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "catalogue", array()), $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array()))) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array())));
        // line 16
        echo "    ";
        $context["valueFormat"] = (($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "format", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "format", array()), "%s")) : ("%s"));
        // line 17
        echo "
    ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(sprintf(($context["valueFormat"] ?? $this->getContext($context, "valueFormat")), ($context["value"] ?? $this->getContext($context, "value"))), array(), ($context["translationDomain"] ?? $this->getContext($context, "translationDomain"))), "html", null, true);
        echo "
";
        
        $__internal_4b6c8f9e706545e27dc2e58adaa0d7823c630efeb24f3c4347bf5a4e24e05517->leave($__internal_4b6c8f9e706545e27dc2e58adaa0d7823c630efeb24f3c4347bf5a4e24e05517_prof);

        
        $__internal_c0e1c282109bf6fe56b941bf0f9cb2dc4582cd0d4eb06a5605184be653c5d096->leave($__internal_c0e1c282109bf6fe56b941bf0f9cb2dc4582cd0d4eb06a5605184be653c5d096_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_trans.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 18,  54 => 17,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% block field%}
    {% set translationDomain = field_description.options.catalogue|default(admin.translationDomain) %}
    {% set valueFormat = field_description.options.format|default('%s') %}

    {{valueFormat|format(value)|trans({}, translationDomain)}}
{% endblock %}
", "@SonataAdmin/CRUD/list_trans.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_trans.html.twig");
    }
}
