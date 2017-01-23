<?php

/* @SonataAdmin/CRUD/acl.html.twig */
class __TwigTemplate_090b1932794b07c31c45c6dd1750db8e286ed55d842d763b3e88a4d6c84810bb extends Twig_Template
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
        $__internal_cf926b836c543e535f3eb4c6df1c28771df36cafa3ed661c79e9813ee0da28a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf926b836c543e535f3eb4c6df1c28771df36cafa3ed661c79e9813ee0da28a2->enter($__internal_cf926b836c543e535f3eb4c6df1c28771df36cafa3ed661c79e9813ee0da28a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/acl.html.twig"));

        $__internal_c6799466c2e90b369bb8780b57a3ca06bda5161eb919471e092fe721783683e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6799466c2e90b369bb8780b57a3ca06bda5161eb919471e092fe721783683e2->enter($__internal_c6799466c2e90b369bb8780b57a3ca06bda5161eb919471e092fe721783683e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/acl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf926b836c543e535f3eb4c6df1c28771df36cafa3ed661c79e9813ee0da28a2->leave($__internal_cf926b836c543e535f3eb4c6df1c28771df36cafa3ed661c79e9813ee0da28a2_prof);

        
        $__internal_c6799466c2e90b369bb8780b57a3ca06bda5161eb919471e092fe721783683e2->leave($__internal_c6799466c2e90b369bb8780b57a3ca06bda5161eb919471e092fe721783683e2_prof);

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
