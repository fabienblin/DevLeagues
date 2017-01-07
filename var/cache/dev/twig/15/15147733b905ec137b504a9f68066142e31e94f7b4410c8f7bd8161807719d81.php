<?php

/* @DevLeagues/About/index.html.twig */
class __TwigTemplate_d53bc7e6af4c1b0f1fe4f57af2a40fe97d0056233828529311d882574893ad9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "@DevLeagues/About/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevLeaguesBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7821ecc3fdc39753f672552da1537c2aafacef0320b77a883aa3f350b34faa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7821ecc3fdc39753f672552da1537c2aafacef0320b77a883aa3f350b34faa8->enter($__internal_d7821ecc3fdc39753f672552da1537c2aafacef0320b77a883aa3f350b34faa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/About/index.html.twig"));

        $__internal_bb0b58478c4d54fb9692e2e1806e16a54902c0703015d21da68666614b60a678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb0b58478c4d54fb9692e2e1806e16a54902c0703015d21da68666614b60a678->enter($__internal_bb0b58478c4d54fb9692e2e1806e16a54902c0703015d21da68666614b60a678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/About/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7821ecc3fdc39753f672552da1537c2aafacef0320b77a883aa3f350b34faa8->leave($__internal_d7821ecc3fdc39753f672552da1537c2aafacef0320b77a883aa3f350b34faa8_prof);

        
        $__internal_bb0b58478c4d54fb9692e2e1806e16a54902c0703015d21da68666614b60a678->leave($__internal_bb0b58478c4d54fb9692e2e1806e16a54902c0703015d21da68666614b60a678_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e55ee8c34528c5899e011cb6a7695f495939ea75e18e00fe34611d17090e9be3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e55ee8c34528c5899e011cb6a7695f495939ea75e18e00fe34611d17090e9be3->enter($__internal_e55ee8c34528c5899e011cb6a7695f495939ea75e18e00fe34611d17090e9be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5df3e6a05ad9c0a45e4cbf7996832823714196e0d79abcfe6523755f16a5914d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5df3e6a05ad9c0a45e4cbf7996832823714196e0d79abcfe6523755f16a5914d->enter($__internal_5df3e6a05ad9c0a45e4cbf7996832823714196e0d79abcfe6523755f16a5914d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Welcome to the About:index page</h1>
";
        
        $__internal_5df3e6a05ad9c0a45e4cbf7996832823714196e0d79abcfe6523755f16a5914d->leave($__internal_5df3e6a05ad9c0a45e4cbf7996832823714196e0d79abcfe6523755f16a5914d_prof);

        
        $__internal_e55ee8c34528c5899e011cb6a7695f495939ea75e18e00fe34611d17090e9be3->leave($__internal_e55ee8c34528c5899e011cb6a7695f495939ea75e18e00fe34611d17090e9be3_prof);

    }

    public function getTemplateName()
    {
        return "@DevLeagues/About/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"DevLeaguesBundle::base.html.twig\" %}

{% block body %}
<h1>Welcome to the About:index page</h1>
{% endblock %}", "@DevLeagues/About/index.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/About/index.html.twig");
    }
}
