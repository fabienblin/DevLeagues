<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_dde01934ab06245a7514ceec38d2b1ee56c91f30e37f2380295fd97b761f0ca2 extends Twig_Template
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
        $__internal_62b45b577697234a11235a28a6766624b484948725aa6bc75ac50faac34e240f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62b45b577697234a11235a28a6766624b484948725aa6bc75ac50faac34e240f->enter($__internal_62b45b577697234a11235a28a6766624b484948725aa6bc75ac50faac34e240f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_47fc0d0be56b2668b2d96cf8c9edee8b33e98d624ed872c82976eeeba72fae93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47fc0d0be56b2668b2d96cf8c9edee8b33e98d624ed872c82976eeeba72fae93->enter($__internal_47fc0d0be56b2668b2d96cf8c9edee8b33e98d624ed872c82976eeeba72fae93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62b45b577697234a11235a28a6766624b484948725aa6bc75ac50faac34e240f->leave($__internal_62b45b577697234a11235a28a6766624b484948725aa6bc75ac50faac34e240f_prof);

        
        $__internal_47fc0d0be56b2668b2d96cf8c9edee8b33e98d624ed872c82976eeeba72fae93->leave($__internal_47fc0d0be56b2668b2d96cf8c9edee8b33e98d624ed872c82976eeeba72fae93_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_72cf542cef2ee0d14938bac0bc8c6ed4195bd940a799e659e7695030518bfebb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72cf542cef2ee0d14938bac0bc8c6ed4195bd940a799e659e7695030518bfebb->enter($__internal_72cf542cef2ee0d14938bac0bc8c6ed4195bd940a799e659e7695030518bfebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_43ac66568151686e0c0a99282f76806ecc1c8d882dd8675c5f1c7e8842dc511a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43ac66568151686e0c0a99282f76806ecc1c8d882dd8675c5f1c7e8842dc511a->enter($__internal_43ac66568151686e0c0a99282f76806ecc1c8d882dd8675c5f1c7e8842dc511a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_43ac66568151686e0c0a99282f76806ecc1c8d882dd8675c5f1c7e8842dc511a->leave($__internal_43ac66568151686e0c0a99282f76806ecc1c8d882dd8675c5f1c7e8842dc511a_prof);

        
        $__internal_72cf542cef2ee0d14938bac0bc8c6ed4195bd940a799e659e7695030518bfebb->leave($__internal_72cf542cef2ee0d14938bac0bc8c6ed4195bd940a799e659e7695030518bfebb_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f2b30eefb8f61490372a7a7ec72bc8eacb09cb2772bafcacb9ca20e2d75d1207 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2b30eefb8f61490372a7a7ec72bc8eacb09cb2772bafcacb9ca20e2d75d1207->enter($__internal_f2b30eefb8f61490372a7a7ec72bc8eacb09cb2772bafcacb9ca20e2d75d1207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e3f3c64c0fd53ae4040ab406749ace1b4784cc64da1427ffe4238a6f25ed33aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3f3c64c0fd53ae4040ab406749ace1b4784cc64da1427ffe4238a6f25ed33aa->enter($__internal_e3f3c64c0fd53ae4040ab406749ace1b4784cc64da1427ffe4238a6f25ed33aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_e3f3c64c0fd53ae4040ab406749ace1b4784cc64da1427ffe4238a6f25ed33aa->leave($__internal_e3f3c64c0fd53ae4040ab406749ace1b4784cc64da1427ffe4238a6f25ed33aa_prof);

        
        $__internal_f2b30eefb8f61490372a7a7ec72bc8eacb09cb2772bafcacb9ca20e2d75d1207->leave($__internal_f2b30eefb8f61490372a7a7ec72bc8eacb09cb2772bafcacb9ca20e2d75d1207_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_78c773c9b15e66cd4363d9e0db2ddc9409409620a9d4f3ef99bd4e735666368b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78c773c9b15e66cd4363d9e0db2ddc9409409620a9d4f3ef99bd4e735666368b->enter($__internal_78c773c9b15e66cd4363d9e0db2ddc9409409620a9d4f3ef99bd4e735666368b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8e584b28760e3aa8f515d3f58d808b86f1e40334be6e12c67737d0b181074451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e584b28760e3aa8f515d3f58d808b86f1e40334be6e12c67737d0b181074451->enter($__internal_8e584b28760e3aa8f515d3f58d808b86f1e40334be6e12c67737d0b181074451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_8e584b28760e3aa8f515d3f58d808b86f1e40334be6e12c67737d0b181074451->leave($__internal_8e584b28760e3aa8f515d3f58d808b86f1e40334be6e12c67737d0b181074451_prof);

        
        $__internal_78c773c9b15e66cd4363d9e0db2ddc9409409620a9d4f3ef99bd4e735666368b->leave($__internal_78c773c9b15e66cd4363d9e0db2ddc9409409620a9d4f3ef99bd4e735666368b_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/ubuntu/workspace/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
