<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_414ccde60d594fac8df717ca47d02526b5c9a2924334c235e31e09ead117c6ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_171f852e7f8633a704b89f29cc3652c73ec97b7a52821ba7c5240f484daffd82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_171f852e7f8633a704b89f29cc3652c73ec97b7a52821ba7c5240f484daffd82->enter($__internal_171f852e7f8633a704b89f29cc3652c73ec97b7a52821ba7c5240f484daffd82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_35e496a49c2f982ec7ab2028cbc197cd26266ae2b6a2a6f50ac4d281a215ad56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35e496a49c2f982ec7ab2028cbc197cd26266ae2b6a2a6f50ac4d281a215ad56->enter($__internal_35e496a49c2f982ec7ab2028cbc197cd26266ae2b6a2a6f50ac4d281a215ad56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_171f852e7f8633a704b89f29cc3652c73ec97b7a52821ba7c5240f484daffd82->leave($__internal_171f852e7f8633a704b89f29cc3652c73ec97b7a52821ba7c5240f484daffd82_prof);

        
        $__internal_35e496a49c2f982ec7ab2028cbc197cd26266ae2b6a2a6f50ac4d281a215ad56->leave($__internal_35e496a49c2f982ec7ab2028cbc197cd26266ae2b6a2a6f50ac4d281a215ad56_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_85527b02565c2d7a729507a41e08bf2534799074d582175ba2c132beaf589bff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85527b02565c2d7a729507a41e08bf2534799074d582175ba2c132beaf589bff->enter($__internal_85527b02565c2d7a729507a41e08bf2534799074d582175ba2c132beaf589bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ca67a3746c329d2bdfc58d621e4171fb1448bb54b4de5d36d3371357ee888f19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca67a3746c329d2bdfc58d621e4171fb1448bb54b4de5d36d3371357ee888f19->enter($__internal_ca67a3746c329d2bdfc58d621e4171fb1448bb54b4de5d36d3371357ee888f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_ca67a3746c329d2bdfc58d621e4171fb1448bb54b4de5d36d3371357ee888f19->leave($__internal_ca67a3746c329d2bdfc58d621e4171fb1448bb54b4de5d36d3371357ee888f19_prof);

        
        $__internal_85527b02565c2d7a729507a41e08bf2534799074d582175ba2c132beaf589bff->leave($__internal_85527b02565c2d7a729507a41e08bf2534799074d582175ba2c132beaf589bff_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
