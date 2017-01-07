<?php

/* @SonataAdmin/CRUD/show_email.html.twig */
class __TwigTemplate_5a3f6394b6d8d9e754b237c88fabdd6df1e0313c28e36d2dce62703c2f96394b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_email.html.twig", 1);
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
        $__internal_03619f159058a38a7f3a725d0c3b51bfcb7472d26155204407a8df5c47a8778c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03619f159058a38a7f3a725d0c3b51bfcb7472d26155204407a8df5c47a8778c->enter($__internal_03619f159058a38a7f3a725d0c3b51bfcb7472d26155204407a8df5c47a8778c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_email.html.twig"));

        $__internal_51bee03fd8ec83494c40bd493ed78d8aec6d529ded8bbb42520345ea3a66692e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51bee03fd8ec83494c40bd493ed78d8aec6d529ded8bbb42520345ea3a66692e->enter($__internal_51bee03fd8ec83494c40bd493ed78d8aec6d529ded8bbb42520345ea3a66692e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03619f159058a38a7f3a725d0c3b51bfcb7472d26155204407a8df5c47a8778c->leave($__internal_03619f159058a38a7f3a725d0c3b51bfcb7472d26155204407a8df5c47a8778c_prof);

        
        $__internal_51bee03fd8ec83494c40bd493ed78d8aec6d529ded8bbb42520345ea3a66692e->leave($__internal_51bee03fd8ec83494c40bd493ed78d8aec6d529ded8bbb42520345ea3a66692e_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_9bd98c3c6ccd46c0b83fd8f0dfc3347df789a46a89f864471bf312938b940d7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bd98c3c6ccd46c0b83fd8f0dfc3347df789a46a89f864471bf312938b940d7e->enter($__internal_9bd98c3c6ccd46c0b83fd8f0dfc3347df789a46a89f864471bf312938b940d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_d92e2b3ff17be42d36173eda9a224600aa42aebdc580cd0e9fd35e514ddb4bee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d92e2b3ff17be42d36173eda9a224600aa42aebdc580cd0e9fd35e514ddb4bee->enter($__internal_d92e2b3ff17be42d36173eda9a224600aa42aebdc580cd0e9fd35e514ddb4bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "@SonataAdmin/CRUD/show_email.html.twig", 4)->display($context);
        
        $__internal_d92e2b3ff17be42d36173eda9a224600aa42aebdc580cd0e9fd35e514ddb4bee->leave($__internal_d92e2b3ff17be42d36173eda9a224600aa42aebdc580cd0e9fd35e514ddb4bee_prof);

        
        $__internal_9bd98c3c6ccd46c0b83fd8f0dfc3347df789a46a89f864471bf312938b940d7e->leave($__internal_9bd98c3c6ccd46c0b83fd8f0dfc3347df789a46a89f864471bf312938b940d7e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "@SonataAdmin/CRUD/show_email.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_email.html.twig");
    }
}
