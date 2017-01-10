<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_0c30e6cf2f4427a743b53c592d263347d9dd0c66800937b7aa58777fd5bfede7 extends Twig_Template
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
        $__internal_fa35c0b5e18cf7eb4c3ebf72e286233ae1622907470c9faa56bcca60372b8e11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa35c0b5e18cf7eb4c3ebf72e286233ae1622907470c9faa56bcca60372b8e11->enter($__internal_fa35c0b5e18cf7eb4c3ebf72e286233ae1622907470c9faa56bcca60372b8e11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_de0d87db7e8086a6fb6076e051f00b54566701f8daec511a53bce2cc6ac5369f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de0d87db7e8086a6fb6076e051f00b54566701f8daec511a53bce2cc6ac5369f->enter($__internal_de0d87db7e8086a6fb6076e051f00b54566701f8daec511a53bce2cc6ac5369f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_fa35c0b5e18cf7eb4c3ebf72e286233ae1622907470c9faa56bcca60372b8e11->leave($__internal_fa35c0b5e18cf7eb4c3ebf72e286233ae1622907470c9faa56bcca60372b8e11_prof);

        
        $__internal_de0d87db7e8086a6fb6076e051f00b54566701f8daec511a53bce2cc6ac5369f->leave($__internal_de0d87db7e8086a6fb6076e051f00b54566701f8daec511a53bce2cc6ac5369f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
