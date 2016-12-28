<?php

/* DevLeaguesBundle:League:showReduced.html.twig */
class __TwigTemplate_23f94a7cd425a6de3193919206b51cb3614b956b8622e5fa46bc3b10854fd296 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'league' => array($this, 'block_league'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1eb91abd0b11c142ce24d7bc4f5caaa732b6c6f086482a5c493c42bf6560869 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1eb91abd0b11c142ce24d7bc4f5caaa732b6c6f086482a5c493c42bf6560869->enter($__internal_b1eb91abd0b11c142ce24d7bc4f5caaa732b6c6f086482a5c493c42bf6560869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:League:showReduced.html.twig"));

        // line 1
        $this->displayBlock('league', $context, $blocks);
        
        $__internal_b1eb91abd0b11c142ce24d7bc4f5caaa732b6c6f086482a5c493c42bf6560869->leave($__internal_b1eb91abd0b11c142ce24d7bc4f5caaa732b6c6f086482a5c493c42bf6560869_prof);

    }

    public function block_league($context, array $blocks = array())
    {
        $__internal_f848a66423b47000eddf82b738256f5039f576d9f296f1613b63f74035205741 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f848a66423b47000eddf82b738256f5039f576d9f296f1613b63f74035205741->enter($__internal_f848a66423b47000eddf82b738256f5039f576d9f296f1613b63f74035205741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "league"));

        // line 2
        echo "
<div class=\"row\">
\t<div class=\"col-md-12\">
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<a class=\"panel-title\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_league", array("leagueName" => $this->getAttribute((isset($context["league"]) ? $context["league"] : $this->getContext($context, "league")), "name", array()))), "html", null, true);
        echo "\">
\t\t\t\t\t<h2>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["league"]) ? $context["league"] : $this->getContext($context, "league")), "name", array()), "html", null, true);
        echo "</h2>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Users</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["league"]) ? $context["league"] : $this->getContext($context, "league")), "users", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 21
            echo "\t\t\t\t\t\t\t\t<td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
        
        $__internal_f848a66423b47000eddf82b738256f5039f576d9f296f1613b63f74035205741->leave($__internal_f848a66423b47000eddf82b738256f5039f576d9f296f1613b63f74035205741_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:League:showReduced.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  74 => 23,  65 => 21,  61 => 20,  46 => 8,  42 => 7,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block league %}

<div class=\"row\">
\t<div class=\"col-md-12\">
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<a class=\"panel-title\" href=\"{{ path('show_league', { 'leagueName': league.name })}}\">
\t\t\t\t\t<h2>{{ league.name }}</h2>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Users</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t{% for user in league.users %}
\t\t\t\t\t\t\t\t<td>{{ user.username }}</td>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

{% endblock %}
", "DevLeaguesBundle:League:showReduced.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/League/showReduced.html.twig");
    }
}
