<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_80679a4beb8b8b5a0bf3831809d252f66f04fd9129c53f75f4ab359a7bec48e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_eecda6f70659cfc8b92843980438dfa9677be78fd27e751921423f0e9f962954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eecda6f70659cfc8b92843980438dfa9677be78fd27e751921423f0e9f962954->enter($__internal_eecda6f70659cfc8b92843980438dfa9677be78fd27e751921423f0e9f962954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eecda6f70659cfc8b92843980438dfa9677be78fd27e751921423f0e9f962954->leave($__internal_eecda6f70659cfc8b92843980438dfa9677be78fd27e751921423f0e9f962954_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_96cb93d3fa232cb5cb8f98e740a99080b0d85f5813f947d6e68b83dacb98e168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96cb93d3fa232cb5cb8f98e740a99080b0d85f5813f947d6e68b83dacb98e168->enter($__internal_96cb93d3fa232cb5cb8f98e740a99080b0d85f5813f947d6e68b83dacb98e168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_96cb93d3fa232cb5cb8f98e740a99080b0d85f5813f947d6e68b83dacb98e168->leave($__internal_96cb93d3fa232cb5cb8f98e740a99080b0d85f5813f947d6e68b83dacb98e168_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
{% include \"FOSUserBundle:Group:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/var/www/html/devleagues/github/app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
