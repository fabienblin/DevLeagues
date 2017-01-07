<?php

/* @SonataAdmin/Core/user_block.html.twig */
class __TwigTemplate_a1804fce6fb36e6037160b1e4e53d7aabe77970550ea5f9c2c465eb8b4ef9eb8 extends Twig_Template
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
        $__internal_43cfc640b32141613f847a20cda1038a0bceb91e0b5109b906739357d6cd13b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43cfc640b32141613f847a20cda1038a0bceb91e0b5109b906739357d6cd13b4->enter($__internal_43cfc640b32141613f847a20cda1038a0bceb91e0b5109b906739357d6cd13b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/user_block.html.twig"));

        $__internal_71dc5dfbaf49555f8a2195fa7cbcba4886e3900685d75b45139d99f410e5c8a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71dc5dfbaf49555f8a2195fa7cbcba4886e3900685d75b45139d99f410e5c8a9->enter($__internal_71dc5dfbaf49555f8a2195fa7cbcba4886e3900685d75b45139d99f410e5c8a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_43cfc640b32141613f847a20cda1038a0bceb91e0b5109b906739357d6cd13b4->leave($__internal_43cfc640b32141613f847a20cda1038a0bceb91e0b5109b906739357d6cd13b4_prof);

        
        $__internal_71dc5dfbaf49555f8a2195fa7cbcba4886e3900685d75b45139d99f410e5c8a9->leave($__internal_71dc5dfbaf49555f8a2195fa7cbcba4886e3900685d75b45139d99f410e5c8a9_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_9466a3a61f3eb9cb97733f35f115d81c59713cc44db4c7e26af0a684c0a89212 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9466a3a61f3eb9cb97733f35f115d81c59713cc44db4c7e26af0a684c0a89212->enter($__internal_9466a3a61f3eb9cb97733f35f115d81c59713cc44db4c7e26af0a684c0a89212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        $__internal_92d0c333faa3eede18d465f85a118b46d0ff9d8be4972eafe1dea0ef5f7568bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92d0c333faa3eede18d465f85a118b46d0ff9d8be4972eafe1dea0ef5f7568bc->enter($__internal_92d0c333faa3eede18d465f85a118b46d0ff9d8be4972eafe1dea0ef5f7568bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_92d0c333faa3eede18d465f85a118b46d0ff9d8be4972eafe1dea0ef5f7568bc->leave($__internal_92d0c333faa3eede18d465f85a118b46d0ff9d8be4972eafe1dea0ef5f7568bc_prof);

        
        $__internal_9466a3a61f3eb9cb97733f35f115d81c59713cc44db4c7e26af0a684c0a89212->leave($__internal_9466a3a61f3eb9cb97733f35f115d81c59713cc44db4c7e26af0a684c0a89212_prof);

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
", "@SonataAdmin/Core/user_block.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/Core/user_block.html.twig");
    }
}
