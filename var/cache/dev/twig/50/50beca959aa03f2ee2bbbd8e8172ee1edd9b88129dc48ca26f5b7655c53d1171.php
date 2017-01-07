<?php

/* @SonataAdmin/CRUD/dashboard__action.html.twig */
class __TwigTemplate_15c6ffdaf73ad628d3e12549f3216d8789867a6e4945246e6d01ec42f29b0526 extends Twig_Template
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
        $__internal_cadcfaa13317a0eb4afbe80e6eb05747722522d2127989c2398b49573b0b90c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cadcfaa13317a0eb4afbe80e6eb05747722522d2127989c2398b49573b0b90c6->enter($__internal_cadcfaa13317a0eb4afbe80e6eb05747722522d2127989c2398b49573b0b90c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/dashboard__action.html.twig"));

        $__internal_888feee99151fe0184b7906b27ab951eff16713a1a7a365c6fac60417e3b4710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_888feee99151fe0184b7906b27ab951eff16713a1a7a365c6fac60417e3b4710->enter($__internal_888feee99151fe0184b7906b27ab951eff16713a1a7a365c6fac60417e3b4710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/dashboard__action.html.twig"));

        // line 1
        echo "<a class=\"btn btn-link btn-flat\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "url", array()), "html", null, true);
        echo "\">
    <i class=\"fa fa-";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "icon", array()), "html", null, true);
        echo "\" aria-hidden=\"true\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "label", array()), array(), (($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["action"]) ? $context["action"] : null), "translation_domain", array()), "SonataAdminBundle")) : ("SonataAdminBundle"))), "html", null, true);
        echo "
</a>
";
        
        $__internal_cadcfaa13317a0eb4afbe80e6eb05747722522d2127989c2398b49573b0b90c6->leave($__internal_cadcfaa13317a0eb4afbe80e6eb05747722522d2127989c2398b49573b0b90c6_prof);

        
        $__internal_888feee99151fe0184b7906b27ab951eff16713a1a7a365c6fac60417e3b4710->leave($__internal_888feee99151fe0184b7906b27ab951eff16713a1a7a365c6fac60417e3b4710_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/dashboard__action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 3,  30 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a class=\"btn btn-link btn-flat\" href=\"{{ action.url }}\">
    <i class=\"fa fa-{{ action.icon }}\" aria-hidden=\"true\"></i>
    {{ action.label|trans({}, action.translation_domain|default('SonataAdminBundle')) }}
</a>
", "@SonataAdmin/CRUD/dashboard__action.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/dashboard__action.html.twig");
    }
}
