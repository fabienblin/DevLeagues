<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_88b441195000fa359dc513efb7507ece3e43cf38057c007f8fe76eefc62ab669 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_9757dea0346b533676dc1729863b9914e6bc7345e98f2447a730a355747f1c2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9757dea0346b533676dc1729863b9914e6bc7345e98f2447a730a355747f1c2c->enter($__internal_9757dea0346b533676dc1729863b9914e6bc7345e98f2447a730a355747f1c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9757dea0346b533676dc1729863b9914e6bc7345e98f2447a730a355747f1c2c->leave($__internal_9757dea0346b533676dc1729863b9914e6bc7345e98f2447a730a355747f1c2c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_afcaa897ab0725b93c4b8bb3620490bd68f685fc53175a4c71f268233274bbc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afcaa897ab0725b93c4b8bb3620490bd68f685fc53175a4c71f268233274bbc1->enter($__internal_afcaa897ab0725b93c4b8bb3620490bd68f685fc53175a4c71f268233274bbc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_afcaa897ab0725b93c4b8bb3620490bd68f685fc53175a4c71f268233274bbc1->leave($__internal_afcaa897ab0725b93c4b8bb3620490bd68f685fc53175a4c71f268233274bbc1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"FOSUserBundle:Group:new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/var/www/html/devleagues/github/app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
