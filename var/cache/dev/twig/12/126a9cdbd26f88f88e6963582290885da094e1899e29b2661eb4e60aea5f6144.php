<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_5bcbf140b8aec081f7baf7d8ca45f77f27205a5ec30c264d990e71b3ca9e9369 extends Twig_Template
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
        $__internal_342781bd5ce6410ae30c26083dc9ed95af91c766b12558a9a8ecec9e74a0fdc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_342781bd5ce6410ae30c26083dc9ed95af91c766b12558a9a8ecec9e74a0fdc4->enter($__internal_342781bd5ce6410ae30c26083dc9ed95af91c766b12558a9a8ecec9e74a0fdc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_9e7cf51a3372d602cacc1df9bcb9acc26d0c471e1ca29c39f77bc644b0118b1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e7cf51a3372d602cacc1df9bcb9acc26d0c471e1ca29c39f77bc644b0118b1e->enter($__internal_9e7cf51a3372d602cacc1df9bcb9acc26d0c471e1ca29c39f77bc644b0118b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_342781bd5ce6410ae30c26083dc9ed95af91c766b12558a9a8ecec9e74a0fdc4->leave($__internal_342781bd5ce6410ae30c26083dc9ed95af91c766b12558a9a8ecec9e74a0fdc4_prof);

        
        $__internal_9e7cf51a3372d602cacc1df9bcb9acc26d0c471e1ca29c39f77bc644b0118b1e->leave($__internal_9e7cf51a3372d602cacc1df9bcb9acc26d0c471e1ca29c39f77bc644b0118b1e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e373713a3a33855c1ab78b562d5ba05ebf4df6d78a1032e923e3d6213b1b5f39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e373713a3a33855c1ab78b562d5ba05ebf4df6d78a1032e923e3d6213b1b5f39->enter($__internal_e373713a3a33855c1ab78b562d5ba05ebf4df6d78a1032e923e3d6213b1b5f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_54f9c9bb73f9258d8d1c52d6c70dca4ef8b8a999ea3760b8ea4f88fa80e8e238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54f9c9bb73f9258d8d1c52d6c70dca4ef8b8a999ea3760b8ea4f88fa80e8e238->enter($__internal_54f9c9bb73f9258d8d1c52d6c70dca4ef8b8a999ea3760b8ea4f88fa80e8e238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_54f9c9bb73f9258d8d1c52d6c70dca4ef8b8a999ea3760b8ea4f88fa80e8e238->leave($__internal_54f9c9bb73f9258d8d1c52d6c70dca4ef8b8a999ea3760b8ea4f88fa80e8e238_prof);

        
        $__internal_e373713a3a33855c1ab78b562d5ba05ebf4df6d78a1032e923e3d6213b1b5f39->leave($__internal_e373713a3a33855c1ab78b562d5ba05ebf4df6d78a1032e923e3d6213b1b5f39_prof);

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
