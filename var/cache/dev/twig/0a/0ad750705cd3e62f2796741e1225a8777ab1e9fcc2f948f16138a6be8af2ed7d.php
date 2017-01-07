<?php

/* @SonataAdmin/CRUD/base_acl.html.twig */
class __TwigTemplate_0c91e533ccd1bc99d7e74b15310d2078faa6acfd3bf8bbea1a1525201800281a extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/base_acl.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07c91b7cc4ce0ee714214298d93d234d0451f738603498bad01489e348cba99f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07c91b7cc4ce0ee714214298d93d234d0451f738603498bad01489e348cba99f->enter($__internal_07c91b7cc4ce0ee714214298d93d234d0451f738603498bad01489e348cba99f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_acl.html.twig"));

        $__internal_71de58314b6ad675d005ce787d80672c9136d0cfcd2e4bfffafdd2dd85bb5a20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71de58314b6ad675d005ce787d80672c9136d0cfcd2e4bfffafdd2dd85bb5a20->enter($__internal_71de58314b6ad675d005ce787d80672c9136d0cfcd2e4bfffafdd2dd85bb5a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_acl.html.twig"));

        // line 18
        $context["acl"] = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl_macro.html.twig", "@SonataAdmin/CRUD/base_acl.html.twig", 18);
        // line 12
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07c91b7cc4ce0ee714214298d93d234d0451f738603498bad01489e348cba99f->leave($__internal_07c91b7cc4ce0ee714214298d93d234d0451f738603498bad01489e348cba99f_prof);

        
        $__internal_71de58314b6ad675d005ce787d80672c9136d0cfcd2e4bfffafdd2dd85bb5a20->leave($__internal_71de58314b6ad675d005ce787d80672c9136d0cfcd2e4bfffafdd2dd85bb5a20_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_75f967b52a7e9434e3c5a7ecdeef0ab170851b4eacb58275fcc05c3817b61285 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75f967b52a7e9434e3c5a7ecdeef0ab170851b4eacb58275fcc05c3817b61285->enter($__internal_75f967b52a7e9434e3c5a7ecdeef0ab170851b4eacb58275fcc05c3817b61285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_118bab8136039626e4d48ed897d6429ca95c22ce3431ed42cdf683f12eff828a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_118bab8136039626e4d48ed897d6429ca95c22ce3431ed42cdf683f12eff828a->enter($__internal_118bab8136039626e4d48ed897d6429ca95c22ce3431ed42cdf683f12eff828a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "@SonataAdmin/CRUD/base_acl.html.twig", 15)->display($context);
        
        $__internal_118bab8136039626e4d48ed897d6429ca95c22ce3431ed42cdf683f12eff828a->leave($__internal_118bab8136039626e4d48ed897d6429ca95c22ce3431ed42cdf683f12eff828a_prof);

        
        $__internal_75f967b52a7e9434e3c5a7ecdeef0ab170851b4eacb58275fcc05c3817b61285->leave($__internal_75f967b52a7e9434e3c5a7ecdeef0ab170851b4eacb58275fcc05c3817b61285_prof);

    }

    // line 20
    public function block_form($context, array $blocks = array())
    {
        $__internal_4afb4ee23537ebdcb013c61b7d16ffdc2640cfdd469ce0271ec24719fc831622 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4afb4ee23537ebdcb013c61b7d16ffdc2640cfdd469ce0271ec24719fc831622->enter($__internal_4afb4ee23537ebdcb013c61b7d16ffdc2640cfdd469ce0271ec24719fc831622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_fd4a6aa6b260138dedcd205dafbdb54880410acfb9fc0fdeded4a3a20e970b5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd4a6aa6b260138dedcd205dafbdb54880410acfb9fc0fdeded4a3a20e970b5d->enter($__internal_fd4a6aa6b260138dedcd205dafbdb54880410acfb9fc0fdeded4a3a20e970b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 21
        echo "    ";
        $this->displayBlock('form_acl_roles', $context, $blocks);
        // line 24
        echo "    ";
        $this->displayBlock('form_acl_users', $context, $blocks);
        
        $__internal_fd4a6aa6b260138dedcd205dafbdb54880410acfb9fc0fdeded4a3a20e970b5d->leave($__internal_fd4a6aa6b260138dedcd205dafbdb54880410acfb9fc0fdeded4a3a20e970b5d_prof);

        
        $__internal_4afb4ee23537ebdcb013c61b7d16ffdc2640cfdd469ce0271ec24719fc831622->leave($__internal_4afb4ee23537ebdcb013c61b7d16ffdc2640cfdd469ce0271ec24719fc831622_prof);

    }

    // line 21
    public function block_form_acl_roles($context, array $blocks = array())
    {
        $__internal_0a20ed9da0d7b75fea35890ebe24cc4034c642c0cbe5d252fe76bb4899943029 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a20ed9da0d7b75fea35890ebe24cc4034c642c0cbe5d252fe76bb4899943029->enter($__internal_0a20ed9da0d7b75fea35890ebe24cc4034c642c0cbe5d252fe76bb4899943029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        $__internal_8a6a00174e2f1e5718301cd2036580d78875dd66fdaa540d3a3b7773469126aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a6a00174e2f1e5718301cd2036580d78875dd66fdaa540d3a3b7773469126aa->enter($__internal_8a6a00174e2f1e5718301cd2036580d78875dd66fdaa540d3a3b7773469126aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_roles"));

        // line 22
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclRolesForm"]) ? $context["aclRolesForm"] : $this->getContext($context, "aclRolesForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_role", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_8a6a00174e2f1e5718301cd2036580d78875dd66fdaa540d3a3b7773469126aa->leave($__internal_8a6a00174e2f1e5718301cd2036580d78875dd66fdaa540d3a3b7773469126aa_prof);

        
        $__internal_0a20ed9da0d7b75fea35890ebe24cc4034c642c0cbe5d252fe76bb4899943029->leave($__internal_0a20ed9da0d7b75fea35890ebe24cc4034c642c0cbe5d252fe76bb4899943029_prof);

    }

    // line 24
    public function block_form_acl_users($context, array $blocks = array())
    {
        $__internal_c31f22ef806434e59c9ee5770d5ac6a374cd524294787ae4942a4d45ddfbbc8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c31f22ef806434e59c9ee5770d5ac6a374cd524294787ae4942a4d45ddfbbc8c->enter($__internal_c31f22ef806434e59c9ee5770d5ac6a374cd524294787ae4942a4d45ddfbbc8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        $__internal_cf0383827c893a616fdac960d8b09e7f06ff82e66bb89c885e4ae5b673af2730 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf0383827c893a616fdac960d8b09e7f06ff82e66bb89c885e4ae5b673af2730->enter($__internal_cf0383827c893a616fdac960d8b09e7f06ff82e66bb89c885e4ae5b673af2730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_acl_users"));

        // line 25
        echo "        ";
        echo $context["acl"]->getrender_form((isset($context["aclUsersForm"]) ? $context["aclUsersForm"] : $this->getContext($context, "aclUsersForm")), (isset($context["permissions"]) ? $context["permissions"] : $this->getContext($context, "permissions")), "td_username", (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
        echo "
    ";
        
        $__internal_cf0383827c893a616fdac960d8b09e7f06ff82e66bb89c885e4ae5b673af2730->leave($__internal_cf0383827c893a616fdac960d8b09e7f06ff82e66bb89c885e4ae5b673af2730_prof);

        
        $__internal_c31f22ef806434e59c9ee5770d5ac6a374cd524294787ae4942a4d45ddfbbc8c->leave($__internal_c31f22ef806434e59c9ee5770d5ac6a374cd524294787ae4942a4d45ddfbbc8c_prof);

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
", "@SonataAdmin/CRUD/base_acl.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_acl.html.twig");
    }
}
