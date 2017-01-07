<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_94881c7e3d594dbe2c701b8143e79c8c73b79ab5922aa6918998ca27c0d064b2 extends Twig_Template
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
        $__internal_a1a46b96fcfc8dd7decaf6c6d37cf101fff3b7b4bac0a9c88773abbca000cf02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1a46b96fcfc8dd7decaf6c6d37cf101fff3b7b4bac0a9c88773abbca000cf02->enter($__internal_a1a46b96fcfc8dd7decaf6c6d37cf101fff3b7b4bac0a9c88773abbca000cf02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_0ff6b8ed3150eeb17e4fdbc0e9eebdae3b4f75104fe6995927957cec71516b2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ff6b8ed3150eeb17e4fdbc0e9eebdae3b4f75104fe6995927957cec71516b2c->enter($__internal_0ff6b8ed3150eeb17e4fdbc0e9eebdae3b4f75104fe6995927957cec71516b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1a46b96fcfc8dd7decaf6c6d37cf101fff3b7b4bac0a9c88773abbca000cf02->leave($__internal_a1a46b96fcfc8dd7decaf6c6d37cf101fff3b7b4bac0a9c88773abbca000cf02_prof);

        
        $__internal_0ff6b8ed3150eeb17e4fdbc0e9eebdae3b4f75104fe6995927957cec71516b2c->leave($__internal_0ff6b8ed3150eeb17e4fdbc0e9eebdae3b4f75104fe6995927957cec71516b2c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a6f264f1b4ddeaa3037c28f06ef0b7e4c7f7a2b6b0b1ee1a0ecc82483328b9be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6f264f1b4ddeaa3037c28f06ef0b7e4c7f7a2b6b0b1ee1a0ecc82483328b9be->enter($__internal_a6f264f1b4ddeaa3037c28f06ef0b7e4c7f7a2b6b0b1ee1a0ecc82483328b9be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_57a4428f8c52fe4fa5a47f89b32cb4a0b2ccbb733469febeef12bdc730e04e4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57a4428f8c52fe4fa5a47f89b32cb4a0b2ccbb733469febeef12bdc730e04e4b->enter($__internal_57a4428f8c52fe4fa5a47f89b32cb4a0b2ccbb733469febeef12bdc730e04e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_57a4428f8c52fe4fa5a47f89b32cb4a0b2ccbb733469febeef12bdc730e04e4b->leave($__internal_57a4428f8c52fe4fa5a47f89b32cb4a0b2ccbb733469febeef12bdc730e04e4b_prof);

        
        $__internal_a6f264f1b4ddeaa3037c28f06ef0b7e4c7f7a2b6b0b1ee1a0ecc82483328b9be->leave($__internal_a6f264f1b4ddeaa3037c28f06ef0b7e4c7f7a2b6b0b1ee1a0ecc82483328b9be_prof);

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
", "@WebProfiler/Collector/ajax.html.twig", "/home/ubuntu/workspace/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
