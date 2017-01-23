<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_10c01acaf046ef6b3bae2e455811d6e111dd11e3d7a61e8f2c76a49ce22b7341 extends Twig_Template
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
        $__internal_9a8e972ea327216199edd003f957f3b3c09af1d76cc1a1e92f96ea1456eca7cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a8e972ea327216199edd003f957f3b3c09af1d76cc1a1e92f96ea1456eca7cb->enter($__internal_9a8e972ea327216199edd003f957f3b3c09af1d76cc1a1e92f96ea1456eca7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_89dd6ad8567e372d92efc16c3c6b09a2b5b00a939fe58095b9a729e278ab96c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89dd6ad8567e372d92efc16c3c6b09a2b5b00a939fe58095b9a729e278ab96c5->enter($__internal_89dd6ad8567e372d92efc16c3c6b09a2b5b00a939fe58095b9a729e278ab96c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_9a8e972ea327216199edd003f957f3b3c09af1d76cc1a1e92f96ea1456eca7cb->leave($__internal_9a8e972ea327216199edd003f957f3b3c09af1d76cc1a1e92f96ea1456eca7cb_prof);

        
        $__internal_89dd6ad8567e372d92efc16c3c6b09a2b5b00a939fe58095b9a729e278ab96c5->leave($__internal_89dd6ad8567e372d92efc16c3c6b09a2b5b00a939fe58095b9a729e278ab96c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
