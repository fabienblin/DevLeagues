<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_eb5dad20c69cbd8b331d4c37074e66e52e3e2c6427b41449e3655f95919ffd54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_c1a4ca26c4b61f545a2698eb6d240146196f547a7aaab8f11744444eca769f1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1a4ca26c4b61f545a2698eb6d240146196f547a7aaab8f11744444eca769f1d->enter($__internal_c1a4ca26c4b61f545a2698eb6d240146196f547a7aaab8f11744444eca769f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d8759be6ce7fff151ef3d5fbe8e5a781a8fda92197a3c28e57db151f75f578cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8759be6ce7fff151ef3d5fbe8e5a781a8fda92197a3c28e57db151f75f578cc->enter($__internal_d8759be6ce7fff151ef3d5fbe8e5a781a8fda92197a3c28e57db151f75f578cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1a4ca26c4b61f545a2698eb6d240146196f547a7aaab8f11744444eca769f1d->leave($__internal_c1a4ca26c4b61f545a2698eb6d240146196f547a7aaab8f11744444eca769f1d_prof);

        
        $__internal_d8759be6ce7fff151ef3d5fbe8e5a781a8fda92197a3c28e57db151f75f578cc->leave($__internal_d8759be6ce7fff151ef3d5fbe8e5a781a8fda92197a3c28e57db151f75f578cc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_63cebbf0f4b5847cd0ff7b37beb71d0e0227b33b2995a80c07541f9192c06b0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63cebbf0f4b5847cd0ff7b37beb71d0e0227b33b2995a80c07541f9192c06b0a->enter($__internal_63cebbf0f4b5847cd0ff7b37beb71d0e0227b33b2995a80c07541f9192c06b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b5a48d73bd805121703bbeceb5a72a5c8c4f50d5f7afb3fef16adb895e2ad153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5a48d73bd805121703bbeceb5a72a5c8c4f50d5f7afb3fef16adb895e2ad153->enter($__internal_b5a48d73bd805121703bbeceb5a72a5c8c4f50d5f7afb3fef16adb895e2ad153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b5a48d73bd805121703bbeceb5a72a5c8c4f50d5f7afb3fef16adb895e2ad153->leave($__internal_b5a48d73bd805121703bbeceb5a72a5c8c4f50d5f7afb3fef16adb895e2ad153_prof);

        
        $__internal_63cebbf0f4b5847cd0ff7b37beb71d0e0227b33b2995a80c07541f9192c06b0a->leave($__internal_63cebbf0f4b5847cd0ff7b37beb71d0e0227b33b2995a80c07541f9192c06b0a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_565f646e8e19cb7c719e8c15c2651af8524a750166bdfeb4c9ce9fc6a22e8c1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_565f646e8e19cb7c719e8c15c2651af8524a750166bdfeb4c9ce9fc6a22e8c1c->enter($__internal_565f646e8e19cb7c719e8c15c2651af8524a750166bdfeb4c9ce9fc6a22e8c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_56e63209f55692aefe116ca0678c594486ebe6ac4f6bd358331bdfaad7cc9550 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56e63209f55692aefe116ca0678c594486ebe6ac4f6bd358331bdfaad7cc9550->enter($__internal_56e63209f55692aefe116ca0678c594486ebe6ac4f6bd358331bdfaad7cc9550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_56e63209f55692aefe116ca0678c594486ebe6ac4f6bd358331bdfaad7cc9550->leave($__internal_56e63209f55692aefe116ca0678c594486ebe6ac4f6bd358331bdfaad7cc9550_prof);

        
        $__internal_565f646e8e19cb7c719e8c15c2651af8524a750166bdfeb4c9ce9fc6a22e8c1c->leave($__internal_565f646e8e19cb7c719e8c15c2651af8524a750166bdfeb4c9ce9fc6a22e8c1c_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_14d5c371f4a6dabfd34a823d4a51d282d4f6f5738d009db6a1295a2d493d7957 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14d5c371f4a6dabfd34a823d4a51d282d4f6f5738d009db6a1295a2d493d7957->enter($__internal_14d5c371f4a6dabfd34a823d4a51d282d4f6f5738d009db6a1295a2d493d7957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_de53a43da3e169ca5d95ff4568b5e8e0f536f5ad9e309a6a43736ec353f4e59f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de53a43da3e169ca5d95ff4568b5e8e0f536f5ad9e309a6a43736ec353f4e59f->enter($__internal_de53a43da3e169ca5d95ff4568b5e8e0f536f5ad9e309a6a43736ec353f4e59f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_de53a43da3e169ca5d95ff4568b5e8e0f536f5ad9e309a6a43736ec353f4e59f->leave($__internal_de53a43da3e169ca5d95ff4568b5e8e0f536f5ad9e309a6a43736ec353f4e59f_prof);

        
        $__internal_14d5c371f4a6dabfd34a823d4a51d282d4f6f5738d009db6a1295a2d493d7957->leave($__internal_14d5c371f4a6dabfd34a823d4a51d282d4f6f5738d009db6a1295a2d493d7957_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
