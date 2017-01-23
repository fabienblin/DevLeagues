<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_c1e941560f03d22e1b87e9d1b52429c02122d12086ecfff58c19ab96e9d410fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_ba488b2c2822741c539206a9995745a66234028fc318c854593da0a080fb0ed4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba488b2c2822741c539206a9995745a66234028fc318c854593da0a080fb0ed4->enter($__internal_ba488b2c2822741c539206a9995745a66234028fc318c854593da0a080fb0ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_44b2354fd67d826268df8f3bae3edf71830333c799284fe5b4cb84ad76dd7e63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44b2354fd67d826268df8f3bae3edf71830333c799284fe5b4cb84ad76dd7e63->enter($__internal_44b2354fd67d826268df8f3bae3edf71830333c799284fe5b4cb84ad76dd7e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba488b2c2822741c539206a9995745a66234028fc318c854593da0a080fb0ed4->leave($__internal_ba488b2c2822741c539206a9995745a66234028fc318c854593da0a080fb0ed4_prof);

        
        $__internal_44b2354fd67d826268df8f3bae3edf71830333c799284fe5b4cb84ad76dd7e63->leave($__internal_44b2354fd67d826268df8f3bae3edf71830333c799284fe5b4cb84ad76dd7e63_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7a8d9bdcbe2d9a336c910830f594928ac466e70de343be901b2f99a4d10619c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a8d9bdcbe2d9a336c910830f594928ac466e70de343be901b2f99a4d10619c7->enter($__internal_7a8d9bdcbe2d9a336c910830f594928ac466e70de343be901b2f99a4d10619c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0ab92c0fb2b6fcdb2e285d9677b4035a0525a1787ee3de9fedae965e2ef0b390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ab92c0fb2b6fcdb2e285d9677b4035a0525a1787ee3de9fedae965e2ef0b390->enter($__internal_0ab92c0fb2b6fcdb2e285d9677b4035a0525a1787ee3de9fedae965e2ef0b390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_0ab92c0fb2b6fcdb2e285d9677b4035a0525a1787ee3de9fedae965e2ef0b390->leave($__internal_0ab92c0fb2b6fcdb2e285d9677b4035a0525a1787ee3de9fedae965e2ef0b390_prof);

        
        $__internal_7a8d9bdcbe2d9a336c910830f594928ac466e70de343be901b2f99a4d10619c7->leave($__internal_7a8d9bdcbe2d9a336c910830f594928ac466e70de343be901b2f99a4d10619c7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
