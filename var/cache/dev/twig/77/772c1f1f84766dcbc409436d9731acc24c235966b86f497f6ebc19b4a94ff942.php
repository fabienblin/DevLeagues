<?php

/* DevLeaguesBundle:Event:show.html.twig */
class __TwigTemplate_e2b1537ce325301dea66a406678242a35aed76a37d7bb0a09d78156086fac0ae extends Twig_Template
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
        $__internal_e708f64584e1879a9b611431dbd5ef9e63b8ea65207953d6158c4f594b3b0e29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e708f64584e1879a9b611431dbd5ef9e63b8ea65207953d6158c4f594b3b0e29->enter($__internal_e708f64584e1879a9b611431dbd5ef9e63b8ea65207953d6158c4f594b3b0e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Event:show.html.twig"));

        // line 1
        $this->displayBlock('event', $context, $blocks);
        
        $__internal_e708f64584e1879a9b611431dbd5ef9e63b8ea65207953d6158c4f594b3b0e29->leave($__internal_e708f64584e1879a9b611431dbd5ef9e63b8ea65207953d6158c4f594b3b0e29_prof);

    }

    public function block_event($context, array $blocks = array())
    {
        $__internal_3184cef200768c67b71c6a3b8c02f9951ca5be328c807496e322d616de611f1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3184cef200768c67b71c6a3b8c02f9951ca5be328c807496e322d616de611f1b->enter($__internal_3184cef200768c67b71c6a3b8c02f9951ca5be328c807496e322d616de611f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "event"));

        // line 2
        echo "
<div class=\"row\">
\t<div class=\"col-md-12\">
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<h3>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "name", array()), "html", null, true);
        echo "</h3>
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
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "users", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 22
            echo "\t\t\t\t\t\t\t\t<td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "rewards", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["reward"]) {
            // line 25
            echo "\t\t\t\t\t\t\t\t<td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reward"], "value", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reward"], "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reward'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
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
        
        $__internal_3184cef200768c67b71c6a3b8c02f9951ca5be328c807496e322d616de611f1b->leave($__internal_3184cef200768c67b71c6a3b8c02f9951ca5be328c807496e322d616de611f1b_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:Event:show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  88 => 27,  77 => 25,  72 => 24,  63 => 22,  59 => 21,  42 => 7,  35 => 2,  23 => 1,);
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
\t\t\t\t<h3>{{ event.name }}</h3>
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
\t\t\t\t\t\t\t\t<td>{{ user.username }}</td>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% for reward in event.rewards %}
\t\t\t\t\t\t\t\t<td>{{ reward.value }} {{ reward.name }}</td>
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
", "DevLeaguesBundle:Event:show.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/Event/show.html.twig");
    }
}
