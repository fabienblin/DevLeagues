<?php

/* @DevLeagues/League/new.html.twig */
class __TwigTemplate_28b5386736d96c1f8f894d96afa76cbc551974516c104064276e64284a58bc30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle:Challenge:index.html.twig", "@DevLeagues/League/new.html.twig", 1);
        $this->blocks = array(
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevLeaguesBundle:Challenge:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28365a0378fdebcf96fca54f9f4ecc6f5df70a349c1a6a12985808473c01a68d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28365a0378fdebcf96fca54f9f4ecc6f5df70a349c1a6a12985808473c01a68d->enter($__internal_28365a0378fdebcf96fca54f9f4ecc6f5df70a349c1a6a12985808473c01a68d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/League/new.html.twig"));

        $__internal_fe1c08af2afb4ba3fb649b8f23c840005a4a26916c245d970846673d9ce73d7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe1c08af2afb4ba3fb649b8f23c840005a4a26916c245d970846673d9ce73d7d->enter($__internal_fe1c08af2afb4ba3fb649b8f23c840005a4a26916c245d970846673d9ce73d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/League/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28365a0378fdebcf96fca54f9f4ecc6f5df70a349c1a6a12985808473c01a68d->leave($__internal_28365a0378fdebcf96fca54f9f4ecc6f5df70a349c1a6a12985808473c01a68d_prof);

        
        $__internal_fe1c08af2afb4ba3fb649b8f23c840005a4a26916c245d970846673d9ce73d7d->leave($__internal_fe1c08af2afb4ba3fb649b8f23c840005a4a26916c245d970846673d9ce73d7d_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_44fe9862418ada434854810a0f373bcb8b19e2c82004adeac3ca5770b0a5f44f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44fe9862418ada434854810a0f373bcb8b19e2c82004adeac3ca5770b0a5f44f->enter($__internal_44fe9862418ada434854810a0f373bcb8b19e2c82004adeac3ca5770b0a5f44f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_ffe489d1316a4b0d6b10da9aed8567c34bc59bd6cdae83fa6b1e917a5b614896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffe489d1316a4b0d6b10da9aed8567c34bc59bd6cdae83fa6b1e917a5b614896->enter($__internal_ffe489d1316a4b0d6b10da9aed8567c34bc59bd6cdae83fa6b1e917a5b614896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "<div class=\"box box-primary\">
\t<div class=\"box-header\">
\t\t<img src=\"\"
\t\talt=\"image de la ligue\"
\t\tclass=\"profile-user-img img-responsive img-circle\"/>
\t\t<h3 class=\"profile-username text-center\">league = new League()</h3>
\t</div>
\t<div class=\"box-body\">
\t\t";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form', array("attr" => array("novalidate" => "novalidate")));
        echo "
\t</div>
\t<div class=\"box-footer\">
\t</div>
</div>
</div>

";
        
        $__internal_ffe489d1316a4b0d6b10da9aed8567c34bc59bd6cdae83fa6b1e917a5b614896->leave($__internal_ffe489d1316a4b0d6b10da9aed8567c34bc59bd6cdae83fa6b1e917a5b614896_prof);

        
        $__internal_44fe9862418ada434854810a0f373bcb8b19e2c82004adeac3ca5770b0a5f44f->leave($__internal_44fe9862418ada434854810a0f373bcb8b19e2c82004adeac3ca5770b0a5f44f_prof);

    }

    public function getTemplateName()
    {
        return "@DevLeagues/League/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"DevLeaguesBundle:Challenge:index.html.twig\" %}

{% block page_content %}
<div class=\"box box-primary\">
\t<div class=\"box-header\">
\t\t<img src=\"\"
\t\talt=\"image de la ligue\"
\t\tclass=\"profile-user-img img-responsive img-circle\"/>
\t\t<h3 class=\"profile-username text-center\">league = new League()</h3>
\t</div>
\t<div class=\"box-body\">
\t\t{{ form(form, {'attr': {'novalidate': 'novalidate'}}) }}
\t</div>
\t<div class=\"box-footer\">
\t</div>
</div>
</div>

{% endblock %}
", "@DevLeagues/League/new.html.twig", "/home/webmaster/www/public_html/DevLeagues/src/DevLeaguesBundle/Resources/views/League/new.html.twig");
    }
}
