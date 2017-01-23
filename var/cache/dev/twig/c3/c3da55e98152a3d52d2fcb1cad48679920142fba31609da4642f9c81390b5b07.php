<?php

/* DevLeaguesBundle:League:show.html.twig */
class __TwigTemplate_0aed3f50c55843039a7184cf49898937777a18a5e6341cd72c8bcad887ef4ffb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "DevLeaguesBundle:League:show.html.twig", 1);
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
        $__internal_38c178c7ea158cd4c81e9e33ead885618517841ac229d5cfa32dacded6cacc8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38c178c7ea158cd4c81e9e33ead885618517841ac229d5cfa32dacded6cacc8e->enter($__internal_38c178c7ea158cd4c81e9e33ead885618517841ac229d5cfa32dacded6cacc8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:League:show.html.twig"));

        $__internal_0ddc132f8449cef82867d02fd0c57edff9e0506c42379d93713de26465c323b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ddc132f8449cef82867d02fd0c57edff9e0506c42379d93713de26465c323b4->enter($__internal_0ddc132f8449cef82867d02fd0c57edff9e0506c42379d93713de26465c323b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:League:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38c178c7ea158cd4c81e9e33ead885618517841ac229d5cfa32dacded6cacc8e->leave($__internal_38c178c7ea158cd4c81e9e33ead885618517841ac229d5cfa32dacded6cacc8e_prof);

        
        $__internal_0ddc132f8449cef82867d02fd0c57edff9e0506c42379d93713de26465c323b4->leave($__internal_0ddc132f8449cef82867d02fd0c57edff9e0506c42379d93713de26465c323b4_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_c06f893ee3db894689fcb963bd4df76692973c305185371dcc48b5245b9d86ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c06f893ee3db894689fcb963bd4df76692973c305185371dcc48b5245b9d86ed->enter($__internal_c06f893ee3db894689fcb963bd4df76692973c305185371dcc48b5245b9d86ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_e30012a385ceb51c7a4b086b135fdb47e1ff1d1277008d897dcc2a956a7b76a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e30012a385ceb51c7a4b086b135fdb47e1ff1d1277008d897dcc2a956a7b76a6->enter($__internal_e30012a385ceb51c7a4b086b135fdb47e1ff1d1277008d897dcc2a956a7b76a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "League";
        
        $__internal_e30012a385ceb51c7a4b086b135fdb47e1ff1d1277008d897dcc2a956a7b76a6->leave($__internal_e30012a385ceb51c7a4b086b135fdb47e1ff1d1277008d897dcc2a956a7b76a6_prof);

        
        $__internal_c06f893ee3db894689fcb963bd4df76692973c305185371dcc48b5245b9d86ed->leave($__internal_c06f893ee3db894689fcb963bd4df76692973c305185371dcc48b5245b9d86ed_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_dae667e610c350d8026138d540c324d0638f90d68f9089b22d521f7c703e3afe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dae667e610c350d8026138d540c324d0638f90d68f9089b22d521f7c703e3afe->enter($__internal_dae667e610c350d8026138d540c324d0638f90d68f9089b22d521f7c703e3afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        $__internal_3a870589231c9c125f08fa2b0f0a6678b6f5d7650c5650b6a25d6e3459d01547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a870589231c9c125f08fa2b0f0a6678b6f5d7650c5650b6a25d6e3459d01547->enter($__internal_3a870589231c9c125f08fa2b0f0a6678b6f5d7650c5650b6a25d6e3459d01547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Read Only";
        
        $__internal_3a870589231c9c125f08fa2b0f0a6678b6f5d7650c5650b6a25d6e3459d01547->leave($__internal_3a870589231c9c125f08fa2b0f0a6678b6f5d7650c5650b6a25d6e3459d01547_prof);

        
        $__internal_dae667e610c350d8026138d540c324d0638f90d68f9089b22d521f7c703e3afe->leave($__internal_dae667e610c350d8026138d540c324d0638f90d68f9089b22d521f7c703e3afe_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_b542db6cc5374f315680493bc3145847ebaa19025d42869d09d9efd09a25e2ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b542db6cc5374f315680493bc3145847ebaa19025d42869d09d9efd09a25e2ea->enter($__internal_b542db6cc5374f315680493bc3145847ebaa19025d42869d09d9efd09a25e2ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_f2784ef42dfc1fb0c5e722892f0a1f572ce1d364f3719705db00a310bd7f679a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2784ef42dfc1fb0c5e722892f0a1f572ce1d364f3719705db00a310bd7f679a->enter($__internal_f2784ef42dfc1fb0c5e722892f0a1f572ce1d364f3719705db00a310bd7f679a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "<div class=\"row\">
\t";
        // line 8
        if (($context["league"] ?? $this->getContext($context, "league"))) {
            // line 9
            echo "\t<div class=\"col-lg-4\">
\t\t<div class=\"box box-primary\">
\t\t\t<div class=\"box-header\">
\t\t\t\t<img src=\"\"
\t\t\t\talt=\"image de la ligue\"
\t\t\t\tclass=\"profile-user-img img-responsive img-circle\"/>
\t\t\t\t<h3 class=\"profile-username text-center\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute(($context["league"] ?? $this->getContext($context, "league")), "name", array()), "html", null, true);
            echo "</h3>
\t\t\t</div>
\t\t\t<div class=\"box-body\">
\t\t\t\t<p>
\t\t\t\t\tdescription de la ligue.
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<div class=\"box-footer\">
\t\t\t\t<a href=\"#\" class=\"btn btn-primary btn-block\">Edit</a>
\t\t\t\t<a href=\"#\" class=\"btn btn-primary btn-block\">Join</a>
\t\t\t\t<a href=\"#\" class=\"btn btn-warning btn-block\">Quit</a>
\t\t\t\t<a href=\"#\" class=\"btn btn-danger btn-block\">Delete</a>
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
\t\t\t\t<h3>Members</h3>
\t\t\t</div>
\t\t\t<div class=\"box-body\">
\t\t\t\t<p>
\t\t\t\t\tici la liste des membres et leur statu
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        } else {
            // line 55
            echo "\t<div class=\"col-lg-12\">
\t\t<div class=\"box box-primary\">
\t\t\t<div class=\"box-header\">
\t\t\t\t<h3>Sry but you are not member of any league.</h3>
\t\t\t</div>
\t\t\t<div class=\"box-body\">
\t\t\t\t<p>
\t\t\t\t\tTry to join one that fits your interests. You can also create your own league.
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        }
        // line 68
        echo "</div>
";
        
        $__internal_f2784ef42dfc1fb0c5e722892f0a1f572ce1d364f3719705db00a310bd7f679a->leave($__internal_f2784ef42dfc1fb0c5e722892f0a1f572ce1d364f3719705db00a310bd7f679a_prof);

        
        $__internal_b542db6cc5374f315680493bc3145847ebaa19025d42869d09d9efd09a25e2ea->leave($__internal_b542db6cc5374f315680493bc3145847ebaa19025d42869d09d9efd09a25e2ea_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:League:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 68,  143 => 55,  100 => 15,  92 => 9,  90 => 8,  87 => 7,  78 => 6,  60 => 4,  42 => 3,  11 => 1,);
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

{% block page_title %}League{% endblock %}
{% block page_subtitle %}Read Only{% endblock %}

{% block page_content %}
<div class=\"row\">
\t{% if league %}
\t<div class=\"col-lg-4\">
\t\t<div class=\"box box-primary\">
\t\t\t<div class=\"box-header\">
\t\t\t\t<img src=\"\"
\t\t\t\talt=\"image de la ligue\"
\t\t\t\tclass=\"profile-user-img img-responsive img-circle\"/>
\t\t\t\t<h3 class=\"profile-username text-center\">{{ league.name }}</h3>
\t\t\t</div>
\t\t\t<div class=\"box-body\">
\t\t\t\t<p>
\t\t\t\t\tdescription de la ligue.
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<div class=\"box-footer\">
\t\t\t\t<a href=\"#\" class=\"btn btn-primary btn-block\">Edit</a>
\t\t\t\t<a href=\"#\" class=\"btn btn-primary btn-block\">Join</a>
\t\t\t\t<a href=\"#\" class=\"btn btn-warning btn-block\">Quit</a>
\t\t\t\t<a href=\"#\" class=\"btn btn-danger btn-block\">Delete</a>
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
\t\t\t\t<h3>Members</h3>
\t\t\t</div>
\t\t\t<div class=\"box-body\">
\t\t\t\t<p>
\t\t\t\t\tici la liste des membres et leur statu
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>
\t{% else %}
\t<div class=\"col-lg-12\">
\t\t<div class=\"box box-primary\">
\t\t\t<div class=\"box-header\">
\t\t\t\t<h3>Sry but you are not member of any league.</h3>
\t\t\t</div>
\t\t\t<div class=\"box-body\">
\t\t\t\t<p>
\t\t\t\t\tTry to join one that fits your interests. You can also create your own league.
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>
\t{% endif %}
</div>
{% endblock %}
", "DevLeaguesBundle:League:show.html.twig", "/home/webmaster/www/public_html/DevLeagues/var/cache/dev/../../../src/DevLeaguesBundle/Resources/views/League/show.html.twig");
    }
}
