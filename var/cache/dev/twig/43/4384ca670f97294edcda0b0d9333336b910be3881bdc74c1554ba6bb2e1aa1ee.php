<?php

/* @SonataAdmin/Pager/results.html.twig */
class __TwigTemplate_acff49710263e72a95323eb9888dc372974c860bc2bf5243ea8676077212055e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_results.html.twig", "@SonataAdmin/Pager/results.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8bba778b7cc0fe1514c057b9dc8293937dffe73a9b5f022a1cab6fd367d06abf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bba778b7cc0fe1514c057b9dc8293937dffe73a9b5f022a1cab6fd367d06abf->enter($__internal_8bba778b7cc0fe1514c057b9dc8293937dffe73a9b5f022a1cab6fd367d06abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Pager/results.html.twig"));

        $__internal_d9e7b2c61b0be31c885f4683bb5906328b47497a84d92479976d1e45c34f5cd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9e7b2c61b0be31c885f4683bb5906328b47497a84d92479976d1e45c34f5cd1->enter($__internal_d9e7b2c61b0be31c885f4683bb5906328b47497a84d92479976d1e45c34f5cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Pager/results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bba778b7cc0fe1514c057b9dc8293937dffe73a9b5f022a1cab6fd367d06abf->leave($__internal_8bba778b7cc0fe1514c057b9dc8293937dffe73a9b5f022a1cab6fd367d06abf_prof);

        
        $__internal_d9e7b2c61b0be31c885f4683bb5906328b47497a84d92479976d1e45c34f5cd1->leave($__internal_d9e7b2c61b0be31c885f4683bb5906328b47497a84d92479976d1e45c34f5cd1_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Pager/results.html.twig";
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

{% extends 'SonataAdminBundle:Pager:base_results.html.twig' %}
", "@SonataAdmin/Pager/results.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/Pager/results.html.twig");
    }
}
