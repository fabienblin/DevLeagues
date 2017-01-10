<?php

/* @SonataAdmin/CRUD/show_email.html.twig */
class __TwigTemplate_02ed65129203323d3b3a90eb2fc195f65798e015ba146d437c24b9425df24ee3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_email.html.twig", 1);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e38b436fdae86bd73e4521cd04cf47e3c46ea07187ea7772c51d6085c7fa0bd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e38b436fdae86bd73e4521cd04cf47e3c46ea07187ea7772c51d6085c7fa0bd0->enter($__internal_e38b436fdae86bd73e4521cd04cf47e3c46ea07187ea7772c51d6085c7fa0bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_email.html.twig"));

        $__internal_248620d4c7e96e505b28ab57b8b07918cfb8469096c5c9930a87686c5a9dd263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_248620d4c7e96e505b28ab57b8b07918cfb8469096c5c9930a87686c5a9dd263->enter($__internal_248620d4c7e96e505b28ab57b8b07918cfb8469096c5c9930a87686c5a9dd263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e38b436fdae86bd73e4521cd04cf47e3c46ea07187ea7772c51d6085c7fa0bd0->leave($__internal_e38b436fdae86bd73e4521cd04cf47e3c46ea07187ea7772c51d6085c7fa0bd0_prof);

        
        $__internal_248620d4c7e96e505b28ab57b8b07918cfb8469096c5c9930a87686c5a9dd263->leave($__internal_248620d4c7e96e505b28ab57b8b07918cfb8469096c5c9930a87686c5a9dd263_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_bb3790fb8b9beb853dbd61f563be2d68b625b6d399499155124485b84fce45db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb3790fb8b9beb853dbd61f563be2d68b625b6d399499155124485b84fce45db->enter($__internal_bb3790fb8b9beb853dbd61f563be2d68b625b6d399499155124485b84fce45db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_6f69ec4aa066510bbff53dd400d50191f756ee80950ac609af1a0fd49c0335a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f69ec4aa066510bbff53dd400d50191f756ee80950ac609af1a0fd49c0335a9->enter($__internal_6f69ec4aa066510bbff53dd400d50191f756ee80950ac609af1a0fd49c0335a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "@SonataAdmin/CRUD/show_email.html.twig", 4)->display($context);
        
        $__internal_6f69ec4aa066510bbff53dd400d50191f756ee80950ac609af1a0fd49c0335a9->leave($__internal_6f69ec4aa066510bbff53dd400d50191f756ee80950ac609af1a0fd49c0335a9_prof);

        
        $__internal_bb3790fb8b9beb853dbd61f563be2d68b625b6d399499155124485b84fce45db->leave($__internal_bb3790fb8b9beb853dbd61f563be2d68b625b6d399499155124485b84fce45db_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_email.html.twig";
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
        return new Twig_Source("{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% include 'SonataAdminBundle:CRUD:_email_link.html.twig' %}
{% endblock %}
", "@SonataAdmin/CRUD/show_email.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_email.html.twig");
    }
}
