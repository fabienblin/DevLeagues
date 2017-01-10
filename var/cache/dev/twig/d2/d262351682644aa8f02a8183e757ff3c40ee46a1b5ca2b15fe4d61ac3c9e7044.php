<?php

/* @FOSUser/Group/new_content.html.twig */
class __TwigTemplate_fc1b9859b169d1bcd8c3871ebd3346e1675b5ed96ca9785a450a8cd3a98ca21a extends Twig_Template
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
        $__internal_e08e69fc886c7050e3473e6654ba3dd9fb82f47e5dfe260aab58f8436ddf907a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e08e69fc886c7050e3473e6654ba3dd9fb82f47e5dfe260aab58f8436ddf907a->enter($__internal_e08e69fc886c7050e3473e6654ba3dd9fb82f47e5dfe260aab58f8436ddf907a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new_content.html.twig"));

        $__internal_264e5bea86bbe0dfbe8fe3b564864b6865efb9dbc0515d73852244d3b48bbc49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_264e5bea86bbe0dfbe8fe3b564864b6865efb9dbc0515d73852244d3b48bbc49->enter($__internal_264e5bea86bbe0dfbe8fe3b564864b6865efb9dbc0515d73852244d3b48bbc49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_new"), "attr" => array("class" => "fos_user_group_new")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.new.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_e08e69fc886c7050e3473e6654ba3dd9fb82f47e5dfe260aab58f8436ddf907a->leave($__internal_e08e69fc886c7050e3473e6654ba3dd9fb82f47e5dfe260aab58f8436ddf907a_prof);

        
        $__internal_264e5bea86bbe0dfbe8fe3b564864b6865efb9dbc0515d73852244d3b48bbc49->leave($__internal_264e5bea86bbe0dfbe8fe3b564864b6865efb9dbc0515d73852244d3b48bbc49_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
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

{{ form_start(form, { 'action': path('fos_user_group_new'), 'attr': { 'class': 'fos_user_group_new' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.new.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/Group/new_content.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/FOSUserBundle/views/Group/new_content.html.twig");
    }
}
