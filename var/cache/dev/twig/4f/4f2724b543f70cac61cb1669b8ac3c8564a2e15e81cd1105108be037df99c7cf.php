<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_337180d9c8a6f232448c9ffd8e6c05bbb2608e183dce51413676ca90750b756f extends Twig_Template
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
        $__internal_0fe11f10a1451083bcc174ab9095b20a6a346fb700f0b1acffac1b9a25caa20b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fe11f10a1451083bcc174ab9095b20a6a346fb700f0b1acffac1b9a25caa20b->enter($__internal_0fe11f10a1451083bcc174ab9095b20a6a346fb700f0b1acffac1b9a25caa20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_c678ebac7c01fd2372cdaa0ccd138ccbd4c0640d429f48e058c0b94e6a293b20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c678ebac7c01fd2372cdaa0ccd138ccbd4c0640d429f48e058c0b94e6a293b20->enter($__internal_c678ebac7c01fd2372cdaa0ccd138ccbd4c0640d429f48e058c0b94e6a293b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fe11f10a1451083bcc174ab9095b20a6a346fb700f0b1acffac1b9a25caa20b->leave($__internal_0fe11f10a1451083bcc174ab9095b20a6a346fb700f0b1acffac1b9a25caa20b_prof);

        
        $__internal_c678ebac7c01fd2372cdaa0ccd138ccbd4c0640d429f48e058c0b94e6a293b20->leave($__internal_c678ebac7c01fd2372cdaa0ccd138ccbd4c0640d429f48e058c0b94e6a293b20_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3f748e4c86030e1ee9fd6afc0d1dea9881db552771df7b8136602d03a2b7fc62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f748e4c86030e1ee9fd6afc0d1dea9881db552771df7b8136602d03a2b7fc62->enter($__internal_3f748e4c86030e1ee9fd6afc0d1dea9881db552771df7b8136602d03a2b7fc62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d61df7ad0dd3e5ae93d1477e4895a5114850254c1f42a0c4d94e0790c7c0fc2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d61df7ad0dd3e5ae93d1477e4895a5114850254c1f42a0c4d94e0790c7c0fc2e->enter($__internal_d61df7ad0dd3e5ae93d1477e4895a5114850254c1f42a0c4d94e0790c7c0fc2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d61df7ad0dd3e5ae93d1477e4895a5114850254c1f42a0c4d94e0790c7c0fc2e->leave($__internal_d61df7ad0dd3e5ae93d1477e4895a5114850254c1f42a0c4d94e0790c7c0fc2e_prof);

        
        $__internal_3f748e4c86030e1ee9fd6afc0d1dea9881db552771df7b8136602d03a2b7fc62->leave($__internal_3f748e4c86030e1ee9fd6afc0d1dea9881db552771df7b8136602d03a2b7fc62_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f8764e48a87d973f9023649604d45fb198586c43d307a68c0c51da2e282958d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f8764e48a87d973f9023649604d45fb198586c43d307a68c0c51da2e282958d->enter($__internal_1f8764e48a87d973f9023649604d45fb198586c43d307a68c0c51da2e282958d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4286aba40b9b5576a666e12783689aa1a2eeb15b892ce0eeacbedc68e8f7520e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4286aba40b9b5576a666e12783689aa1a2eeb15b892ce0eeacbedc68e8f7520e->enter($__internal_4286aba40b9b5576a666e12783689aa1a2eeb15b892ce0eeacbedc68e8f7520e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
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
        
        $__internal_4286aba40b9b5576a666e12783689aa1a2eeb15b892ce0eeacbedc68e8f7520e->leave($__internal_4286aba40b9b5576a666e12783689aa1a2eeb15b892ce0eeacbedc68e8f7520e_prof);

        
        $__internal_1f8764e48a87d973f9023649604d45fb198586c43d307a68c0c51da2e282958d->leave($__internal_1f8764e48a87d973f9023649604d45fb198586c43d307a68c0c51da2e282958d_prof);

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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
