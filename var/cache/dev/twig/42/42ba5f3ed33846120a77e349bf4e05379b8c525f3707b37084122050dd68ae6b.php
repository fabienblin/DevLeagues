<?php

/* @DevLeagues/League/remove.html.twig */
class __TwigTemplate_cdae6c0abc6061a6805da816f3df59c2dd286da6dbc0f983d6b27ff7dfd6e33f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle:League:base.html.twig", "@DevLeagues/League/remove.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevLeaguesBundle:League:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1cc2e1e79cee149972bdf9d47a1aae16ec43332278335bf160ae368e28283924 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cc2e1e79cee149972bdf9d47a1aae16ec43332278335bf160ae368e28283924->enter($__internal_1cc2e1e79cee149972bdf9d47a1aae16ec43332278335bf160ae368e28283924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/League/remove.html.twig"));

        $__internal_3cea040e3871a1dd8cd68c2f5f380b2c855216e5d0defdfa20b457df2b2ad34e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cea040e3871a1dd8cd68c2f5f380b2c855216e5d0defdfa20b457df2b2ad34e->enter($__internal_3cea040e3871a1dd8cd68c2f5f380b2c855216e5d0defdfa20b457df2b2ad34e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/League/remove.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1cc2e1e79cee149972bdf9d47a1aae16ec43332278335bf160ae368e28283924->leave($__internal_1cc2e1e79cee149972bdf9d47a1aae16ec43332278335bf160ae368e28283924_prof);

        
        $__internal_3cea040e3871a1dd8cd68c2f5f380b2c855216e5d0defdfa20b457df2b2ad34e->leave($__internal_3cea040e3871a1dd8cd68c2f5f380b2c855216e5d0defdfa20b457df2b2ad34e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d1d1432554b4f91d0cc0aea82bae5c01c16dbaea528941c4e06bbe899f987c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d1d1432554b4f91d0cc0aea82bae5c01c16dbaea528941c4e06bbe899f987c9->enter($__internal_9d1d1432554b4f91d0cc0aea82bae5c01c16dbaea528941c4e06bbe899f987c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2139829e7233c0ad3d972065e854445ae9c89c44c7917c4ec2760021bc678a22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2139829e7233c0ad3d972065e854445ae9c89c44c7917c4ec2760021bc678a22->enter($__internal_2139829e7233c0ad3d972065e854445ae9c89c44c7917c4ec2760021bc678a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Welcome to the League:remove page</h1>
";
        
        $__internal_2139829e7233c0ad3d972065e854445ae9c89c44c7917c4ec2760021bc678a22->leave($__internal_2139829e7233c0ad3d972065e854445ae9c89c44c7917c4ec2760021bc678a22_prof);

        
        $__internal_9d1d1432554b4f91d0cc0aea82bae5c01c16dbaea528941c4e06bbe899f987c9->leave($__internal_9d1d1432554b4f91d0cc0aea82bae5c01c16dbaea528941c4e06bbe899f987c9_prof);

    }

    public function getTemplateName()
    {
        return "@DevLeagues/League/remove.html.twig";
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
        return new Twig_Source("{% extends \"DevLeaguesBundle:League:base.html.twig\" %}

{% block body %}
<h1>Welcome to the League:remove page</h1>
{% endblock %}
", "@DevLeagues/League/remove.html.twig", "/home/webmaster/www/public_html/DevLeagues/src/DevLeaguesBundle/Resources/views/League/remove.html.twig");
    }
}
