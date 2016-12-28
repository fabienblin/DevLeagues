<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_575c32343647d7f8be98640b4b5b30e1de88eb9b668b45c7944711ecdec09f81 extends Twig_Template
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
        $__internal_b631db48255f453a5cf06b37453f1b24a9385486f233747b4fa971d02a658c95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b631db48255f453a5cf06b37453f1b24a9385486f233747b4fa971d02a658c95->enter($__internal_b631db48255f453a5cf06b37453f1b24a9385486f233747b4fa971d02a658c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b631db48255f453a5cf06b37453f1b24a9385486f233747b4fa971d02a658c95->leave($__internal_b631db48255f453a5cf06b37453f1b24a9385486f233747b4fa971d02a658c95_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3a448d891a1ad075d42b83dcb33d6d9af8fc8e09e73be6f8ae66967730c5aefc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a448d891a1ad075d42b83dcb33d6d9af8fc8e09e73be6f8ae66967730c5aefc->enter($__internal_3a448d891a1ad075d42b83dcb33d6d9af8fc8e09e73be6f8ae66967730c5aefc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_3a448d891a1ad075d42b83dcb33d6d9af8fc8e09e73be6f8ae66967730c5aefc->leave($__internal_3a448d891a1ad075d42b83dcb33d6d9af8fc8e09e73be6f8ae66967730c5aefc_prof);

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
