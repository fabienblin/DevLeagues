<?php

/* @SonataAdmin/CRUD/list_trans.html.twig */
class __TwigTemplate_5837411aad434f30ae35c84dcd031b0546524deb5eaebab3ca6e6527952cecf6 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_trans.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7804ed32ad4da083e8cd6cbda185f8a145c4b13cef6bf43075d34970a373ee0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7804ed32ad4da083e8cd6cbda185f8a145c4b13cef6bf43075d34970a373ee0d->enter($__internal_7804ed32ad4da083e8cd6cbda185f8a145c4b13cef6bf43075d34970a373ee0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_trans.html.twig"));

        $__internal_44c5dcab114b8fe80867cb583dd45059f5c515e35cf658490de90bf08364d8af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44c5dcab114b8fe80867cb583dd45059f5c515e35cf658490de90bf08364d8af->enter($__internal_44c5dcab114b8fe80867cb583dd45059f5c515e35cf658490de90bf08364d8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_trans.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7804ed32ad4da083e8cd6cbda185f8a145c4b13cef6bf43075d34970a373ee0d->leave($__internal_7804ed32ad4da083e8cd6cbda185f8a145c4b13cef6bf43075d34970a373ee0d_prof);

        
        $__internal_44c5dcab114b8fe80867cb583dd45059f5c515e35cf658490de90bf08364d8af->leave($__internal_44c5dcab114b8fe80867cb583dd45059f5c515e35cf658490de90bf08364d8af_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_1806870333ee4f4f449fd9feb90426df8a8d42441f14e36e152c6c05b2c72524 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1806870333ee4f4f449fd9feb90426df8a8d42441f14e36e152c6c05b2c72524->enter($__internal_1806870333ee4f4f449fd9feb90426df8a8d42441f14e36e152c6c05b2c72524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_69e9d805692cabd76515e7334e779a704a2dba3afa827628e14859b53525544e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69e9d805692cabd76515e7334e779a704a2dba3afa827628e14859b53525544e->enter($__internal_69e9d805692cabd76515e7334e779a704a2dba3afa827628e14859b53525544e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["translationDomain"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "catalogue", array()), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array()))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())));
        // line 16
        echo "    ";
        $context["valueFormat"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array()), "%s")) : ("%s"));
        // line 17
        echo "
    ";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(sprintf((isset($context["valueFormat"]) ? $context["valueFormat"] : $this->getContext($context, "valueFormat")), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), array(), (isset($context["translationDomain"]) ? $context["translationDomain"] : $this->getContext($context, "translationDomain"))), "html", null, true);
        echo "
";
        
        $__internal_69e9d805692cabd76515e7334e779a704a2dba3afa827628e14859b53525544e->leave($__internal_69e9d805692cabd76515e7334e779a704a2dba3afa827628e14859b53525544e_prof);

        
        $__internal_1806870333ee4f4f449fd9feb90426df8a8d42441f14e36e152c6c05b2c72524->leave($__internal_1806870333ee4f4f449fd9feb90426df8a8d42441f14e36e152c6c05b2c72524_prof);

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
", "@SonataAdmin/CRUD/list_trans.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_trans.html.twig");
    }
}
