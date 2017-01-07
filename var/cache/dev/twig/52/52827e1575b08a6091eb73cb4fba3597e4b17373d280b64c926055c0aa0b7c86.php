<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_655726354a313f0c94c98a011bdca54ffcf04cdb6c214bfb6ff30e3194447ed9 extends Twig_Template
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
        $__internal_0c540176e49ecb7a239125789189c7e1af54d6f48b36d4df81cf9614f92fe569 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c540176e49ecb7a239125789189c7e1af54d6f48b36d4df81cf9614f92fe569->enter($__internal_0c540176e49ecb7a239125789189c7e1af54d6f48b36d4df81cf9614f92fe569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_e5332d0f80564e1649a4a67d035e24517f3aeae95e51c54a98b6c95b9b64edc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5332d0f80564e1649a4a67d035e24517f3aeae95e51c54a98b6c95b9b64edc4->enter($__internal_e5332d0f80564e1649a4a67d035e24517f3aeae95e51c54a98b6c95b9b64edc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_0c540176e49ecb7a239125789189c7e1af54d6f48b36d4df81cf9614f92fe569->leave($__internal_0c540176e49ecb7a239125789189c7e1af54d6f48b36d4df81cf9614f92fe569_prof);

        
        $__internal_e5332d0f80564e1649a4a67d035e24517f3aeae95e51c54a98b6c95b9b64edc4->leave($__internal_e5332d0f80564e1649a4a67d035e24517f3aeae95e51c54a98b6c95b9b64edc4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
