<?php

/* DevLeaguesBundle:Event:new.html.twig */
class __TwigTemplate_6d5299638a79b2b3548e13cd8b2ca5c3ffaf2f59c1bdaebb3bbfa2a72e83f6bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "DevLeaguesBundle:Event:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevLeaguesBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27b01d39c46853ccabcd70577f2354b1e44adeb3a5f451d0089407f9a6e8ed9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27b01d39c46853ccabcd70577f2354b1e44adeb3a5f451d0089407f9a6e8ed9a->enter($__internal_27b01d39c46853ccabcd70577f2354b1e44adeb3a5f451d0089407f9a6e8ed9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Event:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27b01d39c46853ccabcd70577f2354b1e44adeb3a5f451d0089407f9a6e8ed9a->leave($__internal_27b01d39c46853ccabcd70577f2354b1e44adeb3a5f451d0089407f9a6e8ed9a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7a7c618104d8d14ce454eb422dd0f68ee0e302d038fe40ef5cb8cf7bb42cad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7a7c618104d8d14ce454eb422dd0f68ee0e302d038fe40ef5cb8cf7bb42cad1->enter($__internal_c7a7c618104d8d14ce454eb422dd0f68ee0e302d038fe40ef5cb8cf7bb42cad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 5
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_c7a7c618104d8d14ce454eb422dd0f68ee0e302d038fe40ef5cb8cf7bb42cad1->leave($__internal_c7a7c618104d8d14ce454eb422dd0f68ee0e302d038fe40ef5cb8cf7bb42cad1_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:Event:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"DevLeaguesBundle::base.html.twig\" %}

{% block body %}

{{ form_start(form) }}
{{ form_widget(form) }}
{{ form_end(form) }}

{% endblock %}
", "DevLeaguesBundle:Event:new.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/Event/new.html.twig");
    }
}
