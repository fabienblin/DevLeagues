<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_18c1d93370eefbf48fbe91e0bacb4eaf2cb157372dd41605162c9da890905f9c extends Twig_Template
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
        $__internal_3d8b6bb8b67790d124c20edf7716f4b51ef2a9f5408faa903cbb0d217fbc4e4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d8b6bb8b67790d124c20edf7716f4b51ef2a9f5408faa903cbb0d217fbc4e4e->enter($__internal_3d8b6bb8b67790d124c20edf7716f4b51ef2a9f5408faa903cbb0d217fbc4e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_19e32ab74b31103e9657ab11115fde7ef75c9533d21caff817d2376f37695632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19e32ab74b31103e9657ab11115fde7ef75c9533d21caff817d2376f37695632->enter($__internal_19e32ab74b31103e9657ab11115fde7ef75c9533d21caff817d2376f37695632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d8b6bb8b67790d124c20edf7716f4b51ef2a9f5408faa903cbb0d217fbc4e4e->leave($__internal_3d8b6bb8b67790d124c20edf7716f4b51ef2a9f5408faa903cbb0d217fbc4e4e_prof);

        
        $__internal_19e32ab74b31103e9657ab11115fde7ef75c9533d21caff817d2376f37695632->leave($__internal_19e32ab74b31103e9657ab11115fde7ef75c9533d21caff817d2376f37695632_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_934e28f72e96b0d588f838172e4b11538a75d97f601cd266fe313a1a5793321d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_934e28f72e96b0d588f838172e4b11538a75d97f601cd266fe313a1a5793321d->enter($__internal_934e28f72e96b0d588f838172e4b11538a75d97f601cd266fe313a1a5793321d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b5a85acd43068ed906d710f2651f6fc0e4c3427cb7cf944a2f73e5b334b72885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5a85acd43068ed906d710f2651f6fc0e4c3427cb7cf944a2f73e5b334b72885->enter($__internal_b5a85acd43068ed906d710f2651f6fc0e4c3427cb7cf944a2f73e5b334b72885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b5a85acd43068ed906d710f2651f6fc0e4c3427cb7cf944a2f73e5b334b72885->leave($__internal_b5a85acd43068ed906d710f2651f6fc0e4c3427cb7cf944a2f73e5b334b72885_prof);

        
        $__internal_934e28f72e96b0d588f838172e4b11538a75d97f601cd266fe313a1a5793321d->leave($__internal_934e28f72e96b0d588f838172e4b11538a75d97f601cd266fe313a1a5793321d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6e7c1ba7d13f7c529436830f5251ccae10f94a7a9b7ae9a06b87e63ce762f39d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e7c1ba7d13f7c529436830f5251ccae10f94a7a9b7ae9a06b87e63ce762f39d->enter($__internal_6e7c1ba7d13f7c529436830f5251ccae10f94a7a9b7ae9a06b87e63ce762f39d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_475c99985e4216a653ab792262f733409f258ceeda6a62733c7859a7439dede4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_475c99985e4216a653ab792262f733409f258ceeda6a62733c7859a7439dede4->enter($__internal_475c99985e4216a653ab792262f733409f258ceeda6a62733c7859a7439dede4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_475c99985e4216a653ab792262f733409f258ceeda6a62733c7859a7439dede4->leave($__internal_475c99985e4216a653ab792262f733409f258ceeda6a62733c7859a7439dede4_prof);

        
        $__internal_6e7c1ba7d13f7c529436830f5251ccae10f94a7a9b7ae9a06b87e63ce762f39d->leave($__internal_6e7c1ba7d13f7c529436830f5251ccae10f94a7a9b7ae9a06b87e63ce762f39d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5759e5827ed3384d583aff5ec3ccf60c7e8583be37ef8c9aff3755274a25eecd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5759e5827ed3384d583aff5ec3ccf60c7e8583be37ef8c9aff3755274a25eecd->enter($__internal_5759e5827ed3384d583aff5ec3ccf60c7e8583be37ef8c9aff3755274a25eecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2b4859e68b812248f10007a94cbc4d7c94a00bf2cf94ef1ab807748f5e50ffc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b4859e68b812248f10007a94cbc4d7c94a00bf2cf94ef1ab807748f5e50ffc8->enter($__internal_2b4859e68b812248f10007a94cbc4d7c94a00bf2cf94ef1ab807748f5e50ffc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2b4859e68b812248f10007a94cbc4d7c94a00bf2cf94ef1ab807748f5e50ffc8->leave($__internal_2b4859e68b812248f10007a94cbc4d7c94a00bf2cf94ef1ab807748f5e50ffc8_prof);

        
        $__internal_5759e5827ed3384d583aff5ec3ccf60c7e8583be37ef8c9aff3755274a25eecd->leave($__internal_5759e5827ed3384d583aff5ec3ccf60c7e8583be37ef8c9aff3755274a25eecd_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/ubuntu/workspace/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
