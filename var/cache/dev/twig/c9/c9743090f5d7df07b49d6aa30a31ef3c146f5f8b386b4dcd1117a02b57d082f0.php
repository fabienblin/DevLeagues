<?php

/* @DevLeagues/Challenge/edit.html.twig */
class __TwigTemplate_a1257f77246fa1da181db181ad6db0d1c8cbc3fb9f6588a71b47b98718519408 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle:Challenge:index.html.twig", "@DevLeagues/Challenge/edit.html.twig", 1);
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
        $__internal_7717e7c88bbc409eac4b6e1f7ff8ff557e6093d1056a2d367604a878870dcdab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7717e7c88bbc409eac4b6e1f7ff8ff557e6093d1056a2d367604a878870dcdab->enter($__internal_7717e7c88bbc409eac4b6e1f7ff8ff557e6093d1056a2d367604a878870dcdab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Challenge/edit.html.twig"));

        $__internal_416f46d1a34fcc1920bce7308e48e377da9cbca4625c1ee216b5da6c1053bced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_416f46d1a34fcc1920bce7308e48e377da9cbca4625c1ee216b5da6c1053bced->enter($__internal_416f46d1a34fcc1920bce7308e48e377da9cbca4625c1ee216b5da6c1053bced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Challenge/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7717e7c88bbc409eac4b6e1f7ff8ff557e6093d1056a2d367604a878870dcdab->leave($__internal_7717e7c88bbc409eac4b6e1f7ff8ff557e6093d1056a2d367604a878870dcdab_prof);

        
        $__internal_416f46d1a34fcc1920bce7308e48e377da9cbca4625c1ee216b5da6c1053bced->leave($__internal_416f46d1a34fcc1920bce7308e48e377da9cbca4625c1ee216b5da6c1053bced_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_39111f7383f452ada655f5ee522dcf5a2f8af3b7360daf3a034a09c1af0be44c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39111f7383f452ada655f5ee522dcf5a2f8af3b7360daf3a034a09c1af0be44c->enter($__internal_39111f7383f452ada655f5ee522dcf5a2f8af3b7360daf3a034a09c1af0be44c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_20a75d4aba9bb6cb372b44cd2b331c1992c941929f464f53ff0b379335681b5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20a75d4aba9bb6cb372b44cd2b331c1992c941929f464f53ff0b379335681b5e->enter($__internal_20a75d4aba9bb6cb372b44cd2b331c1992c941929f464f53ff0b379335681b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Welcome to the Challenge:edit page</h1>
";
        
        $__internal_20a75d4aba9bb6cb372b44cd2b331c1992c941929f464f53ff0b379335681b5e->leave($__internal_20a75d4aba9bb6cb372b44cd2b331c1992c941929f464f53ff0b379335681b5e_prof);

        
        $__internal_39111f7383f452ada655f5ee522dcf5a2f8af3b7360daf3a034a09c1af0be44c->leave($__internal_39111f7383f452ada655f5ee522dcf5a2f8af3b7360daf3a034a09c1af0be44c_prof);

    }

    public function getTemplateName()
    {
        return "@DevLeagues/Challenge/edit.html.twig";
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
<h1>Welcome to the Challenge:edit page</h1>
{% endblock %}
", "@DevLeagues/Challenge/edit.html.twig", "/home/webmaster/www/public_html/DevLeagues/src/DevLeaguesBundle/Resources/views/Challenge/edit.html.twig");
    }
}
