<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_c078ffd7ddffded061abab2f820e981c4b1780b120cdcfa47281464feca2fcce extends Twig_Template
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
        $__internal_ef89af1e448112f3ebac17fef7c22ed81bba5b9f6671e7ecf34415de80c4cbc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef89af1e448112f3ebac17fef7c22ed81bba5b9f6671e7ecf34415de80c4cbc8->enter($__internal_ef89af1e448112f3ebac17fef7c22ed81bba5b9f6671e7ecf34415de80c4cbc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_7a6c42577f4cd11ff0d25702460b92fb192c54958c6687052628796af135db4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a6c42577f4cd11ff0d25702460b92fb192c54958c6687052628796af135db4e->enter($__internal_7a6c42577f4cd11ff0d25702460b92fb192c54958c6687052628796af135db4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ef89af1e448112f3ebac17fef7c22ed81bba5b9f6671e7ecf34415de80c4cbc8->leave($__internal_ef89af1e448112f3ebac17fef7c22ed81bba5b9f6671e7ecf34415de80c4cbc8_prof);

        
        $__internal_7a6c42577f4cd11ff0d25702460b92fb192c54958c6687052628796af135db4e->leave($__internal_7a6c42577f4cd11ff0d25702460b92fb192c54958c6687052628796af135db4e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
