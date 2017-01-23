<?php

/* DevLeaguesBundle:User:show.html.twig */
class __TwigTemplate_12acf374d40d15a4d10c89066c953abc37f1320a6f5dc1ee85ac08c0510cbe37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "DevLeaguesBundle:User:show.html.twig", 1);
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
        $__internal_8bb20af66a4fa55d17f91b7faa56c0d079f05aef637b72505dfa2a3b7b76c0fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bb20af66a4fa55d17f91b7faa56c0d079f05aef637b72505dfa2a3b7b76c0fb->enter($__internal_8bb20af66a4fa55d17f91b7faa56c0d079f05aef637b72505dfa2a3b7b76c0fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:User:show.html.twig"));

        $__internal_3892fb61cf6a5160e6685804f2cc295500c05e977dab7c8ed7fa94da027a6bcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3892fb61cf6a5160e6685804f2cc295500c05e977dab7c8ed7fa94da027a6bcc->enter($__internal_3892fb61cf6a5160e6685804f2cc295500c05e977dab7c8ed7fa94da027a6bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:User:show.html.twig"));

        // line 3
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "DevLeaguesBundle:User:show.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bb20af66a4fa55d17f91b7faa56c0d079f05aef637b72505dfa2a3b7b76c0fb->leave($__internal_8bb20af66a4fa55d17f91b7faa56c0d079f05aef637b72505dfa2a3b7b76c0fb_prof);

        
        $__internal_3892fb61cf6a5160e6685804f2cc295500c05e977dab7c8ed7fa94da027a6bcc->leave($__internal_3892fb61cf6a5160e6685804f2cc295500c05e977dab7c8ed7fa94da027a6bcc_prof);

    }

    // line 5
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_658cc7476fac6eb0dd9e8b4791195a71b5cc537fa367059cdae32100f948cc3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_658cc7476fac6eb0dd9e8b4791195a71b5cc537fa367059cdae32100f948cc3f->enter($__internal_658cc7476fac6eb0dd9e8b4791195a71b5cc537fa367059cdae32100f948cc3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_3934976241d9c2f88feb6b2b709c32ece64d5621b5b5698ca4b1a33663f59e33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3934976241d9c2f88feb6b2b709c32ece64d5621b5b5698ca4b1a33663f59e33->enter($__internal_3934976241d9c2f88feb6b2b709c32ece64d5621b5b5698ca4b1a33663f59e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Profile";
        
        $__internal_3934976241d9c2f88feb6b2b709c32ece64d5621b5b5698ca4b1a33663f59e33->leave($__internal_3934976241d9c2f88feb6b2b709c32ece64d5621b5b5698ca4b1a33663f59e33_prof);

        
        $__internal_658cc7476fac6eb0dd9e8b4791195a71b5cc537fa367059cdae32100f948cc3f->leave($__internal_658cc7476fac6eb0dd9e8b4791195a71b5cc537fa367059cdae32100f948cc3f_prof);

    }

    // line 6
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_1c853727e7baeb75bb0698446ebd4b49bd4f066c8adcedb0787dae4214a7aef6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c853727e7baeb75bb0698446ebd4b49bd4f066c8adcedb0787dae4214a7aef6->enter($__internal_1c853727e7baeb75bb0698446ebd4b49bd4f066c8adcedb0787dae4214a7aef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        $__internal_91b931a294167fea6595a29559138c132cb931098a12245f0f6ad6c9cc0f83cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91b931a294167fea6595a29559138c132cb931098a12245f0f6ad6c9cc0f83cc->enter($__internal_91b931a294167fea6595a29559138c132cb931098a12245f0f6ad6c9cc0f83cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Read Only";
        
        $__internal_91b931a294167fea6595a29559138c132cb931098a12245f0f6ad6c9cc0f83cc->leave($__internal_91b931a294167fea6595a29559138c132cb931098a12245f0f6ad6c9cc0f83cc_prof);

        
        $__internal_1c853727e7baeb75bb0698446ebd4b49bd4f066c8adcedb0787dae4214a7aef6->leave($__internal_1c853727e7baeb75bb0698446ebd4b49bd4f066c8adcedb0787dae4214a7aef6_prof);

    }

    // line 8
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_8845b01ed0b45e6563372a9e1145c5fab9d95d841bf6a1292ec15e9d7e7c935d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8845b01ed0b45e6563372a9e1145c5fab9d95d841bf6a1292ec15e9d7e7c935d->enter($__internal_8845b01ed0b45e6563372a9e1145c5fab9d95d841bf6a1292ec15e9d7e7c935d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_aeed7b36622a9c12a01db56defe291241edc81e2678c78d8ac30380b92ee4358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeed7b36622a9c12a01db56defe291241edc81e2678c78d8ac30380b92ee4358->enter($__internal_aeed7b36622a9c12a01db56defe291241edc81e2678c78d8ac30380b92ee4358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 9
        echo "<div class=\"row\">
\t<div class=\"col-lg-4\">
\t\t<div class=\"box box-primary\">
\t\t\t<div class=\"box-body\">
\t\t\t\t";
        // line 13
        echo $context["macro"]->getavatar(null, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "profile-user-img img-responsive img-circle");
        echo "
\t\t\t\t<h3 class=\"profile-username text-center\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</h3>
\t\t\t\t<p class=\"text-muted text-center\">Software Engineer</p>
\t\t\t</div>
\t\t\t<div class=\"box-footer\">
\t\t\t\t<a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("invite_friend", array("userId" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary btn-block\">Send Invitation</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"col-lg-8\">
\t\t<div class=\"box box-primary\">
\t\t\t<div class=\"box-header\">
\t\t\t\t<h3>Statistics</h3>
\t\t\t</div>
\t\t\t<div class=\"box-body\">
\t\t\t\t<p>
\t\t\t\t\tdes graphs et des points
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"row\">
\t<div class=\"col-lg-6\">
\t\t<div class=\"box box-primary\">
\t\t\t<div class=\"box-header\">
\t\t\t\t<h3>Technologies</h3>
\t\t\t</div>
\t\t\t<div class=\"box-body\">
\t\t\t\t<p>
\t\t\t\t\tvazy la y'aura une chiote de petits progress sur des technos
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"col-lg-6\">
\t\t<div class=\"box box-primary\">
\t\t\t<div class=\"box-header\">
\t\t\t\t<h3>Victories</h3>
\t\t\t</div>
\t\t\t<div class=\"box-body\">
\t\t\t\t<p>
\t\t\t\t\tplein de petites medailles, prix, succes etc
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"row\">
\t<div class=\"col-lg-12\">
\t\t<div class=\"box box-primary\">
\t\t\t<div class=\"box-header\">
\t\t\t\t<h3>Coworkers</h3>
\t\t\t</div>
\t\t\t<div class=\"box-body\">
\t\t\t\t<p>
\t\t\t\t\tet la l'arbre des collaborations et les technos associees
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

";
        
        $__internal_aeed7b36622a9c12a01db56defe291241edc81e2678c78d8ac30380b92ee4358->leave($__internal_aeed7b36622a9c12a01db56defe291241edc81e2678c78d8ac30380b92ee4358_prof);

        
        $__internal_8845b01ed0b45e6563372a9e1145c5fab9d95d841bf6a1292ec15e9d7e7c935d->leave($__internal_8845b01ed0b45e6563372a9e1145c5fab9d95d841bf6a1292ec15e9d7e7c935d_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:User:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 18,  100 => 14,  96 => 13,  90 => 9,  81 => 8,  63 => 6,  45 => 5,  35 => 1,  33 => 3,  11 => 1,);
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

{% import \"AvanzuAdminThemeBundle:layout:macros.html.twig\" as macro %}

{% block page_title %}Profile{% endblock %}
{% block page_subtitle %}Read Only{% endblock %}

{% block page_content %}
<div class=\"row\">
\t<div class=\"col-lg-4\">
\t\t<div class=\"box box-primary\">
\t\t\t<div class=\"box-body\">
\t\t\t\t{{ macro.avatar(null, user.username, 'profile-user-img img-responsive img-circle') }}
\t\t\t\t<h3 class=\"profile-username text-center\">{{ user.username }}</h3>
\t\t\t\t<p class=\"text-muted text-center\">Software Engineer</p>
\t\t\t</div>
\t\t\t<div class=\"box-footer\">
\t\t\t\t<a href=\"{{ path('invite_friend', {userId: user.id}) }}\" class=\"btn btn-primary btn-block\">Send Invitation</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"col-lg-8\">
\t\t<div class=\"box box-primary\">
\t\t\t<div class=\"box-header\">
\t\t\t\t<h3>Statistics</h3>
\t\t\t</div>
\t\t\t<div class=\"box-body\">
\t\t\t\t<p>
\t\t\t\t\tdes graphs et des points
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"row\">
\t<div class=\"col-lg-6\">
\t\t<div class=\"box box-primary\">
\t\t\t<div class=\"box-header\">
\t\t\t\t<h3>Technologies</h3>
\t\t\t</div>
\t\t\t<div class=\"box-body\">
\t\t\t\t<p>
\t\t\t\t\tvazy la y'aura une chiote de petits progress sur des technos
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"col-lg-6\">
\t\t<div class=\"box box-primary\">
\t\t\t<div class=\"box-header\">
\t\t\t\t<h3>Victories</h3>
\t\t\t</div>
\t\t\t<div class=\"box-body\">
\t\t\t\t<p>
\t\t\t\t\tplein de petites medailles, prix, succes etc
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
<div class=\"row\">
\t<div class=\"col-lg-12\">
\t\t<div class=\"box box-primary\">
\t\t\t<div class=\"box-header\">
\t\t\t\t<h3>Coworkers</h3>
\t\t\t</div>
\t\t\t<div class=\"box-body\">
\t\t\t\t<p>
\t\t\t\t\tet la l'arbre des collaborations et les technos associees
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

{% endblock %}
", "DevLeaguesBundle:User:show.html.twig", "/home/webmaster/www/public_html/DevLeagues/var/cache/dev/../../../src/DevLeaguesBundle/Resources/views/User/show.html.twig");
    }
}
