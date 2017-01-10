<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_78bf331685ddbca7da9233cbae85b1a0024ba308277d81c9bd191ce0e30978bc extends Twig_Template
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
        $__internal_c20f40b69671842f18e64d3b5b3a247296aee2f72c593b5f177d947c03adc5d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c20f40b69671842f18e64d3b5b3a247296aee2f72c593b5f177d947c03adc5d1->enter($__internal_c20f40b69671842f18e64d3b5b3a247296aee2f72c593b5f177d947c03adc5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_66f1a1251aa7b7f117ba445298c83c8c83f6a234b12fc216d27bf278b5b1fb0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66f1a1251aa7b7f117ba445298c83c8c83f6a234b12fc216d27bf278b5b1fb0b->enter($__internal_66f1a1251aa7b7f117ba445298c83c8c83f6a234b12fc216d27bf278b5b1fb0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_c20f40b69671842f18e64d3b5b3a247296aee2f72c593b5f177d947c03adc5d1->leave($__internal_c20f40b69671842f18e64d3b5b3a247296aee2f72c593b5f177d947c03adc5d1_prof);

        
        $__internal_66f1a1251aa7b7f117ba445298c83c8c83f6a234b12fc216d27bf278b5b1fb0b->leave($__internal_66f1a1251aa7b7f117ba445298c83c8c83f6a234b12fc216d27bf278b5b1fb0b_prof);

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
", "@Twig/Exception/error.js.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
