<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_0a3629a0938e3e9094f256ab05f5d5dd01b0cdcb8e875adb9fdf8098f239dbcd extends Twig_Template
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
        $__internal_3b75a82553b765f38a369404aabff84f643d9525ba5c4c6a8fa2d3141e1a0684 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b75a82553b765f38a369404aabff84f643d9525ba5c4c6a8fa2d3141e1a0684->enter($__internal_3b75a82553b765f38a369404aabff84f643d9525ba5c4c6a8fa2d3141e1a0684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_546ac69c8609b70334acaf8311e60706591db64ff8725ae66c921a2aeeab889f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_546ac69c8609b70334acaf8311e60706591db64ff8725ae66c921a2aeeab889f->enter($__internal_546ac69c8609b70334acaf8311e60706591db64ff8725ae66c921a2aeeab889f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_3b75a82553b765f38a369404aabff84f643d9525ba5c4c6a8fa2d3141e1a0684->leave($__internal_3b75a82553b765f38a369404aabff84f643d9525ba5c4c6a8fa2d3141e1a0684_prof);

        
        $__internal_546ac69c8609b70334acaf8311e60706591db64ff8725ae66c921a2aeeab889f->leave($__internal_546ac69c8609b70334acaf8311e60706591db64ff8725ae66c921a2aeeab889f_prof);

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
", "@Twig/Exception/error.atom.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
