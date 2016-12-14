<?php

/* DevLeaguesBundle:Security:register.html.twig */
class __TwigTemplate_7e9db5d0218446906f92e518eccfe8d897bf3ad141a147adf31c7766cf886bfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'register' => array($this, 'block_register'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f6cfbe03422e4cc39c308bf23d77e30adbdefe537b324fb79ab4e7f73e5827a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f6cfbe03422e4cc39c308bf23d77e30adbdefe537b324fb79ab4e7f73e5827a->enter($__internal_2f6cfbe03422e4cc39c308bf23d77e30adbdefe537b324fb79ab4e7f73e5827a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Security:register.html.twig"));

        // line 1
        $this->displayBlock('register', $context, $blocks);
        
        $__internal_2f6cfbe03422e4cc39c308bf23d77e30adbdefe537b324fb79ab4e7f73e5827a->leave($__internal_2f6cfbe03422e4cc39c308bf23d77e30adbdefe537b324fb79ab4e7f73e5827a_prof);

    }

    public function block_register($context, array $blocks = array())
    {
        $__internal_46e1db249342330d06a6c24646d88959fd555b26102a3939a3c2a9699ee67d1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46e1db249342330d06a6c24646d88959fd555b26102a3939a3c2a9699ee67d1d->enter($__internal_46e1db249342330d06a6c24646d88959fd555b26102a3939a3c2a9699ee67d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "register"));

        // line 2
        echo "<h2>Register</h2>

";
        // line 4
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["registerForm"]) ? $context["registerForm"] : $this->getContext($context, "registerForm")), 'form_start');
        echo "
";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["registerForm"]) ? $context["registerForm"] : $this->getContext($context, "registerForm")), 'widget');
        echo "
";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["registerForm"]) ? $context["registerForm"] : $this->getContext($context, "registerForm")), 'form_end');
        echo "

";
        
        $__internal_46e1db249342330d06a6c24646d88959fd555b26102a3939a3c2a9699ee67d1d->leave($__internal_46e1db249342330d06a6c24646d88959fd555b26102a3939a3c2a9699ee67d1d_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:Security:register.html.twig";
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
        return new Twig_Source("{% block register %}
<h2>Register</h2>

{{ form_start(registerForm) }}
{{ form_widget(registerForm) }}
{{ form_end(registerForm) }}

{% endblock %}
", "DevLeaguesBundle:Security:register.html.twig", "/var/www/html/devleagues/src/DevLeaguesBundle/Resources/views/Security/register.html.twig");
    }
}
