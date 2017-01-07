<?php

/* @SonataAdmin/Core/create_button.html.twig */
class __TwigTemplate_4a24e8605db99bdaa6d355f02e8d6ed5ada22f271fdbc96a4683cf973378574f extends Twig_Template
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
        $__internal_589c9f45afd9d0837d0f0f6a17f9a474401372b7f28b3cdf56d247e5ba2bd1f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_589c9f45afd9d0837d0f0f6a17f9a474401372b7f28b3cdf56d247e5ba2bd1f5->enter($__internal_589c9f45afd9d0837d0f0f6a17f9a474401372b7f28b3cdf56d247e5ba2bd1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/create_button.html.twig"));

        $__internal_752327d23f1ef852733322453dad66f39e16c9891d9a9ff72a2964c492d81e30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_752327d23f1ef852733322453dad66f39e16c9891d9a9ff72a2964c492d81e30->enter($__internal_752327d23f1ef852733322453dad66f39e16c9891d9a9ff72a2964c492d81e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/create_button.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_589c9f45afd9d0837d0f0f6a17f9a474401372b7f28b3cdf56d247e5ba2bd1f5->leave($__internal_589c9f45afd9d0837d0f0f6a17f9a474401372b7f28b3cdf56d247e5ba2bd1f5_prof);

        
        $__internal_752327d23f1ef852733322453dad66f39e16c9891d9a9ff72a2964c492d81e30->leave($__internal_752327d23f1ef852733322453dad66f39e16c9891d9a9ff72a2964c492d81e30_prof);

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
", "@SonataAdmin/Core/create_button.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/Core/create_button.html.twig");
    }
}
