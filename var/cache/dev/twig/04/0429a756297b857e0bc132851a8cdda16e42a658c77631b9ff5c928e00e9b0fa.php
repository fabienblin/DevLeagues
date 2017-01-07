<?php

/* @KnpMenu/menu.html.twig */
class __TwigTemplate_b4caae4ccf093726e633194baca300a92b2848e91c3b7b2488b735cf37431667 extends Twig_Template
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
        $__internal_0ca6d633ec70ecd4052f1018843bfee826952a2cd63b877a2daef3816b17136a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ca6d633ec70ecd4052f1018843bfee826952a2cd63b877a2daef3816b17136a->enter($__internal_0ca6d633ec70ecd4052f1018843bfee826952a2cd63b877a2daef3816b17136a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpMenu/menu.html.twig"));

        $__internal_eafad5eae4efba93fe36fc7cafc49b09298d3b893d4511dd22888042c2c145fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eafad5eae4efba93fe36fc7cafc49b09298d3b893d4511dd22888042c2c145fd->enter($__internal_eafad5eae4efba93fe36fc7cafc49b09298d3b893d4511dd22888042c2c145fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpMenu/menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ca6d633ec70ecd4052f1018843bfee826952a2cd63b877a2daef3816b17136a->leave($__internal_0ca6d633ec70ecd4052f1018843bfee826952a2cd63b877a2daef3816b17136a_prof);

        
        $__internal_eafad5eae4efba93fe36fc7cafc49b09298d3b893d4511dd22888042c2c145fd->leave($__internal_eafad5eae4efba93fe36fc7cafc49b09298d3b893d4511dd22888042c2c145fd_prof);

    }

    // line 3
    public function block_label($context, array $blocks = array())
    {
        $__internal_660222fd4f419907780cd6045103d3e3458235f95d10b6d5ad5aacf0c559094f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_660222fd4f419907780cd6045103d3e3458235f95d10b6d5ad5aacf0c559094f->enter($__internal_660222fd4f419907780cd6045103d3e3458235f95d10b6d5ad5aacf0c559094f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_cd56d72088d9d9081bba58a700b3f450231c8125c17522ca49e5604737355da3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd56d72088d9d9081bba58a700b3f450231c8125c17522ca49e5604737355da3->enter($__internal_cd56d72088d9d9081bba58a700b3f450231c8125c17522ca49e5604737355da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 4
        $context["translation_domain"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "translation_domain", 1 => "messages"), "method");
        // line 5
        $context["label"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array());
        // line 6
        if ( !((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) {
            // line 7
            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "translation_params", 1 => array()), "method"), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")));
        }
        // line 9
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extra", array(0 => "safe_label", 1 => false), "method"))) {
            echo (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"));
        } else {
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
        }
        
        $__internal_cd56d72088d9d9081bba58a700b3f450231c8125c17522ca49e5604737355da3->leave($__internal_cd56d72088d9d9081bba58a700b3f450231c8125c17522ca49e5604737355da3_prof);

        
        $__internal_660222fd4f419907780cd6045103d3e3458235f95d10b6d5ad5aacf0c559094f->leave($__internal_660222fd4f419907780cd6045103d3e3458235f95d10b6d5ad5aacf0c559094f_prof);

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
", "@KnpMenu/menu.html.twig", "/var/www/html/devleagues/github/vendor/knplabs/knp-menu-bundle/Resources/views/menu.html.twig");
    }
}
