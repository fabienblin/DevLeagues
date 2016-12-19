<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2e5edfdcc25715187e52e84003df981ecde8aed43bc6dcbc94cbb7aa9fc36a1c extends Twig_Template
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
        $__internal_8a5f399ac9910c808dd76a68f06a8151c43f3818e7645832827350741b5d88af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a5f399ac9910c808dd76a68f06a8151c43f3818e7645832827350741b5d88af->enter($__internal_8a5f399ac9910c808dd76a68f06a8151c43f3818e7645832827350741b5d88af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a5f399ac9910c808dd76a68f06a8151c43f3818e7645832827350741b5d88af->leave($__internal_8a5f399ac9910c808dd76a68f06a8151c43f3818e7645832827350741b5d88af_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ab54c82017b13b8434a9105164c0eb0d9d072d523072b4e6e060e5e270835105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab54c82017b13b8434a9105164c0eb0d9d072d523072b4e6e060e5e270835105->enter($__internal_ab54c82017b13b8434a9105164c0eb0d9d072d523072b4e6e060e5e270835105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ab54c82017b13b8434a9105164c0eb0d9d072d523072b4e6e060e5e270835105->leave($__internal_ab54c82017b13b8434a9105164c0eb0d9d072d523072b4e6e060e5e270835105_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_142660168abe073fc52a6f9ec4c86c82f64ea6784a0dbe9c1fbeee4db4f17799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_142660168abe073fc52a6f9ec4c86c82f64ea6784a0dbe9c1fbeee4db4f17799->enter($__internal_142660168abe073fc52a6f9ec4c86c82f64ea6784a0dbe9c1fbeee4db4f17799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_142660168abe073fc52a6f9ec4c86c82f64ea6784a0dbe9c1fbeee4db4f17799->leave($__internal_142660168abe073fc52a6f9ec4c86c82f64ea6784a0dbe9c1fbeee4db4f17799_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7acd36080f1d21cc772e10fb16f12101f1abcde4400f3a0e07f0da340e2a0a1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7acd36080f1d21cc772e10fb16f12101f1abcde4400f3a0e07f0da340e2a0a1e->enter($__internal_7acd36080f1d21cc772e10fb16f12101f1abcde4400f3a0e07f0da340e2a0a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7acd36080f1d21cc772e10fb16f12101f1abcde4400f3a0e07f0da340e2a0a1e->leave($__internal_7acd36080f1d21cc772e10fb16f12101f1abcde4400f3a0e07f0da340e2a0a1e_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
