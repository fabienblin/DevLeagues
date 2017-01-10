<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_58eefe164cf206a9dc73b9cb2d7e43988e2535477941f028e2f98fd0f2c1a2f8 extends Twig_Template
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
        $__internal_a45bb1967f57c08e2f268f4d12b574013eebac3fd026df402a2d1c57a4f26be3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a45bb1967f57c08e2f268f4d12b574013eebac3fd026df402a2d1c57a4f26be3->enter($__internal_a45bb1967f57c08e2f268f4d12b574013eebac3fd026df402a2d1c57a4f26be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_84fb12cb71a177d92a309941e1a027fc685ddb4d1f5105e50dedcba8793c0c69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84fb12cb71a177d92a309941e1a027fc685ddb4d1f5105e50dedcba8793c0c69->enter($__internal_84fb12cb71a177d92a309941e1a027fc685ddb4d1f5105e50dedcba8793c0c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_a45bb1967f57c08e2f268f4d12b574013eebac3fd026df402a2d1c57a4f26be3->leave($__internal_a45bb1967f57c08e2f268f4d12b574013eebac3fd026df402a2d1c57a4f26be3_prof);

        
        $__internal_84fb12cb71a177d92a309941e1a027fc685ddb4d1f5105e50dedcba8793c0c69->leave($__internal_84fb12cb71a177d92a309941e1a027fc685ddb4d1f5105e50dedcba8793c0c69_prof);

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
