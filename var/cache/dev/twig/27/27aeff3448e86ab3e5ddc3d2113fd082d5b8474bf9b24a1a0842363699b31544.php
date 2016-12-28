<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_e4a02476db6eaa9d4439f5bd77e234b77d6d97d63bb04ef5cd66657fb7c91893 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_b034934ef4019092f9c870c3e830dffa39029402d649be3b3f33d77aa7ea1339 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b034934ef4019092f9c870c3e830dffa39029402d649be3b3f33d77aa7ea1339->enter($__internal_b034934ef4019092f9c870c3e830dffa39029402d649be3b3f33d77aa7ea1339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b034934ef4019092f9c870c3e830dffa39029402d649be3b3f33d77aa7ea1339->leave($__internal_b034934ef4019092f9c870c3e830dffa39029402d649be3b3f33d77aa7ea1339_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_efbcf9f6fc8a9b7d221598a6ba20086c1226faadbc9e27fa397af02cea31bbdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efbcf9f6fc8a9b7d221598a6ba20086c1226faadbc9e27fa397af02cea31bbdf->enter($__internal_efbcf9f6fc8a9b7d221598a6ba20086c1226faadbc9e27fa397af02cea31bbdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_efbcf9f6fc8a9b7d221598a6ba20086c1226faadbc9e27fa397af02cea31bbdf->leave($__internal_efbcf9f6fc8a9b7d221598a6ba20086c1226faadbc9e27fa397af02cea31bbdf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9b8fe1911ed23783754b662fa31e382d096ec4e8791b0753c2838eb66f28df1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b8fe1911ed23783754b662fa31e382d096ec4e8791b0753c2838eb66f28df1b->enter($__internal_9b8fe1911ed23783754b662fa31e382d096ec4e8791b0753c2838eb66f28df1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9b8fe1911ed23783754b662fa31e382d096ec4e8791b0753c2838eb66f28df1b->leave($__internal_9b8fe1911ed23783754b662fa31e382d096ec4e8791b0753c2838eb66f28df1b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2afd8ec6cab62acab4ba48959c9124bc35506625bcea7923932f72ecc7d4e321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2afd8ec6cab62acab4ba48959c9124bc35506625bcea7923932f72ecc7d4e321->enter($__internal_2afd8ec6cab62acab4ba48959c9124bc35506625bcea7923932f72ecc7d4e321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2afd8ec6cab62acab4ba48959c9124bc35506625bcea7923932f72ecc7d4e321->leave($__internal_2afd8ec6cab62acab4ba48959c9124bc35506625bcea7923932f72ecc7d4e321_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
