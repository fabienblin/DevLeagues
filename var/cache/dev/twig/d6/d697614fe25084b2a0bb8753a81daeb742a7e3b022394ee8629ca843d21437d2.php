<?php

/* @DevLeagues/Contact/index.html.twig */
class __TwigTemplate_d96ea59fa3af6ea4b32881bf4a5fc38ae916c49aaad345a552ee2d7ed089bd67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "@DevLeagues/Contact/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevLeaguesBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30cf8b44ec681de88717913f4318a0f7244a58178bf0c69815c3f4aeb4adc491 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30cf8b44ec681de88717913f4318a0f7244a58178bf0c69815c3f4aeb4adc491->enter($__internal_30cf8b44ec681de88717913f4318a0f7244a58178bf0c69815c3f4aeb4adc491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Contact/index.html.twig"));

        $__internal_9742bb32ff7a96d0fef36054f48283934ddea006d53c5164b173619e3f1f8ee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9742bb32ff7a96d0fef36054f48283934ddea006d53c5164b173619e3f1f8ee9->enter($__internal_9742bb32ff7a96d0fef36054f48283934ddea006d53c5164b173619e3f1f8ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Contact/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30cf8b44ec681de88717913f4318a0f7244a58178bf0c69815c3f4aeb4adc491->leave($__internal_30cf8b44ec681de88717913f4318a0f7244a58178bf0c69815c3f4aeb4adc491_prof);

        
        $__internal_9742bb32ff7a96d0fef36054f48283934ddea006d53c5164b173619e3f1f8ee9->leave($__internal_9742bb32ff7a96d0fef36054f48283934ddea006d53c5164b173619e3f1f8ee9_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e91aa2d75b38b7f7874304072257896aaa758d7432747fc49010826a2338916 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e91aa2d75b38b7f7874304072257896aaa758d7432747fc49010826a2338916->enter($__internal_7e91aa2d75b38b7f7874304072257896aaa758d7432747fc49010826a2338916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f13a284353ba496591aec8bf2b1e2bfbad495c7532bbd9de349877ab4add486f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f13a284353ba496591aec8bf2b1e2bfbad495c7532bbd9de349877ab4add486f->enter($__internal_f13a284353ba496591aec8bf2b1e2bfbad495c7532bbd9de349877ab4add486f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<h1>Welcome to the Contact:index page</h1>
";
        
        $__internal_f13a284353ba496591aec8bf2b1e2bfbad495c7532bbd9de349877ab4add486f->leave($__internal_f13a284353ba496591aec8bf2b1e2bfbad495c7532bbd9de349877ab4add486f_prof);

        
        $__internal_7e91aa2d75b38b7f7874304072257896aaa758d7432747fc49010826a2338916->leave($__internal_7e91aa2d75b38b7f7874304072257896aaa758d7432747fc49010826a2338916_prof);

    }

    public function getTemplateName()
    {
        return "@DevLeagues/Contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  40 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"DevLeaguesBundle::base.html.twig\" %}


{% block body %}
<h1>Welcome to the Contact:index page</h1>
{% endblock %}
", "@DevLeagues/Contact/index.html.twig", "/home/webmaster/www/public_html/DevLeagues/src/DevLeaguesBundle/Resources/views/Contact/index.html.twig");
    }
}
