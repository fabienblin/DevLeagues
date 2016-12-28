<?php

/* DevLeaguesBundle:Contact:index.html.twig */
class __TwigTemplate_17579d75907caa36991a50a94be9a95e525330d4de77f1e6a9c9c889f7950e46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "DevLeaguesBundle:Contact:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevLeaguesBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b481b48e333bab0678ca3061a9dbfaf6f1b4c958915cb47f478e9e24a7ebabc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b481b48e333bab0678ca3061a9dbfaf6f1b4c958915cb47f478e9e24a7ebabc->enter($__internal_5b481b48e333bab0678ca3061a9dbfaf6f1b4c958915cb47f478e9e24a7ebabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Contact:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b481b48e333bab0678ca3061a9dbfaf6f1b4c958915cb47f478e9e24a7ebabc->leave($__internal_5b481b48e333bab0678ca3061a9dbfaf6f1b4c958915cb47f478e9e24a7ebabc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_185f778e8725f7ed8474fdc3986132c81bdd1637787c0238018b275000e3d15a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_185f778e8725f7ed8474fdc3986132c81bdd1637787c0238018b275000e3d15a->enter($__internal_185f778e8725f7ed8474fdc3986132c81bdd1637787c0238018b275000e3d15a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DevLeaguesBundle:Contact:index";
        
        $__internal_185f778e8725f7ed8474fdc3986132c81bdd1637787c0238018b275000e3d15a->leave($__internal_185f778e8725f7ed8474fdc3986132c81bdd1637787c0238018b275000e3d15a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cdefa90d3318bb6f017312654e03cd1111d7f0fffb6e6264b0e6578c0b2ca4b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdefa90d3318bb6f017312654e03cd1111d7f0fffb6e6264b0e6578c0b2ca4b0->enter($__internal_cdefa90d3318bb6f017312654e03cd1111d7f0fffb6e6264b0e6578c0b2ca4b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Contact</h1>
<p>
\tI just told you to w8 until stuff gets ready.
</p>
<q cite=\"\">Patience, <br>use the force, <br>think.</q>
<p>
\t- Obi Wan Kenoby
</p>
";
        
        $__internal_cdefa90d3318bb6f017312654e03cd1111d7f0fffb6e6264b0e6578c0b2ca4b0->leave($__internal_cdefa90d3318bb6f017312654e03cd1111d7f0fffb6e6264b0e6578c0b2ca4b0_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:Contact:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}DevLeaguesBundle:Contact:index{% endblock %}

{% block body %}
<h1>Contact</h1>
<p>
\tI just told you to w8 until stuff gets ready.
</p>
<q cite=\"\">Patience, <br>use the force, <br>think.</q>
<p>
\t- Obi Wan Kenoby
</p>
{% endblock %}
", "DevLeaguesBundle:Contact:index.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/Contact/index.html.twig");
    }
}
