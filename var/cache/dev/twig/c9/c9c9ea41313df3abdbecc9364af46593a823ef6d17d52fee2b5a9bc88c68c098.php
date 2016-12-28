<?php

/* DevLeaguesBundle:League:new.html.twig */
class __TwigTemplate_3b737d7012181c2ee4477fcb157408b020b6b3c113a6ef5a2a8f4d7ee279a877 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "DevLeaguesBundle:League:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevLeaguesBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6502164aba27816ae6252d5118f2e51fbab1e8830de656cfc04dc95a7e1e12a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6502164aba27816ae6252d5118f2e51fbab1e8830de656cfc04dc95a7e1e12a3->enter($__internal_6502164aba27816ae6252d5118f2e51fbab1e8830de656cfc04dc95a7e1e12a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:League:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6502164aba27816ae6252d5118f2e51fbab1e8830de656cfc04dc95a7e1e12a3->leave($__internal_6502164aba27816ae6252d5118f2e51fbab1e8830de656cfc04dc95a7e1e12a3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a40f05f7853de8054298f3da3ddb09425d462c01c7532f4f3ff9ae222957aeee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a40f05f7853de8054298f3da3ddb09425d462c01c7532f4f3ff9ae222957aeee->enter($__internal_a40f05f7853de8054298f3da3ddb09425d462c01c7532f4f3ff9ae222957aeee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
";
        // line 5
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 7
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_a40f05f7853de8054298f3da3ddb09425d462c01c7532f4f3ff9ae222957aeee->leave($__internal_a40f05f7853de8054298f3da3ddb09425d462c01c7532f4f3ff9ae222957aeee_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:League:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"DevLeaguesBundle::base.html.twig\" %}

{% block body %}

{{ form_start(form) }}
{{ form_widget(form) }}
{{ form_end(form) }}

{% endblock %}
", "DevLeaguesBundle:League:new.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/League/new.html.twig");
    }
}
