<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_fcf7e632d5a17672d8d0fe8330109b82fab2c2c997002a898be6687ee7e0e45b extends Twig_Template
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
        $__internal_36fc954cbd299642e8d4c2277347cf257611ae1728f3347f3665341abdbe1780 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36fc954cbd299642e8d4c2277347cf257611ae1728f3347f3665341abdbe1780->enter($__internal_36fc954cbd299642e8d4c2277347cf257611ae1728f3347f3665341abdbe1780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c44d60dab6b620db604a2bbf760b3abe743b80b28431043d34af325f5c02bb34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c44d60dab6b620db604a2bbf760b3abe743b80b28431043d34af325f5c02bb34->enter($__internal_c44d60dab6b620db604a2bbf760b3abe743b80b28431043d34af325f5c02bb34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36fc954cbd299642e8d4c2277347cf257611ae1728f3347f3665341abdbe1780->leave($__internal_36fc954cbd299642e8d4c2277347cf257611ae1728f3347f3665341abdbe1780_prof);

        
        $__internal_c44d60dab6b620db604a2bbf760b3abe743b80b28431043d34af325f5c02bb34->leave($__internal_c44d60dab6b620db604a2bbf760b3abe743b80b28431043d34af325f5c02bb34_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3e5f758bc1ec3b54355746bdb267b08f3eacc08a4bb306f72969e938b4a51d14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e5f758bc1ec3b54355746bdb267b08f3eacc08a4bb306f72969e938b4a51d14->enter($__internal_3e5f758bc1ec3b54355746bdb267b08f3eacc08a4bb306f72969e938b4a51d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7e241125858b7f0bea89ff3bed835bad92eff765df9611c0fc9c6b3d222473e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e241125858b7f0bea89ff3bed835bad92eff765df9611c0fc9c6b3d222473e6->enter($__internal_7e241125858b7f0bea89ff3bed835bad92eff765df9611c0fc9c6b3d222473e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7e241125858b7f0bea89ff3bed835bad92eff765df9611c0fc9c6b3d222473e6->leave($__internal_7e241125858b7f0bea89ff3bed835bad92eff765df9611c0fc9c6b3d222473e6_prof);

        
        $__internal_3e5f758bc1ec3b54355746bdb267b08f3eacc08a4bb306f72969e938b4a51d14->leave($__internal_3e5f758bc1ec3b54355746bdb267b08f3eacc08a4bb306f72969e938b4a51d14_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1508920d1a21bb8b792216158b401b134cbad916eabf3a45e43f6a8533a4e79b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1508920d1a21bb8b792216158b401b134cbad916eabf3a45e43f6a8533a4e79b->enter($__internal_1508920d1a21bb8b792216158b401b134cbad916eabf3a45e43f6a8533a4e79b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_43be586dd217e3bc85f32d785ff9437de1110da44449aa66cc2598e012638bf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43be586dd217e3bc85f32d785ff9437de1110da44449aa66cc2598e012638bf7->enter($__internal_43be586dd217e3bc85f32d785ff9437de1110da44449aa66cc2598e012638bf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_43be586dd217e3bc85f32d785ff9437de1110da44449aa66cc2598e012638bf7->leave($__internal_43be586dd217e3bc85f32d785ff9437de1110da44449aa66cc2598e012638bf7_prof);

        
        $__internal_1508920d1a21bb8b792216158b401b134cbad916eabf3a45e43f6a8533a4e79b->leave($__internal_1508920d1a21bb8b792216158b401b134cbad916eabf3a45e43f6a8533a4e79b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c3cd06f725726d1e270559e4eedaf4ec46b4ef1d84fb858f66364b49662e7a02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3cd06f725726d1e270559e4eedaf4ec46b4ef1d84fb858f66364b49662e7a02->enter($__internal_c3cd06f725726d1e270559e4eedaf4ec46b4ef1d84fb858f66364b49662e7a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d69b351ff4adc512ccde2265fa4a24e692f7ea55f6ddef497042adf9f9542adf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d69b351ff4adc512ccde2265fa4a24e692f7ea55f6ddef497042adf9f9542adf->enter($__internal_d69b351ff4adc512ccde2265fa4a24e692f7ea55f6ddef497042adf9f9542adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d69b351ff4adc512ccde2265fa4a24e692f7ea55f6ddef497042adf9f9542adf->leave($__internal_d69b351ff4adc512ccde2265fa4a24e692f7ea55f6ddef497042adf9f9542adf_prof);

        
        $__internal_c3cd06f725726d1e270559e4eedaf4ec46b4ef1d84fb858f66364b49662e7a02->leave($__internal_c3cd06f725726d1e270559e4eedaf4ec46b4ef1d84fb858f66364b49662e7a02_prof);

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
