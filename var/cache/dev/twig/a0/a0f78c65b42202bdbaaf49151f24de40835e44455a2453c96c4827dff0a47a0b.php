<?php

/* DevLeaguesBundle:User:index.html.twig */
class __TwigTemplate_3fc4785d32fca5bca049791e60c54e6a07bf720988b2464177a6c4e0df5356ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "DevLeaguesBundle:User:index.html.twig", 1);
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
        $__internal_c55bf272a617b5c8bc4d56cee3592669ab14d4391dbeccd26d12174683d0d2c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c55bf272a617b5c8bc4d56cee3592669ab14d4391dbeccd26d12174683d0d2c5->enter($__internal_c55bf272a617b5c8bc4d56cee3592669ab14d4391dbeccd26d12174683d0d2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:User:index.html.twig"));

        $__internal_f5d1a183a62bd84a02250d7b3d3716fcf781456959df23a93a3006b1609da5cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5d1a183a62bd84a02250d7b3d3716fcf781456959df23a93a3006b1609da5cb->enter($__internal_f5d1a183a62bd84a02250d7b3d3716fcf781456959df23a93a3006b1609da5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:User:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c55bf272a617b5c8bc4d56cee3592669ab14d4391dbeccd26d12174683d0d2c5->leave($__internal_c55bf272a617b5c8bc4d56cee3592669ab14d4391dbeccd26d12174683d0d2c5_prof);

        
        $__internal_f5d1a183a62bd84a02250d7b3d3716fcf781456959df23a93a3006b1609da5cb->leave($__internal_f5d1a183a62bd84a02250d7b3d3716fcf781456959df23a93a3006b1609da5cb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_51f609cd9d6000a0cd3f4a7434f5fb87824fc561cf6df9acbff54313d14121f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51f609cd9d6000a0cd3f4a7434f5fb87824fc561cf6df9acbff54313d14121f6->enter($__internal_51f609cd9d6000a0cd3f4a7434f5fb87824fc561cf6df9acbff54313d14121f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b06c12701816d936efd56331572c453f1d1508f5b27a8511df129aad2fb24c67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b06c12701816d936efd56331572c453f1d1508f5b27a8511df129aad2fb24c67->enter($__internal_b06c12701816d936efd56331572c453f1d1508f5b27a8511df129aad2fb24c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Welcome to the User:index page</h1>
";
        
        $__internal_b06c12701816d936efd56331572c453f1d1508f5b27a8511df129aad2fb24c67->leave($__internal_b06c12701816d936efd56331572c453f1d1508f5b27a8511df129aad2fb24c67_prof);

        
        $__internal_51f609cd9d6000a0cd3f4a7434f5fb87824fc561cf6df9acbff54313d14121f6->leave($__internal_51f609cd9d6000a0cd3f4a7434f5fb87824fc561cf6df9acbff54313d14121f6_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:User:index.html.twig";
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
        return new Twig_Source("{% extends \"DevLeaguesBundle::base.html.twig\" %}

{% block body %}
<h1>Welcome to the User:index page</h1>
{% endblock %}
", "DevLeaguesBundle:User:index.html.twig", "/home/webmaster/www/public_html/DevLeagues/src/DevLeaguesBundle/Resources/views/User/index.html.twig");
    }
}
