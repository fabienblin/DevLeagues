<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_e092a3c753400c2e1cf959988ab306eccd77991d727c68697bf85df0eb5a6418 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_166e976890af33590250293815b4fbaca6cc6e94545c0c3c1e2f3273387ad56e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_166e976890af33590250293815b4fbaca6cc6e94545c0c3c1e2f3273387ad56e->enter($__internal_166e976890af33590250293815b4fbaca6cc6e94545c0c3c1e2f3273387ad56e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_f34bd5462d6d5b32eea5a0002e8ac1a3919fc3f5e10908ea87981eb0963e7e73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f34bd5462d6d5b32eea5a0002e8ac1a3919fc3f5e10908ea87981eb0963e7e73->enter($__internal_f34bd5462d6d5b32eea5a0002e8ac1a3919fc3f5e10908ea87981eb0963e7e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_166e976890af33590250293815b4fbaca6cc6e94545c0c3c1e2f3273387ad56e->leave($__internal_166e976890af33590250293815b4fbaca6cc6e94545c0c3c1e2f3273387ad56e_prof);

        
        $__internal_f34bd5462d6d5b32eea5a0002e8ac1a3919fc3f5e10908ea87981eb0963e7e73->leave($__internal_f34bd5462d6d5b32eea5a0002e8ac1a3919fc3f5e10908ea87981eb0963e7e73_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_808f11d3048f4bf4cea1ce7625f9fb24e050a2974643176982f6f1dd8a2ec5b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_808f11d3048f4bf4cea1ce7625f9fb24e050a2974643176982f6f1dd8a2ec5b3->enter($__internal_808f11d3048f4bf4cea1ce7625f9fb24e050a2974643176982f6f1dd8a2ec5b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_30815bc12261f8728913e0c1bd17bf13a6ac88003d36aac9238e88362c97166a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30815bc12261f8728913e0c1bd17bf13a6ac88003d36aac9238e88362c97166a->enter($__internal_30815bc12261f8728913e0c1bd17bf13a6ac88003d36aac9238e88362c97166a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_30815bc12261f8728913e0c1bd17bf13a6ac88003d36aac9238e88362c97166a->leave($__internal_30815bc12261f8728913e0c1bd17bf13a6ac88003d36aac9238e88362c97166a_prof);

        
        $__internal_808f11d3048f4bf4cea1ce7625f9fb24e050a2974643176982f6f1dd8a2ec5b3->leave($__internal_808f11d3048f4bf4cea1ce7625f9fb24e050a2974643176982f6f1dd8a2ec5b3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
