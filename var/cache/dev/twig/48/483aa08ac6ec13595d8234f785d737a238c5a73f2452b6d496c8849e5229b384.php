<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_33282755d66dfdb2a90ce28ca25c7b900563a934c29ce523923cff46d2098747 extends Twig_Template
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
        $__internal_e327ba88a47613cfa018214bba0dd81aed129b6e104b83e2e17b790dec7f5542 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e327ba88a47613cfa018214bba0dd81aed129b6e104b83e2e17b790dec7f5542->enter($__internal_e327ba88a47613cfa018214bba0dd81aed129b6e104b83e2e17b790dec7f5542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_6c038eaa8296b0a15fef1efdd05ea49c1fa78707c8aadaa7d83540cbdf9cf8ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c038eaa8296b0a15fef1efdd05ea49c1fa78707c8aadaa7d83540cbdf9cf8ce->enter($__internal_6c038eaa8296b0a15fef1efdd05ea49c1fa78707c8aadaa7d83540cbdf9cf8ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e327ba88a47613cfa018214bba0dd81aed129b6e104b83e2e17b790dec7f5542->leave($__internal_e327ba88a47613cfa018214bba0dd81aed129b6e104b83e2e17b790dec7f5542_prof);

        
        $__internal_6c038eaa8296b0a15fef1efdd05ea49c1fa78707c8aadaa7d83540cbdf9cf8ce->leave($__internal_6c038eaa8296b0a15fef1efdd05ea49c1fa78707c8aadaa7d83540cbdf9cf8ce_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aa4bc7f07b784493d3a20922483b5485139b462ceed0916bf8dd3e0a01a0ccc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa4bc7f07b784493d3a20922483b5485139b462ceed0916bf8dd3e0a01a0ccc8->enter($__internal_aa4bc7f07b784493d3a20922483b5485139b462ceed0916bf8dd3e0a01a0ccc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7543418eb23f4dc32824b5310382c6436bfea2de7d516060f266f931b3586559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7543418eb23f4dc32824b5310382c6436bfea2de7d516060f266f931b3586559->enter($__internal_7543418eb23f4dc32824b5310382c6436bfea2de7d516060f266f931b3586559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_7543418eb23f4dc32824b5310382c6436bfea2de7d516060f266f931b3586559->leave($__internal_7543418eb23f4dc32824b5310382c6436bfea2de7d516060f266f931b3586559_prof);

        
        $__internal_aa4bc7f07b784493d3a20922483b5485139b462ceed0916bf8dd3e0a01a0ccc8->leave($__internal_aa4bc7f07b784493d3a20922483b5485139b462ceed0916bf8dd3e0a01a0ccc8_prof);

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
