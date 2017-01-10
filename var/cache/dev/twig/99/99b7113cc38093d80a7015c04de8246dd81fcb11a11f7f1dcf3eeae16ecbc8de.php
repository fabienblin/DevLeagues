<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_d67adefb1bfbebf8dae2a199a3a41338ff72e74f3f1ca3b7b513721071a373fa extends Twig_Template
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
        $__internal_c936572ef03162607a89bafde2b85a8ea6e3ecba84e819d71f9a863832d5c5b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c936572ef03162607a89bafde2b85a8ea6e3ecba84e819d71f9a863832d5c5b4->enter($__internal_c936572ef03162607a89bafde2b85a8ea6e3ecba84e819d71f9a863832d5c5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_d6c933ae7e9b9fc8167efd1dde1e8253e6f52c05b882455d7f2ac091f1bc537d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6c933ae7e9b9fc8167efd1dde1e8253e6f52c05b882455d7f2ac091f1bc537d->enter($__internal_d6c933ae7e9b9fc8167efd1dde1e8253e6f52c05b882455d7f2ac091f1bc537d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c936572ef03162607a89bafde2b85a8ea6e3ecba84e819d71f9a863832d5c5b4->leave($__internal_c936572ef03162607a89bafde2b85a8ea6e3ecba84e819d71f9a863832d5c5b4_prof);

        
        $__internal_d6c933ae7e9b9fc8167efd1dde1e8253e6f52c05b882455d7f2ac091f1bc537d->leave($__internal_d6c933ae7e9b9fc8167efd1dde1e8253e6f52c05b882455d7f2ac091f1bc537d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_90afb47f7775520e53234cec9418d3af696c5129e2e056f3b00b52825a480da1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90afb47f7775520e53234cec9418d3af696c5129e2e056f3b00b52825a480da1->enter($__internal_90afb47f7775520e53234cec9418d3af696c5129e2e056f3b00b52825a480da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e408f86b0031a8f2805829fd6114a3805c045a9afda67edf65e325392200d561 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e408f86b0031a8f2805829fd6114a3805c045a9afda67edf65e325392200d561->enter($__internal_e408f86b0031a8f2805829fd6114a3805c045a9afda67edf65e325392200d561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_e408f86b0031a8f2805829fd6114a3805c045a9afda67edf65e325392200d561->leave($__internal_e408f86b0031a8f2805829fd6114a3805c045a9afda67edf65e325392200d561_prof);

        
        $__internal_90afb47f7775520e53234cec9418d3af696c5129e2e056f3b00b52825a480da1->leave($__internal_90afb47f7775520e53234cec9418d3af696c5129e2e056f3b00b52825a480da1_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
