<?php

/* DevLeaguesBundle:Challenge:index.html.twig */
class __TwigTemplate_c6eceb3efaf1b80b04b5b2c73a167fe4df0928248ae5a08a8fa8792ebcace8a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "DevLeaguesBundle:Challenge:index.html.twig", 1);
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
        $__internal_7dae63469b2e561adc06567e364c16acfaab3cff602de3ae60485b19eafc2aa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dae63469b2e561adc06567e364c16acfaab3cff602de3ae60485b19eafc2aa9->enter($__internal_7dae63469b2e561adc06567e364c16acfaab3cff602de3ae60485b19eafc2aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Challenge:index.html.twig"));

        $__internal_35090f4e5606d77e9b3b3f65327a02b9d20306cf77e5c8515a5623d585fc9d96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35090f4e5606d77e9b3b3f65327a02b9d20306cf77e5c8515a5623d585fc9d96->enter($__internal_35090f4e5606d77e9b3b3f65327a02b9d20306cf77e5c8515a5623d585fc9d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Challenge:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7dae63469b2e561adc06567e364c16acfaab3cff602de3ae60485b19eafc2aa9->leave($__internal_7dae63469b2e561adc06567e364c16acfaab3cff602de3ae60485b19eafc2aa9_prof);

        
        $__internal_35090f4e5606d77e9b3b3f65327a02b9d20306cf77e5c8515a5623d585fc9d96->leave($__internal_35090f4e5606d77e9b3b3f65327a02b9d20306cf77e5c8515a5623d585fc9d96_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4d74105183c35dded55de6b5dfef63029294c22902dba1fa13d4da76f133881 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4d74105183c35dded55de6b5dfef63029294c22902dba1fa13d4da76f133881->enter($__internal_b4d74105183c35dded55de6b5dfef63029294c22902dba1fa13d4da76f133881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9ab794d75cfec1f147cb6dbf8761d151d0a8119bac10305bf07752f697b957c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ab794d75cfec1f147cb6dbf8761d151d0a8119bac10305bf07752f697b957c4->enter($__internal_9ab794d75cfec1f147cb6dbf8761d151d0a8119bac10305bf07752f697b957c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Welcome to the Challenge:index page</h1>
";
        
        $__internal_9ab794d75cfec1f147cb6dbf8761d151d0a8119bac10305bf07752f697b957c4->leave($__internal_9ab794d75cfec1f147cb6dbf8761d151d0a8119bac10305bf07752f697b957c4_prof);

        
        $__internal_b4d74105183c35dded55de6b5dfef63029294c22902dba1fa13d4da76f133881->leave($__internal_b4d74105183c35dded55de6b5dfef63029294c22902dba1fa13d4da76f133881_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:Challenge:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
<h1>Welcome to the Challenge:index page</h1>
{% endblock %}
", "DevLeaguesBundle:Challenge:index.html.twig", "/home/webmaster/www/public_html/DevLeagues/var/cache/dev/../../../src/DevLeaguesBundle/Resources/views/Challenge/index.html.twig");
    }
}
