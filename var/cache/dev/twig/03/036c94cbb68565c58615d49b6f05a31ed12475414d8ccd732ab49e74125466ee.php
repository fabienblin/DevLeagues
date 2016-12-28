<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_f2c325af9749cc3e1b11d34f7e2e3537b22cdb26592d12fe2ef5e13f1e4f8402 extends Twig_Template
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
        $__internal_dc3af9763d7214311f1b02a770685d8f8f528734f9959e522e9d55768cef7f9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc3af9763d7214311f1b02a770685d8f8f528734f9959e522e9d55768cef7f9b->enter($__internal_dc3af9763d7214311f1b02a770685d8f8f528734f9959e522e9d55768cef7f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_dc3af9763d7214311f1b02a770685d8f8f528734f9959e522e9d55768cef7f9b->leave($__internal_dc3af9763d7214311f1b02a770685d8f8f528734f9959e522e9d55768cef7f9b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
