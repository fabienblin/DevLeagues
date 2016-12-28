<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_d1ca7e6ee4796adcaea6a9d0bdfa83018238731ca236e005cfde7b43ff0b70c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_f562f0d142e799b22ee1b263554af6dba71959293f0bea29ec8e05ed007f2799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f562f0d142e799b22ee1b263554af6dba71959293f0bea29ec8e05ed007f2799->enter($__internal_f562f0d142e799b22ee1b263554af6dba71959293f0bea29ec8e05ed007f2799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f562f0d142e799b22ee1b263554af6dba71959293f0bea29ec8e05ed007f2799->leave($__internal_f562f0d142e799b22ee1b263554af6dba71959293f0bea29ec8e05ed007f2799_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1ccfc35402bff1052bac8d22270b4fae2c0c0a2a17fbef99142399e102f19ffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ccfc35402bff1052bac8d22270b4fae2c0c0a2a17fbef99142399e102f19ffb->enter($__internal_1ccfc35402bff1052bac8d22270b4fae2c0c0a2a17fbef99142399e102f19ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1ccfc35402bff1052bac8d22270b4fae2c0c0a2a17fbef99142399e102f19ffb->leave($__internal_1ccfc35402bff1052bac8d22270b4fae2c0c0a2a17fbef99142399e102f19ffb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d906cdd7b6aa2e913941c0af37f458b6fe81bb91b539bc49c3c2179f8cffe73d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d906cdd7b6aa2e913941c0af37f458b6fe81bb91b539bc49c3c2179f8cffe73d->enter($__internal_d906cdd7b6aa2e913941c0af37f458b6fe81bb91b539bc49c3c2179f8cffe73d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d906cdd7b6aa2e913941c0af37f458b6fe81bb91b539bc49c3c2179f8cffe73d->leave($__internal_d906cdd7b6aa2e913941c0af37f458b6fe81bb91b539bc49c3c2179f8cffe73d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_92bb3455ea9fb77d3d42ada7a4995a67df505fbf903fa44a72a4f3cb4fb0b703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92bb3455ea9fb77d3d42ada7a4995a67df505fbf903fa44a72a4f3cb4fb0b703->enter($__internal_92bb3455ea9fb77d3d42ada7a4995a67df505fbf903fa44a72a4f3cb4fb0b703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_92bb3455ea9fb77d3d42ada7a4995a67df505fbf903fa44a72a4f3cb4fb0b703->leave($__internal_92bb3455ea9fb77d3d42ada7a4995a67df505fbf903fa44a72a4f3cb4fb0b703_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
