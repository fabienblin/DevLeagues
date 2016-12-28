<?php

/* DevLeaguesBundle:League:show.html.twig */
class __TwigTemplate_fff771398b29a6c9e110c34deca64b27bd376e4a4dc4e3fbffae53ea0139fe4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "DevLeaguesBundle:League:show.html.twig", 1);
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
        $__internal_aa18a09cbe203224337372276a6971de67b8d9118a87e3f0d7bf5b7fac3253a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa18a09cbe203224337372276a6971de67b8d9118a87e3f0d7bf5b7fac3253a7->enter($__internal_aa18a09cbe203224337372276a6971de67b8d9118a87e3f0d7bf5b7fac3253a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:League:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa18a09cbe203224337372276a6971de67b8d9118a87e3f0d7bf5b7fac3253a7->leave($__internal_aa18a09cbe203224337372276a6971de67b8d9118a87e3f0d7bf5b7fac3253a7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed2a98c05f6e5dc3a8f610def40e5a19b10e99e2e6bf78194cdcb71c279232b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed2a98c05f6e5dc3a8f610def40e5a19b10e99e2e6bf78194cdcb71c279232b6->enter($__internal_ed2a98c05f6e5dc3a8f610def40e5a19b10e99e2e6bf78194cdcb71c279232b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"row\">
\t<div class=\"col-md-12\">
\t\t<h1>Detailed league</h1>
\t\t<h2>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["league"]) ? $context["league"] : $this->getContext($context, "league")), "name", array()), "html", null, true);
        echo "</h2>
\t\t<table class=\"table\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Users</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["league"]) ? $context["league"] : $this->getContext($context, "league")), "users", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 18
            echo "\t\t\t\t\t<td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t</div>
</div>

";
        
        $__internal_ed2a98c05f6e5dc3a8f610def40e5a19b10e99e2e6bf78194cdcb71c279232b6->leave($__internal_ed2a98c05f6e5dc3a8f610def40e5a19b10e99e2e6bf78194cdcb71c279232b6_prof);

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
        return array (  71 => 20,  62 => 18,  58 => 17,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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

<div class=\"row\">
\t<div class=\"col-md-12\">
\t\t<h1>Detailed league</h1>
\t\t<h2>{{ league.name }}</h2>
\t\t<table class=\"table\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Users</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t{% for user in league.users %}
\t\t\t\t\t<td>{{ user.username }}</td>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t</div>
</div>

{% endblock %}
", "DevLeaguesBundle:League:show.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/League/show.html.twig");
    }
}
