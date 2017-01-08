<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4cc643af3deeaa7586c7f941684118fa4c0e6e57760ef7b86a87399dd2c9ed96 extends Twig_Template
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
        $__internal_b8802d35d39591cd7096351813a8c20f832f113f84091bb27bd9590216abc02e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8802d35d39591cd7096351813a8c20f832f113f84091bb27bd9590216abc02e->enter($__internal_b8802d35d39591cd7096351813a8c20f832f113f84091bb27bd9590216abc02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_dd5118b3f20c8688c997b804a9029d515707bd7d2eee7b9a61c4d4ea9f46b48a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd5118b3f20c8688c997b804a9029d515707bd7d2eee7b9a61c4d4ea9f46b48a->enter($__internal_dd5118b3f20c8688c997b804a9029d515707bd7d2eee7b9a61c4d4ea9f46b48a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8802d35d39591cd7096351813a8c20f832f113f84091bb27bd9590216abc02e->leave($__internal_b8802d35d39591cd7096351813a8c20f832f113f84091bb27bd9590216abc02e_prof);

        
        $__internal_dd5118b3f20c8688c997b804a9029d515707bd7d2eee7b9a61c4d4ea9f46b48a->leave($__internal_dd5118b3f20c8688c997b804a9029d515707bd7d2eee7b9a61c4d4ea9f46b48a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0588d53f41c85987538b10d9925aac863b71983b08125b6995da49433d6fdcbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0588d53f41c85987538b10d9925aac863b71983b08125b6995da49433d6fdcbf->enter($__internal_0588d53f41c85987538b10d9925aac863b71983b08125b6995da49433d6fdcbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fd3b8778e271a59e86c83632e5839549e7d9a3cf7ec706f06e2317636e38b9de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd3b8778e271a59e86c83632e5839549e7d9a3cf7ec706f06e2317636e38b9de->enter($__internal_fd3b8778e271a59e86c83632e5839549e7d9a3cf7ec706f06e2317636e38b9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_fd3b8778e271a59e86c83632e5839549e7d9a3cf7ec706f06e2317636e38b9de->leave($__internal_fd3b8778e271a59e86c83632e5839549e7d9a3cf7ec706f06e2317636e38b9de_prof);

        
        $__internal_0588d53f41c85987538b10d9925aac863b71983b08125b6995da49433d6fdcbf->leave($__internal_0588d53f41c85987538b10d9925aac863b71983b08125b6995da49433d6fdcbf_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_add5b2ae32917ef408be213023b8c453f82c7707459c7de4cce4f5d418699806 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_add5b2ae32917ef408be213023b8c453f82c7707459c7de4cce4f5d418699806->enter($__internal_add5b2ae32917ef408be213023b8c453f82c7707459c7de4cce4f5d418699806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5d17dab8ee0ca011cc6acda2d8b9449a439c5a7d0ebdcc39db485405a6a0de57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d17dab8ee0ca011cc6acda2d8b9449a439c5a7d0ebdcc39db485405a6a0de57->enter($__internal_5d17dab8ee0ca011cc6acda2d8b9449a439c5a7d0ebdcc39db485405a6a0de57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5d17dab8ee0ca011cc6acda2d8b9449a439c5a7d0ebdcc39db485405a6a0de57->leave($__internal_5d17dab8ee0ca011cc6acda2d8b9449a439c5a7d0ebdcc39db485405a6a0de57_prof);

        
        $__internal_add5b2ae32917ef408be213023b8c453f82c7707459c7de4cce4f5d418699806->leave($__internal_add5b2ae32917ef408be213023b8c453f82c7707459c7de4cce4f5d418699806_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_683be50c76b9f289a19b5c938de493e675b00a462a7d16eab3910b4d7d9328b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_683be50c76b9f289a19b5c938de493e675b00a462a7d16eab3910b4d7d9328b1->enter($__internal_683be50c76b9f289a19b5c938de493e675b00a462a7d16eab3910b4d7d9328b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d16834b2c677ee8cb132efb18e82bdb776c98f677748e59b27406099cc072f51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d16834b2c677ee8cb132efb18e82bdb776c98f677748e59b27406099cc072f51->enter($__internal_d16834b2c677ee8cb132efb18e82bdb776c98f677748e59b27406099cc072f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_d16834b2c677ee8cb132efb18e82bdb776c98f677748e59b27406099cc072f51->leave($__internal_d16834b2c677ee8cb132efb18e82bdb776c98f677748e59b27406099cc072f51_prof);

        
        $__internal_683be50c76b9f289a19b5c938de493e675b00a462a7d16eab3910b4d7d9328b1->leave($__internal_683be50c76b9f289a19b5c938de493e675b00a462a7d16eab3910b4d7d9328b1_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
