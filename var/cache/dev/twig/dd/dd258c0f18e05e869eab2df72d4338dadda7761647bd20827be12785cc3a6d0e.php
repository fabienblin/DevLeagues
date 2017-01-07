<?php

/* @SonataAdmin/CRUD/show_boolean.html.twig */
class __TwigTemplate_d7f5552c1d15fc24e570f08b43c7b683459379511cc6e7ba110a05f18d361957 extends Twig_Template
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
        $__internal_8d6e326a5cacfa101ed7b27360839862430df0b0ed227fbb84394864b3f508e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d6e326a5cacfa101ed7b27360839862430df0b0ed227fbb84394864b3f508e0->enter($__internal_8d6e326a5cacfa101ed7b27360839862430df0b0ed227fbb84394864b3f508e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_boolean.html.twig"));

        $__internal_41ff91ad6842772e065de2c296b4efc9b82ffca0f306a8b0f94b82101f4577fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41ff91ad6842772e065de2c296b4efc9b82ffca0f306a8b0f94b82101f4577fe->enter($__internal_41ff91ad6842772e065de2c296b4efc9b82ffca0f306a8b0f94b82101f4577fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_boolean.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d6e326a5cacfa101ed7b27360839862430df0b0ed227fbb84394864b3f508e0->leave($__internal_8d6e326a5cacfa101ed7b27360839862430df0b0ed227fbb84394864b3f508e0_prof);

        
        $__internal_41ff91ad6842772e065de2c296b4efc9b82ffca0f306a8b0f94b82101f4577fe->leave($__internal_41ff91ad6842772e065de2c296b4efc9b82ffca0f306a8b0f94b82101f4577fe_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_a53b3fb2c9d58e5832f57fa241632cde25d41058f8baadb478df384b2ecc5808 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a53b3fb2c9d58e5832f57fa241632cde25d41058f8baadb478df384b2ecc5808->enter($__internal_a53b3fb2c9d58e5832f57fa241632cde25d41058f8baadb478df384b2ecc5808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_ee80ce56c3d5a3db49dc4c88c17d169cd44ce286002310fa721099f080fc41b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee80ce56c3d5a3db49dc4c88c17d169cd44ce286002310fa721099f080fc41b7->enter($__internal_ee80ce56c3d5a3db49dc4c88c17d169cd44ce286002310fa721099f080fc41b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        ob_start();
        // line 16
        echo "    ";
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
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
        
        $__internal_ee80ce56c3d5a3db49dc4c88c17d169cd44ce286002310fa721099f080fc41b7->leave($__internal_ee80ce56c3d5a3db49dc4c88c17d169cd44ce286002310fa721099f080fc41b7_prof);

        
        $__internal_a53b3fb2c9d58e5832f57fa241632cde25d41058f8baadb478df384b2ecc5808->leave($__internal_a53b3fb2c9d58e5832f57fa241632cde25d41058f8baadb478df384b2ecc5808_prof);

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
", "@SonataAdmin/CRUD/show_boolean.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_boolean.html.twig");
    }
}
