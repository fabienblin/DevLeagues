<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_8ea09259f0fc4399ed9f50b8fc86457e287f51bf6640ca033d8836d07f27ce7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_4f6092ab79ecdd21e23daf21dda8c42954e15f2e88e746acd11e5a3f622ae1cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f6092ab79ecdd21e23daf21dda8c42954e15f2e88e746acd11e5a3f622ae1cd->enter($__internal_4f6092ab79ecdd21e23daf21dda8c42954e15f2e88e746acd11e5a3f622ae1cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_bdf1d2b7278971326fd4f31ab05cc4e77a09a66ea4233024a1110e170e08f84e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdf1d2b7278971326fd4f31ab05cc4e77a09a66ea4233024a1110e170e08f84e->enter($__internal_bdf1d2b7278971326fd4f31ab05cc4e77a09a66ea4233024a1110e170e08f84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f6092ab79ecdd21e23daf21dda8c42954e15f2e88e746acd11e5a3f622ae1cd->leave($__internal_4f6092ab79ecdd21e23daf21dda8c42954e15f2e88e746acd11e5a3f622ae1cd_prof);

        
        $__internal_bdf1d2b7278971326fd4f31ab05cc4e77a09a66ea4233024a1110e170e08f84e->leave($__internal_bdf1d2b7278971326fd4f31ab05cc4e77a09a66ea4233024a1110e170e08f84e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aac06140eda98e23df45665a3531e293e3ec390e9920009cb8f45414a438b058 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aac06140eda98e23df45665a3531e293e3ec390e9920009cb8f45414a438b058->enter($__internal_aac06140eda98e23df45665a3531e293e3ec390e9920009cb8f45414a438b058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_50a080ce924d2bd4b75a2252e71f8802c6ce2bfed33c86e6945aa0516e2b1ead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50a080ce924d2bd4b75a2252e71f8802c6ce2bfed33c86e6945aa0516e2b1ead->enter($__internal_50a080ce924d2bd4b75a2252e71f8802c6ce2bfed33c86e6945aa0516e2b1ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_50a080ce924d2bd4b75a2252e71f8802c6ce2bfed33c86e6945aa0516e2b1ead->leave($__internal_50a080ce924d2bd4b75a2252e71f8802c6ce2bfed33c86e6945aa0516e2b1ead_prof);

        
        $__internal_aac06140eda98e23df45665a3531e293e3ec390e9920009cb8f45414a438b058->leave($__internal_aac06140eda98e23df45665a3531e293e3ec390e9920009cb8f45414a438b058_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
