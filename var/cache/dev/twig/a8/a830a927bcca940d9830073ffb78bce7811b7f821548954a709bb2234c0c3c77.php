<?php

/* @SonataAdmin/CRUD/edit_file.html.twig */
class __TwigTemplate_bf8d1a71de6a9c3764f8ae5c90298065e6e347340616f46d3f4af2e4f254dfff extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_file.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_626a1a20046a624b8acf1557e989086bef8d9a806f792eb62b940ec6a90f2fd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_626a1a20046a624b8acf1557e989086bef8d9a806f792eb62b940ec6a90f2fd3->enter($__internal_626a1a20046a624b8acf1557e989086bef8d9a806f792eb62b940ec6a90f2fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_file.html.twig"));

        $__internal_255e7ac8ab93f51c894337259e9a78a91543d3e30af5276b6a6242b2f84e4692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_255e7ac8ab93f51c894337259e9a78a91543d3e30af5276b6a6242b2f84e4692->enter($__internal_255e7ac8ab93f51c894337259e9a78a91543d3e30af5276b6a6242b2f84e4692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_file.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_626a1a20046a624b8acf1557e989086bef8d9a806f792eb62b940ec6a90f2fd3->leave($__internal_626a1a20046a624b8acf1557e989086bef8d9a806f792eb62b940ec6a90f2fd3_prof);

        
        $__internal_255e7ac8ab93f51c894337259e9a78a91543d3e30af5276b6a6242b2f84e4692->leave($__internal_255e7ac8ab93f51c894337259e9a78a91543d3e30af5276b6a6242b2f84e4692_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b2c289ac16936372a49c6a747f56178006d8811a683490ce313ff5e14282b5ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2c289ac16936372a49c6a747f56178006d8811a683490ce313ff5e14282b5ca->enter($__internal_b2c289ac16936372a49c6a747f56178006d8811a683490ce313ff5e14282b5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_4aa8ad731768cfdc246c6288693e90e93ff6588f7b09fd95606e6d4450662bc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aa8ad731768cfdc246c6288693e90e93ff6588f7b09fd95606e6d4450662bc4->enter($__internal_4aa8ad731768cfdc246c6288693e90e93ff6588f7b09fd95606e6d4450662bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_4aa8ad731768cfdc246c6288693e90e93ff6588f7b09fd95606e6d4450662bc4->leave($__internal_4aa8ad731768cfdc246c6288693e90e93ff6588f7b09fd95606e6d4450662bc4_prof);

        
        $__internal_b2c289ac16936372a49c6a747f56178006d8811a683490ce313ff5e14282b5ca->leave($__internal_b2c289ac16936372a49c6a747f56178006d8811a683490ce313ff5e14282b5ca_prof);

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
", "@SonataAdmin/CRUD/edit_file.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_file.html.twig");
    }
}
