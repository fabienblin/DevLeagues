<?php

/* @DevLeagues/League/new.html.twig */
class __TwigTemplate_ca846001cf58e814591174daefc8d294049208d6f6cdcd87c1d067be06015291 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle:League:base.html.twig", "@DevLeagues/League/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevLeaguesBundle:League:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ead35fcc92fd548a19e2e3519ded72a68e23759ef9e713644cbdbc03ac254fa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ead35fcc92fd548a19e2e3519ded72a68e23759ef9e713644cbdbc03ac254fa9->enter($__internal_ead35fcc92fd548a19e2e3519ded72a68e23759ef9e713644cbdbc03ac254fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/League/new.html.twig"));

        $__internal_78870a2daab7275b190ecd33b04cf529d176de98f81daa74e118469fe0153767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78870a2daab7275b190ecd33b04cf529d176de98f81daa74e118469fe0153767->enter($__internal_78870a2daab7275b190ecd33b04cf529d176de98f81daa74e118469fe0153767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/League/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ead35fcc92fd548a19e2e3519ded72a68e23759ef9e713644cbdbc03ac254fa9->leave($__internal_ead35fcc92fd548a19e2e3519ded72a68e23759ef9e713644cbdbc03ac254fa9_prof);

        
        $__internal_78870a2daab7275b190ecd33b04cf529d176de98f81daa74e118469fe0153767->leave($__internal_78870a2daab7275b190ecd33b04cf529d176de98f81daa74e118469fe0153767_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee938663e20a99215072a5c6dc253cfe7aa1a6757ebc2c72901b890c83217555 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee938663e20a99215072a5c6dc253cfe7aa1a6757ebc2c72901b890c83217555->enter($__internal_ee938663e20a99215072a5c6dc253cfe7aa1a6757ebc2c72901b890c83217555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4002d0600d6a413da821264948154ca45720b3986ce09bb9d30647b9c294a3d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4002d0600d6a413da821264948154ca45720b3986ce09bb9d30647b9c294a3d4->enter($__internal_4002d0600d6a413da821264948154ca45720b3986ce09bb9d30647b9c294a3d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Welcome to the League:new page</h1>
";
        
        $__internal_4002d0600d6a413da821264948154ca45720b3986ce09bb9d30647b9c294a3d4->leave($__internal_4002d0600d6a413da821264948154ca45720b3986ce09bb9d30647b9c294a3d4_prof);

        
        $__internal_ee938663e20a99215072a5c6dc253cfe7aa1a6757ebc2c72901b890c83217555->leave($__internal_ee938663e20a99215072a5c6dc253cfe7aa1a6757ebc2c72901b890c83217555_prof);

    }

    public function getTemplateName()
    {
        return "@DevLeagues/League/new.html.twig";
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
        return new Twig_Source("{% extends \"DevLeaguesBundle:League:base.html.twig\" %}

{% block body %}
<h1>Welcome to the League:new page</h1>
{% endblock %}
", "@DevLeagues/League/new.html.twig", "/home/webmaster/www/public_html/DevLeagues/src/DevLeaguesBundle/Resources/views/League/new.html.twig");
    }
}
