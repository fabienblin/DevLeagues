<?php

/* DevLeaguesBundle:Home:index.html.twig */
class __TwigTemplate_86cd34c4c0aa7afca667b14f5c5821d2294618979abcdd4828081f880c1c8e25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "DevLeaguesBundle:Home:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevLeaguesBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_055def4158f093921bab1d3beacb9c3738a51389a4fb75ff0b03a2f96e71d1eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_055def4158f093921bab1d3beacb9c3738a51389a4fb75ff0b03a2f96e71d1eb->enter($__internal_055def4158f093921bab1d3beacb9c3738a51389a4fb75ff0b03a2f96e71d1eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Home:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_055def4158f093921bab1d3beacb9c3738a51389a4fb75ff0b03a2f96e71d1eb->leave($__internal_055def4158f093921bab1d3beacb9c3738a51389a4fb75ff0b03a2f96e71d1eb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_736fa1301161c5b27b70c21108922e8d6e742a2cc99f2a8455d3f2b1a15b5607 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_736fa1301161c5b27b70c21108922e8d6e742a2cc99f2a8455d3f2b1a15b5607->enter($__internal_736fa1301161c5b27b70c21108922e8d6e742a2cc99f2a8455d3f2b1a15b5607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DevLeaguesBundle:Home:index";
        
        $__internal_736fa1301161c5b27b70c21108922e8d6e742a2cc99f2a8455d3f2b1a15b5607->leave($__internal_736fa1301161c5b27b70c21108922e8d6e742a2cc99f2a8455d3f2b1a15b5607_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d70774abbb444d5982a5dbca3f9bbd23132b3b253fecf2f32a7ac360daa22dee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d70774abbb444d5982a5dbca3f9bbd23132b3b253fecf2f32a7ac360daa22dee->enter($__internal_d70774abbb444d5982a5dbca3f9bbd23132b3b253fecf2f32a7ac360daa22dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Hello World !</h1>
<p>
\tThis website is a social media for developers who wish to show their
\tknowledge of IT. Futhermore, developers may create events to challenge their
\tfriends. This will give rewards to all the involved developers, the
\tchallengers as much as the organizers.
</p>
<p>
\tYou may also create relationships to others devs to show the community your
\tmentors and pupils as you progress in this huge familly of experts.
</p>
<p>
\tWhy do this ?
\tWell just because this could help you and you friends to show your IRL
\texperiences of technologies over time, use your profile as a resume
\tor just to get famous in the community.
</p>
<p>
\tCreate events and challenge other devs to levelup, Create your league and
\tchallenge other leagues. Get notorious and learn from senior developers on
\tany tech.
</p>
<p>
\tYour destiny awaits !
</p>
<h2>Rewards</h2>
<p>
\tThere is a vairety of posssible rewards such as bitcoins, money, notoriety,
\texperience or gold.
</p>
<p>
\tRewards are granted by participating to events created by you or others.
\tCompanys may have big challenges for you with huge rewards, even if you
\tdon't earn a medal.
</p>
<h2>Leagues</h2>
<p>
\tAfter a certain notoriety, you may create your very own league and grow
\tyour social circle. This allows new privileges and gives you access to a
\thole new kind of involvement.
</p>
<p>
\tJoin a league to easely find masters of whatever tech you are learning.
\tGet involved as much as you wish and earn extra group rewards.
</p>
<h2>Friendzone</h2>
<p>
\tDepending on your experience over certain technologies, you may find your
\tmaster or become the master of someone. This involvment is of course
\trewarded every time you ask for help or yourself help someone.
</p>
<h2>Companies</h2>
<p>
\tCompanies may signin to find their futur devs or create events to do the
\tdevelopment they need.
</p>
";
        
        $__internal_d70774abbb444d5982a5dbca3f9bbd23132b3b253fecf2f32a7ac360daa22dee->leave($__internal_d70774abbb444d5982a5dbca3f9bbd23132b3b253fecf2f32a7ac360daa22dee_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}DevLeaguesBundle:Home:index{% endblock %}

{% block body %}
<h1>Hello World !</h1>
<p>
\tThis website is a social media for developers who wish to show their
\tknowledge of IT. Futhermore, developers may create events to challenge their
\tfriends. This will give rewards to all the involved developers, the
\tchallengers as much as the organizers.
</p>
<p>
\tYou may also create relationships to others devs to show the community your
\tmentors and pupils as you progress in this huge familly of experts.
</p>
<p>
\tWhy do this ?
\tWell just because this could help you and you friends to show your IRL
\texperiences of technologies over time, use your profile as a resume
\tor just to get famous in the community.
</p>
<p>
\tCreate events and challenge other devs to levelup, Create your league and
\tchallenge other leagues. Get notorious and learn from senior developers on
\tany tech.
</p>
<p>
\tYour destiny awaits !
</p>
<h2>Rewards</h2>
<p>
\tThere is a vairety of posssible rewards such as bitcoins, money, notoriety,
\texperience or gold.
</p>
<p>
\tRewards are granted by participating to events created by you or others.
\tCompanys may have big challenges for you with huge rewards, even if you
\tdon't earn a medal.
</p>
<h2>Leagues</h2>
<p>
\tAfter a certain notoriety, you may create your very own league and grow
\tyour social circle. This allows new privileges and gives you access to a
\thole new kind of involvement.
</p>
<p>
\tJoin a league to easely find masters of whatever tech you are learning.
\tGet involved as much as you wish and earn extra group rewards.
</p>
<h2>Friendzone</h2>
<p>
\tDepending on your experience over certain technologies, you may find your
\tmaster or become the master of someone. This involvment is of course
\trewarded every time you ask for help or yourself help someone.
</p>
<h2>Companies</h2>
<p>
\tCompanies may signin to find their futur devs or create events to do the
\tdevelopment they need.
</p>
{% endblock %}
", "DevLeaguesBundle:Home:index.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/Home/index.html.twig");
    }
}
