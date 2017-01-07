<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_1036084e6c1e956d33fe03fbc27b563ff62c055804853e3b22fb369ebd6c02ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1a836320ecf45752e8cd8118f7e1de99bb630e18de10463e91d0a05cf793da7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1a836320ecf45752e8cd8118f7e1de99bb630e18de10463e91d0a05cf793da7->enter($__internal_e1a836320ecf45752e8cd8118f7e1de99bb630e18de10463e91d0a05cf793da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_251c504d79d2824ae1d73acf589d4c9797facee84db45f4e81096cd97c4d6d45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_251c504d79d2824ae1d73acf589d4c9797facee84db45f4e81096cd97c4d6d45->enter($__internal_251c504d79d2824ae1d73acf589d4c9797facee84db45f4e81096cd97c4d6d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1a836320ecf45752e8cd8118f7e1de99bb630e18de10463e91d0a05cf793da7->leave($__internal_e1a836320ecf45752e8cd8118f7e1de99bb630e18de10463e91d0a05cf793da7_prof);

        
        $__internal_251c504d79d2824ae1d73acf589d4c9797facee84db45f4e81096cd97c4d6d45->leave($__internal_251c504d79d2824ae1d73acf589d4c9797facee84db45f4e81096cd97c4d6d45_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_58127bea54446119ee47cf1033a2f052c5dcdc37a72858d89c240290d955a2ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58127bea54446119ee47cf1033a2f052c5dcdc37a72858d89c240290d955a2ac->enter($__internal_58127bea54446119ee47cf1033a2f052c5dcdc37a72858d89c240290d955a2ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_604f95383e6f6a96e1a5234780388cf884b7d7966860c5f2c4a99856500b04bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_604f95383e6f6a96e1a5234780388cf884b7d7966860c5f2c4a99856500b04bf->enter($__internal_604f95383e6f6a96e1a5234780388cf884b7d7966860c5f2c4a99856500b04bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_604f95383e6f6a96e1a5234780388cf884b7d7966860c5f2c4a99856500b04bf->leave($__internal_604f95383e6f6a96e1a5234780388cf884b7d7966860c5f2c4a99856500b04bf_prof);

        
        $__internal_58127bea54446119ee47cf1033a2f052c5dcdc37a72858d89c240290d955a2ac->leave($__internal_58127bea54446119ee47cf1033a2f052c5dcdc37a72858d89c240290d955a2ac_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
