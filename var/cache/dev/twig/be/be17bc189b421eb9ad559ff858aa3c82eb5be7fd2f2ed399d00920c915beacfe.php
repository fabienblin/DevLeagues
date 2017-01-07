<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_ed93bc347eff522dbec57a8766f9f06831d904b2dfd061f55dad6e0b044dcd00 extends Twig_Template
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
        $__internal_256c4279abaa16b70450c3d40f97f55e9bbb40a36c8e98366d8a4aca519d25cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_256c4279abaa16b70450c3d40f97f55e9bbb40a36c8e98366d8a4aca519d25cc->enter($__internal_256c4279abaa16b70450c3d40f97f55e9bbb40a36c8e98366d8a4aca519d25cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_c8ef048dae7002f0bf78d027c7dcdfbd101cccc341e073eca72b5f1497bd8e5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8ef048dae7002f0bf78d027c7dcdfbd101cccc341e073eca72b5f1497bd8e5c->enter($__internal_c8ef048dae7002f0bf78d027c7dcdfbd101cccc341e073eca72b5f1497bd8e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_256c4279abaa16b70450c3d40f97f55e9bbb40a36c8e98366d8a4aca519d25cc->leave($__internal_256c4279abaa16b70450c3d40f97f55e9bbb40a36c8e98366d8a4aca519d25cc_prof);

        
        $__internal_c8ef048dae7002f0bf78d027c7dcdfbd101cccc341e073eca72b5f1497bd8e5c->leave($__internal_c8ef048dae7002f0bf78d027c7dcdfbd101cccc341e073eca72b5f1497bd8e5c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
