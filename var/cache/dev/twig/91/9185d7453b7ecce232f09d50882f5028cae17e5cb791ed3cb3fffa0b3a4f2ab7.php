<?php

/* @SonataAdmin/Pager/results.html.twig */
class __TwigTemplate_ccd60c088db503374805b88465394eb0c6ea61911a389eeba726e34c4c1a0b46 extends Twig_Template
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
        $__internal_382adc0c1cfc4538444f7f5225f4b283226d24406f837a7cc013925b53ec779e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_382adc0c1cfc4538444f7f5225f4b283226d24406f837a7cc013925b53ec779e->enter($__internal_382adc0c1cfc4538444f7f5225f4b283226d24406f837a7cc013925b53ec779e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Pager/results.html.twig"));

        $__internal_f2354840b864128ff0ebc8686bd479c63250448d09ff22773d3ec7b577b652ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2354840b864128ff0ebc8686bd479c63250448d09ff22773d3ec7b577b652ff->enter($__internal_f2354840b864128ff0ebc8686bd479c63250448d09ff22773d3ec7b577b652ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Pager/results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_382adc0c1cfc4538444f7f5225f4b283226d24406f837a7cc013925b53ec779e->leave($__internal_382adc0c1cfc4538444f7f5225f4b283226d24406f837a7cc013925b53ec779e_prof);

        
        $__internal_f2354840b864128ff0ebc8686bd479c63250448d09ff22773d3ec7b577b652ff->leave($__internal_f2354840b864128ff0ebc8686bd479c63250448d09ff22773d3ec7b577b652ff_prof);

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
", "@SonataAdmin/Pager/results.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/Pager/results.html.twig");
    }
}
