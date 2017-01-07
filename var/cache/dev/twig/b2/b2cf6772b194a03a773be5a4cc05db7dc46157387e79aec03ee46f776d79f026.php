<?php

/* @SonataAdmin/CRUD/history_revision_timestamp.html.twig */
class __TwigTemplate_0177698a9e4b7e5ef42791042791e18b618255861c8015a038603fe4c172348f extends Twig_Template
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
        $__internal_41dac07b2a50ec46f1233b66bd4175d0a4451f2f184f2a9ca60136640f8e2ba7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41dac07b2a50ec46f1233b66bd4175d0a4451f2f184f2a9ca60136640f8e2ba7->enter($__internal_41dac07b2a50ec46f1233b66bd4175d0a4451f2f184f2a9ca60136640f8e2ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/history_revision_timestamp.html.twig"));

        $__internal_07f0856264be67c1a25db3ee060753b6e13575ead6116d78dfc7be707105f9b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07f0856264be67c1a25db3ee060753b6e13575ead6116d78dfc7be707105f9b2->enter($__internal_07f0856264be67c1a25db3ee060753b6e13575ead6116d78dfc7be707105f9b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/history_revision_timestamp.html.twig"));

        // line 11
        echo "
";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["revision"]) ? $context["revision"] : $this->getContext($context, "revision")), "timestamp", array())), "html", null, true);
        echo "
";
        
        $__internal_41dac07b2a50ec46f1233b66bd4175d0a4451f2f184f2a9ca60136640f8e2ba7->leave($__internal_41dac07b2a50ec46f1233b66bd4175d0a4451f2f184f2a9ca60136640f8e2ba7_prof);

        
        $__internal_07f0856264be67c1a25db3ee060753b6e13575ead6116d78dfc7be707105f9b2->leave($__internal_07f0856264be67c1a25db3ee060753b6e13575ead6116d78dfc7be707105f9b2_prof);

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
", "@SonataAdmin/CRUD/history_revision_timestamp.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/history_revision_timestamp.html.twig");
    }
}
