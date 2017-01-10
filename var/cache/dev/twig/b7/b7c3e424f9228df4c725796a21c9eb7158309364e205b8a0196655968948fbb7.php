<?php

/* @DevLeagues/League/index.html.twig */
class __TwigTemplate_773f2da8b7a455654c8a3b5c0d537ebebe3d8616b1e69815be2ddb5fcb7f9d8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "@DevLeagues/League/index.html.twig", 1);
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
        $__internal_39d68e89f5bd4fbc3e97b779257398a3c68acaec34dd0370040b6e59d7ead5f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39d68e89f5bd4fbc3e97b779257398a3c68acaec34dd0370040b6e59d7ead5f8->enter($__internal_39d68e89f5bd4fbc3e97b779257398a3c68acaec34dd0370040b6e59d7ead5f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/League/index.html.twig"));

        $__internal_dd41497b928fd2c43610d99b61a066fae119424b047b7987b5c46565ed224451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd41497b928fd2c43610d99b61a066fae119424b047b7987b5c46565ed224451->enter($__internal_dd41497b928fd2c43610d99b61a066fae119424b047b7987b5c46565ed224451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/League/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39d68e89f5bd4fbc3e97b779257398a3c68acaec34dd0370040b6e59d7ead5f8->leave($__internal_39d68e89f5bd4fbc3e97b779257398a3c68acaec34dd0370040b6e59d7ead5f8_prof);

        
        $__internal_dd41497b928fd2c43610d99b61a066fae119424b047b7987b5c46565ed224451->leave($__internal_dd41497b928fd2c43610d99b61a066fae119424b047b7987b5c46565ed224451_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5eebc843d8991537c77d0961ef7c010063ebf5ae33c255a05788ec77bbf70e0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eebc843d8991537c77d0961ef7c010063ebf5ae33c255a05788ec77bbf70e0a->enter($__internal_5eebc843d8991537c77d0961ef7c010063ebf5ae33c255a05788ec77bbf70e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_06c0338061acff46464210baef49b4b11bc13d28b8124ee831b12bcf7cac0ea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06c0338061acff46464210baef49b4b11bc13d28b8124ee831b12bcf7cac0ea5->enter($__internal_06c0338061acff46464210baef49b4b11bc13d28b8124ee831b12bcf7cac0ea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Welcome to the League:index page</h1>
";
        
        $__internal_06c0338061acff46464210baef49b4b11bc13d28b8124ee831b12bcf7cac0ea5->leave($__internal_06c0338061acff46464210baef49b4b11bc13d28b8124ee831b12bcf7cac0ea5_prof);

        
        $__internal_5eebc843d8991537c77d0961ef7c010063ebf5ae33c255a05788ec77bbf70e0a->leave($__internal_5eebc843d8991537c77d0961ef7c010063ebf5ae33c255a05788ec77bbf70e0a_prof);

    }

    public function getTemplateName()
    {
        return "@DevLeagues/League/index.html.twig";
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
<h1>Welcome to the League:index page</h1>
{% endblock %}
", "@DevLeagues/League/index.html.twig", "/home/webmaster/www/public_html/DevLeagues/src/DevLeaguesBundle/Resources/views/League/index.html.twig");
    }
}
