<?php

/* @SonataAdmin/CRUD/edit_integer.html.twig */
class __TwigTemplate_83649fce6e09326a5ddc720b266c3aa084025d945cfce0e51ebd691204af8b20 extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79915a94d9a83be6e56f493095eb420e7c81f143d7cb61a791bafec1cd3ec9bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79915a94d9a83be6e56f493095eb420e7c81f143d7cb61a791bafec1cd3ec9bd->enter($__internal_79915a94d9a83be6e56f493095eb420e7c81f143d7cb61a791bafec1cd3ec9bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_integer.html.twig"));

        $__internal_2b17306ab4c5ab27f73268698831070f83d0069837aad64b5275e4250a795e25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b17306ab4c5ab27f73268698831070f83d0069837aad64b5275e4250a795e25->enter($__internal_2b17306ab4c5ab27f73268698831070f83d0069837aad64b5275e4250a795e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79915a94d9a83be6e56f493095eb420e7c81f143d7cb61a791bafec1cd3ec9bd->leave($__internal_79915a94d9a83be6e56f493095eb420e7c81f143d7cb61a791bafec1cd3ec9bd_prof);

        
        $__internal_2b17306ab4c5ab27f73268698831070f83d0069837aad64b5275e4250a795e25->leave($__internal_2b17306ab4c5ab27f73268698831070f83d0069837aad64b5275e4250a795e25_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_d36e196405026de7e1c2cb9a79328bf8ca8db7721314ff2f87647fa2424c549f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d36e196405026de7e1c2cb9a79328bf8ca8db7721314ff2f87647fa2424c549f->enter($__internal_d36e196405026de7e1c2cb9a79328bf8ca8db7721314ff2f87647fa2424c549f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_21c5fdfbec562a76c49dd731860b2ea6548953fa65e55d4170989bc0f67cdcf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21c5fdfbec562a76c49dd731860b2ea6548953fa65e55d4170989bc0f67cdcf0->enter($__internal_21c5fdfbec562a76c49dd731860b2ea6548953fa65e55d4170989bc0f67cdcf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_21c5fdfbec562a76c49dd731860b2ea6548953fa65e55d4170989bc0f67cdcf0->leave($__internal_21c5fdfbec562a76c49dd731860b2ea6548953fa65e55d4170989bc0f67cdcf0_prof);

        
        $__internal_d36e196405026de7e1c2cb9a79328bf8ca8db7721314ff2f87647fa2424c549f->leave($__internal_d36e196405026de7e1c2cb9a79328bf8ca8db7721314ff2f87647fa2424c549f_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_integer.html.twig";
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
", "@SonataAdmin/CRUD/edit_integer.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_integer.html.twig");
    }
}
