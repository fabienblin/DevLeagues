<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_279d23dca9b9dbda5a99a4adabfa8bb880b723a3bae11f5e3b3886c53c8d40ad extends Twig_Template
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
        $__internal_dda97b34ced26ba37a2cd21513125135b023e20d573c2ae2dea47e88da312783 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dda97b34ced26ba37a2cd21513125135b023e20d573c2ae2dea47e88da312783->enter($__internal_dda97b34ced26ba37a2cd21513125135b023e20d573c2ae2dea47e88da312783_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_57fddb6dd5e437e01a130210be605e8489c97aafd5313b7ed3372cb087b45171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57fddb6dd5e437e01a130210be605e8489c97aafd5313b7ed3372cb087b45171->enter($__internal_57fddb6dd5e437e01a130210be605e8489c97aafd5313b7ed3372cb087b45171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dda97b34ced26ba37a2cd21513125135b023e20d573c2ae2dea47e88da312783->leave($__internal_dda97b34ced26ba37a2cd21513125135b023e20d573c2ae2dea47e88da312783_prof);

        
        $__internal_57fddb6dd5e437e01a130210be605e8489c97aafd5313b7ed3372cb087b45171->leave($__internal_57fddb6dd5e437e01a130210be605e8489c97aafd5313b7ed3372cb087b45171_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_94870886739197c1c2001f192ef395fd6538166c03dec14f950cf7bf41b16028 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94870886739197c1c2001f192ef395fd6538166c03dec14f950cf7bf41b16028->enter($__internal_94870886739197c1c2001f192ef395fd6538166c03dec14f950cf7bf41b16028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2bfd7b7024337f5be5e211ddd2543033a43ef280fbda28be2c60e9025ae11d27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bfd7b7024337f5be5e211ddd2543033a43ef280fbda28be2c60e9025ae11d27->enter($__internal_2bfd7b7024337f5be5e211ddd2543033a43ef280fbda28be2c60e9025ae11d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_2bfd7b7024337f5be5e211ddd2543033a43ef280fbda28be2c60e9025ae11d27->leave($__internal_2bfd7b7024337f5be5e211ddd2543033a43ef280fbda28be2c60e9025ae11d27_prof);

        
        $__internal_94870886739197c1c2001f192ef395fd6538166c03dec14f950cf7bf41b16028->leave($__internal_94870886739197c1c2001f192ef395fd6538166c03dec14f950cf7bf41b16028_prof);

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
