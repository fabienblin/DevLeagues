<?php

/* @SonataAdmin/Pager/links.html.twig */
class __TwigTemplate_043f3e8405e1a13e971992376f0aca4b4104a68383305bd03f3612f73569b70c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:Pager:base_links.html.twig", "@SonataAdmin/Pager/links.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Pager:base_links.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_888256e063d61c80d70c996c33075eb60b884ce4f7edb955878283c9dee4a44c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_888256e063d61c80d70c996c33075eb60b884ce4f7edb955878283c9dee4a44c->enter($__internal_888256e063d61c80d70c996c33075eb60b884ce4f7edb955878283c9dee4a44c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Pager/links.html.twig"));

        $__internal_486d55f68dff20dadd5f897bfce11314ab07bb724ea1a8ee670a37474dbde6e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_486d55f68dff20dadd5f897bfce11314ab07bb724ea1a8ee670a37474dbde6e1->enter($__internal_486d55f68dff20dadd5f897bfce11314ab07bb724ea1a8ee670a37474dbde6e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Pager/links.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_888256e063d61c80d70c996c33075eb60b884ce4f7edb955878283c9dee4a44c->leave($__internal_888256e063d61c80d70c996c33075eb60b884ce4f7edb955878283c9dee4a44c_prof);

        
        $__internal_486d55f68dff20dadd5f897bfce11314ab07bb724ea1a8ee670a37474dbde6e1->leave($__internal_486d55f68dff20dadd5f897bfce11314ab07bb724ea1a8ee670a37474dbde6e1_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Pager/links.html.twig";
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

{% extends 'SonataAdminBundle:Pager:base_links.html.twig' %}
", "@SonataAdmin/Pager/links.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/Pager/links.html.twig");
    }
}
