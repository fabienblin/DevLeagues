<?php

/* DevLeaguesBundle:Home:index.html.twig */
class __TwigTemplate_87294dfc05c6a6b643b4203aa1a295a64e1251ab46c0988ad643cde88f026853 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "DevLeaguesBundle:Home:index.html.twig", 1);
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
        $__internal_1d1d6fca80839db22cdba077dc2aceb6a7939a7a61f45875defbcf3e0bef4239 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d1d6fca80839db22cdba077dc2aceb6a7939a7a61f45875defbcf3e0bef4239->enter($__internal_1d1d6fca80839db22cdba077dc2aceb6a7939a7a61f45875defbcf3e0bef4239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Home:index.html.twig"));

        $__internal_22a772fa6558f8a72a59616b474dc3fc4dee44580e97d45dc2a0cb5a9b09c0d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22a772fa6558f8a72a59616b474dc3fc4dee44580e97d45dc2a0cb5a9b09c0d3->enter($__internal_22a772fa6558f8a72a59616b474dc3fc4dee44580e97d45dc2a0cb5a9b09c0d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d1d6fca80839db22cdba077dc2aceb6a7939a7a61f45875defbcf3e0bef4239->leave($__internal_1d1d6fca80839db22cdba077dc2aceb6a7939a7a61f45875defbcf3e0bef4239_prof);

        
        $__internal_22a772fa6558f8a72a59616b474dc3fc4dee44580e97d45dc2a0cb5a9b09c0d3->leave($__internal_22a772fa6558f8a72a59616b474dc3fc4dee44580e97d45dc2a0cb5a9b09c0d3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8fade379dbe5afe17d93ae7f712aa0d9601e0faa89a803fbcacfe91ab759188 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8fade379dbe5afe17d93ae7f712aa0d9601e0faa89a803fbcacfe91ab759188->enter($__internal_a8fade379dbe5afe17d93ae7f712aa0d9601e0faa89a803fbcacfe91ab759188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e726942aa443766e14fb00a16b51859d5eaeb26b8a7da87ee2d4833ff9a137ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e726942aa443766e14fb00a16b51859d5eaeb26b8a7da87ee2d4833ff9a137ef->enter($__internal_e726942aa443766e14fb00a16b51859d5eaeb26b8a7da87ee2d4833ff9a137ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Welcome to the Home:index page</h1>
";
        
        $__internal_e726942aa443766e14fb00a16b51859d5eaeb26b8a7da87ee2d4833ff9a137ef->leave($__internal_e726942aa443766e14fb00a16b51859d5eaeb26b8a7da87ee2d4833ff9a137ef_prof);

        
        $__internal_a8fade379dbe5afe17d93ae7f712aa0d9601e0faa89a803fbcacfe91ab759188->leave($__internal_a8fade379dbe5afe17d93ae7f712aa0d9601e0faa89a803fbcacfe91ab759188_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:Home:index.html.twig";
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
<h1>Welcome to the Home:index page</h1>
{% endblock %}
", "DevLeaguesBundle:Home:index.html.twig", "/home/ubuntu/workspace/DevLeagues/src/DevLeaguesBundle/Resources/views/Home/index.html.twig");
    }
}
