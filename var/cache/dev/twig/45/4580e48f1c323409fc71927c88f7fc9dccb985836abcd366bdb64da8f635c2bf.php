<?php

/* DevLeaguesBundle::sidebar.html.twig */
class __TwigTemplate_78e8481ddfb660c7fca1978dd054b46db599626180fedd3b390d5aada9de303c extends Twig_Template
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
        $__internal_83ad8bdac58101a57d4cc97ae1931f5974c417f7353e5cc50c534ea3b65b925d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83ad8bdac58101a57d4cc97ae1931f5974c417f7353e5cc50c534ea3b65b925d->enter($__internal_83ad8bdac58101a57d4cc97ae1931f5974c417f7353e5cc50c534ea3b65b925d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle::sidebar.html.twig"));

        // line 1
        echo "<h1>Sidebar</h1>
<ul>
\t<li>test</li>
\t<li>test</li>
\t<li>test</li>
\t<li>test</li>
\t<li>test</li>
\t<li>test</li>
</ul>
";
        
        $__internal_83ad8bdac58101a57d4cc97ae1931f5974c417f7353e5cc50c534ea3b65b925d->leave($__internal_83ad8bdac58101a57d4cc97ae1931f5974c417f7353e5cc50c534ea3b65b925d_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle::sidebar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Sidebar</h1>
<ul>
\t<li>test</li>
\t<li>test</li>
\t<li>test</li>
\t<li>test</li>
\t<li>test</li>
\t<li>test</li>
</ul>
", "DevLeaguesBundle::sidebar.html.twig", "/var/www/html/devleagues/src/DevLeaguesBundle/Resources/views/sidebar.html.twig");
    }
}
