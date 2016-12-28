<?php

/* DevLeaguesBundle:Event:index.html.twig */
class __TwigTemplate_14c368b4bf0829dca16587b316f22dee4845c968a231c9350a2d2fbd68a5fcb4 extends Twig_Template
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
        $__internal_cc1ef2019675b1d2b805b12d679c2802a49d0ed54d8b54bbe9e1d2600539994a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc1ef2019675b1d2b805b12d679c2802a49d0ed54d8b54bbe9e1d2600539994a->enter($__internal_cc1ef2019675b1d2b805b12d679c2802a49d0ed54d8b54bbe9e1d2600539994a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Event:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc1ef2019675b1d2b805b12d679c2802a49d0ed54d8b54bbe9e1d2600539994a->leave($__internal_cc1ef2019675b1d2b805b12d679c2802a49d0ed54d8b54bbe9e1d2600539994a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_41f1fea129e5f15d103ece6db010ee80c063fe9ae717e2ba3e2d1663ec7f8165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41f1fea129e5f15d103ece6db010ee80c063fe9ae717e2ba3e2d1663ec7f8165->enter($__internal_41f1fea129e5f15d103ece6db010ee80c063fe9ae717e2ba3e2d1663ec7f8165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h1>All the current events</h1>
";
        // line 6
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
            // line 7
            echo "\t";
            $this->loadTemplate("DevLeaguesBundle:Event:show.html.twig", "DevLeaguesBundle:Event:index.html.twig", 7)->display($context);
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
        // line 9
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
        
        $__internal_41f1fea129e5f15d103ece6db010ee80c063fe9ae717e2ba3e2d1663ec7f8165->leave($__internal_41f1fea129e5f15d103ece6db010ee80c063fe9ae717e2ba3e2d1663ec7f8165_prof);

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
        return array (  76 => 9,  61 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
{% for event in events %}
\t{% include 'DevLeaguesBundle:Event:show.html.twig' %}
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
