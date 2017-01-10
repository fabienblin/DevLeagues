<?php

/* @SonataAdmin/Core/create_button.html.twig */
class __TwigTemplate_1f64f8add522e5dc4ac7bd16015bfdb1749214c0dfedf8a2cd5352932a770aa4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 15
        $this->parent = $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "@SonataAdmin/Core/create_button.html.twig", 15);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97a973431e19361adfe3d3bdb89c589b0c5035bf770bc0279340d838993d272b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97a973431e19361adfe3d3bdb89c589b0c5035bf770bc0279340d838993d272b->enter($__internal_97a973431e19361adfe3d3bdb89c589b0c5035bf770bc0279340d838993d272b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/create_button.html.twig"));

        $__internal_1a1a19ae1cca9e88284c9aa9382ec7367bdce5feae16174e9bc0ebb119325a95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a1a19ae1cca9e88284c9aa9382ec7367bdce5feae16174e9bc0ebb119325a95->enter($__internal_1a1a19ae1cca9e88284c9aa9382ec7367bdce5feae16174e9bc0ebb119325a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/create_button.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97a973431e19361adfe3d3bdb89c589b0c5035bf770bc0279340d838993d272b->leave($__internal_97a973431e19361adfe3d3bdb89c589b0c5035bf770bc0279340d838993d272b_prof);

        
        $__internal_1a1a19ae1cca9e88284c9aa9382ec7367bdce5feae16174e9bc0ebb119325a95->leave($__internal_1a1a19ae1cca9e88284c9aa9382ec7367bdce5feae16174e9bc0ebb119325a95_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Core/create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 15,);
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

{# DEPRECATED #}
{# This file is kept here for backward compatibility - Rather use SonataAdminBundle:Button:create_button.html.twig #}

{% extends 'SonataAdminBundle:Button:create_button.html.twig' %}
", "@SonataAdmin/Core/create_button.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/Core/create_button.html.twig");
    }
}
