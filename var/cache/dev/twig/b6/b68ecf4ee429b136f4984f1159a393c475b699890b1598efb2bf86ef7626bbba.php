<?php

/* @DevLeagues/User/show.html.twig */
class __TwigTemplate_214353d6c904ebe1fa62fb017e1df7ba6103658647b7d6c75b250d4bd716927f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "@DevLeagues/User/show.html.twig", 1);
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
        $__internal_b83aefcee6067b60c6d411413b512d99f7cbac79d4ec9dfe08547226d751ef1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b83aefcee6067b60c6d411413b512d99f7cbac79d4ec9dfe08547226d751ef1f->enter($__internal_b83aefcee6067b60c6d411413b512d99f7cbac79d4ec9dfe08547226d751ef1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/User/show.html.twig"));

        $__internal_aa4891f1f1d2430ec542fa591c6ca21c2cd21072ceabef942a105cb2c05485ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa4891f1f1d2430ec542fa591c6ca21c2cd21072ceabef942a105cb2c05485ce->enter($__internal_aa4891f1f1d2430ec542fa591c6ca21c2cd21072ceabef942a105cb2c05485ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/User/show.html.twig"));

        // line 3
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "@DevLeagues/User/show.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b83aefcee6067b60c6d411413b512d99f7cbac79d4ec9dfe08547226d751ef1f->leave($__internal_b83aefcee6067b60c6d411413b512d99f7cbac79d4ec9dfe08547226d751ef1f_prof);

        
        $__internal_aa4891f1f1d2430ec542fa591c6ca21c2cd21072ceabef942a105cb2c05485ce->leave($__internal_aa4891f1f1d2430ec542fa591c6ca21c2cd21072ceabef942a105cb2c05485ce_prof);

    }

    // line 5
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_8a00fd48a041559444e330d2abdeda1b18db6bf340d6db512ff1f208375e9f61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a00fd48a041559444e330d2abdeda1b18db6bf340d6db512ff1f208375e9f61->enter($__internal_8a00fd48a041559444e330d2abdeda1b18db6bf340d6db512ff1f208375e9f61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_5b504f5f5e571e607cb3578ceb4a0a07086c7f6daec0c62cb418a635e6d1f4d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b504f5f5e571e607cb3578ceb4a0a07086c7f6daec0c62cb418a635e6d1f4d7->enter($__internal_5b504f5f5e571e607cb3578ceb4a0a07086c7f6daec0c62cb418a635e6d1f4d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Profile";
        
        $__internal_5b504f5f5e571e607cb3578ceb4a0a07086c7f6daec0c62cb418a635e6d1f4d7->leave($__internal_5b504f5f5e571e607cb3578ceb4a0a07086c7f6daec0c62cb418a635e6d1f4d7_prof);

        
        $__internal_8a00fd48a041559444e330d2abdeda1b18db6bf340d6db512ff1f208375e9f61->leave($__internal_8a00fd48a041559444e330d2abdeda1b18db6bf340d6db512ff1f208375e9f61_prof);

    }

    // line 6
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_88d079b374c2eaf3fdae63698feecc0f7dabe7234902d70ca5292bc47f027683 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88d079b374c2eaf3fdae63698feecc0f7dabe7234902d70ca5292bc47f027683->enter($__internal_88d079b374c2eaf3fdae63698feecc0f7dabe7234902d70ca5292bc47f027683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        $__internal_7ad75f6b8d5d00184919c313d258fe9b245e7dbfa9f2510d2d9a407d872d75c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ad75f6b8d5d00184919c313d258fe9b245e7dbfa9f2510d2d9a407d872d75c7->enter($__internal_7ad75f6b8d5d00184919c313d258fe9b245e7dbfa9f2510d2d9a407d872d75c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Read Only";
        
        $__internal_7ad75f6b8d5d00184919c313d258fe9b245e7dbfa9f2510d2d9a407d872d75c7->leave($__internal_7ad75f6b8d5d00184919c313d258fe9b245e7dbfa9f2510d2d9a407d872d75c7_prof);

        
        $__internal_88d079b374c2eaf3fdae63698feecc0f7dabe7234902d70ca5292bc47f027683->leave($__internal_88d079b374c2eaf3fdae63698feecc0f7dabe7234902d70ca5292bc47f027683_prof);

    }

    // line 8
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_dc15e5e45a7233e17d4a2a7efb10157c3697d3787283175c3209817f0d70c866 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc15e5e45a7233e17d4a2a7efb10157c3697d3787283175c3209817f0d70c866->enter($__internal_dc15e5e45a7233e17d4a2a7efb10157c3697d3787283175c3209817f0d70c866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_1e1b9a2176ad35772b56e30be536f2d1cf7054208f76b0cb2832fb26d28555aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e1b9a2176ad35772b56e30be536f2d1cf7054208f76b0cb2832fb26d28555aa->enter($__internal_1e1b9a2176ad35772b56e30be536f2d1cf7054208f76b0cb2832fb26d28555aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 9
        echo "<div class=\"row\">
\t<div class=\"col-lg-4\">
\t\t<div class=\"box box-primary\">
\t\t\t<div class=\"box-body\">
\t\t\t\t<img src=\"";
        // line 13
        echo "\"
\t\t\t\talt=\"tu veux ma photo !\"
\t\t\t\tclass=\"profile-user-img img-responsive img-circle\"/>
\t\t\t\t<h3 class=\"profile-username text-center\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</h3>
\t\t\t\t<p class=\"text-muted text-center\">Software Engineer</p>
\t\t\t</div>
\t\t\t<div class=\"box-footer\">
\t\t\t\t<a href=\"#\" class=\"btn btn-primary btn-block\">Edit</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"col-lg-8\">
\t\t<div class=\"box box-primary\">
\t\t\t<div class=\"box-header\">
\t\t\t\t<h3>My Statistics</h3>
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
\t\t\t\t<h3>My Technologies</h3>
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
\t\t\t\t<h3>My Victories</h3>
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
\t\t\t\t<h3>My Coworkers</h3>
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
        
        $__internal_1e1b9a2176ad35772b56e30be536f2d1cf7054208f76b0cb2832fb26d28555aa->leave($__internal_1e1b9a2176ad35772b56e30be536f2d1cf7054208f76b0cb2832fb26d28555aa_prof);

        
        $__internal_dc15e5e45a7233e17d4a2a7efb10157c3697d3787283175c3209817f0d70c866->leave($__internal_dc15e5e45a7233e17d4a2a7efb10157c3697d3787283175c3209817f0d70c866_prof);

    }

    public function getTemplateName()
    {
        return "@DevLeagues/User/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 16,  96 => 13,  90 => 9,  81 => 8,  63 => 6,  45 => 5,  35 => 1,  33 => 3,  11 => 1,);
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
\t\t\t\t<img src=\"{#{{ macro.avatar(user.avatar, user.username, 'user-image') }}#}\"
\t\t\t\talt=\"tu veux ma photo !\"
\t\t\t\tclass=\"profile-user-img img-responsive img-circle\"/>
\t\t\t\t<h3 class=\"profile-username text-center\">{{ app.user.username }}</h3>
\t\t\t\t<p class=\"text-muted text-center\">Software Engineer</p>
\t\t\t</div>
\t\t\t<div class=\"box-footer\">
\t\t\t\t<a href=\"#\" class=\"btn btn-primary btn-block\">Edit</a>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"col-lg-8\">
\t\t<div class=\"box box-primary\">
\t\t\t<div class=\"box-header\">
\t\t\t\t<h3>My Statistics</h3>
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
\t\t\t\t<h3>My Technologies</h3>
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
\t\t\t\t<h3>My Victories</h3>
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
\t\t\t\t<h3>My Coworkers</h3>
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
", "@DevLeagues/User/show.html.twig", "/home/webmaster/www/public_html/DevLeagues/src/DevLeaguesBundle/Resources/views/User/show.html.twig");
    }
}
