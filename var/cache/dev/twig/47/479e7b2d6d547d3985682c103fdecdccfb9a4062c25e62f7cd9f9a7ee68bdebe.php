<?php

/* @SonataAdmin/CRUD/history_revision_timestamp.html.twig */
class __TwigTemplate_72dbfdd92ec53b525c3a195553c34736e4d5a3a1c21abea5ed1db4562205680e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a84717177cb56f8302bd858d44cf25ad82885684902a98de92eb1160db252af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a84717177cb56f8302bd858d44cf25ad82885684902a98de92eb1160db252af->enter($__internal_9a84717177cb56f8302bd858d44cf25ad82885684902a98de92eb1160db252af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/history_revision_timestamp.html.twig"));

        $__internal_31a1e6cac696feb0640957dcd71f38d11394b69582d05682a731244766860c91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31a1e6cac696feb0640957dcd71f38d11394b69582d05682a731244766860c91->enter($__internal_31a1e6cac696feb0640957dcd71f38d11394b69582d05682a731244766860c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/history_revision_timestamp.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["revision"] ?? $this->getContext($context, "revision")), "timestamp", array())), "html", null, true);
        echo "
";
        
        $__internal_9a84717177cb56f8302bd858d44cf25ad82885684902a98de92eb1160db252af->leave($__internal_9a84717177cb56f8302bd858d44cf25ad82885684902a98de92eb1160db252af_prof);

        
        $__internal_31a1e6cac696feb0640957dcd71f38d11394b69582d05682a731244766860c91->leave($__internal_31a1e6cac696feb0640957dcd71f38d11394b69582d05682a731244766860c91_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/history_revision_timestamp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 12,  25 => 11,);
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

{{ revision.timestamp|date }}
", "@SonataAdmin/CRUD/history_revision_timestamp.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/history_revision_timestamp.html.twig");
    }
}
