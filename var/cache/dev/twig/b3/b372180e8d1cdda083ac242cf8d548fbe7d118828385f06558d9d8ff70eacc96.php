<?php

/* @SonataAdmin/Core/user_block.html.twig */
class __TwigTemplate_2069d52d3a1ee819d05d8e97620a60deabe23f5ee89f23e754d33b7495da9cf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d96ce083d6aa7be4c94bf6200e67abc28cf72e271145a9b0eb56b7f80aca59b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d96ce083d6aa7be4c94bf6200e67abc28cf72e271145a9b0eb56b7f80aca59b7->enter($__internal_d96ce083d6aa7be4c94bf6200e67abc28cf72e271145a9b0eb56b7f80aca59b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/user_block.html.twig"));

        $__internal_137e5858267e6ba83c46aedaa568dddac6530dbb8dc3f449f333933122461f8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_137e5858267e6ba83c46aedaa568dddac6530dbb8dc3f449f333933122461f8c->enter($__internal_137e5858267e6ba83c46aedaa568dddac6530dbb8dc3f449f333933122461f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_d96ce083d6aa7be4c94bf6200e67abc28cf72e271145a9b0eb56b7f80aca59b7->leave($__internal_d96ce083d6aa7be4c94bf6200e67abc28cf72e271145a9b0eb56b7f80aca59b7_prof);

        
        $__internal_137e5858267e6ba83c46aedaa568dddac6530dbb8dc3f449f333933122461f8c->leave($__internal_137e5858267e6ba83c46aedaa568dddac6530dbb8dc3f449f333933122461f8c_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_b2c05d8bd1146eb1010bdc6a62dd2c95440ab328b885bbb3f025a0ce403d2f16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2c05d8bd1146eb1010bdc6a62dd2c95440ab328b885bbb3f025a0ce403d2f16->enter($__internal_b2c05d8bd1146eb1010bdc6a62dd2c95440ab328b885bbb3f025a0ce403d2f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        $__internal_17b42303eeff38a92353415de444a8171292a731ae492f340c38ed44a63a46a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17b42303eeff38a92353415de444a8171292a731ae492f340c38ed44a63a46a7->enter($__internal_17b42303eeff38a92353415de444a8171292a731ae492f340c38ed44a63a46a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_17b42303eeff38a92353415de444a8171292a731ae492f340c38ed44a63a46a7->leave($__internal_17b42303eeff38a92353415de444a8171292a731ae492f340c38ed44a63a46a7_prof);

        
        $__internal_b2c05d8bd1146eb1010bdc6a62dd2c95440ab328b885bbb3f025a0ce403d2f16->leave($__internal_b2c05d8bd1146eb1010bdc6a62dd2c95440ab328b885bbb3f025a0ce403d2f16_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Core/user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block user_block %}{# Customize this value #}{% endblock %}
", "@SonataAdmin/Core/user_block.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/Core/user_block.html.twig");
    }
}
