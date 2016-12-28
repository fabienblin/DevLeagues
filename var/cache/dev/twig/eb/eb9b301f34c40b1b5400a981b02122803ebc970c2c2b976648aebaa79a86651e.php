<?php

/* DevLeaguesBundle:About:index.html.twig */
class __TwigTemplate_a48b60eb9b67c99c3fa1ca823594a0f191a607f1340b2ffa0dcc13dd3229072e extends Twig_Template
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
        $__internal_8967b7e5240cab4bb9fc0c2a8ef164315b5ae0acede97a1a924868d39c399275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8967b7e5240cab4bb9fc0c2a8ef164315b5ae0acede97a1a924868d39c399275->enter($__internal_8967b7e5240cab4bb9fc0c2a8ef164315b5ae0acede97a1a924868d39c399275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:About:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8967b7e5240cab4bb9fc0c2a8ef164315b5ae0acede97a1a924868d39c399275->leave($__internal_8967b7e5240cab4bb9fc0c2a8ef164315b5ae0acede97a1a924868d39c399275_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dea36da15c7e3a97c568c696a8c848315cf39aeef821f189a71a2dbe52bfd18c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dea36da15c7e3a97c568c696a8c848315cf39aeef821f189a71a2dbe52bfd18c->enter($__internal_dea36da15c7e3a97c568c696a8c848315cf39aeef821f189a71a2dbe52bfd18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DevLeaguesBundle:About:index";
        
        $__internal_dea36da15c7e3a97c568c696a8c848315cf39aeef821f189a71a2dbe52bfd18c->leave($__internal_dea36da15c7e3a97c568c696a8c848315cf39aeef821f189a71a2dbe52bfd18c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_22bc87aadee1e70425020f1acde8bd527941dc12286370c67fb9eebd8598a49d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22bc87aadee1e70425020f1acde8bd527941dc12286370c67fb9eebd8598a49d->enter($__internal_22bc87aadee1e70425020f1acde8bd527941dc12286370c67fb9eebd8598a49d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>About DevLeagues</h1>
<p>
\tThis project started on december 2016 by Fabien Blin, as a personal project
\tbut with the conviction it could be the beginning of a great adventure.
</p>
<p>
\tThe idea came after some delicious pizza with schoolmates, talking about how
\tto challenge newbies on simple school exercices. Moreover, it would be
\tessencial to reward masters and pupils for their participation and get
\treputation from victories in order to show other schoolmates the best teams.
</p>
";
        
        $__internal_22bc87aadee1e70425020f1acde8bd527941dc12286370c67fb9eebd8598a49d->leave($__internal_22bc87aadee1e70425020f1acde8bd527941dc12286370c67fb9eebd8598a49d_prof);

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
<h1>About DevLeagues</h1>
<p>
\tThis project started on december 2016 by Fabien Blin, as a personal project
\tbut with the conviction it could be the beginning of a great adventure.
</p>
<p>
\tThe idea came after some delicious pizza with schoolmates, talking about how
\tto challenge newbies on simple school exercices. Moreover, it would be
\tessencial to reward masters and pupils for their participation and get
\treputation from victories in order to show other schoolmates the best teams.
</p>
{% endblock %}
", "DevLeaguesBundle:About:index.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/About/index.html.twig");
    }
}
