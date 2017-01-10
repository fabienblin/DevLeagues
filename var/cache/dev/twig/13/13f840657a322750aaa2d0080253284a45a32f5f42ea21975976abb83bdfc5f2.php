<?php

/* @DevLeagues/Challenge/show_reduced.html.twig */
class __TwigTemplate_dab61f57a42aa498f20efcbb418e7c4e504055f13172501d7e34c000d2bdebfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle:Challenge:index.html.twig", "@DevLeagues/Challenge/show_reduced.html.twig", 1);
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
        $__internal_7c2e67b433021ebe844744489ab8a250750e68f3a5fa4a220abf3539c7823849 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c2e67b433021ebe844744489ab8a250750e68f3a5fa4a220abf3539c7823849->enter($__internal_7c2e67b433021ebe844744489ab8a250750e68f3a5fa4a220abf3539c7823849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Challenge/show_reduced.html.twig"));

        $__internal_e505329d1ed05d5e2c13afaa830da237a0359fed14866accf01c2c20b2604171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e505329d1ed05d5e2c13afaa830da237a0359fed14866accf01c2c20b2604171->enter($__internal_e505329d1ed05d5e2c13afaa830da237a0359fed14866accf01c2c20b2604171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Challenge/show_reduced.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c2e67b433021ebe844744489ab8a250750e68f3a5fa4a220abf3539c7823849->leave($__internal_7c2e67b433021ebe844744489ab8a250750e68f3a5fa4a220abf3539c7823849_prof);

        
        $__internal_e505329d1ed05d5e2c13afaa830da237a0359fed14866accf01c2c20b2604171->leave($__internal_e505329d1ed05d5e2c13afaa830da237a0359fed14866accf01c2c20b2604171_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1123bd07caa87973c73e196b1e4877e9edfcd99a17c1648428edcc61da14f51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1123bd07caa87973c73e196b1e4877e9edfcd99a17c1648428edcc61da14f51->enter($__internal_b1123bd07caa87973c73e196b1e4877e9edfcd99a17c1648428edcc61da14f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_52da11a8916daca50030bdd132eb4f17400268935f699e094155caf4fe51a1f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52da11a8916daca50030bdd132eb4f17400268935f699e094155caf4fe51a1f7->enter($__internal_52da11a8916daca50030bdd132eb4f17400268935f699e094155caf4fe51a1f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Welcome to the Challenge:showReduced page</h1>
";
        
        $__internal_52da11a8916daca50030bdd132eb4f17400268935f699e094155caf4fe51a1f7->leave($__internal_52da11a8916daca50030bdd132eb4f17400268935f699e094155caf4fe51a1f7_prof);

        
        $__internal_b1123bd07caa87973c73e196b1e4877e9edfcd99a17c1648428edcc61da14f51->leave($__internal_b1123bd07caa87973c73e196b1e4877e9edfcd99a17c1648428edcc61da14f51_prof);

    }

    public function getTemplateName()
    {
        return "@DevLeagues/Challenge/show_reduced.html.twig";
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
<h1>Welcome to the Challenge:showReduced page</h1>
{% endblock %}
", "@DevLeagues/Challenge/show_reduced.html.twig", "/home/webmaster/www/public_html/DevLeagues/src/DevLeaguesBundle/Resources/views/Challenge/show_reduced.html.twig");
    }
}
