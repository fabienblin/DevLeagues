<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_fed4a06f33fd23ea6212e16b4ffac4bd8f73e6688e03d4d0bee2813c749d9961 extends Twig_Template
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
        $__internal_a73b56e11ae14d24cb387d51e59e92f4d6b08675e21d2ccff5db74b425a7f029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a73b56e11ae14d24cb387d51e59e92f4d6b08675e21d2ccff5db74b425a7f029->enter($__internal_a73b56e11ae14d24cb387d51e59e92f4d6b08675e21d2ccff5db74b425a7f029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a73b56e11ae14d24cb387d51e59e92f4d6b08675e21d2ccff5db74b425a7f029->leave($__internal_a73b56e11ae14d24cb387d51e59e92f4d6b08675e21d2ccff5db74b425a7f029_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_47ccdba33f75086706018436785440106d874b37c9ad7cc1d51d90835dfb4e8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47ccdba33f75086706018436785440106d874b37c9ad7cc1d51d90835dfb4e8f->enter($__internal_47ccdba33f75086706018436785440106d874b37c9ad7cc1d51d90835dfb4e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_47ccdba33f75086706018436785440106d874b37c9ad7cc1d51d90835dfb4e8f->leave($__internal_47ccdba33f75086706018436785440106d874b37c9ad7cc1d51d90835dfb4e8f_prof);

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
", "FOSUserBundle:Registration:register.html.twig", "/var/www/html/devleagues/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
