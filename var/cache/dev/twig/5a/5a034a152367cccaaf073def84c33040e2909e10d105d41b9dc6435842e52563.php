<?php

/* DevLeaguesBundle:Profile:index.html.twig */
class __TwigTemplate_3f146b540cbde48ee89310cf0d93a52b72db7047f2f9528f86f12478f561b0c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "DevLeaguesBundle:Profile:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9744f1e1ee0674bbf66a8f6d49b3c3eda2688037fb48d0a4e9ee277f14e07fab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9744f1e1ee0674bbf66a8f6d49b3c3eda2688037fb48d0a4e9ee277f14e07fab->enter($__internal_9744f1e1ee0674bbf66a8f6d49b3c3eda2688037fb48d0a4e9ee277f14e07fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Profile:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9744f1e1ee0674bbf66a8f6d49b3c3eda2688037fb48d0a4e9ee277f14e07fab->leave($__internal_9744f1e1ee0674bbf66a8f6d49b3c3eda2688037fb48d0a4e9ee277f14e07fab_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e73b68892d932d15f31988294c94d6e9e63b93f98ac86b0a3f25dddc17f513e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e73b68892d932d15f31988294c94d6e9e63b93f98ac86b0a3f25dddc17f513e->enter($__internal_1e73b68892d932d15f31988294c94d6e9e63b93f98ac86b0a3f25dddc17f513e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DevLeaguesBundle:Profile:index";
        
        $__internal_1e73b68892d932d15f31988294c94d6e9e63b93f98ac86b0a3f25dddc17f513e->leave($__internal_1e73b68892d932d15f31988294c94d6e9e63b93f98ac86b0a3f25dddc17f513e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3bccf1cea1cb712560151e36821d1b5ed5e2668a8c2e09ea9444b08d7120fd65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bccf1cea1cb712560151e36821d1b5ed5e2668a8c2e09ea9444b08d7120fd65->enter($__internal_3bccf1cea1cb712560151e36821d1b5ed5e2668a8c2e09ea9444b08d7120fd65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Profile:index page</h1>
";
        
        $__internal_3bccf1cea1cb712560151e36821d1b5ed5e2668a8c2e09ea9444b08d7120fd65->leave($__internal_3bccf1cea1cb712560151e36821d1b5ed5e2668a8c2e09ea9444b08d7120fd65_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:Profile:index.html.twig";
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
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}DevLeaguesBundle:Profile:index{% endblock %}

{% block body %}
<h1>Welcome to the Profile:index page</h1>
{% endblock %}
", "DevLeaguesBundle:Profile:index.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/Profile/index.html.twig");
    }
}
