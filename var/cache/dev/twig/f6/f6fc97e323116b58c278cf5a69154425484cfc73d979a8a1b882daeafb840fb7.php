<?php

/* DevLeaguesBundle:Event:new.html.twig */
class __TwigTemplate_cddf41828a1dbed53d2cbe2159cc1ada7698b40bfb92528e87095199b019679e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "DevLeaguesBundle:Event:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevLeaguesBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_88bbf4e77a0268cc5a2f86b0664f3b6c35e866f61b8a5ab13f0808cf74ad5a98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88bbf4e77a0268cc5a2f86b0664f3b6c35e866f61b8a5ab13f0808cf74ad5a98->enter($__internal_88bbf4e77a0268cc5a2f86b0664f3b6c35e866f61b8a5ab13f0808cf74ad5a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Event:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88bbf4e77a0268cc5a2f86b0664f3b6c35e866f61b8a5ab13f0808cf74ad5a98->leave($__internal_88bbf4e77a0268cc5a2f86b0664f3b6c35e866f61b8a5ab13f0808cf74ad5a98_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2a2d6e8a14e63eadb5645a2a4125c2c7c211496edf92f73c3ce7c235886c099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2a2d6e8a14e63eadb5645a2a4125c2c7c211496edf92f73c3ce7c235886c099->enter($__internal_e2a2d6e8a14e63eadb5645a2a4125c2c7c211496edf92f73c3ce7c235886c099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 5
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_e2a2d6e8a14e63eadb5645a2a4125c2c7c211496edf92f73c3ce7c235886c099->leave($__internal_e2a2d6e8a14e63eadb5645a2a4125c2c7c211496edf92f73c3ce7c235886c099_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:Event:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"DevLeaguesBundle::base.html.twig\" %}

{% block body %}

{{ form_start(form) }}
{{ form_widget(form) }}
{{ form_end(form) }}

{% endblock %}
", "DevLeaguesBundle:Event:new.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/Event/new.html.twig");
    }
}
