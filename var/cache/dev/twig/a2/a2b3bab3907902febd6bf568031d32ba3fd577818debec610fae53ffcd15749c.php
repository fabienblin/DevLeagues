<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_bc48089fa357ea6053fc2be34bfc997a78a4211fff8feb5ac91b81132f612423 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_a844421bd1b68419b3330c63b6ed320f7b7d410f38fcee2bb347fe53e6cb6a03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a844421bd1b68419b3330c63b6ed320f7b7d410f38fcee2bb347fe53e6cb6a03->enter($__internal_a844421bd1b68419b3330c63b6ed320f7b7d410f38fcee2bb347fe53e6cb6a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a844421bd1b68419b3330c63b6ed320f7b7d410f38fcee2bb347fe53e6cb6a03->leave($__internal_a844421bd1b68419b3330c63b6ed320f7b7d410f38fcee2bb347fe53e6cb6a03_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c1ddcf89cff535113cf36cf8153bcacc0ada591d0198be622294939017a1fbbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1ddcf89cff535113cf36cf8153bcacc0ada591d0198be622294939017a1fbbe->enter($__internal_c1ddcf89cff535113cf36cf8153bcacc0ada591d0198be622294939017a1fbbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_c1ddcf89cff535113cf36cf8153bcacc0ada591d0198be622294939017a1fbbe->leave($__internal_c1ddcf89cff535113cf36cf8153bcacc0ada591d0198be622294939017a1fbbe_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"FOSUserBundle:Resetting:request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/var/www/html/devleagues/github/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
