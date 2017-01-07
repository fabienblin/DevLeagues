<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_58099d4763e93e831dedb436cdcb4e68eeacf27d9ee078fe1bcac9e8c275b946 extends Twig_Template
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
        $__internal_719192278c8f9d851075b9d4dffd21e4a6e66fc2913974d32d1215930e6eb764 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_719192278c8f9d851075b9d4dffd21e4a6e66fc2913974d32d1215930e6eb764->enter($__internal_719192278c8f9d851075b9d4dffd21e4a6e66fc2913974d32d1215930e6eb764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_44c13322c2443f58c0da684ebb57d7d9a0a8a80b0de0a608f09f4643d5b63f5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44c13322c2443f58c0da684ebb57d7d9a0a8a80b0de0a608f09f4643d5b63f5d->enter($__internal_44c13322c2443f58c0da684ebb57d7d9a0a8a80b0de0a608f09f4643d5b63f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_719192278c8f9d851075b9d4dffd21e4a6e66fc2913974d32d1215930e6eb764->leave($__internal_719192278c8f9d851075b9d4dffd21e4a6e66fc2913974d32d1215930e6eb764_prof);

        
        $__internal_44c13322c2443f58c0da684ebb57d7d9a0a8a80b0de0a608f09f4643d5b63f5d->leave($__internal_44c13322c2443f58c0da684ebb57d7d9a0a8a80b0de0a608f09f4643d5b63f5d_prof);

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
", "@Twig/Exception/error.txt.twig", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
