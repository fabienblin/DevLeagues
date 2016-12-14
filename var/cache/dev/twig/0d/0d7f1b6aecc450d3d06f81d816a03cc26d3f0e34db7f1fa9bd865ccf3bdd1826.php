<?php

/* DevLeaguesBundle::navbar.html.twig */
class __TwigTemplate_3fc8c175110e569b76f5a9369b298014fe6bf20740b3dc520ac388bff42fde47 extends Twig_Template
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
        $__internal_2e052e5e687f4ca5dd4ef1b1aadf7b760bd0fa1e15bfa30a6b1f5c93dd161e65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e052e5e687f4ca5dd4ef1b1aadf7b760bd0fa1e15bfa30a6b1f5c93dd161e65->enter($__internal_2e052e5e687f4ca5dd4ef1b1aadf7b760bd0fa1e15bfa30a6b1f5c93dd161e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle::navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-inverse navbar-fixed-top\">
  <div class=\"container\">
\t<div class=\"navbar-header\">
\t  <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t<span class=\"icon-bar\"></span>
\t\t<span class=\"icon-bar\"></span>
\t\t<span class=\"icon-bar\"></span>
\t  </button>
\t  <a class=\"navbar-brand\" href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">DevLeagues</a>
\t</div><!--/.nav-header -->
\t<div id=\"navbar\" class=\"collapse navbar-collapse\">
\t  <ul class=\"nav navbar-nav\">
\t\t<li class=\"active\"><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Home</a></li>
\t\t<li><a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about");
        echo "\">About</a></li>
\t\t<li><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("events");
        echo "\">Events</a></li>
\t\t<li><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("community");
        echo "\">Community</a></li>
\t\t<li><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("news");
        echo "\">News</a></li>
\t\t<li><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("leagues");
        echo "\">Leagues</a></li>
\t\t<li><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact");
        echo "\">Contact</a></li>
\t  </ul>
\t</div><!--/.nav-collapse -->
  </div>
</nav>
";
        
        $__internal_2e052e5e687f4ca5dd4ef1b1aadf7b760bd0fa1e15bfa30a6b1f5c93dd161e65->leave($__internal_2e052e5e687f4ca5dd4ef1b1aadf7b760bd0fa1e15bfa30a6b1f5c93dd161e65_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle::navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 20,  60 => 19,  56 => 18,  52 => 17,  48 => 16,  44 => 15,  40 => 14,  33 => 10,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-inverse navbar-fixed-top\">
  <div class=\"container\">
\t<div class=\"navbar-header\">
\t  <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t<span class=\"icon-bar\"></span>
\t\t<span class=\"icon-bar\"></span>
\t\t<span class=\"icon-bar\"></span>
\t  </button>
\t  <a class=\"navbar-brand\" href=\"{{ path('home') }}\">DevLeagues</a>
\t</div><!--/.nav-header -->
\t<div id=\"navbar\" class=\"collapse navbar-collapse\">
\t  <ul class=\"nav navbar-nav\">
\t\t<li class=\"active\"><a href=\"{{ path('home') }}\">Home</a></li>
\t\t<li><a href=\"{{ path('about') }}\">About</a></li>
\t\t<li><a href=\"{{ path('events') }}\">Events</a></li>
\t\t<li><a href=\"{{ path('community') }}\">Community</a></li>
\t\t<li><a href=\"{{ path('news') }}\">News</a></li>
\t\t<li><a href=\"{{ path('leagues') }}\">Leagues</a></li>
\t\t<li><a href=\"{{ path('contact') }}\">Contact</a></li>
\t  </ul>
\t</div><!--/.nav-collapse -->
  </div>
</nav>
", "DevLeaguesBundle::navbar.html.twig", "/var/www/html/devleagues/src/DevLeaguesBundle/Resources/views/navbar.html.twig");
    }
}
