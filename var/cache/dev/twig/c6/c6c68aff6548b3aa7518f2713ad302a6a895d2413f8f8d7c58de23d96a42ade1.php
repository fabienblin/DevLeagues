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
        $__internal_ecb000c0a9f89b95e153fd7189a2843b5cc34ff8724b0b6cda490313ced6fc5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecb000c0a9f89b95e153fd7189a2843b5cc34ff8724b0b6cda490313ced6fc5f->enter($__internal_ecb000c0a9f89b95e153fd7189a2843b5cc34ff8724b0b6cda490313ced6fc5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a6664b259d72bb0a264be1fe378e8b6a8ade6ab875cd97c81deb3425f3d1b7f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6664b259d72bb0a264be1fe378e8b6a8ade6ab875cd97c81deb3425f3d1b7f1->enter($__internal_a6664b259d72bb0a264be1fe378e8b6a8ade6ab875cd97c81deb3425f3d1b7f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecb000c0a9f89b95e153fd7189a2843b5cc34ff8724b0b6cda490313ced6fc5f->leave($__internal_ecb000c0a9f89b95e153fd7189a2843b5cc34ff8724b0b6cda490313ced6fc5f_prof);

        
        $__internal_a6664b259d72bb0a264be1fe378e8b6a8ade6ab875cd97c81deb3425f3d1b7f1->leave($__internal_a6664b259d72bb0a264be1fe378e8b6a8ade6ab875cd97c81deb3425f3d1b7f1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9b7afd58ce81d3c8d927fd12815bafd761f535968640868959ceb7c7af99cf31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b7afd58ce81d3c8d927fd12815bafd761f535968640868959ceb7c7af99cf31->enter($__internal_9b7afd58ce81d3c8d927fd12815bafd761f535968640868959ceb7c7af99cf31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2d0c61e584c878fff1a71a242818f3fa4403382c0ac1a1ce95227d4c745417bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d0c61e584c878fff1a71a242818f3fa4403382c0ac1a1ce95227d4c745417bf->enter($__internal_2d0c61e584c878fff1a71a242818f3fa4403382c0ac1a1ce95227d4c745417bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2d0c61e584c878fff1a71a242818f3fa4403382c0ac1a1ce95227d4c745417bf->leave($__internal_2d0c61e584c878fff1a71a242818f3fa4403382c0ac1a1ce95227d4c745417bf_prof);

        
        $__internal_9b7afd58ce81d3c8d927fd12815bafd761f535968640868959ceb7c7af99cf31->leave($__internal_9b7afd58ce81d3c8d927fd12815bafd761f535968640868959ceb7c7af99cf31_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_347a6e28921bc27f7d78728b5b83ae8e2a0d296cfef242f8f5d6dcdbb56d8a3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_347a6e28921bc27f7d78728b5b83ae8e2a0d296cfef242f8f5d6dcdbb56d8a3c->enter($__internal_347a6e28921bc27f7d78728b5b83ae8e2a0d296cfef242f8f5d6dcdbb56d8a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3a60fa0302f96668d0774bdab7099118b480ade5bb491fd2be204c3f534df4c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a60fa0302f96668d0774bdab7099118b480ade5bb491fd2be204c3f534df4c8->enter($__internal_3a60fa0302f96668d0774bdab7099118b480ade5bb491fd2be204c3f534df4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3a60fa0302f96668d0774bdab7099118b480ade5bb491fd2be204c3f534df4c8->leave($__internal_3a60fa0302f96668d0774bdab7099118b480ade5bb491fd2be204c3f534df4c8_prof);

        
        $__internal_347a6e28921bc27f7d78728b5b83ae8e2a0d296cfef242f8f5d6dcdbb56d8a3c->leave($__internal_347a6e28921bc27f7d78728b5b83ae8e2a0d296cfef242f8f5d6dcdbb56d8a3c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e06f5c320943abdfc7fe6892e27251456bfce33a3a27b46ea3f93fca305a70f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e06f5c320943abdfc7fe6892e27251456bfce33a3a27b46ea3f93fca305a70f2->enter($__internal_e06f5c320943abdfc7fe6892e27251456bfce33a3a27b46ea3f93fca305a70f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_948ab5796bf08434b26d62439dca145bd68bdb5724ebd356d4c3efa3b681e742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_948ab5796bf08434b26d62439dca145bd68bdb5724ebd356d4c3efa3b681e742->enter($__internal_948ab5796bf08434b26d62439dca145bd68bdb5724ebd356d4c3efa3b681e742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_948ab5796bf08434b26d62439dca145bd68bdb5724ebd356d4c3efa3b681e742->leave($__internal_948ab5796bf08434b26d62439dca145bd68bdb5724ebd356d4c3efa3b681e742_prof);

        
        $__internal_e06f5c320943abdfc7fe6892e27251456bfce33a3a27b46ea3f93fca305a70f2->leave($__internal_e06f5c320943abdfc7fe6892e27251456bfce33a3a27b46ea3f93fca305a70f2_prof);

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
