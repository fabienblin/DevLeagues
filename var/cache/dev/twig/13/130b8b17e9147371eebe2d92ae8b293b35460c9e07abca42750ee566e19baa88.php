<?php

/* DevLeaguesBundle:News:index.html.twig */
class __TwigTemplate_6a91bcabb4025702add421754132a0197bf97b14d0ffe608cf8fb2dca81e3f98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "DevLeaguesBundle:News:index.html.twig", 1);
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
        $__internal_bd74640afdc2e99009ecbf0a6af46ab683d70686e0c6941d04a585f55b6c0646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd74640afdc2e99009ecbf0a6af46ab683d70686e0c6941d04a585f55b6c0646->enter($__internal_bd74640afdc2e99009ecbf0a6af46ab683d70686e0c6941d04a585f55b6c0646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:News:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd74640afdc2e99009ecbf0a6af46ab683d70686e0c6941d04a585f55b6c0646->leave($__internal_bd74640afdc2e99009ecbf0a6af46ab683d70686e0c6941d04a585f55b6c0646_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f001597ad08b8e70e345de2a88033b6a8878d1e8822599a6b918cd41f97e4e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f001597ad08b8e70e345de2a88033b6a8878d1e8822599a6b918cd41f97e4e6->enter($__internal_0f001597ad08b8e70e345de2a88033b6a8878d1e8822599a6b918cd41f97e4e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DevLeaguesBundle:News:index";
        
        $__internal_0f001597ad08b8e70e345de2a88033b6a8878d1e8822599a6b918cd41f97e4e6->leave($__internal_0f001597ad08b8e70e345de2a88033b6a8878d1e8822599a6b918cd41f97e4e6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c42d9e1ed61f27192b0df76592169df26c62958175f95a53529d8eeaba4be6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c42d9e1ed61f27192b0df76592169df26c62958175f95a53529d8eeaba4be6f->enter($__internal_8c42d9e1ed61f27192b0df76592169df26c62958175f95a53529d8eeaba4be6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the News:index page</h1>
";
        
        $__internal_8c42d9e1ed61f27192b0df76592169df26c62958175f95a53529d8eeaba4be6f->leave($__internal_8c42d9e1ed61f27192b0df76592169df26c62958175f95a53529d8eeaba4be6f_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:News:index.html.twig";
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

{% block title %}DevLeaguesBundle:News:index{% endblock %}

{% block body %}
<h1>Welcome to the News:index page</h1>
{% endblock %}
", "DevLeaguesBundle:News:index.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/News/index.html.twig");
    }
}
