<?php

/* @SonataAdmin/CRUD/dashboard__action.html.twig */
class __TwigTemplate_9419814a5ac6236b8f4754eceee4153be1be3e275bb69026d64421361cdf6fec extends Twig_Template
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
        $__internal_b9109726ccb08fbcbc0ebb0cdbc60754399bae4aca4c69109cf121f55bf149e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9109726ccb08fbcbc0ebb0cdbc60754399bae4aca4c69109cf121f55bf149e9->enter($__internal_b9109726ccb08fbcbc0ebb0cdbc60754399bae4aca4c69109cf121f55bf149e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/dashboard__action.html.twig"));

        $__internal_b609a4f71d034fb4927e7ee20d2b4ffb19db8aa3d54205b9ee49749a5e745266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b609a4f71d034fb4927e7ee20d2b4ffb19db8aa3d54205b9ee49749a5e745266->enter($__internal_b609a4f71d034fb4927e7ee20d2b4ffb19db8aa3d54205b9ee49749a5e745266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/dashboard__action.html.twig"));

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
        
        $__internal_b9109726ccb08fbcbc0ebb0cdbc60754399bae4aca4c69109cf121f55bf149e9->leave($__internal_b9109726ccb08fbcbc0ebb0cdbc60754399bae4aca4c69109cf121f55bf149e9_prof);

        
        $__internal_b609a4f71d034fb4927e7ee20d2b4ffb19db8aa3d54205b9ee49749a5e745266->leave($__internal_b609a4f71d034fb4927e7ee20d2b4ffb19db8aa3d54205b9ee49749a5e745266_prof);

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
