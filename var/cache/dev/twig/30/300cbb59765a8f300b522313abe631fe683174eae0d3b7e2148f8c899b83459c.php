<?php

/* @DevLeagues/Challenge/remove.html.twig */
class __TwigTemplate_006aeb0e4cc271e99133170027a00ca1ad970a032dde909ccdc25fbc41f0c156 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle:Challenge:index.html.twig", "@DevLeagues/Challenge/remove.html.twig", 1);
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
        $__internal_56bb8a72aa9748f9807957709bf1f61816c33ad72f14fd6a95f4077f355d2a27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56bb8a72aa9748f9807957709bf1f61816c33ad72f14fd6a95f4077f355d2a27->enter($__internal_56bb8a72aa9748f9807957709bf1f61816c33ad72f14fd6a95f4077f355d2a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Challenge/remove.html.twig"));

        $__internal_4e1560863cb76b57da417c2e6fb0df920ccafda73540bb9b429d5c5887e8e7cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e1560863cb76b57da417c2e6fb0df920ccafda73540bb9b429d5c5887e8e7cd->enter($__internal_4e1560863cb76b57da417c2e6fb0df920ccafda73540bb9b429d5c5887e8e7cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Challenge/remove.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56bb8a72aa9748f9807957709bf1f61816c33ad72f14fd6a95f4077f355d2a27->leave($__internal_56bb8a72aa9748f9807957709bf1f61816c33ad72f14fd6a95f4077f355d2a27_prof);

        
        $__internal_4e1560863cb76b57da417c2e6fb0df920ccafda73540bb9b429d5c5887e8e7cd->leave($__internal_4e1560863cb76b57da417c2e6fb0df920ccafda73540bb9b429d5c5887e8e7cd_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4288acd26bfc02fcd05ab94585b80f59e8bb7f6e9771dd3335cdfdaad7555942 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4288acd26bfc02fcd05ab94585b80f59e8bb7f6e9771dd3335cdfdaad7555942->enter($__internal_4288acd26bfc02fcd05ab94585b80f59e8bb7f6e9771dd3335cdfdaad7555942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_72265b6a762d8cac75213e31ddf6cbe1a6f91a805cb9dce32b868edd62a71580 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72265b6a762d8cac75213e31ddf6cbe1a6f91a805cb9dce32b868edd62a71580->enter($__internal_72265b6a762d8cac75213e31ddf6cbe1a6f91a805cb9dce32b868edd62a71580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<h1>Welcome to the Challenge:remove page</h1>
";
        
        $__internal_72265b6a762d8cac75213e31ddf6cbe1a6f91a805cb9dce32b868edd62a71580->leave($__internal_72265b6a762d8cac75213e31ddf6cbe1a6f91a805cb9dce32b868edd62a71580_prof);

        
        $__internal_4288acd26bfc02fcd05ab94585b80f59e8bb7f6e9771dd3335cdfdaad7555942->leave($__internal_4288acd26bfc02fcd05ab94585b80f59e8bb7f6e9771dd3335cdfdaad7555942_prof);

    }

    public function getTemplateName()
    {
        return "@DevLeagues/Challenge/remove.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
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
<h1>Welcome to the Challenge:remove page</h1>
{% endblock %}
", "@DevLeagues/Challenge/remove.html.twig", "/home/webmaster/www/public_html/DevLeagues/src/DevLeaguesBundle/Resources/views/Challenge/remove.html.twig");
    }
}
