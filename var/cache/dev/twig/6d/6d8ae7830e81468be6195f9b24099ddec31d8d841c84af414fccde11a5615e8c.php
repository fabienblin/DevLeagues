<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_738f86c2c21812a23c7f323010a1f997ff01c19dd2ced1e994a7dacb55565d5c extends Twig_Template
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
        $__internal_ca0eb0234e57a20603f7c00d8f23a051aa3da551fe071b469ce2645e7cdf45db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca0eb0234e57a20603f7c00d8f23a051aa3da551fe071b469ce2645e7cdf45db->enter($__internal_ca0eb0234e57a20603f7c00d8f23a051aa3da551fe071b469ce2645e7cdf45db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_f9c69cd8a309e14ee98df90ea6773689e25dcc161a0a00826be98011a512932c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9c69cd8a309e14ee98df90ea6773689e25dcc161a0a00826be98011a512932c->enter($__internal_f9c69cd8a309e14ee98df90ea6773689e25dcc161a0a00826be98011a512932c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_ca0eb0234e57a20603f7c00d8f23a051aa3da551fe071b469ce2645e7cdf45db->leave($__internal_ca0eb0234e57a20603f7c00d8f23a051aa3da551fe071b469ce2645e7cdf45db_prof);

        
        $__internal_f9c69cd8a309e14ee98df90ea6773689e25dcc161a0a00826be98011a512932c->leave($__internal_f9c69cd8a309e14ee98df90ea6773689e25dcc161a0a00826be98011a512932c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
