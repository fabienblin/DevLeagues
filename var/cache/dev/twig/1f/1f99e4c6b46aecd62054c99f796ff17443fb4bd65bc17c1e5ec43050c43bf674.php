<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4ca8d28eac4f36380bf6131f72ded7bc44fedc847c4f5385150708948f45f1ab extends Twig_Template
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
        $__internal_35b1dd3c02fbfaa95fb6cd3ea60a4f3d665b7fb5865409bd5183a994538d83c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35b1dd3c02fbfaa95fb6cd3ea60a4f3d665b7fb5865409bd5183a994538d83c7->enter($__internal_35b1dd3c02fbfaa95fb6cd3ea60a4f3d665b7fb5865409bd5183a994538d83c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35b1dd3c02fbfaa95fb6cd3ea60a4f3d665b7fb5865409bd5183a994538d83c7->leave($__internal_35b1dd3c02fbfaa95fb6cd3ea60a4f3d665b7fb5865409bd5183a994538d83c7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ffea4ff71c39b86dd21476be34ab475b45e7700ee93bd4ee019143a4344ceec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffea4ff71c39b86dd21476be34ab475b45e7700ee93bd4ee019143a4344ceec8->enter($__internal_ffea4ff71c39b86dd21476be34ab475b45e7700ee93bd4ee019143a4344ceec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ffea4ff71c39b86dd21476be34ab475b45e7700ee93bd4ee019143a4344ceec8->leave($__internal_ffea4ff71c39b86dd21476be34ab475b45e7700ee93bd4ee019143a4344ceec8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed02be502764ca6c7f92a9dbb5e04fcb2590b909a28b5a3a818e8cae350fb1f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed02be502764ca6c7f92a9dbb5e04fcb2590b909a28b5a3a818e8cae350fb1f0->enter($__internal_ed02be502764ca6c7f92a9dbb5e04fcb2590b909a28b5a3a818e8cae350fb1f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ed02be502764ca6c7f92a9dbb5e04fcb2590b909a28b5a3a818e8cae350fb1f0->leave($__internal_ed02be502764ca6c7f92a9dbb5e04fcb2590b909a28b5a3a818e8cae350fb1f0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_306e2229dc72727c0dc3bb1c54548a8bb14a7b5ef4474bd40fc3e5d2b47b64a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_306e2229dc72727c0dc3bb1c54548a8bb14a7b5ef4474bd40fc3e5d2b47b64a6->enter($__internal_306e2229dc72727c0dc3bb1c54548a8bb14a7b5ef4474bd40fc3e5d2b47b64a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_306e2229dc72727c0dc3bb1c54548a8bb14a7b5ef4474bd40fc3e5d2b47b64a6->leave($__internal_306e2229dc72727c0dc3bb1c54548a8bb14a7b5ef4474bd40fc3e5d2b47b64a6_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
