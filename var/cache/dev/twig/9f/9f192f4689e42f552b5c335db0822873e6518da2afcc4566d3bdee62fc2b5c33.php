<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_192c3838f558bb8278a114793db317e2297829742d47169c0f7ac75156499974 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e04d829bcd7d26a6ba22a6e7b0958dedd685b88ec089ae15b8fc556e70c33ded = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e04d829bcd7d26a6ba22a6e7b0958dedd685b88ec089ae15b8fc556e70c33ded->enter($__internal_e04d829bcd7d26a6ba22a6e7b0958dedd685b88ec089ae15b8fc556e70c33ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_de2fb8fc238a34f55855fc06a6b2aa7c999530a15eef2184b76a143bbee1086c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de2fb8fc238a34f55855fc06a6b2aa7c999530a15eef2184b76a143bbee1086c->enter($__internal_de2fb8fc238a34f55855fc06a6b2aa7c999530a15eef2184b76a143bbee1086c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e04d829bcd7d26a6ba22a6e7b0958dedd685b88ec089ae15b8fc556e70c33ded->leave($__internal_e04d829bcd7d26a6ba22a6e7b0958dedd685b88ec089ae15b8fc556e70c33ded_prof);

        
        $__internal_de2fb8fc238a34f55855fc06a6b2aa7c999530a15eef2184b76a143bbee1086c->leave($__internal_de2fb8fc238a34f55855fc06a6b2aa7c999530a15eef2184b76a143bbee1086c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_da428ad5b61e4ef28c6dd4adafee5978d81732baad41a6ca48ecfb8e02dad8c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da428ad5b61e4ef28c6dd4adafee5978d81732baad41a6ca48ecfb8e02dad8c1->enter($__internal_da428ad5b61e4ef28c6dd4adafee5978d81732baad41a6ca48ecfb8e02dad8c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8bbc51599c1d6b4048f4630fa24904527f77fda9018b617c73c07c8538034878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bbc51599c1d6b4048f4630fa24904527f77fda9018b617c73c07c8538034878->enter($__internal_8bbc51599c1d6b4048f4630fa24904527f77fda9018b617c73c07c8538034878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8bbc51599c1d6b4048f4630fa24904527f77fda9018b617c73c07c8538034878->leave($__internal_8bbc51599c1d6b4048f4630fa24904527f77fda9018b617c73c07c8538034878_prof);

        
        $__internal_da428ad5b61e4ef28c6dd4adafee5978d81732baad41a6ca48ecfb8e02dad8c1->leave($__internal_da428ad5b61e4ef28c6dd4adafee5978d81732baad41a6ca48ecfb8e02dad8c1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a93c7cb17c26d442efbe9dd2a6c9fc8f4c67b8f031ec973f6cca133e9b27ea9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a93c7cb17c26d442efbe9dd2a6c9fc8f4c67b8f031ec973f6cca133e9b27ea9d->enter($__internal_a93c7cb17c26d442efbe9dd2a6c9fc8f4c67b8f031ec973f6cca133e9b27ea9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_31ace4ddf5da5647e26b9a0de29b66df3e1a5f4e4c641e47c5831cb3e70557cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31ace4ddf5da5647e26b9a0de29b66df3e1a5f4e4c641e47c5831cb3e70557cd->enter($__internal_31ace4ddf5da5647e26b9a0de29b66df3e1a5f4e4c641e47c5831cb3e70557cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_31ace4ddf5da5647e26b9a0de29b66df3e1a5f4e4c641e47c5831cb3e70557cd->leave($__internal_31ace4ddf5da5647e26b9a0de29b66df3e1a5f4e4c641e47c5831cb3e70557cd_prof);

        
        $__internal_a93c7cb17c26d442efbe9dd2a6c9fc8f4c67b8f031ec973f6cca133e9b27ea9d->leave($__internal_a93c7cb17c26d442efbe9dd2a6c9fc8f4c67b8f031ec973f6cca133e9b27ea9d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cd33b8cda1bae0476121049c13e45ff800557b3ce7e78b9b63b1eaad0ad3e30f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd33b8cda1bae0476121049c13e45ff800557b3ce7e78b9b63b1eaad0ad3e30f->enter($__internal_cd33b8cda1bae0476121049c13e45ff800557b3ce7e78b9b63b1eaad0ad3e30f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_56b2d75aac7c1b200207e3e743205c100aa262c8a8d76027f1f11347d0aef9a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56b2d75aac7c1b200207e3e743205c100aa262c8a8d76027f1f11347d0aef9a1->enter($__internal_56b2d75aac7c1b200207e3e743205c100aa262c8a8d76027f1f11347d0aef9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_56b2d75aac7c1b200207e3e743205c100aa262c8a8d76027f1f11347d0aef9a1->leave($__internal_56b2d75aac7c1b200207e3e743205c100aa262c8a8d76027f1f11347d0aef9a1_prof);

        
        $__internal_cd33b8cda1bae0476121049c13e45ff800557b3ce7e78b9b63b1eaad0ad3e30f->leave($__internal_cd33b8cda1bae0476121049c13e45ff800557b3ce7e78b9b63b1eaad0ad3e30f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
