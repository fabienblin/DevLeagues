<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_8d743c0f1cefde639d122a610c0d3f2fed19554e13b1004e8f5f7dd4ec7d73d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d0d4cfbb2d3bf4bda7448a2dd347046da9435a0cfbacc47b167ef908e08307d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d0d4cfbb2d3bf4bda7448a2dd347046da9435a0cfbacc47b167ef908e08307d->enter($__internal_8d0d4cfbb2d3bf4bda7448a2dd347046da9435a0cfbacc47b167ef908e08307d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_6e946e32f0af2b121b034893638a8e6b8009f8e17e223598bd84f8d614225d95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e946e32f0af2b121b034893638a8e6b8009f8e17e223598bd84f8d614225d95->enter($__internal_6e946e32f0af2b121b034893638a8e6b8009f8e17e223598bd84f8d614225d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_8d0d4cfbb2d3bf4bda7448a2dd347046da9435a0cfbacc47b167ef908e08307d->leave($__internal_8d0d4cfbb2d3bf4bda7448a2dd347046da9435a0cfbacc47b167ef908e08307d_prof);

        
        $__internal_6e946e32f0af2b121b034893638a8e6b8009f8e17e223598bd84f8d614225d95->leave($__internal_6e946e32f0af2b121b034893638a8e6b8009f8e17e223598bd84f8d614225d95_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
