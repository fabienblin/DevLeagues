<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_f58b94f84a29dd2f99501798825eac0b51b5f2cf1ff7cdd3ea9336f588249904 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ad54008b85ca3547faaa2fa82f0f9d713d3bb9d2add6635cdc17275ecbc0ac69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad54008b85ca3547faaa2fa82f0f9d713d3bb9d2add6635cdc17275ecbc0ac69->enter($__internal_ad54008b85ca3547faaa2fa82f0f9d713d3bb9d2add6635cdc17275ecbc0ac69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad54008b85ca3547faaa2fa82f0f9d713d3bb9d2add6635cdc17275ecbc0ac69->leave($__internal_ad54008b85ca3547faaa2fa82f0f9d713d3bb9d2add6635cdc17275ecbc0ac69_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_17ff7485dd481f9dd5c87b2512cfbc9214c115a98b1a346576a0c94de58c55be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17ff7485dd481f9dd5c87b2512cfbc9214c115a98b1a346576a0c94de58c55be->enter($__internal_17ff7485dd481f9dd5c87b2512cfbc9214c115a98b1a346576a0c94de58c55be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_17ff7485dd481f9dd5c87b2512cfbc9214c115a98b1a346576a0c94de58c55be->leave($__internal_17ff7485dd481f9dd5c87b2512cfbc9214c115a98b1a346576a0c94de58c55be_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/var/www/html/devleagues/github/app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
