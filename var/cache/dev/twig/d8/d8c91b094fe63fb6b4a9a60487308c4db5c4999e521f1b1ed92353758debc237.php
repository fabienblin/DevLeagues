<?php

/* @FOSUser/ChangePassword/change_password_content.html.twig */
class __TwigTemplate_43a6c4c5e9e379acb53ce1d1bd38c3e24086f5e658eef61ea1ca9147f9f84ac2 extends Twig_Template
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
        $__internal_027dbcd942e9044aeaae0ffe5c59b2edea660be4edd07c3a776c751799675ff9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_027dbcd942e9044aeaae0ffe5c59b2edea660be4edd07c3a776c751799675ff9->enter($__internal_027dbcd942e9044aeaae0ffe5c59b2edea660be4edd07c3a776c751799675ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password_content.html.twig"));

        $__internal_32f3cba885ad273f66617b8257c3e6bbe6f1b749918b5e6639447947f269a603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32f3cba885ad273f66617b8257c3e6bbe6f1b749918b5e6639447947f269a603->enter($__internal_32f3cba885ad273f66617b8257c3e6bbe6f1b749918b5e6639447947f269a603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_027dbcd942e9044aeaae0ffe5c59b2edea660be4edd07c3a776c751799675ff9->leave($__internal_027dbcd942e9044aeaae0ffe5c59b2edea660be4edd07c3a776c751799675ff9_prof);

        
        $__internal_32f3cba885ad273f66617b8257c3e6bbe6f1b749918b5e6639447947f269a603->leave($__internal_32f3cba885ad273f66617b8257c3e6bbe6f1b749918b5e6639447947f269a603_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'change_password.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/ChangePassword/change_password_content.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/FOSUserBundle/views/ChangePassword/change_password_content.html.twig");
    }
}
