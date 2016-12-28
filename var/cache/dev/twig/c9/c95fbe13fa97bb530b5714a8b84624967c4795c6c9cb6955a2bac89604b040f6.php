<?php

/* DevLeaguesBundle:Profile:new.html.twig */
class __TwigTemplate_00ccdb8d6313696be5295eb2ee9e7b546f5156756222d2a67b7139ac866cb41f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DevLeaguesBundle:Profile:new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2446f5e232395b9c22ced25e220f5e6d3707ebd7ac9843d5f7f66bd5b9d660d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2446f5e232395b9c22ced25e220f5e6d3707ebd7ac9843d5f7f66bd5b9d660d->enter($__internal_b2446f5e232395b9c22ced25e220f5e6d3707ebd7ac9843d5f7f66bd5b9d660d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Profile:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2446f5e232395b9c22ced25e220f5e6d3707ebd7ac9843d5f7f66bd5b9d660d->leave($__internal_b2446f5e232395b9c22ced25e220f5e6d3707ebd7ac9843d5f7f66bd5b9d660d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_556b698ac9662127a3467fc7965c7aa8b992b4b76174781b22953b821780176e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_556b698ac9662127a3467fc7965c7aa8b992b4b76174781b22953b821780176e->enter($__internal_556b698ac9662127a3467fc7965c7aa8b992b4b76174781b22953b821780176e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DevLeaguesBundle:Profile:new";
        
        $__internal_556b698ac9662127a3467fc7965c7aa8b992b4b76174781b22953b821780176e->leave($__internal_556b698ac9662127a3467fc7965c7aa8b992b4b76174781b22953b821780176e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_00df1a1638d267ae6865eca83f5c47a516867c6131164fecd5041f5b064d88dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00df1a1638d267ae6865eca83f5c47a516867c6131164fecd5041f5b064d88dd->enter($__internal_00df1a1638d267ae6865eca83f5c47a516867c6131164fecd5041f5b064d88dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Profile:new page</h1>
";
        
        $__internal_00df1a1638d267ae6865eca83f5c47a516867c6131164fecd5041f5b064d88dd->leave($__internal_00df1a1638d267ae6865eca83f5c47a516867c6131164fecd5041f5b064d88dd_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:Profile:new.html.twig";
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
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}DevLeaguesBundle:Profile:new{% endblock %}

{% block body %}
<h1>Welcome to the Profile:new page</h1>
{% endblock %}
", "DevLeaguesBundle:Profile:new.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/Profile/new.html.twig");
    }
}
