<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_891d514e6d0da169b98dc95952012584348108145e85af736a01fe615c9dd59e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_d78f30981dd07791112b9826281896048e0034624a9448be68a91abeb2e5ed1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d78f30981dd07791112b9826281896048e0034624a9448be68a91abeb2e5ed1b->enter($__internal_d78f30981dd07791112b9826281896048e0034624a9448be68a91abeb2e5ed1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d78f30981dd07791112b9826281896048e0034624a9448be68a91abeb2e5ed1b->leave($__internal_d78f30981dd07791112b9826281896048e0034624a9448be68a91abeb2e5ed1b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_39816fb93e2dd4e105e2919b6dd5f2701f6ab1ee076179c18e920acec11f06d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39816fb93e2dd4e105e2919b6dd5f2701f6ab1ee076179c18e920acec11f06d6->enter($__internal_39816fb93e2dd4e105e2919b6dd5f2701f6ab1ee076179c18e920acec11f06d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_39816fb93e2dd4e105e2919b6dd5f2701f6ab1ee076179c18e920acec11f06d6->leave($__internal_39816fb93e2dd4e105e2919b6dd5f2701f6ab1ee076179c18e920acec11f06d6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/var/www/html/devleagues/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
