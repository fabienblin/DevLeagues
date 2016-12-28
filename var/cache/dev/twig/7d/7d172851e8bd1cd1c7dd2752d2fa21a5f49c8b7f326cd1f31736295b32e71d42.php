<?php

/* DevLeaguesBundle:Leagues:index.html.twig */
class __TwigTemplate_8aefef35d98e36c17628583a32b9d5d64d38b51d278b1d79c6fd2573d486b209 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "DevLeaguesBundle:Leagues:index.html.twig", 1);
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
        $__internal_c6ce85520897be82ebb983f365f207fc03f7873cceaf58efd5323b9dda4b1cdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6ce85520897be82ebb983f365f207fc03f7873cceaf58efd5323b9dda4b1cdb->enter($__internal_c6ce85520897be82ebb983f365f207fc03f7873cceaf58efd5323b9dda4b1cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Leagues:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6ce85520897be82ebb983f365f207fc03f7873cceaf58efd5323b9dda4b1cdb->leave($__internal_c6ce85520897be82ebb983f365f207fc03f7873cceaf58efd5323b9dda4b1cdb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c01d3c3c6b034149e508841cc13ad889cdb754048d331547dff1806f6664071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c01d3c3c6b034149e508841cc13ad889cdb754048d331547dff1806f6664071->enter($__internal_7c01d3c3c6b034149e508841cc13ad889cdb754048d331547dff1806f6664071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h1>All the current leagues</h1>
<div class=\"btn-group\" role=\"group\" aria-label=\"...\">
\t<a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_league");
        echo "\">
\t\t<button type=\"button\" class=\"btn btn-default\">Create league</button>
\t</a>
</div>
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["leagues"]) ? $context["leagues"] : $this->getContext($context, "leagues")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["league"]) {
            // line 12
            echo "\t";
            $this->loadTemplate("DevLeaguesBundle:league:showReduced.html.twig", "DevLeaguesBundle:Leagues:index.html.twig", 12)->display($context);
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['league'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "<nav aria-label=\"Page navigation\">
\t<ul class=\"pagination\">
\t\t<li>
\t\t\t<a href=\"#\" aria-label=\"Previous\">
\t\t\t\t<span aria-hidden=\"true\">&laquo;</span>
\t\t\t</a>
\t\t</li>
\t\t<li class=\"active\"><a href=\"#\">1</a></li>
\t\t<li><a href=\"#\">2</a></li>
\t\t<li><a href=\"#\">3</a></li>
\t\t<li><a href=\"#\">4</a></li>
\t\t<li><a href=\"#\">5</a></li>
\t\t<li>
\t\t\t<a href=\"#\" aria-label=\"Next\">
\t\t\t\t<span aria-hidden=\"true\">&raquo;</span>
\t\t\t</a>
\t\t</li>
\t</ul>
</nav>
";
        
        $__internal_7c01d3c3c6b034149e508841cc13ad889cdb754048d331547dff1806f6664071->leave($__internal_7c01d3c3c6b034149e508841cc13ad889cdb754048d331547dff1806f6664071_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:Leagues:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 14,  69 => 12,  52 => 11,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
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

<h1>All the current leagues</h1>
<div class=\"btn-group\" role=\"group\" aria-label=\"...\">
\t<a href=\"{{ path('new_league') }}\">
\t\t<button type=\"button\" class=\"btn btn-default\">Create league</button>
\t</a>
</div>
{% for league in leagues %}
\t{% include 'DevLeaguesBundle:league:showReduced.html.twig' %}
{% endfor %}
<nav aria-label=\"Page navigation\">
\t<ul class=\"pagination\">
\t\t<li>
\t\t\t<a href=\"#\" aria-label=\"Previous\">
\t\t\t\t<span aria-hidden=\"true\">&laquo;</span>
\t\t\t</a>
\t\t</li>
\t\t<li class=\"active\"><a href=\"#\">1</a></li>
\t\t<li><a href=\"#\">2</a></li>
\t\t<li><a href=\"#\">3</a></li>
\t\t<li><a href=\"#\">4</a></li>
\t\t<li><a href=\"#\">5</a></li>
\t\t<li>
\t\t\t<a href=\"#\" aria-label=\"Next\">
\t\t\t\t<span aria-hidden=\"true\">&raquo;</span>
\t\t\t</a>
\t\t</li>
\t</ul>
</nav>
{% endblock %}
", "DevLeaguesBundle:Leagues:index.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/Leagues/index.html.twig");
    }
}
