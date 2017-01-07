<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_8a6d13460ef3c2087fb6cfb5686546ca2f87f16aa7c9c08472b95e50871caf38 extends Twig_Template
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
        $__internal_aac0fe439ad0b521e2193fecddb1fd23b59348b3e1b4ed914cca2431f9e5871b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aac0fe439ad0b521e2193fecddb1fd23b59348b3e1b4ed914cca2431f9e5871b->enter($__internal_aac0fe439ad0b521e2193fecddb1fd23b59348b3e1b4ed914cca2431f9e5871b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_b31734233abdda954cbcb7a3d952f3a98b5618bd2ec94751004df8e89a098507 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b31734233abdda954cbcb7a3d952f3a98b5618bd2ec94751004df8e89a098507->enter($__internal_b31734233abdda954cbcb7a3d952f3a98b5618bd2ec94751004df8e89a098507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_aac0fe439ad0b521e2193fecddb1fd23b59348b3e1b4ed914cca2431f9e5871b->leave($__internal_aac0fe439ad0b521e2193fecddb1fd23b59348b3e1b4ed914cca2431f9e5871b_prof);

        
        $__internal_b31734233abdda954cbcb7a3d952f3a98b5618bd2ec94751004df8e89a098507->leave($__internal_b31734233abdda954cbcb7a3d952f3a98b5618bd2ec94751004df8e89a098507_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
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
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.js.twig", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
