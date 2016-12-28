<?php

/* DevLeaguesBundle:Event:showReduced.html.twig */
class __TwigTemplate_1e7eb77d023241b4dccfa4a37e054f439efee04e505e3a0975a2bc4104ee9617 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'event' => array($this, 'block_event'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e0f496127be2584f7f0dc00e9eebfb96e3512331c332b6d0d48c762237901176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0f496127be2584f7f0dc00e9eebfb96e3512331c332b6d0d48c762237901176->enter($__internal_e0f496127be2584f7f0dc00e9eebfb96e3512331c332b6d0d48c762237901176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Event:showReduced.html.twig"));

        // line 1
        $this->displayBlock('event', $context, $blocks);
        
        $__internal_e0f496127be2584f7f0dc00e9eebfb96e3512331c332b6d0d48c762237901176->leave($__internal_e0f496127be2584f7f0dc00e9eebfb96e3512331c332b6d0d48c762237901176_prof);

    }

    public function block_event($context, array $blocks = array())
    {
        $__internal_8a0e6b9795c00ba260d15ccd3424f83f3a8512589db84ec08a1c13c18832d034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a0e6b9795c00ba260d15ccd3424f83f3a8512589db84ec08a1c13c18832d034->enter($__internal_8a0e6b9795c00ba260d15ccd3424f83f3a8512589db84ec08a1c13c18832d034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "event"));

        // line 2
        echo "
<div class=\"row\">
\t<div class=\"col-md-12\">
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<a class=\"panel-title\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_event", array("eventName" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "name", array()))), "html", null, true);
        echo "\">
\t\t\t\t\t<h2>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "name", array()), "html", null, true);
        echo "</h2>
\t\t\t\t</a>
\t\t\t\t<div class=\"progress\"><div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%;\"></div></div>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Users</th>
\t\t\t\t\t\t\t<th>Rewards</th>
\t\t\t\t\t\t\t<th>End</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "users", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 24
            echo "\t\t\t\t\t\t\t<td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "rewards", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["reward"]) {
            // line 27
            echo "\t\t\t\t\t\t\t<td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reward"], "value", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reward"], "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reward'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t\t\t\t\t\t\t<td>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "endTimestamp", array()), "d/m/Y g:i a"), "html", null, true);
        echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
        
        $__internal_8a0e6b9795c00ba260d15ccd3424f83f3a8512589db84ec08a1c13c18832d034->leave($__internal_8a0e6b9795c00ba260d15ccd3424f83f3a8512589db84ec08a1c13c18832d034_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:Event:showReduced.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  93 => 29,  82 => 27,  77 => 26,  68 => 24,  64 => 23,  46 => 8,  42 => 7,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block event %}

<div class=\"row\">
\t<div class=\"col-md-12\">
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<a class=\"panel-title\" href=\"{{ path('show_event', { 'eventName': event.name })}}\">
\t\t\t\t\t<h2>{{ event.name }}</h2>
\t\t\t\t</a>
\t\t\t\t<div class=\"progress\"><div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%;\"></div></div>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\t<table class=\"table\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>Users</th>
\t\t\t\t\t\t\t<th>Rewards</th>
\t\t\t\t\t\t\t<th>End</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t{% for user in event.users %}
\t\t\t\t\t\t\t<td>{{ user.username }}</td>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% for reward in event.rewards %}
\t\t\t\t\t\t\t<td>{{ reward.value }} {{ reward.name }}</td>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t<td>{{ event.endTimestamp | date(\"d/m/Y g:i a\") }}</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

{% endblock %}
", "DevLeaguesBundle:Event:showReduced.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/Event/showReduced.html.twig");
    }
}
