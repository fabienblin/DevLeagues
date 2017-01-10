<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_a5f6193d8c5eb9022d5400dca5bb573f09dbd577a95bb6f4e0dfad8f91f7dc76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_79601200b36a8bf1374e357916cc352aee43cdbede3eb101ec36c214a2ebd732 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79601200b36a8bf1374e357916cc352aee43cdbede3eb101ec36c214a2ebd732->enter($__internal_79601200b36a8bf1374e357916cc352aee43cdbede3eb101ec36c214a2ebd732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_6086bd763b6c09a6543b58d2596198fed04d36db0ec5b4d77e90c34542b48e4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6086bd763b6c09a6543b58d2596198fed04d36db0ec5b4d77e90c34542b48e4c->enter($__internal_6086bd763b6c09a6543b58d2596198fed04d36db0ec5b4d77e90c34542b48e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79601200b36a8bf1374e357916cc352aee43cdbede3eb101ec36c214a2ebd732->leave($__internal_79601200b36a8bf1374e357916cc352aee43cdbede3eb101ec36c214a2ebd732_prof);

        
        $__internal_6086bd763b6c09a6543b58d2596198fed04d36db0ec5b4d77e90c34542b48e4c->leave($__internal_6086bd763b6c09a6543b58d2596198fed04d36db0ec5b4d77e90c34542b48e4c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1902132ff798a4c2e85cf39101dc7d2d63740ae3dee648df8b85022dbe3ab88a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1902132ff798a4c2e85cf39101dc7d2d63740ae3dee648df8b85022dbe3ab88a->enter($__internal_1902132ff798a4c2e85cf39101dc7d2d63740ae3dee648df8b85022dbe3ab88a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_071ca8bf9c9d69e4944f21d71c49e52ab3e4863e1ac91f3bdb5996dd0e102543 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_071ca8bf9c9d69e4944f21d71c49e52ab3e4863e1ac91f3bdb5996dd0e102543->enter($__internal_071ca8bf9c9d69e4944f21d71c49e52ab3e4863e1ac91f3bdb5996dd0e102543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_071ca8bf9c9d69e4944f21d71c49e52ab3e4863e1ac91f3bdb5996dd0e102543->leave($__internal_071ca8bf9c9d69e4944f21d71c49e52ab3e4863e1ac91f3bdb5996dd0e102543_prof);

        
        $__internal_1902132ff798a4c2e85cf39101dc7d2d63740ae3dee648df8b85022dbe3ab88a->leave($__internal_1902132ff798a4c2e85cf39101dc7d2d63740ae3dee648df8b85022dbe3ab88a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
