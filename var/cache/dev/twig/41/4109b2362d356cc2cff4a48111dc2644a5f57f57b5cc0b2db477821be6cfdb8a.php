<?php

/* @SonataAdmin/CRUD/show_currency.html.twig */
class __TwigTemplate_7438d77835da14bc00173718c22bbad489503de828589dad8b7900a1b74af5a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_currency.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2ff7e5f1af50cdd47104d466e703a4f6c72b6d314c25c496e78ba147ac7889b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2ff7e5f1af50cdd47104d466e703a4f6c72b6d314c25c496e78ba147ac7889b->enter($__internal_b2ff7e5f1af50cdd47104d466e703a4f6c72b6d314c25c496e78ba147ac7889b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_currency.html.twig"));

        $__internal_4f4755885cc70ec3b41b77b7384197f6613071a17a41ef432428f647b85310ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f4755885cc70ec3b41b77b7384197f6613071a17a41ef432428f647b85310ea->enter($__internal_4f4755885cc70ec3b41b77b7384197f6613071a17a41ef432428f647b85310ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_currency.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2ff7e5f1af50cdd47104d466e703a4f6c72b6d314c25c496e78ba147ac7889b->leave($__internal_b2ff7e5f1af50cdd47104d466e703a4f6c72b6d314c25c496e78ba147ac7889b_prof);

        
        $__internal_4f4755885cc70ec3b41b77b7384197f6613071a17a41ef432428f647b85310ea->leave($__internal_4f4755885cc70ec3b41b77b7384197f6613071a17a41ef432428f647b85310ea_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_7018596d88b05bb63292a82a2e910cc111cc5c348a3a9bc16b67c0cea4e627be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7018596d88b05bb63292a82a2e910cc111cc5c348a3a9bc16b67c0cea4e627be->enter($__internal_7018596d88b05bb63292a82a2e910cc111cc5c348a3a9bc16b67c0cea4e627be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_824c5355a1e40ccadd0bc49972316004c02b5b77132310353460a994273bcd34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_824c5355a1e40ccadd0bc49972316004c02b5b77132310353460a994273bcd34->enter($__internal_824c5355a1e40ccadd0bc49972316004c02b5b77132310353460a994273bcd34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        if ( !(null === ($context["value"] ?? $this->getContext($context, "value")))) {
            // line 16
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "currency", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "
    ";
        }
        
        $__internal_824c5355a1e40ccadd0bc49972316004c02b5b77132310353460a994273bcd34->leave($__internal_824c5355a1e40ccadd0bc49972316004c02b5b77132310353460a994273bcd34_prof);

        
        $__internal_7018596d88b05bb63292a82a2e910cc111cc5c348a3a9bc16b67c0cea4e627be->leave($__internal_7018596d88b05bb63292a82a2e910cc111cc5c348a3a9bc16b67c0cea4e627be_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_currency.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% if value is not null %}
        {{ field_description.options.currency }} {{ value }}
    {% endif %}
{% endblock %}
", "@SonataAdmin/CRUD/show_currency.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_currency.html.twig");
    }
}
