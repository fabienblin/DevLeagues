<?php

/* DevLeaguesBundle:Profile:show.html.twig */
class __TwigTemplate_bd479046c2f8549ed47a428626f1bd4019ca393c762c77e65c2e7230c0391fa9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "DevLeaguesBundle:Profile:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevLeaguesBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1bb05b1cfad751d468ecda11e58f1ea70e6b9951ee42bda930cf0e53c6a5c39a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bb05b1cfad751d468ecda11e58f1ea70e6b9951ee42bda930cf0e53c6a5c39a->enter($__internal_1bb05b1cfad751d468ecda11e58f1ea70e6b9951ee42bda930cf0e53c6a5c39a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bb05b1cfad751d468ecda11e58f1ea70e6b9951ee42bda930cf0e53c6a5c39a->leave($__internal_1bb05b1cfad751d468ecda11e58f1ea70e6b9951ee42bda930cf0e53c6a5c39a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5bdf368fc3b46f7f916ebe9ba0c739290d163ce1a4117c2155adce98d9ddbb96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bdf368fc3b46f7f916ebe9ba0c739290d163ce1a4117c2155adce98d9ddbb96->enter($__internal_5bdf368fc3b46f7f916ebe9ba0c739290d163ce1a4117c2155adce98d9ddbb96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"row\">
\t<div class=\"col-md-12\">
\t\t<h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</h1>
<button type=\"button\" name=\"button\">Add friend</button>
more details
\t</div>
</div>

";
        
        $__internal_5bdf368fc3b46f7f916ebe9ba0c739290d163ce1a4117c2155adce98d9ddbb96->leave($__internal_5bdf368fc3b46f7f916ebe9ba0c739290d163ce1a4117c2155adce98d9ddbb96_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
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

{% block body %}

<div class=\"row\">
\t<div class=\"col-md-12\">
\t\t<h1>{{ user.username }}</h1>
<button type=\"button\" name=\"button\">Add friend</button>
more details
\t</div>
</div>

{% endblock %}
", "DevLeaguesBundle:Profile:show.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/Profile/show.html.twig");
    }
}
