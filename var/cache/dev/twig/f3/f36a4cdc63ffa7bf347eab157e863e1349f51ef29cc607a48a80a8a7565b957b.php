<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_ac92e9ba134d2b8d57caa760ee2af156653bc8c362140149ba9d7b89891c7d51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ebf3bc876ae814b8d260d65a7cda3b97003e6d2a67f77ae9494fb4b5580e0748 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebf3bc876ae814b8d260d65a7cda3b97003e6d2a67f77ae9494fb4b5580e0748->enter($__internal_ebf3bc876ae814b8d260d65a7cda3b97003e6d2a67f77ae9494fb4b5580e0748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_36d3fa75bec172526a1244833c6f79711bc19cbd622df3d0f8cf88b85408fe0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36d3fa75bec172526a1244833c6f79711bc19cbd622df3d0f8cf88b85408fe0d->enter($__internal_36d3fa75bec172526a1244833c6f79711bc19cbd622df3d0f8cf88b85408fe0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ebf3bc876ae814b8d260d65a7cda3b97003e6d2a67f77ae9494fb4b5580e0748->leave($__internal_ebf3bc876ae814b8d260d65a7cda3b97003e6d2a67f77ae9494fb4b5580e0748_prof);

        
        $__internal_36d3fa75bec172526a1244833c6f79711bc19cbd622df3d0f8cf88b85408fe0d->leave($__internal_36d3fa75bec172526a1244833c6f79711bc19cbd622df3d0f8cf88b85408fe0d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0aaad51aaf698912e1a5e2b4c1f88327595ba812619dd915cc30ec6d0e98fdc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aaad51aaf698912e1a5e2b4c1f88327595ba812619dd915cc30ec6d0e98fdc6->enter($__internal_0aaad51aaf698912e1a5e2b4c1f88327595ba812619dd915cc30ec6d0e98fdc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_449a9ab0ee3ae03eb7993b6ddb3dc5093c96f1f46835057fea1b00c866c87d03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_449a9ab0ee3ae03eb7993b6ddb3dc5093c96f1f46835057fea1b00c866c87d03->enter($__internal_449a9ab0ee3ae03eb7993b6ddb3dc5093c96f1f46835057fea1b00c866c87d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_449a9ab0ee3ae03eb7993b6ddb3dc5093c96f1f46835057fea1b00c866c87d03->leave($__internal_449a9ab0ee3ae03eb7993b6ddb3dc5093c96f1f46835057fea1b00c866c87d03_prof);

        
        $__internal_0aaad51aaf698912e1a5e2b4c1f88327595ba812619dd915cc30ec6d0e98fdc6->leave($__internal_0aaad51aaf698912e1a5e2b4c1f88327595ba812619dd915cc30ec6d0e98fdc6_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_758caa641d61551eadec67329eeff4fcc813320c0bb9534ff56f86b06520cd29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_758caa641d61551eadec67329eeff4fcc813320c0bb9534ff56f86b06520cd29->enter($__internal_758caa641d61551eadec67329eeff4fcc813320c0bb9534ff56f86b06520cd29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_fc2b311a722107e177a9efaa0dd313111fbb96eb77d144c67e18ff0df404a513 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc2b311a722107e177a9efaa0dd313111fbb96eb77d144c67e18ff0df404a513->enter($__internal_fc2b311a722107e177a9efaa0dd313111fbb96eb77d144c67e18ff0df404a513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_fc2b311a722107e177a9efaa0dd313111fbb96eb77d144c67e18ff0df404a513->leave($__internal_fc2b311a722107e177a9efaa0dd313111fbb96eb77d144c67e18ff0df404a513_prof);

        
        $__internal_758caa641d61551eadec67329eeff4fcc813320c0bb9534ff56f86b06520cd29->leave($__internal_758caa641d61551eadec67329eeff4fcc813320c0bb9534ff56f86b06520cd29_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_0829a67a8f65b8964ec7c84f5b0ddd5805f06f3673673dcf396a28744c11a89b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0829a67a8f65b8964ec7c84f5b0ddd5805f06f3673673dcf396a28744c11a89b->enter($__internal_0829a67a8f65b8964ec7c84f5b0ddd5805f06f3673673dcf396a28744c11a89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_ef6906f6508b2086e39537548050cb255720781d99b422c093ff4ec806f9993a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef6906f6508b2086e39537548050cb255720781d99b422c093ff4ec806f9993a->enter($__internal_ef6906f6508b2086e39537548050cb255720781d99b422c093ff4ec806f9993a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ef6906f6508b2086e39537548050cb255720781d99b422c093ff4ec806f9993a->leave($__internal_ef6906f6508b2086e39537548050cb255720781d99b422c093ff4ec806f9993a_prof);

        
        $__internal_0829a67a8f65b8964ec7c84f5b0ddd5805f06f3673673dcf396a28744c11a89b->leave($__internal_0829a67a8f65b8964ec7c84f5b0ddd5805f06f3673673dcf396a28744c11a89b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
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
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
