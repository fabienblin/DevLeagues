<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_0288ba8e3ef9b9ca85b0ee8bde67f0411d4b5cdd26a2814c4a6729e62b205d9d extends Twig_Template
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
        $__internal_5b2b7191c7e6a9236c5a076fcf9bedc7054d830d1e2c92e7240fef6e56f8770c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b2b7191c7e6a9236c5a076fcf9bedc7054d830d1e2c92e7240fef6e56f8770c->enter($__internal_5b2b7191c7e6a9236c5a076fcf9bedc7054d830d1e2c92e7240fef6e56f8770c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b2b7191c7e6a9236c5a076fcf9bedc7054d830d1e2c92e7240fef6e56f8770c->leave($__internal_5b2b7191c7e6a9236c5a076fcf9bedc7054d830d1e2c92e7240fef6e56f8770c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_624eed0069f9d7d47d478f27ded8ea631a9b432bb508efb4a8c7848b7b9c1aa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_624eed0069f9d7d47d478f27ded8ea631a9b432bb508efb4a8c7848b7b9c1aa6->enter($__internal_624eed0069f9d7d47d478f27ded8ea631a9b432bb508efb4a8c7848b7b9c1aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_624eed0069f9d7d47d478f27ded8ea631a9b432bb508efb4a8c7848b7b9c1aa6->leave($__internal_624eed0069f9d7d47d478f27ded8ea631a9b432bb508efb4a8c7848b7b9c1aa6_prof);

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
