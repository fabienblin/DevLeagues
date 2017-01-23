<?php

/* @SonataAdmin/CRUD/show_email.html.twig */
class __TwigTemplate_fa3f9c9d7bfc4c157047314048887ac90c90fac823d0b6604f9302bfbd445660 extends Twig_Template
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
        $__internal_34cdcbba598a6f911848ab85eba59ed25c27c93cf9ed9687f6f294069b130944 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34cdcbba598a6f911848ab85eba59ed25c27c93cf9ed9687f6f294069b130944->enter($__internal_34cdcbba598a6f911848ab85eba59ed25c27c93cf9ed9687f6f294069b130944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_email.html.twig"));

        $__internal_4216e3f85473eb3c6f08d11eecdf049f9cbc7cbf626f3c13e438c8ed8058daef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4216e3f85473eb3c6f08d11eecdf049f9cbc7cbf626f3c13e438c8ed8058daef->enter($__internal_4216e3f85473eb3c6f08d11eecdf049f9cbc7cbf626f3c13e438c8ed8058daef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34cdcbba598a6f911848ab85eba59ed25c27c93cf9ed9687f6f294069b130944->leave($__internal_34cdcbba598a6f911848ab85eba59ed25c27c93cf9ed9687f6f294069b130944_prof);

        
        $__internal_4216e3f85473eb3c6f08d11eecdf049f9cbc7cbf626f3c13e438c8ed8058daef->leave($__internal_4216e3f85473eb3c6f08d11eecdf049f9cbc7cbf626f3c13e438c8ed8058daef_prof);

    }

    // line 3
    public function block_field($context, array $blocks = array())
    {
        $__internal_0cd652277b842c55572669cce0afe88ea9e4d561759f5f0a066d9fd0c1ec0b3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cd652277b842c55572669cce0afe88ea9e4d561759f5f0a066d9fd0c1ec0b3a->enter($__internal_0cd652277b842c55572669cce0afe88ea9e4d561759f5f0a066d9fd0c1ec0b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_d788ed607c883d91252047b2cfaa7983c0ff16fc2d09db3c4916150f0c9c5efc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d788ed607c883d91252047b2cfaa7983c0ff16fc2d09db3c4916150f0c9c5efc->enter($__internal_d788ed607c883d91252047b2cfaa7983c0ff16fc2d09db3c4916150f0c9c5efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 4
        echo "    ";
        $this->loadTemplate("SonataAdminBundle:CRUD:_email_link.html.twig", "@SonataAdmin/CRUD/show_email.html.twig", 4)->display($context);
        
        $__internal_d788ed607c883d91252047b2cfaa7983c0ff16fc2d09db3c4916150f0c9c5efc->leave($__internal_d788ed607c883d91252047b2cfaa7983c0ff16fc2d09db3c4916150f0c9c5efc_prof);

        
        $__internal_0cd652277b842c55572669cce0afe88ea9e4d561759f5f0a066d9fd0c1ec0b3a->leave($__internal_0cd652277b842c55572669cce0afe88ea9e4d561759f5f0a066d9fd0c1ec0b3a_prof);

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
