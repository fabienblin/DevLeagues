<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_d8ada1bc874bbc5601a3956f0438b32c47fda0bea55e4700bfc694ce242f5dbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_ea79844d87a87cf968ec14ee679719534d3a2912bebcbfce9693099c09ecd9e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea79844d87a87cf968ec14ee679719534d3a2912bebcbfce9693099c09ecd9e9->enter($__internal_ea79844d87a87cf968ec14ee679719534d3a2912bebcbfce9693099c09ecd9e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea79844d87a87cf968ec14ee679719534d3a2912bebcbfce9693099c09ecd9e9->leave($__internal_ea79844d87a87cf968ec14ee679719534d3a2912bebcbfce9693099c09ecd9e9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9ce67066d1f9941d0cf279a3b3c76f90a0634067231e52f462bfecd5354e2933 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ce67066d1f9941d0cf279a3b3c76f90a0634067231e52f462bfecd5354e2933->enter($__internal_9ce67066d1f9941d0cf279a3b3c76f90a0634067231e52f462bfecd5354e2933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_9ce67066d1f9941d0cf279a3b3c76f90a0634067231e52f462bfecd5354e2933->leave($__internal_9ce67066d1f9941d0cf279a3b3c76f90a0634067231e52f462bfecd5354e2933_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/var/www/html/devleagues/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
