<?php

/* @SonataAdmin/CRUD/base_acl.html.twig */
class __TwigTemplate_98c7062399267cbd77ac54d94d51e3df619b47bfec5eff9a0fb80996581cee19 extends Twig_Template
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
        $__internal_32c78820e7174a0cf23b039486c1bef47f3d5b732f8ccbd4e7bd20e774dc0978 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32c78820e7174a0cf23b039486c1bef47f3d5b732f8ccbd4e7bd20e774dc0978->enter($__internal_32c78820e7174a0cf23b039486c1bef47f3d5b732f8ccbd4e7bd20e774dc0978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_acl.html.twig"));

        $__internal_dabcfdafdbbd2160d89203c7fd082d6fd7950359fada624daecd5f678bd5e15b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dabcfdafdbbd2160d89203c7fd082d6fd7950359fada624daecd5f678bd5e15b->enter($__internal_dabcfdafdbbd2160d89203c7fd082d6fd7950359fada624daecd5f678bd5e15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "@SonataAdmin/CRUD/base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32c78820e7174a0cf23b039486c1bef47f3d5b732f8ccbd4e7bd20e774dc0978->leave($__internal_32c78820e7174a0cf23b039486c1bef47f3d5b732f8ccbd4e7bd20e774dc0978_prof);

        
        $__internal_dabcfdafdbbd2160d89203c7fd082d6fd7950359fada624daecd5f678bd5e15b->leave($__internal_dabcfdafdbbd2160d89203c7fd082d6fd7950359fada624daecd5f678bd5e15b_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_b469c811896056afdfb8131ddb5f8b056b5ec04a8fbbf4995fedbfe87c79d456 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b469c811896056afdfb8131ddb5f8b056b5ec04a8fbbf4995fedbfe87c79d456->enter($__internal_b469c811896056afdfb8131ddb5f8b056b5ec04a8fbbf4995fedbfe87c79d456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_548c055ef5f56d5c6e844c67909058595e37ad99f71fd3ddaaf6c158832f46c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_548c055ef5f56d5c6e844c67909058595e37ad99f71fd3ddaaf6c158832f46c7->enter($__internal_548c055ef5f56d5c6e844c67909058595e37ad99f71fd3ddaaf6c158832f46c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/base_acl.html.twig", 15)->display($context);
        
        $__internal_548c055ef5f56d5c6e844c67909058595e37ad99f71fd3ddaaf6c158832f46c7->leave($__internal_548c055ef5f56d5c6e844c67909058595e37ad99f71fd3ddaaf6c158832f46c7_prof);

        
        $__internal_b469c811896056afdfb8131ddb5f8b056b5ec04a8fbbf4995fedbfe87c79d456->leave($__internal_b469c811896056afdfb8131ddb5f8b056b5ec04a8fbbf4995fedbfe87c79d456_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_86b32ca3d4c77e254976ddcd6ddbc7e4b6dfbf6cdf47d0dcb132f6c994233a5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86b32ca3d4c77e254976ddcd6ddbc7e4b6dfbf6cdf47d0dcb132f6c994233a5c->enter($__internal_86b32ca3d4c77e254976ddcd6ddbc7e4b6dfbf6cdf47d0dcb132f6c994233a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_0d647216fd402f49832867660d52a51752fbca6b6dfb0daec195b457c8248466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d647216fd402f49832867660d52a51752fbca6b6dfb0daec195b457c8248466->enter($__internal_0d647216fd402f49832867660d52a51752fbca6b6dfb0daec195b457c8248466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_0d647216fd402f49832867660d52a51752fbca6b6dfb0daec195b457c8248466->leave($__internal_0d647216fd402f49832867660d52a51752fbca6b6dfb0daec195b457c8248466_prof);

        
        $__internal_86b32ca3d4c77e254976ddcd6ddbc7e4b6dfbf6cdf47d0dcb132f6c994233a5c->leave($__internal_86b32ca3d4c77e254976ddcd6ddbc7e4b6dfbf6cdf47d0dcb132f6c994233a5c_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_c5db270a3f6bb3c026cecbf041e7faa4c0d0d58cc5265e4d47f29dbccf3389e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5db270a3f6bb3c026cecbf041e7faa4c0d0d58cc5265e4d47f29dbccf3389e7->enter($__internal_c5db270a3f6bb3c026cecbf041e7faa4c0d0d58cc5265e4d47f29dbccf3389e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        $__internal_e6915b38aa4e94cee786b914a5611c5214e3d5bac40a5858b699f8d0b3da95fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6915b38aa4e94cee786b914a5611c5214e3d5bac40a5858b699f8d0b3da95fd->enter($__internal_e6915b38aa4e94cee786b914a5611c5214e3d5bac40a5858b699f8d0b3da95fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form(($context["aclRolesForm"] ?? $this->getContext($context, "aclRolesForm")), ($context["permissions"] ?? $this->getContext($context, "permissions")), "td_role", ($context["admin"] ?? $this->getContext($context, "admin")), $this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), ($context["object"] ?? $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_e6915b38aa4e94cee786b914a5611c5214e3d5bac40a5858b699f8d0b3da95fd->leave($__internal_e6915b38aa4e94cee786b914a5611c5214e3d5bac40a5858b699f8d0b3da95fd_prof);

        
        $__internal_c5db270a3f6bb3c026cecbf041e7faa4c0d0d58cc5265e4d47f29dbccf3389e7->leave($__internal_c5db270a3f6bb3c026cecbf041e7faa4c0d0d58cc5265e4d47f29dbccf3389e7_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_3271f8ecc1188ffa41e94d12c4e2704bff6842c7f93f4fa91272e392a34db67e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3271f8ecc1188ffa41e94d12c4e2704bff6842c7f93f4fa91272e392a34db67e->enter($__internal_3271f8ecc1188ffa41e94d12c4e2704bff6842c7f93f4fa91272e392a34db67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        $__internal_ba306b81cfd58dde6e4cc096ab3dba0f32b0988344cdab49b9401c4387acdaaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba306b81cfd58dde6e4cc096ab3dba0f32b0988344cdab49b9401c4387acdaaf->enter($__internal_ba306b81cfd58dde6e4cc096ab3dba0f32b0988344cdab49b9401c4387acdaaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form(($context["aclUsersForm"] ?? $this->getContext($context, "aclUsersForm")), ($context["permissions"] ?? $this->getContext($context, "permissions")), "td_username", ($context["admin"] ?? $this->getContext($context, "admin")), $this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), ($context["object"] ?? $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_ba306b81cfd58dde6e4cc096ab3dba0f32b0988344cdab49b9401c4387acdaaf->leave($__internal_ba306b81cfd58dde6e4cc096ab3dba0f32b0988344cdab49b9401c4387acdaaf_prof);

        
        $__internal_3271f8ecc1188ffa41e94d12c4e2704bff6842c7f93f4fa91272e392a34db67e->leave($__internal_3271f8ecc1188ffa41e94d12c4e2704bff6842c7f93f4fa91272e392a34db67e_prof);

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
