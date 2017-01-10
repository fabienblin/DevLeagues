<?php

/* DevLeaguesBundle:User:index.html.twig */
class __TwigTemplate_d606ab31937637b54ceed34972888a48e90dd0825ca4a367b321d682a96f7e8c extends Twig_Template
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
        $__internal_c90cf1218a374631c7e3c50b9d76e5ef6a7e7d6b49c28c55e893dab937fcb809 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c90cf1218a374631c7e3c50b9d76e5ef6a7e7d6b49c28c55e893dab937fcb809->enter($__internal_c90cf1218a374631c7e3c50b9d76e5ef6a7e7d6b49c28c55e893dab937fcb809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:User:index.html.twig"));

        $__internal_4aa37019e2927f9203b26771c74c1e491c452b2bc324b34153c4e5f88cb5ebb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aa37019e2927f9203b26771c74c1e491c452b2bc324b34153c4e5f88cb5ebb0->enter($__internal_4aa37019e2927f9203b26771c74c1e491c452b2bc324b34153c4e5f88cb5ebb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:User:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c90cf1218a374631c7e3c50b9d76e5ef6a7e7d6b49c28c55e893dab937fcb809->leave($__internal_c90cf1218a374631c7e3c50b9d76e5ef6a7e7d6b49c28c55e893dab937fcb809_prof);

        
        $__internal_4aa37019e2927f9203b26771c74c1e491c452b2bc324b34153c4e5f88cb5ebb0->leave($__internal_4aa37019e2927f9203b26771c74c1e491c452b2bc324b34153c4e5f88cb5ebb0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7bb0604208f1cb9a9b62c3f2a89dbc90b4e772d1eeeab9d7c402b0178c50dfc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bb0604208f1cb9a9b62c3f2a89dbc90b4e772d1eeeab9d7c402b0178c50dfc8->enter($__internal_7bb0604208f1cb9a9b62c3f2a89dbc90b4e772d1eeeab9d7c402b0178c50dfc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c78d4a999d2e5fb103375fe46d2d9c1da9d7bc4d7e17b78aea0cd65607594b51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c78d4a999d2e5fb103375fe46d2d9c1da9d7bc4d7e17b78aea0cd65607594b51->enter($__internal_c78d4a999d2e5fb103375fe46d2d9c1da9d7bc4d7e17b78aea0cd65607594b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Welcome to the User:index page</h1>
";
        
        $__internal_c78d4a999d2e5fb103375fe46d2d9c1da9d7bc4d7e17b78aea0cd65607594b51->leave($__internal_c78d4a999d2e5fb103375fe46d2d9c1da9d7bc4d7e17b78aea0cd65607594b51_prof);

        
        $__internal_7bb0604208f1cb9a9b62c3f2a89dbc90b4e772d1eeeab9d7c402b0178c50dfc8->leave($__internal_7bb0604208f1cb9a9b62c3f2a89dbc90b4e772d1eeeab9d7c402b0178c50dfc8_prof);

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
