<?php

/* @KnpMenu/menu.html.twig */
class __TwigTemplate_dc98ab418759c378fd199247cef9039dd07e82e5e0760826454dbf64a1521bfe extends Twig_Template
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
        $__internal_ada95627b5428a39a34658758b9fdb8701fd08179c3d1f65e4446e51d6d9ec24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ada95627b5428a39a34658758b9fdb8701fd08179c3d1f65e4446e51d6d9ec24->enter($__internal_ada95627b5428a39a34658758b9fdb8701fd08179c3d1f65e4446e51d6d9ec24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpMenu/menu.html.twig"));

        $__internal_48844c11264c31cb39528e42eedaf495a817517ee7cbcbf1f2fab5699d2d34cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48844c11264c31cb39528e42eedaf495a817517ee7cbcbf1f2fab5699d2d34cd->enter($__internal_48844c11264c31cb39528e42eedaf495a817517ee7cbcbf1f2fab5699d2d34cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpMenu/menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ada95627b5428a39a34658758b9fdb8701fd08179c3d1f65e4446e51d6d9ec24->leave($__internal_ada95627b5428a39a34658758b9fdb8701fd08179c3d1f65e4446e51d6d9ec24_prof);

        
        $__internal_48844c11264c31cb39528e42eedaf495a817517ee7cbcbf1f2fab5699d2d34cd->leave($__internal_48844c11264c31cb39528e42eedaf495a817517ee7cbcbf1f2fab5699d2d34cd_prof);

    }

    // line 3
    public function block_label($context, array $blocks = array())
    {
        $__internal_cbd8fa6fe5fe36d1082b52183460fe5f00f1d9092bee8fa27675ccf0a430d6c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbd8fa6fe5fe36d1082b52183460fe5f00f1d9092bee8fa27675ccf0a430d6c0->enter($__internal_cbd8fa6fe5fe36d1082b52183460fe5f00f1d9092bee8fa27675ccf0a430d6c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_d44ae8fa626f6973d1b4fc691e66e24f446801ffd640981a595366659dca8497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d44ae8fa626f6973d1b4fc691e66e24f446801ffd640981a595366659dca8497->enter($__internal_d44ae8fa626f6973d1b4fc691e66e24f446801ffd640981a595366659dca8497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

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
        
        $__internal_d44ae8fa626f6973d1b4fc691e66e24f446801ffd640981a595366659dca8497->leave($__internal_d44ae8fa626f6973d1b4fc691e66e24f446801ffd640981a595366659dca8497_prof);

        
        $__internal_cbd8fa6fe5fe36d1082b52183460fe5f00f1d9092bee8fa27675ccf0a430d6c0->leave($__internal_cbd8fa6fe5fe36d1082b52183460fe5f00f1d9092bee8fa27675ccf0a430d6c0_prof);

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
