<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_2bbe0dac4b06cdc8bc5dec3426a014c7bcbdd91b2ade5a624ba4c856110227d4 extends Twig_Template
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
        $__internal_43f3987c73f26071f21bd26c3d3dbb984e90040b4cef91bd21605111a94cf390 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43f3987c73f26071f21bd26c3d3dbb984e90040b4cef91bd21605111a94cf390->enter($__internal_43f3987c73f26071f21bd26c3d3dbb984e90040b4cef91bd21605111a94cf390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_47acd0699beaede0cdef67e6b829093a95022f1fb15cb45a7ac1256116a6dc10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47acd0699beaede0cdef67e6b829093a95022f1fb15cb45a7ac1256116a6dc10->enter($__internal_47acd0699beaede0cdef67e6b829093a95022f1fb15cb45a7ac1256116a6dc10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_43f3987c73f26071f21bd26c3d3dbb984e90040b4cef91bd21605111a94cf390->leave($__internal_43f3987c73f26071f21bd26c3d3dbb984e90040b4cef91bd21605111a94cf390_prof);

        
        $__internal_47acd0699beaede0cdef67e6b829093a95022f1fb15cb45a7ac1256116a6dc10->leave($__internal_47acd0699beaede0cdef67e6b829093a95022f1fb15cb45a7ac1256116a6dc10_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
