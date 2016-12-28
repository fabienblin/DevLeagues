<?php

/* DevLeaguesBundle:Profile:showReduced.html.twig */
class __TwigTemplate_ef8ca7ed371d5e149a1cd1eaa52953632631c6cdfed39838857a5b8b81f307cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user' => array($this, 'block_user'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_408da5469ff5e4d9f2c137f4c4667a9d19172a9375dd25670bcc4f62fd905ee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_408da5469ff5e4d9f2c137f4c4667a9d19172a9375dd25670bcc4f62fd905ee3->enter($__internal_408da5469ff5e4d9f2c137f4c4667a9d19172a9375dd25670bcc4f62fd905ee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Profile:showReduced.html.twig"));

        // line 1
        $this->displayBlock('user', $context, $blocks);
        
        $__internal_408da5469ff5e4d9f2c137f4c4667a9d19172a9375dd25670bcc4f62fd905ee3->leave($__internal_408da5469ff5e4d9f2c137f4c4667a9d19172a9375dd25670bcc4f62fd905ee3_prof);

    }

    public function block_user($context, array $blocks = array())
    {
        $__internal_906e8d5c966974a3beb3ef900002287d03fa239e61acb8d5c4c6428b2580536a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_906e8d5c966974a3beb3ef900002287d03fa239e61acb8d5c4c6428b2580536a->enter($__internal_906e8d5c966974a3beb3ef900002287d03fa239e61acb8d5c4c6428b2580536a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user"));

        // line 2
        echo "
\t<div class=\"col-md-6\">
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<a class=\"panel-title\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show_profile", array("userName" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()))), "html", null, true);
        echo "\">
\t\t\t\t\t<h2>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</h2>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\tmore details
\t\t\t</div>
\t\t</div>
\t</div>

";
        
        $__internal_906e8d5c966974a3beb3ef900002287d03fa239e61acb8d5c4c6428b2580536a->leave($__internal_906e8d5c966974a3beb3ef900002287d03fa239e61acb8d5c4c6428b2580536a_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:Profile:showReduced.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  41 => 6,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block user %}

\t<div class=\"col-md-6\">
\t\t<div class=\"panel panel-default\">
\t\t\t<div class=\"panel-heading\">
\t\t\t\t<a class=\"panel-title\" href=\"{{ path('user_show_profile', { 'userName': user.username }) }}\">
\t\t\t\t\t<h2>{{ user.username }}</h2>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"panel-body\">
\t\t\t\tmore details
\t\t\t</div>
\t\t</div>
\t</div>

{% endblock %}
", "DevLeaguesBundle:Profile:showReduced.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/Profile/showReduced.html.twig");
    }
}
