<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_4842f4248c01ebca6a9e76b82f6405ddcbaed7db5adc08befe0ad29d7dd42951 extends Twig_Template
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
        $__internal_93ec3d008fcba35b17b78ab152411ada83fb4ee502988b5fcabd82f52eaf7f76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93ec3d008fcba35b17b78ab152411ada83fb4ee502988b5fcabd82f52eaf7f76->enter($__internal_93ec3d008fcba35b17b78ab152411ada83fb4ee502988b5fcabd82f52eaf7f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_edb67591ad4db68fb9eab3871ba1d4fbfa94b8c33f43b090c89faeae427fd77b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edb67591ad4db68fb9eab3871ba1d4fbfa94b8c33f43b090c89faeae427fd77b->enter($__internal_edb67591ad4db68fb9eab3871ba1d4fbfa94b8c33f43b090c89faeae427fd77b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_93ec3d008fcba35b17b78ab152411ada83fb4ee502988b5fcabd82f52eaf7f76->leave($__internal_93ec3d008fcba35b17b78ab152411ada83fb4ee502988b5fcabd82f52eaf7f76_prof);

        
        $__internal_edb67591ad4db68fb9eab3871ba1d4fbfa94b8c33f43b090c89faeae427fd77b->leave($__internal_edb67591ad4db68fb9eab3871ba1d4fbfa94b8c33f43b090c89faeae427fd77b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
