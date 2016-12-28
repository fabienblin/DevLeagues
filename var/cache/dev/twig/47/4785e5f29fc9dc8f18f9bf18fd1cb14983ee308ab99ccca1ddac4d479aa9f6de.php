<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_2316c2515d6df94fc12f1ac7d4d192c8701d9b894393928c83b6916d29b64823 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_09fc10cc015ef199fd143ad9139e7a6cda07d12416da5311ca40944a6cebcbf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09fc10cc015ef199fd143ad9139e7a6cda07d12416da5311ca40944a6cebcbf4->enter($__internal_09fc10cc015ef199fd143ad9139e7a6cda07d12416da5311ca40944a6cebcbf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09fc10cc015ef199fd143ad9139e7a6cda07d12416da5311ca40944a6cebcbf4->leave($__internal_09fc10cc015ef199fd143ad9139e7a6cda07d12416da5311ca40944a6cebcbf4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6a398591c6001289c9c9b8e429f985f969207b6ac87cb8c7a9e2aff8457af0cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a398591c6001289c9c9b8e429f985f969207b6ac87cb8c7a9e2aff8457af0cd->enter($__internal_6a398591c6001289c9c9b8e429f985f969207b6ac87cb8c7a9e2aff8457af0cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_6a398591c6001289c9c9b8e429f985f969207b6ac87cb8c7a9e2aff8457af0cd->leave($__internal_6a398591c6001289c9c9b8e429f985f969207b6ac87cb8c7a9e2aff8457af0cd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"FOSUserBundle:Profile:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/var/www/html/devleagues/github/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
