<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_cc782b5d97492d35271efade38aaed4d70d28dd608a09488ee22c3bc703ad68a extends Twig_Template
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
        $__internal_e61e98b9cd4672bdca13dea774034acf58d3ed5de774e21fe636e1cdbf8d5d6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e61e98b9cd4672bdca13dea774034acf58d3ed5de774e21fe636e1cdbf8d5d6a->enter($__internal_e61e98b9cd4672bdca13dea774034acf58d3ed5de774e21fe636e1cdbf8d5d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_913344cf01a8b6ac604607b833cc487077ed582344a4256cf828707f224af7b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_913344cf01a8b6ac604607b833cc487077ed582344a4256cf828707f224af7b6->enter($__internal_913344cf01a8b6ac604607b833cc487077ed582344a4256cf828707f224af7b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_e61e98b9cd4672bdca13dea774034acf58d3ed5de774e21fe636e1cdbf8d5d6a->leave($__internal_e61e98b9cd4672bdca13dea774034acf58d3ed5de774e21fe636e1cdbf8d5d6a_prof);

        
        $__internal_913344cf01a8b6ac604607b833cc487077ed582344a4256cf828707f224af7b6->leave($__internal_913344cf01a8b6ac604607b833cc487077ed582344a4256cf828707f224af7b6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
