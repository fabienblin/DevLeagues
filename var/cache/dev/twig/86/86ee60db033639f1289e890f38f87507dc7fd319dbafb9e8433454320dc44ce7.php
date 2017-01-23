<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_b0a2979e7780a3a9358b356e87219463d7121234ac7898a55626e4e2f66bfd97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e63c79fd0ffd641bb3beed9f5b5a2cc14c2c42744902bb5dc6c9c8a2283807b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e63c79fd0ffd641bb3beed9f5b5a2cc14c2c42744902bb5dc6c9c8a2283807b2->enter($__internal_e63c79fd0ffd641bb3beed9f5b5a2cc14c2c42744902bb5dc6c9c8a2283807b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_28acaeae40a528684b90bc89452e6f132323e794b338b4c87e0b8e7b1c579db6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28acaeae40a528684b90bc89452e6f132323e794b338b4c87e0b8e7b1c579db6->enter($__internal_28acaeae40a528684b90bc89452e6f132323e794b338b4c87e0b8e7b1c579db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_e63c79fd0ffd641bb3beed9f5b5a2cc14c2c42744902bb5dc6c9c8a2283807b2->leave($__internal_e63c79fd0ffd641bb3beed9f5b5a2cc14c2c42744902bb5dc6c9c8a2283807b2_prof);

        
        $__internal_28acaeae40a528684b90bc89452e6f132323e794b338b4c87e0b8e7b1c579db6->leave($__internal_28acaeae40a528684b90bc89452e6f132323e794b338b4c87e0b8e7b1c579db6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
