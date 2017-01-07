<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_58ad8306e0868ec5e1da0b76cfc3b4e42f28b6b0ed90df1d702515c3f52f0908 extends Twig_Template
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
        $__internal_81ea2c7659cfa9caa10a4d777a5b97e391bf5b5de1d4fc253a14509633966520 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81ea2c7659cfa9caa10a4d777a5b97e391bf5b5de1d4fc253a14509633966520->enter($__internal_81ea2c7659cfa9caa10a4d777a5b97e391bf5b5de1d4fc253a14509633966520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_00e214b3fc3b5970c3295addb23d222c78adfd88ea71e2bd22fcacf95d6d485a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00e214b3fc3b5970c3295addb23d222c78adfd88ea71e2bd22fcacf95d6d485a->enter($__internal_00e214b3fc3b5970c3295addb23d222c78adfd88ea71e2bd22fcacf95d6d485a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_81ea2c7659cfa9caa10a4d777a5b97e391bf5b5de1d4fc253a14509633966520->leave($__internal_81ea2c7659cfa9caa10a4d777a5b97e391bf5b5de1d4fc253a14509633966520_prof);

        
        $__internal_00e214b3fc3b5970c3295addb23d222c78adfd88ea71e2bd22fcacf95d6d485a->leave($__internal_00e214b3fc3b5970c3295addb23d222c78adfd88ea71e2bd22fcacf95d6d485a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
