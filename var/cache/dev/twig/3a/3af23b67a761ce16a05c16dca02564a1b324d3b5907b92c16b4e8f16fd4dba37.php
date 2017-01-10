<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_f863f0dbd5375403dd5db1573f97c215d06f96b4799fe10e27f86772825dcc09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_0e5b7ebf82eb9057a37b6d93c385e6043ad3d22771f600df4be3194ae3b0c54a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e5b7ebf82eb9057a37b6d93c385e6043ad3d22771f600df4be3194ae3b0c54a->enter($__internal_0e5b7ebf82eb9057a37b6d93c385e6043ad3d22771f600df4be3194ae3b0c54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_16c7800a4196e59510f4db0cea7d95eb07b9cf33c44f424b81ecff6b19feab5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16c7800a4196e59510f4db0cea7d95eb07b9cf33c44f424b81ecff6b19feab5d->enter($__internal_16c7800a4196e59510f4db0cea7d95eb07b9cf33c44f424b81ecff6b19feab5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e5b7ebf82eb9057a37b6d93c385e6043ad3d22771f600df4be3194ae3b0c54a->leave($__internal_0e5b7ebf82eb9057a37b6d93c385e6043ad3d22771f600df4be3194ae3b0c54a_prof);

        
        $__internal_16c7800a4196e59510f4db0cea7d95eb07b9cf33c44f424b81ecff6b19feab5d->leave($__internal_16c7800a4196e59510f4db0cea7d95eb07b9cf33c44f424b81ecff6b19feab5d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_28a6ce0ec4a863d52c84eba7de82c8def9b0050a92098983f42bd08a20606e88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28a6ce0ec4a863d52c84eba7de82c8def9b0050a92098983f42bd08a20606e88->enter($__internal_28a6ce0ec4a863d52c84eba7de82c8def9b0050a92098983f42bd08a20606e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d4cc05bc959b412a7e9847baf73b346fc888024dfb280b0f48eda3c90873673a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4cc05bc959b412a7e9847baf73b346fc888024dfb280b0f48eda3c90873673a->enter($__internal_d4cc05bc959b412a7e9847baf73b346fc888024dfb280b0f48eda3c90873673a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_d4cc05bc959b412a7e9847baf73b346fc888024dfb280b0f48eda3c90873673a->leave($__internal_d4cc05bc959b412a7e9847baf73b346fc888024dfb280b0f48eda3c90873673a_prof);

        
        $__internal_28a6ce0ec4a863d52c84eba7de82c8def9b0050a92098983f42bd08a20606e88->leave($__internal_28a6ce0ec4a863d52c84eba7de82c8def9b0050a92098983f42bd08a20606e88_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
