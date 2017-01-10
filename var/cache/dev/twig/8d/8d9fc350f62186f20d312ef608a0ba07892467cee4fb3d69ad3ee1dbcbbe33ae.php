<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_02979574aab76b665b34329ed91884867c9872ef73a13c85f7605c0259ecf5f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_b41ea2bfc85d8822eb7a4e310b041d1dab36a0af74114c07a4a08a3cefe0ed7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b41ea2bfc85d8822eb7a4e310b041d1dab36a0af74114c07a4a08a3cefe0ed7e->enter($__internal_b41ea2bfc85d8822eb7a4e310b041d1dab36a0af74114c07a4a08a3cefe0ed7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_508cef30ff25fd68ef978b9ce6b8b74e799c77f485da5874ef3693c0e0dcc9e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_508cef30ff25fd68ef978b9ce6b8b74e799c77f485da5874ef3693c0e0dcc9e5->enter($__internal_508cef30ff25fd68ef978b9ce6b8b74e799c77f485da5874ef3693c0e0dcc9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b41ea2bfc85d8822eb7a4e310b041d1dab36a0af74114c07a4a08a3cefe0ed7e->leave($__internal_b41ea2bfc85d8822eb7a4e310b041d1dab36a0af74114c07a4a08a3cefe0ed7e_prof);

        
        $__internal_508cef30ff25fd68ef978b9ce6b8b74e799c77f485da5874ef3693c0e0dcc9e5->leave($__internal_508cef30ff25fd68ef978b9ce6b8b74e799c77f485da5874ef3693c0e0dcc9e5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ba7a000c8cb25bf14a2f200de39d37995266a1ba5fd922b5d2dfc4503d713456 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba7a000c8cb25bf14a2f200de39d37995266a1ba5fd922b5d2dfc4503d713456->enter($__internal_ba7a000c8cb25bf14a2f200de39d37995266a1ba5fd922b5d2dfc4503d713456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bf59b4e5257110631b37f33cab972b5039169957df21fefde4962d3b8e7312d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf59b4e5257110631b37f33cab972b5039169957df21fefde4962d3b8e7312d4->enter($__internal_bf59b4e5257110631b37f33cab972b5039169957df21fefde4962d3b8e7312d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_bf59b4e5257110631b37f33cab972b5039169957df21fefde4962d3b8e7312d4->leave($__internal_bf59b4e5257110631b37f33cab972b5039169957df21fefde4962d3b8e7312d4_prof);

        
        $__internal_ba7a000c8cb25bf14a2f200de39d37995266a1ba5fd922b5d2dfc4503d713456->leave($__internal_ba7a000c8cb25bf14a2f200de39d37995266a1ba5fd922b5d2dfc4503d713456_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
