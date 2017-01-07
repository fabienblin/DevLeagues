<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_2cb71afd064401f135544f701fe3d6b83509831893cfceeeb4910d694ccec329 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d404d5ba8fe1d1768ac31379d76c98bc874a5aafae0872752ae62d5903852391 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d404d5ba8fe1d1768ac31379d76c98bc874a5aafae0872752ae62d5903852391->enter($__internal_d404d5ba8fe1d1768ac31379d76c98bc874a5aafae0872752ae62d5903852391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_05dfb80b4fa8a056b042f1226da40815aac4d7f5a7eb475df6b8436f94418d1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05dfb80b4fa8a056b042f1226da40815aac4d7f5a7eb475df6b8436f94418d1d->enter($__internal_05dfb80b4fa8a056b042f1226da40815aac4d7f5a7eb475df6b8436f94418d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d404d5ba8fe1d1768ac31379d76c98bc874a5aafae0872752ae62d5903852391->leave($__internal_d404d5ba8fe1d1768ac31379d76c98bc874a5aafae0872752ae62d5903852391_prof);

        
        $__internal_05dfb80b4fa8a056b042f1226da40815aac4d7f5a7eb475df6b8436f94418d1d->leave($__internal_05dfb80b4fa8a056b042f1226da40815aac4d7f5a7eb475df6b8436f94418d1d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b381837b1724328c1a9c1375816f90e22d4fe7df9d68d737192b84979ed05886 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b381837b1724328c1a9c1375816f90e22d4fe7df9d68d737192b84979ed05886->enter($__internal_b381837b1724328c1a9c1375816f90e22d4fe7df9d68d737192b84979ed05886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9d00d12b9f20fce1a73cbcc59fe41d1cce187e82facb05534765d55f40e2b035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d00d12b9f20fce1a73cbcc59fe41d1cce187e82facb05534765d55f40e2b035->enter($__internal_9d00d12b9f20fce1a73cbcc59fe41d1cce187e82facb05534765d55f40e2b035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9d00d12b9f20fce1a73cbcc59fe41d1cce187e82facb05534765d55f40e2b035->leave($__internal_9d00d12b9f20fce1a73cbcc59fe41d1cce187e82facb05534765d55f40e2b035_prof);

        
        $__internal_b381837b1724328c1a9c1375816f90e22d4fe7df9d68d737192b84979ed05886->leave($__internal_b381837b1724328c1a9c1375816f90e22d4fe7df9d68d737192b84979ed05886_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3618ab1c4d27a2b1be216a3b54094b4fe3b45395f1d9f5cbb5f15c3428fa1c57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3618ab1c4d27a2b1be216a3b54094b4fe3b45395f1d9f5cbb5f15c3428fa1c57->enter($__internal_3618ab1c4d27a2b1be216a3b54094b4fe3b45395f1d9f5cbb5f15c3428fa1c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_352f19b18d3a97e45dc2d24db7ebd6609e74005a2579a64faef5fa2ea8d77347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_352f19b18d3a97e45dc2d24db7ebd6609e74005a2579a64faef5fa2ea8d77347->enter($__internal_352f19b18d3a97e45dc2d24db7ebd6609e74005a2579a64faef5fa2ea8d77347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_352f19b18d3a97e45dc2d24db7ebd6609e74005a2579a64faef5fa2ea8d77347->leave($__internal_352f19b18d3a97e45dc2d24db7ebd6609e74005a2579a64faef5fa2ea8d77347_prof);

        
        $__internal_3618ab1c4d27a2b1be216a3b54094b4fe3b45395f1d9f5cbb5f15c3428fa1c57->leave($__internal_3618ab1c4d27a2b1be216a3b54094b4fe3b45395f1d9f5cbb5f15c3428fa1c57_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
