<?php

/* @DevLeagues/Community/index.html.twig */
class __TwigTemplate_682505e6e0808eb28aec3b49f84689b16cd0bb7f97df0aa866af63f108813bb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "@DevLeagues/Community/index.html.twig", 1);
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
        $__internal_aeda892042b8ed82842063e4a1b56bde549348347343e49d474bdf5dfc6b927e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeda892042b8ed82842063e4a1b56bde549348347343e49d474bdf5dfc6b927e->enter($__internal_aeda892042b8ed82842063e4a1b56bde549348347343e49d474bdf5dfc6b927e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Community/index.html.twig"));

        $__internal_ccd1edb690816d392b843fdfb3d5cc6ccef83f1b81cfaf3359f040f343f0dadf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccd1edb690816d392b843fdfb3d5cc6ccef83f1b81cfaf3359f040f343f0dadf->enter($__internal_ccd1edb690816d392b843fdfb3d5cc6ccef83f1b81cfaf3359f040f343f0dadf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Community/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aeda892042b8ed82842063e4a1b56bde549348347343e49d474bdf5dfc6b927e->leave($__internal_aeda892042b8ed82842063e4a1b56bde549348347343e49d474bdf5dfc6b927e_prof);

        
        $__internal_ccd1edb690816d392b843fdfb3d5cc6ccef83f1b81cfaf3359f040f343f0dadf->leave($__internal_ccd1edb690816d392b843fdfb3d5cc6ccef83f1b81cfaf3359f040f343f0dadf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_34b7e78b8e7194847a3f3810602c3a90f6393cbdb1ef4e93436a149809f22b48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34b7e78b8e7194847a3f3810602c3a90f6393cbdb1ef4e93436a149809f22b48->enter($__internal_34b7e78b8e7194847a3f3810602c3a90f6393cbdb1ef4e93436a149809f22b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_df802a8261b8dcf06795cf72f76d27bdee30b0d4af1b0a6c10d21f6155ad5d85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df802a8261b8dcf06795cf72f76d27bdee30b0d4af1b0a6c10d21f6155ad5d85->enter($__internal_df802a8261b8dcf06795cf72f76d27bdee30b0d4af1b0a6c10d21f6155ad5d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Welcome to the Community:index page</h1>
";
        
        $__internal_df802a8261b8dcf06795cf72f76d27bdee30b0d4af1b0a6c10d21f6155ad5d85->leave($__internal_df802a8261b8dcf06795cf72f76d27bdee30b0d4af1b0a6c10d21f6155ad5d85_prof);

        
        $__internal_34b7e78b8e7194847a3f3810602c3a90f6393cbdb1ef4e93436a149809f22b48->leave($__internal_34b7e78b8e7194847a3f3810602c3a90f6393cbdb1ef4e93436a149809f22b48_prof);

    }

    public function getTemplateName()
    {
        return "@DevLeagues/Community/index.html.twig";
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
<h1>Welcome to the Community:index page</h1>
{% endblock %}
", "@DevLeagues/Community/index.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/Community/index.html.twig");
    }
}
