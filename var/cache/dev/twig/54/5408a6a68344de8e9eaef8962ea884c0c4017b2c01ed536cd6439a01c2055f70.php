<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_228fc77a474580e2be30ae7c5468c80212d6aa8eef8273cfd1cb9c370cd2eadc extends Twig_Template
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
        $__internal_61ced1140fdbedcb3fd78bf589623f39d7794502eff73bc304b8bca624b5e27b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61ced1140fdbedcb3fd78bf589623f39d7794502eff73bc304b8bca624b5e27b->enter($__internal_61ced1140fdbedcb3fd78bf589623f39d7794502eff73bc304b8bca624b5e27b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_61ced1140fdbedcb3fd78bf589623f39d7794502eff73bc304b8bca624b5e27b->leave($__internal_61ced1140fdbedcb3fd78bf589623f39d7794502eff73bc304b8bca624b5e27b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_74992cce733a195e3a169696fac86fafd84c3e1260866ffd8301eb9efd1f2017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74992cce733a195e3a169696fac86fafd84c3e1260866ffd8301eb9efd1f2017->enter($__internal_74992cce733a195e3a169696fac86fafd84c3e1260866ffd8301eb9efd1f2017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_74992cce733a195e3a169696fac86fafd84c3e1260866ffd8301eb9efd1f2017->leave($__internal_74992cce733a195e3a169696fac86fafd84c3e1260866ffd8301eb9efd1f2017_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ff80a66ab6370c6e80a984d2f20eda02c98a9ccb3f3beb53061ffcad07cd4384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff80a66ab6370c6e80a984d2f20eda02c98a9ccb3f3beb53061ffcad07cd4384->enter($__internal_ff80a66ab6370c6e80a984d2f20eda02c98a9ccb3f3beb53061ffcad07cd4384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ff80a66ab6370c6e80a984d2f20eda02c98a9ccb3f3beb53061ffcad07cd4384->leave($__internal_ff80a66ab6370c6e80a984d2f20eda02c98a9ccb3f3beb53061ffcad07cd4384_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_aa8739983b93e2514ecab82a830264d31ae854b49be5767aecc832035f87620b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa8739983b93e2514ecab82a830264d31ae854b49be5767aecc832035f87620b->enter($__internal_aa8739983b93e2514ecab82a830264d31ae854b49be5767aecc832035f87620b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_aa8739983b93e2514ecab82a830264d31ae854b49be5767aecc832035f87620b->leave($__internal_aa8739983b93e2514ecab82a830264d31ae854b49be5767aecc832035f87620b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  58 => 10,  52 => 8,  45 => 4,  39 => 2,  32 => 13,  30 => 8,  27 => 7,  25 => 2,);
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
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/var/www/html/devleagues/github/app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
