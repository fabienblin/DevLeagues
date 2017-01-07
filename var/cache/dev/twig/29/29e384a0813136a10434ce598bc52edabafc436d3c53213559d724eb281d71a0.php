<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_ea89820160c6096684c6766e0bfb6f3deaf1834a52bb675fdfced92623682012 extends Twig_Template
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
        $__internal_fa944cff7aae4f6ae504e6fb83465813bdf02f91635b9e6a0d86ab1ff349f6d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa944cff7aae4f6ae504e6fb83465813bdf02f91635b9e6a0d86ab1ff349f6d5->enter($__internal_fa944cff7aae4f6ae504e6fb83465813bdf02f91635b9e6a0d86ab1ff349f6d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_d01da07b0aad0ed707380fcd561422d0bffdffc665f0131ce4f5ef0a68d24177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d01da07b0aad0ed707380fcd561422d0bffdffc665f0131ce4f5ef0a68d24177->enter($__internal_d01da07b0aad0ed707380fcd561422d0bffdffc665f0131ce4f5ef0a68d24177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_fa944cff7aae4f6ae504e6fb83465813bdf02f91635b9e6a0d86ab1ff349f6d5->leave($__internal_fa944cff7aae4f6ae504e6fb83465813bdf02f91635b9e6a0d86ab1ff349f6d5_prof);

        
        $__internal_d01da07b0aad0ed707380fcd561422d0bffdffc665f0131ce4f5ef0a68d24177->leave($__internal_d01da07b0aad0ed707380fcd561422d0bffdffc665f0131ce4f5ef0a68d24177_prof);

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
", "@Framework/Form/form_widget.html.php", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
