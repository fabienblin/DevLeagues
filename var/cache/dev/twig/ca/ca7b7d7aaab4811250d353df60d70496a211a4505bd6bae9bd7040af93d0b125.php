<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_802a81fedb83057b0aaa78fdb8208778e28997aa8c8cabe33aba1eaab3b982c1 extends Twig_Template
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
        $__internal_344cf6e64d0ea22e6ad25794ec1a60eb4abcb0705dcd7b3a639e59fb1fc08f71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_344cf6e64d0ea22e6ad25794ec1a60eb4abcb0705dcd7b3a639e59fb1fc08f71->enter($__internal_344cf6e64d0ea22e6ad25794ec1a60eb4abcb0705dcd7b3a639e59fb1fc08f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d7fdbd1457e80b51e84585a22c182cdd1cc8e271e1a6c68f944c687c46650871 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7fdbd1457e80b51e84585a22c182cdd1cc8e271e1a6c68f944c687c46650871->enter($__internal_d7fdbd1457e80b51e84585a22c182cdd1cc8e271e1a6c68f944c687c46650871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_344cf6e64d0ea22e6ad25794ec1a60eb4abcb0705dcd7b3a639e59fb1fc08f71->leave($__internal_344cf6e64d0ea22e6ad25794ec1a60eb4abcb0705dcd7b3a639e59fb1fc08f71_prof);

        
        $__internal_d7fdbd1457e80b51e84585a22c182cdd1cc8e271e1a6c68f944c687c46650871->leave($__internal_d7fdbd1457e80b51e84585a22c182cdd1cc8e271e1a6c68f944c687c46650871_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_10d481512e873ca3aab3cb8064c85c2191f4305b98800989dfa3ae1da13abaf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10d481512e873ca3aab3cb8064c85c2191f4305b98800989dfa3ae1da13abaf1->enter($__internal_10d481512e873ca3aab3cb8064c85c2191f4305b98800989dfa3ae1da13abaf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_191956c9f7b4069d29a03f95b9349ba5b1890534e52440c56fb1d1430db3a261 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_191956c9f7b4069d29a03f95b9349ba5b1890534e52440c56fb1d1430db3a261->enter($__internal_191956c9f7b4069d29a03f95b9349ba5b1890534e52440c56fb1d1430db3a261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_191956c9f7b4069d29a03f95b9349ba5b1890534e52440c56fb1d1430db3a261->leave($__internal_191956c9f7b4069d29a03f95b9349ba5b1890534e52440c56fb1d1430db3a261_prof);

        
        $__internal_10d481512e873ca3aab3cb8064c85c2191f4305b98800989dfa3ae1da13abaf1->leave($__internal_10d481512e873ca3aab3cb8064c85c2191f4305b98800989dfa3ae1da13abaf1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fe130491f728e1552d29e661e9c3d52d1f288da830791e64fad230f2a270fa66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe130491f728e1552d29e661e9c3d52d1f288da830791e64fad230f2a270fa66->enter($__internal_fe130491f728e1552d29e661e9c3d52d1f288da830791e64fad230f2a270fa66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8a2e8f9651b6b41a58f60d4302b0db7bcd6a609fb21fa6e6a214d928f03545be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a2e8f9651b6b41a58f60d4302b0db7bcd6a609fb21fa6e6a214d928f03545be->enter($__internal_8a2e8f9651b6b41a58f60d4302b0db7bcd6a609fb21fa6e6a214d928f03545be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8a2e8f9651b6b41a58f60d4302b0db7bcd6a609fb21fa6e6a214d928f03545be->leave($__internal_8a2e8f9651b6b41a58f60d4302b0db7bcd6a609fb21fa6e6a214d928f03545be_prof);

        
        $__internal_fe130491f728e1552d29e661e9c3d52d1f288da830791e64fad230f2a270fa66->leave($__internal_fe130491f728e1552d29e661e9c3d52d1f288da830791e64fad230f2a270fa66_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_efd275fdd241d154fb10d8ee7a1dd521c756dba0cdea7fbf017e6eeb64883ffb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efd275fdd241d154fb10d8ee7a1dd521c756dba0cdea7fbf017e6eeb64883ffb->enter($__internal_efd275fdd241d154fb10d8ee7a1dd521c756dba0cdea7fbf017e6eeb64883ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_00833345ab166c62fd575d9e049c48a47970b98b235df19c2cfcd6f49d53f574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00833345ab166c62fd575d9e049c48a47970b98b235df19c2cfcd6f49d53f574->enter($__internal_00833345ab166c62fd575d9e049c48a47970b98b235df19c2cfcd6f49d53f574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_00833345ab166c62fd575d9e049c48a47970b98b235df19c2cfcd6f49d53f574->leave($__internal_00833345ab166c62fd575d9e049c48a47970b98b235df19c2cfcd6f49d53f574_prof);

        
        $__internal_efd275fdd241d154fb10d8ee7a1dd521c756dba0cdea7fbf017e6eeb64883ffb->leave($__internal_efd275fdd241d154fb10d8ee7a1dd521c756dba0cdea7fbf017e6eeb64883ffb_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
