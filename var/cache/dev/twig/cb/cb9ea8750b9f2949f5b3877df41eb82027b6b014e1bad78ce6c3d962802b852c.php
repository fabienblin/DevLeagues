<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_9f95aa19c1c7771e2e58239a133061b791e94490f9c59b06490f66b965ed10b7 extends Twig_Template
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
        $__internal_923e9bf0cf5169f74bb0c99fae215c5193ae9273843e43a3ffec3869153cfed1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_923e9bf0cf5169f74bb0c99fae215c5193ae9273843e43a3ffec3869153cfed1->enter($__internal_923e9bf0cf5169f74bb0c99fae215c5193ae9273843e43a3ffec3869153cfed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_923e9bf0cf5169f74bb0c99fae215c5193ae9273843e43a3ffec3869153cfed1->leave($__internal_923e9bf0cf5169f74bb0c99fae215c5193ae9273843e43a3ffec3869153cfed1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4a7b9583012d1d66702b4e63f4ad9cc2087afb067db14a258c28a37822629a0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a7b9583012d1d66702b4e63f4ad9cc2087afb067db14a258c28a37822629a0e->enter($__internal_4a7b9583012d1d66702b4e63f4ad9cc2087afb067db14a258c28a37822629a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_4a7b9583012d1d66702b4e63f4ad9cc2087afb067db14a258c28a37822629a0e->leave($__internal_4a7b9583012d1d66702b4e63f4ad9cc2087afb067db14a258c28a37822629a0e_prof);

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