<?php

/* @SonataAdmin/CRUD/dashboard__action.html.twig */
class __TwigTemplate_a9b7c92de78eb94750d98478697744463d03aa060913f85ddc6b83e6c2003832 extends Twig_Template
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
        $__internal_a651843d30bd3c842ba9c05e51176d89a89cba7fbca7bf0fca1cdf720ed23bd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a651843d30bd3c842ba9c05e51176d89a89cba7fbca7bf0fca1cdf720ed23bd6->enter($__internal_a651843d30bd3c842ba9c05e51176d89a89cba7fbca7bf0fca1cdf720ed23bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/dashboard__action.html.twig"));

        $__internal_b657166ff7db4f4e6a5f683765feade4be3345db4b3b8126b84412e5e683c376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b657166ff7db4f4e6a5f683765feade4be3345db4b3b8126b84412e5e683c376->enter($__internal_b657166ff7db4f4e6a5f683765feade4be3345db4b3b8126b84412e5e683c376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/dashboard__action.html.twig"));

        // line 1
        echo "<a class=\"btn btn-link btn-flat\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "url", array()), "html", null, true);
        echo "\">
    <i class=\"fa fa-";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "icon", array()), "html", null, true);
        echo "\" aria-hidden=\"true\"></i>
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["action"] ?? $this->getContext($context, "action")), "label", array()), array(), (($this->getAttribute(($context["action"] ?? null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["action"] ?? null), "translation_domain", array()), "SonataAdminBundle")) : ("SonataAdminBundle"))), "html", null, true);
        echo "
</a>
";
        
        $__internal_a651843d30bd3c842ba9c05e51176d89a89cba7fbca7bf0fca1cdf720ed23bd6->leave($__internal_a651843d30bd3c842ba9c05e51176d89a89cba7fbca7bf0fca1cdf720ed23bd6_prof);

        
        $__internal_b657166ff7db4f4e6a5f683765feade4be3345db4b3b8126b84412e5e683c376->leave($__internal_b657166ff7db4f4e6a5f683765feade4be3345db4b3b8126b84412e5e683c376_prof);

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
", "@SonataAdmin/CRUD/dashboard__action.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/dashboard__action.html.twig");
    }
}
