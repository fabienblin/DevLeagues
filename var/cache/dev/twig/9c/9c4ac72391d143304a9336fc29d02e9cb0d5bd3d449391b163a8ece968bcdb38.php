<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_90983d0837e6716d81aadc064c3c6e1aa610eb6cd7b825394ff61aaf7bfe6f7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_83715258bf257a2e7a56a63a71fea52c9eaaaf48e57666106af667be5bbfe25c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83715258bf257a2e7a56a63a71fea52c9eaaaf48e57666106af667be5bbfe25c->enter($__internal_83715258bf257a2e7a56a63a71fea52c9eaaaf48e57666106af667be5bbfe25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_c9db1f110eda0ae237e110fb8e1453de864a5b41d11988aebafb3a3f806d1692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9db1f110eda0ae237e110fb8e1453de864a5b41d11988aebafb3a3f806d1692->enter($__internal_c9db1f110eda0ae237e110fb8e1453de864a5b41d11988aebafb3a3f806d1692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83715258bf257a2e7a56a63a71fea52c9eaaaf48e57666106af667be5bbfe25c->leave($__internal_83715258bf257a2e7a56a63a71fea52c9eaaaf48e57666106af667be5bbfe25c_prof);

        
        $__internal_c9db1f110eda0ae237e110fb8e1453de864a5b41d11988aebafb3a3f806d1692->leave($__internal_c9db1f110eda0ae237e110fb8e1453de864a5b41d11988aebafb3a3f806d1692_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e7cb5a584b76cde53b846ef3768b8d7f2ca2e3d82ffad135d048584441702dcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7cb5a584b76cde53b846ef3768b8d7f2ca2e3d82ffad135d048584441702dcb->enter($__internal_e7cb5a584b76cde53b846ef3768b8d7f2ca2e3d82ffad135d048584441702dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_dd4f0418b50b40fb04ea7582d338249f47ce379abb7822ed6cbb3dfd38dfb8e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd4f0418b50b40fb04ea7582d338249f47ce379abb7822ed6cbb3dfd38dfb8e7->enter($__internal_dd4f0418b50b40fb04ea7582d338249f47ce379abb7822ed6cbb3dfd38dfb8e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_dd4f0418b50b40fb04ea7582d338249f47ce379abb7822ed6cbb3dfd38dfb8e7->leave($__internal_dd4f0418b50b40fb04ea7582d338249f47ce379abb7822ed6cbb3dfd38dfb8e7_prof);

        
        $__internal_e7cb5a584b76cde53b846ef3768b8d7f2ca2e3d82ffad135d048584441702dcb->leave($__internal_e7cb5a584b76cde53b846ef3768b8d7f2ca2e3d82ffad135d048584441702dcb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
