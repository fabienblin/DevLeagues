<?php

/* @DevLeagues/League/show.html.twig */
class __TwigTemplate_2219d733b28c2798c81eb82c6eb04eae1eafaf9ded628b1aeefc710ee7130862 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "@DevLeagues/League/show.html.twig", 1);
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
        $__internal_39d1cb140d1499d98295556931a4a590e62fe948f846880c4f3c7b3570898366 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39d1cb140d1499d98295556931a4a590e62fe948f846880c4f3c7b3570898366->enter($__internal_39d1cb140d1499d98295556931a4a590e62fe948f846880c4f3c7b3570898366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/League/show.html.twig"));

        $__internal_c9d999f0f999517538d0c501af4e1801b97112d74d0eb64821e4249c396a8634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9d999f0f999517538d0c501af4e1801b97112d74d0eb64821e4249c396a8634->enter($__internal_c9d999f0f999517538d0c501af4e1801b97112d74d0eb64821e4249c396a8634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/League/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39d1cb140d1499d98295556931a4a590e62fe948f846880c4f3c7b3570898366->leave($__internal_39d1cb140d1499d98295556931a4a590e62fe948f846880c4f3c7b3570898366_prof);

        
        $__internal_c9d999f0f999517538d0c501af4e1801b97112d74d0eb64821e4249c396a8634->leave($__internal_c9d999f0f999517538d0c501af4e1801b97112d74d0eb64821e4249c396a8634_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_22d851629f7c2f6cbc758c67c487a65426e1ecf665a992f7f2464bdd76043cb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22d851629f7c2f6cbc758c67c487a65426e1ecf665a992f7f2464bdd76043cb3->enter($__internal_22d851629f7c2f6cbc758c67c487a65426e1ecf665a992f7f2464bdd76043cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_b884888a6d0998cfc77f132ed0553f325528a8b96fe36069f7f50ee8222113c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b884888a6d0998cfc77f132ed0553f325528a8b96fe36069f7f50ee8222113c2->enter($__internal_b884888a6d0998cfc77f132ed0553f325528a8b96fe36069f7f50ee8222113c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "League";
        
        $__internal_b884888a6d0998cfc77f132ed0553f325528a8b96fe36069f7f50ee8222113c2->leave($__internal_b884888a6d0998cfc77f132ed0553f325528a8b96fe36069f7f50ee8222113c2_prof);

        
        $__internal_22d851629f7c2f6cbc758c67c487a65426e1ecf665a992f7f2464bdd76043cb3->leave($__internal_22d851629f7c2f6cbc758c67c487a65426e1ecf665a992f7f2464bdd76043cb3_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_43c459ba8fa46ffe67dab5974b7a61427ecc620026ab38f0c107a12012f6fa43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43c459ba8fa46ffe67dab5974b7a61427ecc620026ab38f0c107a12012f6fa43->enter($__internal_43c459ba8fa46ffe67dab5974b7a61427ecc620026ab38f0c107a12012f6fa43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        $__internal_5074843b6a1a41dd407431dffefc0dc245fab0c06ba813b63bca09b29bc09efe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5074843b6a1a41dd407431dffefc0dc245fab0c06ba813b63bca09b29bc09efe->enter($__internal_5074843b6a1a41dd407431dffefc0dc245fab0c06ba813b63bca09b29bc09efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Read Only";
        
        $__internal_5074843b6a1a41dd407431dffefc0dc245fab0c06ba813b63bca09b29bc09efe->leave($__internal_5074843b6a1a41dd407431dffefc0dc245fab0c06ba813b63bca09b29bc09efe_prof);

        
        $__internal_43c459ba8fa46ffe67dab5974b7a61427ecc620026ab38f0c107a12012f6fa43->leave($__internal_43c459ba8fa46ffe67dab5974b7a61427ecc620026ab38f0c107a12012f6fa43_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_7d726d5437794e2de553ab2ce4e829e99c7fa39af62e5a75ecacebce1fb64c78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d726d5437794e2de553ab2ce4e829e99c7fa39af62e5a75ecacebce1fb64c78->enter($__internal_7d726d5437794e2de553ab2ce4e829e99c7fa39af62e5a75ecacebce1fb64c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_dcfcf47731f4a063b31c5b4eb4fdf42df370c8b95c87733c65681f7fdff74a66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcfcf47731f4a063b31c5b4eb4fdf42df370c8b95c87733c65681f7fdff74a66->enter($__internal_dcfcf47731f4a063b31c5b4eb4fdf42df370c8b95c87733c65681f7fdff74a66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "<div class=\"row\">
\t<div class=\"col-lg-4\">
\t\t<div class=\"box box-primary\">
\t\t\t<div class=\"box-header\">
\t\t\t\t<img src=\"\"
\t\t\t\talt=\"image de la ligue\"
\t\t\t\tclass=\"profile-user-img img-responsive img-circle\"/>
\t\t\t\t<h3 class=\"profile-username text-center\">";
        // line 14
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
</div>
";
        
        $__internal_dcfcf47731f4a063b31c5b4eb4fdf42df370c8b95c87733c65681f7fdff74a66->leave($__internal_dcfcf47731f4a063b31c5b4eb4fdf42df370c8b95c87733c65681f7fdff74a66_prof);

        
        $__internal_7d726d5437794e2de553ab2ce4e829e99c7fa39af62e5a75ecacebce1fb64c78->leave($__internal_7d726d5437794e2de553ab2ce4e829e99c7fa39af62e5a75ecacebce1fb64c78_prof);

    }

    public function getTemplateName()
    {
        return "@DevLeagues/League/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 14,  87 => 7,  78 => 6,  60 => 4,  42 => 3,  11 => 1,);
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
</div>
{% endblock %}
", "@DevLeagues/League/show.html.twig", "/home/webmaster/www/public_html/DevLeagues/src/DevLeaguesBundle/Resources/views/League/show.html.twig");
    }
}
