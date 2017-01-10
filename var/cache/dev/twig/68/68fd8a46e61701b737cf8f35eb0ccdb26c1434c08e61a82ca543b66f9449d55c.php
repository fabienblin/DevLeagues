<?php

/* @SonataAdmin/CRUD/edit_string.html.twig */
class __TwigTemplate_513e4f08855a20403cdd2118b0047f26b658a29130ef1633a4fb12f9a0466995 extends Twig_Template
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
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_baaa341398b8bb0281c08b9320873ce5be94642ce82b38702dd760c159bc43c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baaa341398b8bb0281c08b9320873ce5be94642ce82b38702dd760c159bc43c8->enter($__internal_baaa341398b8bb0281c08b9320873ce5be94642ce82b38702dd760c159bc43c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_string.html.twig"));

        $__internal_9107489ccc2ceffd149cadcbea5ec750fabe6ce424c71366a68d2e6b700f08be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9107489ccc2ceffd149cadcbea5ec750fabe6ce424c71366a68d2e6b700f08be->enter($__internal_9107489ccc2ceffd149cadcbea5ec750fabe6ce424c71366a68d2e6b700f08be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_baaa341398b8bb0281c08b9320873ce5be94642ce82b38702dd760c159bc43c8->leave($__internal_baaa341398b8bb0281c08b9320873ce5be94642ce82b38702dd760c159bc43c8_prof);

        
        $__internal_9107489ccc2ceffd149cadcbea5ec750fabe6ce424c71366a68d2e6b700f08be->leave($__internal_9107489ccc2ceffd149cadcbea5ec750fabe6ce424c71366a68d2e6b700f08be_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4431e500edfa567f6ccc31caf3b8b72779f1bcae16a29ff78c74b123686047aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4431e500edfa567f6ccc31caf3b8b72779f1bcae16a29ff78c74b123686047aa->enter($__internal_4431e500edfa567f6ccc31caf3b8b72779f1bcae16a29ff78c74b123686047aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_e52dac9ee2b69c0ea264a7a61873dec67980baf2f91f4549621fdb7fc22d37ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e52dac9ee2b69c0ea264a7a61873dec67980baf2f91f4549621fdb7fc22d37ea->enter($__internal_e52dac9ee2b69c0ea264a7a61873dec67980baf2f91f4549621fdb7fc22d37ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["field_element"] ?? $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_e52dac9ee2b69c0ea264a7a61873dec67980baf2f91f4549621fdb7fc22d37ea->leave($__internal_e52dac9ee2b69c0ea264a7a61873dec67980baf2f91f4549621fdb7fc22d37ea_prof);

        
        $__internal_4431e500edfa567f6ccc31caf3b8b72779f1bcae16a29ff78c74b123686047aa->leave($__internal_4431e500edfa567f6ccc31caf3b8b72779f1bcae16a29ff78c74b123686047aa_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_string.html.twig";
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
", "@SonataAdmin/CRUD/edit_string.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_string.html.twig");
    }
}
