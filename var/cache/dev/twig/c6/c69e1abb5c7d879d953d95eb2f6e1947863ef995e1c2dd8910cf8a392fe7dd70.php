<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_83599b928916c78f41aec5b5e0fb7e569dd96307ccea353cfd25e117449a38d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e11795dd537b3388b8a394b0c7bbdff61bb153930426aae4b0de608f0201acf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e11795dd537b3388b8a394b0c7bbdff61bb153930426aae4b0de608f0201acf9->enter($__internal_e11795dd537b3388b8a394b0c7bbdff61bb153930426aae4b0de608f0201acf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_41bcd44ac9b671f25cb895c5ae5be9d97df09e64e9af3222e6b6ef663306355c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41bcd44ac9b671f25cb895c5ae5be9d97df09e64e9af3222e6b6ef663306355c->enter($__internal_41bcd44ac9b671f25cb895c5ae5be9d97df09e64e9af3222e6b6ef663306355c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e11795dd537b3388b8a394b0c7bbdff61bb153930426aae4b0de608f0201acf9->leave($__internal_e11795dd537b3388b8a394b0c7bbdff61bb153930426aae4b0de608f0201acf9_prof);

        
        $__internal_41bcd44ac9b671f25cb895c5ae5be9d97df09e64e9af3222e6b6ef663306355c->leave($__internal_41bcd44ac9b671f25cb895c5ae5be9d97df09e64e9af3222e6b6ef663306355c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7f55224a269a428ad9e96b1a50c3c9f94359dd04579d85fe2f6987b2eecd0e92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f55224a269a428ad9e96b1a50c3c9f94359dd04579d85fe2f6987b2eecd0e92->enter($__internal_7f55224a269a428ad9e96b1a50c3c9f94359dd04579d85fe2f6987b2eecd0e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a992e09f9a35b4122d19bfc1aba4481f23a7e435949c89c5d45b7d443af998b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a992e09f9a35b4122d19bfc1aba4481f23a7e435949c89c5d45b7d443af998b0->enter($__internal_a992e09f9a35b4122d19bfc1aba4481f23a7e435949c89c5d45b7d443af998b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_a992e09f9a35b4122d19bfc1aba4481f23a7e435949c89c5d45b7d443af998b0->leave($__internal_a992e09f9a35b4122d19bfc1aba4481f23a7e435949c89c5d45b7d443af998b0_prof);

        
        $__internal_7f55224a269a428ad9e96b1a50c3c9f94359dd04579d85fe2f6987b2eecd0e92->leave($__internal_7f55224a269a428ad9e96b1a50c3c9f94359dd04579d85fe2f6987b2eecd0e92_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a2e57b6243e475357fc9aa4e940da71dec58ab3f206b0134919f0114d244b51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a2e57b6243e475357fc9aa4e940da71dec58ab3f206b0134919f0114d244b51->enter($__internal_8a2e57b6243e475357fc9aa4e940da71dec58ab3f206b0134919f0114d244b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_39a49dbca4a249dde24b82acb9551397868e0850b6633bd15be72c591babc16c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39a49dbca4a249dde24b82acb9551397868e0850b6633bd15be72c591babc16c->enter($__internal_39a49dbca4a249dde24b82acb9551397868e0850b6633bd15be72c591babc16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_39a49dbca4a249dde24b82acb9551397868e0850b6633bd15be72c591babc16c->leave($__internal_39a49dbca4a249dde24b82acb9551397868e0850b6633bd15be72c591babc16c_prof);

        
        $__internal_8a2e57b6243e475357fc9aa4e940da71dec58ab3f206b0134919f0114d244b51->leave($__internal_8a2e57b6243e475357fc9aa4e940da71dec58ab3f206b0134919f0114d244b51_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
