<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_ea47695e000884bf1531220a09b0f33513a150ef6e172918ec43dc57c61d44c8 extends Twig_Template
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
        $__internal_ae09dbfc6cf78e620c628eb2101cf9f7c161721ef3c7f8e70d739711b13fbcf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae09dbfc6cf78e620c628eb2101cf9f7c161721ef3c7f8e70d739711b13fbcf0->enter($__internal_ae09dbfc6cf78e620c628eb2101cf9f7c161721ef3c7f8e70d739711b13fbcf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_19ee2b9dc01aea1949fc999b24d80a4dbf565e1978707f4a47be1b9e11b5b9a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19ee2b9dc01aea1949fc999b24d80a4dbf565e1978707f4a47be1b9e11b5b9a3->enter($__internal_19ee2b9dc01aea1949fc999b24d80a4dbf565e1978707f4a47be1b9e11b5b9a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae09dbfc6cf78e620c628eb2101cf9f7c161721ef3c7f8e70d739711b13fbcf0->leave($__internal_ae09dbfc6cf78e620c628eb2101cf9f7c161721ef3c7f8e70d739711b13fbcf0_prof);

        
        $__internal_19ee2b9dc01aea1949fc999b24d80a4dbf565e1978707f4a47be1b9e11b5b9a3->leave($__internal_19ee2b9dc01aea1949fc999b24d80a4dbf565e1978707f4a47be1b9e11b5b9a3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6e5f701dc3a4787dcfefed5dbad7814d3e68a1090d97843d4379c24d7e849330 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e5f701dc3a4787dcfefed5dbad7814d3e68a1090d97843d4379c24d7e849330->enter($__internal_6e5f701dc3a4787dcfefed5dbad7814d3e68a1090d97843d4379c24d7e849330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9716d1eb3d44e8fdd2a1a84be8b4652b396d81e42bb6683e4e7083d07648ee3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9716d1eb3d44e8fdd2a1a84be8b4652b396d81e42bb6683e4e7083d07648ee3e->enter($__internal_9716d1eb3d44e8fdd2a1a84be8b4652b396d81e42bb6683e4e7083d07648ee3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_9716d1eb3d44e8fdd2a1a84be8b4652b396d81e42bb6683e4e7083d07648ee3e->leave($__internal_9716d1eb3d44e8fdd2a1a84be8b4652b396d81e42bb6683e4e7083d07648ee3e_prof);

        
        $__internal_6e5f701dc3a4787dcfefed5dbad7814d3e68a1090d97843d4379c24d7e849330->leave($__internal_6e5f701dc3a4787dcfefed5dbad7814d3e68a1090d97843d4379c24d7e849330_prof);

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
