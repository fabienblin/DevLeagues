<?php

/* @DevLeagues/League/remove.html.twig */
class __TwigTemplate_2ebb7c898a822f3e1a966cf071554dc3136613c8eee93aee9dd51c26c4caed41 extends Twig_Template
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
        $__internal_81392b69296b7655fd22c94fc524f2bf48c0452e6613f74042594d25e89ba28a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81392b69296b7655fd22c94fc524f2bf48c0452e6613f74042594d25e89ba28a->enter($__internal_81392b69296b7655fd22c94fc524f2bf48c0452e6613f74042594d25e89ba28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/League/remove.html.twig"));

        $__internal_d29088df218cf4a06af6d897218d89d07df9824eb3c59799cf471b7fdd961134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d29088df218cf4a06af6d897218d89d07df9824eb3c59799cf471b7fdd961134->enter($__internal_d29088df218cf4a06af6d897218d89d07df9824eb3c59799cf471b7fdd961134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/League/remove.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81392b69296b7655fd22c94fc524f2bf48c0452e6613f74042594d25e89ba28a->leave($__internal_81392b69296b7655fd22c94fc524f2bf48c0452e6613f74042594d25e89ba28a_prof);

        
        $__internal_d29088df218cf4a06af6d897218d89d07df9824eb3c59799cf471b7fdd961134->leave($__internal_d29088df218cf4a06af6d897218d89d07df9824eb3c59799cf471b7fdd961134_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_96cbd8118a1a30b6d8303d03d82be311fdac7572ea076d86feeaaa3a6bf7ec6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96cbd8118a1a30b6d8303d03d82be311fdac7572ea076d86feeaaa3a6bf7ec6b->enter($__internal_96cbd8118a1a30b6d8303d03d82be311fdac7572ea076d86feeaaa3a6bf7ec6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_83468b5589a0ead8aafe2b06c1e6e4bf75f3ed44525c454831d41c28140eedbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83468b5589a0ead8aafe2b06c1e6e4bf75f3ed44525c454831d41c28140eedbb->enter($__internal_83468b5589a0ead8aafe2b06c1e6e4bf75f3ed44525c454831d41c28140eedbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Welcome to the League:remove page</h1>
";
        
        $__internal_83468b5589a0ead8aafe2b06c1e6e4bf75f3ed44525c454831d41c28140eedbb->leave($__internal_83468b5589a0ead8aafe2b06c1e6e4bf75f3ed44525c454831d41c28140eedbb_prof);

        
        $__internal_96cbd8118a1a30b6d8303d03d82be311fdac7572ea076d86feeaaa3a6bf7ec6b->leave($__internal_96cbd8118a1a30b6d8303d03d82be311fdac7572ea076d86feeaaa3a6bf7ec6b_prof);

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
", "@DevLeagues/League/remove.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/League/remove.html.twig");
    }
}
