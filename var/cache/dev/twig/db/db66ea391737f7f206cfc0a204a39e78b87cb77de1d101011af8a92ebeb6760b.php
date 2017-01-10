<?php

/* @KnpMenu/menu.html.twig */
class __TwigTemplate_902a7ac32f11cb1297320133749ed7d8229cc3067d0b3ee9018311469321b504 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "@KnpMenu/menu.html.twig", 1);
        $this->blocks = array(
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c5b3c6f187f166445fa82d600fa4ba0d1f1c018c4ecc82c31043932105a71a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c5b3c6f187f166445fa82d600fa4ba0d1f1c018c4ecc82c31043932105a71a2->enter($__internal_3c5b3c6f187f166445fa82d600fa4ba0d1f1c018c4ecc82c31043932105a71a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpMenu/menu.html.twig"));

        $__internal_39dcafb46296ae3bfe1088cb25705064cc782c742bac2e8f212cc0661f4c0b76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39dcafb46296ae3bfe1088cb25705064cc782c742bac2e8f212cc0661f4c0b76->enter($__internal_39dcafb46296ae3bfe1088cb25705064cc782c742bac2e8f212cc0661f4c0b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpMenu/menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c5b3c6f187f166445fa82d600fa4ba0d1f1c018c4ecc82c31043932105a71a2->leave($__internal_3c5b3c6f187f166445fa82d600fa4ba0d1f1c018c4ecc82c31043932105a71a2_prof);

        
        $__internal_39dcafb46296ae3bfe1088cb25705064cc782c742bac2e8f212cc0661f4c0b76->leave($__internal_39dcafb46296ae3bfe1088cb25705064cc782c742bac2e8f212cc0661f4c0b76_prof);

    }

    // line 3
    public function block_label($context, array $blocks = array())
    {
        $__internal_a01ba575c618c242165b86a279c1d3a6de35008af4f8481371670034bdeb0a51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a01ba575c618c242165b86a279c1d3a6de35008af4f8481371670034bdeb0a51->enter($__internal_a01ba575c618c242165b86a279c1d3a6de35008af4f8481371670034bdeb0a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_27d1ded5eceaacb4271b6598ff977dab6fb0a99b8862d504cd5e85c7b6518b8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27d1ded5eceaacb4271b6598ff977dab6fb0a99b8862d504cd5e85c7b6518b8d->enter($__internal_27d1ded5eceaacb4271b6598ff977dab6fb0a99b8862d504cd5e85c7b6518b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 4
        $context["translation_domain"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "translation_domain", 1 => "messages"), "method");
        // line 5
        $context["label"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "label", array());
        // line 6
        if ( !(($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) {
            // line 7
            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "translation_params", 1 => array()), "method"), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")));
        }
        // line 9
        if (($this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo ($context["label"] ?? $this->getContext($context, "label"));
        } else {
            echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
        }
        
        $__internal_27d1ded5eceaacb4271b6598ff977dab6fb0a99b8862d504cd5e85c7b6518b8d->leave($__internal_27d1ded5eceaacb4271b6598ff977dab6fb0a99b8862d504cd5e85c7b6518b8d_prof);

        
        $__internal_a01ba575c618c242165b86a279c1d3a6de35008af4f8481371670034bdeb0a51->leave($__internal_a01ba575c618c242165b86a279c1d3a6de35008af4f8481371670034bdeb0a51_prof);

    }

    public function getTemplateName()
    {
        return "@KnpMenu/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  55 => 7,  53 => 6,  51 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% block label %}
    {%- set translation_domain = item.extra('translation_domain', 'messages') -%}
    {%- set label = item.label -%}
    {%- if translation_domain is not same as(false) -%}
        {%- set label = label|trans(item.extra('translation_params', {}), translation_domain) -%}
    {%- endif -%}
    {%- if options.allow_safe_labels and item.extra('safe_label', false) %}{{ label|raw }}{% else %}{{ label }}{% endif -%}
{% endblock %}
", "@KnpMenu/menu.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/knplabs/knp-menu-bundle/Resources/views/menu.html.twig");
    }
}
