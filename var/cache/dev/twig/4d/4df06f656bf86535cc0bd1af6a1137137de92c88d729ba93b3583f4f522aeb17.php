<?php

/* @SonataAdmin/CRUD/list_trans.html.twig */
class __TwigTemplate_5fa47cceaa3215154b9d0b530c2a62c19714a7582480e5b9199e2988b8cc0b82 extends Twig_Template
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
        $__internal_899a848238893884e9f943f6a834d38584a8e3dcc943195ee7f937b10c3e4d0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_899a848238893884e9f943f6a834d38584a8e3dcc943195ee7f937b10c3e4d0b->enter($__internal_899a848238893884e9f943f6a834d38584a8e3dcc943195ee7f937b10c3e4d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_trans.html.twig"));

        $__internal_186021e277cdef33793e59e51511ad788ead6a978e725000e18b464a49000c33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_186021e277cdef33793e59e51511ad788ead6a978e725000e18b464a49000c33->enter($__internal_186021e277cdef33793e59e51511ad788ead6a978e725000e18b464a49000c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_trans.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_899a848238893884e9f943f6a834d38584a8e3dcc943195ee7f937b10c3e4d0b->leave($__internal_899a848238893884e9f943f6a834d38584a8e3dcc943195ee7f937b10c3e4d0b_prof);

        
        $__internal_186021e277cdef33793e59e51511ad788ead6a978e725000e18b464a49000c33->leave($__internal_186021e277cdef33793e59e51511ad788ead6a978e725000e18b464a49000c33_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_60f80b5507f731dff31b5939f82659ebccaa9d9c27205fbc6e315d342693bb93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60f80b5507f731dff31b5939f82659ebccaa9d9c27205fbc6e315d342693bb93->enter($__internal_60f80b5507f731dff31b5939f82659ebccaa9d9c27205fbc6e315d342693bb93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_8568aa340166fd89899ea440381ba7da29e5f8c46be5c3eff7431f63b6c59028 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8568aa340166fd89899ea440381ba7da29e5f8c46be5c3eff7431f63b6c59028->enter($__internal_8568aa340166fd89899ea440381ba7da29e5f8c46be5c3eff7431f63b6c59028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_8568aa340166fd89899ea440381ba7da29e5f8c46be5c3eff7431f63b6c59028->leave($__internal_8568aa340166fd89899ea440381ba7da29e5f8c46be5c3eff7431f63b6c59028_prof);

        
        $__internal_60f80b5507f731dff31b5939f82659ebccaa9d9c27205fbc6e315d342693bb93->leave($__internal_60f80b5507f731dff31b5939f82659ebccaa9d9c27205fbc6e315d342693bb93_prof);

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
