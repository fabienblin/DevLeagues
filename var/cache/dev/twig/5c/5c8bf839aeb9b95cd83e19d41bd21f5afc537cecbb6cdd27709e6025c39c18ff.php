<?php

/* @DevLeagues/Challenge/edit.html.twig */
class __TwigTemplate_79b81a46ec8c93d2146731c151d1d139f7cd678cdef53aa6545d3c287534a035 extends Twig_Template
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
        $__internal_f4fb8effb0684604046521b0e688a3a2e0e41501d89b0a72321e884a7f2bca5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4fb8effb0684604046521b0e688a3a2e0e41501d89b0a72321e884a7f2bca5d->enter($__internal_f4fb8effb0684604046521b0e688a3a2e0e41501d89b0a72321e884a7f2bca5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Challenge/edit.html.twig"));

        $__internal_d61242414395245daacd93bd6b184bda7d45d25a22dfef46d9bc403711c8e746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d61242414395245daacd93bd6b184bda7d45d25a22dfef46d9bc403711c8e746->enter($__internal_d61242414395245daacd93bd6b184bda7d45d25a22dfef46d9bc403711c8e746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Challenge/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4fb8effb0684604046521b0e688a3a2e0e41501d89b0a72321e884a7f2bca5d->leave($__internal_f4fb8effb0684604046521b0e688a3a2e0e41501d89b0a72321e884a7f2bca5d_prof);

        
        $__internal_d61242414395245daacd93bd6b184bda7d45d25a22dfef46d9bc403711c8e746->leave($__internal_d61242414395245daacd93bd6b184bda7d45d25a22dfef46d9bc403711c8e746_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1ff75955232cb4acaadeacfbd55120883adba3760771d5181bff2936e92578b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1ff75955232cb4acaadeacfbd55120883adba3760771d5181bff2936e92578b->enter($__internal_a1ff75955232cb4acaadeacfbd55120883adba3760771d5181bff2936e92578b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_98177942abc1a37d65f2a39aa7b6819c511e2a611d52c4f5e09e03ab59eb6ecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98177942abc1a37d65f2a39aa7b6819c511e2a611d52c4f5e09e03ab59eb6ecd->enter($__internal_98177942abc1a37d65f2a39aa7b6819c511e2a611d52c4f5e09e03ab59eb6ecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Welcome to the Challenge:edit page</h1>
";
        
        $__internal_98177942abc1a37d65f2a39aa7b6819c511e2a611d52c4f5e09e03ab59eb6ecd->leave($__internal_98177942abc1a37d65f2a39aa7b6819c511e2a611d52c4f5e09e03ab59eb6ecd_prof);

        
        $__internal_a1ff75955232cb4acaadeacfbd55120883adba3760771d5181bff2936e92578b->leave($__internal_a1ff75955232cb4acaadeacfbd55120883adba3760771d5181bff2936e92578b_prof);

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
