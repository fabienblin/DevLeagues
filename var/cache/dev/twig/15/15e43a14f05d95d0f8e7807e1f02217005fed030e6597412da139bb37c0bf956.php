<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_0cf5c5e4902c2a8f6415994b19eecbaccc18f255dfd5c589eb9e665835c51c0b extends Twig_Template
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
        $__internal_4fef003966e94b14192486fd13ee62a9ef42369757e83e6abb721482545f7e42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fef003966e94b14192486fd13ee62a9ef42369757e83e6abb721482545f7e42->enter($__internal_4fef003966e94b14192486fd13ee62a9ef42369757e83e6abb721482545f7e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4fef003966e94b14192486fd13ee62a9ef42369757e83e6abb721482545f7e42->leave($__internal_4fef003966e94b14192486fd13ee62a9ef42369757e83e6abb721482545f7e42_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_66ed69e0680c917338f0eb982b5ea483f976811c8c1afcab1d03a222bd439d56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66ed69e0680c917338f0eb982b5ea483f976811c8c1afcab1d03a222bd439d56->enter($__internal_66ed69e0680c917338f0eb982b5ea483f976811c8c1afcab1d03a222bd439d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_66ed69e0680c917338f0eb982b5ea483f976811c8c1afcab1d03a222bd439d56->leave($__internal_66ed69e0680c917338f0eb982b5ea483f976811c8c1afcab1d03a222bd439d56_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_41079ff27e65c8495322aa719b9dd83a0ad68b9c43dc4a7d15490559f00a3d47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41079ff27e65c8495322aa719b9dd83a0ad68b9c43dc4a7d15490559f00a3d47->enter($__internal_41079ff27e65c8495322aa719b9dd83a0ad68b9c43dc4a7d15490559f00a3d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_41079ff27e65c8495322aa719b9dd83a0ad68b9c43dc4a7d15490559f00a3d47->leave($__internal_41079ff27e65c8495322aa719b9dd83a0ad68b9c43dc4a7d15490559f00a3d47_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7acb08168bb17c62f409e97fd01763f533254b57a4b00768c52d75251b79d845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7acb08168bb17c62f409e97fd01763f533254b57a4b00768c52d75251b79d845->enter($__internal_7acb08168bb17c62f409e97fd01763f533254b57a4b00768c52d75251b79d845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7acb08168bb17c62f409e97fd01763f533254b57a4b00768c52d75251b79d845->leave($__internal_7acb08168bb17c62f409e97fd01763f533254b57a4b00768c52d75251b79d845_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/var/www/html/devleagues/github/app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
