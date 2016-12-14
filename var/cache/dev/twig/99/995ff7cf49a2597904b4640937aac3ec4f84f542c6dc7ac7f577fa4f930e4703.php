<?php

/* DevLeaguesBundle:Security:login.html.twig */
class __TwigTemplate_e1b24620c70442519434ea30ca9ad07d732b05960142961cf3ac82297f85957e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'login' => array($this, 'block_login'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_811bbf4044e9f067a9bb89b856badc26b067d85f0f5da07d906aee1d22a71bb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_811bbf4044e9f067a9bb89b856badc26b067d85f0f5da07d906aee1d22a71bb0->enter($__internal_811bbf4044e9f067a9bb89b856badc26b067d85f0f5da07d906aee1d22a71bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Security:login.html.twig"));

        // line 1
        $this->displayBlock('login', $context, $blocks);
        
        $__internal_811bbf4044e9f067a9bb89b856badc26b067d85f0f5da07d906aee1d22a71bb0->leave($__internal_811bbf4044e9f067a9bb89b856badc26b067d85f0f5da07d906aee1d22a71bb0_prof);

    }

    public function block_login($context, array $blocks = array())
    {
        $__internal_533fa9dd89a337d2f7794cd0edd00784db8b16baff0f574763b714e5bdd60cbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_533fa9dd89a337d2f7794cd0edd00784db8b16baff0f574763b714e5bdd60cbb->enter($__internal_533fa9dd89a337d2f7794cd0edd00784db8b16baff0f574763b714e5bdd60cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "login"));

        // line 2
        echo "<h2>Login</h2>

";
        // line 4
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["loginForm"]) ? $context["loginForm"] : $this->getContext($context, "loginForm")), 'form_start');
        echo "
";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["loginForm"]) ? $context["loginForm"] : $this->getContext($context, "loginForm")), 'widget');
        echo "
";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["loginForm"]) ? $context["loginForm"] : $this->getContext($context, "loginForm")), 'form_end');
        echo "

";
        
        $__internal_533fa9dd89a337d2f7794cd0edd00784db8b16baff0f574763b714e5bdd60cbb->leave($__internal_533fa9dd89a337d2f7794cd0edd00784db8b16baff0f574763b714e5bdd60cbb_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:Security:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  47 => 6,  43 => 5,  39 => 4,  35 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block login %}
<h2>Login</h2>

{{ form_start(loginForm) }}
{{ form_widget(loginForm) }}
{{ form_end(loginForm) }}

{% endblock %}
", "DevLeaguesBundle:Security:login.html.twig", "/var/www/html/devleagues/src/DevLeaguesBundle/Resources/views/Security/login.html.twig");
    }
}
