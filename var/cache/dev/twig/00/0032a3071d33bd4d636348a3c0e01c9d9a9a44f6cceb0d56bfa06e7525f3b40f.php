<?php

/* @SonataAdmin/CRUD/edit_string.html.twig */
class __TwigTemplate_fd14d1ff849fdcce4148fe86040a1279950d80043997d7a03e70927987e73195 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cfb54a7f7dbdf6d05e615bc2ff8f5557122c89035b5358659e43e9fa53c6421a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfb54a7f7dbdf6d05e615bc2ff8f5557122c89035b5358659e43e9fa53c6421a->enter($__internal_cfb54a7f7dbdf6d05e615bc2ff8f5557122c89035b5358659e43e9fa53c6421a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_string.html.twig"));

        $__internal_5085d3cd1fc2cc9d674674254cc7db70a4b97c03c8f3cbc3cda7e8f695c3c6d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5085d3cd1fc2cc9d674674254cc7db70a4b97c03c8f3cbc3cda7e8f695c3c6d9->enter($__internal_5085d3cd1fc2cc9d674674254cc7db70a4b97c03c8f3cbc3cda7e8f695c3c6d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfb54a7f7dbdf6d05e615bc2ff8f5557122c89035b5358659e43e9fa53c6421a->leave($__internal_cfb54a7f7dbdf6d05e615bc2ff8f5557122c89035b5358659e43e9fa53c6421a_prof);

        
        $__internal_5085d3cd1fc2cc9d674674254cc7db70a4b97c03c8f3cbc3cda7e8f695c3c6d9->leave($__internal_5085d3cd1fc2cc9d674674254cc7db70a4b97c03c8f3cbc3cda7e8f695c3c6d9_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_54a51ee1aaed5304ba44f732f50c06cb9cb5885f1e6560a75e18ca1509120a1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54a51ee1aaed5304ba44f732f50c06cb9cb5885f1e6560a75e18ca1509120a1c->enter($__internal_54a51ee1aaed5304ba44f732f50c06cb9cb5885f1e6560a75e18ca1509120a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_7381545dea6f43b1f73be6e9703d82d094adcb772d09e197c27fac44c72b6b90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7381545dea6f43b1f73be6e9703d82d094adcb772d09e197c27fac44c72b6b90->enter($__internal_7381545dea6f43b1f73be6e9703d82d094adcb772d09e197c27fac44c72b6b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
        
        $__internal_7381545dea6f43b1f73be6e9703d82d094adcb772d09e197c27fac44c72b6b90->leave($__internal_7381545dea6f43b1f73be6e9703d82d094adcb772d09e197c27fac44c72b6b90_prof);

        
        $__internal_54a51ee1aaed5304ba44f732f50c06cb9cb5885f1e6560a75e18ca1509120a1c->leave($__internal_54a51ee1aaed5304ba44f732f50c06cb9cb5885f1e6560a75e18ca1509120a1c_prof);

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
", "@SonataAdmin/CRUD/edit_string.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_string.html.twig");
    }
}
