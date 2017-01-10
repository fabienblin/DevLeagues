<?php

/* @SonataAdmin/CRUD/list_email.html.twig */
class __TwigTemplate_4bc24109d6d11c2438199760072b335766ba220433d1b4db9f6b543ad3e521cb extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c71423c8554f9cc7a1beaf890e2692a2c670e2c91175125dcba41507702f7c02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c71423c8554f9cc7a1beaf890e2692a2c670e2c91175125dcba41507702f7c02->enter($__internal_c71423c8554f9cc7a1beaf890e2692a2c670e2c91175125dcba41507702f7c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_email.html.twig"));

        $__internal_77287a875713336db4de48ed96fbbafdc9818c3540d58cbc440c8370fb781286 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77287a875713336db4de48ed96fbbafdc9818c3540d58cbc440c8370fb781286->enter($__internal_77287a875713336db4de48ed96fbbafdc9818c3540d58cbc440c8370fb781286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c71423c8554f9cc7a1beaf890e2692a2c670e2c91175125dcba41507702f7c02->leave($__internal_c71423c8554f9cc7a1beaf890e2692a2c670e2c91175125dcba41507702f7c02_prof);

        
        $__internal_77287a875713336db4de48ed96fbbafdc9818c3540d58cbc440c8370fb781286->leave($__internal_77287a875713336db4de48ed96fbbafdc9818c3540d58cbc440c8370fb781286_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4dd9d838355a61754eaa00d69a1f0f9f134a6603a9818179c9a6ace0a2ba0005 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dd9d838355a61754eaa00d69a1f0f9f134a6603a9818179c9a6ace0a2ba0005->enter($__internal_4dd9d838355a61754eaa00d69a1f0f9f134a6603a9818179c9a6ace0a2ba0005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_efc0bec139d72f746c030b9b8a3d8e6cf6b74728511d4ba204c08dc0d5266ec0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efc0bec139d72f746c030b9b8a3d8e6cf6b74728511d4ba204c08dc0d5266ec0->enter($__internal_efc0bec139d72f746c030b9b8a3d8e6cf6b74728511d4ba204c08dc0d5266ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "@SonataAdmin/CRUD/list_email.html.twig", 15)->display($context);
        
        $__internal_efc0bec139d72f746c030b9b8a3d8e6cf6b74728511d4ba204c08dc0d5266ec0->leave($__internal_efc0bec139d72f746c030b9b8a3d8e6cf6b74728511d4ba204c08dc0d5266ec0_prof);

        
        $__internal_4dd9d838355a61754eaa00d69a1f0f9f134a6603a9818179c9a6ace0a2ba0005->leave($__internal_4dd9d838355a61754eaa00d69a1f0f9f134a6603a9818179c9a6ace0a2ba0005_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  39 => 14,  18 => 12,);
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

{% block field %}
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "@SonataAdmin/CRUD/list_email.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_email.html.twig");
    }
}
