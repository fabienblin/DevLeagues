<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_6566b441bc970deb44029f2b6439cd3290d0d6949337a008a45b79f6dd691c46 extends Twig_Template
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
        $__internal_7263e042dbcf609efb04a3643e7b2f5a15baf72ca4bfeaf7e9e9301a6c97d551 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7263e042dbcf609efb04a3643e7b2f5a15baf72ca4bfeaf7e9e9301a6c97d551->enter($__internal_7263e042dbcf609efb04a3643e7b2f5a15baf72ca4bfeaf7e9e9301a6c97d551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_4378b013022bc3e991742f1e5e89a61d2c4857a72c688a9cd76ba016cd9a3841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4378b013022bc3e991742f1e5e89a61d2c4857a72c688a9cd76ba016cd9a3841->enter($__internal_4378b013022bc3e991742f1e5e89a61d2c4857a72c688a9cd76ba016cd9a3841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_7263e042dbcf609efb04a3643e7b2f5a15baf72ca4bfeaf7e9e9301a6c97d551->leave($__internal_7263e042dbcf609efb04a3643e7b2f5a15baf72ca4bfeaf7e9e9301a6c97d551_prof);

        
        $__internal_4378b013022bc3e991742f1e5e89a61d2c4857a72c688a9cd76ba016cd9a3841->leave($__internal_4378b013022bc3e991742f1e5e89a61d2c4857a72c688a9cd76ba016cd9a3841_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
