<?php

/* DevLeaguesBundle:Leagues:index.html.twig */
class __TwigTemplate_ae60dd292d542d50191f485ff4f457f4a620597d29ff4322645b87752cfc2a85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "DevLeaguesBundle:Leagues:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevLeaguesBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c3377d02b2340091e41aa1d5680acafc430b30883556178fea817897e587d8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c3377d02b2340091e41aa1d5680acafc430b30883556178fea817897e587d8d->enter($__internal_3c3377d02b2340091e41aa1d5680acafc430b30883556178fea817897e587d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Leagues:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c3377d02b2340091e41aa1d5680acafc430b30883556178fea817897e587d8d->leave($__internal_3c3377d02b2340091e41aa1d5680acafc430b30883556178fea817897e587d8d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c063c12fe2161a6450bc24d8eb1d38aa009041668ef9cd83c489c4817b4070c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c063c12fe2161a6450bc24d8eb1d38aa009041668ef9cd83c489c4817b4070c->enter($__internal_6c063c12fe2161a6450bc24d8eb1d38aa009041668ef9cd83c489c4817b4070c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DevLeaguesBundle:Leagues:index";
        
        $__internal_6c063c12fe2161a6450bc24d8eb1d38aa009041668ef9cd83c489c4817b4070c->leave($__internal_6c063c12fe2161a6450bc24d8eb1d38aa009041668ef9cd83c489c4817b4070c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_12de426377ea766226b569fbb0d3a2e3c39556ed3ee0e333a86be46534a96708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12de426377ea766226b569fbb0d3a2e3c39556ed3ee0e333a86be46534a96708->enter($__internal_12de426377ea766226b569fbb0d3a2e3c39556ed3ee0e333a86be46534a96708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Leagues:index page</h1>
";
        
        $__internal_12de426377ea766226b569fbb0d3a2e3c39556ed3ee0e333a86be46534a96708->leave($__internal_12de426377ea766226b569fbb0d3a2e3c39556ed3ee0e333a86be46534a96708_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:Leagues:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}DevLeaguesBundle:Leagues:index{% endblock %}

{% block body %}
<h1>Welcome to the Leagues:index page</h1>
{% endblock %}
", "DevLeaguesBundle:Leagues:index.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/Leagues/index.html.twig");
    }
}
