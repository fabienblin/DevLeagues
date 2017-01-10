<?php

/* @SonataAdmin/CRUD/list_date.html.twig */
class __TwigTemplate_247f37dad2d5cb112227dfb597046dab705af2220f688e057054f06700e26c54 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_date.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a70e2489972eb58eac398b399fede3f1be7021eba5c1f22bb72225ae6768bc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a70e2489972eb58eac398b399fede3f1be7021eba5c1f22bb72225ae6768bc9->enter($__internal_5a70e2489972eb58eac398b399fede3f1be7021eba5c1f22bb72225ae6768bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_date.html.twig"));

        $__internal_77ef641e2e72375abdd4e1cc293c35abdde1948f8cf140fe67370e826a18bbc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77ef641e2e72375abdd4e1cc293c35abdde1948f8cf140fe67370e826a18bbc0->enter($__internal_77ef641e2e72375abdd4e1cc293c35abdde1948f8cf140fe67370e826a18bbc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_date.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a70e2489972eb58eac398b399fede3f1be7021eba5c1f22bb72225ae6768bc9->leave($__internal_5a70e2489972eb58eac398b399fede3f1be7021eba5c1f22bb72225ae6768bc9_prof);

        
        $__internal_77ef641e2e72375abdd4e1cc293c35abdde1948f8cf140fe67370e826a18bbc0->leave($__internal_77ef641e2e72375abdd4e1cc293c35abdde1948f8cf140fe67370e826a18bbc0_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_b6212a7db278edba6254688209f613ac4b8754f6b93255e080181d94c600dc4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6212a7db278edba6254688209f613ac4b8754f6b93255e080181d94c600dc4c->enter($__internal_b6212a7db278edba6254688209f613ac4b8754f6b93255e080181d94c600dc4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_bac332206f807d066483a1890acc6f65fcc1ab2dfa79ee1aac774bd70cacf1b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bac332206f807d066483a1890acc6f65fcc1ab2dfa79ee1aac774bd70cacf1b0->enter($__internal_bac332206f807d066483a1890acc6f65fcc1ab2dfa79ee1aac774bd70cacf1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute(        // line 17
($context["field_description"] ?? null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), $this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "format", array())), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "F j, Y"), "html", null, true);
        }
        
        $__internal_bac332206f807d066483a1890acc6f65fcc1ab2dfa79ee1aac774bd70cacf1b0->leave($__internal_bac332206f807d066483a1890acc6f65fcc1ab2dfa79ee1aac774bd70cacf1b0_prof);

        
        $__internal_b6212a7db278edba6254688209f613ac4b8754f6b93255e080181d94c600dc4c->leave($__internal_b6212a7db278edba6254688209f613ac4b8754f6b93255e080181d94c600dc4c_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 20,  54 => 18,  52 => 17,  50 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% block field%}
    {%- if value is empty -%}
        &nbsp;
    {%- elseif field_description.options.format is defined -%}
        {{ value|date(field_description.options.format) }}
    {%- else -%}
        {{ value|date('F j, Y') }}
    {%- endif -%}
{% endblock %}
", "@SonataAdmin/CRUD/list_date.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_date.html.twig");
    }
}
