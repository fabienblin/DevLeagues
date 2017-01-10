<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_c10dba9ab6180ac267e2c731a8925bbeb84621897967db8333312434a1c38fe9 extends Twig_Template
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
        $__internal_57d933a75dabd8719ba9ef28ec0c2040d0e77771fae8b8702c7691b26d3e7133 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57d933a75dabd8719ba9ef28ec0c2040d0e77771fae8b8702c7691b26d3e7133->enter($__internal_57d933a75dabd8719ba9ef28ec0c2040d0e77771fae8b8702c7691b26d3e7133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_aca11be1a72eb22264e8dc9db44d63dd06e6cb25a34579a681e4552dd4557d94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aca11be1a72eb22264e8dc9db44d63dd06e6cb25a34579a681e4552dd4557d94->enter($__internal_aca11be1a72eb22264e8dc9db44d63dd06e6cb25a34579a681e4552dd4557d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_57d933a75dabd8719ba9ef28ec0c2040d0e77771fae8b8702c7691b26d3e7133->leave($__internal_57d933a75dabd8719ba9ef28ec0c2040d0e77771fae8b8702c7691b26d3e7133_prof);

        
        $__internal_aca11be1a72eb22264e8dc9db44d63dd06e6cb25a34579a681e4552dd4557d94->leave($__internal_aca11be1a72eb22264e8dc9db44d63dd06e6cb25a34579a681e4552dd4557d94_prof);

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
", "@Framework/FormTable/form_widget_compound.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
