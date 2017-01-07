<?php

/* @SonataAdmin/CRUD/list_currency.html.twig */
class __TwigTemplate_453db3fc8d1c441cf53d1db397f82a305ea4db83b5007c08ad52b1cd5465a433 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_currency.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f13f95529fa717d47efbe1e08f1b2d8b27d277d84486802d123ced6c0c4ccce8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f13f95529fa717d47efbe1e08f1b2d8b27d277d84486802d123ced6c0c4ccce8->enter($__internal_f13f95529fa717d47efbe1e08f1b2d8b27d277d84486802d123ced6c0c4ccce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_currency.html.twig"));

        $__internal_1c9985e5c1e5c2367eb55b9639b834703a66a010c781de8867313809aae37552 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c9985e5c1e5c2367eb55b9639b834703a66a010c781de8867313809aae37552->enter($__internal_1c9985e5c1e5c2367eb55b9639b834703a66a010c781de8867313809aae37552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_currency.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f13f95529fa717d47efbe1e08f1b2d8b27d277d84486802d123ced6c0c4ccce8->leave($__internal_f13f95529fa717d47efbe1e08f1b2d8b27d277d84486802d123ced6c0c4ccce8_prof);

        
        $__internal_1c9985e5c1e5c2367eb55b9639b834703a66a010c781de8867313809aae37552->leave($__internal_1c9985e5c1e5c2367eb55b9639b834703a66a010c781de8867313809aae37552_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_9c4b8480cdbfa037a7196c5e3230f253be6b52d7ea88cd68acd99e7a04ec031e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c4b8480cdbfa037a7196c5e3230f253be6b52d7ea88cd68acd99e7a04ec031e->enter($__internal_9c4b8480cdbfa037a7196c5e3230f253be6b52d7ea88cd68acd99e7a04ec031e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_9481901bff6436c209135b3a3fb1c73e838fe7f19e783cd1e00f0ad862c8681b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9481901bff6436c209135b3a3fb1c73e838fe7f19e783cd1e00f0ad862c8681b->enter($__internal_9481901bff6436c209135b3a3fb1c73e838fe7f19e783cd1e00f0ad862c8681b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_9481901bff6436c209135b3a3fb1c73e838fe7f19e783cd1e00f0ad862c8681b->leave($__internal_9481901bff6436c209135b3a3fb1c73e838fe7f19e783cd1e00f0ad862c8681b_prof);

        
        $__internal_9c4b8480cdbfa037a7196c5e3230f253be6b52d7ea88cd68acd99e7a04ec031e->leave($__internal_9c4b8480cdbfa037a7196c5e3230f253be6b52d7ea88cd68acd99e7a04ec031e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_currency.html.twig";
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
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
", "@SonataAdmin/CRUD/list_currency.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_currency.html.twig");
    }
}
