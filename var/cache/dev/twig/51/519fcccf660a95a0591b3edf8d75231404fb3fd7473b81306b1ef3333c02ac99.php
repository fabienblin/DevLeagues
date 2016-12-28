<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_8c1d21066774d08630a37fd60e3744439614d78b1f6ccbaa8a9dfb2b27e2d60d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_0e53ab4eb73ef3982f30c428614b615614cf371e1824e94552fafe4bb4837f10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e53ab4eb73ef3982f30c428614b615614cf371e1824e94552fafe4bb4837f10->enter($__internal_0e53ab4eb73ef3982f30c428614b615614cf371e1824e94552fafe4bb4837f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e53ab4eb73ef3982f30c428614b615614cf371e1824e94552fafe4bb4837f10->leave($__internal_0e53ab4eb73ef3982f30c428614b615614cf371e1824e94552fafe4bb4837f10_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_30ab8bbfe811885b10d9ca5adeddfd48c044280a77395d9e4b00c1f5e6a48406 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30ab8bbfe811885b10d9ca5adeddfd48c044280a77395d9e4b00c1f5e6a48406->enter($__internal_30ab8bbfe811885b10d9ca5adeddfd48c044280a77395d9e4b00c1f5e6a48406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_30ab8bbfe811885b10d9ca5adeddfd48c044280a77395d9e4b00c1f5e6a48406->leave($__internal_30ab8bbfe811885b10d9ca5adeddfd48c044280a77395d9e4b00c1f5e6a48406_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"FOSUserBundle:Profile:show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/var/www/html/devleagues/github/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
