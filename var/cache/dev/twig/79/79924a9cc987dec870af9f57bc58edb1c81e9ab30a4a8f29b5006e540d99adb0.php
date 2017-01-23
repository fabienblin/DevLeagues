<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_66d059e88e2c1bef7fb3f32afc58a1a45d51168f944cb02e6444622fc173d023 extends Twig_Template
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
        $__internal_0e9cc8744a3adc6a9bb3e7dcdb20020fee169fc3f851da1903409f9c88172a3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e9cc8744a3adc6a9bb3e7dcdb20020fee169fc3f851da1903409f9c88172a3e->enter($__internal_0e9cc8744a3adc6a9bb3e7dcdb20020fee169fc3f851da1903409f9c88172a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_a0cd63cbf5788e8e454888cfe0f40e7ae351ae9425e5eeafe6ddc556be0cbccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0cd63cbf5788e8e454888cfe0f40e7ae351ae9425e5eeafe6ddc556be0cbccc->enter($__internal_a0cd63cbf5788e8e454888cfe0f40e7ae351ae9425e5eeafe6ddc556be0cbccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_0e9cc8744a3adc6a9bb3e7dcdb20020fee169fc3f851da1903409f9c88172a3e->leave($__internal_0e9cc8744a3adc6a9bb3e7dcdb20020fee169fc3f851da1903409f9c88172a3e_prof);

        
        $__internal_a0cd63cbf5788e8e454888cfe0f40e7ae351ae9425e5eeafe6ddc556be0cbccc->leave($__internal_a0cd63cbf5788e8e454888cfe0f40e7ae351ae9425e5eeafe6ddc556be0cbccc_prof);

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
