<?php

/* DevLeaguesBundle:Event:index.html.twig */
class __TwigTemplate_2f407b7fa0157112d825064ed4c7b9025606f22cb1d18249875134cd1480f367 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "DevLeaguesBundle:Event:index.html.twig", 1);
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
        $__internal_b24b50a957bfe848507e82ef7d910d1704651bc36cd280c7bf33ef909f0e2e9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b24b50a957bfe848507e82ef7d910d1704651bc36cd280c7bf33ef909f0e2e9c->enter($__internal_b24b50a957bfe848507e82ef7d910d1704651bc36cd280c7bf33ef909f0e2e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Event:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b24b50a957bfe848507e82ef7d910d1704651bc36cd280c7bf33ef909f0e2e9c->leave($__internal_b24b50a957bfe848507e82ef7d910d1704651bc36cd280c7bf33ef909f0e2e9c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_364695224d365f8ec7bdc87258a6490d608541c9600baac2b617729a5f343a1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_364695224d365f8ec7bdc87258a6490d608541c9600baac2b617729a5f343a1a->enter($__internal_364695224d365f8ec7bdc87258a6490d608541c9600baac2b617729a5f343a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h1>All the current events</h1>
<div class=\"btn-group\" role=\"group\" aria-label=\"...\">
\t<a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_event");
        echo "\">
\t\t<button type=\"button\" class=\"btn btn-default\">Create Event</button>
\t</a>
</div>
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 12
            echo "\t";
            $this->loadTemplate("DevLeaguesBundle:Event:showReduced.html.twig", "DevLeaguesBundle:Event:index.html.twig", 12)->display($context);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
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
        
        $__internal_364695224d365f8ec7bdc87258a6490d608541c9600baac2b617729a5f343a1a->leave($__internal_364695224d365f8ec7bdc87258a6490d608541c9600baac2b617729a5f343a1a_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:Event:index.html.twig";
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

<h1>All the current events</h1>
<div class=\"btn-group\" role=\"group\" aria-label=\"...\">
\t<a href=\"{{ path('new_event') }}\">
\t\t<button type=\"button\" class=\"btn btn-default\">Create Event</button>
\t</a>
</div>
{% for event in events %}
\t{% include 'DevLeaguesBundle:Event:showReduced.html.twig' %}
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
", "DevLeaguesBundle:Event:index.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/Event/index.html.twig");
    }
}