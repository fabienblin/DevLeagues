<?php

/* @SonataAdmin/CRUD/list_percent.html.twig */
class __TwigTemplate_c82cfbe6d92c0fdac1a66f7f1b3e7705f82998b31327b310e59dc495fd0b71f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9dddbb78f7a4307d857795a98ed93a632938af32f191b77c1a8307b318f179bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dddbb78f7a4307d857795a98ed93a632938af32f191b77c1a8307b318f179bd->enter($__internal_9dddbb78f7a4307d857795a98ed93a632938af32f191b77c1a8307b318f179bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_percent.html.twig"));

        $__internal_b7e3124912e88e5da63000519574095e0cb8188766b7f5a8f585aeafd5b495c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7e3124912e88e5da63000519574095e0cb8188766b7f5a8f585aeafd5b495c6->enter($__internal_b7e3124912e88e5da63000519574095e0cb8188766b7f5a8f585aeafd5b495c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9dddbb78f7a4307d857795a98ed93a632938af32f191b77c1a8307b318f179bd->leave($__internal_9dddbb78f7a4307d857795a98ed93a632938af32f191b77c1a8307b318f179bd_prof);

        
        $__internal_b7e3124912e88e5da63000519574095e0cb8188766b7f5a8f585aeafd5b495c6->leave($__internal_b7e3124912e88e5da63000519574095e0cb8188766b7f5a8f585aeafd5b495c6_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_476c0cb338c3886cba5c0e55a7e4ebfacda4d3b6dd55df3e266edb4320f5c77d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_476c0cb338c3886cba5c0e55a7e4ebfacda4d3b6dd55df3e266edb4320f5c77d->enter($__internal_476c0cb338c3886cba5c0e55a7e4ebfacda4d3b6dd55df3e266edb4320f5c77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_20a62d6d7bbfbc4218fc5b291cee7801a34e8c3950eb48c85bbb4f402f455e0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20a62d6d7bbfbc4218fc5b291cee7801a34e8c3950eb48c85bbb4f402f455e0e->enter($__internal_20a62d6d7bbfbc4218fc5b291cee7801a34e8c3950eb48c85bbb4f402f455e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = (($context["value"] ?? $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_20a62d6d7bbfbc4218fc5b291cee7801a34e8c3950eb48c85bbb4f402f455e0e->leave($__internal_20a62d6d7bbfbc4218fc5b291cee7801a34e8c3950eb48c85bbb4f402f455e0e_prof);

        
        $__internal_476c0cb338c3886cba5c0e55a7e4ebfacda4d3b6dd55df3e266edb4320f5c77d->leave($__internal_476c0cb338c3886cba5c0e55a7e4ebfacda4d3b6dd55df3e266edb4320f5c77d_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
", "@SonataAdmin/CRUD/list_percent.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_percent.html.twig");
    }
}
