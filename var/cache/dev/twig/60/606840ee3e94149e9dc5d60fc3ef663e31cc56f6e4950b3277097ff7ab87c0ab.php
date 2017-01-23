<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_8e85067c184156f818e9d0efa25dbcb28a7fa93d6dd45baadb8ba19c483126a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82f53ac2b0cd7012ebdd188a7366282f4910def3e9c1b83600d1a1c333109c71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82f53ac2b0cd7012ebdd188a7366282f4910def3e9c1b83600d1a1c333109c71->enter($__internal_82f53ac2b0cd7012ebdd188a7366282f4910def3e9c1b83600d1a1c333109c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_ba0a79775afb921a46b91052ba8af8eb00c2619c91602160ddb7e04c6165a571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba0a79775afb921a46b91052ba8af8eb00c2619c91602160ddb7e04c6165a571->enter($__internal_ba0a79775afb921a46b91052ba8af8eb00c2619c91602160ddb7e04c6165a571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82f53ac2b0cd7012ebdd188a7366282f4910def3e9c1b83600d1a1c333109c71->leave($__internal_82f53ac2b0cd7012ebdd188a7366282f4910def3e9c1b83600d1a1c333109c71_prof);

        
        $__internal_ba0a79775afb921a46b91052ba8af8eb00c2619c91602160ddb7e04c6165a571->leave($__internal_ba0a79775afb921a46b91052ba8af8eb00c2619c91602160ddb7e04c6165a571_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_240607f35c268286e6d92a14494a1683200b57c9175ab4960891c136cfa7488e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_240607f35c268286e6d92a14494a1683200b57c9175ab4960891c136cfa7488e->enter($__internal_240607f35c268286e6d92a14494a1683200b57c9175ab4960891c136cfa7488e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_847013ca51520ce9a5425c665d511cc11408852d877d56d455105efd21696a1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_847013ca51520ce9a5425c665d511cc11408852d877d56d455105efd21696a1c->enter($__internal_847013ca51520ce9a5425c665d511cc11408852d877d56d455105efd21696a1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_847013ca51520ce9a5425c665d511cc11408852d877d56d455105efd21696a1c->leave($__internal_847013ca51520ce9a5425c665d511cc11408852d877d56d455105efd21696a1c_prof);

        
        $__internal_240607f35c268286e6d92a14494a1683200b57c9175ab4960891c136cfa7488e->leave($__internal_240607f35c268286e6d92a14494a1683200b57c9175ab4960891c136cfa7488e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
