<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_d64586e8d39e863bae6f00fed5fd947ea2e6c5b34c97b95bf1c4579c0efcbf09 extends Twig_Template
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
        $__internal_13157bf15a5a5e0b3ec45af2fdb8d9287b991df88bbd9787ee2a812295aa2868 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13157bf15a5a5e0b3ec45af2fdb8d9287b991df88bbd9787ee2a812295aa2868->enter($__internal_13157bf15a5a5e0b3ec45af2fdb8d9287b991df88bbd9787ee2a812295aa2868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_49e0a31f133bb04432c3e999a508f4e48cb13c0a2dd3a6bf1ba5bcc8a1848d56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49e0a31f133bb04432c3e999a508f4e48cb13c0a2dd3a6bf1ba5bcc8a1848d56->enter($__internal_49e0a31f133bb04432c3e999a508f4e48cb13c0a2dd3a6bf1ba5bcc8a1848d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13157bf15a5a5e0b3ec45af2fdb8d9287b991df88bbd9787ee2a812295aa2868->leave($__internal_13157bf15a5a5e0b3ec45af2fdb8d9287b991df88bbd9787ee2a812295aa2868_prof);

        
        $__internal_49e0a31f133bb04432c3e999a508f4e48cb13c0a2dd3a6bf1ba5bcc8a1848d56->leave($__internal_49e0a31f133bb04432c3e999a508f4e48cb13c0a2dd3a6bf1ba5bcc8a1848d56_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_421e76e88bd050e21c04b598e728fe9e33e6be9f87cccc85fb6e739a275074ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_421e76e88bd050e21c04b598e728fe9e33e6be9f87cccc85fb6e739a275074ec->enter($__internal_421e76e88bd050e21c04b598e728fe9e33e6be9f87cccc85fb6e739a275074ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5d48dad917013408dd387a9f496d8f6a00aedd5bea07a5563d23261d5f258095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d48dad917013408dd387a9f496d8f6a00aedd5bea07a5563d23261d5f258095->enter($__internal_5d48dad917013408dd387a9f496d8f6a00aedd5bea07a5563d23261d5f258095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_5d48dad917013408dd387a9f496d8f6a00aedd5bea07a5563d23261d5f258095->leave($__internal_5d48dad917013408dd387a9f496d8f6a00aedd5bea07a5563d23261d5f258095_prof);

        
        $__internal_421e76e88bd050e21c04b598e728fe9e33e6be9f87cccc85fb6e739a275074ec->leave($__internal_421e76e88bd050e21c04b598e728fe9e33e6be9f87cccc85fb6e739a275074ec_prof);

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
