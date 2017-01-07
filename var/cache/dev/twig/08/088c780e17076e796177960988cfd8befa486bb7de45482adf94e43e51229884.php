<?php

/* @SonataAdmin/CRUD/list_email.html.twig */
class __TwigTemplate_e4af58169823c49ae3ebc002d6430e2fd2785924a1890e0949c8334403c0c1af extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_email.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbfdfd1f4a6b0e55c59fa4b19954f5819dbfe590c908502a0c9d14ebbfa16c8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbfdfd1f4a6b0e55c59fa4b19954f5819dbfe590c908502a0c9d14ebbfa16c8e->enter($__internal_dbfdfd1f4a6b0e55c59fa4b19954f5819dbfe590c908502a0c9d14ebbfa16c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_email.html.twig"));

        $__internal_aca6fd9db66862530d18771b4ba01c5b8196879b4572a02033bb1afa12df0b4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aca6fd9db66862530d18771b4ba01c5b8196879b4572a02033bb1afa12df0b4b->enter($__internal_aca6fd9db66862530d18771b4ba01c5b8196879b4572a02033bb1afa12df0b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_email.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbfdfd1f4a6b0e55c59fa4b19954f5819dbfe590c908502a0c9d14ebbfa16c8e->leave($__internal_dbfdfd1f4a6b0e55c59fa4b19954f5819dbfe590c908502a0c9d14ebbfa16c8e_prof);

        
        $__internal_aca6fd9db66862530d18771b4ba01c5b8196879b4572a02033bb1afa12df0b4b->leave($__internal_aca6fd9db66862530d18771b4ba01c5b8196879b4572a02033bb1afa12df0b4b_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_1a8cc4d39c1e6875148e5d74037d6902d54eec5da2f21e39bf3b628d0b209697 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a8cc4d39c1e6875148e5d74037d6902d54eec5da2f21e39bf3b628d0b209697->enter($__internal_1a8cc4d39c1e6875148e5d74037d6902d54eec5da2f21e39bf3b628d0b209697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_5ae39ff4e2625f26bd4154508127780f39deb91f0acc7cf1309e2c33f7294e65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ae39ff4e2625f26bd4154508127780f39deb91f0acc7cf1309e2c33f7294e65->enter($__internal_5ae39ff4e2625f26bd4154508127780f39deb91f0acc7cf1309e2c33f7294e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "@SonataAdmin/CRUD/list_email.html.twig", 15)->display($context);
        
        $__internal_5ae39ff4e2625f26bd4154508127780f39deb91f0acc7cf1309e2c33f7294e65->leave($__internal_5ae39ff4e2625f26bd4154508127780f39deb91f0acc7cf1309e2c33f7294e65_prof);

        
        $__internal_1a8cc4d39c1e6875148e5d74037d6902d54eec5da2f21e39bf3b628d0b209697->leave($__internal_1a8cc4d39c1e6875148e5d74037d6902d54eec5da2f21e39bf3b628d0b209697_prof);

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
", "@SonataAdmin/CRUD/list_email.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_email.html.twig");
    }
}
