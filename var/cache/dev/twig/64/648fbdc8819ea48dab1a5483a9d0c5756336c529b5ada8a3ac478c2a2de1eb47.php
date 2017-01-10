<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_a33e125e8a4e193852a20415b3ae16b7e478fe3befdd69f8a23538d394e9ee84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_0f1baf078c7f5bfefb4afabd600ef72b0cea74b1dfe99ab6c5282fa9035ca3b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f1baf078c7f5bfefb4afabd600ef72b0cea74b1dfe99ab6c5282fa9035ca3b1->enter($__internal_0f1baf078c7f5bfefb4afabd600ef72b0cea74b1dfe99ab6c5282fa9035ca3b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_e199fdfe876a9c70ccda24f5be70f57021fafb0cb86c55a312d952bd07dfb716 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e199fdfe876a9c70ccda24f5be70f57021fafb0cb86c55a312d952bd07dfb716->enter($__internal_e199fdfe876a9c70ccda24f5be70f57021fafb0cb86c55a312d952bd07dfb716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f1baf078c7f5bfefb4afabd600ef72b0cea74b1dfe99ab6c5282fa9035ca3b1->leave($__internal_0f1baf078c7f5bfefb4afabd600ef72b0cea74b1dfe99ab6c5282fa9035ca3b1_prof);

        
        $__internal_e199fdfe876a9c70ccda24f5be70f57021fafb0cb86c55a312d952bd07dfb716->leave($__internal_e199fdfe876a9c70ccda24f5be70f57021fafb0cb86c55a312d952bd07dfb716_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9a66b348c66fb98cd0067252017618aaaa0f1feda4b42cd73e73c31fcdbe6393 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a66b348c66fb98cd0067252017618aaaa0f1feda4b42cd73e73c31fcdbe6393->enter($__internal_9a66b348c66fb98cd0067252017618aaaa0f1feda4b42cd73e73c31fcdbe6393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e8f92c66227dd153d19ec56b4364cf31bdabdaa2b6994cbbca60287d00e04525 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8f92c66227dd153d19ec56b4364cf31bdabdaa2b6994cbbca60287d00e04525->enter($__internal_e8f92c66227dd153d19ec56b4364cf31bdabdaa2b6994cbbca60287d00e04525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_e8f92c66227dd153d19ec56b4364cf31bdabdaa2b6994cbbca60287d00e04525->leave($__internal_e8f92c66227dd153d19ec56b4364cf31bdabdaa2b6994cbbca60287d00e04525_prof);

        
        $__internal_9a66b348c66fb98cd0067252017618aaaa0f1feda4b42cd73e73c31fcdbe6393->leave($__internal_9a66b348c66fb98cd0067252017618aaaa0f1feda4b42cd73e73c31fcdbe6393_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
