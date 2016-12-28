<?php

/* DevLeaguesBundle:About:index.html.twig */
class __TwigTemplate_c3ad097428c94f34905107a1f689748bb071c401ca5914ff1310d178b2ddd19d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "DevLeaguesBundle:About:index.html.twig", 1);
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
        $__internal_eac31950d44520a438fa75590a40fd861f4143552a8dde3dd58ae5e09404f255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eac31950d44520a438fa75590a40fd861f4143552a8dde3dd58ae5e09404f255->enter($__internal_eac31950d44520a438fa75590a40fd861f4143552a8dde3dd58ae5e09404f255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:About:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eac31950d44520a438fa75590a40fd861f4143552a8dde3dd58ae5e09404f255->leave($__internal_eac31950d44520a438fa75590a40fd861f4143552a8dde3dd58ae5e09404f255_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8caf8124bb964c8bda4b21c1580ca16f2e295a36bc27f0b2c24a9e163b9a03b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8caf8124bb964c8bda4b21c1580ca16f2e295a36bc27f0b2c24a9e163b9a03b->enter($__internal_b8caf8124bb964c8bda4b21c1580ca16f2e295a36bc27f0b2c24a9e163b9a03b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DevLeaguesBundle:About:index";
        
        $__internal_b8caf8124bb964c8bda4b21c1580ca16f2e295a36bc27f0b2c24a9e163b9a03b->leave($__internal_b8caf8124bb964c8bda4b21c1580ca16f2e295a36bc27f0b2c24a9e163b9a03b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a8269ecd701674e79327bb86f7ead39ddc8b1b39b341e8aa6e11c41a645962b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a8269ecd701674e79327bb86f7ead39ddc8b1b39b341e8aa6e11c41a645962b->enter($__internal_0a8269ecd701674e79327bb86f7ead39ddc8b1b39b341e8aa6e11c41a645962b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the About:index page</h1>
";
        
        $__internal_0a8269ecd701674e79327bb86f7ead39ddc8b1b39b341e8aa6e11c41a645962b->leave($__internal_0a8269ecd701674e79327bb86f7ead39ddc8b1b39b341e8aa6e11c41a645962b_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:About:index.html.twig";
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

{% block title %}DevLeaguesBundle:About:index{% endblock %}

{% block body %}
<h1>Welcome to the About:index page</h1>
{% endblock %}
", "DevLeaguesBundle:About:index.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/About/index.html.twig");
    }
}
