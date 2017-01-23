<?php

/* DevLeaguesBundle:Home:index.html.twig */
class __TwigTemplate_f7be9f38b0ffc001ee56a94a4d1ba963846d9f931552e0397ff15c94d65a0948 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::default.html.twig", "DevLeaguesBundle:Home:index.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'box_header' => array($this, 'block_box_header'),
            'box_body' => array($this, 'block_box_body'),
            'box_footer' => array($this, 'block_box_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevLeaguesBundle::default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        echo "Hello World !";
    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        echo "Welcome to the familly";
    }

    // line 6
    public function block_box_header($context, array $blocks = array())
    {
        // line 7
        echo "\t<h3>
\t\tWhat is DevLeagues ?
\t</h3>
";
    }

    // line 12
    public function block_box_body($context, array $blocks = array())
    {
        // line 13
        echo "<h4>General</h4>
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
<h4>Rewards</h4>
<p>
\tThere is a vairety of posssible rewards such as bitcoins, money, notoriety,
\texperience or gold.
</p>
<p>
\tRewards are granted by participating to events created by you or others.
\tCompanys may have big challenges for you with huge rewards, even if you
\tdon't earn a medal.
</p>
<h4>Leagues</h4>
<p>
\tAfter a certain notoriety, you may create your very own league and grow
\tyour social circle. This allows new privileges and gives you access to a
\thole new kind of involvement.
</p>
<p>
\tJoin a league to easely find masters of whatever tech you are learning.
\tGet involved as much as you wish and earn extra group rewards.
</p>
<h4>Friendzone</h4>
<p>
\tDepending on your experience over certain technologies, you may find your
\tmaster or become the master of someone. This involvment is of course
\trewarded every time you ask for help or yourself help someone.
</p>
<h4>Companies</h4>
<p>
\tCompanies may signin to find their futur devs or create events to do the
\tdevelopment they need.
</p>
";
    }

    // line 71
    public function block_box_footer($context, array $blocks = array())
    {
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
        return array (  117 => 71,  57 => 13,  54 => 12,  47 => 7,  44 => 6,  38 => 4,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "DevLeaguesBundle:Home:index.html.twig", "/home/webmaster/www/public_html/DevLeagues/src/DevLeaguesBundle/Resources/views/Home/index.html.twig");
    }
}
