<?php

/* DevLeaguesBundle:Profile:friends.html.twig */
class __TwigTemplate_962a8dd4fe4f15e09f982af3b6dcd6da20c0b4b8c43c1da132371246b8bb1526 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "DevLeaguesBundle:Profile:friends.html.twig", 1);
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
        $__internal_4a7cd2ac439374418ea546d2dd18b45a8300090d067fe48a16568525a5757f8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a7cd2ac439374418ea546d2dd18b45a8300090d067fe48a16568525a5757f8c->enter($__internal_4a7cd2ac439374418ea546d2dd18b45a8300090d067fe48a16568525a5757f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Profile:friends.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a7cd2ac439374418ea546d2dd18b45a8300090d067fe48a16568525a5757f8c->leave($__internal_4a7cd2ac439374418ea546d2dd18b45a8300090d067fe48a16568525a5757f8c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9cce4c40dbb6a54a8d26fd9c08fdbfac2796122a5c60a63a83769178a2c551e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cce4c40dbb6a54a8d26fd9c08fdbfac2796122a5c60a63a83769178a2c551e7->enter($__internal_9cce4c40dbb6a54a8d26fd9c08fdbfac2796122a5c60a63a83769178a2c551e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h1>Your friends</h1>
<div class=\"btn-group\" role=\"group\" aria-label=\"...\">
\t<a href=\"#\">
\t\t<button type=\"button\" class=\"btn btn-default\">Add friend</button>
\t</a>
</div>
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["friends"]) ? $context["friends"] : $this->getContext($context, "friends")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["friend"]) {
            // line 12
            echo "\t";
            $this->loadTemplate("DevLeaguesBundle:Profile:showReduced.html.twig", "DevLeaguesBundle:Profile:friends.html.twig", 12)->display($context);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friend'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
";
        
        $__internal_9cce4c40dbb6a54a8d26fd9c08fdbfac2796122a5c60a63a83769178a2c551e7->leave($__internal_9cce4c40dbb6a54a8d26fd9c08fdbfac2796122a5c60a63a83769178a2c551e7_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:Profile:friends.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 14,  66 => 12,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
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

<h1>Your friends</h1>
<div class=\"btn-group\" role=\"group\" aria-label=\"...\">
\t<a href=\"#\">
\t\t<button type=\"button\" class=\"btn btn-default\">Add friend</button>
\t</a>
</div>
{% for friend in friends %}
\t{% include 'DevLeaguesBundle:Profile:showReduced.html.twig' %}
{% endfor %}

{% endblock %}
", "DevLeaguesBundle:Profile:friends.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/Profile/friends.html.twig");
    }
}
