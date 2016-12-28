<?php

/* DevLeaguesBundle:News:index.html.twig */
class __TwigTemplate_446662078075ca079d952d5ce85f55356f7cbc8b18d2e11e1588838e0db97a33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "DevLeaguesBundle:News:index.html.twig", 1);
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
        $__internal_9eb8dd28e758f39db6638ceb71883391786ea8a0c993e5af95e2ca58137160d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eb8dd28e758f39db6638ceb71883391786ea8a0c993e5af95e2ca58137160d0->enter($__internal_9eb8dd28e758f39db6638ceb71883391786ea8a0c993e5af95e2ca58137160d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:News:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9eb8dd28e758f39db6638ceb71883391786ea8a0c993e5af95e2ca58137160d0->leave($__internal_9eb8dd28e758f39db6638ceb71883391786ea8a0c993e5af95e2ca58137160d0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0df0b2414e8328919f26befb66dfd2164a4ddcf5fa565859f904b2c140db4e33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0df0b2414e8328919f26befb66dfd2164a4ddcf5fa565859f904b2c140db4e33->enter($__internal_0df0b2414e8328919f26befb66dfd2164a4ddcf5fa565859f904b2c140db4e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Stay informed</h1>
<p>
\they ! This website isn't ready so you'll have to wait okay !
</p>
";
        
        $__internal_0df0b2414e8328919f26befb66dfd2164a4ddcf5fa565859f904b2c140db4e33->leave($__internal_0df0b2414e8328919f26befb66dfd2164a4ddcf5fa565859f904b2c140db4e33_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 1,);
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
<h1>Stay informed</h1>
<p>
\they ! This website isn't ready so you'll have to wait okay !
</p>
{% endblock %}
", "DevLeaguesBundle:News:index.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/News/index.html.twig");
    }
}
