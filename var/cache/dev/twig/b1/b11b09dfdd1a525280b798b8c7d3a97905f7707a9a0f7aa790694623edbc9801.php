<?php

/* @FOSUser/ChangePassword/change_password_content.html.twig */
class __TwigTemplate_d4b7ce1ee8c200f6b1f151c582e964744bc71dcbb452c91b82fd5361f22cecb6 extends Twig_Template
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
        $__internal_61f32b66a8f0180bb10b0f74bd90e28eb1423a0a2d8e75aaf786614247171c4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61f32b66a8f0180bb10b0f74bd90e28eb1423a0a2d8e75aaf786614247171c4d->enter($__internal_61f32b66a8f0180bb10b0f74bd90e28eb1423a0a2d8e75aaf786614247171c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password_content.html.twig"));

        $__internal_e6e3b1d0fabd2fb43ad221a38da56d0a2d5f12dcf93b0bfc7350ffe784fc4c8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6e3b1d0fabd2fb43ad221a38da56d0a2d5f12dcf93b0bfc7350ffe784fc4c8e->enter($__internal_e6e3b1d0fabd2fb43ad221a38da56d0a2d5f12dcf93b0bfc7350ffe784fc4c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password_content.html.twig"));

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
        
        $__internal_61f32b66a8f0180bb10b0f74bd90e28eb1423a0a2d8e75aaf786614247171c4d->leave($__internal_61f32b66a8f0180bb10b0f74bd90e28eb1423a0a2d8e75aaf786614247171c4d_prof);

        
        $__internal_e6e3b1d0fabd2fb43ad221a38da56d0a2d5f12dcf93b0bfc7350ffe784fc4c8e->leave($__internal_e6e3b1d0fabd2fb43ad221a38da56d0a2d5f12dcf93b0bfc7350ffe784fc4c8e_prof);

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
