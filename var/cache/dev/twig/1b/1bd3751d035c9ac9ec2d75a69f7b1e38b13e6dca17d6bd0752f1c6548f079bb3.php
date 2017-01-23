<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_9d6da3ad9bb8c5e3c7a82b61ce225a35de7d88c1d9b88dbd143157ccc5dce56f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_4b95496d29abd2fffda75ab75716c033ffaa0a418cf40e773101c0b55660c1f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b95496d29abd2fffda75ab75716c033ffaa0a418cf40e773101c0b55660c1f0->enter($__internal_4b95496d29abd2fffda75ab75716c033ffaa0a418cf40e773101c0b55660c1f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_26e1c23e93866c234c533f5de382c3d39592c8bd43c7530fd4484ff435714c85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26e1c23e93866c234c533f5de382c3d39592c8bd43c7530fd4484ff435714c85->enter($__internal_26e1c23e93866c234c533f5de382c3d39592c8bd43c7530fd4484ff435714c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b95496d29abd2fffda75ab75716c033ffaa0a418cf40e773101c0b55660c1f0->leave($__internal_4b95496d29abd2fffda75ab75716c033ffaa0a418cf40e773101c0b55660c1f0_prof);

        
        $__internal_26e1c23e93866c234c533f5de382c3d39592c8bd43c7530fd4484ff435714c85->leave($__internal_26e1c23e93866c234c533f5de382c3d39592c8bd43c7530fd4484ff435714c85_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_369a29e809bb19116b7ae60e586d70691745cb32033935c87338facaaaf978be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_369a29e809bb19116b7ae60e586d70691745cb32033935c87338facaaaf978be->enter($__internal_369a29e809bb19116b7ae60e586d70691745cb32033935c87338facaaaf978be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9c4c9484cbd49b89f06392e693682682653abad337f8771d41787a47182c49e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c4c9484cbd49b89f06392e693682682653abad337f8771d41787a47182c49e0->enter($__internal_9c4c9484cbd49b89f06392e693682682653abad337f8771d41787a47182c49e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_9c4c9484cbd49b89f06392e693682682653abad337f8771d41787a47182c49e0->leave($__internal_9c4c9484cbd49b89f06392e693682682653abad337f8771d41787a47182c49e0_prof);

        
        $__internal_369a29e809bb19116b7ae60e586d70691745cb32033935c87338facaaaf978be->leave($__internal_369a29e809bb19116b7ae60e586d70691745cb32033935c87338facaaaf978be_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
