<?php

/* DevLeaguesBundle:User:index.html.twig */
class __TwigTemplate_9e4962bf35ec291c7e78769eaf5fc88f06e18aad262ffba42399f01b9118466c extends Twig_Template
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
        $__internal_bf5cd39eb87527a4617704a2df3079f7f234c81f6b8fc3cca2cd5846f5c28dd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf5cd39eb87527a4617704a2df3079f7f234c81f6b8fc3cca2cd5846f5c28dd2->enter($__internal_bf5cd39eb87527a4617704a2df3079f7f234c81f6b8fc3cca2cd5846f5c28dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:User:index.html.twig"));

        $__internal_68e80c1119030a1fa46065841e2b1d613600328198c7865016f2d3f7aaa91215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68e80c1119030a1fa46065841e2b1d613600328198c7865016f2d3f7aaa91215->enter($__internal_68e80c1119030a1fa46065841e2b1d613600328198c7865016f2d3f7aaa91215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:User:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf5cd39eb87527a4617704a2df3079f7f234c81f6b8fc3cca2cd5846f5c28dd2->leave($__internal_bf5cd39eb87527a4617704a2df3079f7f234c81f6b8fc3cca2cd5846f5c28dd2_prof);

        
        $__internal_68e80c1119030a1fa46065841e2b1d613600328198c7865016f2d3f7aaa91215->leave($__internal_68e80c1119030a1fa46065841e2b1d613600328198c7865016f2d3f7aaa91215_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b58423c5db1728d89c25d2c802d5bf071fb1ec8fb7493b328c33f04e950750f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b58423c5db1728d89c25d2c802d5bf071fb1ec8fb7493b328c33f04e950750f->enter($__internal_1b58423c5db1728d89c25d2c802d5bf071fb1ec8fb7493b328c33f04e950750f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cd9ae400d182c023ef8c545776b75e42f382d93122584649f714d48412ce6961 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd9ae400d182c023ef8c545776b75e42f382d93122584649f714d48412ce6961->enter($__internal_cd9ae400d182c023ef8c545776b75e42f382d93122584649f714d48412ce6961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Welcome to the User:index page</h1>
";
        
        $__internal_cd9ae400d182c023ef8c545776b75e42f382d93122584649f714d48412ce6961->leave($__internal_cd9ae400d182c023ef8c545776b75e42f382d93122584649f714d48412ce6961_prof);

        
        $__internal_1b58423c5db1728d89c25d2c802d5bf071fb1ec8fb7493b328c33f04e950750f->leave($__internal_1b58423c5db1728d89c25d2c802d5bf071fb1ec8fb7493b328c33f04e950750f_prof);

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
", "DevLeaguesBundle:User:index.html.twig", "/home/webmaster/www/public_html/DevLeagues/var/cache/dev/../../../src/DevLeaguesBundle/Resources/views/User/index.html.twig");
    }
}
