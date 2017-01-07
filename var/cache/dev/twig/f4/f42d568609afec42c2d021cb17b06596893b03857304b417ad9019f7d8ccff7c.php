<?php

/* @SonataAdmin/CRUD/list_percent.html.twig */
class __TwigTemplate_3bc64db0dd7e1f3686715f1e518fd13b58ccc6f0bbaed3575e895f4bba3a09ae extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_percent.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_361d8c6dc33f72c6c203e51d5c93d1249bd0efb07f94ec0c4d25e13f98d96aeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_361d8c6dc33f72c6c203e51d5c93d1249bd0efb07f94ec0c4d25e13f98d96aeb->enter($__internal_361d8c6dc33f72c6c203e51d5c93d1249bd0efb07f94ec0c4d25e13f98d96aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_percent.html.twig"));

        $__internal_33f9b691aed75b13b8169d7934588d9b86173996ed44caf17ae7e93f0f7adde8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33f9b691aed75b13b8169d7934588d9b86173996ed44caf17ae7e93f0f7adde8->enter($__internal_33f9b691aed75b13b8169d7934588d9b86173996ed44caf17ae7e93f0f7adde8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_percent.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_361d8c6dc33f72c6c203e51d5c93d1249bd0efb07f94ec0c4d25e13f98d96aeb->leave($__internal_361d8c6dc33f72c6c203e51d5c93d1249bd0efb07f94ec0c4d25e13f98d96aeb_prof);

        
        $__internal_33f9b691aed75b13b8169d7934588d9b86173996ed44caf17ae7e93f0f7adde8->leave($__internal_33f9b691aed75b13b8169d7934588d9b86173996ed44caf17ae7e93f0f7adde8_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_f5b80ce704dd8f24835ba3cda9749e5afbde133302736a24ba758d5e6426ec5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5b80ce704dd8f24835ba3cda9749e5afbde133302736a24ba758d5e6426ec5e->enter($__internal_f5b80ce704dd8f24835ba3cda9749e5afbde133302736a24ba758d5e6426ec5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_4cbf4869c57c55b7c449351a13f55fea619cb5be434eec1221ea1e7cd8e762d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cbf4869c57c55b7c449351a13f55fea619cb5be434eec1221ea1e7cd8e762d6->enter($__internal_4cbf4869c57c55b7c449351a13f55fea619cb5be434eec1221ea1e7cd8e762d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_4cbf4869c57c55b7c449351a13f55fea619cb5be434eec1221ea1e7cd8e762d6->leave($__internal_4cbf4869c57c55b7c449351a13f55fea619cb5be434eec1221ea1e7cd8e762d6_prof);

        
        $__internal_f5b80ce704dd8f24835ba3cda9749e5afbde133302736a24ba758d5e6426ec5e->leave($__internal_f5b80ce704dd8f24835ba3cda9749e5afbde133302736a24ba758d5e6426ec5e_prof);

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
", "@SonataAdmin/CRUD/list_percent.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_percent.html.twig");
    }
}
