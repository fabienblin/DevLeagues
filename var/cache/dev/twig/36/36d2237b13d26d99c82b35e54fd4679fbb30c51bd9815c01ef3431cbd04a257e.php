<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_f0b7f8cfe44c6c398fa1b7fa9625211f183c6a651aef532036558ad0594a7e6b extends Twig_Template
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
        $__internal_4eb386cc9bb0ac54a14c84e3608f7efa79d5857bcd5c6c45a68aa3726111fe7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eb386cc9bb0ac54a14c84e3608f7efa79d5857bcd5c6c45a68aa3726111fe7a->enter($__internal_4eb386cc9bb0ac54a14c84e3608f7efa79d5857bcd5c6c45a68aa3726111fe7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_4eb386cc9bb0ac54a14c84e3608f7efa79d5857bcd5c6c45a68aa3726111fe7a->leave($__internal_4eb386cc9bb0ac54a14c84e3608f7efa79d5857bcd5c6c45a68aa3726111fe7a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
