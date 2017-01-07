<?php

/* @DevLeagues/League/show.html.twig */
class __TwigTemplate_3d475dfe9137d05bb79b293bda839ecb7e2843a39e4a21f28a6c14749834a511 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle:League:base.html.twig", "@DevLeagues/League/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevLeaguesBundle:League:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ca2e1f486cc0edb241ee319e1d1762d6b197b7fe495b7a1a5d508cbfeea8d7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ca2e1f486cc0edb241ee319e1d1762d6b197b7fe495b7a1a5d508cbfeea8d7a->enter($__internal_1ca2e1f486cc0edb241ee319e1d1762d6b197b7fe495b7a1a5d508cbfeea8d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/League/show.html.twig"));

        $__internal_7e36cb39491816d8c3dc8fe2b28981f8486f8c4ce1e9ed591c8e36378419e3f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e36cb39491816d8c3dc8fe2b28981f8486f8c4ce1e9ed591c8e36378419e3f8->enter($__internal_7e36cb39491816d8c3dc8fe2b28981f8486f8c4ce1e9ed591c8e36378419e3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/League/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ca2e1f486cc0edb241ee319e1d1762d6b197b7fe495b7a1a5d508cbfeea8d7a->leave($__internal_1ca2e1f486cc0edb241ee319e1d1762d6b197b7fe495b7a1a5d508cbfeea8d7a_prof);

        
        $__internal_7e36cb39491816d8c3dc8fe2b28981f8486f8c4ce1e9ed591c8e36378419e3f8->leave($__internal_7e36cb39491816d8c3dc8fe2b28981f8486f8c4ce1e9ed591c8e36378419e3f8_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b54b00f0ea744d7a097c66e070859e8722a4677dcd8afcceeea5e020a56b402a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b54b00f0ea744d7a097c66e070859e8722a4677dcd8afcceeea5e020a56b402a->enter($__internal_b54b00f0ea744d7a097c66e070859e8722a4677dcd8afcceeea5e020a56b402a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_73a96e499e5d94ec7c09c0f7282af734a4d5d020412f340436ab2e388942af96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73a96e499e5d94ec7c09c0f7282af734a4d5d020412f340436ab2e388942af96->enter($__internal_73a96e499e5d94ec7c09c0f7282af734a4d5d020412f340436ab2e388942af96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h1>Welcome to the League:show page</h1>
";
        
        $__internal_73a96e499e5d94ec7c09c0f7282af734a4d5d020412f340436ab2e388942af96->leave($__internal_73a96e499e5d94ec7c09c0f7282af734a4d5d020412f340436ab2e388942af96_prof);

        
        $__internal_b54b00f0ea744d7a097c66e070859e8722a4677dcd8afcceeea5e020a56b402a->leave($__internal_b54b00f0ea744d7a097c66e070859e8722a4677dcd8afcceeea5e020a56b402a_prof);

    }

    public function getTemplateName()
    {
        return "@DevLeagues/League/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"DevLeaguesBundle:League:base.html.twig\" %}
{% block body %}
<h1>Welcome to the League:show page</h1>
{% endblock %}
", "@DevLeagues/League/show.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/League/show.html.twig");
    }
}
