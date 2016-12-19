<?php

/* DevLeaguesBundle::sidebar.html.twig */
class __TwigTemplate_dbd48f9de23686960a09063d6a81dc5c9f038e74955ce37d339b11e990484cef extends Twig_Template
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
        $__internal_1756d05c2572b0817f160602d5efb6b42b78cc5a590927b88601d24d8935dde4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1756d05c2572b0817f160602d5efb6b42b78cc5a590927b88601d24d8935dde4->enter($__internal_1756d05c2572b0817f160602d5efb6b42b78cc5a590927b88601d24d8935dde4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle::sidebar.html.twig"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_event");
        echo "\">Events</a>
\t</li>
\t<li role=\"presentation\">
\t\t<a href=\"#\">Bla bla</a>
\t</li>
</ul>
";
        
        $__internal_1756d05c2572b0817f160602d5efb6b42b78cc5a590927b88601d24d8935dde4->leave($__internal_1756d05c2572b0817f160602d5efb6b42b78cc5a590927b88601d24d8935dde4_prof);

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
\t\t<a href=\"{{ path('new_event') }}\">Events</a>
\t</li>
\t<li role=\"presentation\">
\t\t<a href=\"#\">Bla bla</a>
\t</li>
</ul>
", "DevLeaguesBundle::sidebar.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/sidebar.html.twig");
    }
}
