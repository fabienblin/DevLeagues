<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_99e85fd6214d8edad2e9748ab04f55861ff9b77ff5a3b20d918760bdabb8463b extends Twig_Template
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
        $__internal_d88a8ce7012ef38e04cee3122c4d60033115843f8eee31cf838caf73355314d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d88a8ce7012ef38e04cee3122c4d60033115843f8eee31cf838caf73355314d2->enter($__internal_d88a8ce7012ef38e04cee3122c4d60033115843f8eee31cf838caf73355314d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_fadda653eb1096233d714b0865cdf18e6e06dc2711077f7eda8f67841802e9ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fadda653eb1096233d714b0865cdf18e6e06dc2711077f7eda8f67841802e9ed->enter($__internal_fadda653eb1096233d714b0865cdf18e6e06dc2711077f7eda8f67841802e9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_d88a8ce7012ef38e04cee3122c4d60033115843f8eee31cf838caf73355314d2->leave($__internal_d88a8ce7012ef38e04cee3122c4d60033115843f8eee31cf838caf73355314d2_prof);

        
        $__internal_fadda653eb1096233d714b0865cdf18e6e06dc2711077f7eda8f67841802e9ed->leave($__internal_fadda653eb1096233d714b0865cdf18e6e06dc2711077f7eda8f67841802e9ed_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "@FOSUser/Group/show_content.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/FOSUserBundle/views/Group/show_content.html.twig");
    }
}
