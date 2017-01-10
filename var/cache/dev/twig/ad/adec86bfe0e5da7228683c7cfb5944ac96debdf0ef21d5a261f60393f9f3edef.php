<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_9186c188a2a3edcd40156d6de0cb58d3766dae3f775b08cc21ef9d8ba95ad794 extends Twig_Template
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
        $__internal_c467a0c5531aa16609eed6cfe83c32140b967e7ba4a0c4bd982ff2712da30ed8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c467a0c5531aa16609eed6cfe83c32140b967e7ba4a0c4bd982ff2712da30ed8->enter($__internal_c467a0c5531aa16609eed6cfe83c32140b967e7ba4a0c4bd982ff2712da30ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_e25159acb0232e27914c48f694ff8c75b53eb1a2a82d79c13a2ac54fcc62d40c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e25159acb0232e27914c48f694ff8c75b53eb1a2a82d79c13a2ac54fcc62d40c->enter($__internal_e25159acb0232e27914c48f694ff8c75b53eb1a2a82d79c13a2ac54fcc62d40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_c467a0c5531aa16609eed6cfe83c32140b967e7ba4a0c4bd982ff2712da30ed8->leave($__internal_c467a0c5531aa16609eed6cfe83c32140b967e7ba4a0c4bd982ff2712da30ed8_prof);

        
        $__internal_e25159acb0232e27914c48f694ff8c75b53eb1a2a82d79c13a2ac54fcc62d40c->leave($__internal_e25159acb0232e27914c48f694ff8c75b53eb1a2a82d79c13a2ac54fcc62d40c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
