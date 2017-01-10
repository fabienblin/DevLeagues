<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_4d1d799f440e5bc293dcb0f6eeb2855cc589ee4859a2ed36bea80d3f3eda6659 extends Twig_Template
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
        $__internal_cb8290bb1869fe1f6724abeeffb5ec8bfa366ed6e3ed26edecb6366ef39a3958 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb8290bb1869fe1f6724abeeffb5ec8bfa366ed6e3ed26edecb6366ef39a3958->enter($__internal_cb8290bb1869fe1f6724abeeffb5ec8bfa366ed6e3ed26edecb6366ef39a3958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_c2f2321fec685a9a9d7a6894a95eaaae7eeb59164422128ff10a2cf50251675b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2f2321fec685a9a9d7a6894a95eaaae7eeb59164422128ff10a2cf50251675b->enter($__internal_c2f2321fec685a9a9d7a6894a95eaaae7eeb59164422128ff10a2cf50251675b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_cb8290bb1869fe1f6724abeeffb5ec8bfa366ed6e3ed26edecb6366ef39a3958->leave($__internal_cb8290bb1869fe1f6724abeeffb5ec8bfa366ed6e3ed26edecb6366ef39a3958_prof);

        
        $__internal_c2f2321fec685a9a9d7a6894a95eaaae7eeb59164422128ff10a2cf50251675b->leave($__internal_c2f2321fec685a9a9d7a6894a95eaaae7eeb59164422128ff10a2cf50251675b_prof);

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
", "@Twig/Exception/error.css.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
