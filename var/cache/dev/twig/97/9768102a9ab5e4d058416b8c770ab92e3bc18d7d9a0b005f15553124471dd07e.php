<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_2b8a6717d7f940872939ce47083ba08cc46b74fa077ae0d557ea4da7f6bbcc13 extends Twig_Template
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
        $__internal_71fd45d7ab30ad25bb49a80518d6fd1b4a1a880c48d978603f69ddc6bfef74f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71fd45d7ab30ad25bb49a80518d6fd1b4a1a880c48d978603f69ddc6bfef74f1->enter($__internal_71fd45d7ab30ad25bb49a80518d6fd1b4a1a880c48d978603f69ddc6bfef74f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_9c35f4df20ccd56a3da6d4f797c3e8205ca74ea7b4001d0e7f9eb5c284aecfc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c35f4df20ccd56a3da6d4f797c3e8205ca74ea7b4001d0e7f9eb5c284aecfc9->enter($__internal_9c35f4df20ccd56a3da6d4f797c3e8205ca74ea7b4001d0e7f9eb5c284aecfc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71fd45d7ab30ad25bb49a80518d6fd1b4a1a880c48d978603f69ddc6bfef74f1->leave($__internal_71fd45d7ab30ad25bb49a80518d6fd1b4a1a880c48d978603f69ddc6bfef74f1_prof);

        
        $__internal_9c35f4df20ccd56a3da6d4f797c3e8205ca74ea7b4001d0e7f9eb5c284aecfc9->leave($__internal_9c35f4df20ccd56a3da6d4f797c3e8205ca74ea7b4001d0e7f9eb5c284aecfc9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fc92f024bd8bf3618c359b010ee9907650d46f820d6f4cc8efa4ce8aadfc988a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc92f024bd8bf3618c359b010ee9907650d46f820d6f4cc8efa4ce8aadfc988a->enter($__internal_fc92f024bd8bf3618c359b010ee9907650d46f820d6f4cc8efa4ce8aadfc988a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b07905ac5558fe7c189f790331298cd8e337ec9768c0bd46de23b9dd8c3525b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b07905ac5558fe7c189f790331298cd8e337ec9768c0bd46de23b9dd8c3525b9->enter($__internal_b07905ac5558fe7c189f790331298cd8e337ec9768c0bd46de23b9dd8c3525b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_b07905ac5558fe7c189f790331298cd8e337ec9768c0bd46de23b9dd8c3525b9->leave($__internal_b07905ac5558fe7c189f790331298cd8e337ec9768c0bd46de23b9dd8c3525b9_prof);

        
        $__internal_fc92f024bd8bf3618c359b010ee9907650d46f820d6f4cc8efa4ce8aadfc988a->leave($__internal_fc92f024bd8bf3618c359b010ee9907650d46f820d6f4cc8efa4ce8aadfc988a_prof);

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
