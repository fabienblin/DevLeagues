<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_bc6c809a37ffb894c13e23051dcd0411ece390f0c3af6453be7c730d24d3731a extends Twig_Template
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
        $__internal_6cbcd7bdf7dd50ab1916ea7a147aab6739e2ee73cda0b28fb6812d9dc679c819 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cbcd7bdf7dd50ab1916ea7a147aab6739e2ee73cda0b28fb6812d9dc679c819->enter($__internal_6cbcd7bdf7dd50ab1916ea7a147aab6739e2ee73cda0b28fb6812d9dc679c819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_6cbcd7bdf7dd50ab1916ea7a147aab6739e2ee73cda0b28fb6812d9dc679c819->leave($__internal_6cbcd7bdf7dd50ab1916ea7a147aab6739e2ee73cda0b28fb6812d9dc679c819_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
