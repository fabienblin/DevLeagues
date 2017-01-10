<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_74a3c4d5a1c418a07efa6d91d949ee17604481ada70a35a07ff4595ed2f076a6 extends Twig_Template
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
        $__internal_b91f0ce82805bc75c6617979aa576efc3bfa925ce55ba3413229e9f6e11046c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b91f0ce82805bc75c6617979aa576efc3bfa925ce55ba3413229e9f6e11046c9->enter($__internal_b91f0ce82805bc75c6617979aa576efc3bfa925ce55ba3413229e9f6e11046c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_0035389be035c27c4288d3356eaaae160946b336b935ed8031dc4b853517b8a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0035389be035c27c4288d3356eaaae160946b336b935ed8031dc4b853517b8a4->enter($__internal_0035389be035c27c4288d3356eaaae160946b336b935ed8031dc4b853517b8a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_b91f0ce82805bc75c6617979aa576efc3bfa925ce55ba3413229e9f6e11046c9->leave($__internal_b91f0ce82805bc75c6617979aa576efc3bfa925ce55ba3413229e9f6e11046c9_prof);

        
        $__internal_0035389be035c27c4288d3356eaaae160946b336b935ed8031dc4b853517b8a4->leave($__internal_0035389be035c27c4288d3356eaaae160946b336b935ed8031dc4b853517b8a4_prof);

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
