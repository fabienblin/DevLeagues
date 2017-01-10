<?php

/* @SonataAdmin/empty_layout.html.twig */
class __TwigTemplate_e9b75ef3ed583dcb91d528425600daddcbea5c1276f7aaad25dfe6f2eafe2c54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin_pool"] ?? $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "@SonataAdmin/empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3abaf87f99faf01ff25e39f9558f0c5535f3a42939cf15b27706fa8d508f6d78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3abaf87f99faf01ff25e39f9558f0c5535f3a42939cf15b27706fa8d508f6d78->enter($__internal_3abaf87f99faf01ff25e39f9558f0c5535f3a42939cf15b27706fa8d508f6d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/empty_layout.html.twig"));

        $__internal_29ea3012fa68a2c1059197d8a6174b3cf796869f9e4a181e491d7edd9bfaa9b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29ea3012fa68a2c1059197d8a6174b3cf796869f9e4a181e491d7edd9bfaa9b9->enter($__internal_29ea3012fa68a2c1059197d8a6174b3cf796869f9e4a181e491d7edd9bfaa9b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3abaf87f99faf01ff25e39f9558f0c5535f3a42939cf15b27706fa8d508f6d78->leave($__internal_3abaf87f99faf01ff25e39f9558f0c5535f3a42939cf15b27706fa8d508f6d78_prof);

        
        $__internal_29ea3012fa68a2c1059197d8a6174b3cf796869f9e4a181e491d7edd9bfaa9b9->leave($__internal_29ea3012fa68a2c1059197d8a6174b3cf796869f9e4a181e491d7edd9bfaa9b9_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_63e63fd3538e70d69877ac5e5009519df8b41f0899f6948ed7a8006e4b530622 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63e63fd3538e70d69877ac5e5009519df8b41f0899f6948ed7a8006e4b530622->enter($__internal_63e63fd3538e70d69877ac5e5009519df8b41f0899f6948ed7a8006e4b530622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        $__internal_a56e3d4d37d34bf8477f21899ec1730333e8c3be21af7cb7fcb25012dbba7689 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a56e3d4d37d34bf8477f21899ec1730333e8c3be21af7cb7fcb25012dbba7689->enter($__internal_a56e3d4d37d34bf8477f21899ec1730333e8c3be21af7cb7fcb25012dbba7689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_a56e3d4d37d34bf8477f21899ec1730333e8c3be21af7cb7fcb25012dbba7689->leave($__internal_a56e3d4d37d34bf8477f21899ec1730333e8c3be21af7cb7fcb25012dbba7689_prof);

        
        $__internal_63e63fd3538e70d69877ac5e5009519df8b41f0899f6948ed7a8006e4b530622->leave($__internal_63e63fd3538e70d69877ac5e5009519df8b41f0899f6948ed7a8006e4b530622_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_88d60dd6684aab4da8d721f91a04c3765827e80df50038688bcae41135a7a519 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88d60dd6684aab4da8d721f91a04c3765827e80df50038688bcae41135a7a519->enter($__internal_88d60dd6684aab4da8d721f91a04c3765827e80df50038688bcae41135a7a519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        $__internal_444af225433365db4e413e02472256038ecca0a12fdb55253d875d8a8dfdb7af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_444af225433365db4e413e02472256038ecca0a12fdb55253d875d8a8dfdb7af->enter($__internal_444af225433365db4e413e02472256038ecca0a12fdb55253d875d8a8dfdb7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_444af225433365db4e413e02472256038ecca0a12fdb55253d875d8a8dfdb7af->leave($__internal_444af225433365db4e413e02472256038ecca0a12fdb55253d875d8a8dfdb7af_prof);

        
        $__internal_88d60dd6684aab4da8d721f91a04c3765827e80df50038688bcae41135a7a519->leave($__internal_88d60dd6684aab4da8d721f91a04c3765827e80df50038688bcae41135a7a519_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_5c943df17241c257bc9a1538492f0682f3bb529d218ced578d06d71c44bc2c0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c943df17241c257bc9a1538492f0682f3bb529d218ced578d06d71c44bc2c0c->enter($__internal_5c943df17241c257bc9a1538492f0682f3bb529d218ced578d06d71c44bc2c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        $__internal_de8428547eda0980c4629f5b8582e45bb3e5b9ad22205f87af47da541169ccb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de8428547eda0980c4629f5b8582e45bb3e5b9ad22205f87af47da541169ccb8->enter($__internal_de8428547eda0980c4629f5b8582e45bb3e5b9ad22205f87af47da541169ccb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_de8428547eda0980c4629f5b8582e45bb3e5b9ad22205f87af47da541169ccb8->leave($__internal_de8428547eda0980c4629f5b8582e45bb3e5b9ad22205f87af47da541169ccb8_prof);

        
        $__internal_5c943df17241c257bc9a1538492f0682f3bb529d218ced578d06d71c44bc2c0c->leave($__internal_5c943df17241c257bc9a1538492f0682f3bb529d218ced578d06d71c44bc2c0c_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_9f885cad7a33255d6739e27cc57009624385006ec6b2ff48b6567dd56360117b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f885cad7a33255d6739e27cc57009624385006ec6b2ff48b6567dd56360117b->enter($__internal_9f885cad7a33255d6739e27cc57009624385006ec6b2ff48b6567dd56360117b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        $__internal_f14adb7f0c4a7d61ef23673678ff6f17496e3f18c3a7827bfbca57402852d96a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f14adb7f0c4a7d61ef23673678ff6f17496e3f18c3a7827bfbca57402852d96a->enter($__internal_f14adb7f0c4a7d61ef23673678ff6f17496e3f18c3a7827bfbca57402852d96a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_f14adb7f0c4a7d61ef23673678ff6f17496e3f18c3a7827bfbca57402852d96a->leave($__internal_f14adb7f0c4a7d61ef23673678ff6f17496e3f18c3a7827bfbca57402852d96a_prof);

        
        $__internal_9f885cad7a33255d6739e27cc57009624385006ec6b2ff48b6567dd56360117b->leave($__internal_9f885cad7a33255d6739e27cc57009624385006ec6b2ff48b6567dd56360117b_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b2631032d359a223434e0cc3d219baba85ebed7050b64e262dbbf240b8c9119d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2631032d359a223434e0cc3d219baba85ebed7050b64e262dbbf240b8c9119d->enter($__internal_b2631032d359a223434e0cc3d219baba85ebed7050b64e262dbbf240b8c9119d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6135d89b8b65de304d441f9cec9f91a99b765627a73d823ac822d98354ec15c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6135d89b8b65de304d441f9cec9f91a99b765627a73d823ac822d98354ec15c1->enter($__internal_6135d89b8b65de304d441f9cec9f91a99b765627a73d823ac822d98354ec15c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

";
        
        $__internal_6135d89b8b65de304d441f9cec9f91a99b765627a73d823ac822d98354ec15c1->leave($__internal_6135d89b8b65de304d441f9cec9f91a99b765627a73d823ac822d98354ec15c1_prof);

        
        $__internal_b2631032d359a223434e0cc3d219baba85ebed7050b64e262dbbf240b8c9119d->leave($__internal_b2631032d359a223434e0cc3d219baba85ebed7050b64e262dbbf240b8c9119d_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_e011e3a5026cdc0619851824644b6ac4eccf5b7719aad053e5b9b1104ad87979 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e011e3a5026cdc0619851824644b6ac4eccf5b7719aad053e5b9b1104ad87979->enter($__internal_e011e3a5026cdc0619851824644b6ac4eccf5b7719aad053e5b9b1104ad87979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        $__internal_c1155d9a473ffc6283872d3e529cb82906fe359d41b86d09d032712d6104afd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1155d9a473ffc6283872d3e529cb82906fe359d41b86d09d032712d6104afd0->enter($__internal_c1155d9a473ffc6283872d3e529cb82906fe359d41b86d09d032712d6104afd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_c1155d9a473ffc6283872d3e529cb82906fe359d41b86d09d032712d6104afd0->leave($__internal_c1155d9a473ffc6283872d3e529cb82906fe359d41b86d09d032712d6104afd0_prof);

        
        $__internal_e011e3a5026cdc0619851824644b6ac4eccf5b7719aad053e5b9b1104ad87979->leave($__internal_e011e3a5026cdc0619851824644b6ac4eccf5b7719aad053e5b9b1104ad87979_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_f47a835f4de7cefdbbc8df445b1784dc3158058ae6d2ce4aca495ca6212c7e7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f47a835f4de7cefdbbc8df445b1784dc3158058ae6d2ce4aca495ca6212c7e7c->enter($__internal_f47a835f4de7cefdbbc8df445b1784dc3158058ae6d2ce4aca495ca6212c7e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        $__internal_bdefa230321c38a69122628e43ca89691d7c63ac0f3272ae589622cecc397c00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdefa230321c38a69122628e43ca89691d7c63ac0f3272ae589622cecc397c00->enter($__internal_bdefa230321c38a69122628e43ca89691d7c63ac0f3272ae589622cecc397c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_bdefa230321c38a69122628e43ca89691d7c63ac0f3272ae589622cecc397c00->leave($__internal_bdefa230321c38a69122628e43ca89691d7c63ac0f3272ae589622cecc397c00_prof);

        
        $__internal_f47a835f4de7cefdbbc8df445b1784dc3158058ae6d2ce4aca495ca6212c7e7c->leave($__internal_f47a835f4de7cefdbbc8df445b1784dc3158058ae6d2ce4aca495ca6212c7e7c_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 33,  152 => 32,  143 => 31,  122 => 20,  113 => 19,  96 => 17,  79 => 16,  62 => 15,  45 => 14,  24 => 12,);
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

{% extends admin_pool.getTemplate('layout') %}

{% block sonata_header %}{% endblock %}
{% block sonata_left_side %}{% endblock %}
{% block sonata_nav %}{% endblock %}
{% block sonata_breadcrumb %}{% endblock %}

{% block stylesheets %}
    {{ parent() }}

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

{% endblock %}

{% block sonata_wrapper %}
    {% block sonata_page_content %}
        {{ parent() }}
    {% endblock %}
{% endblock %}
", "@SonataAdmin/empty_layout.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/empty_layout.html.twig");
    }
}
