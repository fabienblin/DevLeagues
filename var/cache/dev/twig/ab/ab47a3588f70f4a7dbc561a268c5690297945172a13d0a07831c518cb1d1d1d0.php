<?php

/* DevLeaguesBundle::sidebar.html.twig */
class __TwigTemplate_66259c8c0f0c515b42842829ba22ce0b9078266a80a1727dceddae5e7a9e9a59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c218bddec04df3efc47bbc86fcb96e694298a2712b5aea24aaf3e47f0a5ada3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c218bddec04df3efc47bbc86fcb96e694298a2712b5aea24aaf3e47f0a5ada3->enter($__internal_8c218bddec04df3efc47bbc86fcb96e694298a2712b5aea24aaf3e47f0a5ada3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle::sidebar.html.twig"));

        // line 1
        echo "<h3>My Account</h3>
<ul class=\"nav nav-stacked nav-pills\">
\t<li role=\"presentation\" class=\"active\">
\t\t<a href=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_show");
        echo "\">Profile</a>
\t</li>
\t<li role=\"presentation\">
\t\t<a href=\"#\">Messages <span class=\"badge\">4</span></a>
\t</li>
\t<li role=\"presentation\">
\t\t<a href=\"#\">Friendzone</a>
\t</li>
\t<li role=\"presentation\">
\t\t<a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show_events");
        echo "\">Events</a>
\t</li>
\t<li role=\"presentation\">
\t\t<a href=\"#\">Bla bla</a>
\t</li>
</ul>
";
        
        $__internal_8c218bddec04df3efc47bbc86fcb96e694298a2712b5aea24aaf3e47f0a5ada3->leave($__internal_8c218bddec04df3efc47bbc86fcb96e694298a2712b5aea24aaf3e47f0a5ada3_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle::sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 13,  27 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3>My Account</h3>
<ul class=\"nav nav-stacked nav-pills\">
\t<li role=\"presentation\" class=\"active\">
\t\t<a href=\"{{ path('fos_user_profile_show') }}\">Profile</a>
\t</li>
\t<li role=\"presentation\">
\t\t<a href=\"#\">Messages <span class=\"badge\">4</span></a>
\t</li>
\t<li role=\"presentation\">
\t\t<a href=\"#\">Friendzone</a>
\t</li>
\t<li role=\"presentation\">
\t\t<a href=\"{{ path('user_show_events') }}\">Events</a>
\t</li>
\t<li role=\"presentation\">
\t\t<a href=\"#\">Bla bla</a>
\t</li>
</ul>
", "DevLeaguesBundle::sidebar.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/sidebar.html.twig");
    }
}