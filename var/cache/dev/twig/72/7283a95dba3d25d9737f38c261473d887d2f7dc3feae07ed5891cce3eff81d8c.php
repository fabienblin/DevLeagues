<?php

/* @DevLeagues/Challenge/show.html.twig */
class __TwigTemplate_96538dc0aab3c70a0f18a8fbf068eb422f41869ca90797d5244404dd4e44169e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "@DevLeagues/Challenge/show.html.twig", 1);
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
        $__internal_2af5ac504dbf992538ded557d8d7d59d9d09fd42a3412c9af0267896ef553b1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2af5ac504dbf992538ded557d8d7d59d9d09fd42a3412c9af0267896ef553b1f->enter($__internal_2af5ac504dbf992538ded557d8d7d59d9d09fd42a3412c9af0267896ef553b1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Challenge/show.html.twig"));

        $__internal_8e07b1048192085548f6b740a7a3d9cb32309ef58cef7d5a2954efb5d3e3bf2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e07b1048192085548f6b740a7a3d9cb32309ef58cef7d5a2954efb5d3e3bf2c->enter($__internal_8e07b1048192085548f6b740a7a3d9cb32309ef58cef7d5a2954efb5d3e3bf2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Challenge/show.html.twig"));

        // line 3
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "@DevLeagues/Challenge/show.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2af5ac504dbf992538ded557d8d7d59d9d09fd42a3412c9af0267896ef553b1f->leave($__internal_2af5ac504dbf992538ded557d8d7d59d9d09fd42a3412c9af0267896ef553b1f_prof);

        
        $__internal_8e07b1048192085548f6b740a7a3d9cb32309ef58cef7d5a2954efb5d3e3bf2c->leave($__internal_8e07b1048192085548f6b740a7a3d9cb32309ef58cef7d5a2954efb5d3e3bf2c_prof);

    }

    // line 5
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_4d64b0477db9eb7ae250a23a4955e354ec9c9823abce47c8c0720db1af9d8449 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d64b0477db9eb7ae250a23a4955e354ec9c9823abce47c8c0720db1af9d8449->enter($__internal_4d64b0477db9eb7ae250a23a4955e354ec9c9823abce47c8c0720db1af9d8449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_a29da55ed0496fa16531503d48b533064c130552e350d79a7401ac49e651b61b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a29da55ed0496fa16531503d48b533064c130552e350d79a7401ac49e651b61b->enter($__internal_a29da55ed0496fa16531503d48b533064c130552e350d79a7401ac49e651b61b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Challenge";
        
        $__internal_a29da55ed0496fa16531503d48b533064c130552e350d79a7401ac49e651b61b->leave($__internal_a29da55ed0496fa16531503d48b533064c130552e350d79a7401ac49e651b61b_prof);

        
        $__internal_4d64b0477db9eb7ae250a23a4955e354ec9c9823abce47c8c0720db1af9d8449->leave($__internal_4d64b0477db9eb7ae250a23a4955e354ec9c9823abce47c8c0720db1af9d8449_prof);

    }

    // line 6
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_c0462faaeee52d6228173c7680e453da244e101d60ae969ee77461c0e1071283 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0462faaeee52d6228173c7680e453da244e101d60ae969ee77461c0e1071283->enter($__internal_c0462faaeee52d6228173c7680e453da244e101d60ae969ee77461c0e1071283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        $__internal_51bf45a6ae04741645bc495d1a82c7a3b663765af427613bfb4e9f95df367dad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51bf45a6ae04741645bc495d1a82c7a3b663765af427613bfb4e9f95df367dad->enter($__internal_51bf45a6ae04741645bc495d1a82c7a3b663765af427613bfb4e9f95df367dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Read Only";
        
        $__internal_51bf45a6ae04741645bc495d1a82c7a3b663765af427613bfb4e9f95df367dad->leave($__internal_51bf45a6ae04741645bc495d1a82c7a3b663765af427613bfb4e9f95df367dad_prof);

        
        $__internal_c0462faaeee52d6228173c7680e453da244e101d60ae969ee77461c0e1071283->leave($__internal_c0462faaeee52d6228173c7680e453da244e101d60ae969ee77461c0e1071283_prof);

    }

    // line 8
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_ba7fb06dd0de9ada4a435ce3fdd710e4e4b50d2441934dc09a40c8cbb3331947 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba7fb06dd0de9ada4a435ce3fdd710e4e4b50d2441934dc09a40c8cbb3331947->enter($__internal_ba7fb06dd0de9ada4a435ce3fdd710e4e4b50d2441934dc09a40c8cbb3331947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_9b03332d6370beb0f3f5a9790522e62b1c0b81ce18f4e098d53ec2abbbf9c472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b03332d6370beb0f3f5a9790522e62b1c0b81ce18f4e098d53ec2abbbf9c472->enter($__internal_9b03332d6370beb0f3f5a9790522e62b1c0b81ce18f4e098d53ec2abbbf9c472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_9b03332d6370beb0f3f5a9790522e62b1c0b81ce18f4e098d53ec2abbbf9c472->leave($__internal_9b03332d6370beb0f3f5a9790522e62b1c0b81ce18f4e098d53ec2abbbf9c472_prof);

        
        $__internal_ba7fb06dd0de9ada4a435ce3fdd710e4e4b50d2441934dc09a40c8cbb3331947->leave($__internal_ba7fb06dd0de9ada4a435ce3fdd710e4e4b50d2441934dc09a40c8cbb3331947_prof);

    }

    public function getTemplateName()
    {
        return "@DevLeagues/Challenge/show.html.twig";
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
", "@DevLeagues/Challenge/show.html.twig", "/home/webmaster/www/public_html/DevLeagues/src/DevLeaguesBundle/Resources/views/Challenge/show.html.twig");
    }
}
