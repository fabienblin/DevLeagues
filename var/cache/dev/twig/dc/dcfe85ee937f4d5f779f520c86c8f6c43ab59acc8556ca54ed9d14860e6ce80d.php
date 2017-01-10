<?php

/* @SonataAdmin/CRUD/show_boolean.html.twig */
class __TwigTemplate_ec464b7699c86a0a9338636c2febabdb33869734c25b40531cc095f0bba79dd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_boolean.html.twig", 12);
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
        $__internal_fecae2f27927a99b5f1026755d410a387ff27a99066fc3971cfc7613a2732219 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fecae2f27927a99b5f1026755d410a387ff27a99066fc3971cfc7613a2732219->enter($__internal_fecae2f27927a99b5f1026755d410a387ff27a99066fc3971cfc7613a2732219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_boolean.html.twig"));

        $__internal_f66cf4cd5b4634eca8902be35b21c537d32b2ff9371cb43447ea995614e106a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f66cf4cd5b4634eca8902be35b21c537d32b2ff9371cb43447ea995614e106a5->enter($__internal_f66cf4cd5b4634eca8902be35b21c537d32b2ff9371cb43447ea995614e106a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_boolean.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fecae2f27927a99b5f1026755d410a387ff27a99066fc3971cfc7613a2732219->leave($__internal_fecae2f27927a99b5f1026755d410a387ff27a99066fc3971cfc7613a2732219_prof);

        
        $__internal_f66cf4cd5b4634eca8902be35b21c537d32b2ff9371cb43447ea995614e106a5->leave($__internal_f66cf4cd5b4634eca8902be35b21c537d32b2ff9371cb43447ea995614e106a5_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_1d2ec4711973caf280d0164cb1260f4ee410a892c6707f06e7c1d5d7294dc354 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d2ec4711973caf280d0164cb1260f4ee410a892c6707f06e7c1d5d7294dc354->enter($__internal_1d2ec4711973caf280d0164cb1260f4ee410a892c6707f06e7c1d5d7294dc354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_a9bff3e6cf2203db1c63e2d069adb0af933cf92e7edb4a6b8e0c9fb023a630df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9bff3e6cf2203db1c63e2d069adb0af933cf92e7edb4a6b8e0c9fb023a630df->enter($__internal_a9bff3e6cf2203db1c63e2d069adb0af933cf92e7edb4a6b8e0c9fb023a630df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        ob_start();
        // line 16
        echo "    ";
        if (($context["value"] ?? $this->getContext($context, "value"))) {
            // line 17
            echo "        <span class=\"label label-success\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_yes", array(), "SonataAdminBundle");
            echo "</span>
    ";
        } else {
            // line 19
            echo "        <span class=\"label label-danger\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("label_type_no", array(), "SonataAdminBundle");
            echo "</span>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a9bff3e6cf2203db1c63e2d069adb0af933cf92e7edb4a6b8e0c9fb023a630df->leave($__internal_a9bff3e6cf2203db1c63e2d069adb0af933cf92e7edb4a6b8e0c9fb023a630df_prof);

        
        $__internal_1d2ec4711973caf280d0164cb1260f4ee410a892c6707f06e7c1d5d7294dc354->leave($__internal_1d2ec4711973caf280d0164cb1260f4ee410a892c6707f06e7c1d5d7294dc354_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_boolean.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 19,  54 => 17,  51 => 16,  49 => 15,  40 => 14,  11 => 12,);
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
{% spaceless %}
    {% if value %}
        <span class=\"label label-success\">{%- trans from 'SonataAdminBundle' %}label_type_yes{% endtrans -%}</span>
    {% else %}
        <span class=\"label label-danger\">{%- trans from 'SonataAdminBundle' %}label_type_no{% endtrans -%}</span>
    {% endif %}
{% endspaceless %}
{% endblock %}
", "@SonataAdmin/CRUD/show_boolean.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_boolean.html.twig");
    }
}
