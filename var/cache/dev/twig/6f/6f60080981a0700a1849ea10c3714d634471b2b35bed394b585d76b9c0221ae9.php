<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_e018e0fe0e7ebe239b5cdc5e8d8bd78f283cf08b265275bd6e12796bc99d52fb extends Twig_Template
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
        $__internal_d6e1381e477ca9ca6d09bda25f796ffa3d5f431308300fd6e7a619450f3a04ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6e1381e477ca9ca6d09bda25f796ffa3d5f431308300fd6e7a619450f3a04ee->enter($__internal_d6e1381e477ca9ca6d09bda25f796ffa3d5f431308300fd6e7a619450f3a04ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6e1381e477ca9ca6d09bda25f796ffa3d5f431308300fd6e7a619450f3a04ee->leave($__internal_d6e1381e477ca9ca6d09bda25f796ffa3d5f431308300fd6e7a619450f3a04ee_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e5ab82fbc3a3e628c101386312f4438b39a10106a42b4a2021619c5ba4103a30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5ab82fbc3a3e628c101386312f4438b39a10106a42b4a2021619c5ba4103a30->enter($__internal_e5ab82fbc3a3e628c101386312f4438b39a10106a42b4a2021619c5ba4103a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_e5ab82fbc3a3e628c101386312f4438b39a10106a42b4a2021619c5ba4103a30->leave($__internal_e5ab82fbc3a3e628c101386312f4438b39a10106a42b4a2021619c5ba4103a30_prof);

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
", "FOSUserBundle:Security:login.html.twig", "/var/www/html/devleagues/github/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
