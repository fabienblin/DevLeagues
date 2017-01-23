<?php

/* @DevLeagues/Challenge/new.html.twig */
class __TwigTemplate_42110d7c5391de2695e166cd4614d2c5e522264364a3f2de2c6208e75ffcfe33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle:Challenge:index.html.twig", "@DevLeagues/Challenge/new.html.twig", 1);
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
        $__internal_ac7bc69a63d7505852e3f4b7a97df03cdbf3f2387923ed77f5b01930102b98a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac7bc69a63d7505852e3f4b7a97df03cdbf3f2387923ed77f5b01930102b98a8->enter($__internal_ac7bc69a63d7505852e3f4b7a97df03cdbf3f2387923ed77f5b01930102b98a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Challenge/new.html.twig"));

        $__internal_abb0101f9a3e2d7a7915b3311abe7bf51d3e05ba99311ebc0c2b64d39041425b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abb0101f9a3e2d7a7915b3311abe7bf51d3e05ba99311ebc0c2b64d39041425b->enter($__internal_abb0101f9a3e2d7a7915b3311abe7bf51d3e05ba99311ebc0c2b64d39041425b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Challenge/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac7bc69a63d7505852e3f4b7a97df03cdbf3f2387923ed77f5b01930102b98a8->leave($__internal_ac7bc69a63d7505852e3f4b7a97df03cdbf3f2387923ed77f5b01930102b98a8_prof);

        
        $__internal_abb0101f9a3e2d7a7915b3311abe7bf51d3e05ba99311ebc0c2b64d39041425b->leave($__internal_abb0101f9a3e2d7a7915b3311abe7bf51d3e05ba99311ebc0c2b64d39041425b_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_33ee5a811e6c34cc6ecfbdc0441138a30857160824e6234d22011913bbc42d2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33ee5a811e6c34cc6ecfbdc0441138a30857160824e6234d22011913bbc42d2d->enter($__internal_33ee5a811e6c34cc6ecfbdc0441138a30857160824e6234d22011913bbc42d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_276da95427a56ea4a62c8acb1b0ad9c04bf2ff01829c25e2df3b6c9e2d258dbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_276da95427a56ea4a62c8acb1b0ad9c04bf2ff01829c25e2df3b6c9e2d258dbd->enter($__internal_276da95427a56ea4a62c8acb1b0ad9c04bf2ff01829c25e2df3b6c9e2d258dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "<div class=\"box box-primary\">
\t<div class=\"box-header\">
\t\t<img src=\"\"
\t\talt=\"image du defi\"
\t\tclass=\"profile-user-img img-responsive img-circle\"/>
\t\t<h3 class=\"profile-username text-center\">challenge = new Challenge()</h3>
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
        
        $__internal_276da95427a56ea4a62c8acb1b0ad9c04bf2ff01829c25e2df3b6c9e2d258dbd->leave($__internal_276da95427a56ea4a62c8acb1b0ad9c04bf2ff01829c25e2df3b6c9e2d258dbd_prof);

        
        $__internal_33ee5a811e6c34cc6ecfbdc0441138a30857160824e6234d22011913bbc42d2d->leave($__internal_33ee5a811e6c34cc6ecfbdc0441138a30857160824e6234d22011913bbc42d2d_prof);

    }

    public function getTemplateName()
    {
        return "@DevLeagues/Challenge/new.html.twig";
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
\t\talt=\"image du defi\"
\t\tclass=\"profile-user-img img-responsive img-circle\"/>
\t\t<h3 class=\"profile-username text-center\">challenge = new Challenge()</h3>
\t</div>
\t<div class=\"box-body\">
\t\t{{ form(form, {'attr': {'novalidate': 'novalidate'}}) }}
\t</div>
\t<div class=\"box-footer\">
\t</div>
</div>
</div>

{% endblock %}
", "@DevLeagues/Challenge/new.html.twig", "/home/webmaster/www/public_html/DevLeagues/src/DevLeaguesBundle/Resources/views/Challenge/new.html.twig");
    }
}
