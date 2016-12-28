<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_9e7e9431a616d8312782ac43a07b69ed7b981cf31f5b3870cf38324b5475b00f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f939f561e852af7795238001382c4dd248303583f51216508cbe9660d069113 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f939f561e852af7795238001382c4dd248303583f51216508cbe9660d069113->enter($__internal_9f939f561e852af7795238001382c4dd248303583f51216508cbe9660d069113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f939f561e852af7795238001382c4dd248303583f51216508cbe9660d069113->leave($__internal_9f939f561e852af7795238001382c4dd248303583f51216508cbe9660d069113_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_da18785ae59df7320746b06c790298463e7b47abb950d008179f3573c7163089 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da18785ae59df7320746b06c790298463e7b47abb950d008179f3573c7163089->enter($__internal_da18785ae59df7320746b06c790298463e7b47abb950d008179f3573c7163089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_da18785ae59df7320746b06c790298463e7b47abb950d008179f3573c7163089->leave($__internal_da18785ae59df7320746b06c790298463e7b47abb950d008179f3573c7163089_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Group:list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/var/www/html/devleagues/github/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
