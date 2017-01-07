<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_2572d8f6ee08b265b5c995f79da64cb3fafe561bb79bc2fcd00483a7dcb077c3 extends Twig_Template
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
        $__internal_d78af601e962d84f99c8d773530786d1bbcc5b2eac76cd490491834e61ab564d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d78af601e962d84f99c8d773530786d1bbcc5b2eac76cd490491834e61ab564d->enter($__internal_d78af601e962d84f99c8d773530786d1bbcc5b2eac76cd490491834e61ab564d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_c7e033b7f54d16b002936e8f709f9b3a46434532bd68cd6c249554c469b81c9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7e033b7f54d16b002936e8f709f9b3a46434532bd68cd6c249554c469b81c9f->enter($__internal_c7e033b7f54d16b002936e8f709f9b3a46434532bd68cd6c249554c469b81c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_d78af601e962d84f99c8d773530786d1bbcc5b2eac76cd490491834e61ab564d->leave($__internal_d78af601e962d84f99c8d773530786d1bbcc5b2eac76cd490491834e61ab564d_prof);

        
        $__internal_c7e033b7f54d16b002936e8f709f9b3a46434532bd68cd6c249554c469b81c9f->leave($__internal_c7e033b7f54d16b002936e8f709f9b3a46434532bd68cd6c249554c469b81c9f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
