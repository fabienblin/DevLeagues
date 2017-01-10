<?php

/* @DevLeagues/Home/index.html.twig */
class __TwigTemplate_cc9ff3a00f387bcb231b8aa16293cc8fbc7d2e534dc77d59c6106f58766c3097 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "@DevLeagues/Home/index.html.twig", 1);
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
        $__internal_b6396d8d66fb7585de6b519736286bd2628902d222bb077fef503fd35b20aa27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6396d8d66fb7585de6b519736286bd2628902d222bb077fef503fd35b20aa27->enter($__internal_b6396d8d66fb7585de6b519736286bd2628902d222bb077fef503fd35b20aa27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Home/index.html.twig"));

        $__internal_38b868e4afff6fdcb5d149e82973618c825d1affc1e3e946dcf8d656b5229f7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38b868e4afff6fdcb5d149e82973618c825d1affc1e3e946dcf8d656b5229f7f->enter($__internal_38b868e4afff6fdcb5d149e82973618c825d1affc1e3e946dcf8d656b5229f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Home/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6396d8d66fb7585de6b519736286bd2628902d222bb077fef503fd35b20aa27->leave($__internal_b6396d8d66fb7585de6b519736286bd2628902d222bb077fef503fd35b20aa27_prof);

        
        $__internal_38b868e4afff6fdcb5d149e82973618c825d1affc1e3e946dcf8d656b5229f7f->leave($__internal_38b868e4afff6fdcb5d149e82973618c825d1affc1e3e946dcf8d656b5229f7f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5456f909d1d976c4ab40802fc444ed1c2d814aba1e631afe85268289fcc9705b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5456f909d1d976c4ab40802fc444ed1c2d814aba1e631afe85268289fcc9705b->enter($__internal_5456f909d1d976c4ab40802fc444ed1c2d814aba1e631afe85268289fcc9705b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fc307d69ec1909adca7f99551f92e27f30276a1e99bdc447467f155c1a0fb4bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc307d69ec1909adca7f99551f92e27f30276a1e99bdc447467f155c1a0fb4bb->enter($__internal_fc307d69ec1909adca7f99551f92e27f30276a1e99bdc447467f155c1a0fb4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Welcome to the Home:index page</h1>
";
        
        $__internal_fc307d69ec1909adca7f99551f92e27f30276a1e99bdc447467f155c1a0fb4bb->leave($__internal_fc307d69ec1909adca7f99551f92e27f30276a1e99bdc447467f155c1a0fb4bb_prof);

        
        $__internal_5456f909d1d976c4ab40802fc444ed1c2d814aba1e631afe85268289fcc9705b->leave($__internal_5456f909d1d976c4ab40802fc444ed1c2d814aba1e631afe85268289fcc9705b_prof);

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
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
<h1>Welcome to the Home:index page</h1>
{% endblock %}
", "@DevLeagues/Home/index.html.twig", "/home/webmaster/www/public_html/DevLeagues/src/DevLeaguesBundle/Resources/views/Home/index.html.twig");
    }
}
