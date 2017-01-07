<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_b0ac6ac80d57a9317930d0b2b26d17313b322f7212d65b9aed9af9c30d365212 extends Twig_Template
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
        $__internal_7c63030be9425f1feb826f82c4c54c26aedb98f39953eb42b8178c6458c1db6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c63030be9425f1feb826f82c4c54c26aedb98f39953eb42b8178c6458c1db6b->enter($__internal_7c63030be9425f1feb826f82c4c54c26aedb98f39953eb42b8178c6458c1db6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_5a0acf190559f63b7225349d77f02083c6ec172a7bdb9cb6cd624f4c6cec8969 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a0acf190559f63b7225349d77f02083c6ec172a7bdb9cb6cd624f4c6cec8969->enter($__internal_5a0acf190559f63b7225349d77f02083c6ec172a7bdb9cb6cd624f4c6cec8969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_7c63030be9425f1feb826f82c4c54c26aedb98f39953eb42b8178c6458c1db6b->leave($__internal_7c63030be9425f1feb826f82c4c54c26aedb98f39953eb42b8178c6458c1db6b_prof);

        
        $__internal_5a0acf190559f63b7225349d77f02083c6ec172a7bdb9cb6cd624f4c6cec8969->leave($__internal_5a0acf190559f63b7225349d77f02083c6ec172a7bdb9cb6cd624f4c6cec8969_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
