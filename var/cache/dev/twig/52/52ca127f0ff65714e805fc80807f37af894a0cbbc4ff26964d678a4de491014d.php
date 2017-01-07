<?php

/* @SonataAdmin/CRUD/edit_integer.html.twig */
class __TwigTemplate_4d6aa3fddcff930261d6e5e6413acbbd8d00cf259541169c3da3fa0ecd880f58 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_integer.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b24d1bd40f7f5b940a2918cf8ea37bfbc8a0e938e48b88f853218cef3c43cd9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b24d1bd40f7f5b940a2918cf8ea37bfbc8a0e938e48b88f853218cef3c43cd9a->enter($__internal_b24d1bd40f7f5b940a2918cf8ea37bfbc8a0e938e48b88f853218cef3c43cd9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_integer.html.twig"));

        $__internal_27e349ee4fc6201784d55d2621fbd22ddf995bd183ce5a9f8c60fa24881ab032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27e349ee4fc6201784d55d2621fbd22ddf995bd183ce5a9f8c60fa24881ab032->enter($__internal_27e349ee4fc6201784d55d2621fbd22ddf995bd183ce5a9f8c60fa24881ab032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_integer.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b24d1bd40f7f5b940a2918cf8ea37bfbc8a0e938e48b88f853218cef3c43cd9a->leave($__internal_b24d1bd40f7f5b940a2918cf8ea37bfbc8a0e938e48b88f853218cef3c43cd9a_prof);

        
        $__internal_27e349ee4fc6201784d55d2621fbd22ddf995bd183ce5a9f8c60fa24881ab032->leave($__internal_27e349ee4fc6201784d55d2621fbd22ddf995bd183ce5a9f8c60fa24881ab032_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_253dfd5a0b07d5578e4a7d7ee1c46b273ab78df30e1354ce000160161842109b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_253dfd5a0b07d5578e4a7d7ee1c46b273ab78df30e1354ce000160161842109b->enter($__internal_253dfd5a0b07d5578e4a7d7ee1c46b273ab78df30e1354ce000160161842109b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_0698629f1f90beac5639ac96f22042776edbc4aaf0b5ac6de36c3bdc34269fbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0698629f1f90beac5639ac96f22042776edbc4aaf0b5ac6de36c3bdc34269fbc->enter($__internal_0698629f1f90beac5639ac96f22042776edbc4aaf0b5ac6de36c3bdc34269fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_0698629f1f90beac5639ac96f22042776edbc4aaf0b5ac6de36c3bdc34269fbc->leave($__internal_0698629f1f90beac5639ac96f22042776edbc4aaf0b5ac6de36c3bdc34269fbc_prof);

        
        $__internal_253dfd5a0b07d5578e4a7d7ee1c46b273ab78df30e1354ce000160161842109b->leave($__internal_253dfd5a0b07d5578e4a7d7ee1c46b273ab78df30e1354ce000160161842109b_prof);

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
", "@SonataAdmin/CRUD/edit_integer.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_integer.html.twig");
    }
}
