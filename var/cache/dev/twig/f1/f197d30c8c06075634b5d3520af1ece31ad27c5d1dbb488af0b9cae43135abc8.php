<?php

/* @SonataAdmin/CRUD/list_time.html.twig */
class __TwigTemplate_26ad1b1df74a5530976cefbcd2a07a76f61f96565934b4294de299ff59953132 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5c04a952e2eff78ec408ba720a469ad7a44e23ede7e143e04e789864fb32e5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5c04a952e2eff78ec408ba720a469ad7a44e23ede7e143e04e789864fb32e5e->enter($__internal_a5c04a952e2eff78ec408ba720a469ad7a44e23ede7e143e04e789864fb32e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_time.html.twig"));

        $__internal_5cb84a200aec9b5bf2f75a15d520e38b2d94d593b5494202f288f452cf47110a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cb84a200aec9b5bf2f75a15d520e38b2d94d593b5494202f288f452cf47110a->enter($__internal_5cb84a200aec9b5bf2f75a15d520e38b2d94d593b5494202f288f452cf47110a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5c04a952e2eff78ec408ba720a469ad7a44e23ede7e143e04e789864fb32e5e->leave($__internal_a5c04a952e2eff78ec408ba720a469ad7a44e23ede7e143e04e789864fb32e5e_prof);

        
        $__internal_5cb84a200aec9b5bf2f75a15d520e38b2d94d593b5494202f288f452cf47110a->leave($__internal_5cb84a200aec9b5bf2f75a15d520e38b2d94d593b5494202f288f452cf47110a_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_8af014d73768c71a2d6d49c5dcb174817d251e18ea5940e35e76c4b6d654a800 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8af014d73768c71a2d6d49c5dcb174817d251e18ea5940e35e76c4b6d654a800->enter($__internal_8af014d73768c71a2d6d49c5dcb174817d251e18ea5940e35e76c4b6d654a800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_f3eee9679a8f8c351c03c17a4e6af6642e9c048598b2f66bfc0924b598816c0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3eee9679a8f8c351c03c17a4e6af6642e9c048598b2f66bfc0924b598816c0b->enter($__internal_f3eee9679a8f8c351c03c17a4e6af6642e9c048598b2f66bfc0924b598816c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_f3eee9679a8f8c351c03c17a4e6af6642e9c048598b2f66bfc0924b598816c0b->leave($__internal_f3eee9679a8f8c351c03c17a4e6af6642e9c048598b2f66bfc0924b598816c0b_prof);

        
        $__internal_8af014d73768c71a2d6d49c5dcb174817d251e18ea5940e35e76c4b6d654a800->leave($__internal_8af014d73768c71a2d6d49c5dcb174817d251e18ea5940e35e76c4b6d654a800_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 18,  50 => 16,  48 => 15,  39 => 14,  18 => 12,);
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
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
", "@SonataAdmin/CRUD/list_time.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_time.html.twig");
    }
}
