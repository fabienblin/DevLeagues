<?php

/* @SonataAdmin/CRUD/acl.html.twig */
class __TwigTemplate_ef4f87b4eb54393e83cb3621e32c57bc97ddf7665accc4b8497b1634d0ff2b57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_acl.html.twig", "@SonataAdmin/CRUD/acl.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_acl.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8cfed2b206bcb3e2706758fd71e83d2788899b11d45af2105dc80f0dcaed2b13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cfed2b206bcb3e2706758fd71e83d2788899b11d45af2105dc80f0dcaed2b13->enter($__internal_8cfed2b206bcb3e2706758fd71e83d2788899b11d45af2105dc80f0dcaed2b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/acl.html.twig"));

        $__internal_f05f373d734021523fa0f79551bedb950023a8be459b42e3f7d3ba4514d0df74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f05f373d734021523fa0f79551bedb950023a8be459b42e3f7d3ba4514d0df74->enter($__internal_f05f373d734021523fa0f79551bedb950023a8be459b42e3f7d3ba4514d0df74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cfed2b206bcb3e2706758fd71e83d2788899b11d45af2105dc80f0dcaed2b13->leave($__internal_8cfed2b206bcb3e2706758fd71e83d2788899b11d45af2105dc80f0dcaed2b13_prof);

        
        $__internal_f05f373d734021523fa0f79551bedb950023a8be459b42e3f7d3ba4514d0df74->leave($__internal_f05f373d734021523fa0f79551bedb950023a8be459b42e3f7d3ba4514d0df74_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/acl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_acl.html.twig' %}
", "@SonataAdmin/CRUD/acl.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/acl.html.twig");
    }
}
