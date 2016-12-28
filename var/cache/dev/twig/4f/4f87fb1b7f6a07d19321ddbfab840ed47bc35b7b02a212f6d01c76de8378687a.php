<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_55e03b6e254132adcf6fd3d2146f4148ec1cc2e3cdc397789190ee14979759f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e884840ee2b57f0372bccdae0de7d31c1da83533bbc08e58232882a1249f805 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e884840ee2b57f0372bccdae0de7d31c1da83533bbc08e58232882a1249f805->enter($__internal_3e884840ee2b57f0372bccdae0de7d31c1da83533bbc08e58232882a1249f805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e884840ee2b57f0372bccdae0de7d31c1da83533bbc08e58232882a1249f805->leave($__internal_3e884840ee2b57f0372bccdae0de7d31c1da83533bbc08e58232882a1249f805_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a0ea164d2f37f15a50e4c4ca561b95de94cbfdca1e89b578e39032672dc68ec1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0ea164d2f37f15a50e4c4ca561b95de94cbfdca1e89b578e39032672dc68ec1->enter($__internal_a0ea164d2f37f15a50e4c4ca561b95de94cbfdca1e89b578e39032672dc68ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_a0ea164d2f37f15a50e4c4ca561b95de94cbfdca1e89b578e39032672dc68ec1->leave($__internal_a0ea164d2f37f15a50e4c4ca561b95de94cbfdca1e89b578e39032672dc68ec1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/var/www/html/devleagues/github/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
