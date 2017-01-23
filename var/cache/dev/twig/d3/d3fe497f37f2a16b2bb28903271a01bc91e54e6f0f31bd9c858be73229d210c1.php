<?php

/* DevLeaguesBundle:Challenge:show_reduced.html.twig */
class __TwigTemplate_23727402e33f15c5867cdcb277a36bff589e788274ca022d575ff32daf1441d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "DevLeaguesBundle:Challenge:show_reduced.html.twig", 1);
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
        $__internal_cb56a0187b38387a68cce27a47f97753eb1ce46e3c4d2bca6bce7ff1a9760707 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb56a0187b38387a68cce27a47f97753eb1ce46e3c4d2bca6bce7ff1a9760707->enter($__internal_cb56a0187b38387a68cce27a47f97753eb1ce46e3c4d2bca6bce7ff1a9760707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Challenge:show_reduced.html.twig"));

        $__internal_cedea2de4bfe549cf64e479e020c03b05b1c6d4817ec9f81d720c694be83c207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cedea2de4bfe549cf64e479e020c03b05b1c6d4817ec9f81d720c694be83c207->enter($__internal_cedea2de4bfe549cf64e479e020c03b05b1c6d4817ec9f81d720c694be83c207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Challenge:show_reduced.html.twig"));

        // line 3
        $context["dl_macro"] = $this->loadTemplate("DevLeaguesBundle::macros.html.twig", "DevLeaguesBundle:Challenge:show_reduced.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb56a0187b38387a68cce27a47f97753eb1ce46e3c4d2bca6bce7ff1a9760707->leave($__internal_cb56a0187b38387a68cce27a47f97753eb1ce46e3c4d2bca6bce7ff1a9760707_prof);

        
        $__internal_cedea2de4bfe549cf64e479e020c03b05b1c6d4817ec9f81d720c694be83c207->leave($__internal_cedea2de4bfe549cf64e479e020c03b05b1c6d4817ec9f81d720c694be83c207_prof);

    }

    // line 5
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_ed476982747c006c9f224509b667644e5daa20d547c5d659ea90ba887f38e7d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed476982747c006c9f224509b667644e5daa20d547c5d659ea90ba887f38e7d3->enter($__internal_ed476982747c006c9f224509b667644e5daa20d547c5d659ea90ba887f38e7d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_e221ec73eab05639044b7bda1db440b864ef9798f9738e219cb3389ebb5df4b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e221ec73eab05639044b7bda1db440b864ef9798f9738e219cb3389ebb5df4b5->enter($__internal_e221ec73eab05639044b7bda1db440b864ef9798f9738e219cb3389ebb5df4b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Challenges";
        
        $__internal_e221ec73eab05639044b7bda1db440b864ef9798f9738e219cb3389ebb5df4b5->leave($__internal_e221ec73eab05639044b7bda1db440b864ef9798f9738e219cb3389ebb5df4b5_prof);

        
        $__internal_ed476982747c006c9f224509b667644e5daa20d547c5d659ea90ba887f38e7d3->leave($__internal_ed476982747c006c9f224509b667644e5daa20d547c5d659ea90ba887f38e7d3_prof);

    }

    // line 6
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_5d28d062f750a6da141c50dcd7ad7785ba6dfea79b40d8f10f54ce45ad9e92c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d28d062f750a6da141c50dcd7ad7785ba6dfea79b40d8f10f54ce45ad9e92c5->enter($__internal_5d28d062f750a6da141c50dcd7ad7785ba6dfea79b40d8f10f54ce45ad9e92c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        $__internal_edbf335f975ad2e09629fca4ceb974a80e26c485691a72dbcc557b92c920e22f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edbf335f975ad2e09629fca4ceb974a80e26c485691a72dbcc557b92c920e22f->enter($__internal_edbf335f975ad2e09629fca4ceb974a80e26c485691a72dbcc557b92c920e22f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "whatever";
        
        $__internal_edbf335f975ad2e09629fca4ceb974a80e26c485691a72dbcc557b92c920e22f->leave($__internal_edbf335f975ad2e09629fca4ceb974a80e26c485691a72dbcc557b92c920e22f_prof);

        
        $__internal_5d28d062f750a6da141c50dcd7ad7785ba6dfea79b40d8f10f54ce45ad9e92c5->leave($__internal_5d28d062f750a6da141c50dcd7ad7785ba6dfea79b40d8f10f54ce45ad9e92c5_prof);

    }

    // line 8
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_d5f432820bf5e25a26afd0c7b0f2ba9f164be87a471fdb9dd1da9d74b1453cd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5f432820bf5e25a26afd0c7b0f2ba9f164be87a471fdb9dd1da9d74b1453cd8->enter($__internal_d5f432820bf5e25a26afd0c7b0f2ba9f164be87a471fdb9dd1da9d74b1453cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_ebab14df56d735db4b965ab357feab99cd3e64ab549f495deb515ae4a42760ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebab14df56d735db4b965ab357feab99cd3e64ab549f495deb515ae4a42760ce->enter($__internal_ebab14df56d735db4b965ab357feab99cd3e64ab549f495deb515ae4a42760ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 9
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 10
            echo "<div class=\"row\">
\t<div class=\"col-lg-12\">
\t\t<div class=\"box box-primary\">
\t\t\t<div class=\"box-body\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<h4>My Challenges</h4>
\t\t\t\t\t\t<a href=\"";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_challenge");
            echo "\" class=\"btn btn-primary\">Create New Challenge</a>
\t\t\t\t\t</div>
\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["my_challenges"] ?? $this->getContext($context, "my_challenges")));
            foreach ($context['_seq'] as $context["_key"] => $context["challenge"]) {
                // line 21
                echo "\t\t\t\t\t\t\t";
                echo $context["dl_macro"]->getmy_challenge_reduced($context["challenge"]);
                echo "
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['challenge'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        }
        // line 30
        echo "<div class=\"row\">
\t";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["challenges"] ?? $this->getContext($context, "challenges")));
        foreach ($context['_seq'] as $context["_key"] => $context["challenge"]) {
            // line 32
            echo "\t\t";
            echo $context["dl_macro"]->getchallenge_reduced($context["challenge"]);
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['challenge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</div>
";
        
        $__internal_ebab14df56d735db4b965ab357feab99cd3e64ab549f495deb515ae4a42760ce->leave($__internal_ebab14df56d735db4b965ab357feab99cd3e64ab549f495deb515ae4a42760ce_prof);

        
        $__internal_d5f432820bf5e25a26afd0c7b0f2ba9f164be87a471fdb9dd1da9d74b1453cd8->leave($__internal_d5f432820bf5e25a26afd0c7b0f2ba9f164be87a471fdb9dd1da9d74b1453cd8_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:Challenge:show_reduced.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 34,  136 => 32,  132 => 31,  129 => 30,  120 => 23,  111 => 21,  107 => 20,  101 => 17,  92 => 10,  90 => 9,  81 => 8,  63 => 6,  45 => 5,  35 => 1,  33 => 3,  11 => 1,);
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

{% import \"DevLeaguesBundle::macros.html.twig\" as dl_macro %}

{% block page_title %}Challenges{% endblock %}
{% block page_subtitle %}whatever{% endblock %}

{% block page_content %}
{% if is_granted('ROLE_USER') %}
<div class=\"row\">
\t<div class=\"col-lg-12\">
\t\t<div class=\"box box-primary\">
\t\t\t<div class=\"box-body\">
\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t<h4>My Challenges</h4>
\t\t\t\t\t\t<a href=\"{{ path('new_challenge') }}\" class=\"btn btn-primary\">Create New Challenge</a>
\t\t\t\t\t</div>
\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t{% for challenge in my_challenges %}
\t\t\t\t\t\t\t{{ dl_macro.my_challenge_reduced(challenge) }}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
{% endif %}
<div class=\"row\">
\t{% for challenge in challenges %}
\t\t{{ dl_macro.challenge_reduced(challenge) }}
\t{% endfor %}
</div>
{% endblock %}
", "DevLeaguesBundle:Challenge:show_reduced.html.twig", "/home/webmaster/www/public_html/DevLeagues/var/cache/dev/../../../src/DevLeaguesBundle/Resources/views/Challenge/show_reduced.html.twig");
    }
}
