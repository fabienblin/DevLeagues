<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f9deaa5d885d5dd6d6cacb14b589883252bd6edea8270e6a67796700967995eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_335950f5e780a492d26f564ec62b7c342aa8fe6c8115eb9ed5f36e23615e2dec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_335950f5e780a492d26f564ec62b7c342aa8fe6c8115eb9ed5f36e23615e2dec->enter($__internal_335950f5e780a492d26f564ec62b7c342aa8fe6c8115eb9ed5f36e23615e2dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_335950f5e780a492d26f564ec62b7c342aa8fe6c8115eb9ed5f36e23615e2dec->leave($__internal_335950f5e780a492d26f564ec62b7c342aa8fe6c8115eb9ed5f36e23615e2dec_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7156dd0eefde60f9aa3f3a7542cec29fec300adbbeb2b576d94d5f03bcc78a4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7156dd0eefde60f9aa3f3a7542cec29fec300adbbeb2b576d94d5f03bcc78a4d->enter($__internal_7156dd0eefde60f9aa3f3a7542cec29fec300adbbeb2b576d94d5f03bcc78a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7156dd0eefde60f9aa3f3a7542cec29fec300adbbeb2b576d94d5f03bcc78a4d->leave($__internal_7156dd0eefde60f9aa3f3a7542cec29fec300adbbeb2b576d94d5f03bcc78a4d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_624fbf6b4d3d4e79586a4a7ee32932cb57216648e6f3d36f6da26cac055205f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_624fbf6b4d3d4e79586a4a7ee32932cb57216648e6f3d36f6da26cac055205f1->enter($__internal_624fbf6b4d3d4e79586a4a7ee32932cb57216648e6f3d36f6da26cac055205f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_624fbf6b4d3d4e79586a4a7ee32932cb57216648e6f3d36f6da26cac055205f1->leave($__internal_624fbf6b4d3d4e79586a4a7ee32932cb57216648e6f3d36f6da26cac055205f1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d580dc48decc9c167737893ceb097a074cf88b0ae7afda1794d782994a3f079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d580dc48decc9c167737893ceb097a074cf88b0ae7afda1794d782994a3f079->enter($__internal_4d580dc48decc9c167737893ceb097a074cf88b0ae7afda1794d782994a3f079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4d580dc48decc9c167737893ceb097a074cf88b0ae7afda1794d782994a3f079->leave($__internal_4d580dc48decc9c167737893ceb097a074cf88b0ae7afda1794d782994a3f079_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/devleagues/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
