<?php

/* @DevLeagues/Challenge/new.html.twig */
class __TwigTemplate_caaaf038aedc46a3fd54eb15c3ad1e265a0b58c2dd7a1be9b3eb398eb5ed00a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle:Challenge:index.html.twig", "@DevLeagues/Challenge/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevLeaguesBundle:Challenge:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d4a08914d673a95f3b0d6eb14d987edf442210daca4d563239ce602aaaea2db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d4a08914d673a95f3b0d6eb14d987edf442210daca4d563239ce602aaaea2db->enter($__internal_6d4a08914d673a95f3b0d6eb14d987edf442210daca4d563239ce602aaaea2db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Challenge/new.html.twig"));

        $__internal_b61dffeb27bdc554549178ea0e501f454be3370dd1371f46b5b3cea0ae8795ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b61dffeb27bdc554549178ea0e501f454be3370dd1371f46b5b3cea0ae8795ea->enter($__internal_b61dffeb27bdc554549178ea0e501f454be3370dd1371f46b5b3cea0ae8795ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Challenge/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d4a08914d673a95f3b0d6eb14d987edf442210daca4d563239ce602aaaea2db->leave($__internal_6d4a08914d673a95f3b0d6eb14d987edf442210daca4d563239ce602aaaea2db_prof);

        
        $__internal_b61dffeb27bdc554549178ea0e501f454be3370dd1371f46b5b3cea0ae8795ea->leave($__internal_b61dffeb27bdc554549178ea0e501f454be3370dd1371f46b5b3cea0ae8795ea_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_501a4efca1107ce96950550a84633d36a0c45b86e2390deea086cdb43ffc6943 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_501a4efca1107ce96950550a84633d36a0c45b86e2390deea086cdb43ffc6943->enter($__internal_501a4efca1107ce96950550a84633d36a0c45b86e2390deea086cdb43ffc6943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eca2373b1df3146d38ef8059451d7a917b6c46858b136b7d0c8c971152a89edd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eca2373b1df3146d38ef8059451d7a917b6c46858b136b7d0c8c971152a89edd->enter($__internal_eca2373b1df3146d38ef8059451d7a917b6c46858b136b7d0c8c971152a89edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Welcome to the Challenge:new page</h1>
";
        
        $__internal_eca2373b1df3146d38ef8059451d7a917b6c46858b136b7d0c8c971152a89edd->leave($__internal_eca2373b1df3146d38ef8059451d7a917b6c46858b136b7d0c8c971152a89edd_prof);

        
        $__internal_501a4efca1107ce96950550a84633d36a0c45b86e2390deea086cdb43ffc6943->leave($__internal_501a4efca1107ce96950550a84633d36a0c45b86e2390deea086cdb43ffc6943_prof);

    }

    public function getTemplateName()
    {
        return "@DevLeagues/Challenge/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"DevLeaguesBundle:Challenge:index.html.twig\" %}

{% block body %}
<h1>Welcome to the Challenge:new page</h1>
{% endblock %}
", "@DevLeagues/Challenge/new.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/Challenge/new.html.twig");
    }
}
