<?php

/* DevLeaguesBundle:Challenge:show.html.twig */
class __TwigTemplate_4c489631576cedd24d9e5850f41d3383d252fcaa3b44b7db5a7ef591b270cc04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "DevLeaguesBundle:Challenge:show.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevLeaguesBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b93813e9ee7d94cd904fa28e6680cf561769988e6e5f862bdd6b7916ba0069e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b93813e9ee7d94cd904fa28e6680cf561769988e6e5f862bdd6b7916ba0069e->enter($__internal_2b93813e9ee7d94cd904fa28e6680cf561769988e6e5f862bdd6b7916ba0069e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Challenge:show.html.twig"));

        $__internal_46dbf6efdeab09ac3905d00e80114301d65d8e2bd3753a9b03e7f36b51a58d51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46dbf6efdeab09ac3905d00e80114301d65d8e2bd3753a9b03e7f36b51a58d51->enter($__internal_46dbf6efdeab09ac3905d00e80114301d65d8e2bd3753a9b03e7f36b51a58d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Challenge:show.html.twig"));

        // line 3
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "DevLeaguesBundle:Challenge:show.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b93813e9ee7d94cd904fa28e6680cf561769988e6e5f862bdd6b7916ba0069e->leave($__internal_2b93813e9ee7d94cd904fa28e6680cf561769988e6e5f862bdd6b7916ba0069e_prof);

        
        $__internal_46dbf6efdeab09ac3905d00e80114301d65d8e2bd3753a9b03e7f36b51a58d51->leave($__internal_46dbf6efdeab09ac3905d00e80114301d65d8e2bd3753a9b03e7f36b51a58d51_prof);

    }

    // line 5
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_fdfc315122b083a87cd1fb4a4ba40fceac6c2ee2897a58a1e3678d037d793f11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdfc315122b083a87cd1fb4a4ba40fceac6c2ee2897a58a1e3678d037d793f11->enter($__internal_fdfc315122b083a87cd1fb4a4ba40fceac6c2ee2897a58a1e3678d037d793f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_50ebd776a6f351774eef145fa423d2a8354aab8346aae0cc3eac03d7bf1008f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50ebd776a6f351774eef145fa423d2a8354aab8346aae0cc3eac03d7bf1008f6->enter($__internal_50ebd776a6f351774eef145fa423d2a8354aab8346aae0cc3eac03d7bf1008f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Challenge";
        
        $__internal_50ebd776a6f351774eef145fa423d2a8354aab8346aae0cc3eac03d7bf1008f6->leave($__internal_50ebd776a6f351774eef145fa423d2a8354aab8346aae0cc3eac03d7bf1008f6_prof);

        
        $__internal_fdfc315122b083a87cd1fb4a4ba40fceac6c2ee2897a58a1e3678d037d793f11->leave($__internal_fdfc315122b083a87cd1fb4a4ba40fceac6c2ee2897a58a1e3678d037d793f11_prof);

    }

    // line 6
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_f22c32b26290b024edeb38744bc7c1fe53368d044005fb7d8608f9bf84d03826 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f22c32b26290b024edeb38744bc7c1fe53368d044005fb7d8608f9bf84d03826->enter($__internal_f22c32b26290b024edeb38744bc7c1fe53368d044005fb7d8608f9bf84d03826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        $__internal_f07991d974c9bcf5d1119910ef025a13d62b022f2b93db1bfabe178ae4c18ce4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f07991d974c9bcf5d1119910ef025a13d62b022f2b93db1bfabe178ae4c18ce4->enter($__internal_f07991d974c9bcf5d1119910ef025a13d62b022f2b93db1bfabe178ae4c18ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Read Only";
        
        $__internal_f07991d974c9bcf5d1119910ef025a13d62b022f2b93db1bfabe178ae4c18ce4->leave($__internal_f07991d974c9bcf5d1119910ef025a13d62b022f2b93db1bfabe178ae4c18ce4_prof);

        
        $__internal_f22c32b26290b024edeb38744bc7c1fe53368d044005fb7d8608f9bf84d03826->leave($__internal_f22c32b26290b024edeb38744bc7c1fe53368d044005fb7d8608f9bf84d03826_prof);

    }

    // line 8
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_3d04dae2e6778125025afa03ec4045999a17852409f15552544300c800a4499a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d04dae2e6778125025afa03ec4045999a17852409f15552544300c800a4499a->enter($__internal_3d04dae2e6778125025afa03ec4045999a17852409f15552544300c800a4499a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_162dea8d8030068db5737f829b981930c5df717f67afe29e883a5a409dd49578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_162dea8d8030068db5737f829b981930c5df717f67afe29e883a5a409dd49578->enter($__internal_162dea8d8030068db5737f829b981930c5df717f67afe29e883a5a409dd49578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 9
        echo "<div class=\"row\">
\t<div class=\"col-lg-4\">
\t\t<div class=\"box box-primary\">
\t\t\t<div class=\"box-header\">
\t\t\t\t<img src=\"\"
\t\t\t\talt=\"image de la ligue\"
\t\t\t\tclass=\"profile-user-img img-responsive img-circle\"/>
\t\t\t\t<h3 class=\"profile-username text-center\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["challenge"] ?? $this->getContext($context, "challenge")), "name", array()), "html", null, true);
        echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"box-body\">
\t\t\t\t<p>
\t\t\t\t\t";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["challenge"] ?? $this->getContext($context, "challenge")), "description", array()), "html", null, true);
        echo "
\t\t\t\t</p>
\t\t\t\t<label>Time left</label>
\t\t\t\t<progress value=\"50\" max=\"100\"></progress>
\t\t\t</div>
\t\t\t<div class=\"box-footer\">
\t\t\t\t<a href=\"#\" class=\"btn btn-primary btn-block\">Edit</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"col-lg-8\">
\t\t<div class=\"box box-primary\">
\t\t\t<div class=\"box-header\">
\t\t\t\t<h3>Technologies</h3>
\t\t\t</div>
\t\t\t<div class=\"box-body\">
\t\t\t\t<p>ici plein de progress</p>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"row\">
\t<div class=\"col-lg-12\">
\t\t<div class=\"box box-primary\">
\t\t\t<div class=\"box-header\">
\t\t\t\t<h3>Rewards</h3>
\t\t\t</div>
\t\t\t<div class=\"box-body\">
\t\t\t\t<p>
\t\t\t\t\tici la liste des recompenses
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_162dea8d8030068db5737f829b981930c5df717f67afe29e883a5a409dd49578->leave($__internal_162dea8d8030068db5737f829b981930c5df717f67afe29e883a5a409dd49578_prof);

        
        $__internal_3d04dae2e6778125025afa03ec4045999a17852409f15552544300c800a4499a->leave($__internal_3d04dae2e6778125025afa03ec4045999a17852409f15552544300c800a4499a_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:Challenge:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 20,  99 => 16,  90 => 9,  81 => 8,  63 => 6,  45 => 5,  35 => 1,  33 => 3,  11 => 1,);
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

{% import \"AvanzuAdminThemeBundle:layout:macros.html.twig\" as macro %}

{% block page_title %}Challenge{% endblock %}
{% block page_subtitle %}Read Only{% endblock %}

{% block page_content %}
<div class=\"row\">
\t<div class=\"col-lg-4\">
\t\t<div class=\"box box-primary\">
\t\t\t<div class=\"box-header\">
\t\t\t\t<img src=\"\"
\t\t\t\talt=\"image de la ligue\"
\t\t\t\tclass=\"profile-user-img img-responsive img-circle\"/>
\t\t\t\t<h3 class=\"profile-username text-center\">{{ challenge.name }}</h3>
\t\t\t</div>
\t\t\t<div class=\"box-body\">
\t\t\t\t<p>
\t\t\t\t\t{{ challenge.description }}
\t\t\t\t</p>
\t\t\t\t<label>Time left</label>
\t\t\t\t<progress value=\"50\" max=\"100\"></progress>
\t\t\t</div>
\t\t\t<div class=\"box-footer\">
\t\t\t\t<a href=\"#\" class=\"btn btn-primary btn-block\">Edit</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"col-lg-8\">
\t\t<div class=\"box box-primary\">
\t\t\t<div class=\"box-header\">
\t\t\t\t<h3>Technologies</h3>
\t\t\t</div>
\t\t\t<div class=\"box-body\">
\t\t\t\t<p>ici plein de progress</p>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"row\">
\t<div class=\"col-lg-12\">
\t\t<div class=\"box box-primary\">
\t\t\t<div class=\"box-header\">
\t\t\t\t<h3>Rewards</h3>
\t\t\t</div>
\t\t\t<div class=\"box-body\">
\t\t\t\t<p>
\t\t\t\t\tici la liste des recompenses
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
{% endblock %}
", "DevLeaguesBundle:Challenge:show.html.twig", "/home/webmaster/www/public_html/DevLeagues/var/cache/dev/../../../src/DevLeaguesBundle/Resources/views/Challenge/show.html.twig");
    }
}
