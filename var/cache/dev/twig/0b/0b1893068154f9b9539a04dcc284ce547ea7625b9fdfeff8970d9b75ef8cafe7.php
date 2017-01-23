<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_da8cd6e727535a6a6608844f6a55a4513f8e621a4b7c6e087a22d95aece4bfb5 extends Twig_Template
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
        $__internal_7d11c705a9a606180fad9835d4ab469a96b5e9687662125f2fc3221130641a85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d11c705a9a606180fad9835d4ab469a96b5e9687662125f2fc3221130641a85->enter($__internal_7d11c705a9a606180fad9835d4ab469a96b5e9687662125f2fc3221130641a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_300676bcafecd6b73ac29a74c0c954e4ed469d05009cbd99c4c549a07ec3de69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_300676bcafecd6b73ac29a74c0c954e4ed469d05009cbd99c4c549a07ec3de69->enter($__internal_300676bcafecd6b73ac29a74c0c954e4ed469d05009cbd99c4c549a07ec3de69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_7d11c705a9a606180fad9835d4ab469a96b5e9687662125f2fc3221130641a85->leave($__internal_7d11c705a9a606180fad9835d4ab469a96b5e9687662125f2fc3221130641a85_prof);

        
        $__internal_300676bcafecd6b73ac29a74c0c954e4ed469d05009cbd99c4c549a07ec3de69->leave($__internal_300676bcafecd6b73ac29a74c0c954e4ed469d05009cbd99c4c549a07ec3de69_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
