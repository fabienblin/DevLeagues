<?php

/* @SonataAdmin/Core/user_block.html.twig */
class __TwigTemplate_b691feb47fff27bf80eadd41588a212b9bb36681053c01b4a45905779ccdbeb5 extends Twig_Template
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
        $__internal_97276a8692a2d7c94900600b648af0760b5fdb1b989222050de8efa8c795b946 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97276a8692a2d7c94900600b648af0760b5fdb1b989222050de8efa8c795b946->enter($__internal_97276a8692a2d7c94900600b648af0760b5fdb1b989222050de8efa8c795b946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/user_block.html.twig"));

        $__internal_f3a2791d71d3172b0dcae6fef57e1a0c2cc28e35475f8c0b56f2df0cde2834bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3a2791d71d3172b0dcae6fef57e1a0c2cc28e35475f8c0b56f2df0cde2834bd->enter($__internal_f3a2791d71d3172b0dcae6fef57e1a0c2cc28e35475f8c0b56f2df0cde2834bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/user_block.html.twig"));

        // line 1
        $this->displayBlock('user_block', $context, $blocks);
        
        $__internal_97276a8692a2d7c94900600b648af0760b5fdb1b989222050de8efa8c795b946->leave($__internal_97276a8692a2d7c94900600b648af0760b5fdb1b989222050de8efa8c795b946_prof);

        
        $__internal_f3a2791d71d3172b0dcae6fef57e1a0c2cc28e35475f8c0b56f2df0cde2834bd->leave($__internal_f3a2791d71d3172b0dcae6fef57e1a0c2cc28e35475f8c0b56f2df0cde2834bd_prof);

    }

    public function block_user_block($context, array $blocks = array())
    {
        $__internal_58c9eaaa45b056a46acd7fc91ef42bd794d62715c458bf18f70d3a32f6a21c25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58c9eaaa45b056a46acd7fc91ef42bd794d62715c458bf18f70d3a32f6a21c25->enter($__internal_58c9eaaa45b056a46acd7fc91ef42bd794d62715c458bf18f70d3a32f6a21c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        $__internal_2c0e9157037e1e8b9dad2ce58d24fde4b8832d127953a2bbfc6a78694aee6a7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c0e9157037e1e8b9dad2ce58d24fde4b8832d127953a2bbfc6a78694aee6a7c->enter($__internal_2c0e9157037e1e8b9dad2ce58d24fde4b8832d127953a2bbfc6a78694aee6a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_block"));

        
        $__internal_2c0e9157037e1e8b9dad2ce58d24fde4b8832d127953a2bbfc6a78694aee6a7c->leave($__internal_2c0e9157037e1e8b9dad2ce58d24fde4b8832d127953a2bbfc6a78694aee6a7c_prof);

        
        $__internal_58c9eaaa45b056a46acd7fc91ef42bd794d62715c458bf18f70d3a32f6a21c25->leave($__internal_58c9eaaa45b056a46acd7fc91ef42bd794d62715c458bf18f70d3a32f6a21c25_prof);

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
