<?php

/* @SonataAdmin/CRUD/base_acl.html.twig */
class __TwigTemplate_9ab26cd9da1459829b39d325cdbc250e87214eafdd11dd66b31e747b44f7aeb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'form' => array($this, 'block_form'),
            'form_acl_roles' => array($this, 'block_form_acl_roles'),
            'form_acl_users' => array($this, 'block_form_acl_users'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d59a917ccd4e0537b5158a8531e02aa5cd5768926f8af9083139afd8351f6602 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d59a917ccd4e0537b5158a8531e02aa5cd5768926f8af9083139afd8351f6602->enter($__internal_d59a917ccd4e0537b5158a8531e02aa5cd5768926f8af9083139afd8351f6602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_acl.html.twig"));

        $__internal_3d3fb5c19c81f66c36a8053c05f3b8f678ccecb0ab9a3d9f67070354430757bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d3fb5c19c81f66c36a8053c05f3b8f678ccecb0ab9a3d9f67070354430757bb->enter($__internal_3d3fb5c19c81f66c36a8053c05f3b8f678ccecb0ab9a3d9f67070354430757bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "@SonataAdmin/CRUD/base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d59a917ccd4e0537b5158a8531e02aa5cd5768926f8af9083139afd8351f6602->leave($__internal_d59a917ccd4e0537b5158a8531e02aa5cd5768926f8af9083139afd8351f6602_prof);

        
        $__internal_3d3fb5c19c81f66c36a8053c05f3b8f678ccecb0ab9a3d9f67070354430757bb->leave($__internal_3d3fb5c19c81f66c36a8053c05f3b8f678ccecb0ab9a3d9f67070354430757bb_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_53b287a2f6c343f72ac68bc0212074638a06a63848d8dcc71c4865c6c36c78f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53b287a2f6c343f72ac68bc0212074638a06a63848d8dcc71c4865c6c36c78f3->enter($__internal_53b287a2f6c343f72ac68bc0212074638a06a63848d8dcc71c4865c6c36c78f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_ccefbc984af3fbeb8267fadab60f8fc126dc7b913f7051604827b2d1584f774a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccefbc984af3fbeb8267fadab60f8fc126dc7b913f7051604827b2d1584f774a->enter($__internal_ccefbc984af3fbeb8267fadab60f8fc126dc7b913f7051604827b2d1584f774a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/base_acl.html.twig", 15)->display($context);
        
        $__internal_ccefbc984af3fbeb8267fadab60f8fc126dc7b913f7051604827b2d1584f774a->leave($__internal_ccefbc984af3fbeb8267fadab60f8fc126dc7b913f7051604827b2d1584f774a_prof);

        
        $__internal_53b287a2f6c343f72ac68bc0212074638a06a63848d8dcc71c4865c6c36c78f3->leave($__internal_53b287a2f6c343f72ac68bc0212074638a06a63848d8dcc71c4865c6c36c78f3_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_b332ba1a7292c9d2369cde02d435cacc2be209c64badf97b9c8abd64d4e612ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b332ba1a7292c9d2369cde02d435cacc2be209c64badf97b9c8abd64d4e612ac->enter($__internal_b332ba1a7292c9d2369cde02d435cacc2be209c64badf97b9c8abd64d4e612ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_ad1d398c91e9784f418e94767907548c67d346a9d654b587754b37c824b91732 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad1d398c91e9784f418e94767907548c67d346a9d654b587754b37c824b91732->enter($__internal_ad1d398c91e9784f418e94767907548c67d346a9d654b587754b37c824b91732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_ad1d398c91e9784f418e94767907548c67d346a9d654b587754b37c824b91732->leave($__internal_ad1d398c91e9784f418e94767907548c67d346a9d654b587754b37c824b91732_prof);

        
        $__internal_b332ba1a7292c9d2369cde02d435cacc2be209c64badf97b9c8abd64d4e612ac->leave($__internal_b332ba1a7292c9d2369cde02d435cacc2be209c64badf97b9c8abd64d4e612ac_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_a9859cc7ee809cb271fa8a3f00b7399d5b6d75056addd159d93ec4957d61fbe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9859cc7ee809cb271fa8a3f00b7399d5b6d75056addd159d93ec4957d61fbe0->enter($__internal_a9859cc7ee809cb271fa8a3f00b7399d5b6d75056addd159d93ec4957d61fbe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        $__internal_8717f91cc0603368e023f0e306eacc8373c920e8ea4fe44f6b91591127cf12ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8717f91cc0603368e023f0e306eacc8373c920e8ea4fe44f6b91591127cf12ce->enter($__internal_8717f91cc0603368e023f0e306eacc8373c920e8ea4fe44f6b91591127cf12ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form(($context["aclRolesForm"] ?? $this->getContext($context, "aclRolesForm")), ($context["permissions"] ?? $this->getContext($context, "permissions")), "td_role", ($context["admin"] ?? $this->getContext($context, "admin")), $this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), ($context["object"] ?? $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_8717f91cc0603368e023f0e306eacc8373c920e8ea4fe44f6b91591127cf12ce->leave($__internal_8717f91cc0603368e023f0e306eacc8373c920e8ea4fe44f6b91591127cf12ce_prof);

        
        $__internal_a9859cc7ee809cb271fa8a3f00b7399d5b6d75056addd159d93ec4957d61fbe0->leave($__internal_a9859cc7ee809cb271fa8a3f00b7399d5b6d75056addd159d93ec4957d61fbe0_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_b3e27b7a904bc9322047c5502825b11a787501df1068b3e40c45f38ad6c28bfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3e27b7a904bc9322047c5502825b11a787501df1068b3e40c45f38ad6c28bfb->enter($__internal_b3e27b7a904bc9322047c5502825b11a787501df1068b3e40c45f38ad6c28bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        $__internal_fed4d8b4f7253567c5abb6aa6e0853d120b8b64ba38afdebb49fc852f69d7bf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fed4d8b4f7253567c5abb6aa6e0853d120b8b64ba38afdebb49fc852f69d7bf4->enter($__internal_fed4d8b4f7253567c5abb6aa6e0853d120b8b64ba38afdebb49fc852f69d7bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form(($context["aclUsersForm"] ?? $this->getContext($context, "aclUsersForm")), ($context["permissions"] ?? $this->getContext($context, "permissions")), "td_username", ($context["admin"] ?? $this->getContext($context, "admin")), $this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), ($context["object"] ?? $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_fed4d8b4f7253567c5abb6aa6e0853d120b8b64ba38afdebb49fc852f69d7bf4->leave($__internal_fed4d8b4f7253567c5abb6aa6e0853d120b8b64ba38afdebb49fc852f69d7bf4_prof);

        
        $__internal_b3e27b7a904bc9322047c5502825b11a787501df1068b3e40c45f38ad6c28bfb->leave($__internal_b3e27b7a904bc9322047c5502825b11a787501df1068b3e40c45f38ad6c28bfb_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 25,  109 => 24,  96 => 22,  87 => 21,  76 => 24,  73 => 21,  64 => 20,  54 => 15,  45 => 14,  35 => 12,  33 => 18,  21 => 12,);
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

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% import 'SonataAdminBundle:CRUD:base_acl_macro.html.twig' as acl %}

{% block form %}
    {% block form_acl_roles %}
        {{ acl.render_form(aclRolesForm, permissions, 'td_role', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
    {% block form_acl_users %}
        {{ acl.render_form(aclUsersForm, permissions, 'td_username', admin, sonata_admin.adminPool, object) }}
    {% endblock %}
{% endblock %}
", "@SonataAdmin/CRUD/base_acl.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_acl.html.twig");
    }
}
