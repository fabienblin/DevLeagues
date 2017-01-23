<?php

/* @DevLeagues/Home/index.html.twig */
class __TwigTemplate_5ead46f62429ac6bd293fd4a64429ada47ebf497c627452beab986815409c7b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::default.html.twig", "@DevLeagues/Home/index.html.twig", 1);
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
        $__internal_c449bbc07b0545ff95b0022f424df42920e3705a4cab07f7d39cc0b3c5733043 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c449bbc07b0545ff95b0022f424df42920e3705a4cab07f7d39cc0b3c5733043->enter($__internal_c449bbc07b0545ff95b0022f424df42920e3705a4cab07f7d39cc0b3c5733043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Home/index.html.twig"));

        $__internal_7d53d4e1dbbb6366f5aa16193250f7dabc9cf000c3bfedc96f61821925714a71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d53d4e1dbbb6366f5aa16193250f7dabc9cf000c3bfedc96f61821925714a71->enter($__internal_7d53d4e1dbbb6366f5aa16193250f7dabc9cf000c3bfedc96f61821925714a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Home/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c449bbc07b0545ff95b0022f424df42920e3705a4cab07f7d39cc0b3c5733043->leave($__internal_c449bbc07b0545ff95b0022f424df42920e3705a4cab07f7d39cc0b3c5733043_prof);

        
        $__internal_7d53d4e1dbbb6366f5aa16193250f7dabc9cf000c3bfedc96f61821925714a71->leave($__internal_7d53d4e1dbbb6366f5aa16193250f7dabc9cf000c3bfedc96f61821925714a71_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_fee9ab5a694be6c9820019ff996df11fb4136802b4be4fbff4a9f4ff3d89ade7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fee9ab5a694be6c9820019ff996df11fb4136802b4be4fbff4a9f4ff3d89ade7->enter($__internal_fee9ab5a694be6c9820019ff996df11fb4136802b4be4fbff4a9f4ff3d89ade7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_53b83d66d7bc8480e90ef9d7697ce11cc2a4e30db791c1ca9c9663db36eb2842 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53b83d66d7bc8480e90ef9d7697ce11cc2a4e30db791c1ca9c9663db36eb2842->enter($__internal_53b83d66d7bc8480e90ef9d7697ce11cc2a4e30db791c1ca9c9663db36eb2842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Hello World !";
        
        $__internal_53b83d66d7bc8480e90ef9d7697ce11cc2a4e30db791c1ca9c9663db36eb2842->leave($__internal_53b83d66d7bc8480e90ef9d7697ce11cc2a4e30db791c1ca9c9663db36eb2842_prof);

        
        $__internal_fee9ab5a694be6c9820019ff996df11fb4136802b4be4fbff4a9f4ff3d89ade7->leave($__internal_fee9ab5a694be6c9820019ff996df11fb4136802b4be4fbff4a9f4ff3d89ade7_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_633e2a1962e1c3cb093ea17ccff2f247628c86a7669a5e63adb36e83280c5b0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_633e2a1962e1c3cb093ea17ccff2f247628c86a7669a5e63adb36e83280c5b0f->enter($__internal_633e2a1962e1c3cb093ea17ccff2f247628c86a7669a5e63adb36e83280c5b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        $__internal_b0d852e20dcf65d5394a8475d8134653e1df9b47ff3258b05a6b09e6a19c615d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0d852e20dcf65d5394a8475d8134653e1df9b47ff3258b05a6b09e6a19c615d->enter($__internal_b0d852e20dcf65d5394a8475d8134653e1df9b47ff3258b05a6b09e6a19c615d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Welcome to the familly";
        
        $__internal_b0d852e20dcf65d5394a8475d8134653e1df9b47ff3258b05a6b09e6a19c615d->leave($__internal_b0d852e20dcf65d5394a8475d8134653e1df9b47ff3258b05a6b09e6a19c615d_prof);

        
        $__internal_633e2a1962e1c3cb093ea17ccff2f247628c86a7669a5e63adb36e83280c5b0f->leave($__internal_633e2a1962e1c3cb093ea17ccff2f247628c86a7669a5e63adb36e83280c5b0f_prof);

    }

    // line 6
    public function block_box_header($context, array $blocks = array())
    {
        $__internal_cfb6850ccd14fba41742d1002eb35ad962dc624c35beec81db7c764e36f223f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfb6850ccd14fba41742d1002eb35ad962dc624c35beec81db7c764e36f223f3->enter($__internal_cfb6850ccd14fba41742d1002eb35ad962dc624c35beec81db7c764e36f223f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_header"));

        $__internal_a48e7cf4e60a683168fa82bad59dc8e0ed4943a90040bb7912e98c9f913c5178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a48e7cf4e60a683168fa82bad59dc8e0ed4943a90040bb7912e98c9f913c5178->enter($__internal_a48e7cf4e60a683168fa82bad59dc8e0ed4943a90040bb7912e98c9f913c5178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_header"));

        // line 7
        echo "\t<h3>
\t\tWhat is DevLeagues ?
\t</h3>
";
        
        $__internal_a48e7cf4e60a683168fa82bad59dc8e0ed4943a90040bb7912e98c9f913c5178->leave($__internal_a48e7cf4e60a683168fa82bad59dc8e0ed4943a90040bb7912e98c9f913c5178_prof);

        
        $__internal_cfb6850ccd14fba41742d1002eb35ad962dc624c35beec81db7c764e36f223f3->leave($__internal_cfb6850ccd14fba41742d1002eb35ad962dc624c35beec81db7c764e36f223f3_prof);

    }

    // line 12
    public function block_box_body($context, array $blocks = array())
    {
        $__internal_f088f7e97817d06d8db0660f027a085640dc237c88aea85d709c989ce43866fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f088f7e97817d06d8db0660f027a085640dc237c88aea85d709c989ce43866fd->enter($__internal_f088f7e97817d06d8db0660f027a085640dc237c88aea85d709c989ce43866fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_body"));

        $__internal_4ed11aeb665bed4ed0aa4f29e346cf3d22bad24292b9820a97d8ac0df816c0a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ed11aeb665bed4ed0aa4f29e346cf3d22bad24292b9820a97d8ac0df816c0a1->enter($__internal_4ed11aeb665bed4ed0aa4f29e346cf3d22bad24292b9820a97d8ac0df816c0a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_body"));

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
        
        $__internal_4ed11aeb665bed4ed0aa4f29e346cf3d22bad24292b9820a97d8ac0df816c0a1->leave($__internal_4ed11aeb665bed4ed0aa4f29e346cf3d22bad24292b9820a97d8ac0df816c0a1_prof);

        
        $__internal_f088f7e97817d06d8db0660f027a085640dc237c88aea85d709c989ce43866fd->leave($__internal_f088f7e97817d06d8db0660f027a085640dc237c88aea85d709c989ce43866fd_prof);

    }

    // line 71
    public function block_box_footer($context, array $blocks = array())
    {
        $__internal_59c26f10fd5d4818aada0ee5c33f167d79ef9b9282af9f844484e48a5102326e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59c26f10fd5d4818aada0ee5c33f167d79ef9b9282af9f844484e48a5102326e->enter($__internal_59c26f10fd5d4818aada0ee5c33f167d79ef9b9282af9f844484e48a5102326e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_footer"));

        $__internal_980c4ff8f48f88897b275bac7aaac0381a95aff1fb59f415694d71c10746272a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_980c4ff8f48f88897b275bac7aaac0381a95aff1fb59f415694d71c10746272a->enter($__internal_980c4ff8f48f88897b275bac7aaac0381a95aff1fb59f415694d71c10746272a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "box_footer"));

        
        $__internal_980c4ff8f48f88897b275bac7aaac0381a95aff1fb59f415694d71c10746272a->leave($__internal_980c4ff8f48f88897b275bac7aaac0381a95aff1fb59f415694d71c10746272a_prof);

        
        $__internal_59c26f10fd5d4818aada0ee5c33f167d79ef9b9282af9f844484e48a5102326e->leave($__internal_59c26f10fd5d4818aada0ee5c33f167d79ef9b9282af9f844484e48a5102326e_prof);

    }

    public function getTemplateName()
    {
        return "@DevLeagues/Home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 71,  111 => 13,  102 => 12,  89 => 7,  80 => 6,  62 => 4,  44 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"DevLeaguesBundle::default.html.twig\" %}

{% block page_title %}Hello World !{% endblock %}
{% block page_subtitle %}Welcome to the familly{% endblock %}

{% block box_header %}
\t<h3>
\t\tWhat is DevLeagues ?
\t</h3>
{% endblock %}

{% block box_body %}
<h4>General</h4>
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
{% endblock %}

{% block box_footer %}{% endblock %}
", "@DevLeagues/Home/index.html.twig", "/home/webmaster/www/public_html/DevLeagues/src/DevLeaguesBundle/Resources/views/Home/index.html.twig");
    }
}
