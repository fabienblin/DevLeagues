<?php

/* base.html.twig */
class __TwigTemplate_b337605f08f1659e0cb9d739f614a735772e27395209b69b6c7eee30f88df985 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c80c3a4c5a3c9b74216e0bf4e97b7b4a8bb5545d6a72502e1b146ff9408041c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c80c3a4c5a3c9b74216e0bf4e97b7b4a8bb5545d6a72502e1b146ff9408041c->enter($__internal_0c80c3a4c5a3c9b74216e0bf4e97b7b4a8bb5545d6a72502e1b146ff9408041c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_bd855c98f38c2dc8b18b6ecf05b5541e215baa640d47540332520eb09005b410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd855c98f38c2dc8b18b6ecf05b5541e215baa640d47540332520eb09005b410->enter($__internal_bd855c98f38c2dc8b18b6ecf05b5541e215baa640d47540332520eb09005b410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_0c80c3a4c5a3c9b74216e0bf4e97b7b4a8bb5545d6a72502e1b146ff9408041c->leave($__internal_0c80c3a4c5a3c9b74216e0bf4e97b7b4a8bb5545d6a72502e1b146ff9408041c_prof);

        
        $__internal_bd855c98f38c2dc8b18b6ecf05b5541e215baa640d47540332520eb09005b410->leave($__internal_bd855c98f38c2dc8b18b6ecf05b5541e215baa640d47540332520eb09005b410_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1baeffd28008600ce57cc6c23e70157fba8a75938e46c2cbb42e5882fed68e82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1baeffd28008600ce57cc6c23e70157fba8a75938e46c2cbb42e5882fed68e82->enter($__internal_1baeffd28008600ce57cc6c23e70157fba8a75938e46c2cbb42e5882fed68e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e2387ea45b512d8d9ff0b05dfdc98d8ba598ea408e12808ab31c98d39af69a3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2387ea45b512d8d9ff0b05dfdc98d8ba598ea408e12808ab31c98d39af69a3a->enter($__internal_e2387ea45b512d8d9ff0b05dfdc98d8ba598ea408e12808ab31c98d39af69a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Coucou tu veux voir mon git ?";
        
        $__internal_e2387ea45b512d8d9ff0b05dfdc98d8ba598ea408e12808ab31c98d39af69a3a->leave($__internal_e2387ea45b512d8d9ff0b05dfdc98d8ba598ea408e12808ab31c98d39af69a3a_prof);

        
        $__internal_1baeffd28008600ce57cc6c23e70157fba8a75938e46c2cbb42e5882fed68e82->leave($__internal_1baeffd28008600ce57cc6c23e70157fba8a75938e46c2cbb42e5882fed68e82_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5c595b1f1f902d528293dfe02d7e58134218ff020ea77ba808495142e70a4062 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c595b1f1f902d528293dfe02d7e58134218ff020ea77ba808495142e70a4062->enter($__internal_5c595b1f1f902d528293dfe02d7e58134218ff020ea77ba808495142e70a4062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b4509df5b1f7dbc42d1311855e0fbd98fc15c88b074a1bfe81cf59cc2cc9eef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4509df5b1f7dbc42d1311855e0fbd98fc15c88b074a1bfe81cf59cc2cc9eef4->enter($__internal_b4509df5b1f7dbc42d1311855e0fbd98fc15c88b074a1bfe81cf59cc2cc9eef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b4509df5b1f7dbc42d1311855e0fbd98fc15c88b074a1bfe81cf59cc2cc9eef4->leave($__internal_b4509df5b1f7dbc42d1311855e0fbd98fc15c88b074a1bfe81cf59cc2cc9eef4_prof);

        
        $__internal_5c595b1f1f902d528293dfe02d7e58134218ff020ea77ba808495142e70a4062->leave($__internal_5c595b1f1f902d528293dfe02d7e58134218ff020ea77ba808495142e70a4062_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d840d3d8951d8722f063acffa6b9820d6ddf4d52538439f4512495f81dc20465 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d840d3d8951d8722f063acffa6b9820d6ddf4d52538439f4512495f81dc20465->enter($__internal_d840d3d8951d8722f063acffa6b9820d6ddf4d52538439f4512495f81dc20465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_151999131ea641b4df928fce3f885dfe1033a2c55495f198ff22175151f55b9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_151999131ea641b4df928fce3f885dfe1033a2c55495f198ff22175151f55b9f->enter($__internal_151999131ea641b4df928fce3f885dfe1033a2c55495f198ff22175151f55b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_151999131ea641b4df928fce3f885dfe1033a2c55495f198ff22175151f55b9f->leave($__internal_151999131ea641b4df928fce3f885dfe1033a2c55495f198ff22175151f55b9f_prof);

        
        $__internal_d840d3d8951d8722f063acffa6b9820d6ddf4d52538439f4512495f81dc20465->leave($__internal_d840d3d8951d8722f063acffa6b9820d6ddf4d52538439f4512495f81dc20465_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b76165f73b3f12f42155d2e717237c36bddaabf179c723c72f2c3f7f829b766b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b76165f73b3f12f42155d2e717237c36bddaabf179c723c72f2c3f7f829b766b->enter($__internal_b76165f73b3f12f42155d2e717237c36bddaabf179c723c72f2c3f7f829b766b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_23c6f5053ec9af51d6f88469d222c5ff0b5e2657fb0536e37c6be3d4c99f3067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23c6f5053ec9af51d6f88469d222c5ff0b5e2657fb0536e37c6be3d4c99f3067->enter($__internal_23c6f5053ec9af51d6f88469d222c5ff0b5e2657fb0536e37c6be3d4c99f3067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_23c6f5053ec9af51d6f88469d222c5ff0b5e2657fb0536e37c6be3d4c99f3067->leave($__internal_23c6f5053ec9af51d6f88469d222c5ff0b5e2657fb0536e37c6be3d4c99f3067_prof);

        
        $__internal_b76165f73b3f12f42155d2e717237c36bddaabf179c723c72f2c3f7f829b766b->leave($__internal_b76165f73b3f12f42155d2e717237c36bddaabf179c723c72f2c3f7f829b766b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Coucou tu veux voir mon git ?{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/views/base.html.twig");
    }
}
