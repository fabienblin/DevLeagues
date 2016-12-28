<?php

/* DevLeaguesBundle:Event:show.html.twig */
class __TwigTemplate_e2b1537ce325301dea66a406678242a35aed76a37d7bb0a09d78156086fac0ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "DevLeaguesBundle:Event:show.html.twig", 1);
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
        $__internal_5a8c9ad1391a03f975744470263fa50858d6c67b2d410839502237ed9bb1e524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a8c9ad1391a03f975744470263fa50858d6c67b2d410839502237ed9bb1e524->enter($__internal_5a8c9ad1391a03f975744470263fa50858d6c67b2d410839502237ed9bb1e524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Event:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a8c9ad1391a03f975744470263fa50858d6c67b2d410839502237ed9bb1e524->leave($__internal_5a8c9ad1391a03f975744470263fa50858d6c67b2d410839502237ed9bb1e524_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0785f05b91b7bf86be4a33b80af87f3ae049c8b3520735a6f6fd2e0f09e24832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0785f05b91b7bf86be4a33b80af87f3ae049c8b3520735a6f6fd2e0f09e24832->enter($__internal_0785f05b91b7bf86be4a33b80af87f3ae049c8b3520735a6f6fd2e0f09e24832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"row\">
\t<div class=\"col-md-12\">
\t\t<h1>Detailed Event</h1>
\t\t<h2>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "name", array()), "html", null, true);
        echo "</h2>
\t\t<div class=\"progress\"><div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%;\"></div></div>
\t\t<table class=\"table\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Users</th>
\t\t\t\t\t<th>Rewards</th>
\t\t\t\t\t<th>End</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "users", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 21
            echo "\t\t\t\t\t<td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "rewards", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["reward"]) {
            // line 24
            echo "\t\t\t\t\t<td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reward"], "value", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reward"], "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reward'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t\t\t\t\t<td>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "endTimestamp", array()), "d/m/Y g:i a"), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t</div>
</div>

";
        
        $__internal_0785f05b91b7bf86be4a33b80af87f3ae049c8b3520735a6f6fd2e0f09e24832->leave($__internal_0785f05b91b7bf86be4a33b80af87f3ae049c8b3520735a6f6fd2e0f09e24832_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:Event:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 26,  79 => 24,  74 => 23,  65 => 21,  61 => 20,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
\t\t<h1>Detailed Event</h1>
\t\t<h2>{{ event.name }}</h2>
\t\t<div class=\"progress\"><div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 60%;\"></div></div>
\t\t<table class=\"table\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Users</th>
\t\t\t\t\t<th>Rewards</th>
\t\t\t\t\t<th>End</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t{% for user in event.users %}
\t\t\t\t\t<td>{{ user.username }}</td>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t{% for reward in event.rewards %}
\t\t\t\t\t<td>{{ reward.value }} {{ reward.name }}</td>
\t\t\t\t\t{% endfor %}
\t\t\t\t\t<td>{{ event.endTimestamp | date(\"d/m/Y g:i a\") }}</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t</div>
</div>

{% endblock %}
", "DevLeaguesBundle:Event:show.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/Event/show.html.twig");
    }
}
