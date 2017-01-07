<?php

/* DevLeaguesBundle:About:index.html.twig */
class __TwigTemplate_ec945f06983821253513fb067e3c88eb41c0db1b44fab39b28bcf72ea9364d90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "DevLeaguesBundle:About:index.html.twig", 1);
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
        $__internal_4d1f8b4c9a0ef3488a771022a3e53769a4a5d7f503d287e91f04d9cb3e4fe1f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d1f8b4c9a0ef3488a771022a3e53769a4a5d7f503d287e91f04d9cb3e4fe1f9->enter($__internal_4d1f8b4c9a0ef3488a771022a3e53769a4a5d7f503d287e91f04d9cb3e4fe1f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:About:index.html.twig"));

        $__internal_567f15413c893c574ed19509dfd055a05c075f7970ed809ead2e53df1e9786cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_567f15413c893c574ed19509dfd055a05c075f7970ed809ead2e53df1e9786cf->enter($__internal_567f15413c893c574ed19509dfd055a05c075f7970ed809ead2e53df1e9786cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:About:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d1f8b4c9a0ef3488a771022a3e53769a4a5d7f503d287e91f04d9cb3e4fe1f9->leave($__internal_4d1f8b4c9a0ef3488a771022a3e53769a4a5d7f503d287e91f04d9cb3e4fe1f9_prof);

        
        $__internal_567f15413c893c574ed19509dfd055a05c075f7970ed809ead2e53df1e9786cf->leave($__internal_567f15413c893c574ed19509dfd055a05c075f7970ed809ead2e53df1e9786cf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3341f90e78ea165df4f4057e5d4366dce521e4486a21103dc8f7676ae888bec8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3341f90e78ea165df4f4057e5d4366dce521e4486a21103dc8f7676ae888bec8->enter($__internal_3341f90e78ea165df4f4057e5d4366dce521e4486a21103dc8f7676ae888bec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_25df1806c0f7b423651f82f68049498919d8b9e7bb025fe9a8bd865d82cbe65b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25df1806c0f7b423651f82f68049498919d8b9e7bb025fe9a8bd865d82cbe65b->enter($__internal_25df1806c0f7b423651f82f68049498919d8b9e7bb025fe9a8bd865d82cbe65b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Welcome to the About:index page</h1>
";
        
        $__internal_25df1806c0f7b423651f82f68049498919d8b9e7bb025fe9a8bd865d82cbe65b->leave($__internal_25df1806c0f7b423651f82f68049498919d8b9e7bb025fe9a8bd865d82cbe65b_prof);

        
        $__internal_3341f90e78ea165df4f4057e5d4366dce521e4486a21103dc8f7676ae888bec8->leave($__internal_3341f90e78ea165df4f4057e5d4366dce521e4486a21103dc8f7676ae888bec8_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:About:index.html.twig";
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
{% endblock %}", "DevLeaguesBundle:About:index.html.twig", "/home/ubuntu/workspace/DevLeagues/src/DevLeaguesBundle/Resources/views/About/index.html.twig");
    }
}
