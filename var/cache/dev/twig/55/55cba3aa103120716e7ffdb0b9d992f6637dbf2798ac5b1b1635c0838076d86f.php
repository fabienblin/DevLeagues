<?php

/* DevLeaguesBundle:Challenge:new.html.twig */
class __TwigTemplate_6120ab3d8dd72583a6da8c6340964dcda08e6dfc829045278123a6c05b611600 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle:Challenge:index.html.twig", "DevLeaguesBundle:Challenge:new.html.twig", 1);
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
        $__internal_483b413a39e3763e6db9ff7743ab7f58be65d33664a4d38f1a0356063d6c6d02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_483b413a39e3763e6db9ff7743ab7f58be65d33664a4d38f1a0356063d6c6d02->enter($__internal_483b413a39e3763e6db9ff7743ab7f58be65d33664a4d38f1a0356063d6c6d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Challenge:new.html.twig"));

        $__internal_4cf1c45209d6c8f121d4ba7c7a452076d319770e7c3849bbef019c0a4bd4c8c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cf1c45209d6c8f121d4ba7c7a452076d319770e7c3849bbef019c0a4bd4c8c2->enter($__internal_4cf1c45209d6c8f121d4ba7c7a452076d319770e7c3849bbef019c0a4bd4c8c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Challenge:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_483b413a39e3763e6db9ff7743ab7f58be65d33664a4d38f1a0356063d6c6d02->leave($__internal_483b413a39e3763e6db9ff7743ab7f58be65d33664a4d38f1a0356063d6c6d02_prof);

        
        $__internal_4cf1c45209d6c8f121d4ba7c7a452076d319770e7c3849bbef019c0a4bd4c8c2->leave($__internal_4cf1c45209d6c8f121d4ba7c7a452076d319770e7c3849bbef019c0a4bd4c8c2_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_85504043f1e27af1a0dcb54909bbeed9dae53d99b7c42589328a5f47e0e2d9c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85504043f1e27af1a0dcb54909bbeed9dae53d99b7c42589328a5f47e0e2d9c7->enter($__internal_85504043f1e27af1a0dcb54909bbeed9dae53d99b7c42589328a5f47e0e2d9c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_92fb615696b613babf77d7595efd1535ccc56b1a3c13754f525b37c4575e6123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92fb615696b613babf77d7595efd1535ccc56b1a3c13754f525b37c4575e6123->enter($__internal_92fb615696b613babf77d7595efd1535ccc56b1a3c13754f525b37c4575e6123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_92fb615696b613babf77d7595efd1535ccc56b1a3c13754f525b37c4575e6123->leave($__internal_92fb615696b613babf77d7595efd1535ccc56b1a3c13754f525b37c4575e6123_prof);

        
        $__internal_85504043f1e27af1a0dcb54909bbeed9dae53d99b7c42589328a5f47e0e2d9c7->leave($__internal_85504043f1e27af1a0dcb54909bbeed9dae53d99b7c42589328a5f47e0e2d9c7_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:Challenge:new.html.twig";
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
", "DevLeaguesBundle:Challenge:new.html.twig", "/home/webmaster/www/public_html/DevLeagues/var/cache/dev/../../../src/DevLeaguesBundle/Resources/views/Challenge/new.html.twig");
    }
}
