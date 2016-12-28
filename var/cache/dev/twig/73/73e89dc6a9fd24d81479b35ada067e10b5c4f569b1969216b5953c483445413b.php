<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_17d9986a3909e4cd638e248836d8a7b1dabe9418aa630f3acea8ca632b4cbd90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9de4e7e56312cef24ec387e0ce8e16f79667c06a1f67a98364315693fd3171db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9de4e7e56312cef24ec387e0ce8e16f79667c06a1f67a98364315693fd3171db->enter($__internal_9de4e7e56312cef24ec387e0ce8e16f79667c06a1f67a98364315693fd3171db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9de4e7e56312cef24ec387e0ce8e16f79667c06a1f67a98364315693fd3171db->leave($__internal_9de4e7e56312cef24ec387e0ce8e16f79667c06a1f67a98364315693fd3171db_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eb2b8b68c4da25c6a3476861b16a59200978d17129285cf20977acbb95b12fcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb2b8b68c4da25c6a3476861b16a59200978d17129285cf20977acbb95b12fcf->enter($__internal_eb2b8b68c4da25c6a3476861b16a59200978d17129285cf20977acbb95b12fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_eb2b8b68c4da25c6a3476861b16a59200978d17129285cf20977acbb95b12fcf->leave($__internal_eb2b8b68c4da25c6a3476861b16a59200978d17129285cf20977acbb95b12fcf_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_30814f6df3921bcb8cdde07c411ad5c1d56fd1ca9de33771e8f5745a66e726de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30814f6df3921bcb8cdde07c411ad5c1d56fd1ca9de33771e8f5745a66e726de->enter($__internal_30814f6df3921bcb8cdde07c411ad5c1d56fd1ca9de33771e8f5745a66e726de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_30814f6df3921bcb8cdde07c411ad5c1d56fd1ca9de33771e8f5745a66e726de->leave($__internal_30814f6df3921bcb8cdde07c411ad5c1d56fd1ca9de33771e8f5745a66e726de_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b98070f9de248b1db2306a2297d79c9ea83b43e6fbde9a94c712bd4b5daf73bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b98070f9de248b1db2306a2297d79c9ea83b43e6fbde9a94c712bd4b5daf73bb->enter($__internal_b98070f9de248b1db2306a2297d79c9ea83b43e6fbde9a94c712bd4b5daf73bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_b98070f9de248b1db2306a2297d79c9ea83b43e6fbde9a94c712bd4b5daf73bb->leave($__internal_b98070f9de248b1db2306a2297d79c9ea83b43e6fbde9a94c712bd4b5daf73bb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
