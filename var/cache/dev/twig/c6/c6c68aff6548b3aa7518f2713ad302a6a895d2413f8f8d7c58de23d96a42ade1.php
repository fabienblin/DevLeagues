<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6105cabd34537aa728e7e55b16f19ad8246b2933fbc5716558f87432b6a124d8 extends Twig_Template
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
        $__internal_7a90260495a0d5fb19ebfeee5e5e9cb8fe7b627bc2703c41bace532f3d83b04e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a90260495a0d5fb19ebfeee5e5e9cb8fe7b627bc2703c41bace532f3d83b04e->enter($__internal_7a90260495a0d5fb19ebfeee5e5e9cb8fe7b627bc2703c41bace532f3d83b04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7ef567c8ee8802a655be2f2f1708db4f3ccc4249591e4f15088beeb0edd752a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ef567c8ee8802a655be2f2f1708db4f3ccc4249591e4f15088beeb0edd752a9->enter($__internal_7ef567c8ee8802a655be2f2f1708db4f3ccc4249591e4f15088beeb0edd752a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a90260495a0d5fb19ebfeee5e5e9cb8fe7b627bc2703c41bace532f3d83b04e->leave($__internal_7a90260495a0d5fb19ebfeee5e5e9cb8fe7b627bc2703c41bace532f3d83b04e_prof);

        
        $__internal_7ef567c8ee8802a655be2f2f1708db4f3ccc4249591e4f15088beeb0edd752a9->leave($__internal_7ef567c8ee8802a655be2f2f1708db4f3ccc4249591e4f15088beeb0edd752a9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8c19d2d890e5f584d266f6ce374ccb8cb8b53180cb9f92f85c35a1c93d7dd414 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c19d2d890e5f584d266f6ce374ccb8cb8b53180cb9f92f85c35a1c93d7dd414->enter($__internal_8c19d2d890e5f584d266f6ce374ccb8cb8b53180cb9f92f85c35a1c93d7dd414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_93c049be99298e2366ff7ea462523eb304d428d4b115cb649e93e7bb8c318ce3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93c049be99298e2366ff7ea462523eb304d428d4b115cb649e93e7bb8c318ce3->enter($__internal_93c049be99298e2366ff7ea462523eb304d428d4b115cb649e93e7bb8c318ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_93c049be99298e2366ff7ea462523eb304d428d4b115cb649e93e7bb8c318ce3->leave($__internal_93c049be99298e2366ff7ea462523eb304d428d4b115cb649e93e7bb8c318ce3_prof);

        
        $__internal_8c19d2d890e5f584d266f6ce374ccb8cb8b53180cb9f92f85c35a1c93d7dd414->leave($__internal_8c19d2d890e5f584d266f6ce374ccb8cb8b53180cb9f92f85c35a1c93d7dd414_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1459a58a407ef5da92b89c259bc1364b06055f1aeaf2de1a2eca44000ec62355 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1459a58a407ef5da92b89c259bc1364b06055f1aeaf2de1a2eca44000ec62355->enter($__internal_1459a58a407ef5da92b89c259bc1364b06055f1aeaf2de1a2eca44000ec62355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bcafc84d3625265bbd425d80f4f63dd9f1a46cff718f18e8639313d997f8c494 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcafc84d3625265bbd425d80f4f63dd9f1a46cff718f18e8639313d997f8c494->enter($__internal_bcafc84d3625265bbd425d80f4f63dd9f1a46cff718f18e8639313d997f8c494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bcafc84d3625265bbd425d80f4f63dd9f1a46cff718f18e8639313d997f8c494->leave($__internal_bcafc84d3625265bbd425d80f4f63dd9f1a46cff718f18e8639313d997f8c494_prof);

        
        $__internal_1459a58a407ef5da92b89c259bc1364b06055f1aeaf2de1a2eca44000ec62355->leave($__internal_1459a58a407ef5da92b89c259bc1364b06055f1aeaf2de1a2eca44000ec62355_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2c2a20668b1fcdd733144eba7d19f2ffd63aa10ff12eaadcaf701e1191c7fea4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c2a20668b1fcdd733144eba7d19f2ffd63aa10ff12eaadcaf701e1191c7fea4->enter($__internal_2c2a20668b1fcdd733144eba7d19f2ffd63aa10ff12eaadcaf701e1191c7fea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7b85c15cf1c3e5bc8afa30e909ba8c3f873bb89c95635856998973f348dd6d00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b85c15cf1c3e5bc8afa30e909ba8c3f873bb89c95635856998973f348dd6d00->enter($__internal_7b85c15cf1c3e5bc8afa30e909ba8c3f873bb89c95635856998973f348dd6d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7b85c15cf1c3e5bc8afa30e909ba8c3f873bb89c95635856998973f348dd6d00->leave($__internal_7b85c15cf1c3e5bc8afa30e909ba8c3f873bb89c95635856998973f348dd6d00_prof);

        
        $__internal_2c2a20668b1fcdd733144eba7d19f2ffd63aa10ff12eaadcaf701e1191c7fea4->leave($__internal_2c2a20668b1fcdd733144eba7d19f2ffd63aa10ff12eaadcaf701e1191c7fea4_prof);

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
