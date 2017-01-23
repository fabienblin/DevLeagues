<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_a98703077e73a5e75deffebf65a6936adf946b8f0d8a8e5ab1d967f94ed94d67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed91e3a5e9f08d4a39a6f3763f59d8478ff2e2a5c123d59d0a6e131a2ed05c1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed91e3a5e9f08d4a39a6f3763f59d8478ff2e2a5c123d59d0a6e131a2ed05c1a->enter($__internal_ed91e3a5e9f08d4a39a6f3763f59d8478ff2e2a5c123d59d0a6e131a2ed05c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_f1355fd3e18fa3b2adeafac99667495d8e3c339ea590bcaa26d5101fc5c80703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1355fd3e18fa3b2adeafac99667495d8e3c339ea590bcaa26d5101fc5c80703->enter($__internal_f1355fd3e18fa3b2adeafac99667495d8e3c339ea590bcaa26d5101fc5c80703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_ed91e3a5e9f08d4a39a6f3763f59d8478ff2e2a5c123d59d0a6e131a2ed05c1a->leave($__internal_ed91e3a5e9f08d4a39a6f3763f59d8478ff2e2a5c123d59d0a6e131a2ed05c1a_prof);

        
        $__internal_f1355fd3e18fa3b2adeafac99667495d8e3c339ea590bcaa26d5101fc5c80703->leave($__internal_f1355fd3e18fa3b2adeafac99667495d8e3c339ea590bcaa26d5101fc5c80703_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
