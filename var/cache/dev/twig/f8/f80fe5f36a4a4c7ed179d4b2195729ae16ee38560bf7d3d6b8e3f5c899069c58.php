<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_7fd22ec2be9da69a379fb512cc694cb4abfbdc7e845b870e2ddeb87abf3aa911 extends Twig_Template
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
        $__internal_73c7a4acc3a2ad5bef6f890c8d92893f728ae8fd8c31ad986291b80d912d8fa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73c7a4acc3a2ad5bef6f890c8d92893f728ae8fd8c31ad986291b80d912d8fa6->enter($__internal_73c7a4acc3a2ad5bef6f890c8d92893f728ae8fd8c31ad986291b80d912d8fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_79b4f5e2c2c3004d8de01b527fead0396e365b665266b350d05a81dd6dee418e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79b4f5e2c2c3004d8de01b527fead0396e365b665266b350d05a81dd6dee418e->enter($__internal_79b4f5e2c2c3004d8de01b527fead0396e365b665266b350d05a81dd6dee418e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_73c7a4acc3a2ad5bef6f890c8d92893f728ae8fd8c31ad986291b80d912d8fa6->leave($__internal_73c7a4acc3a2ad5bef6f890c8d92893f728ae8fd8c31ad986291b80d912d8fa6_prof);

        
        $__internal_79b4f5e2c2c3004d8de01b527fead0396e365b665266b350d05a81dd6dee418e->leave($__internal_79b4f5e2c2c3004d8de01b527fead0396e365b665266b350d05a81dd6dee418e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
