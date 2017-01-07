<?php

/* @SonataAdmin/CRUD/edit_file.html.twig */
class __TwigTemplate_e9579deb2127d7ea67da69d3154a19dabf528eec2ef01342f61e35be8b7433b8 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57f07f6d37d1da0e964c11d79b50fc9dd2472f9e7f68ab7a682c4ac125acec3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57f07f6d37d1da0e964c11d79b50fc9dd2472f9e7f68ab7a682c4ac125acec3b->enter($__internal_57f07f6d37d1da0e964c11d79b50fc9dd2472f9e7f68ab7a682c4ac125acec3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_file.html.twig"));

        $__internal_bf8f7025f724240b800c9eb30c01384c8cdf47b6004a9e8fbe640ca225badfd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf8f7025f724240b800c9eb30c01384c8cdf47b6004a9e8fbe640ca225badfd7->enter($__internal_bf8f7025f724240b800c9eb30c01384c8cdf47b6004a9e8fbe640ca225badfd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57f07f6d37d1da0e964c11d79b50fc9dd2472f9e7f68ab7a682c4ac125acec3b->leave($__internal_57f07f6d37d1da0e964c11d79b50fc9dd2472f9e7f68ab7a682c4ac125acec3b_prof);

        
        $__internal_bf8f7025f724240b800c9eb30c01384c8cdf47b6004a9e8fbe640ca225badfd7->leave($__internal_bf8f7025f724240b800c9eb30c01384c8cdf47b6004a9e8fbe640ca225badfd7_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_74bd67e9e9012e163b5c577a96a1542fafaed1ed3bd04b3dcf1ba300d526ebec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74bd67e9e9012e163b5c577a96a1542fafaed1ed3bd04b3dcf1ba300d526ebec->enter($__internal_74bd67e9e9012e163b5c577a96a1542fafaed1ed3bd04b3dcf1ba300d526ebec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_a0877a38e0d4094764594c2c692ef4c0fe0442f2c94794848549962e729c1ad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0877a38e0d4094764594c2c692ef4c0fe0442f2c94794848549962e729c1ad7->enter($__internal_a0877a38e0d4094764594c2c692ef4c0fe0442f2c94794848549962e729c1ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_a0877a38e0d4094764594c2c692ef4c0fe0442f2c94794848549962e729c1ad7->leave($__internal_a0877a38e0d4094764594c2c692ef4c0fe0442f2c94794848549962e729c1ad7_prof);

        
        $__internal_74bd67e9e9012e163b5c577a96a1542fafaed1ed3bd04b3dcf1ba300d526ebec->leave($__internal_74bd67e9e9012e163b5c577a96a1542fafaed1ed3bd04b3dcf1ba300d526ebec_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 14,  18 => 12,);
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

{% extends base_template %}

{% block field %}{{ form_widget(field_element, {'attr': {'class' : 'title'}}) }}{% endblock %}
", "@SonataAdmin/CRUD/edit_file.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_file.html.twig");
    }
}
