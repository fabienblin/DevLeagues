<?php

/* @SonataAdmin/CRUD/show_boolean.html.twig */
class __TwigTemplate_716203c506e21ddf5d0c1bead16e0cc0cf9232026b2b95ff29d3e4aaf1ef9382 extends Twig_Template
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
        $__internal_8f808b6bab04bae46aa1c535a3c5abbf460f0c4b24079ecb10492bd45ae099ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f808b6bab04bae46aa1c535a3c5abbf460f0c4b24079ecb10492bd45ae099ad->enter($__internal_8f808b6bab04bae46aa1c535a3c5abbf460f0c4b24079ecb10492bd45ae099ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_boolean.html.twig"));

        $__internal_d18c2014c781c8c6a5439190bf2045eee0d2fb95f5999c7588218b7e8dcf8a2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d18c2014c781c8c6a5439190bf2045eee0d2fb95f5999c7588218b7e8dcf8a2e->enter($__internal_d18c2014c781c8c6a5439190bf2045eee0d2fb95f5999c7588218b7e8dcf8a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_boolean.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f808b6bab04bae46aa1c535a3c5abbf460f0c4b24079ecb10492bd45ae099ad->leave($__internal_8f808b6bab04bae46aa1c535a3c5abbf460f0c4b24079ecb10492bd45ae099ad_prof);

        
        $__internal_d18c2014c781c8c6a5439190bf2045eee0d2fb95f5999c7588218b7e8dcf8a2e->leave($__internal_d18c2014c781c8c6a5439190bf2045eee0d2fb95f5999c7588218b7e8dcf8a2e_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_90c78f456a48e25e590cab43bc24c35e67d7ee249fa2742bca7dc811652bb5db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90c78f456a48e25e590cab43bc24c35e67d7ee249fa2742bca7dc811652bb5db->enter($__internal_90c78f456a48e25e590cab43bc24c35e67d7ee249fa2742bca7dc811652bb5db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_43c8f7aed480a420e066fac9911cfb7ceb70338ee31482cfa3fe85152457a595 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43c8f7aed480a420e066fac9911cfb7ceb70338ee31482cfa3fe85152457a595->enter($__internal_43c8f7aed480a420e066fac9911cfb7ceb70338ee31482cfa3fe85152457a595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_43c8f7aed480a420e066fac9911cfb7ceb70338ee31482cfa3fe85152457a595->leave($__internal_43c8f7aed480a420e066fac9911cfb7ceb70338ee31482cfa3fe85152457a595_prof);

        
        $__internal_90c78f456a48e25e590cab43bc24c35e67d7ee249fa2742bca7dc811652bb5db->leave($__internal_90c78f456a48e25e590cab43bc24c35e67d7ee249fa2742bca7dc811652bb5db_prof);

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
