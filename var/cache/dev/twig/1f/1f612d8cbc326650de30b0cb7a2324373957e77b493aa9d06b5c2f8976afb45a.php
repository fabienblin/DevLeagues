<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_9a8efbd96357ff8160c359987d646b2167883632a539e5f30924f4000cf56108 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_c3435800670c1376e0241cd1d0ac0c88db1f25328da8dbf2041d3ed71924db7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3435800670c1376e0241cd1d0ac0c88db1f25328da8dbf2041d3ed71924db7a->enter($__internal_c3435800670c1376e0241cd1d0ac0c88db1f25328da8dbf2041d3ed71924db7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_e3a086c32f3d73b04dfc4a3dae9d8d5ed08079a2b4bd79f5d6e5d5de127d6c6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3a086c32f3d73b04dfc4a3dae9d8d5ed08079a2b4bd79f5d6e5d5de127d6c6e->enter($__internal_e3a086c32f3d73b04dfc4a3dae9d8d5ed08079a2b4bd79f5d6e5d5de127d6c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3435800670c1376e0241cd1d0ac0c88db1f25328da8dbf2041d3ed71924db7a->leave($__internal_c3435800670c1376e0241cd1d0ac0c88db1f25328da8dbf2041d3ed71924db7a_prof);

        
        $__internal_e3a086c32f3d73b04dfc4a3dae9d8d5ed08079a2b4bd79f5d6e5d5de127d6c6e->leave($__internal_e3a086c32f3d73b04dfc4a3dae9d8d5ed08079a2b4bd79f5d6e5d5de127d6c6e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_44b388926167fcca9c16e7d789b4575c0878055239190b11ea21a6bdca703445 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44b388926167fcca9c16e7d789b4575c0878055239190b11ea21a6bdca703445->enter($__internal_44b388926167fcca9c16e7d789b4575c0878055239190b11ea21a6bdca703445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c5fc4dca87edaf0a108c365c3cd8b351cc98728447b9ff377e47fa92f4c9cd12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5fc4dca87edaf0a108c365c3cd8b351cc98728447b9ff377e47fa92f4c9cd12->enter($__internal_c5fc4dca87edaf0a108c365c3cd8b351cc98728447b9ff377e47fa92f4c9cd12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_c5fc4dca87edaf0a108c365c3cd8b351cc98728447b9ff377e47fa92f4c9cd12->leave($__internal_c5fc4dca87edaf0a108c365c3cd8b351cc98728447b9ff377e47fa92f4c9cd12_prof);

        
        $__internal_44b388926167fcca9c16e7d789b4575c0878055239190b11ea21a6bdca703445->leave($__internal_44b388926167fcca9c16e7d789b4575c0878055239190b11ea21a6bdca703445_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
