<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_69da86b6d20ea5ea0223b071ba2c86344916558efbf33ae50751ec3207c93ed1 extends Twig_Template
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
        $__internal_6090ba2dcb8594f64cbcd7fdf95292b19d28ce121eecb56d1b1a9c5b88579129 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6090ba2dcb8594f64cbcd7fdf95292b19d28ce121eecb56d1b1a9c5b88579129->enter($__internal_6090ba2dcb8594f64cbcd7fdf95292b19d28ce121eecb56d1b1a9c5b88579129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_3dda09c892d6e446a8258e98abf65f2b56f8b9c367202d3b527ba46327ff47bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dda09c892d6e446a8258e98abf65f2b56f8b9c367202d3b527ba46327ff47bd->enter($__internal_3dda09c892d6e446a8258e98abf65f2b56f8b9c367202d3b527ba46327ff47bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_6090ba2dcb8594f64cbcd7fdf95292b19d28ce121eecb56d1b1a9c5b88579129->leave($__internal_6090ba2dcb8594f64cbcd7fdf95292b19d28ce121eecb56d1b1a9c5b88579129_prof);

        
        $__internal_3dda09c892d6e446a8258e98abf65f2b56f8b9c367202d3b527ba46327ff47bd->leave($__internal_3dda09c892d6e446a8258e98abf65f2b56f8b9c367202d3b527ba46327ff47bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
