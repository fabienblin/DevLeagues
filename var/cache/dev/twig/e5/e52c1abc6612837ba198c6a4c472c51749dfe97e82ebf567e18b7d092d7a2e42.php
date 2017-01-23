<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_ae9b60d51d032ebe1c35e79566cfa73bbd8d970bba79c62865c4b17c02ccd077 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_c383eaaff09add5b5cc5b35746ffbb5245b2846be04fc241280a6f33b50f06a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c383eaaff09add5b5cc5b35746ffbb5245b2846be04fc241280a6f33b50f06a7->enter($__internal_c383eaaff09add5b5cc5b35746ffbb5245b2846be04fc241280a6f33b50f06a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_342fa20a9b254f26bf24d88b04210f5693be6b750a0ac0f2fe4ac134dbdef00d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_342fa20a9b254f26bf24d88b04210f5693be6b750a0ac0f2fe4ac134dbdef00d->enter($__internal_342fa20a9b254f26bf24d88b04210f5693be6b750a0ac0f2fe4ac134dbdef00d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c383eaaff09add5b5cc5b35746ffbb5245b2846be04fc241280a6f33b50f06a7->leave($__internal_c383eaaff09add5b5cc5b35746ffbb5245b2846be04fc241280a6f33b50f06a7_prof);

        
        $__internal_342fa20a9b254f26bf24d88b04210f5693be6b750a0ac0f2fe4ac134dbdef00d->leave($__internal_342fa20a9b254f26bf24d88b04210f5693be6b750a0ac0f2fe4ac134dbdef00d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_06a8e5b1fa945aaa285f088892e9d8daabb801cd274ee90923bea4022adfdd02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06a8e5b1fa945aaa285f088892e9d8daabb801cd274ee90923bea4022adfdd02->enter($__internal_06a8e5b1fa945aaa285f088892e9d8daabb801cd274ee90923bea4022adfdd02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9d14c423c30375e588f1d73fdbb476ccf70fd5eca15e3cc2362bc6fe015bb36e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d14c423c30375e588f1d73fdbb476ccf70fd5eca15e3cc2362bc6fe015bb36e->enter($__internal_9d14c423c30375e588f1d73fdbb476ccf70fd5eca15e3cc2362bc6fe015bb36e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_9d14c423c30375e588f1d73fdbb476ccf70fd5eca15e3cc2362bc6fe015bb36e->leave($__internal_9d14c423c30375e588f1d73fdbb476ccf70fd5eca15e3cc2362bc6fe015bb36e_prof);

        
        $__internal_06a8e5b1fa945aaa285f088892e9d8daabb801cd274ee90923bea4022adfdd02->leave($__internal_06a8e5b1fa945aaa285f088892e9d8daabb801cd274ee90923bea4022adfdd02_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
