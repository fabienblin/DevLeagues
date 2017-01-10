<?php

/* @SonataAdmin/Pager/results.html.twig */
class __TwigTemplate_70d77a8db536311f9bc1fbdeeb49dd183f147412dd6b2de31893d80c75d5b0bc extends Twig_Template
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
        $__internal_753882df3597f1588541f133f462901f12956441b7efbd8620398511e9871c21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_753882df3597f1588541f133f462901f12956441b7efbd8620398511e9871c21->enter($__internal_753882df3597f1588541f133f462901f12956441b7efbd8620398511e9871c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Pager/results.html.twig"));

        $__internal_c055e4bcb5b8d74fc48b8ef8431ea241cfc051f26a6c969397d42482e9032cb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c055e4bcb5b8d74fc48b8ef8431ea241cfc051f26a6c969397d42482e9032cb4->enter($__internal_c055e4bcb5b8d74fc48b8ef8431ea241cfc051f26a6c969397d42482e9032cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Pager/results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_753882df3597f1588541f133f462901f12956441b7efbd8620398511e9871c21->leave($__internal_753882df3597f1588541f133f462901f12956441b7efbd8620398511e9871c21_prof);

        
        $__internal_c055e4bcb5b8d74fc48b8ef8431ea241cfc051f26a6c969397d42482e9032cb4->leave($__internal_c055e4bcb5b8d74fc48b8ef8431ea241cfc051f26a6c969397d42482e9032cb4_prof);

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
