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
        $__internal_e981f07aa4cd8e2b4aa975d3d7deb864d27e3fe9d47671d2df13a0070940fad3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e981f07aa4cd8e2b4aa975d3d7deb864d27e3fe9d47671d2df13a0070940fad3->enter($__internal_e981f07aa4cd8e2b4aa975d3d7deb864d27e3fe9d47671d2df13a0070940fad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_971bb7c5490e7b4a2bb5f3f81317076a703bc273ccef236451c4a55cff9c97ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_971bb7c5490e7b4a2bb5f3f81317076a703bc273ccef236451c4a55cff9c97ee->enter($__internal_971bb7c5490e7b4a2bb5f3f81317076a703bc273ccef236451c4a55cff9c97ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e981f07aa4cd8e2b4aa975d3d7deb864d27e3fe9d47671d2df13a0070940fad3->leave($__internal_e981f07aa4cd8e2b4aa975d3d7deb864d27e3fe9d47671d2df13a0070940fad3_prof);

        
        $__internal_971bb7c5490e7b4a2bb5f3f81317076a703bc273ccef236451c4a55cff9c97ee->leave($__internal_971bb7c5490e7b4a2bb5f3f81317076a703bc273ccef236451c4a55cff9c97ee_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_03799d613e84f2193d37a78d82c81eb1484a6ea9b0908d452cf42acd83e9d824 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03799d613e84f2193d37a78d82c81eb1484a6ea9b0908d452cf42acd83e9d824->enter($__internal_03799d613e84f2193d37a78d82c81eb1484a6ea9b0908d452cf42acd83e9d824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9384034d13b21466e29387bb59b755097e2b8ab5d780481e9f54fce9fa005de6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9384034d13b21466e29387bb59b755097e2b8ab5d780481e9f54fce9fa005de6->enter($__internal_9384034d13b21466e29387bb59b755097e2b8ab5d780481e9f54fce9fa005de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_9384034d13b21466e29387bb59b755097e2b8ab5d780481e9f54fce9fa005de6->leave($__internal_9384034d13b21466e29387bb59b755097e2b8ab5d780481e9f54fce9fa005de6_prof);

        
        $__internal_03799d613e84f2193d37a78d82c81eb1484a6ea9b0908d452cf42acd83e9d824->leave($__internal_03799d613e84f2193d37a78d82c81eb1484a6ea9b0908d452cf42acd83e9d824_prof);

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
