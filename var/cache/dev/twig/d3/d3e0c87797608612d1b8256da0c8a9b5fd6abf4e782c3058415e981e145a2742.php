<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_468181e92605e11ffb9976b71f03c0cf06eec6035a02e74f48668429aed1fd17 extends Twig_Template
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
        $__internal_967a90e8ccfe5871db14dc0c288b4a8420fb8180e5b27280c590dd42ff7548c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_967a90e8ccfe5871db14dc0c288b4a8420fb8180e5b27280c590dd42ff7548c0->enter($__internal_967a90e8ccfe5871db14dc0c288b4a8420fb8180e5b27280c590dd42ff7548c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_f4d32347993e6fa34fa7718664fffba8dded82d800350dae0fa164f88fe67916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4d32347993e6fa34fa7718664fffba8dded82d800350dae0fa164f88fe67916->enter($__internal_f4d32347993e6fa34fa7718664fffba8dded82d800350dae0fa164f88fe67916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_967a90e8ccfe5871db14dc0c288b4a8420fb8180e5b27280c590dd42ff7548c0->leave($__internal_967a90e8ccfe5871db14dc0c288b4a8420fb8180e5b27280c590dd42ff7548c0_prof);

        
        $__internal_f4d32347993e6fa34fa7718664fffba8dded82d800350dae0fa164f88fe67916->leave($__internal_f4d32347993e6fa34fa7718664fffba8dded82d800350dae0fa164f88fe67916_prof);

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
