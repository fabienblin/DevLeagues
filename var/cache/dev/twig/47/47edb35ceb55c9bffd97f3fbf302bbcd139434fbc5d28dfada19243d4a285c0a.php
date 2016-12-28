<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_05d37eb44e9adce6596262d16ffa1b21445d5f83d063e61484c366be67b652e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f0eafc108fc37a5a772ae2334aa40ea695f97b297fbcca64f0c8f44a7ca2f46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f0eafc108fc37a5a772ae2334aa40ea695f97b297fbcca64f0c8f44a7ca2f46->enter($__internal_5f0eafc108fc37a5a772ae2334aa40ea695f97b297fbcca64f0c8f44a7ca2f46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5f0eafc108fc37a5a772ae2334aa40ea695f97b297fbcca64f0c8f44a7ca2f46->leave($__internal_5f0eafc108fc37a5a772ae2334aa40ea695f97b297fbcca64f0c8f44a7ca2f46_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7f6f8366d44d54e436e6081eae96359ab4ff6fbfc92aeae621a16eb08a480c59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f6f8366d44d54e436e6081eae96359ab4ff6fbfc92aeae621a16eb08a480c59->enter($__internal_7f6f8366d44d54e436e6081eae96359ab4ff6fbfc92aeae621a16eb08a480c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7f6f8366d44d54e436e6081eae96359ab4ff6fbfc92aeae621a16eb08a480c59->leave($__internal_7f6f8366d44d54e436e6081eae96359ab4ff6fbfc92aeae621a16eb08a480c59_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
