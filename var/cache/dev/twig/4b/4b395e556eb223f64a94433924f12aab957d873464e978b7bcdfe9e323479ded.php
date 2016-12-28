<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_060ad737a22802ebbbb1dd1c6a30ad1553e3e9e90ddbdb6e5411bf157881f7fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_921201358daf0d2cbc09fbd12434d758669db0d5075483c4430995a824674b5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_921201358daf0d2cbc09fbd12434d758669db0d5075483c4430995a824674b5c->enter($__internal_921201358daf0d2cbc09fbd12434d758669db0d5075483c4430995a824674b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_921201358daf0d2cbc09fbd12434d758669db0d5075483c4430995a824674b5c->leave($__internal_921201358daf0d2cbc09fbd12434d758669db0d5075483c4430995a824674b5c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_657d25be4fa3aa864dfe0bf0c1e356a5ac79f099e0b874fcc8ee9c42d7f71277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_657d25be4fa3aa864dfe0bf0c1e356a5ac79f099e0b874fcc8ee9c42d7f71277->enter($__internal_657d25be4fa3aa864dfe0bf0c1e356a5ac79f099e0b874fcc8ee9c42d7f71277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_657d25be4fa3aa864dfe0bf0c1e356a5ac79f099e0b874fcc8ee9c42d7f71277->leave($__internal_657d25be4fa3aa864dfe0bf0c1e356a5ac79f099e0b874fcc8ee9c42d7f71277_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"FOSUserBundle:Group:edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/var/www/html/devleagues/github/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
