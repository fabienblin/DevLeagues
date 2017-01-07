<?php

/* @DevLeagues/Contact/index.html.twig */
class __TwigTemplate_18cbe4fa81386f919ba688fb4924e826d75b0bc4272d7b9170133abf82c72c68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "@DevLeagues/Contact/index.html.twig", 1);
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
        $__internal_8cb07b88933e70d61f50f4614142d96420d1998571ce1c66ba9d0d5f940dae87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cb07b88933e70d61f50f4614142d96420d1998571ce1c66ba9d0d5f940dae87->enter($__internal_8cb07b88933e70d61f50f4614142d96420d1998571ce1c66ba9d0d5f940dae87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Contact/index.html.twig"));

        $__internal_9cbf8933c56ff239b6cc75529082a5e14dd2bac9a9e245a6e4494595cf2938aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cbf8933c56ff239b6cc75529082a5e14dd2bac9a9e245a6e4494595cf2938aa->enter($__internal_9cbf8933c56ff239b6cc75529082a5e14dd2bac9a9e245a6e4494595cf2938aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Contact/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cb07b88933e70d61f50f4614142d96420d1998571ce1c66ba9d0d5f940dae87->leave($__internal_8cb07b88933e70d61f50f4614142d96420d1998571ce1c66ba9d0d5f940dae87_prof);

        
        $__internal_9cbf8933c56ff239b6cc75529082a5e14dd2bac9a9e245a6e4494595cf2938aa->leave($__internal_9cbf8933c56ff239b6cc75529082a5e14dd2bac9a9e245a6e4494595cf2938aa_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5f89c6450d44241761a9b6ca773c1cb00db0ae3e9eb8e6cb3f09d89ede964e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5f89c6450d44241761a9b6ca773c1cb00db0ae3e9eb8e6cb3f09d89ede964e6->enter($__internal_d5f89c6450d44241761a9b6ca773c1cb00db0ae3e9eb8e6cb3f09d89ede964e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_89b42206d415bb3ce811098963855ac15ea8e0e6b20eac5104e4b7cffdacf1f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89b42206d415bb3ce811098963855ac15ea8e0e6b20eac5104e4b7cffdacf1f3->enter($__internal_89b42206d415bb3ce811098963855ac15ea8e0e6b20eac5104e4b7cffdacf1f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h1>Welcome to the Contact:index page</h1>
";
        
        $__internal_89b42206d415bb3ce811098963855ac15ea8e0e6b20eac5104e4b7cffdacf1f3->leave($__internal_89b42206d415bb3ce811098963855ac15ea8e0e6b20eac5104e4b7cffdacf1f3_prof);

        
        $__internal_d5f89c6450d44241761a9b6ca773c1cb00db0ae3e9eb8e6cb3f09d89ede964e6->leave($__internal_d5f89c6450d44241761a9b6ca773c1cb00db0ae3e9eb8e6cb3f09d89ede964e6_prof);

    }

    public function getTemplateName()
    {
        return "@DevLeagues/Contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  40 => 4,  11 => 1,);
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
<h1>Welcome to the Contact:index page</h1>
{% endblock %}
", "@DevLeagues/Contact/index.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/Contact/index.html.twig");
    }
}
